"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var gutenify_bizRedirectToKitPage = function gutenify_bizRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.gutenify_biz.gutenify_kit_gallery); // }
  }; // Activate Gutenify.


  $(document).on('click', '.gutenify-biz-activate-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-biz-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins/gutenify/gutenify',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      gutenify_bizRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_bizRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-biz-install-gutenify', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('gutenify-biz-importing-gutenify');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "gutenify",
        "status": "active"
      }
    }).then(function (res) {
      gutenify_bizRedirectToKitPage(res);
    })["catch"](function () {
      gutenify_bizRedirectToKitPage({});
    });
  });
  $(document).on('click', '.gutenify-biz-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=gutenify_biz_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=gutenify_biz_hide_theme_info_noticebar&gutenify_biz-nonce-name=".concat(window.gutenify_biz.gutenify_biz_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});
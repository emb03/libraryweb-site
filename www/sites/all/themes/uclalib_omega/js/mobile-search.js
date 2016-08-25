(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.topbarSearch = {
    isOpen: false,
    attach: function (context) {
      var bar = this,
      $context = $(context);
      bar.$top = $context.find('.l-header');
      bar.$search = bar.$top.find('.pane-search-form');
      bar.$top.on("click", ".mobile-search-trigger", function() {
        bar.toggle();
      });
    },
    toggle: function (context) {
      var bar = this;
      if (bar.isOpen) {
        bar.$search.removeClass('is-open');
        bar.isOpen = false;
      }
      else {
        bar.$search.addClass('is-open');
        bar.$search.find('.form-text').focus();
        bar.isOpen = true;

        if(Drupal.behaviors.mobileNav && Drupal.behaviors.mobileNav.isOpen) {
          Drupal.behaviors.mobileNav.toggle();
        }
      }
    },
  };
})(jQuery, Drupal);

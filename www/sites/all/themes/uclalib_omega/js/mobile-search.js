(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.topbarSearch = {
    isOpen: false,
    attach: function (context) {
      var bar = this,
      $context = $(context);
      bar.$body = $('body');
      bar.$top = $context.find('.l-header');
      bar.$search = bar.$top.find('.pane-search-form');
      bar.$text = bar.$search.find('.form-text');

      bar.$top.on("click", ".mobile-search-trigger", function() {
        bar.toggle();
      });
    },
    toggle: function (context) {
      var bar = this;
      if (bar.isOpen) {
        bar.$search.removeClass('is-open');
        bar.$body.removeClass('has-search-open');
        bar.isOpen = false;
      }
      else {
        bar.$search.addClass('is-open');
        bar.$body.addClass('has-search-open');
        bar.$text.focus();
        bar.isOpen = true;

        if(Drupal.behaviors.mobileNav && Drupal.behaviors.mobileNav.isOpen) {
          Drupal.behaviors.mobileNav.toggle();
        }
      }
    },
  };
})(jQuery, Drupal);

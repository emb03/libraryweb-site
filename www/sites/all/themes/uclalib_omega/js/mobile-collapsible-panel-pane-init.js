(function ($) {
  Drupal.behaviors.mobileCollapsiblePanelPane = {
    attach: function (context, settings) {
      $(context).find('.panel-pane.mobile-collapsible').mobileCollapsible({
          breakpoint: "(max-width: 480px)",
          titleSelector: ".pane-title",
          contentSelector: ".pane-content"
      });
    }
  };
}(jQuery));

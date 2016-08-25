(function ($) {
  Drupal.behaviors.mobileCollapsiblePanelPane = {
    attach: function (context, settings) {
      $(context).find('.panel-pane.mobile-collapsible').mobileCollapsible({
          breakpoint: "(max-width: 600px)",
          titleSelector: ".pane-title",
          contentSelector: ".pane-content"
      });
    }
  };
}(jQuery));

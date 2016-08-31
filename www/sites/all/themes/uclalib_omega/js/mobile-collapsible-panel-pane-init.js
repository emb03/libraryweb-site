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

  // Fallback for panelized nodes that do not have the collapsible class
  // on the uclalib_nav sidebar block.
  Drupal.behaviors.mobileCollapsibleSideNav = {
    attach: function (context, settings) {
      $(context).find('.pane-uclalib-nav:not(.mobile-collapsible)').addClass('mobile-collapsible').mobileCollapsible({
          breakpoint: "(max-width: 767px)",
          titleSelector: ".pane-title",
          contentSelector: ".pane-content"
      }).addClass('mobile-collapsible-processed');

      // If the top-level page in sidebar nav is the active page, then change
      // the style to the darker blue dropdown.
      $(context).find('.pane-uclalib-nav .pane-title a.active').closest('.pane-uclalib-nav').addClass('mobile-collapsible--blue');
    }
  };
}(jQuery));

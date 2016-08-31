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

  // Make link list panes in main content column collapsible on mobile.
  Drupal.behaviors.mobileCollapsibleLinkList = {
    attach: function (context, settings) {
      $(context).find('.pane-bean-link-list:not(.sidebar-tier-2)').addClass('mobile-collapsible').mobileCollapsible({
        breakpoint: "(max-width: 767px)",
        titleSelector: ".pane-title",
        contentSelector: ".pane-content"
      });
    }
  };

  // Make quick find panes collapsible on mobile.
  Drupal.behaviors.mobileCollapsibleQuickFind = {
    attach: function (context, settings) {
      $(context).find('.pane-bean-quick-find').addClass('mobile-collapsible').addClass('mobile-collapsible--blue').mobileCollapsible({
        breakpoint: "(max-width: 767px)",
        titleSelector: ".pane-title",
        contentSelector: ".pane-content"
      });
    }
  };
}(jQuery));

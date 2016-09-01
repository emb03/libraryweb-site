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

  // Group the multiple individually collapsible sidebar facets into a single
  // collapsible "Search Facets" item for mobile.
  Drupal.behaviors.mobileCollapsibleSearchFacets = {
    attach: function (context, settings) {
      $options = $(context).find('.l-region--sidebar-left .sidebar-options');

      if ($options.length > 1) {
        // prepend a wrapper before the first sidebar-option which will be used
        // as the container to place all sidebar options in.
        $el = '<div class="js-sidebar-options-wrapper"><div class="js-pane-content pane-content"></div></div>';
        $options.wrapAll($el);

        // Add a clickable title.
        $('.js-sidebar-options-wrapper').prepend('<h2 class="js-pane-title pane-title">'+ Drupal.t('Search filters')+'</h2>');

        // remove options from dom and move them inside the wrapper.
        $('.js-sidebar-options-wrapper').addClass('mobile-collapsible mobile-collapsible--title-hidden-on-desktop').mobileCollapsible({
          breakpoint: "(max-width: 767px)",
          titleSelector: "> .pane-title",
          contentSelector: "> .pane-content"
        });
      }
    }
  };

}(jQuery));

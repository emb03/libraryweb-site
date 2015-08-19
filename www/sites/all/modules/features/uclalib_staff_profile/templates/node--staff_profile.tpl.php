<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Article" it would result in "node-article". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. page, article, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
dpm($variables);
drupal_set_title(t('Staff Directory'));


//This page added by EB
?>


<div class="panel-pane pane-custom pane-1 pane-style-background-grayone">




  <div class="panel-pane pane-bean-showcase pane-bean-sample-image-showcase">


<!--EB added, can we use field groups or field collections instead?-->
    <h2 class="pane-title left"><strong>
        <?php echo render($content['field_staff_first_name']);?>
        <?php echo render($content['field_staff_middle_name']);?>
        <?php echo render($content['field_staff_last_name']);?>

</strong></h2>
    <h3 class="pane-title left"><strong> <?php echo render($content['field_staff_job_title']);?></strong></h3>


    <div class="pane-content">
      <div class="entity entity-bean bean-showcase clearfix">

        <div class="content">
          <div class="field__items clearfix">
            <div class="field__item one">
              <div class="field-collection-view clearfix view-mode-full">

                <div class="field field--name-field-showcase-image field--type-image field--label-hidden"><div class="field__items">

                    <div class="field__item even"><img width="400" height="400" <?php echo render($content['field_staff_image_thumbnail']);?></div>
                    <div class="field field--name-field-showcase-image field--type-image field--label-hidden"><div class="field__items">

                        <!--try this-->
                        <div class="contact">
                          <div class="field__item even">
                            <br />
                            Phone:
                            <?php echo render($content['field_staff_phone']);?><br />
                            email: <?php echo render($content['field_staff_email']);?><br />
                            <?php echo render($content['field_staff_location']);?> <br />


                          <br />

                          <div class="field field--name-field-showcase-image field--type-image field--label-hidden"><div class="field__items">
                              <div class="field__item even"><div class="field__items"><div class="field__item even">

                                    <?php $content['field_staff_acad_dept_liaison']['#label_display'] = 'hidden';
                                    print '<strong>Department</strong>'; // change to any HTML
                                    print render($content['field_staff_acad_dept_liaison']);

                                    ?>


                                      <div class="field__items"><a href="#"><img class="social-link social-link-facebook" src="all/modules/features/uclalib_location/social_icons/facebook-32-black.png"></a></div><a href="#"><img class="social-link social-link-twitter" src="all/modules/features/uclalib_location/social_icons/twitter-32-black.png"></a>

                                      <!--try this!-->

                                    </div></div></div></div></div>
                          </div></div></div></div></div>
                </div></div></div>


          <div class="field__item two">
<ul>

              <?php $content['field_staff_area_of_expertise']['#label_display'] = 'hidden';
              print '<strong>Ask me about</strong>'; // change to any HTML
              print render($content['field_staff_area_of_expertise']);

             ?>

            </ul>

            <ul>

              <?php $content['field_staff_acad_dept_liaison']['#label_display'] = 'hidden';
              print '<strong>Department Liason</strong>'; // change to any HTML
              print render($content['field_staff_acad_dept_liaison']);

              ?>

</ul>

            <strong>Biography</strong><br />
            In that sloping afternoon sunlight, the shadows that the three boats sent down beneath the surface, must have been long enough and broad enough to shade half Xerxes' army. Who can tell how appalling to the wounded whale must have been such huge phantoms flitting over his head!</p>

            <p>"Stand by, men; he stirs," cried Starbuck, as the three lines suddenly vibrated in the water, distinctly conducting upwards to them, as by magnetic wires, the life and death throbs of the whale, so that every oarsman felt them in his seat. The next moment, relieved in great part from the downward strain at the bows, the boats gave a sudden bounce upwards, as a small icefield will, when a dense herd of white bears are scared from it into the sea.</p>
          </div></div></div></div></div></div></div>
</div>



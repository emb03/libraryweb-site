<!--tried to make this a preprocess function had no luck, this pertains to
fulltext search results-->
<?php foreach ($items as $delta => $item) : ?>

<?php // drupal_set_message('<pre>' . print_r(array_keys($fields), TRUE) .'</pre>'); ?>
  <div style="display:inline;" class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>>
    <?php
    print render($item);
    // Add 'and' if not last item
    if ($delta < (count($items) - 1)) {
      print ' and ';
    }
    ?>
</div>
<?php endforeach; ?>
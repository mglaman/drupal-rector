<?php

use \Drupal\Core\Entity\Element\EntityAutocomplete;
function full_example() {
    $vids = \Drupal::entityQuery('taxonomy_vocabulary')->execute();

    $terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadByProperties(['name' => 'Foo', 'vid' => 'topics']);

    $url = taxonomy_term_uri($term);

    \Drupal::entityTypeManager()->getStorage('taxonomy_term')->resetCache();

    \Drupal::entityTypeManager()->getStorage('taxonomy_vocabulary')->resetCache($vids);

    EntityAutocomplete::getEntityLabels();

    $name = $term->label();

    \Drupal::entityTypeManager()->getStorage('taxonomy_vocabulary')->resetCache();
}

?>

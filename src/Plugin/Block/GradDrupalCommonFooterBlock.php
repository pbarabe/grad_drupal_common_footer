<?php

namespace Drupal\grad_drupal_common_footer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Grad Footer Block with common links
 *
 * @Block(
 *   id = "grad_common_footer_block",
 *   admin_label = @Translation("Grad Common Footer")
 * )
 */
class GradDrupalCommonFooterBlock extends BlockBase {

/**
 * {@inheritdoc}
 */
public function build() {
  return [
    '#theme' => 'grad_drupal_common_footer'
  ];

}

}

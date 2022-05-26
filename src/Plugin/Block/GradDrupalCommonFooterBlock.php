<?php

namespace Drupal\grad_drupal_common_footer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Grad Footer Block with common links
 *
 * @Block(
 *   id = "grad_common_block",
 *   admin_label = @Translation("Grad Common Footer")
 * )
 */
class GradDrupalCommonFooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#type' => 'markup',
      '#markup' => '<div class="content h-100 row d-flex flex-wrap field field--name-field-az-cards field--type-az-card field--label-hidden field__items">
  <div class="col-12 col-sm-12 col-md-4 col-lg-4 pb-4 field__item">

    <div class="card card-borderless bg-transparent h-100">
      <div class="card-body d-flex flex-column">
        <div class="card-text"><p class="text-align-center"><a href="https://grad.arizona.edu/catalog">Graduate Catalog</a><br>
            <a href="https://grad.arizona.edu/admissions">Graduate Admissions</a><br>
            <a href="https://grad.arizona.edu/gsas">Graduate Student Academic Services</a><br>
            <a href="https://grad.arizona.edu/funding">Funding Resources</a></p>
        </div>
        <div class="mt-auto"></div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-12 col-md-4 col-lg-4 pb-4 field__item">

    <div class="card card-borderless bg-transparent h-100">
      <div class="card-body d-flex flex-column">
        <div class="card-text"><p class="text-align-center"><a href="https://gradcenter.arizona.edu/">The Graduate Center</a><br>
            <a href="https://apply.grad.arizona.edu/">GradApp (Future Students)</a><br>
            <a href="https://grad.arizona.edu/gradpath">GradPath (Current Students)</a></p>
        </div>
        <div class="mt-auto"></div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-12 col-md-4 col-lg-4 pb-4 field__item">

    <div class="card card-borderless bg-transparent h-100">
      <div class="card-body d-flex flex-column">
        <div class="card-text"><p class="text-align-center"><a href="https://grad.arizona.edu/policies">Policies</a><br>
            <a href="https://grad.arizona.edu/equity">Commitment to Equity</a><br>
            <a href="https://grad.arizona.edu/tools/directory">Contact Us</a></p>
        </div>
        <div class="mt-auto"></div>
      </div>
    </div>
  </div>
</div>'
    ];
  }

}

<?php
$rating = get_field('rating');
$photo = get_field('photo');
$name = get_field('name');
$review = get_field('review');

$block_classes = 'acf-customer-rating ' . (!empty($block['className']) ? esc_attr($block['className']) : '');
?>

<section class="<?php echo esc_attr($block_classes); ?>">
  <?php if(!empty($photo)): ?>
    <div class="customer-photo">
      <?php echo wp_get_attachment_image( $photo, "full" ); ?>
    </div>
  <?php endif; ?>
  <div class="customer-score">
    <p><span class="customer-score__value"><?php echo esc_html($rating); ?></span> out of <span class="customer-score__total">5</span></p>
  </div>
  <?php if(!empty($name)): ?>
    <h3 class="customer-name">
      <?php echo esc_html($name); ?>
    </h3>
  <?php endif; ?>
  <div class="customer-review">
    <?php echo esc_html($review); ?>
  </div>
</section>
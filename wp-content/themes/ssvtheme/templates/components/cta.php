<?php

/**
 * cta Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Create class attribute allowing for custom "className" and "align" values.
$className = 'cta';
if( !empty($block['className']) ) {
    print_r($className);
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$link = get_field('link') ?: 'Your link here...';
$body = get_field('body') ?: 'This is body';
$title = get_field('title') ?: 'This is title';
?>

<div class="padding-component cta text--center <?php echo esc_attr($className); ?>">
  <div class="container">
    <h2 class="cta__title"><?php echo $title; ?></h2>
    <div class="cta__body"><?php echo $body; ?></div>
    <div class="cta__link">
        <a href="<?php echo $link['url'];?>" class="btn"><span><?php echo $link['title']; ?></span></a>
    </div>
  </div>
</div>

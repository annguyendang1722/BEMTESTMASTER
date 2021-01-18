<?php

/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>
<div id="<?php echo esc_attr($id); ?>" class="hero <?php echo esc_attr($className); ?>">
    <?php if( have_rows('hero_item') ):  while( have_rows('hero_item') ) : the_row();
        // Load values and assign defaults.
        $title = get_sub_field('title')?: 'Hero title';
        $body = get_sub_field('body')?: 'Hero body';
        $link = get_sub_field('link')?: 'https://www.sentiusdigital.com/';
        $image = get_sub_field('image');
    ?>
    <div class="hero__item">
        <div class="hero__image"><?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?></div>
        <div class="hero__content">
            <h2 class="hero__title"><?php echo $title; ?></h2>
            <div class="hero__body"><?php echo $body; ?></div>
            <!-- <div class="hero__link"><?php echo $link; ?></div> -->
        </div>
    </div>
    <?php endwhile; endif; ?>
</div>

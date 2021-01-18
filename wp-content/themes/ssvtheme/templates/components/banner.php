<?php

/**
 * banner Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
// $id = 'banner-' . $block['id'];
// if( !empty($block['anchor']) ) {
//     $id = $block['anchor'];
// }

// Create class attribute allowing for custom "className" and "align" values.
$className = 'banner';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>
<div class="banner js-slider <?php echo esc_attr($className); ?>">
    <?php if( have_rows('items') ):  while( have_rows('items') ) : the_row();
        // Load values and assign defaults.
        $title = get_sub_field('title');
        $body = get_sub_field('body');
        $link = get_sub_field('link');
        $image = get_sub_field('image');
    ?>
    <div class="banner__item">
        <div class="banner__image"><?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?></div>
        <div class="banner__wrap">
            <div class="container">
                <?php if($body): ?>
                    <div class="banner__body">
                        <div class="banner__content">
                            <h2 class="text--orange banner__title"><?php echo $title; ?></h2>
                            
                            <div class="banner__description text--large"><?php echo $body; ?></div>
                            
                            <?php if($link): ?>
                            <div class="banner__link">
                                <a href="<?php echo $link['url'];?>" class="btn"><span><?php echo $link['title']; ?></span></a>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="best-advice hidden-on-mobile">
                            <a href="#">best advice. never beaten on price</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endwhile; endif; ?>
</div>

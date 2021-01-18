<?php

/**
 * gct Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Create class attribute allowing for custom "className" and "align" values.
$className = 'gct';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>
<div class="gct <?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="gct__list">
            <?php if( have_rows('items') ):  while( have_rows('items') ) : the_row();
                // Load values and assign defaults.
                $title = get_sub_field('title')?: 'gct title';
                $body = get_sub_field('body')?: 'gct body';
                $link = get_sub_field('link');
                $image = get_sub_field('image');
            ?>
            <div class="gct__item">
                <div class="gct__image"><?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?></div>

                <div class="gct__body">
                    <h3 class="gct__title"><?php echo $title; ?></h3>

                    <div class="gct__content"> <?php echo $body; ?></div>
                    <?php if($link): ?>
                    <div class="gct__link">
                        <a href="<?php echo $link['url'];?>" class="btn btn--orange"><span><?php echo $link['title']; ?></span></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

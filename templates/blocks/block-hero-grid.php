<?php
$images = get_field('hero_gallery');

if ($images) :
?>
<div class="grid-container">
    <div class="max-height--300px grid-item expand-horizontal--two-col__left">
        <img src="<?php echo esc_url($images[0]['url']); ?>" alt="<?php echo esc_attr($images[0]['alt']); ?>" />
    </div>
    <div class="max-height--300px grid-item expand-horizontal--two-col__right">
        <img src="<?php echo esc_url($images[1]['url']); ?>" alt="<?php echo esc_attr($images[1]['alt']); ?>" />
    </div>
    <div class="max-height--300px grid-item expand-horizontal-on-mobile--two-col__left">
        <img src="<?php echo esc_url($images[2]['url']); ?>" alt="<?php echo esc_attr($images[2]['alt']); ?>" />
    </div>
    <div class="bg-yellow padding--40 max-height--600px grid-item expand-vertical expand-horizontal--two-col__center align-items-center full-width-on-mobile">
        <div class="text-align-center has-x-large-font-size font-style--italic max-width--900"><?php echo get_field('hero_copy'); ?></div>
    </div>
    <div class="max-height--300px grid-item expand-horizontal-on-mobile--two-col__right">
        <img src="<?php echo esc_url($images[3]['url']); ?>" alt="<?php echo esc_attr($images[3]['alt']); ?>" />
    </div>
    <div class="max-height--300px grid-item expand-horizontal-on-mobile--two-col__left">
        <img src="<?php echo esc_url($images[4]['url']); ?>" alt="<?php echo esc_attr($images[4]['alt']); ?>" />
    </div>
    <div class="max-height--300px grid-item expand-horizontal-on-mobile--two-col__right">
        <img src="<?php echo esc_url($images[5]['url']); ?>" alt="<?php echo esc_attr($images[5]['alt']); ?>" />
    </div>
    <div class="max-height--300px grid-item expand-horizontal--two-col__left">
        <img src="<?php echo esc_url($images[6]['url']); ?>" alt="<?php echo esc_attr($images[6]['alt']); ?>" />
    </div>
    <div class="max-height--300px grid-item expand-horizontal--two-col__right">
        <img src="<?php echo esc_url($images[7]['url']); ?>" alt="<?php echo esc_attr($images[7]['alt']); ?>" />
    </div>
    
</div>
<?php endif; ?>
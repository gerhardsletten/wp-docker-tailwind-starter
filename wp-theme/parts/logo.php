<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
if ($custom_logo_id) {
  $image = wp_get_attachment_image(
    $custom_logo_id,
    'full',
    false,
    array(
      'width' => get_theme_mod( 'custom_logo_width', '268' ),
      'height' => get_theme_mod( 'custom_logo_height', '150' ),
      'class' => 'block w-full'
    )
  );
  echo $image;
} else {
  echo get_bloginfo( 'name' );
}

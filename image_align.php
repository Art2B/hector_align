<?php
$align_prefix = '_aai_';

add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
function add_featured_image_instruction( $content ) {
  $content .= '<h3>Image Align: </h3><select name="select"><option value="value1">Valeur 1</option><option value="value2" selected>Valeur 2</option><option value="value3">Valeur 3</option></select>';
  return $content;
}
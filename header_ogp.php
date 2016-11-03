<meta property="og:type" content="blog">
<?php
if (is_single()){
if(have_posts()): while(have_posts()): the_post();
  echo '<meta property="og:description" content="'.mb_substr(get_the_excerpt(), 0, 100).'">';echo "\n";
endwhile; endif;
  echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";
  echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";
} else {
  echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";
  echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";
  echo '<meta property="og:url" content="'; bloginfo('url'); echo '">';echo "\n";
}
$str = $post->post_content;
$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
if (is_single()){
  if (has_post_thumbnail()){
    $image_id = get_post_thumbnail_id();
    $image = wp_get_attachment_image_src( $image_id, 'full');
    echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
  } else if ( preg_match( $searchPattern, $str, $imgurl ) && !is_archive()) {
    echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
  } else {
    $ogp_image = get_template_directory_uri().'/images/og-image.jpg';
    echo '<meta property="og:image" content="'.$ogp_image.'">';echo "\n";
  }
} else {
  if (get_header_image()){
    echo '<meta property="og:image" content="'.get_header_image().'">';echo "\n";
  } else {
    echo '<meta property="og:image" content="'.get_template_directory_uri().'/screenshot.png">';echo "\n";
  }
}
?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:locale" content="ja_JP" />
<meta property="fb:app_id" content="1065873523504467">

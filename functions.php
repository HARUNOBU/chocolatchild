<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

if ( ! isset( $content_width ) ) {
    $content_width = 1080;
}

//関数　add_custompost_type　を定義　(関数名は任意の名前でOK)
function add_custompost_type() {

	$args = array(
		'label' => '新着情報・お知らせ',//管理画面の左メニューに表示される名前
		'labels' => array(
			'singular_name' => '新着情報・お知らせ',//この投稿タイプの名前
			'add_new' => '新規追加',//デフォルトの「add new」の代わりに表示するテキスト(以下省略)
			'add_new_item' => '新着情報・お知らせを追加',//add new itemテキスト
			'edit_item' => '新着情報・お知らせを編集',//edit itemテキスト
			'new_item' => '新しい新着情報・お知らせ',//new itemテキスト
			'view_item' => '新着情報・お知らせを表示',//view itemテキスト
			'search_items' => '新着情報・お知らせを検索',//search itemsテキスト
			'not_found' => '新着情報・お知らせは見つかりませんでした',//not foundテキスト
			'not_found_in_trash' => 'ゴミ箱に新着情報・お知らせはありません。',//not found in trashテキスト
		),
		'description' => '新着情報・お知らせを公開する時に使うカスタム投稿タイプです。',//投稿タイプの簡潔な説明
		'public' => true,//管理画面から投稿できるようにする(初期値がfalseなので注意)
		'hierarchical' => false,//階層をもつか
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),//この投稿で利用する機能
		'has_archive' => true,//投稿アーカイブを利用する(初期値がfalseなので注意)
		'menu_position' => 5//管理画面の左メニューにおける表示位置　5-投稿の下、10-メディアの下、20-ページの下
	); 
	register_post_type('news', $args);//カスタム投稿タイプ「news」を登録

	$args = array(
		'label' => '情報タイプ',//管理画面の左メニューに表示される名前
		'labels' => array(
			'singular_name' => '情報タイプ',//このカスタム分類の名前
			'search_items' => '情報タイプを検索',//デフォルトの「search item」の代わりに表示するテキスト(以下省略)
			'popular_items' => 'よく使われている情報タイプ',//popular itemテキスト
			'all_items' => 'すべての情報タイプ',//all itemsテキスト
			'parent_item' => '親情報タイプ',//parent itemテキスト
			'edit_item' => '情報タイプの編集',//edit itemテキスト
			'update_item' => '更新',//update itemテキスト
			'add_new_item' => '新規情報タイプを追加',//add new itemテキスト
			'new_item_name' => '新しい情報タイプ',//new item nameテキスト
		),
		'public' => true,//管理画面から作成できるようにする
		'hierarchical' => true,//階層をもつか
	);
	register_taxonomy('newstype', 'news', $args);//カスタム分類「newstype」を「news」内に登録

$args = array(
		'label' => '疑問・お悩み相談',//管理画面の左メニューに表示される名前
		'labels' => array(
			'singular_name' => '疑問・お悩み相談',//この投稿タイプの名前
			'add_new' => '新規追加',//デフォルトの「add new」の代わりに表示するテキスト(以下省略)
			'add_new_item' => '疑問・お悩み相談を追加',//add new itemテキスト
			'edit_item' => '疑問・お悩み相談を編集',//edit itemテキスト
			'new_item' => '新しい疑問・お悩み相談',//new itemテキスト
			'view_item' => '疑問・お悩み相談を表示',//view itemテキスト
			'search_items' => '新疑問・お悩み相談を検索',//search itemsテキスト
			'not_found' => '疑問・お悩み相談は見つかりませんでした',//not foundテキスト
			'not_found_in_trash' => 'ゴミ箱に疑問・お悩み相談はありません。',//not found in trashテキスト
		),
		'description' => '疑問・お悩み相談を公開する時に使うカスタム投稿タイプです。',//投稿タイプの簡潔な説明
		'public' => true,//管理画面から投稿できるようにする(初期値がfalseなので注意)
		'hierarchical' => false,//階層をもつか
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),//この投稿で利用する機能
		'has_archive' => true,//投稿アーカイブを利用する(初期値がfalseなので注意)
		'menu_position' => 5//管理画面の左メニューにおける表示位置　5-投稿の下、10-メディアの下、20-ページの下
	); 
	register_post_type('news2', $args);//カスタム投稿タイプ「news」を登録

	$args = array(
		'label' => '情報タイプ2',//管理画面の左メニューに表示される名前
		'labels' => array(
			'singular_name' => '情報タイプ2',//このカスタム分類の名前
			'search_items' => '情報タイプ2を検索',//デフォルトの「search item」の代わりに表示するテキスト(以下省略)
			'popular_items' => 'よく使われている情報タイプ2',//popular itemテキスト
			'all_items' => 'すべての情報タイプ2',//all itemsテキスト
			'parent_item' => '親情報タイプ2',//parent itemテキスト
			'edit_item' => '情報タイプ2の編集',//edit itemテキスト
			'update_item' => '更新',//update itemテキスト
			'add_new_item' => '新規情報タイプ2を追加',//add new itemテキスト
			'new_item_name' => '新しい情報タイプ2',//new item nameテキスト
		),
		'public' => true,//管理画面から作成できるようにする
		'hierarchical' => true,//階層をもつか
	);
	register_taxonomy('newstype2', 'news2', $args);//カスタム分類「newstype」を「news」内に登録
		

	flush_rewrite_rules();//パーマリンク設定を再設定(エラー回避のため)
}


add_action('init', 'add_custompost_type');//定義した「add_custompost_type」を実行



function get_featured_image_url() {
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id,'thumbnail', true);
echo $image_url[0];
}

// カテゴリIDを取得する。
function mishie_category_id($tax='category') {
    global $post;
    $cat_id = 0;
    if (is_single()) {
        $cat_info = get_the_terms($post->ID, $tax);
        if ($cat_info) {
            $cat_id = array_shift($cat_info)->term_id;
        }
    }
    return $cat_id;  
}

// カテゴリ情報を取得する。
function mishie_category_info($tax='category') {
    global $post;
    $cat = get_the_terms($post->ID, $tax);
    $obj = new stdClass;
    if ($cat) {
        $cat = array_shift($cat);
        $obj->name = $cat->name;
        $obj->slug = $cat->slug;
    } else {
        $obj->name = '';
        $obj->slug = '';
    }
    return $obj;
}


/* ----------------------------------------------
 * 5.8.1 - Show Post List
 * --------------------------------------------*/

// Related Post List
if ( ! function_exists( 'chocolat_related_post_list' ) ) :
function chocolat_related_post_list( $show_tag ) {
    $options = chocolat_get_option();

    if ( ! empty( $options['show_related'] ) ) {
        chocolat_post_list( $show_tag );
    }
}
endif;

//-----------------------------------------------
// New Post List
if ( ! function_exists( 'chocolat_new_post_list' ) ) :
function chocolat_new_post_list( $show_tag ) {
    $options = chocolat_get_option();

    if ( ! empty( $options['show_new_posts'] ) ) {
        chocolat_post_list( $show_tag );
    }
}
endif;


/* ----------------------------------------------
 * 5.8.2 - View Post list
 * --------------------------------------------*/

if ( ! function_exists( 'chocolat_post_list' ) ) :
function chocolat_post_list( $show_tag ) {
    $options = chocolat_get_option();
    // If the value is 0, use the value of the default
    $show_num = 5;
    $num_class = 'five-column';

    if ( $show_tag == 'new' ) {
        $my_title = $options['new_posts_title'] ? $options['new_posts_title'] : __( 'New Entry', 'chocolat' );

        if ( ! empty( $options['new_posts_number'] ) ) {
            $show_num = absint( $options['new_posts_number'] );
            $num_class = chocolat_post_list_number( $show_num );
            $show_num = absint( $options['new_posts_number'] * $options['new_posts_row'] );
        }

        $order = 'DESC';
        $order_by = '';
    } elseif ( $show_tag == 'related' ) {
        $my_title = $options['related_title'] ? esc_attr( $options['related_title'] ) : __( 'Related Entry', 'chocolat' );

        if ( ! empty( $options['related_number'] ) ) {
            $show_num = absint( $options['related_number'] );
            $num_class = chocolat_post_list_number( $show_num );
            $show_num = absint( $options['related_number'] * $options['related_row'] );
        }

        if ( ! empty( $options['related_order_select'] ) ) {
            $order = 'DESC';
            $order_by = '';

            $related_order = esc_attr( $options['related_order_select'] );
            switch ( $related_order ){
                case 'random':
                    $order = '';
                    $order_by = 'rand';
                    break;
                case 'asc':
                    $order = 'ASC';
                    $order_by = '';
                    break;
            }
        }
    } else {
        return;
    }

    $my_query = chocolat_post_data( $show_num, $show_tag, $order, $order_by );

    if ( $my_query -> have_posts() ) : ?>
<div id="top_info" class="<?php echo $show_tag; ?>-contents common-contents clearfix">
    <h3 id="<?php echo $show_tag; ?>-title" class="common-title"><?php echo esc_attr( $my_title ); ?></h3>
    <ul class="<?php echo $num_class; ?> clearfix">
        <?php while ( $my_query -> have_posts() ) : $my_query -> the_post(); ?>
        <?php $cat_info = mishie_category_info(); ?>
        <li>
            <span class="info_li_inner">
                <span class="news_date"><?php the_time('Y年m月d日'); ?></span>
                <span class="news_category <?php echo esc_attr($cat_info->slug); ?>"><?php echo esc_html($cat_info->name); ?></span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </span>
        </li>

        <?php endwhile; wp_reset_query(); ?>
    </ul>
</div>
<?php endif;
}
endif;



/* ----------------------------------------------
 * 5.8.3.2 - post data
 * --------------------------------------------*/

if ( ! function_exists( 'chocolat_post_data' ) ) :
function chocolat_post_data( $show_num, $show_tag, $order, $order_by ) {
    global $post;
    $tag_ID = '';
    $category_ID = '';

    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

    // Related article
    if ( $show_tag == 'related' ) {
        $options = chocolat_get_option();

        // Tag or category
        if ( ! empty( $options['related_class_select'] ) && esc_attr( $options['related_class_select'] ) == 'tag' ) {
            $posttags = get_the_tags( $post -> ID );
            $tag_ID = array();

            if ( $posttags ) {
                foreach( $posttags as $tag ) {
                    array_push( $tag_ID, $tag -> term_id );
                }
            }
        } else {
            $categories = get_the_category( $post -> ID );
            $category_ID = array();

            foreach( $categories as $category ) {
                array_push( $category_ID, $category -> cat_ID );
            }
        }
    }

    $args = array(
        'tag__in'             => $tag_ID,
        'category__in'        => $category_ID,
        'post__not_in'        => array( $post -> ID ),
        'posts_per_page'      => $show_num,
        'ignore_sticky_posts' => true,
        'order'               => $order,
        'orderby'             => $order_by,
        'paged'               => $paged,
    );

    $my_query = new WP_Query( $args );
    return $my_query;
}
endif;
?>
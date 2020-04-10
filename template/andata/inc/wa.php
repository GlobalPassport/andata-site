<?php


// register widgetized areas, and load custom ones also!
function fourseasons_fw_widgets_init() {


    $query_images_args = array(
        'post_type' => 'attachment',
        'post_mime_type' =>'image',
        'post_status' =>'inherit',
        'posts_per_page' => -1,
    );

    $query_images = new WP_Query( $query_images_args );

    foreach ( $query_images->posts as $image) {

        register_sidebar( array(
            'name' => __( $image->post_title, 'four-seasons' ),
            'id' => wp_get_attachment_url( $image->ID ),
            'description' => __( 'Sidebar for all Archives, Categories, Tags pages.', 'four-seasons' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h6 class="widget-title">',
            'after_title' => '</h6>',
        ) );
    }


}
add_action( 'widgets_init', 'fourseasons_fw_widgets_init' );




// user can decide which widget area should appear on a page template
if(is_admin()){


    $fourseasons_new_meta_boxes_widget_areas  = array(
        "sc_gen" => array(
            "name" => "fourseasons_widget_areas",
            "std" => "",
            "title" => "Заголовок"
        )
    );


    function fourseasons_widget_areas() {
        global $post;

        $fourseasons_widget_areas_sidebar = get_post_meta($post->ID, 'fourseasons-widget-areas-sidebar', true);




        wp_nonce_field('fourseasons_widget_areas','fourseasons_widget_areas_nonce');

        //list widget areas
        echo '<p><b>'.__('Выбор изображения','four-seasons').'</b></p>';
        echo '<p><select name="fourseasons-widget-areas-sidebar"><option value="">-</option>';
        global $wp_registered_sidebars;
        foreach($wp_registered_sidebars as $k => $v){
            echo '<option value="'.$k.'"';
            if($fourseasons_widget_areas_sidebar == $k){ echo ' selected="selected"'; }
            echo '>'.$v['name'].'</option>';
        }
        echo '</select></p>';


        echo '</select></p>';
        echo '<p>&nbsp;</p>';

    }


    function fourseasons_create_meta_box_widget_areas() {
        global $theme_name;
        if ( function_exists('add_meta_box') ) {

            add_meta_box( 'fourseasons-widget-areas', 'Заголовок', 'fourseasons_widget_areas', 'page', 'side' );
            add_meta_box( 'fourseasons-widget-areas', 'Заголовок', 'fourseasons_widget_areas', 'post', 'side' );
        }
    }

    add_action('admin_menu', 'fourseasons_create_meta_box_widget_areas');


    //save meta box values
    function fourseasons_save_postdata_widget_areas(){
        global $post, $fourseasons_widget_areas;



        //save fields

        if(!empty($post->ID) && current_user_can('edit_page', $post->ID) && current_user_can('edit_post') && isset($_POST['fourseasons_widget_areas_nonce']) && wp_verify_nonce($_POST['fourseasons_widget_areas_nonce'],'fourseasons_widget_areas')){

            if(!empty($_POST['fourseasons-widget-areas-sidebar'])){
                $_POST['fourseasons-widget-areas-sidebar'] = sanitize_text_field($_POST['fourseasons-widget-areas-sidebar']);
                update_post_meta($post->ID,'fourseasons-widget-areas-sidebar',$_POST['fourseasons-widget-areas-sidebar']);
                update_post_meta($post->ID,'head','<img style="width: 100%;" src="'.$_POST['fourseasons-widget-areas-sidebar'].'">');
            }elseif(!empty($post->ID)){
                delete_post_meta($post->ID,'head');
                delete_post_meta($post->ID,'fourseasons-widget-areas-sidebar');
            }

        }

    }
    add_action('save_post', 'fourseasons_save_postdata_widget_areas');
}
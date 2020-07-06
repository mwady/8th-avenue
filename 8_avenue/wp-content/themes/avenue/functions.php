<?php

require TEMPLATEPATH.'/framework/theme.php';

$theme = new Theme();

require_once 'includes/adverts.php';

require_once 'gallery-metabox-master/gallery.php';


function gestion_locative_init(){

  $labels = array(
        'name' => 'Gestion Locative',
        'singular_name' => 'Gestion Locative',
        'add_new' => '',
        'add_new_item' => '',
        'edit_item' => 'Editer Item',
        'new_item' => '',
        'view_item' => '',
        'search_items' => 'Recherche Item',
        'not_found' => 'Aucun Item',
        'not_found_in_trash' => 'Aucun Item dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Gestion Locative'
    );

    register_post_type('gestion_locative', array(
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-editor-alignleft',
        'supports' => array('title', 'editor')
    ));

}
add_action('init', 'gestion_locative_init');

/**/

function mod_init(){

  $labels = array(
        'name' => 'MOD',
        'singular_name' => 'MOD',
        'add_new' => '',
        'add_new_item' => '',
        'edit_item' => 'Editer Item',
        'new_item' => '',
        'view_item' => '',
        'search_items' => 'Recherche Item',
        'not_found' => 'Aucun Item',
        'not_found_in_trash' => 'Aucun MOD dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'MOD'
    );

    register_post_type('mod', array(
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-image-filter',
        'supports' => array('title', 'editor', 'thumbnail')
    ));

}
add_action('init', 'mod_init');

/**/

function galerie_init(){

  $labels = array(
        'name' => 'Galerie photo',
        'singular_name' => 'Galerie photo',
        'add_new' => 'Ajouter une photo',
        'add_new_item' => 'Ajouter une photo',
        'edit_item' => 'Editer photo',
        'new_item' => 'nouvelle photo',
        'view_item' => '',
        'search_items' => 'Recherche photo',
        'not_found' => 'Aucun photo',
        'not_found_in_trash' => 'Aucun photo dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Galerie photo'
    );

    register_post_type('galerie', array(
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-images-alt',
        'supports' => array('title', 'thumbnail')
    ));

}
add_action('init', 'galerie_init');
/*----------------------------------------*/
function videos_init(){

  $labels = array(
        'name' => 'Galerie Video',
        'singular_name' => 'Galerie Video',
        'add_new' => 'Ajouter une Video',
        'add_new_item' => 'Ajouter une Video',
        'edit_item' => 'Editer Video',
        'new_item' => 'nouvelle Video',
        'view_item' => '',
        'search_items' => 'Recherche Video',
        'not_found' => 'Aucun Video',
        'not_found_in_trash' => 'Aucun Video dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Galerie Videos'
    );

    register_post_type('videos', array(
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-video-alt3',
        'supports' => array('title')
    ));

}
add_action('init', 'videos_init');


/**/
add_action( 'add_meta_boxes', 'add_video_init' );
add_action( 'save_post', 'save_videos',10,2);

function add_video_init() {

        add_meta_box(
            'video_box_id',            // Unique ID
            'Video',      // Box title
            'add_video_inner',
            'videos',
            'normal'
        );

}
function add_video_inner( $post ) {
?>
    <?php $value = get_post_meta( $post->ID, '_link_video', true ); ?>
    <br>
    <input type="text" name="link_video" value="<?php echo get_post_meta( $post->ID, '_link_video', true ); ?>" style="width:100%;">

<?php
}

function save_videos($post_id, $post ) {
    if ( array_key_exists('link_video', $_POST ) ) {
        update_post_meta( $post_id,
           '_link_video',
            $_POST['link_video']
        );
    }
}



/* pagination */

function pagination_project($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
        echo "<a class='flc' href='".get_pagenum_link($paged - 1)."'><abbr>Précédent</abbr></a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
        echo "<a class='flc' href=\"".get_pagenum_link($paged + 1)."\"><abbr>Suivant</abbr></a>";
     }
}


require_once 'includes/alerts.php';


/*add_action( 'transition_post_status', function ( $new_status, $old_status, $post )
{

    if( 'publish' == $new_status && 'publish' != $old_status && $post->post_type == 'alerts' ) {

        wp_die('ok');

    }
}, 10, 3 );*/
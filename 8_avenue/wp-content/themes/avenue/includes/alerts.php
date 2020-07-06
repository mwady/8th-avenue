<?php

function alerts_init(){

  $labels = array(
        'name' => 'Alerts',
        'singular_name' => 'Alert',
        'add_new' => 'Ajouter une Alert',
        'add_new_item' => 'Ajouter une Alert',
        'edit_item' => 'Editer Alert',
        'new_item' => 'nouvelle Alert',
        'view_item' => '',
        'search_items' => 'Recherche Alert',
        'not_found' => 'Aucun Alert',
        'not_found_in_trash' => 'Aucun Alert dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Les Alerts'
    );

    register_post_type('alerts', array(
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-filter',
        'supports' => array('title')
    ));

}
add_action('init', 'alerts_init');


add_action( 'add_meta_boxes', 'add_type_search' );
add_action( 'save_post', 'save_type_search',10,2);
function add_type_search() {
        add_meta_box(
            'tr_box_id',            // Unique ID
            'Type de recherche',      // Box title
            'inner_type_search',
            'alerts',
            'normal'
        );
}
function inner_type_search( $post ) {
?>
    <?php $value = get_post_meta( $post->ID, '_t_r', true ); ?>
    <br>
    <input type="text" name="typr_search" value="<?php echo get_post_meta( $post->ID, '_t_r', true ); ?>" style="width:100%;">
<?php
}
function save_type_search($post_id, $post ) {
    if ( array_key_exists('typr_search', $_POST ) ) {
        update_post_meta( $post_id,
           '_t_r',
            $_POST['typr_search']
        );
    }
}

/*---------------------------*/

add_action( 'add_meta_boxes', 'add_pieces' );
add_action( 'save_post', 'save_pieces',10,2);
function add_pieces() {
        add_meta_box(
            'ps_box_id',            // Unique ID
            'Pieces',      // Box title
            'inner_pieces',
            'alerts',
            'normal'
        );
}
function inner_pieces( $post ) {
?>
    <?php $value = get_post_meta( $post->ID, '_p_s', true ); ?>
    <br>
    <input type="text" name="t_pieces" value="<?php echo get_post_meta( $post->ID, '_p_s', true ); ?>" style="width:100%;">
<?php
}
function save_pieces($post_id, $post ) {
    if ( array_key_exists('t_pieces', $_POST ) ) {
        update_post_meta( $post_id,
           '_p_s',
            $_POST['t_pieces']
        );
    }
}


/*---------------------------*/

add_action( 'add_meta_boxes', 'add_surface' );
add_action( 'save_post', 'save_surface',10,2);
function add_surface() {
        add_meta_box(
            'srf_box_id',            // Unique ID
            'Surface',      // Box title
            'inner_surface',
            'alerts',
            'normal'
        );
}
function inner_surface( $post ) {
?>
    <?php $value = get_post_meta( $post->ID, '_srf', true ); ?>
    <br>
    <input type="text" name="surface" value="<?php echo get_post_meta( $post->ID, '_srf', true ); ?>" style="width:100%;">
<?php
}
function save_surface($post_id, $post ) {
    if ( array_key_exists('surface', $_POST ) ) {
        update_post_meta( $post_id,
           '_srf',
            $_POST['surface']
        );
    }
}

/*---------------------------*/

add_action( 'add_meta_boxes', 'add_budgett' );
add_action( 'save_post', 'save_budgett',10,2);
function add_budgett() {
        add_meta_box(
            'bdt_box_id',            // Unique ID
            'Budget',      // Box title
            'inner_budgett',
            'alerts',
            'normal'
        );
}
function inner_budgett( $post ) {
?>
    <?php $value = get_post_meta( $post->ID, '_bdt', true ); ?>
    <br>
    <input type="text" name="budgett" value="<?php echo get_post_meta( $post->ID, '_bdt', true ); ?>" style="width:100%;">
<?php
}
function save_budgett($post_id, $post ) {
    if ( array_key_exists('budgett', $_POST ) ) {
        update_post_meta( $post_id,
           '_bdt',
            $_POST['budgett']
        );
    }
}

/*---------------------------*/

add_action( 'add_meta_boxes', 'add_localitee' );
add_action( 'save_post', 'save_localite',10,2);
function add_localitee() {
        add_meta_box(
            'lct_box_id',            // Unique ID
            'Localite',      // Box title
            'inner_localite',
            'alerts',
            'normal'
        );
}
function inner_localite( $post ) {
?>
    <?php $value = get_post_meta( $post->ID, '_lct', true ); ?>
    <br>
    <input type="text" name="localite" value="<?php echo get_post_meta( $post->ID, '_lct', true ); ?>" style="width:100%;">
<?php
}
function save_localite($post_id, $post ) {
    if ( array_key_exists('localite', $_POST ) ) {
        update_post_meta( $post_id,
           '_lct',
            $_POST['localite']
        );
    }
}

/*---------------------------*/

add_action( 'add_meta_boxes', 'add_email' );
add_action( 'save_post', 'save_email',10,2);
function add_email() {
        add_meta_box(
            'email_box_id',            // Unique ID
            'Email',      // Box title
            'inner_email',
            'alerts',
            'side'
        );
}
function inner_email( $post ) {
?>
    <?php $value = get_post_meta( $post->ID, '_email', true ); ?>
    <br>
    <input type="text" name="email" value="<?php echo get_post_meta( $post->ID, '_email', true ); ?>" style="width:100%;">
<?php
}
function save_email($post_id, $post ) {
    if ( array_key_exists('email', $_POST ) ) {
        update_post_meta( $post_id,
           '_email',
            $_POST['email']
        );
    }
}

?>
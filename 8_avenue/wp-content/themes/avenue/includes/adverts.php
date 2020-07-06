<?php

add_action( 'init', 'register_ocean_annonce' );
function register_ocean_annonce() {
	
    $labels = array( 
        'name' => __( 'Tous les Annonces', 'ot-annonce' ),
        'singular_name' => 'annonces', //In Permalink Settings page
        'add_new' => __( 'Ajouter une annonce', 'ot-annonce' ),
        'add_new_item' => __( 'Ajouter une annonce', 'ot-annonce' ),
        'edit_item' => __( 'Modifier annonce', 'ot-annonce' ),
        'new_item' => __( 'Ajouter une annonce', 'ot-annonce' ),
		'all_items' => __('Tous les Annonces','ot-annonce'),
        'view_item' => __( 'Voir Annonce', 'ot-annonce' ),
        'search_items' => __( 'Recherche des annonces', 'ot-annonce' ),
        'not_found' => __( 'Aucun annonce trouvé', 'ot-annonce' ),
        'not_found_in_trash' => __( 'Aucun annonce trouvé dans le corbeille', 'ot-annonce' ),
        'parent_item_colon' => __( 'Pere annonce:', 'ot-annonce' ),
        'menu_name' => __( 'Annonces', 'ot-annonce' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => __( 'Liste des annonces', 'ot-annonce' ),
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array('categories'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-portfolio',
        'show_in_nav_menus' => true,
		'show_in_admin_bar'   => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'annonce' ), //In Permalink Settings page
        'capability_type' => 'post'
    );
    register_post_type( 'annonces', $args );
    flush_rewrite_rules();
}

add_action( 'init', 'create_categories_hierarchical_taxonomy', 0 );
//create a custom taxonomy name it Skillss for your posts
function create_categories_hierarchical_taxonomy() {

	// Add new taxonomy, make it hierarchical like categories
	//first do the translations part for GUI
	$labels = array(
		'name' => __( 'Categories', 'ot-annonce' ),
		'singular_name' => __( 'Categories', 'ot-annonce' ),
		'search_items' =>  __( 'Search Categories','ot-annonce' ),
		'all_items' => __( 'All Categories','ot-annonce' ),
		'parent_item' => __( 'Parent Categories','ot-annonce' ),
		'parent_item_colon' => __( 'Parent Categories:','ot-annonce' ),
		'edit_item' => __( 'Edit Categories','ot-annonce' ), 
		'update_item' => __( 'Update Categories','ot-annonce' ),
		'add_new_item' => __( 'Add New Categories','ot-annonce' ),
		'new_item_name' => __( 'New Categories Name','ot-annonce' ),
		'menu_name' => __( 'Categories','ot-annonce' ),
	);     
	// Now register the taxonomy
	register_taxonomy('categories',array('annonces'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => __( 'annonces', 'ot-annonce' ) ), //In Permalink Settings page
	));

}

/*-------------Reference----------------*/
add_action( 'add_meta_boxes', 'av_add_ref' );
add_action( 'save_post', 'av_save_ref',10,2);

function av_add_ref() {
        add_meta_box('ref_box_id','Référence','av_inner_ref','annonces','side');
}
function av_inner_ref( $post ) {
?>
    <input type="text" name="reference" value="<?php echo get_post_meta( $post->ID, '_ref', true ); ?>" style="width:100%;">
<?php
}
function av_save_ref($post_id, $post ) {
    if ( array_key_exists('reference', $_POST ) ) {
        update_post_meta( $post_id,
           '_ref',
            $_POST['reference']
        );
    }
}
/*-------------End Reference----------------*/

/*-------------Prix----------------*/
add_action( 'add_meta_boxes', 'av_add_prix' );
add_action( 'save_post', 'av_save_prix',10,2);

function av_add_prix() {
        add_meta_box('prix_box_id','Prix','av_inner_prix','annonces','side');
}
function av_inner_prix( $post ) {
?>
    <input type="text" name="prix" value="<?php echo get_post_meta( $post->ID, '_prix', true ); ?>" style="width:100%;">
<?php
}
function av_save_prix($post_id, $post ) {
    if ( array_key_exists('prix', $_POST ) ) {
        update_post_meta( $post_id,
           '_prix',
            $_POST['prix']
        );
    }
}
/*-------------End Prix----------------*/

/*-------------Type de bien----------------*/
add_action( 'add_meta_boxes', 'av_add_tdb' );
add_action( 'save_post', 'av_save_tdb',10,2);

function av_add_tdb() {
        add_meta_box('tdb_box_id','Type de bien','av_inner_tdb','annonces','side');
}
function av_inner_tdb( $post ) {
?>
    <?php $typetdb = get_post_meta( $post->ID, '_tdb', true ); ?>
    <select name="type_bien">
        <option>Type de bien</option>
        <option value="Villas & maisons de luxe à louer" <?php if($typetdb == "Villas & maisons de luxe à louer") { echo "selected"; } ?>>Villas & maisons de luxe à louer</option>
        <option value="Villas & maisons de luxe à vendre" <?php if($typetdb == "Villas & maisons de luxe à vendre") { echo "selected"; } ?>>Villas & maisons de luxe à vendre</option>
        <option value="Appartements à louer" <?php if($typetdb == "Appartements à louer") { echo "selected"; } ?>>Appartements à louer</option>
        <option value="Terrains à vendre" <?php if($typetdb == "Terrains à vendre") { echo "selected"; } ?>>Terrains à vendre</option>
        <option value="Appartements à louer" <?php if($typetdb == "Appartements à louer") { echo "selected"; } ?>>Appartements à louer</option>
        <option value="Bureaux & commerces à louer" <?php if($typetdb == "Bureaux & commerces à louer") { echo "selected"; } ?>>Bureaux & commerces à louer</option>
    </select>
<?php
}
function av_save_tdb($post_id, $post ) {
    if ( array_key_exists('type_bien', $_POST ) ) {
        update_post_meta( $post_id,
           '_tdb',
            $_POST['type_bien']
        );
    }
}
/*-------------End Type de bien----------------*/

/*-------------Region----------------*/
add_action( 'add_meta_boxes', 'av_add_region' );
add_action( 'save_post', 'av_save_region',10,2);

function av_add_region() {
        add_meta_box('region_box_id','Région','av_inner_region','annonces','side');
}
function av_inner_region( $post ) {
?>
    <input type="text" name="region" value="<?php echo get_post_meta( $post->ID, '_region', true ); ?>" style="width:100%;">
<?php
}
function av_save_region($post_id, $post ) {
    if ( array_key_exists('region', $_POST ) ) {
        update_post_meta( $post_id,
           '_region',
            $_POST['region']
        );
    }
}
/*-------------End Region----------------*/

/*-------------Ville----------------*/
add_action( 'add_meta_boxes', 'av_add_ville' );
add_action( 'save_post', 'av_save_ville',10,2);

function av_add_ville() {
        add_meta_box('ville_box_id','Ville','av_inner_ville','annonces','side');
}
function av_inner_ville( $post ) {
?>
    <input type="text" name="city" value="<?php echo get_post_meta( $post->ID, '_ville', true ); ?>" style="width:100%;">
<?php
}
function av_save_ville($post_id, $post ) {
    if ( array_key_exists('city', $_POST ) ) {
        update_post_meta( $post_id,
           '_ville',
            $_POST['city']
        );
    }
}
/*-------------End Ville----------------*/

/*-------------Quartier----------------*/
add_action( 'add_meta_boxes', 'av_add_quartier' );
add_action( 'save_post', 'av_save_quartier',10,2);

function av_add_quartier() {
        add_meta_box('quartier_box_id','Quartier','av_inner_quartier','annonces','side');
}
function av_inner_quartier( $post ) {
?>
    <input type="text" name="quartier" value="<?php echo get_post_meta( $post->ID, '_quartier', true ); ?>" style="width:100%;">
<?php
}
function av_save_quartier($post_id, $post ) {
    if ( array_key_exists('quartier', $_POST ) ) {
        update_post_meta( $post_id,
           '_quartier',
            $_POST['quartier']
        );
    }
}
/*-------------End Quartier----------------*/

/*-------------pieces----------------*/
add_action( 'add_meta_boxes', 'av_add_pieces' );
add_action( 'save_post', 'av_save_pieces',10,2);

function av_add_pieces() {
        add_meta_box('pieces_box_id','Pieces','av_inner_pieces','annonces','side');
}
function av_inner_pieces( $post ) {
?>
    <input type="number" name="pieces" value="<?php echo get_post_meta( $post->ID, '_piece', true ); ?>" style="width:100%;">
<?php
}
function av_save_pieces($post_id, $post ) {
    if ( array_key_exists('pieces', $_POST ) ) {
        update_post_meta( $post_id,
           '_piece',
            $_POST['pieces']
        );
    }
}
/*-------------End pieces----------------*/

/*-------------chambres----------------*/
add_action( 'add_meta_boxes', 'av_add_chambres' );
add_action( 'save_post', 'av_save_chambres',10,2);

function av_add_chambres() {
        add_meta_box('chambres_box_id','Chambres','av_inner_chambres','annonces','side');
}
function av_inner_chambres( $post ) {
?>
    <input type="number" name="chambres" value="<?php echo get_post_meta( $post->ID, '_chambre', true ); ?>" style="width:100%;">
<?php
}
function av_save_chambres($post_id, $post ) {
    if ( array_key_exists('chambres', $_POST ) ) {
        update_post_meta( $post_id,
           '_chambre',
            $_POST['chambres']
        );
    }
}
/*-------------End chambres----------------*/

/*-------------salle de bains----------------*/
add_action( 'add_meta_boxes', 'av_add_salles' );
add_action( 'save_post', 'av_save_salles',10,2);

function av_add_salles() {
        add_meta_box('salles_box_id','Salles de bain','av_inner_salles','annonces','side');
}
function av_inner_salles( $post ) {
?>
    <input type="number" name="salles" value="<?php echo get_post_meta( $post->ID, '_ssdb', true ); ?>" style="width:100%;">
<?php
}
function av_save_salles($post_id, $post ) {
    if ( array_key_exists('salles', $_POST ) ) {
        update_post_meta( $post_id,
           '_ssdb',
            $_POST['salles']
        );
    }
}
/*-------------End salle de bains----------------*/

/*-------------surface----------------*/
add_action( 'add_meta_boxes', 'av_add_surface' );
add_action( 'save_post', 'av_save_surface',10,2);

function av_add_surface() {
        add_meta_box('surface_box_id','Surface','av_inner_surface','annonces','side');
}
function av_inner_surface( $post ) {
?>
    <input type="number" name="surface" value="<?php echo get_post_meta( $post->ID, '_surface', true ); ?>" style="width:100%;">
<?php
}
function av_save_surface($post_id, $post ) {
    if ( array_key_exists('surface', $_POST ) ) {
        update_post_meta( $post_id,
           '_surface',
            $_POST['surface']
        );
    }
}
/*-------------End surface----------------*/

/*-------------surface----------------*/
add_action( 'add_meta_boxes', 'av_add_tyadv' );
add_action( 'save_post', 'av_save_tyadv',10,2);

function av_add_tyadv() {
        add_meta_box('tyadv_box_id','Vente & Location','av_inner_tyadv','annonces','normal');
}
function av_inner_tyadv( $post ) {
?>
    <?php $tyadv = get_post_meta( $post->ID, '_tyadv', true ); ?>
    <label>Vente : <input type="radio" name="tyadv" value="vente" <?php if($tyadv == "vente"){ echo "checked"; } ?> ></label>
    <br>
    <label>Location : <input type="radio" name="tyadv" value="location" <?php if($tyadv == "location"){ echo "checked"; } ?>></label>
<?php
}
function av_save_tyadv($post_id, $post ) {
    if ( array_key_exists('tyadv', $_POST ) ) {
        update_post_meta( $post_id,
           '_tyadv',
            $_POST['tyadv']
        );
    }
}
/*-------------End tyadv----------------*/

/*-------------Caractéristiques----------------*/
add_action( 'add_meta_boxes', 'av_add_caracts' );
add_action( 'save_post', 'av_save_caracts',10,2);

function av_add_caracts() {
        add_meta_box('caracts_box_id','Caractéristiques','av_inner_caracts','annonces','normal');
}
function av_inner_caracts( $post ) {
?>
    <input type="text" name="caracts" value="<?php echo get_post_meta( $post->ID, '_carats', true ); ?>" style="width:100%;">
<?php
}
function av_save_caracts($post_id, $post ) {
    if ( array_key_exists('caracts', $_POST ) ) {
        update_post_meta( $post_id,
           '_carats',
            $_POST['caracts']
        );
    }
}
/*-------------End Caractéristiques----------------*/

/*-------------lat & lng----------------*/
add_action( 'add_meta_boxes', 'av_add_latlng' );
add_action( 'save_post', 'av_save_latlng',10,2);

function av_add_latlng() {
        add_meta_box('latlng_box_id','Lat & Lng','av_inner_latlng','annonces','normal');
}
function av_inner_latlng( $post ) {
?>
    <input type="text" name="latlng" value="<?php echo get_post_meta( $post->ID, '_laln', true ); ?>" style="width:100%;">
<?php
}
function av_save_latlng($post_id, $post ) {
    if ( array_key_exists('latlng', $_POST ) ) {
        update_post_meta( $post_id,
           '_laln',
            $_POST['latlng']
        );
    }
}
/*-------------End lat & lng----------------*/



?>
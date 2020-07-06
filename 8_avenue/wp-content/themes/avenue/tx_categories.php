<?php

/*
* Template Name: TX Categories
*/

?>
<?php get_header(); ?>

<section id="find_place">
  <div class="container">
    <div class="row">
      <h2>Trouver un bien</h2>
    </div>
  </div>
  <div class="box_search">
    <div class="container">
      <div class="row">
        <form method="get" action="<?php bloginfo('url') ?>/filter/">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="col-xs-6">
              <label>Votre recherche</label>
              <select name="recherche" required="required">
                <option value="">Type</option>
                <option value="vente">Vente</option>
                <option value="location">Location</option>
              </select>
            </div>
            <div class="col-xs-6">
              <label>Type de biens</label>
              <select name="type_bien" required="required">
                <option value="">Type de biens</option>
                <option value="appartements">Appartements</option>
                <option value="appartements-meubles">Appartements meublés</option>
                <option value="villas">Villas</option>
                <option value="villas-meubles">Villas meublés</option>
                <option value="locaux-commerciaux">Locaux commerciaux</option>
                <option value="locaux-industriel">Locaux industriel</option>
                <option value="terrains">Terrains</option>
                <option value="riad">Riad</option>
              </select>
            </div>
            <div class="h10"></div>
            <div class="col-xs-12 pieces">
              <label>Pièces</label>
              <input type="text" name="p_mini" placeholder="Mini">
              <input type="text" name="p_maxi" placeholder="Maxi">
            </div>
            <div class="h10"></div>
            <div class="col-xs-12 keyword">
              <label>Mot clé</label>
              <input type="text" name="mot_cle" placeholder="Mot clé...">
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="col-xs-12 budget">
              <label>Budget (MAD)</label>
              <div class="col-xs-6"><input type="text" name="b_mini" placeholder="Mini"></div>
              <div class="col-xs-6"><input type="text" name="b_maxi" placeholder="Maxi"></div>
            </div>
            <div class="h10"></div>
            <div class="col-xs-12 budget">
              <label>Surface (m²)</label>
              <div class="col-xs-6"><input type="text" name="s_mini" placeholder="Mini"></div>
              <div class="col-xs-6"><input type="text" name="s_maxi" placeholder="Maxi"></div>
            </div>
            <div class="h10"></div>
            <div class="col-xs-12 ref">
              <label>Réf.</label>
              <div class="col-xs-12"><input type="text" name="reference" placeholder="Référence de bien"></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="col-xs-12 budget">
              <label>Localité</label>
              <div class="col-xs-6">
              <select name="ville">
                <option value="">Ville</option>
                <option value="Casablanca">Casablanca</option>
                <option value="Rabat">Rabat</option>
                <option value="Marrakech">Marrakech</option>
                <option value="Fès">Fès</option>
                <option value="Tanger">Tanger</option>
                <option value="Agadir">Agadir</option>
                <option value="Meknès">Meknès</option>
                <option value="Essaouira">Essaouira</option>
                <option value="Tétouan">Tétouan</option>
                <option value="Oujda">Oujda</option>
                <option value="Salé">Salé</option>
                <option value="El Jadida">El Jadida</option>
                <option value="Béni Mellal">Béni Mellal</option>
                <option value="Safi">Safi</option>
                <option value="Kénitra">Kénitra</option>
                <option value="Ouarzazate">Ouarzazate</option>
                <option value="Chefchaouen">Chefchaouen</option>
                <option value="Ifrane">Ifrane</option>
                <option value="Mohammédia">Mohammédia</option>
                <option value="Larache">Larache</option>
                <option value="Guelmim">Guelmim</option>
                <option value="Nador">Nador</option>
                <option value="Assilah">Assilah</option>
                <option value="Témara">Témara</option>
                <option value="Taza">Taza</option>
                <option value="Errachidia">Errachidia</option>
                <option value="Figuig">Figuig</option>
                <option value="Berkane">Berkane</option>
                <option value="Al Hoceïma">Al Hoceïma</option>
                <option value="Zagora">Zagora</option>
                <option value="Séfrou">Séfrou</option>
                <option value="Midelt">Midelt</option>
                <option value="Taourirt">Taourirt</option>
                <option value="Tan-Tan">Tan-Tan</option>
                <option value="Boulemane">Boulemane</option>
                <option value="Taroudant">Taroudant</option>
                <option value="Arfoud">Arfoud</option>
                <option value="Azrou">Azrou</option>
                <option value="Tiznit">Tiznit</option>
                <option value="Tinghir">Tinghir</option>
                <option value="Khénifra">Khénifra</option>
                <option value="Oualidia">Oualidia</option>
                <option value="Saïdia">Saïdia</option>
                <option value="Khouribga">Khouribga</option>
                <option value="Khémisset">Khémisset</option>
              </select>
              </div>
              <div class="col-xs-6">
              <input type="text" name="quartier" placeholder="Quartier">
              </div>
            </div>
            <div class="col-xs-12">
              <button type="submit" name="submit">valider</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<br>
<section id="nos_selections" class="pgi">
  <div class="container">
    <div class="row adverts">

      <?php
      if (isset($_GET['cat'])) {
        $cat = $_GET['cat'];
      }
      else{
        $cat = false;
      }
      ?>

      <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $args = array(
             'posts_per_page' => 12,
             'paged' => $paged,
             'post_type' => 'annonces',
             'categories' => $cat
          );
          $custom_query = new WP_Query( $args );
          while($custom_query->have_posts()) : 
          $custom_query->the_post();
      ?>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="advert">
          <a href="<?php the_permalink(); ?>">
            <div class="image">
              <div class="bg"></div>
              <?php
              wp_nonce_field( basename(__FILE__), 'gallery_meta_nonce' );
              $ids = get_post_meta($post->ID, 'vdw_gallery_id', true);
              ?>
              <?php if ($ids) : foreach ($ids as $key => $value) : $image = wp_get_attachment_image_src($value, 'medium', false, false); ?>
              <img class="image-preview" src="<?php echo $image[0]; ?>">
              <?php break; ?>
              <?php endforeach; endif; ?>
            </div>
            <div class="titre">
              <div>
                <?php the_title(); ?><br>
                <?php echo get_post_meta( $post->ID, '_region', true ); ?><br>
                <?php echo get_post_meta( $post->ID, '_prix', true ); ?> DH
              </div>
            </div>
          </a>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="row">
      <div class="pags">
        <?php
              if (function_exists("pagination_project")) {
                  pagination_project($custom_query->max_num_pages);
              }
          ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>


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

<?php while ( have_posts() ) : the_post(); ?>

<section id="single">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12">
        <h1><?php the_title(); ?></h1>
        <div class="images">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">

              <?php
              wp_nonce_field( basename(__FILE__), 'gallery_meta_nonce' );
              $ids = get_post_meta($post->ID, 'vdw_gallery_id', true);
              $i = 1;
              ?>
              <?php if ($ids) : foreach ($ids as $key => $value) : $image = wp_get_attachment_image_src($value, 'full', false, false); ?>
              <div class="item <?php if($i++ == 1){ echo 'active'; } ?>">
                <img class="image-preview" src="<?php echo $image[0]; ?>">
              </div>
              <?php endforeach; endif; ?>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">

      <?php

      if($_POST['action'] == "new_msg"){

        $to = 'contact@8thavenue.ma';
        $subject = "Votre message à envoyé avec success.";
        $content .= "<tr style='background:#ffffff;'>";
        $content .= "<td><h1 style='margin-left:15px;color:#41281b;'>Salut ".$title." ,</h1></td>";
        $content .= "</tr>";
        $content .= "<tr style='background:#ffffff;height:30px;'>";
        $content .= "<td><b style='margin-left:15px;'>Email</b> : ".$email."</td>";
        $content .= "</tr>";
        $headers = 'From: Clôture & Portails du Douaisis <elmehdiweb@gmail.com>';

        wp_mail($to, $subject, $content, $headers);

      }

      ?>

        <form method="post" class="contact_adverter" name="new_msg">
          <label>Votre nom</label>
          <input type="text" name="nom" placeholder="Votre nom">
          <label>Adresse mail</label>
          <input type="email" name="email" placeholder="Adresse mail">
          <label>Téléphone</label>
          <input type="text" name="phone" placeholder="Téléphone">
          <label>Décrivez vos besoins spécifiques</label>
          <textarea placeholder="Décrivez vos besoins spécifiques" name="message"></textarea>
          <button type="submit" name="contact_advert">Contacter</button>
          <span class="al">En cliquant sur Contacter, j'accepte la <a href="#" class="fancybox">politique de protection des données</a></span>
        </form>

      </div>
    </div>

    <div class="row caracteristiques">
      <div class="col-md-12">
        <h2>Caractéristiques</h2>
      </div>
      <div class="col-md-12">
        <?php $ref = get_post_meta( $post->ID, '_ref', true ); ?>
        <?php if($ref != null) { ?>
        <div class="item col-md-12">
          <div class="col-md-3 col-sm-5 col-xs-6">
            <span>Référence</span>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-6"><?php echo get_post_meta( $post->ID, '_ref', true ); ?></div>
        </div>
        <?php } ?>

        <?php $prix = get_post_meta( $post->ID, '_prix', true ); ?>
        <?php if($prix != null) { ?>
        <div class="item col-md-12">
          <div class="col-md-3 col-sm-5 col-xs-6">
            <span>Prix</span>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-6"><?php echo get_post_meta( $post->ID, '_prix', true ); ?> DH</div>
        </div>
        <?php } ?>

        <?php $tdb = get_post_meta( $post->ID, '_tdb', true ); ?>
        <?php if($tdb != null) { ?>
        <div class="item col-md-12">
          <div class="col-md-3 col-sm-5 col-xs-6">
            <span>Type du bien</span>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-6"><?php echo get_post_meta( $post->ID, '_tdb', true ); ?></div>
        </div>
        <?php } ?>

        <?php $region = get_post_meta( $post->ID, '_region', true ); ?>
        <?php if($region != null) { ?>
        <div class="item col-md-12">
          <div class="col-md-3 col-sm-5 col-xs-6">
            <span>Région</span>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-6"><?php echo get_post_meta( $post->ID, '_region', true ); ?></div>
        </div>
        <?php } ?>

        <?php $ville = get_post_meta( $post->ID, '_ville', true ); ?>
        <?php if($ville != null) { ?>
        <div class="item col-md-12">
          <div class="col-md-3 col-sm-5 col-xs-6">
            <span>Ville</span>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-6"><?php echo get_post_meta( $post->ID, '_ville', true ); ?></div>
        </div>
        <?php } ?>

        <?php $quartier = get_post_meta( $post->ID, '_quartier', true ); ?>
        <?php if($quartier != null) { ?>
        <div class="item col-md-12">
          <div class="col-md-3 col-sm-5 col-xs-6">
            <span>Quartier</span>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-6"><?php echo get_post_meta( $post->ID, '_quartier', true ); ?></div>
        </div>
        <?php } ?>

        <?php $piece = get_post_meta( $post->ID, '_piece', true ); ?>
        <?php if($piece != null) { ?>
        <div class="item col-md-12">
          <div class="col-md-3 col-sm-5 col-xs-6">
            <span>Pièces</span>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-6"><?php echo get_post_meta( $post->ID, '_piece', true ); ?> pièces</div>
        </div>
        <?php } ?>

        <?php $chambre = get_post_meta( $post->ID, '_chambre', true ); ?>
        <?php if($chambre != null) { ?>
        <div class="item col-md-12">
          <div class="col-md-3 col-sm-5 col-xs-6">
            <span>Chambres</span>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-6"><?php echo get_post_meta( $post->ID, '_chambre', true ); ?> chambres</div>
        </div>
        <?php } ?>

        <?php $ssdb = get_post_meta( $post->ID, '_ssdb', true ); ?>
        <?php if($ssdb != null) { ?>
        <div class="item col-md-12">
          <div class="col-md-3 col-sm-5 col-xs-6">
            <span>Salles de bain</span>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-6"><?php echo get_post_meta( $post->ID, '_ssdb', true ); ?> Salles de bain</div>
        </div>
        <?php } ?>

        <?php $surface = get_post_meta( $post->ID, '_surface', true ); ?>
        <?php if($surface != null) { ?>
        <div class="item col-md-12">
          <div class="col-md-3 col-sm-5 col-xs-6">
            <span>Surface</span>
          </div>
          <div class="col-md-9 col-sm-7 col-xs-6"><?php echo get_post_meta( $post->ID, '_surface', true ); ?> m²</div>
        </div>
        <?php } ?>

      </div>
    </div>
    <div class="row caracteristiques_du_bien">
      <div class="col-md-12">
        <h2>Caractéristiques du bien</h2>
        <?php
          $carats = get_post_meta( $post->ID, '_carats', true );
          if ($carats != null) {
            $formationD = explode(",", $carats);
            for($i=0; $i<count($formationD);$i++ ){
            echo '<span class="car">&radic; '.$formationD[$i].'</span>';
            }
          }
          
        ?>
      </div>
    </div>
    <div class="row description">
      <div class="col-md-12">
        <h2>Description complète</h2>
        <?php the_content(); ?>
      </div>
    </div>
    <div class="row emplacement">
      <div class="col-md-12">
        <h2>Emplacement</h2>
        <?php
          $laln = get_post_meta( $post->ID, '_laln', true );
          if ($laln != '') {
        ?>
        <div class="single_map" id="single_map" data-laln="<?= $laln; ?>">

        </div>
        <?php } ?>

      </div>
    </div>

  </div>
</section>
<?php endwhile; ?>


<?php get_footer(); ?>

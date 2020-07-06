<?php

/*
* Template Name: Creez une alerte
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


<?php

if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {


    if (isset ($_POST['your_search'])) {
        $title =  $_POST['your_search'];
    } else {
        echo 'Please enter a  title';
    }
    if (isset ($_POST['type_ad'])) {
        $type_ad =  $_POST['type_ad'];
    } else {
        echo 'Please enter a  title';
    }
    if (isset($_POST['pieces'])) {
      $pieces = $_POST['pieces'];
    } else{
      echo 'Please enter a  title';
    }
    if (isset($_POST['mini_surface']) && isset($_POST['maxi_surface'])) {
      $surface = $_POST['mini_surface'].",".$_POST['maxi_surface'];
    } else{
      echo 'Please enter a  title';
    }
    if (isset($_POST['mini_budget']) && isset($_POST['maxi_budget'])) {
      $budgett = $_POST['mini_budget'].",".$_POST['maxi_budget'];
    } else{
      echo 'Please enter a  title';
    }
    if (isset($_POST['ville']) && isset($_POST['quartier'])) {
      $localite = $_POST['ville'].",".$_POST['quartier'];
    } else{
      echo 'Please enter a  title';
    }

    $tags = $_POST['post_tags'];

    // Add the content of the form to $post as an array
    $new_post = array(
        'post_title'    => $title,
        'post_category' => array($_POST['cat']),  // Usable for custom taxonomies too
        'tags_input'    => array($tags),
        'post_status'   => 'publish',           // Choose: publish, preview, future, draft, etc.
        'post_type' => 'alerts'  //'post',page' or use a custom post type if you want to
    );
    //save the new post
    $pid = wp_insert_post($new_post);
    //insert taxonomies
    add_post_meta($pid, '_t_r', $type_ad, true);
    add_post_meta($pid, '_p_s', $pieces, true);
    add_post_meta($pid, '_srf', $surface, true);
    add_post_meta($pid, '_bdt', $budgett, true);
    add_post_meta($pid, '_lct', $localite, true);

    $msg_alert = "Votre Alert a enregistré avec success.";



}

?>

<section id="page_alerte">

	<div class="container">
		<div class="row">
      <h2>Créez une Alerte E-mail</h2>
      <p>Retrouvez chaque jour dans votre boîte e-mail toutes les nouvelles annonces immobilières en créant votre alerte e-mail !</p>
      <p>Pour annuler votre alerte, un simple clic sur le lien qui figure e bas des alertes reçues suffit.</p>
      <p>L'alerte E-mail est un service gratuit et sans engagement de votre part.</p>
    </div>
    <div class="row">
    <br>
    <?php
                if(isset($msg_alert)){
                    ?>
                    <div class="msg_alert" style="height: 50px;background: #e8ffe8;padding-left: 30px;border-left: 5px solid green;padding: 12px 30px;margin-bottom: 10px;">
                        <p style="font-size: 15px;font-weight: 500;color: #000;margin-bottom: 0;"><?php echo $msg_alert; ?></p>
                    </div>
                    <?php
                }
                ?>
      <form method="post" name="new_post" action="">
        <div class="titre col-md-12">
          <i class="fa fa-pencil"></i> Votre recherche
        </div>
        <div class="form-ctn col-md-12">
          <div class="col-md-4"><label>Votre recherche</label></div>
          <div class="col-md-8">
            <select name="type_ad">
              <option value="vente">Vente</option>
              <option value="location">Location</option>
            </select>
          </div>
        </div>
        <div class="form-ctn col-md-12">
          <div class="col-md-4"><label>Type de bien</label></div>
          <div class="col-md-8">
            <select name="your_search">
              <option value="">Tous types de biens</option>
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
        </div>
        <div class="form-ctn col-md-12">
          <div class="col-md-4"><label>Pièce(s)</label></div>
          <div class="col-md-8">
            <label><input type="radio" name="pieces" value="1">1</label>&nbsp;
            <label><input type="radio" name="pieces" value="2">2</label>&nbsp;
            <label><input type="radio" name="pieces" value="3">3</label>&nbsp;
            <label><input type="radio" name="pieces" value="4">4</label>&nbsp;
            <label><input type="radio" name="pieces" value="5">5</label>&nbsp;
            <label><input type="radio" name="pieces" value="6">6</label>&nbsp;
            <label><input type="radio" name="pieces" value="+ de 6"> +de 6</label>
          </div>
        </div>
        <div class="form-ctn col-md-12">
          <div class="col-md-4"><label>Surface</label></div>
          <div class="col-md-8">
            <div class="col-md-6"><input type="text" name="mini_surface" placeholder="Mini">m²</div>
            <div class="col-md-6"><input type="text" name="maxi_surface" placeholder="Maxi">m²</div>
          </div>
        </div>
        <div class="form-ctn col-md-12">
          <div class="col-md-4"><label>Budget</label></div>
          <div class="col-md-8">
            <div class="col-md-6"><input type="text" name="mini_budget" placeholder="Mini">MAD</div>
            <div class="col-md-6"><input type="text" name="maxi_budget" placeholder="Maxi">MAD</div>
          </div>
        </div>
        <div class="form-ctn col-md-12">
          <div class="col-md-4"><label>Localité</label></div>
          <div class="col-md-8">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select style="width: 70%;" name="ville">
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
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="quartier" placeholder="Quartier">
            </div>
            
          </div>
        </div>
        <div class="titre col-md-12">
          <i class="fa fa-pencil"></i> Votre adresse E-mail
        </div>
        <div class="form-ctn col-md-12">
          <div class="col-md-4"><label>Email*</label></div>
          <div class="col-md-8">
            <input type="text" name="email" placeholder="Votre E-mail">
          </div>
        </div>
        <div class="form-ctn col-md-12">
          <div class="col-md-4"><label style="line-height: 20px;">Email*<br><span style="font-size: 12px;">(confirmer)</span></label></div>
          <div class="col-md-8">
            <input type="text" name="confirmer_email" placeholder="Ressaisissez votre E-mail">
          </div>
        </div>
      
        <div class="form-ctn col-md-12">
          <button type="submit" tabindex="6" id="submit" name="submit">enregistrer l'alerte</button>
        </div>
        <input type="hidden" name="action" value="new_post" />
        <?php wp_nonce_field( 'new-post' ); ?>
      </form>
    </div>
	</div>
	
</section>

<?php get_footer(); ?>

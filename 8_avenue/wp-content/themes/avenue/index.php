<?php
get_header();
?>

<section id="global_cats">
  <div class="container">
    <div class="row">
      <div class="appartements col-md-8">
        <a href="<?php bloginfo('url') ?>/tx_categories/?cat=appartements,appartements-meubles">
          <div class="bg">
            <div class="title">appartements</div>
            <span>Découvrez nos Offres</span>
          </div>
          <img src="<?php bloginfo('template_directory') ?>/img/appartements.png">
        </a>
      </div>
      <div class="villas col-md-4">
        <a href="<?php bloginfo('url') ?>/tx_categories/?cat=villas,villas-meubles">
          <div class="bg">
            <div class="title">villas</div>
            <span>Découvrez nos Offres</span>
          </div>
          <img src="<?php bloginfo('template_directory') ?>/img/villas.png">
        </a>
      </div>
      <div class="locaux col-md-4">
        <a href="<?php bloginfo('url') ?>/tx_categories/?cat=locaux-commerciaux">
          <div class="bg">
            <div class="title">locaux commerciaux</div>
            <span>Découvrez nos Offres</span>
          </div>
          <img src="<?php bloginfo('template_directory') ?>/img/locaux.png">
        </a>
      </div>
      <div class="bureaux col-md-4">
        <a href="<?php bloginfo('url') ?>/tx_categories/?cat=bureaux">
          <div class="bg">
            <div class="title">bureaux</div>
            <span>Découvrez nos Offres</span>
          </div>
          <img src="<?php bloginfo('template_directory') ?>/img/bureaux.png">
        </a>
      </div>
      <div class="terrains col-md-4">
        <a href="<?php bloginfo('url') ?>/tx_categories/?cat=terrains">
          <div class="bg">
            <div class="title">terrains</div>
            <span>Découvrez nos Offres</span>
          </div>
          <img src="<?php bloginfo('template_directory') ?>/img/terrains.png">
        </a>
      </div>
      <div class="industriels col-md-4">
        <a href="<?php bloginfo('url') ?>/tx_categories/?cat=locaux-industriel">
          <div class="bg">
            <div class="title">Industriels</div>
            <span>Découvrez nos Offres</span>
          </div>
          <img src="<?php bloginfo('template_directory') ?>/img/industrie.jpg">
        </a>
      </div>
      
    </div>
  </div>
</section>

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
<section id="whoarewe">
  <div class="container">
    <div class="row">
      <h2>Qui sommes nous ?</h2>
    </div>
    <div class="row">
      <div class="col-md-7 col-sm-7 col-xs-12">
        <p>Opérant dans le métier depuis les années 90 a travers des périodes de prospérité et de crises, l'équipe de <b>8th AVENUE</b> a pu et a su se forger une expérience sérieuse ainsi qu'à se doter d'une large gamme de produit répondant a toute attente.</p>
        <p>Dans ce sens <b>8th AVENUE</b> met à votre service tout son savoir faire et son expérience pour vous accompagner judicieusement dans la location, la gestion, la vente et l'achat de tous biens Immobilier ou foncier ainsi que dans la réalisation et le développement de vos projets immobiliers.</p>
        <a href="#" class="read-more">Lire la suite</a>
      </div>
    </div>
  </div>
</section>
<section id="nos_selections" class="home_selected">
  <div class="container">
    <div class="row">
      <h2>Nous sélections</h2>
    </div>
    <div class="row adverts">
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="advert">
          <a href="#">
            <div class="image">
              <div class="bg"></div>
              <img src="<?php bloginfo('template_directory') ?>/img/advert.png">
            </div>
            <div class="titre">
              <div>
                Villa en location<br>
                Californie<br>
                30 000 DH
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="advert">
          <a href="#">
            <div class="image">
              <div class="bg"></div>
              <img src="<?php bloginfo('template_directory') ?>/img/advert.png">
            </div>
            <div class="titre">
              <div>
                Villa en location<br>
                Californie<br>
                30 000 DH
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="advert">
          <a href="#">
            <div class="image">
              <div class="bg"></div>
              <img src="<?php bloginfo('template_directory') ?>/img/advert.png">
            </div>
            <div class="titre">
              <div>
                Villa en location<br>
                Californie<br>
                30 000 DH
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="advert">
          <a href="#">
            <div class="image">
              <div class="bg"></div>
              <img src="<?php bloginfo('template_directory') ?>/img/advert.png">
            </div>
            <div class="titre">
              <div>
                Villa en location<br>
                Californie<br>
                30 000 DH
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>

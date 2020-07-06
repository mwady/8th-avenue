
	<footer id="footer">
	  <div class="part_top">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-4 col-sm-4 col-xs-12">
	          <img src="<?php bloginfo('template_directory') ?>/img/logo.png" class="logo">
	          <span class="slg">agence immobilière</span>
	        </div>
	        <div class="col-md-4 col-sm-4 col-xs-12">
	          <ul class="list-unstyled list">
	            <li><a href="#">Accueil</a></li>
	            <li><a href="#">Créer une alerte email</a></li>
	            <li><a href="#">Déposez votre recherche</a></li>
	            <li><a href="#">Vendre un bien</a></li>
	          </ul>
	        </div>
	        <div class="col-md-4 col-sm-4 col-xs-12">
	          <p>21, rue ahmed naciri 2 ême etage n°6 rêsidence andalous quartier palmier 20340 casablanca marco</p>
	          <p>Téléphone: 0522992989</p>
	          <p>Adresse mail: contact@8thavenue.ma</p>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="footer_bottom">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-6 col-sm-6 col-xs-12">
	            <p>&copy;2017, 8th Avenue. Tous droits réservés.</p>
	          </div>
	          <div class="col-md-6 col-sm-6 col-xs-12">
	            <p class="pull-right">Design by <img src="<?php bloginfo('template_directory') ?>/img/smartweb.png"></p>
	          </div>
	        </div>
	      </div>
	    </div>
	</footer>

	<?php wp_footer(); ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCWd8ADapEyiOsFZEhbjPkxITolT2TogFs&sensor=false"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/fancybox/source/jquery.fancybox.pack.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/fancy.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/script.js"></script>
  <script type="text/javascript">
		var myplace=new google.maps.LatLng(33.579530, -7.626276);
		var marker2;

		function initialize()
		{
		var mapProp = {
		  center:myplace,
		  zoom:16,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };

		var map=new google.maps.Map(document.getElementById("map"),mapProp);

		marker2=new google.maps.Marker({
		  position:myplace,
		  animation:google.maps.Animation.BOUNCE
		  });

		marker2.setMap(map);
		}

		google.maps.event.addDomListener(window, 'load', initialize);

		/*-----------------------------------------------------------------------*/
		<?php
		if (!is_page('contact')) {
		?>
		var rdt = document.getElementById('single_map');
		var str = rdt.dataset.laln;
		var res = str.split(", ");

		var myplace_s=new google.maps.LatLng(res[0], res[1]);
		var marker;

		function initialize()
		{
		var mapProp = {
		  center:myplace_s,
		  zoom:16,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };

		var map_s=new google.maps.Map(document.getElementById("single_map"),mapProp);

		marker=new google.maps.Marker({
		  position:myplace_s,
		  animation:google.maps.Animation.BOUNCE
		  });

		marker.setMap(map_s);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		<?php } ?>
	</script>
	

	
</body>
</html>
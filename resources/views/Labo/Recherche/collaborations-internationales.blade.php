@extends('defaultPro')

@section('content')
    
		<div class="bloc_ariane_rss_rech">
			<!-- Fil d'ariane -->
    			<div class="fil_ariane">Vous &ecirc;tes ici : 
        			<a href="../accueil.html" target="_self"  >GIPSA-lab</a>&nbsp;>&nbsp;<a href="departements-equipes.html" target="_self"  >Recherche</a>&nbsp;>&nbsp;<a href="collaborations-internationales.html" target="_self"  >Collaborations internationales</a>
			</div>
			<!-- /Fil d'ariane -->
			<div class="rss_rech">
				<a  class="rss_hidden" title="Flux rss" ></a>
       				 <div id="cse-search-form" style="width: 100%;">Chargement</div>
      			</div>
		</div><!-- /bloc_ariane_rss_rech -->

        

  
  
  <div class="contenu_global">

    <div class="colone_centrale_left">
		<a id="c71"></a><div class="contenu_entete"><span class="contenu_entete_puce"></span>Collaborations Internationales</div>


    <iframe src="{{url('/map')}}" frameborder="0" style="border-style: none;width: 980px; min-height:640px; overflow:hidden;">
   <p>Votre navigateur ne supporte pas les frames.</p>
 </iframe>
<img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /> 
    </div>
      
      
      <div class="colonne_droite">
 	<div class="menu_droit_bloc">
            <div class="menu_droit_entete2">
	   </div>
            <div class="menu_droit_contenu2">
              <div class="menu_droit_cont2">
		<p><a href="departements-equipes.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Départements-équipes</a></p><p><a href="projets.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Projets</a></p><p><a href="poles-de-plates-formes.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Poles de plates-formes</a></p><p><a href="ateliers-de-prototypage.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Ateliers de prototypage</a></p><p><a href="ressources-documentaires.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Ressources documentaires</a></p><p><a href="collaborations-internationales.html" target="_self" onfocus="blurLink(this);"  class="link_puce2_current">Collaborations internationales</a></p>
	      </div>
	    </div>
	</div> 

		 
        </div>
     </div>
 <div class="bas">
	<div class="bas_bg"><a href="../contact.html">Contact</a> | <a href="../plan-d-acces.html">Plan d'acc&eacute;s</a> | <a href="../mentions-legales.html">Mentions l&eacute;gales</a>
	</div>GIPSA-lab, 11 rue des Math&eacute;matiques, Grenoble Campus BP46, F-38402 SAINT MARTIN D'HERES CEDEX - 33 (0)4 76 82 71 31 
</div>

</div>
<script type="text/javascript" src="{{asset('designPro/fileadmin/templatev2/gipsa-menu-brillance.js')}}"></script>

</div>

<script type="text/javascript">
        //alert("denis");
        var chemin = window.location.pathname;
        var obj = {envoi:chemin,langue:"fr"}
        $.ajax({
                url: "http://www.gipsa-lab.grenoble-inp.fr/fileadmin/drapeau/drapeau.php",
                type:"GET",
                data:obj
        }).done(function( arg ) {
                //alert( "Données : " + arg ); 
                        $("div.move_drapeau").replaceWith( arg );
                        //$("div.denis").replaceWith( arg );
        });
</script>


<!-- ###DOCUMENT_BODY### -->
@endsection
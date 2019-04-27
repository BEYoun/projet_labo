@extends('defaultPro')

@section('content')
    
		<div class="bloc_ariane_rss_rech">
			<!-- Fil d'ariane -->
    			<div class="fil_ariane">Vous &ecirc;tes ici : 
        			<a href="../accueil.html" target="_self"  >GIPSA-lab</a>&nbsp;>&nbsp;<a href="publications.html" target="_self"  >Publications</a>&nbsp;>&nbsp;<a href="theses-publiees.html" target="_self"  >Thèses publiées</a>
			</div>
			<!-- /Fil d'ariane -->
			<div class="rss_rech">
				<a  class="rss_hidden" title="Flux rss" ></a>
       				 <div id="cse-search-form" style="width: 100%;">Chargement</div>
      			</div>
		</div><!-- /bloc_ariane_rss_rech -->

        

  
  
  <div class="contenu_global">

    <div class="colone_centrale_left">
		<a id="c64"></a><div class="contenu_entete_publis">
             <p>Th&egrave;ses PUBLI&eacute;es</p>

           </div>
            
           <div class="contenu_txt">

Les thèses  de Hal-TEL sont consultables dans la <a href="http://hal.univ-grenoble-alpes.fr/GIPSA-THESE" target="_blank">collection GIPSA-lab du portail HAL-TEL</a> (Th&egrave;ses-en-ligne).<br /><br />          
  

         </div>
<img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /> 
    </div>
      
      
      <div class="colonne_droite">
 	<div class="menu_droit_bloc">
            <div class="menu_droit_entete2">
	   </div>
            <div class="menu_droit_contenu2">
              <div class="menu_droit_cont2">
		<p><a href="publications.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Publications</a></p><p><a href="theses-publiees.html" target="_self" onfocus="blurLink(this);"  class="link_puce2_current">Thèses publiées</a></p><p><a href="parutions.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Parutions</a></p>
	      </div>
	    </div>
	</div> 

		<a id="c65"></a><div class="menu_droit_bloc">
        <div class="menu_droit_entete">Publications dans HAL</div>

        <div class="menu_droit_contenu">
          <div class="menu_droit_cont">
            <p><a href="http://hal.archives-ouvertes.fr/view_by_stamp.php?&amp;halsid=evpfnh54ljlmruofqktoba6717&amp;label=GIPSA&amp;langue=fr&amp;action_todo=home" target="_blank" class="link_puce">Publications Gipsa-lab dans HAL</a><br />
              <a href="http://tel.archives-ouvertes.fr/view_by_stamp.php?&amp;halsid=j9dvjran97pldaas7cf7is8qk1&amp;label=GIPSA-THESE&amp;langue=fr&amp;action_todo=home" target="_blank" class="link_puce">Th&egrave;ses Gipsa-lab dans TEL-HAL</a><br />
            </p>
          </div>
        </div>

      </div>
 <div class="menu_droit_bloc">
      <div class="menu_droit_entete">FormAtion</div>
          <div class="menu_droit_contenu">
            <div class="menu_droit_cont">
              <p><a href="../formation/theses-en-cours.html" class="link_puce">Th&egrave;ses en cours</a></p>
              <p><a href="../formation/theses-soutenues.html" class="link_puce">Th&egrave;ses soutenues</a><br />

              </p>
            </div>
          </div>
        </div>
<img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /><a id="c66"></a><a id="c46"></a><div class="menu_droit_bloc">
        <div class="menu_droit_entete">Travailler &agrave; Gipsa-LAB</div>
        <div class="menu_droit_contenu">

          <div class="menu_droit_cont"> 
            <p><a class="link_puce" href="../offres/offres_de_theses.html">Offres de th&egrave;ses</a></p>
            <p><a href="../offres/offres-de-stages.html" class="link_puce">Offres de stages</a></p>
          </div>
        </div>
      </div>

<img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /><img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /> 
        </div>
     </div>
 <div class="bas">
	<div class="bas_bg"><a href="../contact.html">Contact</a> | <a href="../plan-d-acces.html">Plan d'acc&eacute;s</a> | <a href="../mentions-legales.html">Mentions l&eacute;gales</a>
	</div>GIPSA-lab, 11 rue des Math&eacute;matiques, Grenoble Campus BP46, F-38402 SAINT MARTIN D'HERES CEDEX - 33 (0)4 76 82 71 31 
</div>

</div>

<script type="text/javascript" src="../fileadmin/templatev2/gipsa-menu-brillance.js"></script>

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
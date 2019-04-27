@extends('defaultPro')


@section('content')
    
		<div class="bloc_ariane_rss_rech">
			<!-- Fil d'ariane -->
    			<div class="fil_ariane">Vous &ecirc;tes ici : 
        			<a href="../accueil.html" target="_self"  >GIPSA-lab</a>&nbsp;>&nbsp;<a href="seminaires.html" target="_self"  >Animation</a>&nbsp;>&nbsp;<a href="associations.html" target="_self"  >Associations</a>
			</div>
			<!-- /Fil d'ariane -->
			<div class="rss_rech">
				<a  class="rss_hidden" title="Flux rss" ></a>
       				 <div id="cse-search-form" style="width: 100%;">Chargement</div>
      			</div>
		</div><!-- /bloc_ariane_rss_rech -->

        

  
  
  <div class="contenu_global">

    <div class="colone_centrale_left">
		<a id="c414"></a><div class="contenu_entete">
            <p><span class="contenu_entete_puce"></span>Associations</p>

      </div><img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /><a id="c413"></a><p style="margin:0 0 0 0;"><h2>CHRISTIAN BENOIT Association</h2>
</p>
<p style="margin:0 0 0 0;"><img style="padding-right: 5px; float: left;" src="../uploads/RTEmagicC_vignette_acb.jpg.jpg" height="36" width="100" alt="" />The Christian Benoit Association was founded on 26 April 1999, in memory of Christian Benoît, a researcher in the field of speech communication. Before his death in April 1998, Christian Benoît had carried out most of his research on speech synthesis and audiovisual speech processing at the ICP in Grenoble. The purpose of the Association is to support projects that help to promote and develop research in the field of speech communication, essentially through the Christian Benoît Prize.<br /><span style="font-weight: bold;"><a href="http://www.gipsa-lab.fr/acb/" target="_blank" >ACB Web site&gt;&gt;</a></span></p><img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /><a id="c836"></a><p style="margin:0 0 0 0;"><hr />
</p>
<p style="margin:0 0 0 0;"><h2>GipsADoc - Association des doctorants de Gipsa-lab/Gipsa-lab PhD Students association</h2>
</p>
<p style="margin:0 0 0 0;"><img style="padding-right: 5px; float: left;" src="../uploads/RTEmagicC_logo_gipsadoc.jpg.jpg" height="59" width="150" alt="" />Le GipsADoc est l'association des doctorants du Gipsa-lab. Son but est de favoriser l'accueil et l'intégration des doctorants au sein du Gipsa-lab, de les informer sur les possibilités qui leur sont ouvertes au cours de leur thèse et d'encourager les échanges scientifiques et culturels via l'organisation de diverses activités (sorties, séminaires, ...).<br /><br />GipsADoc is the Gipsa-lab PhD students association. Its goals are to welcome and help PhD students at Gipsa-lab, to inform them of the possibilities they have during their thesis cursus and to promote cultural and scientific activities among students through the organization several events (outings, seminars, ...).<br /><span style="font-weight: bold;"><a href="http://gipsa-doc.fr/" target="_blank" >GipsADoc Web site &gt;&gt;</a></span></p><img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /> 
    </div>
      
      
      <div class="colonne_droite">
 	<div class="menu_droit_bloc">
            <div class="menu_droit_entete2">
	   </div>
            <div class="menu_droit_contenu2">
              <div class="menu_droit_cont2">
		<p><a href="seminaires.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Séminaires</a></p><p><a href="soutenances.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Soutenances</a></p><p><a href="manifestations.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Manifestations</a></p><p><a href="associations.html" target="_self" onfocus="blurLink(this);"  class="link_puce2_current">Associations</a></p>
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
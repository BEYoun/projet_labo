@extends('defaultPro')


@section('content')
    
		<div class="bloc_ariane_rss_rech">
			<!-- Fil d'ariane -->
    			<div class="fil_ariane">Vous &ecirc;tes ici : 
        			<a href="../accueil.html" target="_self"  >GIPSA-lab</a>&nbsp;>&nbsp;<a href="seminaires.html" target="_self"  >Animation</a>&nbsp;>&nbsp;<a href="seminaires.html" target="_self"  >Séminaires</a>
			</div>
			<!-- /Fil d'ariane -->
			<div class="rss_rech">
				<a  class="rss_hidden" title="Flux rss" ></a>
       				 <div id="cse-search-form" style="width: 100%;">Chargement</div>
      			</div>
		</div><!-- /bloc_ariane_rss_rech -->

        

  
  
  <div class="contenu_global">

    <div class="colone_centrale_left">
		<a id="c54"></a>
<!-- rss -->
<div class="rss_rech">

<!-- pour r�activer la css seminaire
        <a  id="lien-rss" class="rss_sem" title="Flux rss" href="/rss/rss_seminaire.xml"></a>
-->
<!--
        <div class="recherche">
            <form method="get" id="" action="">
              <fieldset class="recherche">
                <input type="text" class="box" />
                <button class="btn" title="Valider la recherche">Recherche</button>
              </fieldset>
            </form>
        </div>
-->

      </div>
<!-- rss fin -->
<div class="contenu_entete">Prochains S&eacute;minaires </div><br /><br /><br><br /><br /><a href="seminaires4a7b.html?dep=dauto" class="onglet_table_auto_current">Automatique</a> <a href="seminairese173.html?dep=dpc" class="onglet_table_dpc">Parole-cognition</a> <span class="txt_right">Number of seminars : <strong>1</strong></span> <table class="table_gipsa_auto" width="100%">
<tr class="table_gipsa_im_si_intitul">
<th width="15%" >
<a href="seminaires8982.html?sem_choix=actu&amp;dep=dauto&amp;tri=0&amp;ordre=d" class="table_tri_auto_up"><span>Date</span></a>
</th>
<th width="45%" >
<a href="seminaires8ec1.html?sem_choix=actu&amp;dep=dauto&amp;tri=1&amp;ordre=a" class="table_tri_auto"><span>Titre</span></a>
</th>
<th width="40%" >
<a href="seminaires22af.html?sem_choix=actu&amp;dep=dauto&amp;tri=2&amp;ordre=a" class="table_tri_auto"><span>Intervenant</span></a>
</th>
</tr>
<tr onmouseout="this.className='TR_Normal_auto'" onmouseover="this.className='TR_Survol_auto'" class="TR_Normal_auto" >
<td> 16-05-2019<br />15h00</td>
<td><a href="seminairesbf29.html?id_sem=757">A Novel Numerical Method for Solving Dynamic Optimization Problems with Convergence Guarantees</a></td>
<td>Eric KERRIGAN</td>
</tr></table><img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /> 
    </div>
      
      
      <div class="colonne_droite">
 	<div class="menu_droit_bloc">
            <div class="menu_droit_entete2">
	   </div>
            <div class="menu_droit_contenu2">
              <div class="menu_droit_cont2">
		<p><a href="seminaires.html" target="_self" onfocus="blurLink(this);"  class="link_puce2_current">Séminaires</a></p><p><a href="soutenances.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Soutenances</a></p><p><a href="manifestations.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Manifestations</a></p><p><a href="associations.html" target="_self" onfocus="blurLink(this);"  class="link_puce2">Associations</a></p>
	      </div>
	    </div>
	</div> 

		<a id="c55"></a><div class="menu_droit_bloc">
        <div class="menu_droit_entete">Les S&eacute;minaires</div>
        <div class="menu_droit_contenu">
          <div class="menu_droit_cont">
            <p><a href="seminaires.html" class="link_puce">Prochains s&eacute;minaires</a></p>
            <p><a href="seminairesae65.html?sem_choix=histo" class="link_puce">S&eacute;minaires pass&eacute;s</a></p>
</div>
</div>
</div><img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /> 
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
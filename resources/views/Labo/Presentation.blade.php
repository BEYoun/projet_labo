@extends('defaultPro')

@section('content')
<!-- /Menu_principal -->

<div class="bloc_ariane_rss_rech">
    <!-- Fil d'ariane -->
    <div class="fil_ariane">Vous &ecirc;tes ici :
        <a href="../accueil.html" target="_self">GIPSA-lab</a>&nbsp;>&nbsp;<a href="presentation.html" target="_self">Le
            laboratoire</a>&nbsp;>&nbsp;<a href="presentation.html" target="_self">Présentation</a>
    </div>
    <!-- /Fil d'ariane -->
    <div class="rss_rech">
        <a class="rss_hidden" title="Flux rss"></a>
        <div id="cse-search-form" style="width: 100%;">Chargement</div>
    </div>
</div><!-- /bloc_ariane_rss_rech -->





<div class="contenu_global">

    <div class="colone_centrale_left">
        <a id="c2"></a>
        <p class="contenu_entete" style="margin:0 0 0 0;">Présentation</p>
        @foreach ($presentations as $item)
        <p style="margin:0 0 0 0;">&nbsp;</p>
        <p style="margin:0 0 0 0;">
            <h1>{!! $item->title !!}</h1>
        </p>
        <p style="margin:0 0 0 0;">
            {!! $item->content !!}
        </p>
            
        @endforeach
       
    </div>


    <div class="colonne_droite">
        <div class="menu_droit_bloc">
            <div class="menu_droit_entete2">
            </div>
            <div class="menu_droit_contenu2">
                <div class="menu_droit_cont2">
                    <p><a href="presentation.html" target="_self" onfocus="blurLink(this);"
                            class="link_puce2_current">Présentation</a></p>
                    <p><a href="organigramme.html" target="_self" onfocus="blurLink(this);"
                            class="link_puce2">Organigramme</a></p>
                    <p><a href="services-administratifs-et-techniques.html" target="_self" onfocus="blurLink(this);"
                            class="link_puce2">Services administratifs et techniques</a></p>
                    <p><a href="personnels.html" target="_self" onfocus="blurLink(this);"
                            class="link_puce2">Personnels</a>
                    </p>
                    <p><a href="effectifs.html" target="_self" onfocus="blurLink(this);"
                            class="link_puce2">Effectifs</a>
                    </p>
                    <p><a href="distinctions.html" target="_self" onfocus="blurLink(this);"
                            class="link_puce2">Distinctions</a></p>
                </div>
            </div>
        </div>

        <a id="c28"></a> <!-- contenu automatique du 2011/05/10 08:05:26 -->
        <div class="menu_droit_entete">DPTS - Equipes</div>
        <div class="menu_droit_contenu">
            <div class="menu_droit_cont">
                <p><a class="link_puce_auto" href="../recherche/departement-automatique.html">Automatique</a></p>
                <p><a class="link_puce_im_si" href="../recherche/departement-images-signal.html">Images-Signal</a></p>
                <p><a class="link_puce_par_co"
                        href="../recherche/departement-parole-cognition.html">Parole-Cognition</a>
                </p>
            </div>
        </div><img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br /><a
            id="c29"></a>
        <p style="margin:0 0 0 0;">
            <div class="menu_droit_bloc">
                <div class="menu_droit_entete">Documents
        </p>
        <p style="margin:0 0 0 0;">&nbsp;</p>
        <p style="margin:0 0 0 0;">
    </div>
    </p>
    <p style="margin:0 0 0 0;">
        <div class="menu_droit_contenu">
            <div class="menu_droit_cont">
                

                <p style="margin:0 0 0 0;">&nbsp;</p>
                <p style="margin:0 0 0 0;">&nbsp;</p>
                <p style="margin:0 0 0 0;">&nbsp;</p>
                <p style="margin:0 0 0 0;">&nbsp;</p>

                <p style="margin:0 0 0 0;">
            </div>
        </div>
</div>
</p>
<img src="../clear.gif" width="1" height="10" border="0" class="spacer-gif" alt="" title="" /><br />
</div>
</div>
<div class="bas">
    <div class="bas_bg"><a href="../contact.html">Contact</a> | <a href="../plan-d-acces.html">Plan d'acc&eacute;s</a> |
        <a href="../mentions-legales.html">Mentions l&eacute;gales</a>
    </div>GIPSA-lab, 11 rue des Math&eacute;matiques, Grenoble Campus BP46, F-38402 SAINT MARTIN D'HERES CEDEX - 33 (0)4
    76 82 71 31
</div>

</div>

<script type="text/javascript" src="{{asset('/designPro/fileadmin/templatev2/gipsa-menu-brillance.js')}}"></script>

</div>

<script type="text/javascript">
    //alert("denis");
    var chemin = window.location.pathname;
    var obj = {
        envoi: chemin,
        langue: "fr"
    }
    $.ajax({
        url: "http://www.gipsa-lab.grenoble-inp.fr/fileadmin/drapeau/drapeau.php",
        type: "GET",
        data: obj
    }).done(function (arg) {
        //alert( "Données : " + arg ); 
        $("div.move_drapeau").replaceWith(arg);
        //$("div.denis").replaceWith( arg );
    });
</script>


<!-- ###DOCUMENT_BODY### -->
@endsection
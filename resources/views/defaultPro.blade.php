<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.gipsa-lab.grenoble-inp.fr/accueil.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2019 21:22:06 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <base />

    <!--
<BASE HREF="/">
<BASE HREF="http://www.gipsa-lab.grenoble-inp.fr/">
-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ENSA LABO</title>
    <meta name="keywords"
        content="Laboratoire, Recherche, GIPSA-lab, Grenoble, Images, Parole, Signal, Automatique, Cognition, Signaux, Syst&egrave;mes" />
    <meta name="description"
        content="Le laboratoire GIPSA-lab, Grenoble Images Parole Signal Automatique, est une unit&eacute; mixte du CNRS et de l'universit&eacute; de Grenoble. Il m&egrave;ne des recherches th&eacute;oriques et appliqu&eacute;es sur les signaux et les syst&egrave;mes" />
    <meta name="author" content="GIPSA-lab" />


    <link href="{{ asset('/designPro/fileadmin/templatev2/gipsa_style_print.css') }}" rel="stylesheet" type="text/css"
        media="print" />
    <link href="{{ asset('/designPro/fileadmin/templatev2/gipsa_orga_serv_effec.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/designPro/fileadmin/templatev2/gipsa_style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/designPro/fileadmin/templatev2/gipsa-orga_v2.css') }}" rel="stylesheet" type="text/css" />
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="/fileadmin/templatev2/gipsa_style_ie7.css" /><![endif]-->

    <!--
<script type="text/javascript" src="fileadmin/templatev2/jquery.js"></script>
-->
    <script type="text/javascript" src="{{ asset('/designPro/fileadmin/templatev2/jquery-1.7.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/designPro/fileadmin/templatev2/menu_gipsa.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/designPro/fileadmin/templatev2/jquery.sliderkit.1.9.pack.js') }}">
    </script>


    <script type="text/javascript">
        $().ready(function () {
            <!-- infobulle -->
            $(".infobulle")
                .mouseover(function () {
                    $(this).find("span").fadeIn(100);
                })
                .mouseout(function () {
                    $(this).find("span").fadeOut(0);
                });
            <!-- /infobulle -->
        });
    </script>


    <script src="http://www.google.fr/jsapi" type="text/javascript"></script>

    <script type="text/javascript">
        google.load('search', '1', {
            language: 'fr'
        });
        google.setOnLoadCallback(function () {
            var customSearchControl = new google.search.CustomSearchControl(
                '013570994209401189891:kygvfqr_vtg');
            customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
            var options = new google.search.DrawOptions();
            options.enableSearchboxOnly("rechercher.html");
            customSearchControl.draw('cse-search-form', options);
        }, true);
        $(window).load(function () {
            $(".haut").sliderkit({
                auto: true,
                autospeed: 6000,
                circular: true,
                panelfxspeed: 2000,
                fastchange: false
            });
        });
    </script>




</head>

<body>
    <script type="text/javascript">
        var newURL = window.location.protocol;
        if (newURL == "index.html") {
            var vnew = window.location.toString();
            var vnew2 = vnew.replace("https", "http");
            document.location.href = vnew2;
        }
    </script>

    <!-- ###DOCUMENT_BODY### -->

    <div class="global">
        <div class="haut sliderkit">
            <a href="http://www.gipsa-lab.fr/" class="sliderkit-panel bd1"></a>
            <a href="http://www.gipsa-lab.fr/" class="sliderkit-panel bd2"></a>
            <a href="http://www.gipsa-lab.fr/" class="sliderkit-panel bd3"></a>
            <a href="http://www.gipsa-lab.fr/" class="sliderkit-panel bd4"></a>
        </div><!-- /bloc haut -->



        <!-- Menu_principal -->
        <div class="menu_principal">
            <div class="menu_centrage">
                <ul id="menu_gipsa">
                    <li><a href="{{ url('/') }}" target="_self" id="menuaccueil">ACCUEIL</a></li>
                    <li><a href="{{ url('/presentation') }}" target="_self" id="menu3">Le laboratoire</a>
                        <ul>
                            <li><a href="{{ url('/presentation') }}" target="_self">Présentation</a></li>
                            <li><a href="{{ url('/organigramme') }}" target="_self">Organigramme</a></li>
                            <li><a href="{{ url('/services-administratifs-et-techniques') }}" target="_self">Services
                                    administratifs et techniques</a></li>
                            <li><a href="{{ url('/personnels') }}" target="_self">Personnels</a></li>
                            <li><a href="{{ url('/effectifs') }}" target="_self">Effectifs</a></li>
                            <li><a href="{{ url('/distinctions') }}" target="_self">Distinctions</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/departements-equipes') }}" target="_self" id="menu10">Recherche</a>
                        <ul>
                            <li><a href="{{ url('/departements-equipes') }}" target="_self">Départements-équipes</a>
                            </li>
                            <li><a href="{{ url('/projets') }}" target="_self">Projets</a></li>
                            <li><a href="{{ url('/poles-de-plates-formes') }}" target="_self">Poles de
                                    plates-formes</a></li>
                            <li><a href="{{ url('/ateliers-de-prototypage') }}" target="_self">Ateliers de
                                    prototypage</a></li>
                            <li><a href="{{ url('/ressources-documentaires') }}" target="_self">Ressources
                                    documentaires</a></li>
                            <li><a href="{{ url('/collaborations-internationales') }}" target="_self">Collaborations
                                    internationales</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/publications') }}" target="_self" id="menu16">Publications</a>
                        <ul>
                            <li><a href="{{ url('/publications') }}" target="_self">Publications</a></li>
                            <li><a href="{{ url('/theses-publiees') }}" target="_self">Thèses publiées</a></li>
                            <li><a href="{{ url('/parutions') }}" target="_self">Parutions</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/seminaires') }}" target="_self" id="menu21">Animation</a>
                        <ul>
                            <li><a href="{{ url('/seminaires') }}" target="_self">Séminaires</a></li>
                            <li><a href="{{ url('/soutenances') }}" target="_self">Soutenances</a></li>
                            <li><a href="{{ url('/manifestations') }}" target="_self">Manifestations</a></li>
                            <li><a href="{{ url('/associations') }}" target="_self">Associations</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/theses-en-cours') }}" target="_self" id="menu25">Formation</a>
                        <ul>
                            <li><a href="{{ url('/theses-en-cours') }}" target="_self">Thèses en cours</a></li>
                            <li><a href="{{ url('/theses-soutenues') }}" target="_self">Thèses soutenues</a></li>
                            <li><a href="{{ url('/filieres-denseignements') }}" target="_self">Filières
                                    d'enseignements</a></li>
                            <li><a href="{{ url('/eacutecoles-doctorales') }}" target="_self">&Eacute;coles
                                    doctorales</a></li>
                            <li><a href="{{ url('/masters') }}" target="_self">Masters</a></li>
                        </ul>
                    </li>
                    {{-- <li><a href="valorisation/logiciels.html" target="_self" id="menu31">Valorisation</a>
                        <ul>
                            <li><a href="valorisation/logiciels.html" target="_self">Logiciels</a></li>
                            <li><a href="valorisation/start-up.html" target="_self">Start-up</a></li>
                            <li><a href="valorisation/brevets.html" target="_self">Brevets</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ url('/auth/login') }}" target="_self" id="menuaccueil">LOGIN</a></li>
                </ul>

            </div>


        </div>


        @yield('content')
</body>

</html>
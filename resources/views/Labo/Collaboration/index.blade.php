<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<!-- Mirrored from www.gipsa-lab.grenoble-inp.fr/collaborations_gipsa/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2019 23:22:08 GMT -->

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<title>Collaborations internationales</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('designPro/system/css/gipsa-galerie/gmap_gipsa.css') }}"
		media="screen" />

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="{{ asset('designPro/system/jslib/jquery-1.7.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('designPro/system/jslib/web/jquery.fn.gmap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('designPro/system/jslib/ui/jquery.ui.map.microdata.js') }}"></script>
	<script type="text/javascript" src="{{ asset('designPro/system/jslib/thirdparty/SyntaxHighlighter/shCore.js') }}">
	</script>
	<script type="text/javascript"
		src="{{ asset('designPro/system/jslib/thirdparty/SyntaxHighlighter/shAutoloader.js') }}"></script>
	<script type="text/javascript"
		src="{{ asset('designPro/system/jslib/thirdparty/SyntaxHighlighter/shBrushJScript.js') }}"></script>
	<script type="text/javascript" src="{{ asset('designPro/system/jslib/thirdparty/SyntaxHighlighter/shBrushXml.js') }}">
	</script>


	<script type="text/javascript">
		$(document).ready(function () {

			$(this).live('click', function () {
				$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
					.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
			});


			$(this).live('mousemove', function () {
				$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
					.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
			});

		});

		$(function () {


			SyntaxHighlighter.all();


			var opts = {
				'zoom': 4,
				'center': new google.maps.LatLng(48.086881, 11.279562),
				'streetViewControl': false,
				'mapTypeControl': true,
				'navigationControl': true,
				'backgroundColor': '#253570',
				'mapTypeId': google.maps.MapTypeId.HYBRID
			};


			$('#map_canvas').gmap(opts).bind('init', function () {



				// All Markers

				// show all menus
				$('#block_collab_dauto').show();
				$('#block_collab_dis').show();
				$('#block_collab_dpc').show();

				// Menu all current
				$('#select_menu').removeClass('menu');
				$('#select_dauto').addClass('dauto');
				$('#select_dis').addClass('dis');
				$('#select_dpc').addClass('dpc');


				$('#map_canvas').gmap('microdata', 'marker_gipsa', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><h1 class="iw-summary-gipsa">' + result.properties.summary[0] +
						'</h1><p class="iw-description-gipsa">' + result.properties.partenaire_dpt_eqp[0] +
						'</p><p class="iw-description-gipsa"><strong>Adresse : </strong>' + result.properties.add[0] +
						'</p><div class="clear"><div></div>';

					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_gipsa.html") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {
						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});
				});


				$('#map_canvas').gmap('microdata', 'marker_dauto_iddep0', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><span class="iw-pays_ville_dauto"><strong>' + result.properties.pays[
							0] + '</strong>, ' + result.properties.ville[0] +
						'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
						result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
						'</a></h1></span><br /><span class="iw-collab-sep_dauto"><a href="' + result.properties
						.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id0_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp2[
						0] + '">' + result.properties.id0_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp3[
						0] + '">' + result.properties.id0_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp4[
						0] + '">' + result.properties.id0_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id0_cadre[0] + '</p><p class="iw-permanent_eqp_dauto">' + result.properties.id0_permanent_eqp[
						0] + '</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
						'</a></span><span class="iw-collab-sep_dauto"><a href="' + result.properties.id1_structure_url[
						0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id1_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp2[
						0] + '">' + result.properties.id1_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp3[
						0] + '">' + result.properties.id1_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp4[
						0] + '">' + result.properties.id1_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id1_cadre[0] + '</p><p class="iw-permanent_eqp_dauto">' + result.properties.id1_permanent_eqp[
						0] + '</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
						'</a></span><div class="clear"><div></div>';



					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dauto.png") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {

						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
								.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});

				});


				$('#map_canvas').gmap('microdata', 'marker_dauto_iddep2', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><span class="iw-pays_ville_dauto"><strong>' + result.properties.pays[
							0] + '</strong>, ' + result.properties.ville[0] +
						'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
						result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
						'</a></h1></span><br /><span class="iw-collab-sep_dauto"><a href="' + result.properties
						.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id0_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp2[
						0] + '">' + result.properties.id0_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp3[
						0] + '">' + result.properties.id0_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp4[
						0] + '">' + result.properties.id0_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id0_cadre[0] + '</p><p class="iw-permanent_eqp_dauto">' + result.properties.id0_permanent_eqp[
						0] + '</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
						'</a></span><span class="iw-collab-sep_dauto"><a href="' + result.properties.id1_structure_url[
						0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id1_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp2[
						0] + '">' + result.properties.id1_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp3[
						0] + '">' + result.properties.id1_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp4[
						0] + '">' + result.properties.id1_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id1_cadre[0] + '</p><p class="iw-permanent_eqp_dauto">' + result.properties.id1_permanent_eqp[
						0] + '</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
						'</a></span><div class="clear"><div></div>';



					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dauto.png") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {

						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
								.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});

				});


				$('#map_canvas').gmap('microdata', 'marker_dauto_iddep2', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><span class="iw-pays_ville_dauto"><strong>' + result.properties.pays[
							0] + '</strong>, ' + result.properties.ville[0] +
						'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
						result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
						'</a></h1></span><br /><span class="iw-collab-sep_dauto"><a href="' + result.properties
						.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id0_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp2[
						0] + '">' + result.properties.id0_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp3[
						0] + '">' + result.properties.id0_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp4[
						0] + '">' + result.properties.id0_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id0_cadre[0] + '</p><p class="iw-permanent_eqp_dauto">' + result.properties.id0_permanent_eqp[
						0] + '</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
						'</a></span><span class="iw-collab-sep_dauto"><a href="' + result.properties.id1_structure_url[
						0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id1_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp2[
						0] + '">' + result.properties.id1_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp3[
						0] + '">' + result.properties.id1_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp4[
						0] + '">' + result.properties.id1_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id1_cadre[0] + '</p><p class="iw-permanent_eqp_dauto">' + result.properties.id1_permanent_eqp[
						0] + '</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
						'</a></span><div class="clear"><div></div>';



					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dauto.png") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {

						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
								.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});

				});


				$('#map_canvas').gmap('microdata', 'marker_dauto_iddep2', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><span class="iw-pays_ville_dauto"><strong>' + result.properties.pays[
							0] + '</strong>, ' + result.properties.ville[0] +
						'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
						result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
						'</a></h1></span><br /><span class="iw-collab-sep_dauto"><a href="' + result.properties
						.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id0_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp2[
						0] + '">' + result.properties.id0_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp3[
						0] + '">' + result.properties.id0_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp4[
						0] + '">' + result.properties.id0_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id0_cadre[0] + '</p><p class="iw-permanent_eqp_dauto">' + result.properties.id0_permanent_eqp[
						0] + '</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
						'</a></span><span class="iw-collab-sep_dauto"><a href="' + result.properties.id1_structure_url[
						0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id1_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp2[
						0] + '">' + result.properties.id1_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp3[
						0] + '">' + result.properties.id1_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp4[
						0] + '">' + result.properties.id1_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id1_cadre[0] + '</p><p class="iw-permanent_eqp_dauto">' + result.properties.id1_permanent_eqp[
						0] + '</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
						.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
						'</a></span><div class="clear"><div></div>';



					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dauto.png") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {

						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
								.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});

				});


				$('#map_canvas').gmap('microdata', 'marker_dauto', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><span class="iw-pays_ville_dauto"><strong>' + result.properties.pays[
							0] + '</strong>, ' + result.properties.ville[0] +
						'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
						result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
						'</a></h1></span><br /><span class="iw-collab-sep_dauto"><a href="' + result.properties
						.structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.part_titre[0] +
						'</p><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp[0] +
						'">' + result.properties.part_link[0] + '</a><a class="iw-part_link" target="_blank" href="' +
						result.properties.partenaire_url_pp2[0] + '">' + result.properties.part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp3[0] +
						'">' + result.properties.part_link3[0] + '</a><a class="iw-part_link" target="_blank" href="' +
						result.properties.partenaire_url_pp4[0] + '">' + result.properties.part_link4[0] +
						'</a><p class="iw-cadre">' + result.properties.cadre[0] +
						'</p><p class="iw-permanent_eqp_dauto">' + result.properties.permanent_eqp[0] +
						'</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties.permanent_url_pp[
						0] + '">' + result.properties.perm_link[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties.permanent_url_pp2[
							0] + '">' + result.properties.perm_link2[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties.permanent_url_pp3[
							0] + '">' + result.properties.perm_link3[0] +
						'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties.permanent_url_pp4[
							0] + '">' + result.properties.perm_link4[0] + '</a></span><div class="clear"><div></div>';


					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dauto.png") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {

						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
								.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});

				});



				$('#map_canvas').gmap('microdata', 'marker_dis_iddep0', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><span class="iw-pays_ville_dis"><strong>' + result.properties.pays[
						0] + '</strong>, ' + result.properties.ville[0] +
						'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
						result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
						'</a></h1></span><br /><span class="iw-collab-sep_dis"><a href="' + result.properties
						.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id0_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp2[
						0] + '">' + result.properties.id0_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp3[
						0] + '">' + result.properties.id0_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp4[
						0] + '">' + result.properties.id0_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id0_cadre[0] + '</p><p class="iw-permanent_eqp_dis">' + result.properties.id0_permanent_eqp[0] +
						'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties.id0_permanent_url_pp[
							0] + '">' + result.properties.id0_perm_link[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
						'</a></span><span class="iw-collab-sep_dis"><a href="' + result.properties.id1_structure_url[0] +
						'" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties.id1_partenaire_dpt_eqp[0] +
						'</a><p class="iw-part_titre">' + result.properties.id1_part_titre[0] +
						'</p><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp[
						0] + '">' + result.properties.id1_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp2[
						0] + '">' + result.properties.id1_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp3[
						0] + '">' + result.properties.id1_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp4[
						0] + '">' + result.properties.id1_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id1_cadre[0] + '</p><p class="iw-permanent_eqp_dis">' + result.properties.id1_permanent_eqp[0] +
						'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties.id1_permanent_url_pp[
							0] + '">' + result.properties.id1_perm_link[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
						'</a></span><span class="iw-collab-sep_dis"><a href="' + result.properties.id2_structure_url[0] +
						'" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties.id2_partenaire_dpt_eqp[0] +
						'</a><p class="iw-part_titre">' + result.properties.id2_part_titre[0] +
						'</p><a class="iw-part_link" target="_blank" href="' + result.properties.id2_partenaire_url_pp[
						0] + '">' + result.properties.id2_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id2_partenaire_url_pp2[
						0] + '">' + result.properties.id2_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id2_partenaire_url_pp3[
						0] + '">' + result.properties.id2_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id2_partenaire_url_pp4[
						0] + '">' + result.properties.id2_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id2_cadre[0] + '</p><p class="iw-permanent_eqp_dis">' + result.properties.id2_permanent_eqp[0] +
						'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties.id2_permanent_url_pp[
							0] + '">' + result.properties.id2_perm_link[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id2_permanent_url_pp2[0] + '">' + result.properties.id2_perm_link2[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id2_permanent_url_pp3[0] + '">' + result.properties.id2_perm_link3[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id2_permanent_url_pp4[0] + '">' + result.properties.id2_perm_link4[0] +
						'</a></span><div class="clear"><div></div>';



					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dis.png") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {

						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
								.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});

				});


				$('#map_canvas').gmap('microdata', 'marker_dis_iddep3', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><span class="iw-pays_ville_dis"><strong>' + result.properties.pays[
						0] + '</strong>, ' + result.properties.ville[0] +
						'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
						result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
						'</a></h1></span><br /><span class="iw-collab-sep_dis"><a href="' + result.properties
						.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id0_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp2[
						0] + '">' + result.properties.id0_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp3[
						0] + '">' + result.properties.id0_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp4[
						0] + '">' + result.properties.id0_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id0_cadre[0] + '</p><p class="iw-permanent_eqp_dis">' + result.properties.id0_permanent_eqp[0] +
						'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties.id0_permanent_url_pp[
							0] + '">' + result.properties.id0_perm_link[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
						'</a></span><span class="iw-collab-sep_dis"><a href="' + result.properties.id1_structure_url[0] +
						'" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties.id1_partenaire_dpt_eqp[0] +
						'</a><p class="iw-part_titre">' + result.properties.id1_part_titre[0] +
						'</p><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp[
						0] + '">' + result.properties.id1_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp2[
						0] + '">' + result.properties.id1_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp3[
						0] + '">' + result.properties.id1_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp4[
						0] + '">' + result.properties.id1_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id1_cadre[0] + '</p><p class="iw-permanent_eqp_dis">' + result.properties.id1_permanent_eqp[0] +
						'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties.id1_permanent_url_pp[
							0] + '">' + result.properties.id1_perm_link[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
						'</a></span><div class="clear"><div></div>';



					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dis.png") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {

						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
								.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});

				});


				$('#map_canvas').gmap('microdata', 'marker_dis_iddep2', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><span class="iw-pays_ville_dis"><strong>' + result.properties.pays[
						0] + '</strong>, ' + result.properties.ville[0] +
						'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
						result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
						'</a></h1></span><br /><span class="iw-collab-sep_dis"><a href="' + result.properties
						.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.id0_part_titre[
						0] + '</p><a class="iw-part_link" target="_blank" href="' + result.properties
						.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp2[
						0] + '">' + result.properties.id0_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp3[
						0] + '">' + result.properties.id0_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id0_partenaire_url_pp4[
						0] + '">' + result.properties.id0_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id0_cadre[0] + '</p><p class="iw-permanent_eqp_dis">' + result.properties.id0_permanent_eqp[0] +
						'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties.id0_permanent_url_pp[
							0] + '">' + result.properties.id0_perm_link[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
						'</a></span><span class="iw-collab-sep_dis"><a href="' + result.properties.id1_structure_url[0] +
						'" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties.id1_partenaire_dpt_eqp[0] +
						'</a><p class="iw-part_titre">' + result.properties.id1_part_titre[0] +
						'</p><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp[
						0] + '">' + result.properties.id1_part_link[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp2[
						0] + '">' + result.properties.id1_part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp3[
						0] + '">' + result.properties.id1_part_link3[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.id1_partenaire_url_pp4[
						0] + '">' + result.properties.id1_part_link4[0] + '</a><p class="iw-cadre">' + result.properties
						.id1_cadre[0] + '</p><p class="iw-permanent_eqp_dis">' + result.properties.id1_permanent_eqp[0] +
						'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties.id1_permanent_url_pp[
							0] + '">' + result.properties.id1_perm_link[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
						.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
						'</a></span><div class="clear"><div></div>';



					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dis.png") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {

						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
								.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});

				});


				$('#map_canvas').gmap('microdata', 'marker_dis', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><span class="iw-pays_ville_dis"><strong>' + result.properties.pays[
						0] + '</strong>, ' + result.properties.ville[0] +
						'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
						result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
						'</a></h1></span><br /><span class="iw-collab-sep_dis"><a href="' + result.properties
						.structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.part_titre[0] +
						'</p><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp[0] +
						'">' + result.properties.part_link[0] + '</a><a class="iw-part_link" target="_blank" href="' +
						result.properties.partenaire_url_pp2[0] + '">' + result.properties.part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp3[0] +
						'">' + result.properties.part_link3[0] + '</a><a class="iw-part_link" target="_blank" href="' +
						result.properties.partenaire_url_pp4[0] + '">' + result.properties.part_link4[0] +
						'</a><p class="iw-cadre">' + result.properties.cadre[0] + '</p><p class="iw-permanent_eqp_dis">' +
						result.properties.permanent_eqp[0] + '</p><a class="iw-perm_link_dis" target="_blank" href="' +
						result.properties.permanent_url_pp[0] + '">' + result.properties.perm_link[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties.permanent_url_pp2[
						0] + '">' + result.properties.perm_link2[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties.permanent_url_pp3[
						0] + '">' + result.properties.perm_link3[0] +
						'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties.permanent_url_pp4[
						0] + '">' + result.properties.perm_link4[0] + '</a></span><div class="clear"><div></div>';


					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dis.png") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {

						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
								.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});

				});





				$('#map_canvas').gmap('microdata', 'marker_dpc', function (result, item, index) {

					var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
						.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

					var content = '<div class="iw"><span class="iw-pays_ville_dpc"><strong>' + result.properties.pays[
						0] + '</strong>, ' + result.properties.ville[0] +
						'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
						result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
						'</a></h1></span><br /><span class="iw-collab-sep_dpc"><a href="' + result.properties
						.structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
						.partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.part_titre[0] +
						'</p><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp[0] +
						'">' + result.properties.part_link[0] + '</a><a class="iw-part_link" target="_blank" href="' +
						result.properties.partenaire_url_pp2[0] + '">' + result.properties.part_link2[0] +
						'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp3[0] +
						'">' + result.properties.part_link3[0] + '</a><a class="iw-part_link" target="_blank" href="' +
						result.properties.partenaire_url_pp4[0] + '">' + result.properties.part_link4[0] +
						'</a><p class="iw-cadre">' + result.properties.cadre[0] + '</p><p class="iw-permanent_eqp_dpc">' +
						result.properties.permanent_eqp[0] + '</p><a class="iw-perm_link_dpc" target="_blank" href="' +
						result.properties.permanent_url_pp[0] + '">' + result.properties.perm_link[0] +
						'</a><a class="iw-perm_link_dpc" target="_blank" href="' + result.properties.permanent_url_pp2[
						0] + '">' + result.properties.perm_link2[0] +
						'</a><a class="iw-perm_link_dpc" target="_blank" href="' + result.properties.permanent_url_pp3[
						0] + '">' + result.properties.perm_link3[0] +
						'</a><a class="iw-perm_link_dpc" target="_blank" href="' + result.properties.permanent_url_pp4[
						0] + '">' + result.properties.perm_link4[0] + '</a></span><div class="clear"><div></div>';


					$('#map_canvas').gmap('addMarker', {
						'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dpc.png") }}'),
						'bounds': false,
						'position': latlng,
						'content': content,
					}, function (map, marker) {

						$(item).addClass('clickable');
						$(item).click(function () {
							$(marker).triggerEvent('click');
							$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
								.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
							return false;
						});
					}).click(function () {
						$('#map_canvas').gmap('openInfoWindow', {
							'content': $(this)[0].content,
							'maxWidth': 350
						}, this);
					});

				});







				// Marker dauto

				if ($('#select_dauto').click(function () {

						// Menu dauto current
						$('#select_dauto').addClass('dauto');
						$('#select_dis').removeClass('dis');
						$('#select_dpc').removeClass('dpc');

						//Menu show dauto
						$('#select_dauto').addClass('dauto');
						$('#block_collab_dauto').show();
						$('#block_collab_dis').hide();
						$('#block_collab_dpc').hide();

						$('#map_canvas').gmap('clear', 'markers');

						$('#map_canvas').gmap('microdata', 'marker_dauto_iddep0', function (result, item, index) {

							var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
								.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

							var content = '<div class="iw"><span class="iw-pays_ville_dauto"><strong>' + result.properties
								.pays[0] + '</strong>, ' + result.properties.ville[0] +
								'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
								result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
								'</a></h1></span><br /><span class="iw-collab-sep_dauto"><a href="' + result.properties
								.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id0_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp2[0] + '">' + result.properties.id0_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp3[0] + '">' + result.properties.id0_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp4[0] + '">' + result.properties.id0_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id0_cadre[0] +
								'</p><p class="iw-permanent_eqp_dauto">' + result.properties.id0_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
								'</a></span><span class="iw-collab-sep_dauto"><a href="' + result.properties
								.id1_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id1_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp2[0] + '">' + result.properties.id1_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp3[0] + '">' + result.properties.id1_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp4[0] + '">' + result.properties.id1_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id1_cadre[0] +
								'</p><p class="iw-permanent_eqp_dauto">' + result.properties.id1_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
								'</a></span><div class="clear"><div></div>';



							$('#map_canvas').gmap('addMarker', {
								'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dauto.png") }}'),
								'bounds': false,
								'position': latlng,
								'content': content,
							}, function (map, marker) {

								$(item).addClass('clickable');
								$(item).click(function () {
									$(marker).triggerEvent('click');
									$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
										.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
									return false;
								});
							}).click(function () {
								$('#map_canvas').gmap('openInfoWindow', {
									'content': $(this)[0].content,
									'maxWidth': 350
								}, this);
							});

						});


						$('#map_canvas').gmap('microdata', 'marker_dauto_iddep2', function (result, item, index) {

							var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
								.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

							var content = '<div class="iw"><span class="iw-pays_ville_dauto"><strong>' + result.properties
								.pays[0] + '</strong>, ' + result.properties.ville[0] +
								'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
								result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
								'</a></h1></span><br /><span class="iw-collab-sep_dauto"><a href="' + result.properties
								.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id0_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp2[0] + '">' + result.properties.id0_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp3[0] + '">' + result.properties.id0_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp4[0] + '">' + result.properties.id0_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id0_cadre[0] +
								'</p><p class="iw-permanent_eqp_dauto">' + result.properties.id0_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
								'</a></span><span class="iw-collab-sep_dauto"><a href="' + result.properties
								.id1_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id1_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp2[0] + '">' + result.properties.id1_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp3[0] + '">' + result.properties.id1_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp4[0] + '">' + result.properties.id1_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id1_cadre[0] +
								'</p><p class="iw-permanent_eqp_dauto">' + result.properties.id1_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
								'</a></span><div class="clear"><div></div>';



							$('#map_canvas').gmap('addMarker', {
								'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dauto.png") }}'),
								'bounds': false,
								'position': latlng,
								'content': content,
							}, function (map, marker) {

								$(item).addClass('clickable');
								$(item).click(function () {
									$(marker).triggerEvent('click');
									$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
										.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
									return false;
								});
							}).click(function () {
								$('#map_canvas').gmap('openInfoWindow', {
									'content': $(this)[0].content,
									'maxWidth': 350
								}, this);
							});

						});


						$('#map_canvas').gmap('microdata', 'marker_dauto_iddep2', function (result, item, index) {

							var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
								.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

							var content = '<div class="iw"><span class="iw-pays_ville_dauto"><strong>' + result.properties
								.pays[0] + '</strong>, ' + result.properties.ville[0] +
								'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
								result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
								'</a></h1></span><br /><span class="iw-collab-sep_dauto"><a href="' + result.properties
								.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id0_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp2[0] + '">' + result.properties.id0_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp3[0] + '">' + result.properties.id0_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp4[0] + '">' + result.properties.id0_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id0_cadre[0] +
								'</p><p class="iw-permanent_eqp_dauto">' + result.properties.id0_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
								'</a></span><span class="iw-collab-sep_dauto"><a href="' + result.properties
								.id1_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id1_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp2[0] + '">' + result.properties.id1_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp3[0] + '">' + result.properties.id1_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp4[0] + '">' + result.properties.id1_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id1_cadre[0] +
								'</p><p class="iw-permanent_eqp_dauto">' + result.properties.id1_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
								'</a></span><div class="clear"><div></div>';



							$('#map_canvas').gmap('addMarker', {
								'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dauto.png") }}'),
								'bounds': false,
								'position': latlng,
								'content': content,
							}, function (map, marker) {

								$(item).addClass('clickable');
								$(item).click(function () {
									$(marker).triggerEvent('click');
									$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
										.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
									return false;
								});
							}).click(function () {
								$('#map_canvas').gmap('openInfoWindow', {
									'content': $(this)[0].content,
									'maxWidth': 350
								}, this);
							});

						});


						$('#map_canvas').gmap('microdata', 'marker_dauto_iddep2', function (result, item, index) {

							var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
								.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

							var content = '<div class="iw"><span class="iw-pays_ville_dauto"><strong>' + result.properties
								.pays[0] + '</strong>, ' + result.properties.ville[0] +
								'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
								result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
								'</a></h1></span><br /><span class="iw-collab-sep_dauto"><a href="' + result.properties
								.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id0_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp2[0] + '">' + result.properties.id0_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp3[0] + '">' + result.properties.id0_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp4[0] + '">' + result.properties.id0_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id0_cadre[0] +
								'</p><p class="iw-permanent_eqp_dauto">' + result.properties.id0_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
								'</a></span><span class="iw-collab-sep_dauto"><a href="' + result.properties
								.id1_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id1_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp2[0] + '">' + result.properties.id1_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp3[0] + '">' + result.properties.id1_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp4[0] + '">' + result.properties.id1_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id1_cadre[0] +
								'</p><p class="iw-permanent_eqp_dauto">' + result.properties.id1_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
								'</a></span><div class="clear"><div></div>';



							$('#map_canvas').gmap('addMarker', {
								'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dauto.png") }}'),
								'bounds': false,
								'position': latlng,
								'content': content,
							}, function (map, marker) {

								$(item).addClass('clickable');
								$(item).click(function () {
									$(marker).triggerEvent('click');
									$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
										.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
									return false;
								});
							}).click(function () {
								$('#map_canvas').gmap('openInfoWindow', {
									'content': $(this)[0].content,
									'maxWidth': 350
								}, this);
							});

						});


						$('#map_canvas').gmap('microdata', 'marker_dauto', function (result, item, index) {

							var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
								.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

							var content = '<div class="iw"><span class="iw-pays_ville_dauto"><strong>' + result.properties
								.pays[0] + '</strong>, ' + result.properties.ville[0] +
								'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
								result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
								'</a></h1></span><br /><span class="iw-collab-sep_dauto"><a href="' + result.properties
								.structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
								.partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.part_titre[0] +
								'</p><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp[
									0] + '">' + result.properties.part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp2[
									0] + '">' + result.properties.part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp3[
									0] + '">' + result.properties.part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp4[
									0] + '">' + result.properties.part_link4[0] + '</a><p class="iw-cadre">' + result
								.properties.cadre[0] + '</p><p class="iw-permanent_eqp_dauto">' + result.properties
								.permanent_eqp[0] + '</p><a class="iw-perm_link_dauto" target="_blank" href="' + result
								.properties.permanent_url_pp[0] + '">' + result.properties.perm_link[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.permanent_url_pp2[0] + '">' + result.properties.perm_link2[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.permanent_url_pp3[0] + '">' + result.properties.perm_link3[0] +
								'</a><a class="iw-perm_link_dauto" target="_blank" href="' + result.properties
								.permanent_url_pp4[0] + '">' + result.properties.perm_link4[0] +
								'</a></span><div class="clear"><div></div>';


							$('#map_canvas').gmap('addMarker', {
								'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dauto.png") }}'),
								'bounds': false,
								'position': latlng,
								'content': content,
							}, function (map, marker) {

								$(item).addClass('clickable');
								$(item).click(function () {
									$(marker).triggerEvent('click');
									$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
										.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
									return false;
								});
							}).click(function () {
								$('#map_canvas').gmap('openInfoWindow', {
									'content': $(this)[0].content,
									'maxWidth': 350
								}, this);
							});

						});



					}));



				// Marker dis

				if ($('#select_dis').click(function () {

						// Menu dis current
						$('#select_dauto').removeClass('dauto');
						$('#select_dis').addClass('dis');
						$('#select_dpc').removeClass('dpc');

						// Menu dis show
						$('#block_collab_dauto').hide();
						$('#block_collab_dis').show();
						$('#block_collab_dpc').hide();

						$('#map_canvas').gmap('clear', 'markers');


						$('#map_canvas').gmap('microdata', 'marker_dis_iddep0', function (result, item, index) {

							var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
								.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

							var content = '<div class="iw"><span class="iw-pays_ville_dis"><strong>' + result.properties
								.pays[0] + '</strong>, ' + result.properties.ville[0] +
								'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
								result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
								'</a></h1></span><br /><span class="iw-collab-sep_dis"><a href="' + result.properties
								.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id0_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp2[0] + '">' + result.properties.id0_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp3[0] + '">' + result.properties.id0_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp4[0] + '">' + result.properties.id0_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id0_cadre[0] +
								'</p><p class="iw-permanent_eqp_dis">' + result.properties.id0_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
								'</a></span><span class="iw-collab-sep_dis"><a href="' + result.properties
								.id1_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id1_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp2[0] + '">' + result.properties.id1_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp3[0] + '">' + result.properties.id1_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp4[0] + '">' + result.properties.id1_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id1_cadre[0] +
								'</p><p class="iw-permanent_eqp_dis">' + result.properties.id1_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
								'</a></span><span class="iw-collab-sep_dis"><a href="' + result.properties
								.id2_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id2_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id2_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id2_partenaire_url_pp[0] + '">' + result.properties.id2_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id2_partenaire_url_pp2[0] + '">' + result.properties.id2_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id2_partenaire_url_pp3[0] + '">' + result.properties.id2_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id2_partenaire_url_pp4[0] + '">' + result.properties.id2_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id2_cadre[0] +
								'</p><p class="iw-permanent_eqp_dis">' + result.properties.id2_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id2_permanent_url_pp[0] + '">' + result.properties.id2_perm_link[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id2_permanent_url_pp2[0] + '">' + result.properties.id2_perm_link2[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id2_permanent_url_pp3[0] + '">' + result.properties.id2_perm_link3[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id2_permanent_url_pp4[0] + '">' + result.properties.id2_perm_link4[0] +
								'</a></span><div class="clear"><div></div>';



							$('#map_canvas').gmap('addMarker', {
								'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dis.png") }}'),
								'bounds': false,
								'position': latlng,
								'content': content,
							}, function (map, marker) {

								$(item).addClass('clickable');
								$(item).click(function () {
									$(marker).triggerEvent('click');
									$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
										.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
									return false;
								});
							}).click(function () {
								$('#map_canvas').gmap('openInfoWindow', {
									'content': $(this)[0].content,
									'maxWidth': 350
								}, this);
							});

						});


						$('#map_canvas').gmap('microdata', 'marker_dis_iddep3', function (result, item, index) {

							var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
								.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

							var content = '<div class="iw"><span class="iw-pays_ville_dis"><strong>' + result.properties
								.pays[0] + '</strong>, ' + result.properties.ville[0] +
								'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
								result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
								'</a></h1></span><br /><span class="iw-collab-sep_dis"><a href="' + result.properties
								.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id0_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp2[0] + '">' + result.properties.id0_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp3[0] + '">' + result.properties.id0_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp4[0] + '">' + result.properties.id0_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id0_cadre[0] +
								'</p><p class="iw-permanent_eqp_dis">' + result.properties.id0_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
								'</a></span><span class="iw-collab-sep_dis"><a href="' + result.properties
								.id1_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id1_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp2[0] + '">' + result.properties.id1_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp3[0] + '">' + result.properties.id1_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp4[0] + '">' + result.properties.id1_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id1_cadre[0] +
								'</p><p class="iw-permanent_eqp_dis">' + result.properties.id1_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
								'</a></span><div class="clear"><div></div>';



							$('#map_canvas').gmap('addMarker', {
								'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dis.png") }}'),
								'bounds': false,
								'position': latlng,
								'content': content,
							}, function (map, marker) {

								$(item).addClass('clickable');
								$(item).click(function () {
									$(marker).triggerEvent('click');
									$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
										.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
									return false;
								});
							}).click(function () {
								$('#map_canvas').gmap('openInfoWindow', {
									'content': $(this)[0].content,
									'maxWidth': 350
								}, this);
							});

						});


						$('#map_canvas').gmap('microdata', 'marker_dis_iddep2', function (result, item, index) {

							var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
								.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

							var content = '<div class="iw"><span class="iw-pays_ville_dis"><strong>' + result.properties
								.pays[0] + '</strong>, ' + result.properties.ville[0] +
								'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
								result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
								'</a></h1></span><br /><span class="iw-collab-sep_dis"><a href="' + result.properties
								.id0_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id0_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id0_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id0_partenaire_url_pp[0] + '">' + result.properties.id0_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp2[0] + '">' + result.properties.id0_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp3[0] + '">' + result.properties.id0_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id0_partenaire_url_pp4[0] + '">' + result.properties.id0_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id0_cadre[0] +
								'</p><p class="iw-permanent_eqp_dis">' + result.properties.id0_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp[0] + '">' + result.properties.id0_perm_link[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp2[0] + '">' + result.properties.id0_perm_link2[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp3[0] + '">' + result.properties.id0_perm_link3[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id0_permanent_url_pp4[0] + '">' + result.properties.id0_perm_link4[0] +
								'</a></span><span class="iw-collab-sep_dis"><a href="' + result.properties
								.id1_structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result
								.properties.id1_partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties
								.id1_part_titre[0] + '</p><a class="iw-part_link" target="_blank" href="' + result
								.properties.id1_partenaire_url_pp[0] + '">' + result.properties.id1_part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp2[0] + '">' + result.properties.id1_part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp3[0] + '">' + result.properties.id1_part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties
								.id1_partenaire_url_pp4[0] + '">' + result.properties.id1_part_link4[0] +
								'</a><p class="iw-cadre">' + result.properties.id1_cadre[0] +
								'</p><p class="iw-permanent_eqp_dis">' + result.properties.id1_permanent_eqp[0] +
								'</p><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp[0] + '">' + result.properties.id1_perm_link[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp2[0] + '">' + result.properties.id1_perm_link2[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp3[0] + '">' + result.properties.id1_perm_link3[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.id1_permanent_url_pp4[0] + '">' + result.properties.id1_perm_link4[0] +
								'</a></span><div class="clear"><div></div>';



							$('#map_canvas').gmap('addMarker', {
								'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dis.png") }}'),
								'bounds': false,
								'position': latlng,
								'content': content,
							}, function (map, marker) {

								$(item).addClass('clickable');
								$(item).click(function () {
									$(marker).triggerEvent('click');
									$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
										.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
									return false;
								});
							}).click(function () {
								$('#map_canvas').gmap('openInfoWindow', {
									'content': $(this)[0].content,
									'maxWidth': 350
								}, this);
							});

						});


						$('#map_canvas').gmap('microdata', 'marker_dis', function (result, item, index) {

							var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
								.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

							var content = '<div class="iw"><span class="iw-pays_ville_dis"><strong>' + result.properties
								.pays[0] + '</strong>, ' + result.properties.ville[0] +
								'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
								result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
								'</a></h1></span><br /><span class="iw-collab-sep_dis"><a href="' + result.properties
								.structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
								.partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.part_titre[0] +
								'</p><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp[
									0] + '">' + result.properties.part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp2[
									0] + '">' + result.properties.part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp3[
									0] + '">' + result.properties.part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp4[
									0] + '">' + result.properties.part_link4[0] + '</a><p class="iw-cadre">' + result
								.properties.cadre[0] + '</p><p class="iw-permanent_eqp_dis">' + result.properties
								.permanent_eqp[0] + '</p><a class="iw-perm_link_dis" target="_blank" href="' + result
								.properties.permanent_url_pp[0] + '">' + result.properties.perm_link[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.permanent_url_pp2[0] + '">' + result.properties.perm_link2[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.permanent_url_pp3[0] + '">' + result.properties.perm_link3[0] +
								'</a><a class="iw-perm_link_dis" target="_blank" href="' + result.properties
								.permanent_url_pp4[0] + '">' + result.properties.perm_link4[0] +
								'</a></span><div class="clear"><div></div>';


							$('#map_canvas').gmap('addMarker', {
								'icon': new google.maps.MarkerImage('{{ asset("designPro/system/css/gipsa-galerie/img_font/icon_dis.png") }}'),
								'bounds': false,
								'position': latlng,
								'content': content,
							}, function (map, marker) {

								$(item).addClass('clickable');
								$(item).click(function () {
									$(marker).triggerEvent('click');
									$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
										.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
									return false;
								});
							}).click(function () {
								$('#map_canvas').gmap('openInfoWindow', {
									'content': $(this)[0].content,
									'maxWidth': 350
								}, this);
							});

						});



					}));




				// Marker dpc


				if ($('#select_dpc').click(function () {

						// Menu dpc current
						$('#select_dauto').removeClass('dauto');
						$('#select_dis').removeClass('dis');
						$('#select_dpc').addClass('dpc');

						// Menu dpc show
						$('#block_collab_dauto').hide();
						$('#block_collab_dis').hide();
						$('#block_collab_dpc').show();

						$('#map_canvas').gmap('clear', 'markers');



						$('#map_canvas').gmap('microdata', 'marker_dpc', function (result, item, index) {

							var latlng = new google.maps.LatLng(result.properties.location[0].properties.geo[0].properties
								.latitude[0], result.properties.location[0].properties.geo[0].properties.longitude[0]);

							var content = '<div class="iw"><span class="iw-pays_ville_dpc"><strong>' + result.properties
								.pays[0] + '</strong>, ' + result.properties.ville[0] +
								'</span><span class="iw-struc-sep"><h1 class="iw-struc_link"><a class="iw-struc_link" href="' +
								result.properties.structure_url[0] + '" target="_blank">' + result.properties.summary[0] +
								'</a></h1></span><br /><span class="iw-collab-sep_dpc"><a href="' + result.properties
								.structure_url[0] + '" target="_blank" class="iw-partenaire_dpt_eqp">' + result.properties
								.partenaire_dpt_eqp[0] + '</a><p class="iw-part_titre">' + result.properties.part_titre[0] +
								'</p><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp[
									0] + '">' + result.properties.part_link[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp2[
									0] + '">' + result.properties.part_link2[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp3[
									0] + '">' + result.properties.part_link3[0] +
								'</a><a class="iw-part_link" target="_blank" href="' + result.properties.partenaire_url_pp4[
									0] + '">' + result.properties.part_link4[0] + '</a><p class="iw-cadre">' + result
								.properties.cadre[0] + '</p><p class="iw-permanent_eqp_dpc">' + result.properties
								.permanent_eqp[0] + '</p><a class="iw-perm_link_dpc" target="_blank" href="' + result
								.properties.permanent_url_pp[0] + '">' + result.properties.perm_link[0] +
								'</a><a class="iw-perm_link_dpc" target="_blank" href="' + result.properties
								.permanent_url_pp2[0] + '">' + result.properties.perm_link2[0] +
								'</a><a class="iw-perm_link_dpc" target="_blank" href="' + result.properties
								.permanent_url_pp3[0] + '">' + result.properties.perm_link3[0] +
								'</a><a class="iw-perm_link_dpc" target="_blank" href="' + result.properties
								.permanent_url_pp4[0] + '">' + result.properties.perm_link4[0] +
								'</a></span><div class="clear"><div></div>';


							$('#map_canvas').gmap('addMarker', {
								'icon': new google.maps.MarkerImage('{{asset("designPro/system/css/gipsa-galerie/img_font/icon_dpc.png")}}'),
								'bounds': false,
								'position': latlng,
								'content': content,
							}, function (map, marker) {

								$(item).addClass('clickable');
								$(item).click(function () {
									$(marker).triggerEvent('click');
									$('a.iw-perm_link[href=""], a.iw-part_link[href=""], a.iw-struc_link[href=""], a.iw-partenaire_dpt_eqp[href=""]')
										.addClass('no_link').removeAttr('href'); //supprime les liens si href vide
									return false;
								});
							}).click(function () {
								$('#map_canvas').gmap('openInfoWindow', {
									'content': $(this)[0].content,
									'maxWidth': 350
								}, this);
							});

						});



					}));


			});


		});
	</script>


</head>

<body>

	<div id="contenu_map_collab">

		<div id="map_canvas"></div>

		<div id="menu_collab">

			<!-- GIPSA-lab -->

			<div class="menu_dpt_all"><a href="index-2.html" id="select_gipsa">Toutes les collaborations</a></div>

			<div itemscope itemtype="marker_gipsa">
				<h1 class="summary hidden" itemprop="summary">GIPSA-lab</h1>
				<span class="description hidden" itemprop="partenaire_dpt_eqp">Le laboratoire GIPSA-lab, Grenoble Images Parole
					Signal Automatique, est une unit&eacute; mixte du CNRS et de l'universit&eacute; de Grenoble.</span>
				<span class="bold hidden" itemprop="add">GIPSA-lab, 11 rue des Math�matiques, Grenoble Campus, 38402 SAINT
					MARTIN D'HERES - 33 (0)4 76 82 62 56</span>
				<span class="location vcard" itemprop="location" itemscope itemtype="marker_gipsa">
					<span itemprop="geo" itemscope itemtype="marker_gipsa">
						<meta itemprop="latitude" content="45.193500" />
						<meta itemprop="longitude" content="5.76660" />
					</span>
				</span>
				<div class="clear"></div>
			</div>


			<!-- collaboration_DAUTO -->

			<div class="menu_dpt">

				<a href="#" class="picto_dauto" id="select_dauto">&Eacute;quipes Automatique</a></div>

			<div id="block_collab_dauto">


				<div itemscope itemtype="marker_dauto_iddep0">

					<span class="sum_dauto" itemprop="pays">Australie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.newcastle.edu.au/research-centre/cdsc/"
							target="_blank">Centre for Complex Dynamic Systems and Control</a></h1>
					<span class="hidden" itemprop="ville">Callaghan, </span>
					<span class="hidden" itemprop="structure_url">http://www.newcastle.edu.au/research-centre/cdsc/</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="-32.895840" />
							<meta itemprop="longitude" content="151.697581" />
						</span>
					</span>

					<span class="hidden" itemprop="id0_partenaire_dpt_eqp"><a
							href="http://www.newcastle.edu.au/research-centre/cdsc/" target="_blank"></a></span>
					<span class="hidden" itemprop="id0_structure_url">http://www.newcastle.edu.au/research-centre/cdsc/</span>
					<span class="hidden" itemprop="id0_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id0_part_link"><a
							href="http://www.newcastle.edu.au/research/expertise/135793.html" target="_blank">Maria SERON</a>, </span>
					<span class="hidden"
						itemprop="id0_partenaire_url_pp">http://www.newcastle.edu.au/research/expertise/135793.html</span>
					<span class="hidden" itemprop="id0_part_link2"><a
							href="http://www.newcastle.edu.au/staff/research-profile/Jose_Dedona/" target="_blank">Jose DE
							DONA</a></span>
					<span class="hidden"
						itemprop="id0_partenaire_url_pp2">http://www.newcastle.edu.au/staff/research-profile/Jose_Dedona/</span>
					<span class="hidden" itemprop="id0_part_link3"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id0_part_link4"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id0_cadre"></span>
					<span class="hidden" itemprop="id0_permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="id0_perm_link"><a href="../page_proa9d7.html?vid=483"
							target="_blank">MARTINEZ-MOLINA John-Jairo</a></span>
					<span class="hidden" itemprop="id0_permanent_url_pp">/page_pro.php?vid=483</span>
					<span class="hidden" itemprop="id0_perm_link2"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id0_perm_link3"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id0_perm_link4"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp4"></span>

					<span class="hidden" itemprop="id1_partenaire_dpt_eqp"><a
							href="http://www.newcastle.edu.au/research-centre/cdsc/" target="_blank"></a></span>
					<span class="hidden" itemprop="id1_structure_url">http://www.newcastle.edu.au/research-centre/cdsc/</span>
					<span class="hidden" itemprop="id1_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id1_part_link"><a
							href="http://www.newcastle.edu.au/staff/research-profile/James_Welsh/" target="_blank">James
							WELSH</a></span>
					<span class="hidden"
						itemprop="id1_partenaire_url_pp">http://www.newcastle.edu.au/staff/research-profile/James_Welsh/</span>
					<span class="hidden" itemprop="id1_part_link2"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id1_part_link3"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id1_part_link4"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id1_cadre">Publication commune</span>
					<span class="hidden" itemprop="id1_permanent_eqp">Collaboration de l'&eacute;quipe : SYSCO</span>
					<span class="hidden" itemprop="id1_perm_link"><a href="../page_prod223.html?vid=194" target="_blank">ALAMIR
							Mazen</a></span>
					<span class="hidden" itemprop="id1_permanent_url_pp">/page_pro.php?vid=194</span>
					<span class="hidden" itemprop="id1_perm_link2"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id1_perm_link3"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id1_perm_link4"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp4"></span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto_iddep2">

					<span class="sum_dauto" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.erau.edu/" target="_blank">Embry Riddle
							Aeronautical University</a></h1>
					<span class="hidden" itemprop="ville">Daytona Beach, </span>
					<span class="hidden" itemprop="structure_url">http://www.erau.edu/</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="29.192294" />
							<meta itemprop="longitude" content="-81.049368" />
						</span>
					</span>

					<span class="hidden" itemprop="id0_partenaire_dpt_eqp"><a href="http://www.erau.edu/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="id0_structure_url">http://www.erau.edu/</span>
					<span class="hidden" itemprop="id0_part_titre"></span>
					<span class="hidden" itemprop="id0_part_link"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id0_part_link2"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id0_part_link3"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id0_part_link4"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id0_cadre">Projet DeSIRE2</span>
					<span class="hidden" itemprop="id0_permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="id0_perm_link"><a href="../page_pro06a4.html?vid=485" target="_blank">WITRANT
							Emmanuel</a></span>
					<span class="hidden" itemprop="id0_permanent_url_pp">/page_pro.php?vid=485</span>
					<span class="hidden" itemprop="id0_perm_link2"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id0_perm_link3"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id0_perm_link4"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp4"></span>

					<span class="hidden" itemprop="id1_partenaire_dpt_eqp"><a href="http://www.erau.edu/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="id1_structure_url">http://www.erau.edu/</span>
					<span class="hidden" itemprop="id1_part_titre"></span>
					<span class="hidden" itemprop="id1_part_link"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id1_part_link2"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id1_part_link3"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id1_part_link4"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id1_cadre">Projet ATLANTIS</span>
					<span class="hidden" itemprop="id1_permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="id1_perm_link"><a href="../page_pro58bb.html?vid=241" target="_blank">THIRIET
							Jean-Marc</a></span>
					<span class="hidden" itemprop="id1_permanent_url_pp">/page_pro.php?vid=241</span>
					<span class="hidden" itemprop="id1_perm_link2"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id1_perm_link3"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id1_perm_link4"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp4"></span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto_iddep2">

					<span class="sum_dauto" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.cran.uhp-nancy.fr/" target="_blank">CRAN</a></h1>
					<span class="hidden" itemprop="ville">Nancy, </span>
					<span class="hidden" itemprop="structure_url">http://www.cran.uhp-nancy.fr/</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="48.650377" />
							<meta itemprop="longitude" content="6.145277" />
						</span>
					</span>

					<span class="hidden" itemprop="id0_partenaire_dpt_eqp"><a href="http://www.cran.uhp-nancy.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="id0_structure_url">http://www.cran.uhp-nancy.fr/</span>
					<span class="hidden" itemprop="id0_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id0_part_link"><a href="http://perso.ensem.inpl-nancy.fr/Benoit.Marx/"
							target="_blank">Benoit MARX</a></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp">http://perso.ensem.inpl-nancy.fr/Benoit.Marx/</span>
					<span class="hidden" itemprop="id0_part_link2"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id0_part_link3"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id0_part_link4"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id0_cadre">Syst�mes singuliers. </span>
					<span class="hidden" itemprop="id0_permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="id0_perm_link"><a href="../page_proc261.html?vid=226" target="_blank">KOENIG
							Damien</a></span>
					<span class="hidden" itemprop="id0_permanent_url_pp">/page_pro.php?vid=226</span>
					<span class="hidden" itemprop="id0_perm_link2"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id0_perm_link3"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id0_perm_link4"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp4"></span>

					<span class="hidden" itemprop="id1_partenaire_dpt_eqp"><a href="http://www.cran.uhp-nancy.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="id1_structure_url">http://www.cran.uhp-nancy.fr/</span>
					<span class="hidden" itemprop="id1_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id1_part_link">Christophe AUBRUN</span>
					<span class="hidden" itemprop="id1_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id1_part_link2"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id1_part_link3"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id1_part_link4"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id1_cadre">Action nationale ConecsSdF (GdR MACS/ARC)</span>
					<span class="hidden" itemprop="id1_permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="id1_perm_link"><a href="../page_pro58bb.html?vid=241" target="_blank">THIRIET
							Jean-Marc</a></span>
					<span class="hidden" itemprop="id1_permanent_url_pp">/page_pro.php?vid=241</span>
					<span class="hidden" itemprop="id1_perm_link2"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id1_perm_link3"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id1_perm_link4"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp4"></span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto_iddep2">

					<span class="sum_dauto" itemprop="pays">Mexique</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://www.itesm.edu/wps/wcm/connect/ITESM/Tecnologico+de+Monterrey/English-us/home.aspx"
							target="_blank">Tecnologico de Monterrey</a></h1>
					<span class="hidden" itemprop="ville">Monterrey, </span>
					<span class="hidden"
						itemprop="structure_url">http://www.itesm.edu/wps/wcm/connect/ITESM/Tecnologico+de+Monterrey/English-us/home.aspx</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="25.651198" />
							<meta itemprop="longitude" content="-100.294032" />
						</span>
					</span>

					<span class="hidden" itemprop="id0_partenaire_dpt_eqp"><a
							href="http://www.itesm.edu/wps/wcm/connect/ITESM/Tecnologico+de+Monterrey/English-us/home.aspx"
							target="_blank"></a></span>
					<span class="hidden"
						itemprop="id0_structure_url">http://www.itesm.edu/wps/wcm/connect/ITESM/Tecnologico+de+Monterrey/English-us/home.aspx</span>
					<span class="hidden" itemprop="id0_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id0_part_link">Ruben MORALES MENENDEZ</span>
					<span class="hidden" itemprop="id0_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id0_part_link2"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id0_part_link3"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id0_part_link4"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id0_cadre">Mod�lisation et commande robuste de chassis automobile</span>
					<span class="hidden" itemprop="id0_permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="id0_perm_link"><a href="../page_prof0c0.html?vid=238" target="_blank">SENAME
							Olivier</a></span>
					<span class="hidden" itemprop="id0_permanent_url_pp">/page_pro.php?vid=238</span>
					<span class="hidden" itemprop="id0_perm_link2"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id0_perm_link3"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id0_perm_link4"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp4"></span>

					<span class="hidden" itemprop="id1_partenaire_dpt_eqp"><a
							href="http://www.itesm.edu/wps/wcm/connect/ITESM/Tecnologico+de+Monterrey/English"
							target="_blank"></a></span>
					<span class="hidden"
						itemprop="id1_structure_url">http://www.itesm.edu/wps/wcm/connect/ITESM/Tecnologico+de+Monterrey/English</span>
					<span class="hidden" itemprop="id1_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id1_part_link">Ricardo RAMIREZ MENDOZA</span>
					<span class="hidden" itemprop="id1_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id1_part_link2"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id1_part_link3"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id1_part_link4"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id1_cadre">Mod�lisation et commande robuste de chassis automobile</span>
					<span class="hidden" itemprop="id1_permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="id1_perm_link"><a href="../page_prof0c0.html?vid=238" target="_blank">SENAME
							Olivier</a></span>
					<span class="hidden" itemprop="id1_permanent_url_pp">/page_pro.php?vid=238</span>
					<span class="hidden" itemprop="id1_perm_link2"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id1_perm_link3"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id1_perm_link4"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp4"></span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Alg�rie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.univ-oeb.dz/index.php?page=Acceuil"
							target="_blank">Universit� Larbi Ben M�Hidi</a></h1>
					<span class="hidden" itemprop="ville">Oum El-Bouaghi, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.univ-oeb.dz/index.php?page=Acceuil"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.univ-oeb.dz/index.php?page=Acceuil</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Abdelabaki DJOUAMBI</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro7269.html?vid=243" target="_blank">VODA
							Alina</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=243</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="35.880332" />
							<meta itemprop="longitude" content="7.090997" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Allemagne</span>
					<h1 class="sum_struc" itemprop="summary"><a href="https://www.uni-saarland.de/nc/en/home.html"
							target="_blank">Universit�t des Saarlandes</a></h1>
					<span class="hidden" itemprop="ville">Saarbr�cken, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="https://www.uni-saarland.de/nc/en/home.html"
							target="_blank">Department of Systems Eng.</a></span>
					<span class="hidden" itemprop="structure_url">https://www.uni-saarland.de/nc/en/home.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Gianluca RIZZELLO</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SYSCO</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro741e.html?vid=2956" target="_blank">Francesco
							FERRANTE</a></span>
					<span class="hidden"
						itemprop="permanent_url_pp">http://www.gipsa-lab.grenoble-inp.fr/page_pro.php?vid=2956</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="49.255014" />
							<meta itemprop="longitude" content="7.040546" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Espagne</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.esi2.us.es/ISA/GAR/webisa/frame.htm"
							target="_blank">Universidad de Sevilla</a></h1>
					<span class="hidden" itemprop="ville">Seville, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.esi2.us.es/ISA/GAR/webisa/frame.htm"
							target="_blank">Ingenieria de Sistemas Y Automatica</a></span>
					<span class="hidden" itemprop="structure_url">http://www.esi2.us.es/ISA/GAR/webisa/frame.htm</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.esi2.us.es/ISA/GAR/webisa/frame.htm"
							target="_blank">Francisco RODRIGUEZ RUBIO</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.esi2.us.es/ISA/GAR/webisa/frame.htm</span>
					<span class="hidden" itemprop="part_link2"><a href="http://www.esi2.us.es/ISA/GAR/webisa/frame.htm"
							target="_blank">Francisco GORDILLO</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://www.esi2.us.es/ISA/GAR/webisa/frame.htm</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Delta modulation � differential coding � stabilization of networked
						control systems (publication commune)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : NECS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro1592.html?vid=206" target="_blank">CANUDAS de
							WIT Carlos</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=206</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="37.393516" />
							<meta itemprop="longitude" content="-5.993521" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://ccdc.ucsb.edu/" target="_blank">Center for Control,
							Dynamical-Systems and Computation</a></h1>
					<span class="hidden" itemprop="ville">Santa Barbara, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://ccdc.ucsb.edu/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://ccdc.ucsb.edu/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://ccdc.ucsb.edu/?q=ccdc_member/Teel"
							target="_blank">Andrew TEEL</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://ccdc.ucsb.edu/?q=ccdc_member/Teel</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Publications communes</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SYSCO</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro3ff5.html?vid=1207" target="_blank">PRIEUR
							Christophe</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=1207</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="34.414663" />
							<meta itemprop="longitude" content="-119.840934" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="https://cecas.clemson.edu/ndcl/home-4/"
							target="_blank">Clemson University</a></h1>
					<span class="hidden" itemprop="ville">Clemson, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="https://cecas.clemson.edu/ndcl/home-4/"
							target="_blank">Electrical and Computer Engineering </a></span>
					<span class="hidden" itemprop="structure_url">https://cecas.clemson.edu/ndcl/home-4/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Yongqiang WANG</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SYSCO</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro741e.html?vid=2956" target="_blank">Francesco
							FERRANTE</a></span>
					<span class="hidden"
						itemprop="permanent_url_pp">http://www.gipsa-lab.grenoble-inp.fr/page_pro.php?vid=2956</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="34.676542" />
							<meta itemprop="longitude" content="-82.838949" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary">University of California Santa Cruz</h1>
					<span class="hidden" itemprop="ville">Santa Cruz, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp">Hybrid Systems Lab</span>
					<span class="hidden" itemprop="structure_url"></span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="https://hybrid.soe.ucsc.edu/home" target="_blank">Ricardo
							G. SANFELICE</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">https://hybrid.soe.ucsc.edu/home</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SYSCO</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro741e.html?vid=2956" target="_blank">Francesco
							FERRANTE</a></span>
					<span class="hidden"
						itemprop="permanent_url_pp">http://www.gipsa-lab.grenoble-inp.fr/page_pro.php?vid=2956</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="36.977962" />
							<meta itemprop="longitude" content="-122.054289" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.leti.fr/" target="_blank">CEA-LETI</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.leti.fr/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.leti.fr/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Re-identification de v�hicules par signatures magn�tiques</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_procb65.html?vid=209" target="_blank">CHARBONNIER
							Sylvie</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=209</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="45.201816" />
							<meta itemprop="longitude" content="5.705398" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.g2elab.grenoble-inp.fr/"
							target="_blank">G2Elab</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.g2elab.grenoble-inp.fr/"
							target="_blank">Equipe Sysrel</a></span>
					<span class="hidden" itemprop="structure_url">http://www.g2elab.grenoble-inp.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Delphine RIU, </span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2">Nicolas RETIERE</span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Commande optimale de g�n�rateurs �lectrochimiques et de stockage il�t�
						(BQR COGESI)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro06a4.html?vid=485" target="_blank">WITRANT
							Emmanuel</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=485</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prof0c0.html?vid=238" target="_blank">SENAME
							Olivier</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=238</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="45.193493" />
							<meta itemprop="longitude" content="5.763647" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://www.irccyn.ec-nantes.fr/spip.php?rubrique5&amp;letter=L&amp;submit=1&amp;uid=lafay"
							target="_blank">IRCCYN</a></h1>
					<span class="hidden" itemprop="ville">Nantes, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.irccyn.ec-nantes.fr/spip.php?rubrique5&amp;letter=L&amp;submit=1&amp;uid=lafay"
							target="_blank"></a></span>
					<span class="hidden"
						itemprop="structure_url">http://www.irccyn.ec-nantes.fr/spip.php?rubrique5&letter=L&submit=1&uid=lafay</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.irccyn.ec-nantes.fr/spip.php?rubrique5&amp;letter=L&amp;submit=1&amp;uid=lafay"
							target="_blank">Jean-Fran�ois LAFAY</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.irccyn.ec-nantes.fr/spip.php?rubrique5&letter=L&submit=1&uid=lafay</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Syst�mes � retards</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof0c0.html?vid=238" target="_blank">SENAME
							Olivier</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=238</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="47.250922" />
							<meta itemprop="longitude" content="-1.547406" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.irit.fr/" target="_blank">IRIT</a></h1>
					<span class="hidden" itemprop="ville">Toulouse, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.irit.fr/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.irit.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://mailhes.perso.enseeiht.fr/" target="_blank">Corinne
							MAILHES</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://mailhes.perso.enseeiht.fr/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Projet AStrion</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proe5ee.html?vid=67" target="_blank">MARTIN
							Nadine</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=67</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="43.567729" />
							<meta itemprop="longitude" content="1.457822" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://neel.cnrs.fr/" target="_blank">Institut NEEL</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://neel.cnrs.fr/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://neel.cnrs.fr/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Nanosyst�mes</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro7269.html?vid=243" target="_blank">VODA
							Alina</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=243</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="45.204220" />
							<meta itemprop="longitude" content="5.702042" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://lgge.osug.fr/" target="_blank">LGGE</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://lgge.osug.fr/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://lgge.osug.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://lgge.osug.fr/article171.html"
							target="_blank">Patricia MARTINERIE</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://lgge.osug.fr/article171.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Mod�lisation par identification pour le transport des gaz trace dans le
						n�v� (PEPS CNRS)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro06a4.html?vid=485" target="_blank">WITRANT
							Emmanuel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=485</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="45.193780" />
							<meta itemprop="longitude" content="5.758840" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.miam.crespim.uha.fr/accueil/?LanguageType=fr"
							target="_blank">MIPS</a></h1>
					<span class="hidden" itemprop="ville">Mulhouse, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.miam.crespim.uha.fr/accueil/?LanguageType=fr" target="_blank">Mod�lisation et
							Identification en Automatique et M�canique </a></span>
					<span class="hidden" itemprop="structure_url">http://www.miam.crespim.uha.fr/accueil/?LanguageType=fr</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Michel BASSET</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Observation et commande de la dynamique de v�hicules (projet
						INOVE)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof0c0.html?vid=238" target="_blank">SENAME
							Olivier</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=238</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="47.730866" />
							<meta itemprop="longitude" content="7.301137" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.onera.fr/dcsd/index.php"
							target="_blank">ONERA</a></h1>
					<span class="hidden" itemprop="ville">Toulouse, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.onera.fr/dcsd/index.php"
							target="_blank">D�partement DCSD</a></span>
					<span class="hidden" itemprop="structure_url">http://www.onera.fr/dcsd/index.php</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="https://sites.google.com/site/charlespoussotvassal/"
							target="_blank">Charles POUSSOT-VASSAL</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">https://sites.google.com/site/charlespoussotvassal/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Controle dynamique de v�hicule (publication commune)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof0c0.html?vid=238" target="_blank">SENAME
							Olivier</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=238</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="43.578899" />
							<meta itemprop="longitude" content="1.475887" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.univ-valenciennes.fr/TEMPO/"
							target="_blank">TEMPO</a></h1>
					<span class="hidden" itemprop="ville">Valenciennes, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.univ-valenciennes.fr/TEMPO/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.univ-valenciennes.fr/TEMPO/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.univ-valenciennes.fr/TEMPO/membres/cauffriez_laurent" target="_blank">Laurent
							CAUFFRIEZ</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.univ-valenciennes.fr/TEMPO/membres/cauffriez_laurent</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Action nationale ConecsSdF (GdR MACS/ARC)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro58bb.html?vid=241" target="_blank">THIRIET
							Jean-Marc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=241</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="50.326094" />
							<meta itemprop="longitude" content="3.513043" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Hongrie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.sztaki.hu/?en" target="_blank">Acad�mie des
							sciences</a></h1>
					<span class="hidden" itemprop="ville">Budapest, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.sztaki.hu/?en" target="_blank">MTA
							SZTAKI</a></span>
					<span class="hidden" itemprop="structure_url">http://www.sztaki.hu/?en</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.sztaki.hu/scl/web/members/gaspar_personal.php"
							target="_blank">Peter GASPAR</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.sztaki.hu/scl/web/members/gaspar_personal.php</span>
					<span class="hidden" itemprop="part_link2"><a href="http://www.sztaki.hu/scl/web/members/bokor.php"
							target="_blank">Jozsef BOKOR</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://www.sztaki.hu/scl/web/members/bokor.php</span>
					<span class="hidden" itemprop="part_link3"><a href="http://www.sztaki.hu/scl/web/members/szabo.php"
							target="_blank">Zoltan SZABO</a></span>
					<span class="hidden" itemprop="partenaire_url_pp3">http://www.sztaki.hu/scl/web/members/szabo.php</span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Mod�lisation et commande robuste de chassis automobile (projet
						CROTAL)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof0c0.html?vid=238" target="_blank">SENAME
							Olivier</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=238</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="47.477949" />
							<meta itemprop="longitude" content="19.051579" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Inde</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://mat.iitm.ac.in/" target="_blank">Institute of
							Technology Madras</a></h1>
					<span class="hidden" itemprop="ville">Chennai, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://mat.iitm.ac.in/" target="_blank">department
							of Mathematics</a></span>
					<span class="hidden" itemprop="structure_url">http://mat.iitm.ac.in/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Ferromagnetic material � Landau-Lifschitz equation � Control
						(publication commune)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SYSCO</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro3ff5.html?vid=1207" target="_blank">PRIEUR
							Christophe</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=1207</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="12.993435" />
							<meta itemprop="longitude" content="80.236194" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Italie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.dei.polimi.it/" target="_blank">Politecnico di
							Milano</a></h1>
					<span class="hidden" itemprop="ville">Milan, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.dei.polimi.it/"
							target="_blank">Dipartimento di Elettronica e Informazione</a></span>
					<span class="hidden" itemprop="structure_url">http://www.dei.polimi.it/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.dei.polimi.it/personale/docentidettaglio.php?id_docente=214&amp;id_sezione=&amp;lettera=S&amp;idlang=eng"
							target="_blank">Sergio Matteo SAVARESI</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.dei.polimi.it/personale/docentidettaglio.php?id_docente=214&id_sezione=&lettera=S&idlang=eng</span>
					<span class="hidden" itemprop="part_link2"><a
							href="http://www.dei.polimi.it/personale/docentidettaglio.php?id_docente=304&amp;id_sezione=&amp;lettera=T&amp;idlang=eng"
							target="_blank">Mara TANELLI</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://www.dei.polimi.it/personale/docentidettaglio.php?id_docente=304&id_sezione=&lettera=T&idlang=eng</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Commande de suspensions automobiles</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof0c0.html?vid=238" target="_blank">SENAME
							Olivier</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=238</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="45.478264" />
							<meta itemprop="longitude" content="9.226765" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Italie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.dei.unipd.it/" target="_blank">Universita degli
							studi di Padova</a></h1>
					<span class="hidden" itemprop="ville">Padoue, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.dei.unipd.it/"
							target="_blank">Dipartimento di Ingegneria de l&apos;Informazione</a></span>
					<span class="hidden" itemprop="structure_url">http://www.dei.unipd.it/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.dei.unipd.it/wdyn/index.php?IDsezione=5085&amp;IDutente=279&amp;IDinsegnamento=&amp;IDgruppo_pass=&amp;preview="
							target="_blank">Ruggero CARLI</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.dei.unipd.it/wdyn/index.php?IDsezione=5085&IDutente=279&IDinsegnamento=&IDgruppo_pass=&preview=</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">publication commune</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : NECS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro9098.html?vid=1269" target="_blank">GARIN
							Federica</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=1269</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="45.417431" />
							<meta itemprop="longitude" content="11.871665" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Pologne</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.agh.edu.pl/en" target="_blank">University of
							Science and Technology Krakow</a></h1>
					<span class="hidden" itemprop="ville">Cracovie, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.agh.edu.pl/en"
							target="_blank">Department of Mechanical Engineering and Robotics</a></span>
					<span class="hidden" itemprop="structure_url">http://www.agh.edu.pl/en</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Jacek URBANEK, </span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2">Tomash BARSZCZ</span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Traitement du signal pour le diagnostic de machines tournantes
						(�oliennes). Publication commune</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proe5ee.html?vid=67" target="_blank">MARTIN
							Nadine</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=67</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="50.065128" />
							<meta itemprop="longitude" content="19.923656" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Pologne</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.ig.pwr.wroc.pl/labdiag/" target="_blank">Wroclaw
							University of Technology</a></h1>
					<span class="hidden" itemprop="ville">Wroclaw, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.ig.pwr.wroc.pl/labdiag/"
							target="_blank">Diagnostics and Vibro-Acoustics Science Laboratory</a></span>
					<span class="hidden" itemprop="structure_url">http://www.ig.pwr.wroc.pl/labdiag/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.ig.pwr.wroc.pl/~radzim/"
							target="_blank">Radoslaw ZIMROZ</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.ig.pwr.wroc.pl/~radzim/</span>
					<span class="hidden" itemprop="part_link2"><a href="http://www.ig.pwr.wroc.pl/~bartel/" target="_blank">Walter
							BARTELMUS</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://www.ig.pwr.wroc.pl/~bartel/</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Traitement du signal pour le diagnostic de machines tournantes
						(�oliennes)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proe5ee.html?vid=67" target="_blank">MARTIN
							Nadine</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=67</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="51.110824" />
							<meta itemprop="longitude" content="17.059786" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Roumanie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.pub.ro/" target="_blank">Universit� Polytechnique
							de Bucarest</a></h1>
					<span class="hidden" itemprop="ville">Bucarest, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.pub.ro/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.pub.ro/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Dumitru POPESCU, </span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2">R. STEFAN</span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro7269.html?vid=243" target="_blank">VODA
							Alina</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=243</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="44.439387" />
							<meta itemprop="longitude" content="26.049435" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Roumanie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.ucv.ro/en/" target="_blank">Universit� de
							Craiova</a></h1>
					<span class="hidden" itemprop="ville">Craiova, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.ucv.ro/en/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.ucv.ro/en/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Energie pour le b�timent intelligent</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro06a4.html?vid=485" target="_blank">WITRANT
							Emmanuel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=485</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="44.319734" />
							<meta itemprop="longitude" content="23.800671" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">R�publique Tch�que</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.muni.cz/" target="_blank">Masaryk University</a>
					</h1>
					<span class="hidden" itemprop="ville">Brno, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.muni.cz/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.muni.cz/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Co-tutelle de th�se</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SLR</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro7269.html?vid=243" target="_blank">VODA
							Alina</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=243</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="49.199766" />
							<meta itemprop="longitude" content="16.605220" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dauto">

					<span class="sum_dauto" itemprop="pays">Suisse</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://public.web.cern.ch/public/" target="_blank">CERN</a>
					</h1>
					<span class="hidden" itemprop="ville">Gen�ve, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://public.web.cern.ch/public/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://public.web.cern.ch/public/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Aide au diagnostic par analyse de signatures d�alarmes � Application au
						LHC</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_procb65.html?vid=209" target="_blank">CHARBONNIER
							Sylvie</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=209</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prod160.html?vid=223" target="_blank">GOUIN
							Alexia</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=223</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dauto">
						<span itemprop="geo" itemscope itemtype="marker_dauto">
							<meta itemprop="latitude" content="46.234656" />
							<meta itemprop="longitude" content="6.056163" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

			</div>


			<!-- collaboration_DIS -->

			<div class="menu_dpt"><a href="#" class="picto_dis" id="select_dis">&Eacute;quipes Images-Signal</a></div>
			<div id="block_collab_dis">


				<div itemscope itemtype="marker_dis_iddep0">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www-list.cea.fr/" target="_blank">CEA-LIST Saclay</a>
					</h1>
					<span class="hidden" itemprop="ville">Saclay, </span>
					<span class="hidden" itemprop="structure_url">http://www-list.cea.fr</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.840006" />
							<meta itemprop="longitude" content="2.170676" />
						</span>
					</span>

					<span class="hidden" itemprop="id0_partenaire_dpt_eqp"><a href="http://www-list.cea.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="id0_structure_url">http://www-list.cea.fr</span>
					<span class="hidden" itemprop="id0_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id0_part_link">A. LARUE</span>
					<span class="hidden" itemprop="id0_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id0_part_link2"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id0_part_link3"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id0_part_link4"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id0_cadre">D�composition parcimonieuse de signaux multidimensionnels
						(th�se)</span>
					<span class="hidden" itemprop="id0_permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="id0_perm_link"><a href="../page_pro5508.html?vid=73" target="_blank">MARS
							J&eacute;r&ocirc;me</a></span>
					<span class="hidden" itemprop="id0_permanent_url_pp">/page_pro.php?vid=73</span>
					<span class="hidden" itemprop="id0_perm_link2"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id0_perm_link3"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id0_perm_link4"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp4"></span>

					<span class="hidden" itemprop="id1_partenaire_dpt_eqp"><a href="http://www-list.cea.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="id1_structure_url">http://www-list.cea.fr/</span>
					<span class="hidden" itemprop="id1_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id1_part_link">Antoine Souloumiac</span>
					<span class="hidden" itemprop="id1_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id1_part_link2"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id1_part_link3"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id1_part_link4"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id1_cadre">Projet ANR Openvibe2</span>
					<span class="hidden" itemprop="id1_permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="id1_perm_link"><a href="../page_prod981.html?vid=542" target="_blank">RIVET
							Bertrand</a></span>
					<span class="hidden" itemprop="id1_permanent_url_pp">/page_pro.php?vid=542</span>
					<span class="hidden" itemprop="id1_perm_link2"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id1_perm_link3"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id1_perm_link4"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp4"></span>

					<span class="hidden" itemprop="id2_partenaire_dpt_eqp"><a href="http://www-list.cea.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="id2_structure_url">http://www-list.cea.fr/</span>
					<span class="hidden" itemprop="id2_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id2_part_link">Fanny BUYENS</span>
					<span class="hidden" itemprop="id2_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id2_part_link2"></span>
					<span class="hidden" itemprop="id2_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id2_part_link3"></span>
					<span class="hidden" itemprop="id2_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id2_part_link4"></span>
					<span class="hidden" itemprop="id2_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id2_cadre">Tomographie X</span>
					<span class="hidden" itemprop="id2_permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="id2_perm_link"><a href="../page_pro4854.html?vid=79" target="_blank">HOUZET
							Dominique</a></span>
					<span class="hidden" itemprop="id2_permanent_url_pp">/page_pro.php?vid=79</span>
					<span class="hidden" itemprop="id2_perm_link2"></span>
					<span class="hidden" itemprop="id2_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id2_perm_link3"></span>
					<span class="hidden" itemprop="id2_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id2_perm_link4"></span>
					<span class="hidden" itemprop="id2_permanent_url_pp4"></span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis_iddep3">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.chu-grenoble.fr/" target="_blank">CHU
							Grenoble</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>
					<span class="hidden" itemprop="structure_url">http://www.chu-grenoble.fr/</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.178853" />
							<meta itemprop="longitude" content="5.713661" />
						</span>
					</span>

					<span class="hidden" itemprop="id0_partenaire_dpt_eqp"><a href="http://www.chu-grenoble.fr/"
							target="_blank">P�le Psychiatrie Adulte</a></span>
					<span class="hidden" itemprop="id0_structure_url">http://www.chu-grenoble.fr/</span>
					<span class="hidden" itemprop="id0_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id0_part_link">Thierry BOURGEROL, </span>
					<span class="hidden" itemprop="id0_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id0_part_link2">D. SZEKELY, </span>
					<span class="hidden" itemprop="id0_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id0_part_link3">Mircea POLOSAN</span>
					<span class="hidden" itemprop="id0_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id0_part_link4"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id0_cadre">CPP �Bipolaires�</span>
					<span class="hidden" itemprop="id0_permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="id0_perm_link"><a href="../page_pro4ef8.html?vid=98" target="_blank">GUYADER
							Nathalie</a></span>
					<span class="hidden" itemprop="id0_permanent_url_pp">/page_pro.php?vid=98</span>
					<span class="hidden" itemprop="id0_perm_link2"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id0_perm_link3"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id0_perm_link4"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp4"></span>

					<span class="hidden" itemprop="id1_partenaire_dpt_eqp"><a href="http://www.chu-grenoble.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="id1_structure_url">http://www.chu-grenoble.fr/</span>
					<span class="hidden" itemprop="id1_part_titre"></span>
					<span class="hidden" itemprop="id1_part_link"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id1_part_link2"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id1_part_link3"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id1_part_link4"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id1_cadre">Analyse de signaux biom�dicaux</span>
					<span class="hidden" itemprop="id1_permanent_eqp">Collaboration de l'&eacute;quipe : CICS</span>
					<span class="hidden" itemprop="id1_perm_link"><a href="../page_pro53b1.html?vid=559" target="_blank">ACHARD
							Sophie</a></span>
					<span class="hidden" itemprop="id1_permanent_url_pp">/page_pro.php?vid=559</span>
					<span class="hidden" itemprop="id1_perm_link2"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id1_perm_link3"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id1_perm_link4"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp4"></span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis_iddep2">

					<span class="sum_dis" itemprop="pays">Roumanie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.mta.ro/" target="_blank">Academia Tehnica
							Militara</a></h1>
					<span class="hidden" itemprop="ville">Bucarest, </span>
					<span class="hidden" itemprop="structure_url">http://www.mta.ro/</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="44.422011" />
							<meta itemprop="longitude" content="26.086664" />
						</span>
					</span>

					<span class="hidden" itemprop="id0_partenaire_dpt_eqp"><a href="http://www.mta.ro/" target="_blank">Facult�
							d��lectronique</a></span>
					<span class="hidden" itemprop="id0_structure_url">http://www.mta.ro/</span>
					<span class="hidden" itemprop="id0_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id0_part_link">Prof. Alexandru SERBANESCU</span>
					<span class="hidden" itemprop="id0_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id0_part_link2"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id0_part_link3"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id0_part_link4"></span>
					<span class="hidden" itemprop="id0_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id0_cadre">ERASMUS � Nouvelles m�thodes pour l�analyse des ph�nom�nes
						transitoires �</span>
					<span class="hidden" itemprop="id0_permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="id0_perm_link"><a href="../page_prof5dd.html?vid=93" target="_blank">IOANA
							Cornel</a></span>
					<span class="hidden" itemprop="id0_permanent_url_pp">/page_pro.php?vid=93</span>
					<span class="hidden" itemprop="id0_perm_link2"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id0_perm_link3"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id0_perm_link4"></span>
					<span class="hidden" itemprop="id0_permanent_url_pp4"></span>

					<span class="hidden" itemprop="id1_partenaire_dpt_eqp"><a href="http://www.mta.ro/geoint/index.html"
							target="_blank">GEOINT Center</a></span>
					<span class="hidden" itemprop="id1_structure_url">http://www.mta.ro/geoint/index.html</span>
					<span class="hidden" itemprop="id1_part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="id1_part_link">Col. Dan RADUCANU</span>
					<span class="hidden" itemprop="id1_partenaire_url_pp"></span>
					<span class="hidden" itemprop="id1_part_link2"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp2"></span>
					<span class="hidden" itemprop="id1_part_link3"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp3"></span>
					<span class="hidden" itemprop="id1_part_link4"></span>
					<span class="hidden" itemprop="id1_partenaire_url_pp4"></span>
					<span class="hidden" itemprop="id1_cadre">Echange �tudiants ERASMUS sur des th�matiques li�es � l�imagerie
						SAR</span>
					<span class="hidden" itemprop="id1_permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="id1_perm_link"><a href="../page_pro103f.html?vid=755" target="_blank">VASILE
							Gabriel</a></span>
					<span class="hidden" itemprop="id1_permanent_url_pp">/page_pro.php?vid=755</span>
					<span class="hidden" itemprop="id1_perm_link2"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp2"></span>
					<span class="hidden" itemprop="id1_perm_link3"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp3"></span>
					<span class="hidden" itemprop="id1_perm_link4"></span>
					<span class="hidden" itemprop="id1_permanent_url_pp4"></span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Allemagne</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://www.dlr.de/caf/en/desktopdefault.aspx/tabid-5279/8913_read-16239/" target="_blank">German
							Aerospace Center-Earth Observation Center</a></h1>
					<span class="hidden" itemprop="ville">We�ling, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.dlr.de/caf/en/desktopdefault.aspx/tabid-5279/8913_read-16239/" target="_blank">Remote
							Sensing Technology Institute </a></span>
					<span class="hidden"
						itemprop="structure_url">http://www.dlr.de/caf/en/desktopdefault.aspx/tabid-5279/8913_read-16239/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Prof. Mihai DATCU, </span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2">Prof. Irena HAJNSEK, </span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3">Prof. Andreas REIGBERG</span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Acquisition et traitement des images SAR. Extraction of information on
						snow and glacier motion with TSX Quad polarimetric image. </span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro103f.html?vid=755" target="_blank">VASILE
							Gabriel</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=755</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro69b0.html?vid=3" target="_blank">GAY
							Michel</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=3</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.086881" />
							<meta itemprop="longitude" content="11.279562" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Australie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.swinburne.edu.au/lss/bpsyc/"
							target="_blank">Swinburne Institute of Technology</a></h1>
					<span class="hidden" itemprop="ville">Melbourne, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.swinburne.edu.au/lss/bpsyc/"
							target="_blank">Brain and Psychological Sciences Research Centre </a></span>
					<span class="hidden" itemprop="structure_url">http://www.swinburne.edu.au/lss/bpsyc/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.swinburne.edu.au/lss/staff/view.php?who=rsilberstein" target="_blank">Richard
							SILBERSTEIN</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.swinburne.edu.au/lss/staff/view.php?who=rsilberstein</span>
					<span class="hidden" itemprop="part_link2"><a
							href="http://www.swinburne.edu.au/lss/staff/view.php?who=jciorciari" target="_blank">Joseph
							CIORCIARI</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://www.swinburne.edu.au/lss/staff/view.php?who=jciorciari</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">PhD thesis co-supervision</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro91b1.html?vid=518" target="_blank">CONGEDO
							Marco</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=518</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="-37.850933" />
							<meta itemprop="longitude" content="144.991028" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Belgique</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.brai2n.net/research/index.html"
							target="_blank">Brain Research Center</a></h1>
					<span class="hidden" itemprop="ville">Antwerp, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.brai2n.net/research/index.html"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.brai2n.net/research/index.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Dirk DE RIDDER</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">PhD thesis co-supervision and research collaboration : Tinnitus � Group
						Blind Source Separation � EEG Norms</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro91b1.html?vid=518" target="_blank">CONGEDO
							Marco</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=518</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="51.166212" />
							<meta itemprop="longitude" content="4.406519" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Belgique</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.ulb.ac.be/rech/inventaire/unites/ULB696.html"
							target="_blank">Universit� Libre de Bruxelles</a></h1>
					<span class="hidden" itemprop="ville">Bruxelles, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.ulb.ac.be/rech/inventaire/unites/ULB696.html" target="_blank">Environmental
							hydroacoustics laboratory</a></span>
					<span class="hidden" itemprop="structure_url">http://www.ulb.ac.be/rech/inventaire/unites/ULB696.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://ehl.ulb.ac.be/staff.html#Jean-Pierre_Hermand"
							target="_blank">Jean-Pierre HERMAND</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://ehl.ulb.ac.be/staff.html#Jean-Pierre_Hermand</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">M�thodes d�observation discr�te de l�environnement (projet MODE
						2)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof5dd.html?vid=93" target="_blank">IOANA
							Cornel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=93</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="50.817975" />
							<meta itemprop="longitude" content="4.266272" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Br�sil</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.fee.unicamp.br/feec2010/"
							target="_blank">UNICAMP-School of Electrical and computer Engineering</a></h1>
					<span class="hidden" itemprop="ville">Campinas, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.fee.unicamp.br/feec2010/"
							target="_blank">Department of Microwave and Optics</a></span>
					<span class="hidden" itemprop="structure_url">http://www.fee.unicamp.br/feec2010/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.fee.unicamp.br/feec2010/query_prof.php?ra=68241"
							target="_blank">Joao Marcos TRAVASSOS ROMANO</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.fee.unicamp.br/feec2010/query_prof.php?ra=68241</span>
					<span class="hidden" itemprop="part_link2">L. DUARTE</span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">S�paration de sources, capteurs chimiques et BCI </span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro395f.html?vid=72" target="_blank">JUTTEN
							Christian</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=72</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prod981.html?vid=542" target="_blank">RIVET
							Bertrand</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=542</span>
					<span class="hidden" itemprop="perm_link3"><a href="../page_pro91b1.html?vid=518" target="_blank">CONGEDO
							Marco</a></span>
					<span class="hidden" itemprop="permanent_url_pp3">/page_pro.php?vid=518</span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="-22.813094" />
							<meta itemprop="longitude" content="-47.064021" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Bulgarie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.tu-plovdiv.bg/en/" target="_blank">Technical
							University of Sofia</a></h1>
					<span class="hidden" itemprop="ville">Sofia, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.tu-plovdiv.bg/en/"
							target="_blank">Department of Electrical Engineering</a></span>
					<span class="hidden" itemprop="structure_url">http://www.tu-plovdiv.bg/en/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://tu-sofia.bg/ENG/fktt/tkt/rkt/cv/kunchev.html"
							target="_blank">Roumen KOUNTCHEV</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://tu-sofia.bg/ENG/fktt/tkt/rkt/cv/kunchev.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro7593.html?vid=71" target="_blank">GUERIN
							Anne</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=71</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="42.658581" />
							<meta itemprop="longitude" content="23.359652" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Canada</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://www.polymtl.ca/recherche/rc/unites/details.php?NoUnite=44" target="_blank">Ecole
							Polytechnique de Montr�al</a></h1>
					<span class="hidden" itemprop="ville">Montr�al, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.polymtl.ca/recherche/rc/unites/details.php?NoUnite=44" target="_blank">Groupement de
							recherche en biom�canique et biomat�riaux-GRBB</a></span>
					<span class="hidden"
						itemprop="structure_url">http://www.polymtl.ca/recherche/rc/unites/details.php?NoUnite=44</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.polymtl.ca/recherche/rc/professeurs/details.php?NoProf=91" target="_blank">Yves
							GOUSSARD</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.polymtl.ca/recherche/rc/professeurs/details.php?NoProf=91</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Imagerie de fondations de pyl�nes</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5508.html?vid=73" target="_blank">MARS
							J&eacute;r&ocirc;me</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=73</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.512362" />
							<meta itemprop="longitude" content="-73.615322" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Canada</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.rnet.ryerson.ca/sar/" target="_blank">Ryerson
							University</a></h1>
					<span class="hidden" itemprop="ville">Toronto, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.rnet.ryerson.ca/sar/"
							target="_blank">Signal Analysis Reaseach Group</a></span>
					<span class="hidden" itemprop="structure_url">http://www.rnet.ryerson.ca/sar/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.ee.ryerson.ca/~krishnan/" target="_blank">Prof
							Sridhar KRISHNAN</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.ee.ryerson.ca/~krishnan/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Time-frequency analysis in biomedial applications</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof5dd.html?vid=93" target="_blank">IOANA
							Cornel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=93</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="43.660110" />
							<meta itemprop="longitude" content="-79.378003" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Canada</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.iro.umontreal.ca/" target="_blank">Universit� de
							Montr�al</a></h1>
					<span class="hidden" itemprop="ville">Montr�al, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.iro.umontreal.ca/"
							target="_blank">Universit� de Montr�al</a></span>
					<span class="hidden" itemprop="structure_url">http://www.iro.umontreal.ca/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.iro.umontreal.ca/~stewart/" target="_blank">Neil
							STEWART</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.iro.umontreal.ca/~stewart/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Sch�mas de subdivision</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro35b1.html?vid=91" target="_blank">GEROT
							C&eacute;dric</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=91</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.501489" />
							<meta itemprop="longitude" content="-73.616256" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Espagne</span>
					<h1 class="sum_struc" itemprop="summary">University of Zaragoza</h1>
					<span class="hidden" itemprop="ville">Saragosse, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp">Brain-Computer Interfaces research team</span>
					<span class="hidden" itemprop="structure_url"></span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://webdiis.unizar.es/~jminguez/" target="_blank">Javier
							MINGUEZ</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://webdiis.unizar.es/~jminguez/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro91b1.html?vid=518" target="_blank">CONGEDO
							Marco</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=518</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="41.642901" />
							<meta itemprop="longitude" content="-0.899692" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://enpub.fulton.asu.edu/sensip/" target="_blank">Arizona
							State University</a></h1>
					<span class="hidden" itemprop="ville">Tempe, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://enpub.fulton.asu.edu/sensip/"
							target="_blank">SenSIP Center</a></span>
					<span class="hidden" itemprop="structure_url">http://enpub.fulton.asu.edu/sensip/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://papandreou.faculty.asu.edu/" target="_blank">Antonia
							PAPANDREOU SUPPAPPOLA</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://papandreou.faculty.asu.edu/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Echanges US Office of Naval Research �Non-linear Time-frequency analysis
						methods�</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof5dd.html?vid=93" target="_blank">IOANA
							Cornel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=93</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="33.420768" />
							<meta itemprop="longitude" content="-111.936228" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.erau.edu/" target="_blank">Embry Riddle
							Aeronautical University</a></h1>
					<span class="hidden" itemprop="ville">Daytona Beach, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.erau.edu/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.erau.edu/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Projet ATLANTIS</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro58bb.html?vid=241" target="_blank">THIRIET
							Jean-Marc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=241</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="29.192294" />
							<meta itemprop="longitude" content="-81.049368" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.mpl.ucsd.edu/" target="_blank">Marine Physical
							Laboratory</a></h1>
					<span class="hidden" itemprop="ville">San Diego, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.mpl.ucsd.edu/" target="_blank">SCRIPPS
							Institution of Oceanography</a></span>
					<span class="hidden" itemprop="structure_url">http://www.mpl.ucsd.edu/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.mpl.ucsd.edu/people/staff/wkuperman.html"
							target="_blank">Kuperman WILLIAM</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.mpl.ucsd.edu/people/staff/wkuperman.html</span>
					<span class="hidden" itemprop="part_link2"><a href="http://www.mpl.ucsd.edu/people/staff/swalker.html"
							target="_blank">Shane WALKER</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://www.mpl.ucsd.edu/people/staff/swalker.html</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Tomographie acoustique oc�anique. Ondes UBF. Publications communes,
						programme Eurodoc.</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro6e47.html?vid=85" target="_blank">NICOLAS
							Barbara</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=85</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="32.876127" />
							<meta itemprop="longitude" content="-117.251644" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.apl.washington.edu/" target="_blank">University
							of Washington</a></h1>
					<span class="hidden" itemprop="ville">Washington, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.apl.washington.edu/"
							target="_blank">Applied Physics Laboratory</a></span>
					<span class="hidden" itemprop="structure_url">http://www.apl.washington.edu/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.apl.washington.edu/people/profile.php?last=Pitton&amp;first=Jim" target="_blank">James W.
							PITTON</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.apl.washington.edu/people/profile.php?last=Pitton&first=Jim</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Characterization of underwater signals using advanced time-frequency
						methods</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof5dd.html?vid=93" target="_blank">IOANA
							Cornel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=93</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="47.655509" />
							<meta itemprop="longitude" content="-122.316458" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://www.villanova.edu/engineering/research/centers/cac/index.htm" target="_blank">Villanova
							University</a></h1>
					<span class="hidden" itemprop="ville">Villanova, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.villanova.edu/engineering/research/centers/cac/index.htm" target="_blank">Center of
							Advanced Communications</a></span>
					<span class="hidden"
						itemprop="structure_url">http://www.villanova.edu/engineering/research/centers/cac/index.htm</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www35.homepage.villanova.edu/moeness.amin/"
							target="_blank">Prof. G. Amin MOENESS </a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www35.homepage.villanova.edu/moeness.amin/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Echanges US Office of Naval Research. Echanges d��tudiants
						�Time-Frequency analysis in radar and ultra-wide band ultrasonic imagery�</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof5dd.html?vid=93" target="_blank">IOANA
							Cornel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=93</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="40.037250" />
							<meta itemprop="longitude" content="-75.343285" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.leti.fr/" target="_blank">CEA-LETI</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.leti.fr/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.leti.fr/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Re-identification de v�hicules par signatures magn�tiques</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_procb65.html?vid=209" target="_blank">CHARBONNIER
							Sylvie</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=209</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.201816" />
							<meta itemprop="longitude" content="5.705398" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.chru-strasbourg.fr/Hus/" target="_blank">CHU
							Strasbourg</a></h1>
					<span class="hidden" itemprop="ville">Strasbourg, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.chru-strasbourg.fr/Hus/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.chru-strasbourg.fr/Hus/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Analyse de signaux biom�dicaux</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : CICS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro53b1.html?vid=559" target="_blank">ACHARD
							Sophie</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=559</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.568088" />
							<meta itemprop="longitude" content="7.719412" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.cran.uhp-nancy.fr/" target="_blank">CRAN</a></h1>
					<span class="hidden" itemprop="ville">Nancy, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.cran.uhp-nancy.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.cran.uhp-nancy.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Christophe AUBRUN</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Action nationale ConecsSdF (GdR MACS/ARC)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro58bb.html?vid=241" target="_blank">THIRIET
							Jean-Marc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=241</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.650377" />
							<meta itemprop="longitude" content="6.145277" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://crestic.univ-reims.fr/groupe/SIC#recherche"
							target="_blank">CReSTIC</a></h1>
					<span class="hidden" itemprop="ville">Reims, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://crestic.univ-reims.fr/groupe/SIC#recherche"
							target="_blank">Groupe SIC</a></span>
					<span class="hidden" itemprop="structure_url">http://crestic.univ-reims.fr/groupe/SIC#recherche</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://crestic.univ-reims.fr/membre/265-valeriu-vrabie"
							target="_blank">Val�riu VRABIE</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://crestic.univ-reims.fr/membre/265-valeriu-vrabie</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">S�paration de sources thermom�triques</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5508.html?vid=73" target="_blank">MARS
							J&eacute;r&ocirc;me</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=73</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="49.242756" />
							<meta itemprop="longitude" content="4.062064" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.cnrm.meteo.fr/spip.php?article447"
							target="_blank">Centre d �tudes de la neige</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.cnrm.meteo.fr/spip.php?article447"
							target="_blank">Manteau neigeux</a></span>
					<span class="hidden" itemprop="structure_url">http://www.cnrm.meteo.fr/spip.php?article447</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.cnrm.meteo.fr/spip.php?article284"
							target="_blank">Fr�d�ric FLIN</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.cnrm.meteo.fr/spip.php?article284</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">G�om�trie discr�te</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proa779.html?vid=1085" target="_blank">SIVIGNON
							Isabelle</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=1085</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.198044" />
							<meta itemprop="longitude" content="5.770267" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.ensta-bretagne.fr/e3i2/" target="_blank">ENSTA
							Bretagne</a></h1>
					<span class="hidden" itemprop="ville">Brest, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.ensta-bretagne.fr/e3i2/"
							target="_blank">Laboratoire E3I2</a></span>
					<span class="hidden" itemprop="structure_url">http://www.ensta-bretagne.fr/e3i2/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Analyse temps-fr�quence pour l�acoustique sous-marine passive.
						Caract�risation, impact et exploitation du bruit de trafic maritime au sein d�un canal oc�anique</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof5dd.html?vid=93" target="_blank">IOANA
							Cornel</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=93</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro5508.html?vid=73" target="_blank">MARS
							J&eacute;r&ocirc;me</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=73</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.420628" />
							<meta itemprop="longitude" content="-4.472086" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://www.ensta-paristech.fr/~hammami/fr/systemes_embarques.html"
							target="_blank">ENSTA-Paristech</a></h1>
					<span class="hidden" itemprop="ville">Paris, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.ensta-paristech.fr/~hammami/fr/systemes_embarques.html" target="_blank">Laboratoire
							�lectronique et informatique</a></span>
					<span class="hidden" itemprop="structure_url">
						http://www.ensta-paristech.fr/~hammami/fr/systemes_embarques.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.ensta-paristech.fr/~hammami/eng/index.html"
							target="_blank">Omar HAMMAMI</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.ensta-paristech.fr/~hammami/eng/index.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Syst�mes sur puce</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro4854.html?vid=79" target="_blank">HOUZET
							Dominique</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=79</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.834442" />
							<meta itemprop="longitude" content="2.283599" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://www.eurecom.fr/fr/la-recherche/departement-multimedia" target="_blank">EURECOM</a></h1>
					<span class="hidden" itemprop="ville">Sophia Antipolis, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.eurecom.fr/fr/la-recherche/departement-multimedia" target="_blank">EURECOM</a></span>
					<span class="hidden"
						itemprop="structure_url">http://www.eurecom.fr/fr/la-recherche/departement-multimedia</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.eurecom.fr/~dugelay/" target="_blank">Jean-Luc
							DUGELAY</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.eurecom.fr/~dugelay/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Biom�trie</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof148.html?vid=77" target="_blank">COULON
							Pierre-Yves</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=77</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="43.626896" />
							<meta itemprop="longitude" content="7.047170" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://www.femto-st.fr/fr/Departements-de-recherche/AS2M/Accueil/" target="_blank">FEMTO</a></h1>
					<span class="hidden" itemprop="ville">Besan�on, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.femto-st.fr/fr/Departements-de-recherche/AS2M/Accueil/" target="_blank"></a></span>
					<span class="hidden"
						itemprop="structure_url">http://www.femto-st.fr/fr/Departements-de-recherche/AS2M/Accueil/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.femto-st.fr/~emmanuel.ramasso/"
							target="_blank">Emmanuel RAMASSO</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.femto-st.fr/~emmanuel.ramasso/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Fusion de donn�es</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="page_pro6463.html?vid=80" target="_blank">ROMBAUT
							Mich&egrave;le</a></span>
					<span class="hidden" itemprop="permanent_url_pp">page_pro.php?vid=80</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="47.251228" />
							<meta itemprop="longitude" content="5.996364" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://neurosciences.ujf-grenoble.fr/main-accueil-1-sub-accueil-0-lang-fr.html"
							target="_blank">Grenoble Institut des Neurosciences</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://neurosciences.ujf-grenoble.fr/main-accueil-1-sub-accueil-0-lang-fr.html"
							target="_blank"></a></span>
					<span class="hidden"
						itemprop="structure_url">http://neurosciences.ujf-grenoble.fr/main-accueil-1-sub-accueil-0-lang-fr.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://nifm.ujf-grenoble.fr/~dojatm/"
							target="_blank">Michel DOJAT</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://nifm.ujf-grenoble.fr/~dojatm/</span>
					<span class="hidden" itemprop="part_link2"><a
							href="http://neurosciences.ujf-grenoble.fr/pageperso-192-laurent-vercueil.html" target="_blank">Laurent
							VERCUEIL</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://neurosciences.ujf-grenoble.fr/pageperso-192-laurent-vercueil.html</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">CPP � Parvo Magno �, �tude en IRMf.
						R�seaux synchrones �pileptiques</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro4ef8.html?vid=98" target="_blank">GUYADER
							Nathalie</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=98</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro395f.html?vid=72" target="_blank">JUTTEN
							Christian</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=72</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.199427" />
							<meta itemprop="longitude" content="5.744298" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.hds.utc.fr/recherche/equipe-di/membres-114/"
							target="_blank">Heudiasyc</a></h1>
					<span class="hidden" itemprop="ville">Compi�gne, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.hds.utc.fr/recherche/equipe-di/membres-114/" target="_blank">Equipe D�cision,
							image</a></span>
					<span class="hidden" itemprop="structure_url">http://www.hds.utc.fr/recherche/equipe-di/membres-114/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="https://www.hds.utc.fr/~tdenoeux/dokuwiki/doku.php"
							target="_blank">Thierry DENOEUX</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">https://www.hds.utc.fr/~tdenoeux/dokuwiki/doku.php</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Fusion de donn�es</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro6463.html?vid=80" target="_blank">ROMBAUT
							Mich&egrave;le</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=80</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="49.400788" />
							<meta itemprop="longitude" content="2.798304" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://rechercheclinique.aphp.fr/-La-recherche-a-l-AP-HP-.html?rubrique" target="_blank">H�pital
							Raymond Poincar�</a></h1>
					<span class="hidden" itemprop="ville">Garches, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://rechercheclinique.aphp.fr/-La-recherche-a-l-AP-HP-.html?rubrique"
							target="_blank">APHP</a></span>
					<span class="hidden"
						itemprop="structure_url">http://rechercheclinique.aphp.fr/-La-recherche-a-l-AP-HP-.html?rubrique</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">L. MAYAUD</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Projet ANR RoBIK</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro91b1.html?vid=518" target="_blank">CONGEDO
							Marco</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=518</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.840006" />
							<meta itemprop="longitude" content="2.170676" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.irisa.fr/vr4i/" target="_blank">INRIA Rennes</a>
					</h1>
					<span class="hidden" itemprop="ville">Rennes, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.irisa.fr/vr4i/" target="_blank">Equipe
							VR4i</a></span>
					<span class="hidden" itemprop="structure_url">http://www.irisa.fr/vr4i/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.irisa.fr/vr4i/GENS/alecuyer/"
							target="_blank">Anatole LECUYER</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.irisa.fr/vr4i/GENS/alecuyer/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Projet ANR Open-ViBE2</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro91b1.html?vid=518" target="_blank">CONGEDO
							Marco</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=518</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.116027" />
							<meta itemprop="longitude" content="-1.676130" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.irccyn.ec-nantes.fr/" target="_blank">IRCCYN</a>
					</h1>
					<span class="hidden" itemprop="ville">Nantes, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.irccyn.ec-nantes.fr/"
							target="_blank">Analyse et d�cision en traitement du signal et de l�image</a></span>
					<span class="hidden" itemprop="structure_url">http://www.irccyn.ec-nantes.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.irccyn.ec-nantes.fr/~idier/"
							target="_blank">J�r�me IDIER</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.irccyn.ec-nantes.fr/~idier/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Imagerie de fondations de pyl�nes</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5508.html?vid=73" target="_blank">MARS
							J&eacute;r&ocirc;me</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=73</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="47.250922" />
							<meta itemprop="longitude" content="-1.547406" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.irit.fr/" target="_blank">IRIT</a></h1>
					<span class="hidden" itemprop="ville">Toulouse, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.irit.fr/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.irit.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://mailhes.perso.enseeiht.fr/" target="_blank">Corinne
							MAILHES</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://mailhes.perso.enseeiht.fr/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Projet AStrion</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proe5ee.html?vid=67" target="_blank">MARTIN
							Nadine</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=67</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="43.567729" />
							<meta itemprop="longitude" content="1.457822" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://neel.cnrs.fr/spip.php?rubrique78"
							target="_blank">Institut NEEL</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://neel.cnrs.fr/spip.php?rubrique78"
							target="_blank">Equipe Thermodynamique des petits syst�mes</a></span>
					<span class="hidden" itemprop="structure_url">http://neel.cnrs.fr/spip.php?rubrique78</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Olivier BOURGEOIS</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Mesure de la Chaleur sp�cifique (projet ANR)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5508.html?vid=73" target="_blank">MARS
							J&eacute;r&ocirc;me</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=73</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.204281" />
							<meta itemprop="longitude" content="5.702074" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://iga.ujf-grenoble.fr/" target="_blank">Institut de
							G�ographie Alpine</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://iga.ujf-grenoble.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://iga.ujf-grenoble.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.pacte.cnrs.fr/spip.php?article453"
							target="_blank">Philippe SCHOENEICH </a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.pacte.cnrs.fr/spip.php?article453</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Interf�rom�trie radar (co-encadrement th�se)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro69b0.html?vid=3" target="_blank">GAY
							Michel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=3</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.166063" />
							<meta itemprop="longitude" content="5.728583" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.ietr.fr/spip.php?rubrique312"
							target="_blank">Institut d��lectronique et de t�l�communications de Rennes</a></h1>
					<span class="hidden" itemprop="ville">Rennes, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.ietr.fr/spip.php?rubrique312"
							target="_blank">Equipe SAPHIR</a></span>
					<span class="hidden" itemprop="structure_url">http://www.ietr.fr/spip.php?rubrique312</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.ietr.fr/spip.php?auteur53"
							target="_blank">Laurent FERRO-FAMIL</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.ietr.fr/spip.php?auteur53</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Traitement des images SAR polarim�triques (co-encadrement de th�ses).
						Mesure de d�placement des glaciers Alpins par POLSAR (projet ANR EFIDIR).T�l�d�tection SAR polarim�trique et
						interf�rom�trique pour la caract�risation de la neige et de son �volution temporelle</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro103f.html?vid=755" target="_blank">VASILE
							Gabriel</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=755</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro69b0.html?vid=3" target="_blank">GAY
							Michel</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=3</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.117374" />
							<meta itemprop="longitude" content="-1.639416" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://isterre.fr/" target="_blank">IsTERRE</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://isterre.fr/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://isterre.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://isterre.fr/Philippe-ROUX??id_auteur=61"
							target="_blank">Philippe ROUX</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://isterre.fr/Philippe-ROUX??id_auteur=61</span>
					<span class="hidden" itemprop="part_link2"><a
							href="http://jean-virieux.obs.ujf-grenoble.fr/?id_auteur=166&amp;lang=en" target="_blank">Jean
							VIRIEUX</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://jean-virieux.obs.ujf-grenoble.fr/?id_auteur=166&lang=en</span>
					<span class="hidden" itemprop="part_link3"><a href="http://isterre.fr/spip.php?page=auteur&amp;id_auteur=76"
							target="_blank">Andr�a WALPERSDORF</a></span>
					<span class="hidden" itemprop="partenaire_url_pp3">http://isterre.fr/spip.php?page=auteur&id_auteur=76</span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Tomographie Acoustique Oc�anique. Barri�res acoustiques (co-encadrement
						de th�ses, projet ANR TOTS). Imagerie de fondations de pyl�nes. Correction des effets atmosph�riques en
						imagerie radar par fusion avec des donn�es GPS m�t�orologiques (co-encadrement th�se)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro6e47.html?vid=85" target="_blank">NICOLAS
							Barbara</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=85</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro5508.html?vid=73" target="_blank">MARS
							J&eacute;r&ocirc;me</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=73</span>
					<span class="hidden" itemprop="perm_link3"><a href="../page_pro69b0.html?vid=3" target="_blank">GAY
							Michel</a></span>
					<span class="hidden" itemprop="permanent_url_pp3">/page_pro.php?vid=3</span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.194687" />
							<meta itemprop="longitude" content="5.761523" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://lagis.ec-lille.fr/" target="_blank">LAGIS</a></h1>
					<span class="hidden" itemprop="ville">Lille, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://lagis.ec-lille.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://lagis.ec-lille.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://lagis.ec-lille.fr/index.php?page=15&amp;manID=933"
							target="_blank">Patrick BAS</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://lagis.ec-lille.fr/index.php?page=15&manID=933</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">St�ganographie</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : CICS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro9fee.html?vid=108" target="_blank">CAYRE
							Fran&ccedil;ois</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=108</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_proa8b5.html?vid=488" target="_blank">BARAS
							Cl&eacute;o</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=488</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="50.608027" />
							<meta itemprop="longitude" content="3.134015" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://www.lama.univ-savoie.fr/index.php?page=LogiqueActiv&amp;lang=fr" target="_blank">LAMA</a>
					</h1>
					<span class="hidden" itemprop="ville">Chamb�ry, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.lama.univ-savoie.fr/index.php?page=LogiqueActiv&amp;lang=fr" target="_blank">Logique,
							informatique, math�matiques discr�tes</a></span>
					<span class="hidden"
						itemprop="structure_url">http://www.lama.univ-savoie.fr/index.php?page=LogiqueActiv&lang=fr</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.lama.univ-savoie.fr/~lachaud/People/LACHAUD-JO/person.html"
							target="_blank">Jacques-Olivier LACHAUD</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.lama.univ-savoie.fr/~lachaud/People/LACHAUD-JO/person.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">G�om�trie discr�te</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proa779.html?vid=1085" target="_blank">SIVIGNON
							Isabelle</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=1085</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.643928" />
							<meta itemprop="longitude" content="5.870211" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://wwwlasmea.univ-bpclermont.fr/"
							target="_blank">LASMEA</a></h1>
					<span class="hidden" itemprop="ville">Clermond-Ferrand, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://wwwlasmea.univ-bpclermont.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://wwwlasmea.univ-bpclermont.fr/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Biom�trie</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof148.html?vid=77" target="_blank">COULON
							Pierre-Yves</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=77</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.764439" />
							<meta itemprop="longitude" content="3.112239" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary">LIRIS</h1>
					<span class="hidden" itemprop="ville">Lyon, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp">D�partement Image</span>
					<span class="hidden" itemprop="structure_url"></span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://liris.cnrs.fr/membres?idn=dcoeurjo"
							target="_blank">David COEURJOLLY</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://liris.cnrs.fr/membres?idn=dcoeurjo</span>
					<span class="hidden" itemprop="part_link2"><a href="http://liris.cnrs.fr/membres?idn=ostrom"
							target="_blank">Victor OSTROMOUKHOV</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://liris.cnrs.fr/membres?idn=ostrom</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Sch�mas de subdivision et G�om�trie discr�te.</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro35b1.html?vid=91" target="_blank">GEROT
							C&eacute;dric</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=91</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_proa779.html?vid=1085" target="_blank">SIVIGNON
							Isabelle</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=1085</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.782302" />
							<meta itemprop="longitude" content="4.872392" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www-ljk.imag.fr/MGMI/index_fr.html"
							target="_blank">LJK</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www-ljk.imag.fr/MGMI/index_fr.html"
							target="_blank">LJK</a></span>
					<span class="hidden" itemprop="structure_url">http://www-ljk.imag.fr/MGMI/index_fr.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www-ljk.imag.fr/membres/Sylvain.Meignen/"
							target="_blank">Sylvain MEIGNEN</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www-ljk.imag.fr/membres/Sylvain.Meignen/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Repr�sentation multi-�chelle</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro35b1.html?vid=91" target="_blank">GEROT
							C&eacute;dric</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=91</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.194029" />
							<meta itemprop="longitude" content="5.77193" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://alice.loria.fr/index.php/home.html"
							target="_blank">LORIA</a></h1>
					<span class="hidden" itemprop="ville">Nancy, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://alice.loria.fr/index.php/home.html"
							target="_blank">LORIA</a></span>
					<span class="hidden" itemprop="structure_url">http://alice.loria.fr/index.php/home.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://alice.loria.fr/~nivoliev/" target="_blank">Vincent
							NIVOLIERS</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://alice.loria.fr/~nivoliev/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Sch�mas de subdivision</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro35b1.html?vid=91" target="_blank">GEROT
							C&eacute;dric</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=91</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.667101" />
							<meta itemprop="longitude" content="6.157565" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://webu2.upmf-grenoble.fr/LPNC/"
							target="_blank">LPNC</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://webu2.upmf-grenoble.fr/LPNC/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://webu2.upmf-grenoble.fr/LPNC/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.christian-marendaz.fr/"
							target="_blank">Christian MARENDAZ</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.christian-marendaz.fr/</span>
					<span class="hidden" itemprop="part_link2"><a
							href="http://webu2.upmf-grenoble.fr/LPNC/membre_aurelie_campagne" target="_blank">Aur�lie CAMPAGNE</a>,
					</span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://webu2.upmf-grenoble.fr/LPNC/membre_aurelie_campagne</span>
					<span class="hidden" itemprop="part_link3"><a href="http://webu2.upmf-grenoble.fr/LPNC/membre_alan_chauvin"
							target="_blank">Alan CHAUVIN</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp3">http://webu2.upmf-grenoble.fr/LPNC/membre_alan_chauvin</span>
					<span class="hidden" itemprop="part_link4"><a href="http://david.alleysson.free.fr/" target="_blank">David
							ALLEYSSON</a></span>
					<span class="hidden" itemprop="partenaire_url_pp4">http://david.alleysson.free.fr/</span>
					<span class="hidden" itemprop="cadre">Projet ANR BLAN Gaze&EEG. CPP � Parvo Magno �, �tude en IRMf</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro4ef8.html?vid=98" target="_blank">GUYADER
							Nathalie</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=98</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro7593.html?vid=71" target="_blank">GUERIN
							Anne</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=71</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.191829" />
							<meta itemprop="longitude" content="5.771114" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.lutin-userlab.fr/site/accueil/"
							target="_blank">LUTIN Userlab</a></h1>
					<span class="hidden" itemprop="ville">Paris, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.lutin-userlab.fr/site/accueil/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.lutin-userlab.fr/site/accueil/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.lutin-userlab.fr/site/membres/fiche.php?id=2"
							target="_blank">Thierry BACCINO</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.lutin-userlab.fr/site/membres/fiche.php?id=2</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Projets ANR Blanc Gaze&EEG, Open-ViBE2
					</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro7593.html?vid=71" target="_blank">GUERIN
							Anne</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=71</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro91b1.html?vid=518" target="_blank">CONGEDO
							Marco</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=518</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.901374" />
							<meta itemprop="longitude" content="2.385614" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://laboratoirehubertcurien.fr/spip.php?rubrique49"
							target="_blank">Laboratoire Hubert Curien</a></h1>
					<span class="hidden" itemprop="ville">Saint Etienne, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://laboratoirehubertcurien.fr/spip.php?rubrique49" target="_blank">Image processing</a></span>
					<span class="hidden" itemprop="structure_url">http://laboratoirehubertcurien.fr/spip.php?rubrique49</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Virginie FRESSE, </span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2">Alain TREMEAU</span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Attention visuelle et syst�mes embarqu�s</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro4854.html?vid=79" target="_blank">HOUZET
							Dominique</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=79</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.453485" />
							<meta itemprop="longitude" content="4.386365" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.polytech.univ-savoie.fr/index.php?id=577&amp;L=0"
							target="_blank">Laboratoire LISTIC</a></h1>
					<span class="hidden" itemprop="ville">Annecy, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.polytech.univ-savoie.fr/index.php?id=577&amp;L=0" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.polytech.univ-savoie.fr/index.php?id=577&L=0</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.polytech.univ-savoie.fr/index.php?id=979&amp;L=0" target="_blank">Emmanuel
							TROUVE</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.polytech.univ-savoie.fr/index.php?id=979&L=0</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Mesure de d�placement des glaciers Alpins par InSAR (projet ANR
						EFIDIR)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro103f.html?vid=755" target="_blank">VASILE
							Gabriel</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=755</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro69b0.html?vid=3" target="_blank">GAY
							Michel</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=3</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.920251" />
							<meta itemprop="longitude" content="6.160979" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://lnfp.dr18.cnrs.fr/" target="_blank">Laboratoire
							Neurosciences fonctionnelles et pathologies</a></h1>
					<span class="hidden" itemprop="ville">Lille, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://lnfp.dr18.cnrs.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://lnfp.dr18.cnrs.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="https://sites.google.com/site/murielboucart/"
							target="_blank">Muriel BOUCART</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">https://sites.google.com/site/murielboucart/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Vision et DMLA (projets CNRS)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro4ef8.html?vid=98" target="_blank">GUYADER
							Nathalie</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=98</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro7593.html?vid=71" target="_blank">GUERIN
							Anne</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=71</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="50.631716" />
							<meta itemprop="longitude" content="3.057432" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.onera.fr/onera/tis/index.php"
							target="_blank">ONERA</a></h1>
					<span class="hidden" itemprop="ville">Palaiseau, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.onera.fr/onera/tis/index.php"
							target="_blank">Traitement de l&apos;information et syst�mes</a></span>
					<span class="hidden" itemprop="structure_url">http://www.onera.fr/onera/tis/index.php</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.onera.fr/staff/thibaut-castaings/"
							target="_blank">Thibaut CASTAING</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.onera.fr/staff/thibaut-castaings/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Fusion de donn�es</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro6463.html?vid=80" target="_blank">ROMBAUT
							Mich&egrave;le</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=80</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.712132" />
							<meta itemprop="longitude" content="2.231852" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://simap.grenoble-inp.fr/index.jsp"
							target="_blank">SIMAP</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://simap.grenoble-inp.fr/index.jsp"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://simap.grenoble-inp.fr/index.jsp</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Luc SALVO</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Tomographie X</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : AGPIG</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prode8a.html?vid=107" target="_blank">FRISTOT
							Vincent</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=107</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="45.194748" />
							<meta itemprop="longitude" content="5.765761" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.supelec.fr/sondra/" target="_blank">Supelec</a>
					</h1>
					<span class="hidden" itemprop="ville">Gif-sur-Yvette, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.supelec.fr/sondra/"
							target="_blank">Laboratoire SONDRA</a></span>
					<span class="hidden" itemprop="structure_url">http://www.supelec.fr/sondra/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.supelec.fr/426_p_16381/frederic-pascal.html"
							target="_blank">Fr�d�ric PASCAL</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.supelec.fr/426_p_16381/frederic-pascal.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Traitement des images SAR polarim�triques (co-encadrement de
						th�ses)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro103f.html?vid=755" target="_blank">VASILE
							Gabriel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=755</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.709945" />
							<meta itemprop="longitude" content="2.166515" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.univ-valenciennes.fr/TEMPO/"
							target="_blank">TEMPO</a></h1>
					<span class="hidden" itemprop="ville">Valenciennes, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.univ-valenciennes.fr/TEMPO/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.univ-valenciennes.fr/TEMPO/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.univ-valenciennes.fr/TEMPO/membres/cauffriez_laurent" target="_blank">Laurent
							CAUFFRIEZ</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.univ-valenciennes.fr/TEMPO/membres/cauffriez_laurent</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Action nationale ConecsSdF (GdR MACS/ARC)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro58bb.html?vid=241" target="_blank">THIRIET
							Jean-Marc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=241</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="50.326094" />
							<meta itemprop="longitude" content="3.513043" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.tsi.telecom-paristech.fr/"
							target="_blank">T�l�com ParisTech</a></h1>
					<span class="hidden" itemprop="ville">Paris, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.tsi.telecom-paristech.fr/"
							target="_blank">D�partement Traitement du signal et des images</a></span>
					<span class="hidden" itemprop="structure_url">http://www.tsi.telecom-paristech.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://perso.telecom-paristech.fr/~nicolas/"
							target="_blank">Jean-Marie NICOLAS</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://perso.telecom-paristech.fr/~nicolas/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Mesure de d�placement des glaciers Alpins par InSAR (projet ANR
						EFIDIR)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro103f.html?vid=755" target="_blank">VASILE
							Gabriel</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=755</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro69b0.html?vid=3" target="_blank">GAY
							Michel</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=3</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="48.829463" />
							<meta itemprop="longitude" content="2.348004" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">ISLANDE</span>
					<h1 class="sum_struc" itemprop="summary"><a href="https://english.hi.is/introduction/"
							target="_blank">University of Iceland</a></h1>
					<span class="hidden" itemprop="ville">Reykjavik, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="https://english.hi.is/introduction/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">https://english.hi.is/introduction/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://starfsfolk.hi.is/en/simaskra/993"
							target="_blank">Jon Atli BENEDIKTSSON</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://starfsfolk.hi.is/en/simaskra/993</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Attribute filters � decision fusion � extended attribute profile (EAP) �
						independent component analysis (ICA) � mathematical morphology � remote sensing (publication commune)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro36f2.html?vid=515" target="_blank">CHANUSSOT
							Jocelyn</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=515</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="64.140848" />
							<meta itemprop="longitude" content="-21.948974" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Iran</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.sharif.ir/en/" target="_blank">Sharif University
							of Technology</a></h1>
					<span class="hidden" itemprop="ville">T�h�ran, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.sharif.ir/en/" target="_blank">Dept. of
							Electrical Engineering</a></span>
					<span class="hidden" itemprop="structure_url">http://www.sharif.ir/en/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://sharif.edu/~mbzadeh/" target="_blank">Massoud
							BABAIE-ZADEH�</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://sharif.edu/~mbzadeh/</span>
					<span class="hidden" itemprop="part_link2"><a href="http://sharif.edu/~mbshams/" target="_blank">Mohammad
							Bagher SHAMSOLLAHI</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://sharif.edu/~mbshams/</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Biom�dical et repr�sentations parcimonieuses (co-tutelle de th�ses et
						publications communes)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro395f.html?vid=72" target="_blank">JUTTEN
							Christian</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=72</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prod981.html?vid=542" target="_blank">RIVET
							Bertrand</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=542</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="35.704077" />
							<meta itemprop="longitude" content="51.351206" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Iran</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.shirazu.ac.ir/en/index.php?page_id=13"
							target="_blank">Shiraz University-School of Electrical and Computer Engineering</a></h1>
					<span class="hidden" itemprop="ville">Shiraz, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.shirazu.ac.ir/en/index.php?page_id=13"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.shirazu.ac.ir/en/index.php?page_id=13</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://research.shirazu.ac.ir/faculty/More.asp?ID=787"
							target="_blank">Reza SAMENI</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://research.shirazu.ac.ir/faculty/More.asp?ID=787</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Extraction de l�ECG de foetus</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro395f.html?vid=72" target="_blank">JUTTEN
							Christian</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=72</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prod981.html?vid=542" target="_blank">RIVET
							Bertrand</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=542</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="29.649085" />
							<meta itemprop="longitude" content="52.510049" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Iran</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.ut.ac.ir/en" target="_blank">University of
							Tehran-Faculty of Engineering</a></h1>
					<span class="hidden" itemprop="ville">T�h�ran, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.ut.ac.ir/en" target="_blank">Control
							and Intelligent Processing Center of Excellence</a></span>
					<span class="hidden" itemprop="structure_url">http://www.ut.ac.ir/en</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://eng.ut.ac.ir/RESUME_FACULTYMEMBERS/Resume.asp?ID_FACULTY=32" target="_blank">Hamid
							SOLTANIAN-ZADEH</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://eng.ut.ac.ir/RESUME_FACULTYMEMBERS/Resume.asp?ID_FACULTY=32</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Biom�dical</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro395f.html?vid=72" target="_blank">JUTTEN
							Christian</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=72</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="35.725071" />
							<meta itemprop="longitude" content="51.386638" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Italie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.esa.int/SPECIALS/ESRIN_SITE/SEMQLC2DU8E_0.html"
							target="_blank">Agence Spatiale Europ�enne</a></h1>
					<span class="hidden" itemprop="ville">Rome, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.esa.int/SPECIALS/ESRIN_SITE/SEMQLC2DU8E_0.html" target="_blank">Earth
							Observation</a></span>
					<span class="hidden" itemprop="structure_url">http://www.esa.int/SPECIALS/ESRIN_SITE/SEMQLC2DU8E_0.html</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">D�tection, quantification et reconstitution de mouvements superficiels
						dans les zones de permafrost dans les Alpes Fran�aises � partir des images d archives ERS1-ERS2</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro69b0.html?vid=3" target="_blank">GAY
							Michel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=3</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="41.825924" />
							<meta itemprop="longitude" content="12.671006" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Italie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.unifg.it/default.asp" target="_blank">University
							of Foggia</a></h1>
					<span class="hidden" itemprop="ville">Foggia, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.unifg.it/default.asp"
							target="_blank">Dipartimento di Scienze Biomediche</a></span>
					<span class="hidden" itemprop="structure_url">http://www.unifg.it/default.asp</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.unifg.it/Babiloni-Claudio/?docente=377"
							target="_blank">Claudio BABILONI</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.unifg.it/Babiloni-Claudio/?docente=377</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro91b1.html?vid=518" target="_blank">CONGEDO
							Marco</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=518</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="41.456638" />
							<meta itemprop="longitude" content="15.523680" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Italie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://disi.unitn.it/" target="_blank">University of
							Trento</a></h1>
					<span class="hidden" itemprop="ville">Trento, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://disi.unitn.it/" target="_blank">department
							of Information Engineering and Computer Science </a></span>
					<span class="hidden" itemprop="structure_url">http://disi.unitn.it/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://disi.unitn.it/users/jonatli.benediktsson"
							target="_blank">Jon Atli BENEDIKTSSON</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://disi.unitn.it/users/jonatli.benediktsson</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Attribute filters � decision fusion � extended attribute profile (EAP) �
						independent component analysis (ICA) � mathematical morphology � remote sensing (publication commune)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro36f2.html?vid=515" target="_blank">CHANUSSOT
							Jocelyn</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=515</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="46.072992" />
							<meta itemprop="longitude" content="11.120710" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Montenegro</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.tfsa.ac.me/" target="_blank">Universit� de
							Mont�n�gro, Electrical Engineering Department</a></h1>
					<span class="hidden" itemprop="ville">Podgorica, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.tfsa.ac.me/" target="_blank">Center for
							Signals, Systems, and Information Theory</a></span>
					<span class="hidden" itemprop="structure_url">http://www.tfsa.ac.me/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.tfsa.ac.me/ljubisa.html" target="_blank">Prof.
							Srdjan STANKOVIC</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.tfsa.ac.me/ljubisa.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">ERASMUS (Advanced time-frequency methods based on complex time
						concept)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof5dd.html?vid=93" target="_blank">IOANA
							Cornel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=93</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="42.444068" />
							<meta itemprop="longitude" content="19.245749" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Pologne</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.agh.edu.pl/en" target="_blank">University of
							Science and Technology Krakow</a></h1>
					<span class="hidden" itemprop="ville">Cracovie, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.agh.edu.pl/en"
							target="_blank">Department of Mechanical Engineering and Robotics</a></span>
					<span class="hidden" itemprop="structure_url">http://www.agh.edu.pl/en</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Jacek URBANEK, </span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2">Tomash BARSZCZ</span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Traitement du signal pour le diagnostic de machines tournantes
						(�oliennes). Publication commune</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proe5ee.html?vid=67" target="_blank">MARTIN
							Nadine</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=67</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="50.065128" />
							<meta itemprop="longitude" content="19.923656" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Pologne</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.ig.pwr.wroc.pl/labdiag/" target="_blank">Wroclaw
							University of Technology</a></h1>
					<span class="hidden" itemprop="ville">Wroclaw, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.ig.pwr.wroc.pl/labdiag/"
							target="_blank">Diagnostics and Vibro-Acoustics Science Laboratory</a></span>
					<span class="hidden" itemprop="structure_url">http://www.ig.pwr.wroc.pl/labdiag/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.ig.pwr.wroc.pl/~radzim/"
							target="_blank">Radoslaw ZIMROZ</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.ig.pwr.wroc.pl/~radzim/</span>
					<span class="hidden" itemprop="part_link2"><a href="http://www.ig.pwr.wroc.pl/~bartel/" target="_blank">Walter
							BARTELMUS</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://www.ig.pwr.wroc.pl/~bartel/</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Traitement du signal pour le diagnostic de machines tournantes
						(�oliennes)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proe5ee.html?vid=67" target="_blank">MARTIN
							Nadine</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=67</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="51.110824" />
							<meta itemprop="longitude" content="17.059786" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Portugal</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.siplab.fct.ualg.pt/" target="_blank">Universit�
							of Algarve</a></h1>
					<span class="hidden" itemprop="ville">Faro, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.siplab.fct.ualg.pt/"
							target="_blank">SiPLABoratory</a></span>
					<span class="hidden" itemprop="structure_url">http://www.siplab.fct.ualg.pt</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://w3.ualg.pt/~sjesus/" target="_blank">Sergio
							M.JESUS</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://w3.ualg.pt/~sjesus/</span>
					<span class="hidden" itemprop="part_link2">Christiano SOARES</span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Barri�res acoustiques. Localisation de sources UBF.</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro6e47.html?vid=85" target="_blank">NICOLAS
							Barbara</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=85</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="37.046546" />
							<meta itemprop="longitude" content="-7.972655" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Roumanie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://imag.pub.ro/fr/home_page.html"
							target="_blank">Universit� Polytechnique de Bucarest</a></h1>
					<span class="hidden" itemprop="ville">Bucarest, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://imag.pub.ro/fr/home_page.html"
							target="_blank">Laboratoire d�analyses et traitement d�images-IPAL</a></span>
					<span class="hidden" itemprop="structure_url">http://imag.pub.ro/fr/home_page.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Prof. Vasile BUZULOIU , </span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2">Dr. Mihai CIUC</span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Formation Ecole doctorale ETASM</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro103f.html?vid=755" target="_blank">VASILE
							Gabriel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=755</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="44.444872" />
							<meta itemprop="longitude" content="26.055186" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Roumanie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.upit.ro/" target="_blank">Universit� de
							Pitesti</a></h1>
					<span class="hidden" itemprop="ville">Pitesti, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.upit.ro/" target="_blank">Facult�
							d��lectronique</a></span>
					<span class="hidden" itemprop="structure_url">http://www.upit.ro/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.upit.ro/index.php?i=1767" target="_blank">Prof
							Gheorghe SERBAN</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.upit.ro/index.php?i=1767</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">ERASMUS � Syst�mes ultra-sonores large bandes �</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SIGMAPHY</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof5dd.html?vid=93" target="_blank">IOANA
							Cornel</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=93</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="44.910359" />
							<meta itemprop="longitude" content="24.897537" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Royaume Uni</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.lboro.ac.uk/departments/el/index.html"
							target="_blank">Loughborough University</a></h1>
					<span class="hidden" itemprop="ville">Loughborough, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.lboro.ac.uk/departments/el/index.html"
							target="_blank">Advance Signal Processing Group</a></span>
					<span class="hidden" itemprop="structure_url">http://www.lboro.ac.uk/departments/el/index.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.lboro.ac.uk/departments/el/people/Chambers-Jonathon-Professor.html"
							target="_blank">Jonathon CHAMBERS</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.lboro.ac.uk/departments/el/people/Chambers-Jonathon-Professor.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prod981.html?vid=542" target="_blank">RIVET
							Bertrand</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=542</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="52.769565" />
							<meta itemprop="longitude" content="-1.224768" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Royaume Uni</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.cam.ac.uk/" target="_blank">University of
							Cambridge</a></h1>
					<span class="hidden" itemprop="ville">Cambridge, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.cam.ac.uk/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.cam.ac.uk/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Analyse de signaux biom�dicaux</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : CICS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro53b1.html?vid=559" target="_blank">ACHARD
							Sophie</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=559</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="52.195823" />
							<meta itemprop="longitude" content="0.127687" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Royaume Uni</span>
					<h1 class="sum_struc" itemprop="summary">University of Oxford</h1>
					<span class="hidden" itemprop="ville">Oxford, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp">Dept. Of Engineering Science</span>
					<span class="hidden" itemprop="structure_url"></span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.robots.ox.ac.uk/~gari/" target="_blank">Gari
							CLIFFORD</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.robots.ox.ac.uk/~gari/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Extraction de l�ECG de foetus</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro395f.html?vid=72" target="_blank">JUTTEN
							Christian</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=72</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prod981.html?vid=542" target="_blank">RIVET
							Bertrand</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=542</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="51.759301" />
							<meta itemprop="longitude" content=" -1.256651" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">R�publique Tch�que</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.cuni.cz/UKENG-1.html" target="_blank">Charles
							University</a></h1>
					<span class="hidden" itemprop="ville">Prague, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.cuni.cz/UKENG-1.html"
							target="_blank">Department of Psychiatry</a></span>
					<span class="hidden" itemprop="structure_url">http://www.cuni.cz/UKENG-1.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">J. HORACEK</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">PhD thesis co-supervision</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : VIBS</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro91b1.html?vid=518" target="_blank">CONGEDO
							Marco</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=518</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="50.087410" />
							<meta itemprop="longitude" content="14.424006" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dis">

					<span class="sum_dis" itemprop="pays">Suisse</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://public.web.cern.ch/public/" target="_blank">CERN</a>
					</h1>
					<span class="hidden" itemprop="ville">Gen�ve, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://public.web.cern.ch/public/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://public.web.cern.ch/public/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Aide au diagnostic par analyse de signatures d�alarmes � Application au
						LHC</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : SAIGA</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_procb65.html?vid=209" target="_blank">CHARBONNIER
							Sylvie</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=209</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prod160.html?vid=223" target="_blank">GOUIN
							Alexia</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=223</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dis">
						<span itemprop="geo" itemscope itemtype="marker_dis">
							<meta itemprop="latitude" content="46.234656" />
							<meta itemprop="longitude" content="6.056163" />
						</span>
					</span>

					<div class="clear"></div>
				</div>


			</div>

			<!-- collaboration_DPC -->

			<div class="menu_dpt"><a href="#" class="picto_dpc" id="select_dpc">&Eacute;quipes Parole-Cognition</a></div>

			<div id="block_collab_dpc">


				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Alg�rie</span>
					<h1 class="sum_struc" itemprop="summary">Centre National de Recherches Pr�historiques Anthropologique et
						Historique </h1>
					<span class="hidden" itemprop="ville">Alger, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"></span>
					<span class="hidden" itemprop="structure_url"></span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://djillali.hadjouis.pagesperso-orange.fr/index.htm"
							target="_blank">Djillali HADJOUIS</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://djillali.hadjouis.pagesperso-orange.fr/index.htm</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro6a7c.html?vid=188" target="_blank">VILAIN
							Anne</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=188</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="36.754634" />
							<meta itemprop="longitude" content="3.047565" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Australie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.uow.edu.au/health/psyc/index.html"
							target="_blank">University of Wollongong</a></h1>
					<span class="hidden" itemprop="ville">Wollongong, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.uow.edu.au/health/psyc/index.html"
							target="_blank">School of Psychology</a></span>
					<span class="hidden" itemprop="structure_url">http://www.uow.edu.au/health/psyc/index.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.uow.edu.au/health/psyc/staff/UOW025001.html"
							target="_blank">Harold HILL</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.uow.edu.au/health/psyc/staff/UOW025001.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5f8e.html?vid=146" target="_blank">DOHEN
							Marion</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=146</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="-34.404785" />
							<meta itemprop="longitude" content="150.878842" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Belgique</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://lcld.ulb.ac.be/" target="_blank">Laboratoire
							Cognition, Langage et D�veloppement</a></h1>
					<span class="hidden" itemprop="ville">Bruxelles, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://lcld.ulb.ac.be/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://lcld.ulb.ac.be/</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../recherche/departement-parole-cognition.html"
							target="_blank">Equipes du DPC</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/recherche/departement-parole-cognition.php</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="50.814477" />
							<meta itemprop="longitude" content="4.266765" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Canada</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.brain.ubc.ca/research/mentalhealth_addiction.htm"
							target="_blank">Brain Research Center</a></h1>
					<span class="hidden" itemprop="ville">Vancouver, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.brain.ubc.ca/research/mentalhealth_addiction.htm" target="_blank">Cognitive Neuroscience
							of Schizophrenia (CNoS)</a></span>
					<span class="hidden"
						itemprop="structure_url">http://www.brain.ubc.ca/research/mentalhealth_addiction.htm</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www3.telus.net/Todd_S_Woodward/"
							target="_blank">Todd WOODWARD</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www3.telus.net/Todd_S_Woodward/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5f8e.html?vid=146" target="_blank">DOHEN
							Marion</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=146</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="49.263436" />
							<meta itemprop="longitude" content="-123.252726" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Canada</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.crlmb.ca/" target="_blank">Centre for Research on
							Language, Mind and Brain</a></h1>
					<span class="hidden" itemprop="ville">Montr�al, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.crlmb.ca/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.crlmb.ca/ </span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.crlmb.ca/members/2006/10/shari_baum.html"
							target="_blank">Shari BAUM</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.crlmb.ca/members/2006/10/shari_baum.html</span>
					<span class="hidden" itemprop="part_link2"><a href="http://www.crlmb.ca/members/2006/10/vincent_gracco.html"
							target="_blank">Vince GRACCO</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://www.crlmb.ca/members/2006/10/vincent_gracco.html</span>
					<span class="hidden" itemprop="part_link3"><a href="http://www.crlmb.ca/members/2006/10/lucie_mnard.html"
							target="_blank">Lucie MENARD</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp3">http://www.crlmb.ca/members/2006/10/lucie_mnard.html</span>
					<span class="hidden" itemprop="part_link4"><a href="http://www.mcgill.ca/graccolab/people#DOUG"
							target="_blank">Douglas SHILLER</a></span>
					<span class="hidden" itemprop="partenaire_url_pp4">http://www.mcgill.ca/graccolab/people#DOUG</span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=179</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="45.501429" />
							<meta itemprop="longitude" content="-73.582082" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Canada</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.er.uqam.ca/nobel/labophon/index.html"
							target="_blank">Laboratoire de phon�tique-UQAM</a></h1>
					<span class="hidden" itemprop="ville">Montr�al, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.er.uqam.ca/nobel/labophon/index.html"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.er.uqam.ca/nobel/labophon/index.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.er.uqam.ca/nobel/labophon/menard.html"
							target="_blank">Lucie MENARD</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.er.uqam.ca/nobel/labophon/menard.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro39fb.html?vid=449" target="_blank">BOE
							Louis-Jean</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=449</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prof06d.html?vid=162" target="_blank">LOEVENBRUCK
							H&eacute;l&egrave;ne</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=162</span>
					<span class="hidden" itemprop="perm_link3"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp3">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link4"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp4">/page_pro.php?vid=179</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="45.514587" />
							<meta itemprop="longitude" content="-73.561978" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Canada</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.mcgill.ca/scsd/" target="_blank">McGill
							University</a></h1>
					<span class="hidden" itemprop="ville">Montr�al, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.mcgill.ca/scsd/" target="_blank">School
							of Communication Sciences & Disorders</a></span>
					<span class="hidden" itemprop="structure_url">http://www.mcgill.ca/scsd/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.mcgill.ca/scsd/people/faculty/sharibaum"
							target="_blank">Shari BAUM</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.mcgill.ca/scsd/people/faculty/sharibaum</span>
					<span class="hidden" itemprop="part_link2"><a href="http://www.mcgill.ca/scsd/people/faculty/vincentgracco"
							target="_blank">Vince GRACCO</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://www.mcgill.ca/scsd/people/faculty/vincentgracco</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="45.505505" />
							<meta itemprop="longitude" content="-73.576262" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Canada</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.eoa.umontreal.ca/" target="_blank">Universit� de
							Montr�al</a></h1>
					<span class="hidden" itemprop="ville">Montr�al, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.eoa.umontreal.ca/"
							target="_blank">School of speech therapy and audiology</a></span>
					<span class="hidden" itemprop="structure_url">http://www.eoa.umontreal.ca/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.eoa.umontreal.ca/a_propos/equipe/professeurs/shiller_douglas.html"
							target="_blank">Douglas SHILLER</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.eoa.umontreal.ca/a_propos/equipe/professeurs/shiller_douglas.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="45.503881" />
							<meta itemprop="longitude" content="-73.614936" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://psychology.clas.asu.edu/" target="_blank">Arizona
							State University</a></h1>
					<span class="hidden" itemprop="ville">Tempe, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://psychology.clas.asu.edu/"
							target="_blank">Department of Psychology</a></span>
					<span class="hidden" itemprop="structure_url">http://psychology.clas.asu.edu/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="https://webapp4.asu.edu/directory/person/1130632"
							target="_blank">Arthur GLENBERG</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">https://webapp4.asu.edu/directory/person/1130632</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="33.420768" />
							<meta itemprop="longitude" content="-111.936228" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://linguistics.osu.edu/" target="_blank">Ohio State
							University</a></h1>
					<span class="hidden" itemprop="ville">Columbus, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://linguistics.osu.edu/"
							target="_blank">Department of Linguistics</a></span>
					<span class="hidden" itemprop="structure_url">http://linguistics.osu.edu/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://linguistics.osu.edu/people/view/user/653"
							target="_blank">Mary BECKMAN</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://linguistics.osu.edu/people/view/user/653</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof06d.html?vid=162" target="_blank">LOEVENBRUCK
							H&eacute;l&egrave;ne</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=162</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="40.735616" />
							<meta itemprop="longitude" content="-84.025977" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.neurology.uci.edu/" target="_blank">University of
							California</a></h1>
					<span class="hidden" itemprop="ville">Irvine, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.neurology.uci.edu/"
							target="_blank">Department of Neurology</a></span>
					<span class="hidden" itemprop="structure_url">http://www.neurology.uci.edu/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Steve SMALL</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="33.649833" />
							<meta itemprop="longitude" content="-117.845839" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.usc.edu/" target="_blank">University of Southern
							California </a></h1>
					<span class="hidden" itemprop="ville">Los Angeles, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.usc.edu/" target="_blank">Neuroscience
							Department</a></span>
					<span class="hidden" itemprop="structure_url">http://www.usc.edu/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.usc.edu/programs/neuroscience/faculty/profile.php?fid=16" target="_blank">Michael
							ARBIB</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.usc.edu/programs/neuroscience/faculty/profile.php?fid=16</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=179</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="34.022022" />
							<meta itemprop="longitude" content="-118.286342" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.utexas.edu/" target="_blank">University of
							Texas</a></h1>
					<span class="hidden" itemprop="ville">Austin, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.utexas.edu/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.utexas.edu/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www.psy.utexas.edu/psy/faculty/MacNeilage/macneilage.html" target="_blank">Peter MAC
							NEILAGE</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.psy.utexas.edu/psy/faculty/MacNeilage/macneilage.html</span>
					<span class="hidden" itemprop="part_link2"><a href="http://csd.utexas.edu/faculty/barbara-davis"
							target="_blank">Barbara DAVIS</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://csd.utexas.edu/faculty/barbara-davis</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro6a7c.html?vid=188" target="_blank">VILAIN
							Anne</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=188</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="30.286568" />
							<meta itemprop="longitude" content="-97.733445" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Etats-Unis</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.comdis.wisc.edu/" target="_blank">University of
							Wisconsin</a></h1>
					<span class="hidden" itemprop="ville">Madison, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.comdis.wisc.edu/"
							target="_blank">Department of Communication Disorders</a></span>
					<span class="hidden" itemprop="structure_url">http://www.comdis.wisc.edu/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.comdis.wisc.edu/staff/jedwards2/index.php"
							target="_blank">Jan EDWARDS</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.comdis.wisc.edu/staff/jedwards2/index.php</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof06d.html?vid=162" target="_blank">LOEVENBRUCK
							H&eacute;l&egrave;ne</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=162</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="43.076098" />
							<meta itemprop="longitude" content="-89.403148" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Finlande</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.becs.tkk.fi/en/" target="_blank">Aalto University
							School of Science</a></h1>
					<span class="hidden" itemprop="ville">Helsinki, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.becs.tkk.fi/en/"
							target="_blank">Department of Biomechanical engineering and computational science</a></span>
					<span class="hidden" itemprop="structure_url">http://www.becs.tkk.fi/en/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.becs.tkk.fi/en/personnel/staff/sams_mikko.html"
							target="_blank">Mikko SAMS</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.becs.tkk.fi/en/personnel/staff/sams_mikko.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=179</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="60.186449" />
							<meta itemprop="longitude" content="24.827206" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.chu-grenoble.fr/" target="_blank">CHU
							Grenoble</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.chu-grenoble.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.chu-grenoble.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Philippe KAHANE, </span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2">Alexandre KRAINIK, </span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3">Jean-Fran�ois LE BAS, </span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4">Mircea POLOSAN</span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5f8e.html?vid=146" target="_blank">DOHEN
							Marion</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=146</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prof06d.html?vid=162" target="_blank">LOEVENBRUCK
							H&eacute;l&egrave;ne</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=162</span>
					<span class="hidden" itemprop="perm_link3"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp3">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link4"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp4">/page_pro.php?vid=179</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="45.178853" />
							<meta itemprop="longitude" content="5.713661" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://cnc.isc.cnrs.fr/index.php" target="_blank">Centre de
							Neurosciences Cognitives </a></h1>
					<span class="hidden" itemprop="ville">Lyon, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://cnc.isc.cnrs.fr/index.php"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://cnc.isc.cnrs.fr/index.php</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://afrc.jimdo.com/" target="_blank">Nicolas
							FRANCK</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://afrc.jimdo.com/</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5f8e.html?vid=146" target="_blank">DOHEN
							Marion</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=146</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prof06d.html?vid=162" target="_blank">LOEVENBRUCK
							H&eacute;l&egrave;ne</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=162</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="45.746863" />
							<meta itemprop="longitude" content="4.896564" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://cerco.ups-tlse.fr/2011/index.php"
							target="_blank">Centre de Recherche Cerveau et Cognition </a></h1>
					<span class="hidden" itemprop="ville">Toulouse, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://cerco.ups-tlse.fr/2011/index.php"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://cerco.ups-tlse.fr/2011/index.php</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.cerco.ups-tlse.fr/~hupe/"
							target="_blank">Jean-Michel HUPE</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.cerco.ups-tlse.fr/~hupe/</span>
					<span class="hidden" itemprop="part_link2"><a href="http://cerco.ups-tlse.fr/2011/spip.php?article136"
							target="_blank">Pascal BARONE</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://cerco.ups-tlse.fr/2011/spip.php?article136</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro468a.html?vid=133" target="_blank">BERTHOMMIER
							Fr&eacute;d&eacute;ric</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=133</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link3"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp3">/page_pro.php?vid=179</span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="43.611891" />
							<meta itemprop="longitude" content="1.403620" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.cognition.ens.fr/" target="_blank">ENS Paris</a>
					</h1>
					<span class="hidden" itemprop="ville">Paris, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.cognition.ens.fr/"
							target="_blank">D�partement d�Etudes Cognitives</a></span>
					<span class="hidden" itemprop="structure_url">http://www.cognition.ens.fr/ </span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://paulegre.free.fr/" target="_blank">Paul EGRE</a>,
					</span>
					<span class="hidden" itemprop="partenaire_url_pp">http://paulegre.free.fr/</span>
					<span class="hidden" itemprop="part_link2"><a href="http://audition.ens.fr/dp/" target="_blank">Daniel
							PRESSNITZER</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://audition.ens.fr/dp/</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro468a.html?vid=133" target="_blank">BERTHOMMIER
							Fr&eacute;d&eacute;ric</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=133</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=179</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="48.842012" />
							<meta itemprop="longitude" content="2.344099" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.fondationiph.org/" target="_blank">Institut de
							Pal�ontologie Humaine</a></h1>
					<span class="hidden" itemprop="ville">Paris, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.fondationiph.org/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.fondationiph.org/ </span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Jean-Louis HEIM</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro39fb.html?vid=449" target="_blank">BOE
							Louis-Jean</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=449</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="48.839180" />
							<meta itemprop="longitude" content="2.359183" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://w3.u-grenoble3.fr/lidilem/labo/web/presentation.php"
							target="_blank">LIDILEM</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://w3.u-grenoble3.fr/lidilem/labo/web/presentation.php" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://w3.u-grenoble3.fr/lidilem/labo/web/presentation.php
					</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://w3.u-grenoble3.fr/lidilem/labo/membre/membre_plus.php?mem_login=colletta"
							target="_blank">Jean-Marc COLLETTA</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://w3.u-grenoble3.fr/lidilem/labo/membre/membre_plus.php?mem_login=colletta</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro6a7c.html?vid=188" target="_blank">VILAIN
							Anne</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=188</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro3ac0.html?vid=189" target="_blank">VILAIN
							Coriandre</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=189</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="45.191882" />
							<meta itemprop="longitude" content="5.772370" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://webu2.upmf-grenoble.fr/LPNC/"
							target="_blank">LPNC</a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://webu2.upmf-grenoble.fr/LPNC/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://webu2.upmf-grenoble.fr/LPNC/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://webu2.upmf-grenoble.fr/LPNC/membre_monica_baciu"
							target="_blank">Monica BACIU</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://webu2.upmf-grenoble.fr/LPNC/membre_monica_baciu</span>
					<span class="hidden" itemprop="part_link2"><a href="http://webu2.upmf-grenoble.fr/LPNC/membre_julien_diard"
							target="_blank">Julien DIARD</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://webu2.upmf-grenoble.fr/LPNC/membre_julien_diard</span>
					<span class="hidden" itemprop="part_link3"><a
							href="http://webu2.upmf-grenoble.fr/LPNC/membre_olivier_pascalis" target="_blank">Olivier PASCALIS</a>,
					</span>
					<span class="hidden"
						itemprop="partenaire_url_pp3">http://webu2.upmf-grenoble.fr/LPNC/membre_olivier_pascalis</span>
					<span class="hidden" itemprop="part_link4"><a href="http://webu2.upmf-grenoble.fr/LPNC/membre_cedric_pichat"
							target="_blank">C�dric PICHAT</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp4">http://webu2.upmf-grenoble.fr/LPNC/membre_cedric_pichat</span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5f8e.html?vid=146" target="_blank">DOHEN
							Marion</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=146</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prof06d.html?vid=162" target="_blank">LOEVENBRUCK
							H&eacute;l&egrave;ne</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=162</span>
					<span class="hidden" itemprop="perm_link3"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp3">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link4"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp4">/page_pro.php?vid=179</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="45.191829" />
							<meta itemprop="longitude" content="5.771114" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://olfac.univ-lyon1.fr/documentation/olfaction/"
							target="_blank">Laboratoire Neurosciences et syst�mes sensorielles</a></h1>
					<span class="hidden" itemprop="ville">Lyon, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://olfac.univ-lyon1.fr/documentation/olfaction/" target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://olfac.univ-lyon1.fr/documentation/olfaction/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Nicolas GRIMAULT</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro468a.html?vid=133" target="_blank">BERTHOMMIER
							Fr&eacute;d&eacute;ric</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=133</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link3"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp3">/page_pro.php?vid=179</span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="45.726637" />
							<meta itemprop="longitude" content="4.827824" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.lpl.univ-aix.fr/" target="_blank">Laboratoire
							Parole et Langage</a></h1>
					<span class="hidden" itemprop="ville">Aix en Provence, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.lpl.univ-aix.fr/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.lpl.univ-aix.fr/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://147.94.196.232/person/FMPro?-db=lpl-person.fp5&amp;-format=1personne_detail.htm&amp;-lay=activites&amp;-sortfield=nom&amp;Nom_complet=aute&amp;-max=2147483647&amp;-recid=10&amp;-find="
							target="_blank">Denis AUTESSERRE</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://147.94.196.232/person/FMPro?-db=lpl-person.fp5&-format=1personne_detail.htm&-lay=activites&-sortfield=nom&Nom_complet=aute&-max=2147483647&-recid=10&-find=</span>
					<span class="hidden" itemprop="part_link2"><a
							href="http://teck.lpl.univ-aix.fr/person/FMPro?-db=lpl-person.fp5&amp;-format=1personne_detail.htm&amp;-lay=activites&amp;-sortfield=nom&amp;Nom=bertr&amp;-max=2147483647&amp;-recid=11&amp;-find="
							target="_blank">Roxanne BERTRAND</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://teck.lpl.univ-aix.fr/person/FMPro?-db=lpl-person.fp5&-format=1personne_detail.htm&-lay=activites&-sortfield=nom&Nom=bertr&-max=2147483647&-recid=11&-find=</span>
					<span class="hidden" itemprop="part_link3"><a
							href="http://teck.lpl.univ-aix.fr/person/FMPro?-db=lpl-person.fp5&amp;-format=1personne_detail.htm&amp;-lay=activites&amp;-sortfield=nom&amp;Nom=cav&amp;-max=2147483647&amp;-recid=17&amp;-find="
							target="_blank">Christian CAVE</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp3">http://teck.lpl.univ-aix.fr/person/FMPro?-db=lpl-person.fp5&-format=1personne_detail.htm&-lay=activites&-sortfield=nom&Nom=cav&-max=2147483647&-recid=17&-find=</span>
					<span class="hidden" itemprop="part_link4"><a
							href="http://teck.lpl.univ-aix.fr/person/FMPro?-db=lpl-person.fp5&amp;-format=1personne_detail.htm&amp;-lay=activites&amp;-sortfield=nom&amp;Nom=d%27im&amp;-max=2147483647&amp;-recid=32773&amp;-find="
							target="_blank">Mariapaola D IMPERIO</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp4">http://teck.lpl.univ-aix.fr/person/FMPro?-db=lpl-person.fp5&-format=1personne_detail.htm&-lay=activites&-sortfield=nom&Nom=d%27im&-max=2147483647&-recid=32773&-find=</span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5f8e.html?vid=146" target="_blank">DOHEN
							Marion</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=146</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prof06d.html?vid=162" target="_blank">LOEVENBRUCK
							H&eacute;l&egrave;ne</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=162</span>
					<span class="hidden" itemprop="perm_link3"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp3">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link4"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp4">/page_pro.php?vid=179</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="43.533313" />
							<meta itemprop="longitude" content="5.446009" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a
							href="http://www.mnhn.fr/museum/foffice/transverse/transverse/accueil.xsp" target="_blank">Museum National
							d Histoire Naturelle</a></h1>
					<span class="hidden" itemprop="ville">Paris, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.mnhn.fr/museum/foffice/transverse/transverse/accueil.xsp" target="_blank"></a></span>
					<span class="hidden"
						itemprop="structure_url">http://www.mnhn.fr/museum/foffice/transverse/transverse/accueil.xsp</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Jean GRANAT, </span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2">Jean-Louis HEIM, </span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3">Evelyne PEYRE, </span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4">Alain FROMENT</span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro39fb.html?vid=449" target="_blank">BOE
							Louis-Jean</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=449</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="48.842915" />
							<meta itemprop="longitude" content="2.356303" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">France</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www-ifr1.ujf-grenoble.fr/3T/index.php"
							target="_blank">Plate-forme IRM de recherche clinique et cognitive </a></h1>
					<span class="hidden" itemprop="ville">Grenoble, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www-ifr1.ujf-grenoble.fr/3T/index.php"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www-ifr1.ujf-grenoble.fr/3T/index.php</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a
							href="http://www-ifr1.ujf-grenoble.fr/3T/index.php?option=com_contact&amp;catid=13&amp;Itemid=3"
							target="_blank">Laurent LAMALLE</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www-ifr1.ujf-grenoble.fr/3T/index.php?option=com_contact&catid=13&Itemid=3</span>
					<span class="hidden" itemprop="part_link2"><a
							href="http://www-ifr1.ujf-grenoble.fr/3T/index.php?option=com_contact&amp;catid=13&amp;Itemid=3"
							target="_blank">Ir�ne TROPES</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://www-ifr1.ujf-grenoble.fr/3T/index.php?option=com_contact&catid=13&Itemid=3</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5f8e.html?vid=146" target="_blank">DOHEN
							Marion</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=146</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_prof06d.html?vid=162" target="_blank">LOEVENBRUCK
							H&eacute;l&egrave;ne</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=162</span>
					<span class="hidden" itemprop="perm_link3"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp3">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link4"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp4">/page_pro.php?vid=179</span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="45.199427" />
							<meta itemprop="longitude" content="5.744298" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Italie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.unitn.it/en/cimec" target="_blank">CIMeC</a></h1>
					<span class="hidden" itemprop="ville">Trento, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.unitn.it/en/cimec"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.unitn.it/en/cimec</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.unitn.it/en/cimec/11499/luigi-cattaneo"
							target="_blank">Luigi CATTANEO</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.unitn.it/en/cimec/11499/luigi-cattaneo</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="46.069271" />
							<meta itemprop="longitude" content="11.120474" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Italie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.agh.edu.pl/en" target="_blank">Universita degli
							studi di Parma</a></h1>
					<span class="hidden" itemprop="ville">Parme, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.agh.edu.pl/en"
							target="_blank">Department of Neurosciences</a></span>
					<span class="hidden" itemprop="structure_url">http://www.agh.edu.pl/en</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.unipr.it/arpa/mirror/english/staff/riggio.htm"
							target="_blank">Lucia RIGGIO</a>, </span>
					<span class="hidden"
						itemprop="partenaire_url_pp">http://www.unipr.it/arpa/mirror/english/staff/riggio.htm</span>
					<span class="hidden" itemprop="part_link2"><a href="http://www.unipr.it/arpa/mirror/english/staff/fogassi.htm"
							target="_blank">Leonardo FOGASSI</a></span>
					<span class="hidden"
						itemprop="partenaire_url_pp2">http://www.unipr.it/arpa/mirror/english/staff/fogassi.htm</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Publication commune</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="44.800231" />
							<meta itemprop="longitude" content="10.326018" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Italie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.unife.it/dipartimento/scienze-biomediche"
							target="_blank">Universit� di Ferrara</a></h1>
					<span class="hidden" itemprop="ville">Ferrara, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a
							href="http://www.unife.it/dipartimento/scienze-biomediche" target="_blank">Dipartimento di Scienze
							Biomediche</a></span>
					<span class="hidden" itemprop="structure_url">http://www.unife.it/dipartimento/scienze-biomediche</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Luciano FADIGA</span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_proc543.html?vid=508" target="_blank">SATO
							Marc</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=508</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_proe3fd.html?vid=179" target="_blank">SCHWARTZ
							Jean-Luc</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=179</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="44.833687" />
							<meta itemprop="longitude" content="11.626042" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Japon</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.irc.atr.jp/en/" target="_blank">ATR-Intelligent
							Robotics and Communicaton Laboratories</a></h1>
					<span class="hidden" itemprop="ville">Kyoto, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.irc.atr.jp/en/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.irc.atr.jp/en/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://www.irc.atr.jp/~heracleous/index.html"
							target="_blank">Panikos HERACLEOUS</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://www.irc.atr.jp/~heracleous/index.html</span>
					<span class="hidden" itemprop="part_link2"><a href="http://www.irc.atr.jp/hagita/hagita.html"
							target="_blank">Norihiro HAGITA</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://www.irc.atr.jp/hagita/hagita.html</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Augmented Speech Electro-Magnetic Articulography (EMA) automatic speech
						recognition hidden Markov model (HMMs) fusion noise robustness (publication commune)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : MAGIC</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5b5b.html?vid=127" target="_blank">BADIN
							Pierre</a>, </span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=127</span>
					<span class="hidden" itemprop="perm_link2"><a href="../page_pro1343.html?vid=128" target="_blank">BAILLY
							G&eacute;rard</a></span>
					<span class="hidden" itemprop="permanent_url_pp2">/page_pro.php?vid=128</span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="34.743887" />
							<meta itemprop="longitude" content="135.765898" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Japon</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.atr.jp/mis/en/" target="_blank">ATR-Media
							Information Science Lab</a></h1>
					<span class="hidden" itemprop="ville">Kyoto, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.atr.jp/mis/en/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.atr.jp/mis/en/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link">Daniel CALLAN, </span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2">Akiko CALLAN</span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro5f8e.html?vid=146" target="_blank">DOHEN
							Marion</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=146</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="34.743887" />
							<meta itemprop="longitude" content="135.765898" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Japon</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.naist.jp/index_j.html" target="_blank">Nara
							Institute of Science and Technology (NAIST)</a></h1>
					<span class="hidden" itemprop="ville">Nara, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.naist.jp/index_j.html"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.naist.jp/index_j.html</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://spalab.naist.jp/~tomoki/index_e.html"
							target="_blank">Tomoki TODA</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://spalab.naist.jp/~tomoki/index_e.html</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof06d.html?vid=162" target="_blank">LOEVENBRUCK
							H&eacute;l&egrave;ne</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=162</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="34.732408" />
							<meta itemprop="longitude" content="135.732905" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Nouvelle-Cal�donie</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://cnep.univ-nc.nc/" target="_blank">Centre des
							Nouvelles Etudes sur le Pacifique</a></h1>
					<span class="hidden" itemprop="ville">Noum�a, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://cnep.univ-nc.nc/"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://cnep.univ-nc.nc/</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://pages.univ-nc.nc/~jouve/" target="_blank">Dominique
							JOUVE</a>, </span>
					<span class="hidden" itemprop="partenaire_url_pp">http://pages.univ-nc.nc/~jouve/</span>
					<span class="hidden" itemprop="part_link2"><a href="http://cnep.univ-nc.nc/Vernaudon-Jacques"
							target="_blank">Jacques VERNAUDON</a></span>
					<span class="hidden" itemprop="partenaire_url_pp2">http://cnep.univ-nc.nc/Vernaudon-Jacques</span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_prof06d.html?vid=162" target="_blank">LOEVENBRUCK
							H&eacute;l&egrave;ne</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=162</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="-22.264415" />
							<meta itemprop="longitude" content="166.471151" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">Royaume Uni</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.pdn.cam.ac.uk/groups/cnbh/index.php"
							target="_blank">Center for the Neural Basis of Hearing</a></h1>
					<span class="hidden" itemprop="ville">Cambridge, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.pdn.cam.ac.uk/groups/cnbh/index.php"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.pdn.cam.ac.uk/groups/cnbh/index.php</span>
					<span class="hidden" itemprop="part_titre">Partenaire(s): </span>
					<span class="hidden" itemprop="part_link"><a href="http://koma.homelinux.org/cv/gaudrain.en.php"
							target="_blank">Etienne GAUDRAIN</a></span>
					<span class="hidden" itemprop="partenaire_url_pp">http://koma.homelinux.org/cv/gaudrain.en.php</span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre">Lecture labiale (publication commune)</span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro468a.html?vid=133" target="_blank">BERTHOMMIER
							Fr&eacute;d&eacute;ric</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=133</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="52.203478" />
							<meta itemprop="longitude" content="0.122048" />
						</span>
					</span>

					<div class="clear"></div>
				</div>

				<div itemscope itemtype="marker_dpc">

					<span class="sum_dpc" itemprop="pays">R�union</span>
					<h1 class="sum_struc" itemprop="summary"><a href="http://www.potomitan.info/reinion/lofis.php"
							target="_blank">Office de la langue Cr�ole de la R�union </a></h1>
					<span class="hidden" itemprop="ville">Saint Denis, </span>

					<span class="hidden" itemprop="partenaire_dpt_eqp"><a href="http://www.potomitan.info/reinion/lofis.php"
							target="_blank"></a></span>
					<span class="hidden" itemprop="structure_url">http://www.potomitan.info/reinion/lofis.php</span>
					<span class="hidden" itemprop="part_titre"></span>
					<span class="hidden" itemprop="part_link"></span>
					<span class="hidden" itemprop="partenaire_url_pp"></span>
					<span class="hidden" itemprop="part_link2"></span>
					<span class="hidden" itemprop="partenaire_url_pp2"></span>
					<span class="hidden" itemprop="part_link3"></span>
					<span class="hidden" itemprop="partenaire_url_pp3"></span>
					<span class="hidden" itemprop="part_link4"></span>
					<span class="hidden" itemprop="partenaire_url_pp4"></span>
					<span class="hidden" itemprop="cadre"></span>
					<span class="hidden" itemprop="permanent_eqp">Collaboration de l'&eacute;quipe : PCMD</span>
					<span class="hidden" itemprop="perm_link"><a href="../page_pro6a7c.html?vid=188" target="_blank">VILAIN
							Anne</a></span>
					<span class="hidden" itemprop="permanent_url_pp">/page_pro.php?vid=188</span>
					<span class="hidden" itemprop="perm_link2"></span>
					<span class="hidden" itemprop="permanent_url_pp2"></span>
					<span class="hidden" itemprop="perm_link3"></span>
					<span class="hidden" itemprop="permanent_url_pp3"></span>
					<span class="hidden" itemprop="perm_link4"></span>
					<span class="hidden" itemprop="permanent_url_pp4"></span>

					<span class="location vcard" itemprop="location" itemscope itemtype="marker_dpc">
						<span itemprop="geo" itemscope itemtype="marker_dpc">
							<meta itemprop="latitude" content="-20.878060" />
							<meta itemprop="longitude" content="55.450373" />
						</span>
					</span>

					<div class="clear"></div>
				</div>



			</div>

		</div>

	</div> <!-- /contenu_map_collab -->

</body>


<!-- Mirrored from www.gipsa-lab.grenoble-inp.fr/collaborations_gipsa/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2019 23:22:25 GMT -->

</html>
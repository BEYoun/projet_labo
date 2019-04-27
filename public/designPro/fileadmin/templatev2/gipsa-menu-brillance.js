/* pour la surbriallance */
var currentLocation =  document.location.href;
//alert(currentLocation);

var tab_url=new Array(["accueil.php","menuaccueil"]
	,["home.php","menuaccueil"]
	,["espace-presse.php","menuaccueil"]
	,["phototheque.php","menuaccueil"]
	,["grand_public","menuaccueil"]
	,["/le-laboratoire/","menu3"]
	,["/recherche/","menu10"]
	,["/publications/","menu16"]
	,["/animation/","menu21"]
	,["/formation/","menu25"]
	,["/valorisation/","menu31"]
	,["en/sysco.php","menu258"]
	,["/en/sysco/","menu258"]
	,["/sysco/","menu10"]
	,["sysco.php","menu10"]
	,["en/slr.php","menu258"]
	,["/en/slr/","menu258"]
	,["/slr/","menu10"]
	,["slr.php","menu10"]
	,["en/necs.php","menu258"]
	,["/en/necs/","menu258"]
	,["/necs/","menu10"]
	,["necs.php","menu10"]
	,["en/saiga.php","menu258"]
	,["/en/saiga/","menu258"]
	,["/saiga/","menu10"]
	,["saiga.php","menu10"]
	,["en/agpig.php","menu258"]
	,["/en/agpig/","menu258"]
	,["/agpig/","menu10"]
	,["agpig.php","menu10"]
	,["en/cics.php","menu258"]
	,["/en/cics/","menu258"]
	,["/cics/","menu10"]
	,["cics.php","menu10"]
	,["en/vibs.php","menu258"]
	,["/en/vibs/","menu258"]
	,["/vibs/","menu10"]
	,["vibs.php","menu10"]
	,["en/sigmaphy.php","menu258"]
	,["/en/sigmaphy/","menu258"]
	,["/sigmaphy/","menu10"]
	,["sigmaphy.php","menu10"]
	,["en/pcmd.php","menu258"]
	,["/en/pcmd/","menu258"]
	,["/pcmd/","menu10"]
	,["pcmd.php","menu10"]
	,["en/sld.php","menu258"]
	,["/en/sld/","menu258"]
	,["/sld/","menu10"]
	,["sld.php","menu10"]
	,["en/gama.php","menu258"]
	,["/en/gama/","menu258"]
	,["/gama/","menu10"]
	,["gama.php","menu10"]
	,["en/magic.php","menu258"]
	,["/en/magic/","menu258"]
	,["/magic/","menu10"]
	,["magic.php","menu10"]
	,["about-gipsa-lab","menu290"]
	,["research","menu258"]
	,["production","menu300"]
	,["events","menu304"]
	,["education","menu308"]
	,["valorization","menu314"]
);

lg=currentLocation.length;
lg=lg-3;

if(currentLocation.lastIndexOf("fr")==lg)
{
	document.getElementById("menuaccueil").className = "menu_gipsa_current";
} else {
	if(currentLocation.lastIndexOf("en")==lg)
	{
        	document.getElementById("menuaccueil").className = "menu_gipsa_current";
	} else {

		for (i=0;i<tab_url.length;i++)
		{
			position=currentLocation.indexOf(tab_url[i][0], 0);	
			if(position>0)
			{
				document.getElementById(tab_url[i]["1"]).className = "menu_gipsa_current";
				//alert("passe");
			}
		}
	}
}

/* pour le menu intranet */
$(document).ready(function(){
		var html = $.ajax({
url: "/fileadmin/script/extranet/intra_extra.php",
async: false 
}).responseText;
		//var url=$(extra).attr("href");  
		//var url=$("extra").attr("href");  
		//$("div").filter(".commentaire").append("<br>passe");

		$("#extra").removeAttr("href");
		$("#extra").attr("href",html);
		})


<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Asesoria Juridica y de control de Legalidad de Gobierno</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript" src="vistas/gen/v.js"></script>
        <script type="text/javascript" src="vistas/js/sitio.min.js"></script>
        <link rel="stylesheet" type="text/css" href="vistas/css/custom-bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="vistas/css/patron.css">
        <link type="text/css" rel="stylesheet" href="vistas/css/patron-iconos.css">
        <script type="text/javascript" src="vistas/js/all.min.js"></script>   
		<link rel="shortcut icon" type="image/png" href="vistas/img/favicon.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sitio Oficial de Asesoria Juridica y de control de Legalidad de Gobierno de la Provincia de San Juan, Argentina">
        <meta name="keywords" content="control,legalidad,asesoria juridica,asesoria,letrada,sanjuan,sanjuan.gov.ar,Portal de San Juan">
        <meta name="author" content="Gobierno de la Provincia de San Juan">
       <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'es',
                    includedLanguages: 'en,fr,pt,zh-TW',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                    multilanguagePage: true,
                    gaTrack: true,
                    gaId: 'UA-53599864-1'
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="vistas///translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-53599864-1', 'auto');
            ga('send', 'pageview');
        </script>
        <style>
        h4.corregir {color:white;}
        h2.corregir {color:white;}
        </style>

	<!-- =======================================================
	    Theme Name: Asesoria Letrada
	    Theme URL: 
		Author: Wingeyer Marcelo
	============================================================ -->

	</head>


<body>

	<?php

		include "paginas/modulos/cabecera.php";
		include "paginas/modulos/accesos.php";
		include "paginas/modulos/guias.php";
		include "paginas/modulos/organizacion.php";
		include "paginas/modulos/telefonos.php";
		include "paginas/modulos/footer.php";


	?>

   

    <script>
        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-border-red";
        }
    </script>

    <script src="vistas/https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="vistas/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="vistas/https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>
</html>
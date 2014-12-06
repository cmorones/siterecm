<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Hacia una nueva política de salarios y de ingresos en la Ciudad de México">
	<meta name="author" content="SEDECO DF">

	<?php
		$baseUrl = Yii::app()->request->baseUrl; 
		$cs = Yii::app()->getClientScript();
		Yii::app()->clientScript->registerCoreScript('jquery');
		$cs->registerCssFile($baseUrl.'/css/bootstrap.css');
		$cs->registerCssFile($baseUrl.'/css/estilos-personalizados.css');
		$cs->registerScriptFile($baseUrl.'/js/highcharts.js');
        $cs->registerScriptFile($baseUrl.'/js/modules/exporting.js');
	?>
	<title><?php echo CHtml::encode($this->pageTitle); ?> - Hacia una nueva política de salarios y de ingresos en la Ciudad de México.</title>
</head>

<body>
	<div class="container headerContainer">
		<div class="header" role="banner">
			<div class="row headerTitle">
				<div class="col-md-3 text-center" ><img src="<?php echo Yii::app()->request->baseUrl;?>/images/logos.png" alt="Secretaría de Desarrollo Económico de la Ciudad de México"></div>
				<div class="col-md-3 text-left" ><h1 class="colorTitulo">Secretaria de <strong>Desarrollo Económico</strong></h1></div>
				<div class="col-md-6 text-left" ><img src="<?php echo Yii::app()->request->baseUrl;?>/images/logocdmx.png" alt="Ciudad de México"></div>
			</div>
		  <!-- <ul class="nav navbar-nav customNav">
		    <li><a href="#">Planteamiento oficial</a></li>
		    <li><a href="#">Información relevante</a></li>
		    <li><a href="#">Bibliografía comentada</a></li>
		    <li><a href="#">Síntesis del Debate</a></li>
		  </ul> -->

	
			<div class="navbar navbar-default customNav" role="navigation">
				
				<?php

				$baseUrl2 = YiiBase::getPathOfAlias("webroot");

				$menus= $baseUrl2.'/static/menus.json';

//echo $menus;
				$datos = file_get_contents($menus);
				$recuperar = json_decode($datos, true);

					$this->widget('application.extensions.bootstrapmenu.BootsMenu', array(
					    'items' => $recuperar,
					));

				?>
				
			</div><!-- navbar -->
		</div>
	</div>

	
<?php echo $content; ?>
	<footer role="footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12 text-center">
	                <p class="pieGOBDF"><b>Secretaría de Desarrollo Económico. Av. Cuauhtémoc 899, Col. Narvarte, C.P. 03020, México D.F. <a href="tel:5556822096">Tel. (55) 56 82 20 96</a><br> Consultas, dudas o sugerencias ponerse en contacto al email <a href="mailto:salarioscdmx@sedecodf.gob.mx">salarioscdmx@sedecodf.gob.mx</a><br>Todos los derechos reservados © ® </b><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/escudo-pie.png" alt="Escudo de la Ciudad de México"/></p>
	            </div>
	            <!-- <div class="col-md-1"></div> -->
	        </div>
	    </div>
	</footer>

	<script src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-1.11.1.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.js"></script>
	<script>
	// Activates the Carousel
	$('.carousel').carousel({
	    interval: 5000
	})
	</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-49373400-11', 'sedecodf.gob.mx');
  ga('send', 'pageview');
 
	</script>
</body>
</html>
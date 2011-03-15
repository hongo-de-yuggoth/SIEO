<?php echo $this->Html->docType(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo $title_for_layout; ?></title>
	<?php echo $this->Html->meta('Description', 'Sistema de Informacion para la Eficiencia Ocupacional'); ?>
	<?php echo $this->Html->charset(); ?>
	<?php echo $this->Html->meta('Author', 'Nestor Antonio Cardona - nestorkardona@gmail.com'); ?>
	<?php echo $this->Html->css(array('plantilla', 'login_box')); ?>
	<?php //echo $this->Html->script(array('jquery1.4.4')); ?>
	<?php echo $this->Html->script(array('jquery-1.5.1')); ?>
	<?php echo $scripts_for_layout; ?>
</head>

<body>
<div id="wrap">
	<div id="header">
		<?php
		echo $this->Html->image('logoeo.png',
			array
			(
				'alt'=>'Eficiencia Ocupacional Ltda.',
				'class'=>'no-border'
			)
		);
		?>
		
		<!-- Menu Tabs -->
		<ul>
			<li id="current"><a href="index.html"><span>Inicio</span></a></li>
			<li><a href="index.html"><span>Ayuda</span></a></li>			
		</ul>	

	</div>
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
		<div id="sidebar" >							
			<h1>Menu</h1>
			<ul class="sidemenu">
				<li><a href="/listallegadas">Lista de Llegada</a></li>
				<li><a href="/trabajadores/registrar">Registrar Trabajador</a></li>
				<li><a href="/hcos/crear">Crear HCO</a></li>
			</ul>		
		</div>
			
		<div id="main">	
			<?php
			echo $content_for_layout;
			?>
		</div>
		
	<!-- content-wrap ends here -->		
	</div>

<!-- footer starts here -->	
<div id="footer">
	
	<div class="footer-left">
		<p class="align-left">			
		&copy; 2006 <strong>Company Name</strong> |
		Design by <a href="http://www.styleshout.com/">styleshout</a> |
		Valid <a href="http://validator.w3.org/check/referer">XHTML</a> |
		<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
		</p>		
	</div>
	
	<div class="footer-right">
		<p class="align-right">
		<a href="index.html">Home</a>&nbsp;|&nbsp;
  		<a href="index.html">SiteMap</a>&nbsp;|&nbsp;
   	<a href="index.html">RSS Feed</a>
		</p>
	</div>
	
</div>
<!-- footer ends here -->
	
<!-- wrap ends here -->
</div>

</body>
</html>

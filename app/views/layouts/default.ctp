<?php echo $this->Html->docType(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo $title_for_layout; ?></title>
	<?php echo $this->Html->meta('Description', 'Sistema de Informacion para la Eficiencia Ocupacional'); ?>
	<?php echo $this->Html->charset(); ?>
	<?php echo $this->Html->meta('Author', 'Nestor Antonio Cardona - nestorkardona@gmail.com'); ?>
	<?php echo $this->Html->css(array('plantilla', 'login_box')); ?>
	<?php echo $this->Html->script(array('jquery1.4.4')); ?>
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
				
			<h1>Sidebar Menu</h1>
			<ul class="sidemenu">
				<li><a href="index.html">Home</a></li>
				<li><a href="#TemplateInfo">Template Info</a></li>
				<li><a href="#SampleTags">Sample Tags</a></li>
				<li><a href="http://www.styleshout.com/">More Free Templates</a></li>
				<li><a href="http://www.4templates.com/?aff=ealigam">Premium Templates</a></li>					
			</ul>		
				
			<h1>Site Partners</h1>
			<ul class="sidemenu">
				<li><a href="http://www.dreamhost.com/r.cgi?287326">Dreamhost</a></li>
				<li><a href="http://www.4templates.com/?aff=ealigam">4templates</a></li>
				<li><a href="http://store.templatemonster.com/?aff=ealigam">TemplateMonster</a></li>	
				<li><a href="http://www.fotolia.com/partner/114283">Fotolia.com</a></li>									
				<li><a href="http://www.text-link-ads.com/?ref=40025">Text Link Ads</a></li> 		
			</ul>		
			
			<h1>Wise Words</h1>
			<p>&quot;Men are disturbed, not by the things that happen,
			but by their opinion of the things that happen.&quot;</p>		
				
			<p class="align-right">- Epictetus</p>					
		
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

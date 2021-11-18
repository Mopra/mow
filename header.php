<!DOCTYPE html>
<html style="overflow-x:hidden;" <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="theme-color" content="#004e92"/>
	<script type="text/javascript">
		var pathInfo = {
			base: '<?php echo get_template_directory_uri(); ?>/',
			css: 'css/',
			js: 'js/',
			swf: 'swf/',
		}
	</script>
	<?php wp_head(); ?>
	<style>.ezmob-footer {max-height:90px !important;}</style>
</head>
<body style="overflow-x:hidden;" <?php body_class(); ?>
<main>

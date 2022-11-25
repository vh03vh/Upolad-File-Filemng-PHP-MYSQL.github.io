<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" >
	<meta name="description" content="file gator" >
	<title>File Manager</title>
	<link rel="shortcut icon" href="<?php echo gatorconf::get('base_url')?>/include/views/img/favicon.ico" />

	<!-- jQuery -->
	<script type="text/javascript" src="<?php echo gatorconf::get('base_url')?>/include/jquery/jquery-1.8.0.min.js"></script>
	
	<!-- Blueimp -->
	<link rel="stylesheet" href="<?php echo gatorconf::get('base_url')?>/include/blueimp/css/jquery.fileupload-ui.css">
	<link rel="stylesheet" href="<?php echo gatorconf::get('base_url')?>/include/blueimp/css/style.css">
	<script src="<?php echo gatorconf::get('base_url')?>/include/blueimp/js/vendor/jquery.ui.widget.js"></script>
	<!-- The Templates plugin is included to render the upload/download listings -->
	<script src="<?php echo gatorconf::get('base_url')?>/include/blueimp/js/tmpl.min.js"></script>
	<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
	<script src="<?php echo gatorconf::get('base_url')?>/include/blueimp/js/jquery.iframe-transport.js"></script>
	<!-- The basic File Upload plugin -->
	<script src="<?php echo gatorconf::get('base_url')?>/include/blueimp/js/jquery.fileupload.js"></script>
	<!-- The File Upload file processing plugin -->
	<script src="<?php echo gatorconf::get('base_url')?>/include/blueimp/js/jquery.fileupload-fp.js"></script>
	<!-- The File Upload user interface plugin -->
	<script src="<?php echo gatorconf::get('base_url')?>/include/blueimp/js/jquery.fileupload-ui.js"></script>
	<!-- The localization script -->
	<script src="<?php echo gatorconf::get('base_url')?>/include/blueimp/js/locale.js"></script>
	
	<!-- Lightbox2 -->
	<?php if(gatorconf::get('use_lightbox_gallery')):?>
	<script type="text/javascript" src="<?php echo gatorconf::get('base_url')?>/include/lightbox/lightbox.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo gatorconf::get('base_url')?>/include/lightbox/lightbox.css">
	<?php endif;?>
	
	<!-- Foundation3 -->
	<link rel="stylesheet" href="<?php echo gatorconf::get('base_url')?>/include/foundation/stylesheets/foundation.css">
	<script src="<?php echo gatorconf::get('base_url')?>/include/foundation/javascripts/jquery.foundation.buttons.js"></script>
	<script src="<?php echo gatorconf::get('base_url')?>/include/foundation/javascripts/jquery.foundation.reveal.js"></script>
	
	<!-- FileGator styles -->
	<link rel="stylesheet" href="<?php echo gatorconf::get('base_url')?>/include/views/style.css">
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="<?php echo gatorconf::get('base_url')?>/include/views/style_ie7fix.css" />
	<![endif]-->

</head>		

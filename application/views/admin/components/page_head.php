<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
        <title><?php echo $meta_title; ?></title>
        
        <link href="<?php echo base_url('public_html/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('public_html/css/custom.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('public_html/css/datepicker.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('public_html/css/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css"/>
        
      <script src="<?php echo base_url('public_html/js/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('public_html/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('public_html/js/bootstrap-datepicker.js'); ?>"></script>
    	<?php if(isset($sortable) && $sortable === TRUE): ?>
        <script src="<?php echo base_url('public_html/js/jquery-ui.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo site_url('public_html/js/jquery.mjs.nestedSortable.js'); ?>" type="text/javascript"></script>
	<?php endif; ?>
	<script type="text/javascript" src="<?php echo base_url('public_html/js/tiny_mce/tiny_mce.js'); ?>"></script>
	<script type="text/javascript">
		tinyMCE.init({
			// General options
			mode : "textareas",
                        height: 500,
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
	
			// Theme options
			theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,
                        
                        force_br_newlines : false,
                        force_p_newlines : false,
                        forced_root_block : '',
                        
		});
	</script>
        
    </head>


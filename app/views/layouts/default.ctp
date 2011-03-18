<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf8" />
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<?php echo $this->Html->css('posts/posts'); ?>
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout; ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
		$('#fl').hide();
		$('#fl').fadeIn();
});
</script>

</head>
<body>

<!-- If you'd like some sort of menu to 
show up on all of your views, include it here -->

<!-- Here's where I want my views to be displayed -->


<div id="wrapper">
<h1>
<?php echo $this->Html->link('HOME', 'index'); ?>
</h1>
<h1 id="fl"><?php echo $this->Session->flash(); ?></h1>
<?php echo $content_for_layout; ?>
</div>

<!-- Add a footer to each displayed page -->

</body>
</html>

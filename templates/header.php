<?php
if (file_exists( __DIR__.'/../autoload.php')){
    require_once __DIR__.'/../autoload.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $header["title"];?></title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p><?php echo $header["header_top_contact"]["email"];?></p></li>
				<li class="phone"><p><?php echo $header["header_top_contact"]["phone"];?></p></li>
			</ul>
			<ul class="top-social f-right">

			<?php foreach($header["social"] as $s_item) : ?>
				<li><a href="<?php echo $s_item["link"];?>" target="_blank"><?php echo $s_item["icon"];?></a></li>
			<?php endforeach ; ?>
			
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"> <a href="https://www.facebook.com/omarfaruk477" target="_blank"><img src="<?php echo $header["logo"];?>" style="width:100px; height:100px; border-radius:50px;"></a></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center"><?php echo $header["header_tag_title"];?></h2>
			</div>
		</div>
	</div>
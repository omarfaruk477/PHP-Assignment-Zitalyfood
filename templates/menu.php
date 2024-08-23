<?php
if (file_exists( __DIR__.'/../autoload.php')){
    require_once __DIR__.'/../autoload.php';
}
?>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">

		<?php 
		$j=1;
		foreach($navBar as $menu) : ?>
			<li class="colour-<?php echo $j; $j++;?>"><a href="<?php echo $menu["link"];?>"><?php echo $menu["name"];?></a></li>			
		<?php endforeach ; ?>

		</ul>
    </nav>
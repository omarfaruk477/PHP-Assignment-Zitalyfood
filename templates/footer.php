<?php
if (file_exists( __DIR__.'/../autoload.php')){
    require_once __DIR__.'/../autoload.php';
}
?>
<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $footer["testimonial"]["title"];?></h4>
					<div class="row">
						<img src="<?php echo $footer["testimonial"]["img"];?>"
						<h5><?php echo $footer["testimonial"]["name"];?></h5>
						<p><?php echo $footer["testimonial"]["desc"];?></p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $footer["location"]["title"];?></h4>
					<div class="wrap-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d910.9480771937709!2d91.00338288959247!3d24.038388067353317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37541b802fa0d219%3A0xbc9007158ee0c155!2z4KaG4Ka24KeB4KaX4Kae4KeN4Kac!5e0!3m2!1sbn!2sbd!4v1724436542627!5m2!1sbn!2sbd" width="310" height="220" style="border:0;"></iframe></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4><?php echo $footer["dailyTime"]["title"];?></h4>

					<?php foreach($footer["dailyTime"]["time"] as $tme) : ?>
						<p><span><?php echo $tme["day_name"];?></span> <?php echo $tme["dayliy_time"];?></p>
					<?php endforeach ; ?>
					
					<p><span><?php echo $footer["dailyTime"]["tag"];?></span></br>
					We will call a cab for you!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
		<?php echo $footer["copyright"]["copy"];?><a href="<?php echo $footer["copyright"]["link"];?>"><?php echo $footer["copyright"]["name"];?></a>
			<ul class="quick-link f-right">
				<li><a href="#"><?php echo $footer["policy"]["privacy"];?></a></li>
				<li><a href="#"><?php echo $footer["policy"]["term"];?></a></li>
			</ul>
		</div>
	</div>
</footer>

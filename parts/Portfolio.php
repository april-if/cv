<section id = "portfolio">
	<h3>Portfolio</h3>
	<?php foreach (PartialBuilder::$portfolios as $imgSRC) { ?>
		<span class = "portfolio-item">
			<img src = "./img/<?php echo $imgSRC ?>" alt = "<?php echo $imgSRC ?>">
		</span>
	<?php } ?>
</section>
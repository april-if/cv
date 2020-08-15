<section id = "skills">
	<?php foreach (PartialBuilder::$skills as $name => $percentage) { ?>
		<span class = "skill-name"><?php echo $name ?></span>
		<span class = "skill-percentage"><?php echo $percentage ?></span>
		<div class = "skill-bar-wrapper">
			<div class = "skill-ba" style = "height:24px;width:<?php echo $percentage ?>"></div>
		</div>
	<?php } ?>
</section>
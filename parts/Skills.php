<section id = "skills">
	<h3>Skills</h3>
	<?php foreach (PartialBuilder::$skills as $name => $percentage) { ?>
		<span class = "skill-name"><?php echo $name ?></span>
		<span class = "skill-percentage"><?php echo $percentage ?>%</span>
		<div class = "skill-bar-wrapper">
			<div class="progress-bar">
				<span class="progress-bar-fill" style="width: 70%;"></span>
			</div>
		</div>
	<?php } ?>
</section>
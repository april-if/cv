<section id = "services">
	<h3>Services</h3>
	<?php foreach (PartialBuilder::$services as $serviceCode => $serviceName) { ?>
		<div class = "service">
			<span class = "service-name"><?php echo $serviceName ?></span>
			<span class = "service-code"><?php echo $serviceCode ?></span>
		</div>
	<?php } ?>
</section>

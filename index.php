<?php include "bootstrap.php"; ?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>April Ifrach CV</title>
		<link rel = "stylesheet" href = "styles.css">
	</head>
	<body>
		<?php
		$builder = new PartialBuilder();
		$builder->buildHeader();
		$builder->buildBanner();
		$builder->buildAbout();
		$builder->buildSkills();
		$builder->buildServices();
		$builder->buildPortfolio();
		$builder->buildContactForm();
		$builder->buildFooter();
		?>
	</body>
</html>
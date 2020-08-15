<?php include "bootstrap.php"; ?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>April Ifrach CV</title>
		<link rel = "stylesheet" href = "styles.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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
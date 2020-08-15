<header id="header">
	<div class = "head-title">
		<div class = "main">April</div>
		<div class = "secondary">Graphic Designer</div>
	</div>
	<nav>
		<?php foreach (PartialBuilder:: $navigation as $navId => $navTitle) {
			if ($navId === array_key_last(PartialBuilder:: $navigation)) {
				echo " <a href=\"$navId\">$navTitle</a> ";
			} else {
				echo " <a href=\"$navId\">$navTitle</a> |";
			}
		}
		?>
	</nav>
</header>
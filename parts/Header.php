<header class = "">
	<div class = "head-title">
		<span class = "main">April</span>
		<span class = "secondary">Graphic Designer</span>
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
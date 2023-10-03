<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<?php
$links = [
	'fr',
	'en',
	'es',
	'pt'
];

$nav_bar = [
	'a propos',
	'etudier a l uqam',
	'recherche et creation',
	'vie sur le campus',
	'nous joindre'
];

$nav_bar_2 = [
	'futurs etudiants',
	'etudiants',
	'autres publics'
];
?>

<body>
	<header>
		<nav>
			<div class="nav-left">
				<h1 class="nav-list logo">UQAM</h1>
				<p class="nav-list">Université du Québec à Montréal</p>
			</div>
			<div class="nav-right">
				<ul class="nav-links">
					<?php
					foreach ($links as $link) {
					?>
						<li>
							<a class="nav-list"><?php echo $link; ?></a>
						</li>
					<?php
					}
					?>
				</ul>
				<input type="text" placeholder="chercher">
			</div>
		</nav>
	</header>

	<div class="nav-bas">
		<div class="nav-left">
			<ul class="nav-links">
				<?php
				foreach ($nav_bar as $propos) {
				?>
					<li>
						<a class="nav-list"><?php echo $propos; ?></a>
					</li>
				<?php
				}
				?>
			</ul>
		</div>
		<div class="nav-right">
			<ul class="nav-links">
				<?php
				foreach ($nav_bar_2 as $etudiants) {
				?>
					<li>
						<a class="nav-list"><?php echo $etudiants; ?></a>
					</li>
				<?php
				}
				?>
			</ul>
		</div>
	</div>

	<main>
		<section>
			<div class="section-1">
				<div class="c1-left">
					<h2 class="c1-elements">Élargissez votre sphère d’influence.</h2>
					<p class="c1-elements">Découvrez nos programmes liés à l’administration.</p>
				</div>
			</div>
		</section>
	</main>
</body>

</html>
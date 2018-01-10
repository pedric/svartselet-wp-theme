<?php include 'views/index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Svartselet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

<h1 class="u-visually-hidden">Svertselet</h1>

<div data-module="togglemenu">
	<div class="o-main-menu">
		<nav class="o-main-menu__nav">
			<ul class="o-main-menu__list u-list-unstyled">
				<li class="o-main-menu__list-item serif"><a href="#">hej</a></li>
				<li class="o-main-menu__list-item serif"><a href="#">hejje</a></li>
				<li class="o-main-menu__list-item serif"><a href="#">hejsan</a></li>
			</ul>
		</nav>
	</div>
	<div class="m-burger__wrapper">
		<div class="m-burger">
			<div class="m-burger__bar"></div>
			<div class="m-burger__bar"></div>
			<div class="m-burger__bar"></div>
		</div>
	</div>
</div>

<div class="m-hero">
	<img class="m-hero__logo" src="img/logo-fishy.svg" alt="Site logo" />
</div>

<?php echo $body; ?>

<!-- Ajax test -->
<!-- Testing grid -->
<!-- <div class="u-container">
	<div class="row">
		

	</div>
</div> -->

<script src="js/main.js"></script>
</body>
</html>
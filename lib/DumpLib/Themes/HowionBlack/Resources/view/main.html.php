<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UAompatible" content="ie=edge"/>
		<meta name="robots" content="noindex,nofollow"/>
		<meta name="format-detection" content="telephone=no"/>
		<meta name="format-detection" content="date=no"/>
		<meta name="format-detection" content="address=no"/>
		<meta name="format-detection" content="email=no"/>
		<title><?= $sculpt->fetch('title') ?></title>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700" rel="stylesheet"/>
		<style type="text/css"><?= $sculpt->fetchFile('css/main.min.css') ?></style>
		<style type="text/css">body{zoom:<?= $sculpt->fetch('zoom') ?>}</style>
	</head>
	<body>
		<svg class="dmplb-logo" width="489" height="72" version="1.1" viewBox="0 0 482 71.9" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M0,1.1h9.9v29.6h8.7V1.1h9.9v69h-9.9V40.5H9.9v29.6H0V1.1z"/><path fill="#fff" d="m65.6 56.7c0 9.7-4.8 14.5-14.3 14.5s-14.3-4.8-14.3-14.5v-42.2c0-9.7 4.8-14.5 14.3-14.5s14.3 4.8 14.3 14.5v42.2zm-9.9-42.2c0-3.1-1.4-4.7-4.3-4.7h-0.1c-2.9 0-4.3 1.6-4.3 4.7v42.2c0 3.1 1.4 4.7 4.3 4.7s4.4-1.6 4.4-4.7v-42.2z"/><path fill="#fff" d="m111.9 54.2l7-53.2h10.1l-3.2 24.5-7 44.5h-13.6l-5.2-35.6-5.1 35.6h-13.8l-7-44.6-3.2-24.3h10l7 53.2 7-53.2h9.9l7.1 53.1z"/><path fill="#fff" d="m135.1 1.1h9.9v69h-9.9v-69z"/><path fill="#fff" d="m182.3 56.7c0 9.7-4.8 14.5-14.3 14.5s-14.3-4.8-14.3-14.5v-42.2c0-9.7 4.8-14.5 14.3-14.5s14.3 4.8 14.3 14.5v42.2zm-10-42.2c0-3.1-1.4-4.7-4.3-4.7h-0.1c-2.9 0-4.3 1.6-4.3 4.7v42.2c0 3.1 1.4 4.7 4.3 4.7s4.4-1.6 4.4-4.7v-42.2z"/><path fill="#fff" d="m190.7 1.1h9.9l9.4 40v-40h9.2v69h-9.9l-9.1-38.7v38.7h-9.6v-69z"/><path fill="#3d3d3d" d="m228.4 0.4h16.2c9.4 0 14.1 5.1 14.1 15.2v40c0 10.1-4.9 15.2-14.7 15.2h-15.6v-70.4zm11.7 11.2v48h3.5c2.3 0 3.4-1.3 3.4-4v-40c0-2.7-1.1-4-3.4-4h-3.5z"/><path fill="#3d3d3d" d="m297.2 56.7c0 10.1-5.1 15.2-15.2 15.2s-15.2-5.1-15.2-15.2v-56.3h11.7v56.3c0 2.6 1.1 4 3.4 4s3.5-1.3 3.5-4v-56.3h11.7v56.3z"/><path fill="#3d3d3d" d="M328.5,47l10.8-46.7h11.6v70.4h-11.3V38.4l-6.9,32.4h-8.2l-7.1-32.6v32.6H306V0.4h11.6L328.5,47z"/><path fill="#3d3d3d" d="m360 0.4h15.4c9.4 0 14.1 5.1 14.1 15.2v10.4c0 7.4-3.4 12.2-10.1 14.4-1.6 0.5-3.9 0.8-7 0.8h-0.7v29.6h-11.7v-70.4zm11.7 11.2v18.4h1.4c1.3 0 2.1-0.1 2.5-0.2 1.5-0.6 2.2-1.8 2.2-3.8v-10.4c0-2.7-1.1-4-3.4-4h-2.7z"/><path fill="#3d3d3d" d="M396.9,70.8V0.4h11.7v59.2h15.9v11.2H396.9z"/><path fill="#3d3d3d" d="M430.6,0.4h11.7v70.4h-11.7V0.4z"/><path fill="#3d3d3d" d="m451.7 0.4h16.2c9.4 0 14.1 5.1 14.1 15.2v10.4c0 4.8-1.6 8-4.7 9.6 3.1 1.6 4.7 4.8 4.7 9.6v10.4c0 10.1-4.9 15.2-14.7 15.2h-15.6v-70.4zm11.7 11.2v18.4h2.3c1.3 0 2.1-0.1 2.5-0.2 1.5-0.6 2.2-1.8 2.2-3.8v-10.4c0-2.7-1.1-4-3.4-4h-3.6zm0 29.6v18.4h3.5c2.3 0 3.4-1.3 3.4-4v-10.4c0-1.9-0.7-3.2-2.2-3.7-0.4-0.2-1.2-0.2-2.5-0.2h-2.2z"/></svg>
		<?= $sculpt->fetch('dumps') ?>
	</body>
</html>

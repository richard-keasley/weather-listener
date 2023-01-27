<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
<link rel="stylesheet" href="/app/style.css" type="text/css"/>
<meta name="description" content="Weather in Portslade village">
<?php /*
ToDo: mobile app
<meta name="msapplication-config" content="browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<link rel="manifest" href="manifest.json"/>
*/ ?>
<title><?php echo $title;?></title>
</head>
<body>

<header><?php $this->renderSection('header');?></header>
<main>
<?php $this->renderSection('top');?>
<?php $this->renderSection('main');?>
<?php $this->renderSection('bottom');?>
</main>

<footer>
<?php $this->renderSection('footer');?>
<ul class="nav">
<li><?php echo anchor('/', 'home');?></li>
<li><?php echo anchor('readings', 'readings');?></li>
<li><?php echo anchor('dailies', 'dailies');?></li>
<li><?php echo anchor('about', 'about');?></li>
</ul>

<?php if(ENVIRONMENT!='production') { ?>
<div class="flex">
<p>Page rendered in {elapsed_time} seconds</p>
<p>Environment: <?= ENVIRONMENT ?></p>
</div>
<?php } ?>

</footer>
<?php $this->renderSection('bottom');?>
</body>
</html>

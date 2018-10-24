<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Mini Car Inventory System</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/styles.css">
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/main.js"></script>
	<script type="text/javascript">
		var _base_url = '<?=base_url()?>';
	</script>
</head>
<body>
	<!--Start Main Container-->.<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?=base_url()?>manufacturer">Add Manufacturer</a></li>
      <li><a href="<?=base_url()?>manufacturer/viewModel">Add Model</a></li>
      <li><a href="<?=base_url()?>manufacturer/viewInventory">View Inventory</a></li>
    </ul>
  </div>
</nav>
	<div class="main_container">
		<div class="header">
			<h1><?=$title?></h1>
		</div>
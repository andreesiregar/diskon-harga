<?php
include 'koneksi.php';
include 'function.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>arys-fashion</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta http-equiv='refresh' content='3600;URL=index.php' />
</head>

<body>
	<header class="header">
		<div class="header-bottom">
			<nav class="navbar navbar-expand-md">
				<div class="container d-flex justify-content-between">
					<div class="header-logo justify-content-start">
						<a href="index.php" class="navbar-brand">arysfashion.</a>
					</div>
					<div class="header-search">
						<div class="input-group">
							<!-- <select class="form-select" id="category" name="category"> </select>
							<select class="form-select" id="subcategory" name="subcategory" onchange="test()" ;> </select>
							<div id="divdeskripsi"></div> -->
							<!-- <div class=" input-group-append">
								<button class="btn btn-search"><i class="ion ion-ios-search"></i></button>
							</div> -->
						</div>
					</div>
					<div class="header-menu">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a href="index.php" class="nav-link">Home</a>
							</li>
							<li class="nav-item">
								<a href="shop.php" class="nav-link">Shop</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Blog</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- <script type="text/javascript">
			$(document).ready(function() {
				$("#category").append('<option value="">Pilih Kategori &nbsp&nbsp&nbsp&nbsp&nbsp</option>');
				$("#subcategory").html('');
				$("#subcategory").append('<option value="">Pilih Subkategori &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>');
				url = 'get_category.php';
				$.ajax({
					url: url,
					type: 'GET',
					dataType: 'json',
					success: function(result) {
						for (var i = 0; i < result.length; i++)
							$("#category").append('<option value="' + result[i].id_category + '">' + result[i].category_name + '</option>');
					}
				});
			});
			$("#category").change(function() {
				var id_category = $("#category").val();
				var url = 'get_subcategory.php?id_category=' + id_category;
				$("#subcategory").html('');
				$("#subcategory").append('<option value="">Pilih Subkategori &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>');
				$.ajax({
					url: url,
					type: 'GET',
					dataType: 'json',
					success: function(result) {
						for (var i = 0; i < result.length; i++)
							$("#subcategory").append('<option value="' + result[i].id_subcategory + '">' + result[i].subcategory_name + '</option>');
					}
				});
			});
		</script>
		<script>
			function test() {
				var selectBox = document.getElementById("subcategory");
				var selectedValue = selectBox.options[selectBox.selectedIndex].value;
				document.getElementById('divdeskripsi').innerHTML = '<input hidden type="text" value="' + selectedValue + '" class="form-control" id="idsubcategory" name="idsubcategory">';
			}
		</script> -->
		<h3 class="text-center"><strong>Flashsale Tanggal Cantik</strong></h3>
		<div class="bg-warning">
			<ul class="nav nav-pills nav-fill text-white">
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl1.php">11.11</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl2.php">12.12</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl3.php">1.1</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl4.php">2.2</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl5.php">3.3</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl6.php">4.4</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl7.php">5.5</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl8.php">6.6</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl9.php">7.7</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl10.php">8.8</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl11.php">9.9</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="tgl12.php">10.10</a>
				</li>
			</ul>
		</div>

	</header>
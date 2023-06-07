<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	border: 1px solid #e7e7e7;
	background-color: #f3f3f3;
	}

	li {
	float: left;
	}

	li a {
	display: block;
	color: #666;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	}

	li a:hover:not(.active) {
	background-color: #ddd;
	}

	li a.active {
	color: white;
	background-color: #04AA6D;
	}
	
	</style>
</head>
<body>

<div id="container">
	<div id="header"> 
		<ul>
			<li><a href="<?php echo site_url ('C_Garuda/index'); ?>">Home</a></li>
			<li><a href="<?php echo site_url ('C_Garuda/linkproduk'); ?>" class = "active">Produk</a></li>
			<li><a href="<?php echo site_url ('C_Garuda/linktarif'); ?>">Tarif</a></li>
			<li><a href="<?php echo site_url ('C_Garuda/linkmitra'); ?>">Mitra</a></li>
			<li><a href="<?php echo site_url ('C_Garuda/linkkarir'); ?>">Karir</a></li>
		</ul>
	</div>

	<h1>Garuda Express</h1>

	<div id="body">

		<p>Layanan pengiriman barang yang Siap Bantu Sampai Tujuan</p>
		<p>Kami berdedikasi untuk selalu memberikan solusi, kemudahan dan ketepatan dengan menyediakan berbagai layanan pengiriman barang sesuai kebutuhan bisnis kamu.</p>

		<p>Solusi pengiriman logistik untuk bisnis kamu</p>
		<p>Ninja Xpress memberikan layanan pengiriman barang ke seluruh Indonesia untuk berbagai jenis bisnis yang kamu miliki. Dapatkan layanan Ninja Xpress yang pas untuk kamu!</p>

		<p>Berita terbaru mengenai kami.</p>
	</div>

	<p class="footer">Garuda Express <br>
	Jl. Dr. Setiabudi No.229, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40154 <br>
	Call Center : (022) 2013163 <br>
	Email : garudaexp@gmail.com <br>
	<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>  
</div>

</body>
</html>

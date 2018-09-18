<!doctype html>
<html lang="en">

<head>
	<title>Memorylane | API Documentation</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <style>
        .sidebar .nav > li > a {
            padding: 9px 30px;
        }
        hr.style {
            background-color: #fff;
            border-top: 2px dashed #8c8b8b;
        }
        #wrapper #sidebar-nav, #wrapper .main {
            padding-top: 0px;
        }
    </style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
                <ul class="nav">
                    <li><a href="#register" class="">Register &nbsp; <span class="label label-success">POST</span></a></li>
                    <li><a href="#login" class="">Login &nbsp; <span class="label label-success">POST</span></a></li>
                    <li><a href="#reset_password" class="">Rest Password &nbsp; <span class="label label-success">POST</span></a></li>
                    <li><a href="#image_upload" class="">Image Upload &nbsp; <span class="label label-success">POST</span></a></li>
                    <li><a href="#subscribe" class="">Subscribe &nbsp; <span class="label label-success">POST</span></a></li>
                    <li><a href="#get-images" class="">Get Images &nbsp; <span class="label label-success">POST</span></a></li>
                </ul>
			</div>
		</div>
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Memorylane API Documentaion</h3>
                    <?php
                    include('partials/register.php');
                    include('partials/login.php');
                    include('partials/reset_password.php');
                    include('partials/image_upload.php');
                    include('partials/subscribe.php');
                    include('partials/get-images.php');
                    ?>
				</div>
			</div>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script>
	$(document).ready(function() {
	  $('pre code').each(function(i, block) {
		hljs.highlightBlock(block);
	  });
	});
	</script>
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>

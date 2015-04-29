<html>
	<head>
		<title>Exif Scanner</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/global.css">
		<meta charset="utf-8">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Exif Scanner</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="active">Home</a></li>
						<li><a href="https://github.com/GallandJe/Exif-scanner" target="_blanck">Sources</a></li>
						<li><a href="http://jeremy-galland.ch" target="_blanck">Author</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div id="dropzone" class="fade well">
			<div class="droptext">Drop your file here <br><i>The files aren't saved on the server</i></div>
		</div>
		<div class="page-header">
			<h1>Exif : </h1>
		</div>
		<pre class="exif"></pre>
		<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/dropfile.js"></script>
		<script src="js/app.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
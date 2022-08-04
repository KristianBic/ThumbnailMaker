<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="style/style.css" />
	<link rel="stylesheet" href="style/style_home.css" />
	<link rel="icon" type="image/x-icon" href="../images/favicon.svg" />
	<script defer src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script defer src="library/html2canvas.min.js"></script>
	<script defer src="script/index.js"></script>
	<title id="Title">Maker</title>
</head>

<body>
	<?php include 'pages/header.php' ?>
	<div class="content">
		<div class="left-navbar">
			<ul class="sidebar">
				<li><img src="assets/icons/nav_arrow.svg" alt=""></li>
				<li><img src="assets/icons/nav_text.svg" alt=""></li>
				<li><img src="assets/icons/nav_color.svg" alt=""></li>
				<li><img src="assets/icons/nav_image.svg" alt=""></li>
			</ul>
		</div>
		<div class="sidebar-content">
			<h2>TEXT OPTIONS</h2>
			<div id="text_inputs">
				<p data-text="Text line 1">Text Line 1</p>
				<input class="text-Input" type="text" placeholder="Enter Text" data-text="Text line 1" oninput="changeText()">
				<p data-text="Text line 2">Text Line 2</p>
				<input class="text-Input" type="text" placeholder="Enter Text" data-text="Text line 2" oninput="changeText()">
			</div>
			<button onclick="addNewTextLine()"><img src="assets/icons/addLine.svg" alt="">Add Text Line</button>
		</div>
		<div class="canva-container">
			<h6>Canva Preview</h6>
			<div class="canva" id="canvas_id">
				<p data-movable="true" data-text="Text line 1" class="text-canva">Text 1</p>
				<p data-movable="true" data-text="Text line 2" class="text-canva">Text 2</p>
			</div>
			<button id="btn_Create_Image">Create Image</button>
			<a id="download">Download</a>
		</div>
		<div class="right-navbar">
			<ul class="sidebar">
				<li><img src="assets/icons/cursor_default.svg" alt=""></li>
				<li><img src="assets/icons/cursor_move.svg" alt=""></li>
				<li><img src="assets/icons/ruler.svg" alt=""></li>
			</ul>
		</div>
	</div>
</body>

</html>
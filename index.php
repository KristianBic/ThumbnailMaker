<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="style/style.css" />
	<link rel="stylesheet" href="style/style_home.css" />
	<link rel="stylesheet" href="style/style_ruler.css" />
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
			<div class="sidebar-content-text" style="display: none;">
				<h2>TEXT OPTIONS</h2>
				<div id="text_inputs">
					<p data-text="Text line 1">Text Line 1</p>
					<input class="text-Input" type="text" placeholder="Enter Text" data-text="Text line 1" oninput="changeText()">
					<p data-text="Text line 2">Text Line 2</p>
					<input class="text-Input" type="text" placeholder="Enter Text" data-text="Text line 2" oninput="changeText()">
				</div>
				<button onclick="addNewTextLine()"><img src="assets/icons/addLine.svg" alt="">Add Text Line</button>
			</div>
			<div class="sidebar-content-text">
				<h2>COLOR OPTIONS</h2>
				<div id="text_inputs">
					<p>Background Color</p>
					<div class="color-container">
						<div data-tooltip="#FE2712" class="color-box" style="background-color: #fe2712"></div>
						<div data-tooltip="#FC600A" class="color-box" style="background-color: #FC600A"></div>
						<div data-tooltip="#FB9902" class="color-box" style="background-color: #FB9902"></div>
						<div data-tooltip="#FCCC1A" class="color-box" style="background-color: #FCCC1A"></div>
						<div data-tooltip="#FEFE33" class="color-box" style="background-color: #FEFE33"></div>
						<div data-tooltip="#B2D732" class="color-box" style="background-color: #B2D732"></div>
						<div data-tooltip="#66B032" class="color-box" style="background-color: #66B032"></div>
						<div data-tooltip="#347C98" class="color-box" style="background-color: #347C98"></div>
						<div data-tooltip="#0247FE" class="color-box" style="background-color: #0247FE"></div>
						<div data-tooltip="#4424D6" class="color-box" style="background-color: #4424D6"></div>
						<div data-tooltip="#8601AF" class="color-box" style="background-color: #8601AF"></div>
						<div data-tooltip="#C21460" class="color-box" style="background-color: #C21460"></div>
						<div data-tooltip="#ffffff" class="color-box" style="background-color: #ffffff; border: 1px solid #e0e0e0"></div>
						<div data-tooltip="#000000" class="color-box" style="background-color: #000000"></div>
						<input data-tooltip="#000000" id="color_input" class="color-box color-picker" type="color" placeholder="#">
						<div class="color-box hex-box" style="background-color: #e0e0e0; pointer-events: none;">#</div>
						<input id="hex_input" maxlength="6" class="hex-color text-Input" type="text" placeholder="Enter Hex">
					</div>
					<p data-text="Text line 2">Text Color</p>
				</div>
			</div>
		</div>
		<div class="canva-container">
			<?php include 'pages/ruler.php' ?>
			<div class="canva-container-content">
				<h6>Canva Preview</h6>
				<div class="canva" id="canvas_id">
					<p data-movable="true" data-selected="false" data-text="Text line 1" class="text-canva">Text 1</p>
					<p data-movable="true" data-selected="false" data-text="Text line 2" id="text2" class="text-canva">Text 2</p>
				</div>
				<button id="btn_Create_Image">Create Image</button>
				<a id="download">Download</a>
			</div>
		</div>
		<div class="right-navbar">
			<ul class="sidebar">
				<li><label for="show-ruler">
						<input type="checkbox" name="show-ruler" class="show-ruler" id="show_ruler" value="show-ruler" />
						<?php include 'assets/icons/ruler.svg' ?>
					</label></li>
			</ul>
		</div>
	</div>
</body>

</html>
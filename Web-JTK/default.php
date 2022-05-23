<!DOCTYPE HTML>
<html>
	<head>
		<title>Bandang</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	</head>
	<style>
	@font-face {
		font-family: eggroll;
		src:url("asset/eggroll.ttf");
	}
	h1,h2,h3,h4,h5,h6,p,body {
	margin: 0;
	padding: 0;
	font-family: eggroll,sans-serif;
	letter-spacing: 1vh;
	}
	main{
	height: 100vh;
	background-color: rgba(84, 135, 128,1);
	display: flex;
	align-items: center;
	justify-content: center;
	}
	main h1{
		text-align: center;
		font-size:8vh;
	}
	a{
		display:grid;
		align-content: center;
		grid-template-columns: 1fr;
		justify-items: center;
		text-decoration: none;
		color: white;
	}
	a h1{
		transition: all 0.5s ease;
		z-index: 1;
	}
	a img{
		transition: all 0.5s ease;
		width: 15vh;
	}
	a:hover h1{
		transform: translate(0, 100%);
	}
	a:hover img{
		transform: translate(0, -25%);
	}
	.bg{
		position: absolute;
		bottom: 0;
		left: 0;
		box-shadow: 5px -5px 10px rgba(0, 0, 0, 0.5);
		height: 80vh;
	}
	</style>
	<body>
		<img class="bg" src="asset/jp-castle-morning.png">
		<main>
		<a href="portal/">
			<h1>website JTK</h1>
			<img src="asset/jp-list-circle-fish.png">
		</a>
		</main>
	</body>
</html>
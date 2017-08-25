<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style media="screen">
			header{
				background-color: #f5f8fc;
				padding: 2em;
				text-align: center;
				font-size: 2rem;
			}

		</style>
		<script type="text/javascript" src="jquery.js"></script>
	</head>
	<body>
		<header>
			<h1 >
				<?= 'hello,' . htmlspecialchars($_GET["name"]);?>
			</h1>

		</header>
		<script type="text/javascript">
		$.getJSON("http://127.0.0.1/phalapi/public/syapi/?service=welcome.say", function(res){
			// alert(res.data.title);
			document.body.append(res.data.title);

		});
		</script>
	</body>
</html>

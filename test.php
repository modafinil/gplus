<html>
	<head>
		<title>JS & DOM Test Page</title>
		<script>
			window.onload = function() {
				heading = document.createElement("h1");
				heading_text = document.createTextNode("Big Head!");
				heading.appendChild(heading_text);
				document.body.appendChild(heading);
			}
		</script>
	</head>
	<body>
	</body>
</html>

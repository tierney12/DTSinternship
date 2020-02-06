<html>
<head>
</head>
<body>
	<img src="data:image/svg+xml;base64,{{ base64_encode($generator->getBarcode($barcode, 'EAN13', 2.7, 130)) }}">
</body>
</html>
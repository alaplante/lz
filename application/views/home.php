<html>
<head>
	<title>TEST</title>
</head>
<body>
<h1>This Access the database</h1>
<pre>
	<?php print_r($records); ?>
	<?php foreach ($records as $record) :?>
		<p><?php echo $record->menu; ?></p>
	<?php endforeach; ?>
</pre>

</body>
</html>
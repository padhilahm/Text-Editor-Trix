<!DOCTYPE html>
<html>
<head>
	<title>Trix Editor</title>

	<!-- import file js dan css nya -->
	<link rel="stylesheet" type="text/css" href="trix.css">
	<script type="text/javascript" src="trix.js"></script>
</head>
<body>

	<!-- membuat form untuk menampilkannya -->
	<form action="" method="post">
		<!-- form input untuk menampung text yang kita buat -->
		<!-- memeriksa apakah kita ada mengirim button kirim -->
		<?php if (isset($_POST['kirim'])): ?>
			<input id="x" type="hidden" name="content" value="<?= $_POST['content'] ?>">
		<?php else: ?>
			<input id="x" type="hidden" name="content">
		<?php endif ?>
		<trix-editor input="x"></trix-editor>

		<button name="kirim" type="input">Kirim</button>
	</form>

	<!-- memeriksa apakah kita ada mengirim button kirim -->
	<?php if (isset($_POST['kirim'])): ?>
		<p>
			<h3>Hasil</h3>
			<!-- menampilkan hasil yang dikirim sebelumnya -->
			<?= $_POST['content'] ?>
		</p>
	<?php endif ?>

</body>
</html>
<?php include_once('inc/header.php'); ?>

<?php if ( ! $isAdmin)
	header( 'Location: index.php' );
?>

<style>

.zeszyt-main{
	background-image: none
}

</style>

<section class="zeszyt-main admin-main">
	<div class="container">
		<div class="row">
			<div class="infoBox ">
				<div class="infoBoxContainer">
					<p>Wyszukaj, usuń lub edytuj słowa</p>
					<div class = "inputContainer">
						<input type="text" id="wordEs" class="newWord entryField" placeholder="español">
						<input type="text" id="wordPol" class="newWord entryField" placeholder="polskie">
					</div>

					<table id = "resultsTable">
					</table>

				</div>
			</div>
	</div>

	</div>
</section><!-- /#zeszyt-main -->
	
<footer>
	<div class="container">
		<div class="row"></div>
	</div>
</footer>

	<script src="js/delWord.js"></script>
	<script src="js/esLetters.js"></script>
</body>
</html>
<?php include_once('inc/header.php'); ?>

<?php if ( ! $isAdmin)
	header( 'Location: index.php' );
?>

<style>

.zeszyt-main{
	background-image: none
}

</style>

<section class="zeszyt-main">
	<div class="container">
		<div class="row">
			<div class="infoBox">
				<div class="infoBoxContainer">
					<p>Dodaj słowa</p>
					<div class="imgBox">
					</div>
				</div>
			</div><!--infoBox-->
			<div class="answersBox">
				<div class="answerBox"><input type="text" id="newWordEs" class="newWord entryField" placeholder="español"></div><!--answerBox-->
				<div class="answerBox"><input type="text" id="newWordPol" class="newWord" placeholder="polskie"></div><!--answerBox-->
				<div class="clearfix"></div>
			</div><!-- /.answersBox -->
			
			<input type="hidden" id="answer_hidden" name="answer_hidden">
	</div>
	<div class="row">
		<ul class="buttons">
			<li><button id="add">Dodaj</button></li>
			<li><button id="clear">Wyczyść</button></li>
			<li><button id="back">Powrót</button></li>
		</ul>						
	</div>
		</div>	<!-- /.row -->
	</div><!-- /.container -->
</section><!-- /#zeszyt-main -->
	
<footer>
	<div class="container">
		<div class="row"></div>
	</div>
</footer>

	<script src="js/admin.js"></script>
	<script src="js/esLetters.js"></script>
</body>
</html>
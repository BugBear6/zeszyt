<?php include_once('inc/header.php'); ?>

<section class="zeszyt-main">
	<div class="container">
		<div class="row">
			<div class="infoBox">
				<div class="infoBoxContainer">
					<p>Przetłumacz słowa</p>
					<div class="imgBox">
					</div>
				</div>
			</div><!--infoBox-->
			<div class="answersBox">
				<div class="answerBox"><p id="word"> </p></div><!--answerBox-->
				<div class="answerBox"><input type="text" id="answer" class="entryField"></div><!--answerBox-->
				<div class="clearfix"></div>
			</div><!-- /.answersBox -->
			
			<input type="hidden" id="answer_hidden">
	</div>
	<div class="row">
		<ul class="buttons">
			<li><button id="translate">Tłumacz Google</button></li>
			<li><button id="submit">Sprawdź</button></li>
			<li><button id="giveUp">Nie wiem</button></li>
			<li><button id="next">Dalej</button></li>
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

	<script src="js/zeszyt.js"></script>
	<script src="js/esLetters.js"></script>
</body>
</html>
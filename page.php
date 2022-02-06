<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Application Manga Anime</title>
	<link rel="icon" type="image/png" href="ed.png" />
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<main>

	<!-- **************** SUR TOUTES LES PAGES **************** -->

		<header>
				<h1>Application Manga Anime</h1>
		</header>

		<?php

			

				$html = file_get_html("https://www.manga-sanctuary.com/bdd/series.html");


						foreach($html->find("tr") as $tr){
							
							
							
							$td = $tr->find("td");
							$a = $tr->find("a");
							$span = $tr->find("span");

							$img = $tr->find("img");



							

							for($i=0; $i<sizeof($a); $i++){
								
								echo $a[$i]->text(). "<br>";

								
							}

							for($i=0; $i<sizeof($span); $i++){
								
								echo $span[$i]->text(). "<br>";

								
							}

							for($i=1; $i<sizeof($td); $i++){
								echo $td[$i]->text(). "<br>";
							}

							for($i=0; $i<sizeof($img); $i++){
								
								echo $img[$i]->text(). "bouh<br>";

								
							}

							


							
						}


				$html2 = file_get_html("https://www.manga-sanctuary.com/bdd/series-lettre-A.html");


						foreach($html2->find("td") as $td){
							

							$a = $td->find("a");
							for($i=0; $i<sizeof($a); $i++){
								echo $a[$i]->text(). "<br>";
							}
						}



		?>
	
	</main>


	
</body>
</html>
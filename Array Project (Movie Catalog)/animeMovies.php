<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie Catalog</title>
	
</head>
<body>
<?php 
	
	$dir = 'studioGhibli';
	$aniPoster = scandir($dir);

	
	function pre_r($array){
		echo '<pre>';
		print_r($array);
		echo '</pre';
	}

	$aniPoster = array_diff($aniPoster, array('..','.'));
	
	$aniPoster = array_values($aniPoster);
	

	$studioGhibli = array();

	for ($i = 0; $i < count($aniPoster); $i++) { 

		preg_match("!(.*?)\((.*?)\)!", $aniPoster[$i],$results);
		$animeTitle = str_replace('_', ' ',$results[1]);
		$animeTitle = ucwords($animeTitle);

		$studioGhibli[$animeTitle]['image'] = $aniPoster[$i];
		$studioGhibli[$animeTitle]['year'] = $results[2];

	}
	

	echo "<table id = 'studioGhibli' cellpadding = 50>";
	echo "<tr class = 'odd'>";

	foreach ($studioGhibli as $animeTitle => $info) {
		$content = "<td><span class = 'name'>$animeTitle</span><br />"
		. "<img src = 'studioGhibli/$info[image]'><br />"
		. "<span class = 'year'>( $info[year] )</span></td>";
		echo $content;
	}

	echo "</tr></table>";
 ?>

 <style>
 	#studioGhibli {
 		background-color: #69013a;
 		color: #e0047d;
 		font: 11pt Courier New;
 	}
 	tr.header {
 		background-color: #012b22;
 		color: #fff;
 		font: bold 11pt Courier New;
 	}
 	tr.odd {
 		background-color: #240114;
 	}
 	tr.even {
 		background-color: #141423;
 	}
 	img {
 		padding: 10px;
 		border-radius: 25px;
  		border: 2px solid #9c0256;
 		padding: 10px;
  		width: 200px;
  		height: 320px;
 	}
 	td {
 		text-align: center;
 	}
 	span.year {
 		color: #ccc;
 		font-size: 18px;
 		color: #e0047d;
 	}
 	span.name {
 		font-size: 18px;
 		font-weight: bold;

 	}
 	body {
 		background-image: url(sakura.jpg);
 		background-position: center;
 		background-repeat: no-repeat;
 		background-attachment: fixed;
 		background-size: cover;
 		margin: 0;
 		padding: 0;
 	}
 </style>
</body>
</html>
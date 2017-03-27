<?php
	$json_string1 = file_get_contents("http://api.wunderground.com/api/0215dd2f84808f33/astronomy/q/INA/Gergaji/.json");
	$json_string2 = file_get_contents("http://api.wunderground.com/api/0215dd2f84808f33/planner_07010731/q/INA/Gergaji/.json");
	$json_string3 = file_get_contents("http://api.wunderground.com/api/0215dd2f84808f33/yesterday/q/INA/Gergaji/.json");
	
	$parsed_json1 = json_decode ($json_string1);
	$parsed_json2 = json_decode ($json_string2);
	$parsed_json3 = json_decode ($json_string3);
	
	
	$ageOfMoon = $parsed_json1->{'moon_phase'}->{'ageOfMoon'};
	$sunrise = $parsed_json1->{'moon_phase'}->{'sunrise'}->{'hour'};
	$sunset = $parsed_json1->{'moon_phase'}->{'sunset'}->{'hour'};
	
	$min = $parsed_json2->{'trip'}->{'temp_high'}->{'min'}->{'C'};
	$max = $parsed_json2->{'trip'}->{'temp_high'}->{'max'}->{'C'};
	$avg = $parsed_json2->{'trip'}->{'temp_high'}->{'avg'}->{'C'};
	
	$kemarin = $parsed_json3->{'history'}->{'date'}->{'pretty'};
	$kemarin_lusa= $parsed_json3->{'history'}->{'utcdate'}->{'pretty'};
	$benua = $parsed_json3->{'history'}->{'date'}->{'tzname'};
	
	
	echo "Di daerah gergaji dapat di ketahui bahwa: ";
	echo "<br>";
	echo "Umur bulan : ${ageOfMoon}\n";
	echo "<br>";
	echo "Sunrise terjadi pada pukul : ${sunrise}\n";
	echo "<br>";
	echo "Sunset terjadi pada pukul : ${sunset}\n";
	
	echo "<br>";
	
	echo "<br>";
	echo "Suhu ";
	echo "<br>";
	echo "Minimal : ${min}\n";
	echo "<br>";
	echo "Maximal : ${max}\n";
	echo "<br>";
	echo "Rata-rata : ${avg}\n";
	
	echo "<br>";
	
	echo "<br>";
	echo "Keterangan Lain ";
	echo "<br>";
	echo "Tanggal kemarin adalah : ${kemarin}\n";
	echo "<br>";
	echo "Tanggal kemarin lusa adalah : ${kemarin_lusa}\n";
	echo "<br>";
	echo "Benua / ibu kota : ${benua}\n";
	
	
	
?>
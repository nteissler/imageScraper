<?php
 
/**
 * @author: Nick Teissler
 * @version:1.0
 */
 
//setting max_execution_time to unlimited because downloading can take long time
ini_set('max_execution_time', 0);

$imageNumbers = array("380","381","342","354","355","356","358","359","188","189","190","202","214","215","217","224","241","250","251","252","253","254","256","257","258","176","175","181","182","158","174","105","097","002","020","038","054","056","059","060","086","088","089","090","091");
 
foreach($imageNumbers as $i){
	$fileName = "image$i";
	$imageURL = "http://www.row2k.com/graphics/2013FALL/1012CHR/1012CHR$i-01.JPG";
	// get content of image as string
	$value = file_get_contents($imageURL);
	// get extension, usually .jpg
	$extension = strtolower(substr($imageURL,-4));
	//echo $extension;
	// create a folder CrewPictures manually in same directory as imageScraper.php
	// the image is created using file operation
	$fileNameComplete = $fileName.$extension;
	$fp = fopen('CrewPictures/'.$fileNameComplete, 'w');
	fwrite($fp, $value);
	fclose($fp); 
}
 
 
?>
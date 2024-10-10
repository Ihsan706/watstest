<?php


$filename = "text.txt";
if(file_exists($filename)){
$lines = file($filename, FILE_IGNORE_NEW_LINES);
$text = "";
foreach ($lines as $lineNumber => $lineContent) {

    $text .= $lineContent . "\n"; 

}
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>hello world</title>
</head>
<style>
.text{
background-color:blue;
}
.out{
width:75vw;
}
.del{
width:15vw;
}
</style>
<h1 class="text"><?php echo $text; ?></h1>
 <form class="blogdesire-form" method="post">
<input type="text" name="c" value="" placeholder="text" class="out">
<input type="submit" name="send" value="send" class="del" >
    </form>
<?php
if (isset($_POST['send'])){
$key = $_POST['c'];
if($key != ""){

$file=fopen("text.txt", "a");
fwrite($file, "\n<br> ".$key);
fclose($file);


$page = $_SERVER['PHP_SELF'];
$sec = "2";
header("Refresh: $sec; url=$page");

}else{
echo "no thank";
}
}
?>
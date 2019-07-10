<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include"header.php";
include"content.php";
include"Footer.php";
include"form.php";
?>
<br><br>
<?php 
echo date("d, m, Y");
?>
<br>
<?php
echo date("D,M,Y");
?>
<br>
<?php
echo " $txt ";
?>
<br>
<br>
<?php
$num1=6;
$num2=3;

$result=$num1+$num2;
echo $result;


?>
<br>
<br>
<?php
$content = file_get_contents("https://en.wikipedia.org/w/api.php?action=query&prop=revisions&rvprop=content&rvsection=0&titles=countries");
$curl = curl_init("https://en.wikipedia.org/w/api.php?action=query&prop=revisions&rvprop=content&rvsection=0&titles=countries");
echo $content;
?>

</body>
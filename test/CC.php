<!DOCTYPE>
<html>
<body>
<head>
<title>Carbon and Its Compounds</title>
<?php
$myfile = fopen("BS.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("BS.txt"));
fclose($myfile);
?>
</head>
<style>
body{width:100%;overflow-x:hidden;}
.item{height:300px;margin:5px;text-align:center;font-size:21px;padding:5px;border-radius:3px;}
.item > h1{font-size:21px;padding:3px;border-top-left-radius:3px;border-top-right-radius:3px;}
.row{justify-items:center;align-items:center;}
.item > p{width:100%;background:tomato;font-size:18px;padding:2px;}
</style>
<body class = "bg-dark">
<?php
$myfile = fopen("nav.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("nav.txt"));
fclose($myfile);
?>
<h1 class = "text-light text-center">Functional Groups</h1>

<div class = "row d-flex justify-content-center">

<div class = "item text-dark bg-light col-sm-3 col-xm-3"><h1 class = "bg-info">Halo Group -X</h1><p>X can be -Cl, -Br, -I</p></div>
<div class = "item text-dark bg-light col-sm-3 col-xm-3"><h1 class = "bg-info">Alcohol -OH</h1><p>First Member is CH3-OH (Methanol)</p></div>
<div class = "item text-dark bg-light col-sm-3 col-xm-3"><h1 class = "bg-info">Aldehyde -CHO</h1><p>First Member is H-C=H-O (Methanal)</p></div>
<div class = "item text-dark bg-light col-sm-3 col-xm-3"><h1 class = "bg-info">Ketone -CO-</h1><p>First Member is CH3-C=O-CH3 (Propanone)</p></div>
<div class = "item text-dark bg-light col-sm-3 col-xm-3"><h1 class = "bg-info">Carboxylic Acid -COOH</h1><p>First Member is H-C=OOH (Methanoic Acid)</p></div>
<div class = "item text-dark bg-light col-sm-3 col-xm-3"><h1 class = "bg-info">Alkene</h1><p>First Member is CH4 (Methane)</p></div>
<div class = "item text-dark bg-light col-sm-3 col-xm-3"><h1 class = "bg-info">Alkyne</h1><p>First Member is CH2H2 (Ethyne)</p></div>

</div>
</html>
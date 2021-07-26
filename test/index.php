<!DOCTYPE>
<html>
<body>
<head>
<title>Question BANK</title>
<?php
$myfile = fopen("BS.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("BS.txt"));
fclose($myfile);
?>
<style>
*{transition:.2s ease;}
body{background:tomato;}
p{font-size:21px;}
.qus{}
.ans{}
.qus,.ans{border:1px solid grey;}
.cont{width:100%;margin-top:50px;height:50vh;}
.center{text-align:center;margin:0 auto;}
.cont >.btn{width:150px;}
#ans{display:none;}
#msg{display:block;transition: all .3s ease;}

</style>
</head>

<?php
$myfile = fopen("nav.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("nav.txt"));
fclose($myfile);
?>

<div class="cont">

<div class = "qus col-sm-5 bg-light text-dark rounded text-center center">
<h1>Question</h1>
<p>What in the difference between antiseptics & disinfectants?</p>
</div><br>
<div class = "center"><button class = "btn btn-primary" onclick = "show()">Show Answer</button>&nbsp;<button class = "btn btn-info" onclick = "hide()">Hide Answer</button></div>
<br><div class = "ans col-sm-5 bg-dark text-light rounded text-center center">
<h1>Answer</h1>
<p id = "msg">Click 'Show' Button to Show</p>
<p id = "ans">
Antiseptics are those antimicrobials which are applied to the living tissues such an
wounds cuts, ulcers and diseased skin surfaces e.g. sofracmicine etc. these are not
ingested like antibiotics.Disinfectants are applied to inanimate objects such as floors,
drainage system instruments etc. e.g. phenol.</p>

</div></div>
<script>
function show(){
document.getElementById("ans").style.display = "block";
document.getElementById("msg").style.display = "none";
}
function hide(){
document.getElementById("ans").style.display = "none";
document.getElementById("msg").style.display = "block";
}
</script>
</body>
</html>
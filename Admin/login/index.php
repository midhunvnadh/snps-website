<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: ../index.php");
  exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Write Article</title>
<style>
html,body{
	overflow-x:hidden;
}
</style>

<link rel="stylesheet" href="../../style/scrollbar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<script>
    $(function ()
        {
            $('#txt').keyup(function (e){
                if(e.keyCode == 13){
                    var curr = getCaret(this);
                    var val = $(this).val();
                    var end = val.length;
                
                    $(this).val( val.substr(0, curr) + '<br>' + val.substr(curr, end));
                }
        
            })
        });

        function getCaret(el) { 
            if (el.selectionStart) { 
                return el.selectionStart; 
            }
            else if (document.selection) { 
                el.focus(); 

                var r = document.selection.createRange(); 
                if (r == null) { 
                    return 0; 
                } 

                var re = el.createTextRange(), 
                rc = re.duplicate(); 
                re.moveToBookmark(r.getBookmark()); 
                rc.setEndPoint('EndToStart', re); 

                return rc.text.length; 
            }  
            return 0; 
        }
</script>
<body class = "bg-dark" onload = "refresh()" >
<div class = "row">

     <div class="col-sm-8 text-light" style = "margin:0 auto;">
  <form name = "form"  method="POST">
  <h1>Write Article</h1><br>

    <div class="form-group" id = "content">
      <label for="phone">Body</label>
 <textarea rows = "25" class="form-control" placeholder="Enter Article" name="text_box" id = "txt">
<?php
require('textarea.php');
?>
	  </textarea>

    </div>
	<div class = "form-group">	  

	           <input type="Submit" class = "btn btn-success" id="search-submit" value="Submit" />
<a id="refresh" onclick = "refresh()" class = "btn btn-primary">Refresh</a>
<script>
function refresh(){
var refreshId = setInterval(function()
{
     $('#txt').load('textarea.php');
});
}
</script>
			   <?php
    if(isset($_POST['text_box'])) { //only do file operations when appropriate
        $a = $_POST['text_box'];
        $myFile = "../data.txt";
        $fh = fopen($myFile, 'w') or die("can't open file");
        fwrite($fh, $a);
	echo "<script type='text/javascript'>alert('Done, ! Its Updated!');</script>";

    }
?>
	</div>
    </form>
	


</div>
</div><h2 style = "text-decoration:none;position:absolute;top:0;right:0;margin-right:10px;">
<a href = "../logout.php">Sign Out</a><br>
<a href = "welcome.php" target = "_blank">Datatable</a>
</h2>
</body>
</html>

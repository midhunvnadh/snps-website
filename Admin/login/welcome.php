<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: ../index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Datatables</title>
</head>
<body bgcolor = "#333333">
<style>
@font-face {
    font-family:Open Sans;
    src:url(/Assets/OpenSans-Light.ttf);
}
*{
	font-family:Open Sans;
}
*:hover{
	transition:all .2s ease}
td{
	background-color:blue;
	border-radius:3px;
	padding:5px;
	text-align:center;
	cursor:pointer;
	width:100px;
	height:uto;
}
td:hover{
	background-color:#F6F;
	color:#0CF;}
th{
	background-color:#66F;
	border-radius:3px;
	text-align:center;
	padding:5px;}
</style>
<?php
echo "<center>";
echo "<table bgcolor= '#000000' style='border: solid 1px blue;color:white;border-radius:5px;'>";
 echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Phone</th><th>Subject</th><th>Message</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='border: 1px solid blue;width:100px;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "id4460568_snps";
$password = "snps2018";
$dbname = "id4460568_contact";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, name, email, phone, subject, message FROM contact_snps"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
echo "</center>";
?> 

</body>
</html>
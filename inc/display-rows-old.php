<?php 
//$link = mysqli_connect('localhost','toogreen','toosad');
//if (!$link) {
//    die('Could not connect to MySQL: ' . mysqli_error());
//}
//echo 'Connection OK'; mysqli_close($link);


//include("connect_db.php");


//$host='127.0.0.1';
//$user='toogreen';
//$password='toosad';
//$db='blower';

//$connection =  mysqli_connect($host,$user,$password,$db);


//$username="toogreen";
//$password="toosad";
//$database="blower";

//mysql_connect(localhost,$username,$password);

//$connection = mysqli_connect('localhost', 'toogreen', 'toosad', 'blower');
//mysqli_query($link, 'CREATE TEMPORARY TABLE `table`');

//@mysql_select_db($database) or die( "Unable to select database");


// GET DATA 

//$query = "SELECT * FROM `blow`";
//$result = mysqli_query ($query) or exit("The query could not be performed");


//$jresult=mysqli_query($link, 'SELECT * FROM blow ORDER BY id ASC');
//$jquery="SELECT * FROM blow WHERE id='1' ORDER BY id ASC";
//$jresult=mysqli_query($jquery);
//$jnum=mysqli_numrows($jresult);


//echo ($jnum);


//echo($jnum);

//echo($jresult);
//echo($jnum);


// START LOOP FOR ACTIVITIES
//$j=0;
//while ($j < $jnum) {
//$id=mysqli_result($jresult,$j,"id");
//$company=mysqli_result($jresult,$j,"company");
//$comment=mysqli_result($jresult,$j,"comment");
//$position=mysqli_result($jresult,$j,"position");


//echo($company);
//echo($comment);
//echo($position);

//++$j;
//

$con=mysqli_connect("localhost","toogreen","toosad","blower");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM blow ORDER BY id ASC";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
  // Free result set

/ START LOOP FOR ACTIVITIES
$j=0;
while ($j < $rowcount) {
$id=mysqli_result($jresult,$j,"id");
$company=mysqli_result($result,$j,"company");
$comment=mysqli_result($result,$j,"comment");
$position=mysqli_result($result,$j,"position");


echo($company);
echo($comment);
echo($position);

++$j;  
  
  
  mysqli_free_result($result);
  
  }

mysqli_close($con);
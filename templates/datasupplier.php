<?php 

// simulate that this proccess might take a while so you can see the loadingMessage option work.
//sleep(1);

$material = $_GET['material'];
$con = mysql_connect("localhost","root","A");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("automation", $con);

$result = mysql_query("SELECT * FROM tcc_test where material_id = $material ");


// store the record of the "example" table into $row
while($row = mysql_fetch_array( $result ))
// Print out the contents of the entry 
{
echo json_encode( $row['name'] );

}

?>


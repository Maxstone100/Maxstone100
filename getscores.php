header('Access-Control-Allow-Origin: *');



sql2312660
$host="sql2.freesqldatabase.com"; // Host name 
$username="sql2312660"; // Mysql username 
$password="wK6%iG7!"; // Mysql password 
$db_name="sql2312660"; // Database name 
$tbl_name="scores"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Retrieve data from database 
$sql="SELECT * FROM scores ORDER BY score DESC LIMIT 10";
$result=mysql_query($sql);

// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){
echo $rows['name'] . "|" . $rows['score'] . "|";

// close while loop 
}

// close MySQL connection 
mysql_close();
?>

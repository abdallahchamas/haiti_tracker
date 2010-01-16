<?
$connection=mysql_connect("localhost","username","pass"); 
$db=mysql_select_db("dbname",$connection); 

mysql_query("ALTER IGNORE TABLE item ADD UNIQUE dup_index_name (title)");
mysql_query("ALTER IGNORE TABLE item DROP INDEX dup_index_name");

$sql = "SELECT id, added FROM item WHERE pubdate IS NULL";

$mysql_result=mysql_query($sql,$connection); 
$num_rows=mysql_num_rows($mysql_result);

while ($row4=mysql_fetch_array($mysql_result)) 
{ 
$pid = $row4["id"];
$added = $row4["added"];

mysql_query("UPDATE item SET pubdate='$added' WHERE id='$pid'");

}

mysql_close($connection); 

header("Location: index.php"); 

?>
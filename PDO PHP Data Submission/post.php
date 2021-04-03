
                                                                   <?php 
// DB credentials.
define('DB_HOST1','xx');
define('DB_USER1','x');
define('DB_PASS1','x');
define('DB_NAME1','x');
// Establish database connection.
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST1.";dbname=".DB_NAME1,DB_USER1, DB_PASS1,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' "));
$dbh->exec("SET NAMES utf8");
}
catch (PDOException $e )
{
exit("Error: " . $e->getMessage());
}
    
    ?>


<?php

if(isset($_POST['veri']))
{

$a=$_POST['a'];
$b=$_POST['b'];



    
    
$sql ="INSERT INTO tablo(a,b) VALUES(:a, :b,)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':a', $a, PDO::PARAM_STR);
$query-> bindParam(':b', $b, PDO::PARAM_STR);


$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script type='text/javascript'> document.location = 'Veri Eklendi'  ; </script>";
}
else 
{
$error="Hata";
}

}
?>
 <form method="post" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
				
					<input type="hidden" name="a" value="Değer">
					<input type="hidden" name="b" value="Değer2">
						    <button name="veri" type="submit" class="btn btn-primary d-block w-100 mt-3"> Gönder</button>
                                                 
                                             </form>
<?php
@ob_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'freaktem_user');
define('DB_PASSWORD', 'freaktem@123');
define('DB_DATABASE', 'freaktem_doctoradmin');
define('SECRET_KEY', 'This is my secret key');
define('SECRET_IV', 'This is my secret key');
function getDB()
{
    $dbhost=DB_SERVER;
    $dbuser=DB_USERNAME;
    $dbpass=DB_PASSWORD;
    $dbname=DB_DATABASE;
    try
    {
        $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $dbConnection->exec("set names utf8");
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
    catch (PDOException $e)
    {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }
}
?>
<?php
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
define('distance',"mi");
?> 
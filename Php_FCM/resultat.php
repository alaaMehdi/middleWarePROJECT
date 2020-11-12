
<?php
require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;


$factory = (new Factory)
    ->withServiceAccount('./secret/middleware-3db4e-firebase-adminsdk-4i7nt-73a33d70fe.json')
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://middleware-3db4e.firebaseio.com/');

$database = $factory->createDatabase();

$page = $_SERVER['PHP_SELF'];
$sec = 1;
//sleep(1);
$Rs = $database->getReference('ResultatPython')->getChild('Var')->getValue();
echo $Rs;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <title>Résultat</title>
</head>
<body>


</body>
</html>
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

/*$newPost = $database
    ->getReference('Resultat')
    ->push([
        'valeur1' => $_POST['v1'],
        'valeur2' => $_POST['v2']
    ]);*/
//$newPost->getChild('title')->set('Changed post title');

$database->getReference('ResultatPHP')->getChild('Variables')->update([
    'Var 1' => $_POST['v1'],
    'Var 2' => $_POST['v2'],
    'Operation' => $_POST['op']
]);

$Rs = $database->getReference('ResultatPython')->getChild('Var')->getValue();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <title>Interface1</title>
</head>
<body>
<div class="header" ><br><h1 align="center">Interface 1</h1></div>
<div class="container">
    <form method="post" >
        <span id="msg"></span>
        <div class="form-group">
            <label for="var1">Premier variable</label>
            <input type="text" name="v1" class="form-control" id="var1" aria-describedby="v1help" placeholder="Enter Var1">
            <small id="v1help" class="form-text text-muted">Donner la 1ér valeur.</small>
        </div>

        <div class="form-check">

            <label for="function-select">Choose an operation:</label>
            <select name="op" id="op-select">
                <option value="add">Addition : +</option>
                <option value="sub">Subtraction : -</option>
                <option value="mul">Multiplication : *</option>
                <option value="div">Division : /</option>
            </select>

        </div>

        <div class="form-group">
            <label for="var2">Deuxiéme variable</label>
            <input type="text" name="v2" class="form-control" id="var2" aria-describedby="v2help" placeholder="Enter Var2">
            <small id="v2help" class="form-text text-muted">Donner la 2éme valeur.</small>
        </div>



        <div class="form-group">
            <div><label for="resultat">Result : </label></div>
            <div><iframe src="resultat.php" width="1000"
                         height="35"
                         style="border:0px "></iframe></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Cancel</button>
    </form>
</div>
</body>
</html>


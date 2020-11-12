<?php $readFile = file_get_contents("GetVal.txt") or die("Unable to open file!"); ?>
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
    <form action="CallServer.php" method="post" target="_parent">
        <span id="msg"></span>
        <div class="form-group">
            <label for="var1">Premier variable</label>
            <input type="text" name="v1" class="form-control" id="var1" aria-describedby="v1help" placeholder="Enter Var1">
            <small id="v1help" class="form-text text-muted">Donner la 1ér valeur.</small>
        </div>
        <div class="form-group">
            <label for="var2">Deuxiéme variable</label>
            <input type="text" name="v2" class="form-control" id="var2" aria-describedby="v2help" placeholder="Enter Var2">
            <small id="v2help" class="form-text text-muted">Donner la 2éme valeur.</small>
        </div>
        <div class="form-group">
            <label for="resultat">Addition de deux variables :</label><label for="re"> <?php echo " ".$readFile; ?> </label>
        </div>
        <!--<div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>-->

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Cancel</button>
    </form>
</div>
</body>
</html>

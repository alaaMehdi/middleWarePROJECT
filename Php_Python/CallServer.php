<?php


class CallServer
{
    private $var1;
    private $var2;

    public function __construct()
    {

        $this->var1=$_POST[v1];
        $this->var2=$_POST[v2];

        $txt=  $this->var1.":".$this->var2;


        $myFile = fopen("SetVal.txt", "w") or die("Unable to open file!");

        fwrite($myFile, $txt);

        fclose($myFile);



    }

}

$KTB = new CallServer();

header('Location: index.php');


/*$myFile = fopen("SetVal.txt", "w") or die("Unable to open file!");
file_put_contents("SetVal.txt", ":");
fclose($myFile);*/


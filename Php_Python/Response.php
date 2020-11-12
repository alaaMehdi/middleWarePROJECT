<?php


class Response
{
    public $Resp;

    public function __construct()
    {
        $this->Resp=$_POST[code];

        $txt=  $this->Resp;


        $myFile = fopen("GetVal.txt", "w") or die("Unable to open file!");

        fwrite($myFile, $txt);

        fclose($myFile);
    }


}
$Resp= new Response();
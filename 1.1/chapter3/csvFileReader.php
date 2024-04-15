<?php

require_once("FileReader.php");


class CsvFileReader extends FileReader

{

    public function getData(){

        return $this->data ;

    }


}
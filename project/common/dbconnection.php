<?php
class DBConnection extends mysqli{
    public function __construct(){
        parent::__construct('localhost', 'root', '1234', 'earth');
    }
}
?>


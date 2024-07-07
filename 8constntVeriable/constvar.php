<?php
    /** Normal Variable */
    $x = 22 ."<br>";
    $x = 55 ."<br>"; // override
    echo $x;

    /** Constant Variable */
    /**define(name, value, case-insensitive);  */ 
    define("num",500); // num veriable value 500, bydefult case-insensitive
    // define("num",999); // error , constant variable not ovverite
    echo num;



?>
|<?php

    // statements with br tag
    echo "it is 25 aug<br>";
    echo "<h1>and it is 2k23</h1>";
    echo "it is 25 aug <br>";
    echo "<h1> and it is 2k23 </h1>";

    // statements
    echo "<br>what is your name?";
    echo "<h3>my name is Md. Imran Hossen Jahid.</h3><br>";

    //  variables declaration and double quotation concatenation
    $name = "Jahid";
    $age = 21;
    echo "$name &nbsp $age <br>";

    $name = "Md. Imran";
    $age = 21;
    echo "my name is $name and I am $age years old.<br>";

    $address = "Dhaka";
    echo "my home town is $address .<br><br>";


    // dynamic variables

    $name = "<br>Jahid<br>";
    echo $name;
    echo $name;
    echo $name;
    $name = "<br>Md. Shofikul<br>";
    echo $name;
    echo $name;
    echo $name;
    echo $name;

    $num = 120;
    $num = 155;
    echo $num;



    // concatenation

    $name = "Md. Imran Hossen Jahid";
    $hobby = "swimming";
    echo '<br><br>My name is ' . $name . ' and my hobby is ' . $hobby . '.';
    ?>
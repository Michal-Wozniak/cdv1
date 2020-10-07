<?php
    require_once './class/Person.php';

    $person = new User();

    $person->setname('Jan');
    echo $person->name;
?>
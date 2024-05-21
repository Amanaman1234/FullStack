<?php

if (isset($_POST["BESTEL"])) {

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    Bestel($conn);
}

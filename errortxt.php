<?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>dumbassnigga</p>";
                }
                else if ($_GET["error"]) {
                    if($_GET["error"] == "toolung"){
                        echo "<p>gebruikersnaam te lang</p>";
                    }
                    else if ($_GET["error"]) {
                        if($_GET["error"] == "invalidusername"){
                            echo "<p>gebruik normale username</p>";
                        }
                            else if ($_GET["error"]) {
                                if($_GET["error"] == "pwdsdontmatch"){
                                    echo "<p>wachtwoord is niet hetzelfde kkr mogool</p>";
                                }
                            else if ($_GET["error"]) {
                                if($_GET["error"] == "none"){
                                    echo "je bent ingelogd :)";
                                }
                                else if($_GET["error"]){
                                    if($_GET["error"] == "gebruikersnaamgebruikt"){
                                        echo "<p>kies andere gebruikersnaam</p> ";
                                    }
                                    else if($_GET["error"]){
                                        if($_GET["error"] == "stmtfailed"){
                                            echo "<p>er ging wat fout :( probeer opnieuw</p> ";
                                        }
                                    }
                                }
                        }
                }
            }
        }
    }
            ?>
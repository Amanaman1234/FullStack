<?php

include "Header.php";
?>
<link rel="stylesheet" href="css/Login.css">

    <div class="main">
        <div class="blok">
            <h1 class="Titel Text">Login</h1>

            <form action="include/login.inc.php" method="post">
                <p class="Text">Gebruikersnaam</p>
                <input type="text" name="gebruikersnaam" placeholder="gebruikernaam/e-mail">
                <p class="Text">Wachtwoord</p>
                <input type="password" name="wachtwoord">
                <button type="submit" name="submit">Login</button>
            </form>

            <?php include "include/errortxt.php" ?>

            <div class="foot">
                <p class="Text">Nog geen account <a class="linkText" href="registreer.php">registreer</a></p>
            </div>
        </div>
    </div>
</body>
</html>

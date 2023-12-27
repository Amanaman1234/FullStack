<?php
 include 'Header.php';
?>



    <div class="main">
        <div class="blok">
            <h1 class="TitelText">Registreer</h1>
               <form class="form" action="include/registreer.inc.php" method="post">
                   <p class="Text">Naam</p>
                   <input type="text" name="naam">
                   <p class="Text">Gebruikersnaam</p>
                   <input type="text" name="gebruikersnaam">
                   <p class="Text">E-mai</p>
                   <input type="text" name="email">
                   <p class="Text">Wachtwoord</p>
                   <input type="password" name="wachtwoord">
                   <p class="Text">Herhaal wachtwoord</p>
                   <input type="password" name="repWachtwoord"><br>
                   <button type="submit" name="submit">Registreer</button>
               </form>
            <?php include "errortxt.php"; ?>

            <div class="foot">
                <p class="Text">Heb je al een account<a class="linkText" href="login.php">Login</a></p>
            </div>  
        </div>
    </div>
</body>
</html>

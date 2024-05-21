<?php include("Header.php");
require_once 'include/functions.inc.php';
?>
<link rel="stylesheet" href="css/Bestellen.css">


<main>
    <section>
        <?php 
        $smaak = checktaart();
        printTaart($smaak);
        
         ?>

            <form action="include/Bestel.inc.php" method="post">
                <p>Adres</p>
            <input type="text" name="adres">
            <p>postcode</p>
            <input type="text" name="postcode">
            <p>Telefoon</p>
            <input type="text" name="telefoon">
            <p>Rekening nummer</p>
            <input type="text" name="Bank">
            <?php
         
        if(isset($_SESSION["gebruikerid"])){
            echo "<button type='submit' name='BESTEL'>Bestel</button>";

        }else{
            echo "<h1>U bent nog niet ingelogd<br> Log in alstu blieft >_<</h1>";
            echo "<li><a class='linkText' href='login.php'>Login</a></li>";
        }
        ?>                  
            </form>
        </div>
    </section>
</main>

</body>
</html>




<?php include("Header.php");
require_once 'include/functions.inc.php';
?>
<link rel="stylesheet" href="css/Bestellen.css">


<main>
    <section>
        <?php checktaart(); ?>

            <form action="include/Bestel.inc.php" method="post">
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




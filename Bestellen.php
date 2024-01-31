<?php include("Header.php");
require_once 'include/functions.inc.php';
?>
<link rel="stylesheet" href="css/Bestellen.css">


<main>
    <section>
        <?php checktaart(); ?>

            <form action="include/Bestel.inc.php" method="post">
                <p class="Text">Naam</p>
                   <input type="text" name="naam">
                   <p class="Text">Gebruikersnaam</p>
                   <input type="text" name="gebruikersnaam">
                   <p class="Text">E-mai</p>
                   <input type="text" name="email">
                  <button type="submit" name="BESTEL">Bestel</button>
                  
            </form>
        </div>
    </section>
</main>

</body>
</html>




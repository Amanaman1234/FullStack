<?php
 include 'Header.php';
?>
    <link rel="stylesheet" href="css/Taart.css">

    <section id="main">
        <div class="taart">
        <div class="taartSub"><img class="foto" src="img/chocoladetaart-met-karamelmousse-en-koffie-ganache-1.jpg"></div>
            <p class="text">chocoladetaart</p></div>     
        </div>
        <div class="taart">
            <div class="taartSub"><img class="foto" src="img/Moka.jpg"></div>
            <p class="text">mokka</p></div>
        <div class="taart">
        <div class="taartSub"><img class="foto" src="img/Apel.jpg"></div>
            <p class="text">AppelTaart</p></div>
        </div>
        <div class="taart">
        <div class="taartSub"><img class="foto" src="img/Minecraft.jpg"></div>
            <p class="text">Minecraft</p></div>
        </div>
        <div class="taart">
        <div class="taartSub"><img class="foto" src="img/Spongebob.jpg"></div>
            <p class="text">Spongebob</p></div>
        </div>
        <div class="taart">
        <div class="taartSub"><img class="foto" src="img/Fortnite.jpg"></div>
            <p class="text">Fortnite</p></div>
        </div>

    </section>

</body>

<script>
    let taart = document.getElementsByClassName("taart");
    for (let i = 0; i < taart.length; i++) {
        taart[i].onclick = function(){
            window.location.replace("index.php");
    }
    }

</script>
</html>


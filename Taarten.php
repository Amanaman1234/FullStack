<?php
 include 'Header.php';
?>
    <link rel="stylesheet" href="css/Taart.css">

    <section id="main">
        <div class="taart" data-taart="chocolade">
        <div class="taartSub"><img class="foto" src="img/chocolade.jpg"></div>
            <p class="text">chocoladetaart</p></div>     
        </div>
        <div class="taart" data-taart="moka">
            <div class="taartSub"><img class="foto" src="img/Moka.jpg"></div>
            <p class="text">mokka</p></div>
        <div class="taart"  data-taart="appel">
        <div class="taartSub"><img class="foto" src="img/appel.jpg"></div>
            <p class="text">AppelTaart</p></div>
        </div>
        <div class="taart"  data-taart="minecraft">
        <div class="taartSub"><img class="foto" src="img/Minecraft.jpg"></div>
            <p class="text">Minecraft</p></div>
        </div>
        <div class="taart"  data-taart="spongebob">
        <div class="taartSub"><img class="foto" src="img/Spongebob.jpg"></div>
            <p class="text">Spongebob</p></div>
        </div>
        <div class="taart"  data-taart="fortnite">
        <div class="taartSub"><img class="foto" src="img/Fortnite.jpg"></div>
            <p class="text">Fortnite</p></div>
        </div>

    </section>

</body>

<script>
    let taart = document.getElementsByClassName("taart");
    for (let i = 0; i < taart.length; i++) {
        taart[i].onclick = function(){
            window.location.replace(`Bestellen.php?smaak=${taart[i].dataset.taart}`);
    }
    }

</script>
</html>


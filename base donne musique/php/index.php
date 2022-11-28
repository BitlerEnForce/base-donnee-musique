<?php
include("navigation.php");
?>

<style>
h1 {
    position: relative;
    top: 100px;
    left: 50px;
}

.description-site {
    position: relative;
    top: 110px;
    left: 50px;
    font-size: 20px;
    font-weight: bold;
}

.document-musical {
    position: relative;
    top: 130px;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    text-decoration-line: underline;
}

.document-livre-audio {
    position: relative;
    top: 250px;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    text-decoration-line: underline;
}

#contenu-livre-audio {
    position: relative;
    top: 200px;
}

</style>

<script>
let navigation = document.querySelector(".navigation");

navigation.style.top = "0px";
</script>

<h1>Base de Donnée de musique classique française.</h1>
<p class="description-site">Et autre document.</p>
<p class="document-musical">Document musical</p>
<div class="contenu-carte">
    <div class="carte">
        <p>Epique</p>
        <a href="epique.php">Voir</a>
    </div>
    <div class="carte">
        <p>Glorieux</p>
        <a href="glorieux.php">Voir</a>
    </div>
    <div class="carte">
        <p>Solennelle</p>
        <a href="solennelle.php">Voir</a>
    </div>
    <div class="carte">
        <p>Lugubre</p>
        <a href="lugubre.php">Voir</a>
    </div>
    <div class="carte">
        <p>Triste</p>
        <a href="triste.php">Voir</a>
    </div>
    <div class="carte">
        <p>Doux</p>
        <a href="doux.php">Voir</a>
    </div>
    <div class="carte">
        <p>Nostalgique</p>
        <a href="nostalgique.php">Voir</a>
    </div>
    <div class="carte">
        <p>Joyeux</p>
        <a href="joyeux.php">Voir</a>
    </div>
    <div class="carte">
        <p>Entrainant</p>
        <a href="entrainant.php">Voir</a>
    </div>
    <!--
    <div class="carte">
        <p>Energique</p>
        <a href="energique.php">Voir</a>
    </div>
    -->
</div>

<p class="document-livre-audio">Document livre audio</p>

<div class="contenu-carte" id="contenu-livre-audio">
    <div class="carte">
        <p>Alain Soral</p>
        <a href="soral.php">Voir</a>
    </div>
</div>
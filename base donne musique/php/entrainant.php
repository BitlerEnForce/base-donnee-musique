<?php
include("navigation.php");
?>


<div class="contenu-musique">
    <div class="carte-musique">
        <h1>Minuetto</h1>
        <p>George Bizet</p>
        <p>Moment fort : <br>
        0:00-1:00<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/bizet-minuetto.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=dtu7CE0DX-Y">Voir sur Youtube</a>
    </div>
</div>

<style>

.contenu-musique {
    position: relative;
    top: 70px;
    height: 400px;
    width: 1640px;
    margin-left: auto;
    margin-right: auto;
    padding-top: 20px;
}

.carte-musique {
    display: inline-block;
    height: 353px;

    font-weight: 600;
    padding: 15px 50px;
    box-shadow: 0 0 15px rgb(134, 134, 134);
}    

.carte-musique a {
    position: relative;
    padding: 10px 70px;
    left: 20px;
    top: 30px;
    
    background-color: blue;
    color: white;
    text-decoration: none;
}

.carte-musique a:hover {
    background-color: rgb(44, 192, 255);
}

@media screen and (max-width: 700px) {
    .carte-musique {
        display: block;
    }

    .contenu-musique {
        padding-top: 0px;
        margin-top: 0px;
    }
}

</style>


<?php
include("navigation.php");
?>


<div class="contenu-musique">
    <div class="carte-musique">
        <h1>Kyrie - Messe</h1>
        <p>Louis Vierne</p>
        <p>Moment fort : <br>
        0:00-2:25<br>
        3:45-jusqu'à la fin<br>
        <br>
    </p>
        <audio controls src="../ressource/vierne-kyrie.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=uEbMZCnLOlQ&list=PLBHxyBoQSwqj784oCwlQd4rIDe8cFLxZY&index=73">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Kyrie - Requiem</h1>
        <p>Camille Saint Seans</p>
        <p>Moment fort : <br>
        3:35-jusqu'à la fin<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/saint-seans-kyrie.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=E7ufLZRQmpQ&list=PLBHxyBoQSwqj784oCwlQd4rIDe8cFLxZY&index=78">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Dolorosa</h1>
        <p>Francis Poulenc</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/poulenc-dolorosa.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=HjCVRbgTpDE&list=PLBHxyBoQSwqhoeXSCgOkE6Hro7j9xaBwv&index=4">Voir sur Youtube</a>
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


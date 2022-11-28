<?php
include("navigation.php");
?>


<div class="contenu-musique">
    <div class="carte-musique">
        <h1>Méditation Thais</h1>
        <p>Jules Massenet</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/massenet-meditation.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=7QtGOWemQhY">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Le Cygne</h1>
        <p>Camille Saint Seans</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/saint-seans-cygne.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=IpWoSDsUJu8">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Symphonie</h1>
        <p>Claude Debussy</p>
        <p>Moment fort : <br>
        0:00 - 3:15<br>
        4:00 - 5:20<br>
        <br>
    </p>
        <audio controls src="../ressource/debussy-symphonie.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=dM6RDEHN090">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Jardin féerique</h1>
        <p>Maurice Ravel</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/ravel-jardin.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=_moR3FDdN0g&list=PLBHxyBoQSwqj784oCwlQd4rIDe8cFLxZY&index=81">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Lever du jour</h1>
        <p>Maurice Ravel</p>
        <p>Moment fort : <br>
        1:00-jusqu'à la fin<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/ravel-lever-jour.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=wdX5mrp8uE0">Voir sur Youtube</a>
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


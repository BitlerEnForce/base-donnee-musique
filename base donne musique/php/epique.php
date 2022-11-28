<?php
include("navigation.php");
?>


<div class="contenu-musique">
    <div class="carte-musique">
        <h1>Symphonie Antique</h1>
        <p>Charles Marie Widor</p>
        <p>Moment fort : <br>
        0:00-3:40<br>
        27:40-29:50<br>
        <bold>47:45-jusqu'à la fin<bold><br>
    </p>
        <audio controls src="../ressource/widor-symph-antique.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=KO5hrBJNIQE">Voir sur Youtube</a>
    </div>

    <div class="carte-musique">
        <h1>Concerto pour orgue</h1>
        <p>Francis Poulenc</p>
        <p>Moment fort : <br>
        3:26-5:30<br>
        12:18-15:07<br>
        <br>
    </p>
        <audio controls src="../ressource/poulenc - concerto orgue.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=RduLr1Cp9Ls&t=730s">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Prélude n°24 opus n°28</h1>
        <p>Frédéric Chopin</p>
        <p>Moment fort : <br>
        1:27-jusqu'à la fin<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/chopin-prelude-24.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=0IJDKVW_Evc&list=PLBHxyBoQSwqj784oCwlQd4rIDe8cFLxZY&index=86">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Agnus dei - Requiem</h1>
        <p>Camille Saint Seans</p>
        <p>Moment fort : <br>
        3:30-jusqu'à la fin<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/saint-seans-agnus-dei.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=2Mveap6HXmU&list=PLBHxyBoQSwqj784oCwlQd4rIDe8cFLxZY&index=65">Voir sur Youtube</a>
    </div>
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
        <h1>Symphonie sacrée</h1>
        <p>Charles Marie Widor</p>
        <p>Moment fort : <br>
        26:10-jusqu'à la fin<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/widor-symphonie-sacre" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=M4mlWFUuTmQ">Voir sur Youtube</a>
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


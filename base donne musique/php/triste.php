<?php
include("navigation.php");
?>


<div class="contenu-musique">
    <div class="carte-musique">
        <h1>Symphonie n°3</h1>
        <p>André Gedalge</p>
        <p>Moment fort : <br>
        10:26-15:40<br>
        15:40-16:50<br>
        <br>
    </p>
        <audio controls src="../ressource/gedalge-symphonie-3.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=ty47UB5cB_c&list=PLBHxyBoQSwqiGdPSZ_k36KfkCf9pgX37t&index=1&t=1014s">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Je crois entendre</h1>
        <p>George Bizet</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/bizet-je-crois-entendre.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=LJKIJpWUNHE">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Pavane</h1>
        <p>Gabriel Fauré</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/fauré-pavane.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=mMJcGPMCOWc&list=PLBHxyBoQSwqj784oCwlQd4rIDe8cFLxZY&index=12&t=12s">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Lamentation</h1>
        <p>Jules Massenet</p>
        <p>Moment fort : <br>
        0:30 - 2:35<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/massenet-lamentation.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=eLcEMGY-R-U&list=PLBHxyBoQSwqj784oCwlQd4rIDe8cFLxZY&index=45">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Carmen - La fleur...</h1>
        <p>George Bizet</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/bizet-la-fleur.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=ND0BbNNdtO8">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Mon coeur...</h1>
        <p>Camille Saint Seans</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/saint-seans-mon-coeur.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=Wjs8rjzpb5Q">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Tristesse</h1>
        <p>Camille Saint Seans</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/saint-seans-tristesse.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=wv8qCaDg39A">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Esclavage...</h1>
        <p>Camille Saint Seans</p>
        <p>Moment fort : <br>
        3:00 - 7:00<br>
        <br>
        <audio controls src="" width="700px"></audio>
    </p>
        <br>
        <a href="https://www.youtube.com/watch?v=nGLZZz61aOM&t=180s">Voir sur Youtube</a>
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


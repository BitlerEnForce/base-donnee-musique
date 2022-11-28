<?php
include("navigation.php");
?>


<div class="contenu-musique">
    <div class="carte-musique">
        <h1>Invitation au voyage</h1>
        <p>Henri Duparc</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/duparc-invitation-voyage.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=Ck9geoxCGkc&list=PLBHxyBoQSwqj784oCwlQd4rIDe8cFLxZY&index=89">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Elegie</h1>
        <p>Henri Duparc</p>
        <p>Moment fort : <br>
        De A à Z<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/duparc-elegie.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=bqbWtkLoCAU&list=PLBHxyBoQSwqj784oCwlQd4rIDe8cFLxZY&index=91">Voir sur Youtube</a>
    </div>
    <div class="carte-musique">
        <h1>Symphonie opus n°10</h1>
        <p>Charlotte Suhy</p>
        <p>Moment fort : <br>
        0:00 - 3:25<br>
        <br>
        <br>
    </p>
        <audio controls src="../ressource/suhy-symphonie-ut.mp3" width="700px"></audio>
        <br>
        <a href="https://www.youtube.com/watch?v=x7yA_Zogpuo&t=212s">Voir sur Youtube</a>
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


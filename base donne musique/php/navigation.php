<?php
include("header.php");
?>

<!----------HTML---------->

<body>
    <div class="contenu-global">
        <nav class="navigation">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg/langfr-225px-Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg.png" height="50px" width="50px">
                <p>Bddmcf.fr</p>
            </div>
            <div class="onglet">
                <a href="index.php">Accueil</a>
                <a href="mailto:pierrebenard2005@gmail.com">Me contacter</a>
            </div>
        </nav>
        
    </div>
</body>

<!----------CSS---------->

<style>

img {
    border-radius: 50%;
    position: absolute;
    top: 13px;
}

body {
    margin: 0px;
    padding: 0px;
    font-family: 'Playfair Display', serif;
    box-sizing: border-box;
}

.logo {
    display: inline-block;
    position: relative;
    left: 30px;
    align-items: center;
}

.onglet {
    display: inline-block;
    position: relative;
    left: 100px;
}

.navigation a {
    margin-left: 20px;
    margin-right: 20px;
    display: inline-block;

    color: white;
    font-size: 1.2rem;
    text-decoration: none;
    transition: all .2s;
}

.navigation a:hover {
    color: black;
}

.navigation p {
    display: inline-block;
    color: white;
    font-size: 1.4rem;
    text-decoration: none;
}

.navigation {
    z-index: 5;
    margin-top: 0px;
    padding: 0px;
    position: fixed;
    width: 100%;
    
    background: linear-gradient(95deg, rgb(0, 153, 255), rgb(119, 0, 255));
    box-shadow: 0 0 15px rgb(134, 134, 134);
}

/*----------MAIN----------*/

.contenu-carte {
    position: relative;
    display: inline-block;
    margin-left: 100px;
    margin-right: 100px;
}

.logo p {
    position: relative;
    left: 70px;
}

.carte {
    box-sizing: border-box;
    display: inline-block;
    height: 180px;
    width: 300px;
    top: 150px;
    margin-left: 18px;
    margin-right: 18px;
    margin-top: 18px;
    margin-bottom: 18px;
    position: relative;

    border-radius: 7px;
    /*background: linear-gradient(95deg, rgb(0, 153, 255), rgb(174, 251, 255));*/
    border: solid 2px black;
    background-color: aliceblue;
}

.carte a {
    position: relative;
    padding: 10px 70px;
    left: 65px;
    top: 60px;
    
    background-color: blue;
    color: white;
    text-decoration: none;
}

.carte a:hover {
    background-color: rgb(44, 192, 255);
}

.carte p {
    position: relative;

    text-align: center;
    top: 50px;
    font-size: 1.2rem;
    font-weight: bold;
}

@media screen and (max-width: 700px) {
    .logo {
        display: inline-block;
        position: relative;
        left: 5px;
    }
    .onglet {
        display: inline-block;
        position: relative;
        left: 30px;
    }
    .navigation p {
        display: inline-block;
        color: white;
        font-size: 1rem;
        text-decoration: none;
    }
    .navigation a {
        margin-left: 2px;
        margin-right: 2px;
        display: inline-block;

        color: white;
        font-size: 1rem;
        text-decoration: none;
    }
}

</style>

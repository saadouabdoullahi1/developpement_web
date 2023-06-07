<?php
echo'
    <style>
        body{
            margin:0;
            background-color: rgb(17, 58, 82);
            color:aliceblue;
        }
        .nav{
            width: 100%;
            height: 80px;
            background-color:#000033;
        }
        ul{
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
        }
        ul li{
            float: left;
            margin-top: 20px;
        }
        ul li a{
            color: aliceblue;
            text-decoration-line: none;
            width: 150px;
            display: block;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            font-family: century Gothic;
            font-weight: bold;
        }
        a:hover{
            background:rgb(73, 99, 99);
        }
        ul li ul{
            background-color: #000033;
            display: none;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            
        }
        ul li ul li{
            float: none;
        }
        ul li:hover ul{
            display: block;
        }
    </style>
    <div class="nav">
        <ul>
            <li>
                <a href="#">html</a>
                <ul>
                    <li><a href="html\liste.php">Liste</a></li>
                    <li><a href="html\tableau.html">Tabbleau</a></li>
                    <li><a href="html\formulaire.html">Formulaire</a></li>
                </ul>
            </li>
            <li>
                <a href="#">JavaScript</a>
                <ul>
                    <li><a href="js\si.html">Les conditions</a></li>
                    <li><a href="js\population.html">Les itérations</a></li>
                    <li><a href="#">Les exercices traités</a></li>
                    <li><a href="js\evenement.html">Les évènements</a></li>
                    <li><a href="#">Le DOM</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Php</a>
                <ul>
                    <li><a href="#">Les bases du Php</a></li>
                    <li><a href="php\calcul.php">LE Si</a></li>
                    <li><a href="php\choix.php">Le choix</a></li>
                    <li><a href="php\factoriel.php">Le pour</a></li>
                    <li><a href="php\diviseurs.php">LE tant que</a></li>
                    <li><a href="php\formulaire1.php">Les Formulaires</a></li>
                    <li><a href="#">Les bases de données</a></li>
                    <li><a href="#">Exo du TP</a></li>
                </ul>
            </li>
            <li>
                <a href="#">A-propos</a>
                <ul>
                    <li><a href="#">Saâdou Moussa Abdoul-Lahi</a></li>
                    <li><a href="#">Alzouma Labo Faiçal</a></li>
                </ul>
            </li>
        </ul>
        <img src="LOG copie.jpg" alt="emig" width="90px" align="right">
    </div>';
?>
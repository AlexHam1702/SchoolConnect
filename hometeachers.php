<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'schoolconnect_fb';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT nickname, secondname, photo, delegue FROM students WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($nickname, $secondname, $photo, $delegue);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="./img/lakelogo.png" rel="shortcut icon"/>
        <meta charset="utf-8"/>
        <meta content="width=1280, maximum-scale=1.0" name="viewport"/>
        <link href="./css/homeTeachers.css" rel="stylesheet" type="text/css"/>
        <meta content="Launchpad by Anima" name="author">
        </meta>
    </head>
    <body style="margin: 0;
 background: rgba(255, 255, 255, 1.0);">
        <input id="anPageName" name="page" type="hidden" value="hometeachers"/>
        <div class="hometeachers">
            <div style="width: 1280px; height: 100%; position:relative; margin:auto;">
                <div class="group26">
                    <img anima-src="./img/home-teachers-rectangle.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="group25">
                        <img anima-src="./img/home-teachers-rectangle-1.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <div class="group24">
                            <div class="rectangle2">
                            </div>
                            <div class="group21">
                                <div class="message">
                                    Message
                                </div>
                                <div class="elvirelorizon">
                                    Elvire Lorizon
                                </div>
                                <div class="a5112019">
                                    5/11/2019
                                </div>
                            </div>
                        </div>
                        <div class="group23">
                            <div class="rectangle2">
                            </div>
                            <div class="group21">
                                <div class="message">
                                    Message
                                </div>
                                <div class="christianhamard">
                                    Christian Hamard
                                </div>
                                <div class="a23102019">
                                    23/10/2019
                                </div>
                            </div>
                        </div>
                        <div class="group22">
                            <div class="rectangle2">
                            </div>
                            <div class="group21">
                                <div class="message2">
                                    Message(2)
                                </div>
                                <div class="vincentjardin351">
                                    Vincent Jardiné
                                </div>
                                <div class="a1492019">
                                    14/9/2019
                                </div>
                            </div>
                        </div>
                        <div class="group221">
                            <div class="rectangle2">
                            </div>
                            <div class="group21">
                                <div class="consigne">
                                    Consigne
                                </div>
                                <div class="afleclercq">
                                    A-F. Le Clercq
                                </div>
                                <div class="a1292019">
                                    12/9/2019
                                </div>
                            </div>
                        </div>
                        <div class="group222">
                            <div class="rectangle2">
                            </div>
                            <div class="group21">
                                <div class="message">
                                    Message
                                </div>
                                <div class="antoineboudrie">
                                    Antoine Boudrie
                                </div>
                                <div class="a792019">
                                    7/9/2019
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group20">
                    <div class="group19">
                        <img anima-src="./img/home-teachers-rectangle-2.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <div class="bonjourdavid">
                            Bonjour, <?=$nickname?> !
                        </div>
                        <div class="feuilledu2019appel">
                            Feuille d’appel
                        </div>
                    </div>
                    <div class="group4">
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle3" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle4" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    </div>
                    <div class="group41">
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-10@2x.png" class="rectangle2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle3" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle4" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    </div>
                    <div class="group42">
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-16@2x.png" class="rectangle3" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle4" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    </div>
                    <div class="group43">
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle3" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle4" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    </div>
                    <div class="group44">
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle3" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle4" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    </div>
                    <div class="group45">
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle3" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle4" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    </div>
                    <div class="group46">
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle3" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <img anima-src="./img/home-teachers-rectangle-32@2x.png" class="rectangle4" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    </div>
                    <div class="group7">
                        <div class="group6">
                            <div class="cosme">
                                Cosme
                            </div>
                            <div class="lorizon">
                                <span class="span1">LORIZON</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group5">
                            <div class="antoine">
                                Antoine
                            </div>
                            <div class="martel">
                                <span class="span1">MARTEL</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group51">
                            <div class="arthur">
                                Arthur
                            </div>
                            <div class="grynblat">
                                <span class="span1">GRYNBLAT</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group52">
                            <div class="alexandre">
                                Alexandre
                            </div>
                            <div class="hamard">
                                <span class="span1">HAMARD</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group53">
                            <div class="garance">
                                Garance
                            </div>
                            <div class="hamard">
                                <span class="span1">HAMARD</span><span class="span2"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="group71">
                        <div class="group6">
                            <div class="hippolyte">
                                Hippolyte
                            </div>
                            <div class="richard">
                                <span class="span1">RICHARD</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group5">
                            <div class="arthur">
                                Arthur
                            </div>
                            <div class="mouly">
                                <span class="span1">MOULY</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group51">
                            <div class="celeste">
                                Celeste
                            </div>
                            <div class="dessart">
                                <span class="span1">DESSART</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group52">
                            <div class="lou">
                                Lou
                            </div>
                            <div class="gratton">
                                <span class="span1">GRATTON</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group53">
                            <div class="nicolas">
                                Nicolas
                            </div>
                            <div class="blaise">
                                <span class="span1">BLAISE</span><span class="span2"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="group72">
                        <div class="group6">
                            <div class="emilie">
                                Emilie
                            </div>
                            <div class="hung">
                                HUNG
                            </div>
                        </div>
                        <div class="group5">
                            <div class="olympe">
                                Olympe
                            </div>
                            <div class="lepelley">
                                LEPELLEY
                            </div>
                        </div>
                        <div class="group51">
                            <div class="marta">
                                Marta
                            </div>
                            <div class="cortelessi">
                                <span class="span1">CORTELESI</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group52">
                            <div class="juliette">
                                Juliette
                            </div>
                            <div class="aladjidi">
                                <span class="span1">ALADJIDI</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group53">
                            <div class="luce">
                                Luce
                            </div>
                            <div class="rodriquez">
                                <span class="span1">RODRIGUEZ</span><span class="span2"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="group73">
                        <div class="group6">
                            <div class="matthieu">
                                Matthieu
                            </div>
                            <div class="picard">
                                <span class="span1">PICARD</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group5">
                            <div class="jean">
                                Jean
                            </div>
                            <div class="fevre">
                                FEVRE
                            </div>
                        </div>
                        <div class="group51">
                            <div class="constans">
                                Constans
                            </div>
                            <div class="salic">
                                SALIC
                            </div>
                        </div>
                        <div class="group52">
                            <div class="paloma">
                                Paloma
                            </div>
                            <div class="vila">
                                VILA
                            </div>
                        </div>
                        <div class="group53">
                            <div class="romeo">
                                Romeo
                            </div>
                            <div class="tomat">
                                TOMAT
                            </div>
                        </div>
                    </div>
                    <div class="group74">
                        <div class="group6">
                            <div class="sam">
                                Sam
                            </div>
                            <div class="teneau">
                                TENEAU
                            </div>
                        </div>
                        <div class="group5">
                            <div class="pierre">
                                Pierre
                            </div>
                            <div class="odendu2019hal">
                                <span class="span1">ODEND’HAL</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group51">
                            <div class="auguste">
                                Auguste
                            </div>
                            <div class="rota">
                                <span class="span1">ROTA</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group52">
                            <div class="ines">
                                Ines
                            </div>
                            <div class="massiani">
                                <span class="span1">MASSIANI</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group53">
                            <div class="margaux">
                                Margaux
                            </div>
                            <div class="brun">
                                <span class="span1">BRUN</span><span class="span2"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="group75">
                        <div class="group6">
                            <div class="quentin">
                                Quentin
                            </div>
                            <div class="goux">
                                <span class="span1">GOUX</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group5">
                            <div class="alexis">
                                Alexis
                            </div>
                            <div class="gerner">
                                GERNER
                            </div>
                        </div>
                        <div class="group51">
                            <div class="benjamin">
                                Benjamin
                            </div>
                            <div class="pinot">
                                <span class="span1">PINOT</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group52">
                            <div class="na353l">
                                Naël
                            </div>
                            <div class="sa317di">
                                <span class="span1">SAÏDI</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group53">
                            <div class="ludovic">
                                Ludovic
                            </div>
                            <div class="lin">
                                <span class="span1">LIN</span><span class="span2"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="group76">
                        <div class="group6">
                            <div class="ivann">
                                Ivann
                            </div>
                            <div class="ferrerri">
                                FERRERRI
                            </div>
                        </div>
                        <div class="group5">
                            <div class="tom">
                                Tom
                            </div>
                            <div class="roux">
                                ROUX
                            </div>
                        </div>
                        <div class="group51">
                            <div class="tom">
                                Tom
                            </div>
                            <div class="messeant">
                                MESSEANT
                            </div>
                        </div>
                        <div class="group52">
                            <div class="l351o">
                                Léo
                            </div>
                            <div class="berclaz">
                                <span class="span1">BERCLAZ</span><span class="span2"> </span>
                            </div>
                        </div>
                        <div class="group53">
                            <div class="c364me">
                                Côme
                            </div>
                            <div class="teinturier">
                                <span class="span1">TEINTURIER</span><span class="span2"> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group10">
                    <img anima-src="./img/agenda-teachers-rectangle-1.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="group8">
                        <div class="group3">
                            <img anima-src="./img/<?=$photo?>" class="ellipse" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <img anima-src="./img/layer_rectangle.png" class="ellipse" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>	
																												<a href="messagerieteachers.php">
                                <img anima-src="./img/messagerie-teachers-mail@2x.png" class="mail" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            </a>
                            <div class="richard">
                                <?=$secondname?>
                            </div>
                            <div class="david">
                                <?=$nickname?>
                            </div>
                        </div>
                        <div class="professeurdefran347a">
                            <?=$delegue?>
                        </div>
                    </div>
                </div>
                <div class="group13">
                    <div class="group12">
                        <div class="group11">
                            <img anima-src="./img/agenda-teachers-rectangle-2.png" class="rectangle2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="group9">
                                <div class="evenements">
                                    Evenements
                                </div>
                                <div class="cours">
                                    Cours
                                </div>
                            </div>
                        </div>
                        <div class="rectangle1">
                        </div>
                        <img anima-src="./img/courses-teachers-mute@2x.png" class="mute" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    </div>
                    <div class="group18">
                        <div class="group17">
                            <img anima-src="./img/home-teachers-rectangle-43@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="a14h25u201415h20">
                                14h25 — 15h20
                            </div>
                        </div>
                        <div class="group14">
                            <div class="rectangle1">
                            </div>
                            <div class="a2ndef">
                                2nde F
                            </div>
                            <div class="a14h25u201415h20">
                                14h25 — 15h20
                            </div>
                            <div class="m203">
                                M-203
                            </div>
                        </div>
                    </div>
                    <div class="group181">
                        <div class="group17">
                            <img anima-src="./img/home-teachers-rectangle-43@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="a15h20u201416h30">
                                15h20 — 16h30
                            </div>
                        </div>
                        <div class="group14">
                            <div class="rectangle1">
                            </div>
                            <div class="a2ndef">
                                2nde F
                            </div>
                            <div class="a15h20u201416h30">
                                15h20 — 16h30
                            </div>
                            <div class="m203">
                                M-203
                            </div>
                        </div>
                    </div>
                    <div class="group182">
                        <div class="group17">
                            <img anima-src="./img/home-teachers-rectangle-43@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="a16h30u201417h25">
                                16h30 — 17h25
                            </div>
                        </div>
                        <div class="group14">
                            <div class="rectangle1">
                            </div>
                            <div class="a1erel1">
                                1ere L1
                            </div>
                            <div class="a16h30u201417h25">
                                16h30 — 17h25
                            </div>
                            <div class="m106">
                                M-106
                            </div>
                        </div>
                    </div>
                    <div class="group183">
                        <div class="group17">
                            <img anima-src="./img/home-teachers-rectangle-43@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="a17h25u201418h20">
                                17h25 — 18h20
                            </div>
                        </div>
                        <div class="group14">
                            <div class="rectangle1">
                            </div>
                            <div class="a1erel2">
                                1ere L2
                            </div>
                            <div class="a17h25u201418h20">
                                17h25 — 18h20
                            </div>
                            <div class="m103">
                                M-103
                            </div>
                        </div>
                    </div>
                    <div class="group184">
                        <div class="group17">
                            <img anima-src="./img/home-teachers-rectangle-43@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="a14h25u201415h20">
                                14h25 — 15h20
                            </div>
                        </div>
                        <div class="group14">
                            <div class="rectangle1">
                            </div>
                            <div class="a3350meh">
                                3ème H
                            </div>
                            <div class="a12h10u201413h05">
                                12h10 — 13h05
                            </div>
                            <div class="a403">
                                A-403
                            </div>
                        </div>
                    </div>
                    <div class="group185">
                        <div class="group17">
                            <img anima-src="./img/home-teachers-rectangle-43@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="a14h25u201415h20">
                                14h25 — 15h20
                            </div>
                        </div>
                        <div class="group14">
                            <div class="rectangle1">
                            </div>
                            <div class="a3350meh">
                                3ème H
                            </div>
                            <div class="a12h10u201413h05">
                                12h10 — 13h05
                            </div>
                            <div class="a403">
                                A-403
                            </div>
                        </div>
                    </div>
                    <div class="group186">
                        <div class="group17">
                            <img anima-src="./img/home-teachers-rectangle-43@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="a14h25u201415h20">
                                14h25 — 15h20
                            </div>
                        </div>
                        <div class="group14">
                            <div class="rectangle1">
                            </div>
                            <div class="a3350meh">
                                3ème H
                            </div>
                            <div class="a12h10u201413h05">
                                12h10 — 13h05
                            </div>
                            <div class="a403">
                                A-403
                            </div>
                        </div>
                    </div>
                    <div class="group187">
                        <div class="group17">
                            <img anima-src="./img/home-teachers-rectangle-43@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="a14h25u201415h20">
                                14h25 — 15h20
                            </div>
                        </div>
                        <div class="group14">
                            <div class="rectangle1">
                            </div>
                            <div class="a3350meh">
                                3ème H
                            </div>
                            <div class="a12h10u201413h05">
                                12h10 — 13h05
                            </div>
                            <div class="a403">
                                A-403
                            </div>
                        </div>
                    </div>
                    <div class="group16">
                        <div class="group15">
                            <img anima-src="./img/messagerie-teachers-rectangle-15@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="fairelu2019appel">
                                Faire l’appel
                            </div>
                        </div>
                        <div class="group14">
                            <div class="rectangle1">
                            </div>
                            <div class="a3350meh">
                                3ème H
                            </div>
                            <div class="a12h10u201413h05">
                                12h10 — 13h05
                            </div>
                            <div class="a403">
                                A-403
                            </div>
                        </div>
                    </div>
                    <div class="encoursu2026">
                        En Cours…
                    </div>
                    <img anima-src="./img/agenda-teachers-rectangle-12.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                </div>
                <a href="logout.php"class="deconnexion">
                    <br/>Déconnexion
                </a>
                <div class="group27">
                    <img anima-src="./img/home-teachers-rectangle-50@2x.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="soumettre">
                        Soumettre
                    </div>
                </div>
                <div class="group2">
                    <img anima-src="./img/pilote-rectangle-2.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <img anima-src="./img/messagerie-teachers-schoolco2-logo@2x.png" class="schoolco2logo" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="group">
                        <div class="home">
                            Home
                        </div>
                        <div class="agenda">
                            Agenda
                        </div>
                        <a href="agendateachers.php">
                            <div class="hotspot">
                            </div>
                        </a>
                        <a href="coursesteachers.php">
                            <div class="cours">
                                Cours
                            </div>
                        </a>
                        <a href="pilote.php">
                            <div class="pilote">
                                Pilote
                            </div>
                        </a>
                    </div>
                    <img anima-src="./img/courses-teachers-rectangle-14@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script>
            anima_isHidden = function(e) {
                if (!(e instanceof HTMLElement)) return !1;
                if (getComputedStyle(e).display == "none") return !0; else if (e.parentNode && anima_isHidden(e.parentNode)) return !0;
                return !1;
            };
            anima_loadAsyncSrcForTag = function(tag) {
                var elements = document.getElementsByTagName(tag);
                var toLoad = [];
                for (var i = 0; i < elements.length; i++) {
                    var e = elements[i];
                    var src = e.getAttribute("src");
                    var loaded = (src != undefined && src.length > 0 && src != 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
                    if (loaded) continue;
                    var asyncSrc = e.getAttribute("anima-src");
                    if (asyncSrc == undefined || asyncSrc.length == 0) continue;
                    if (anima_isHidden(e)) continue;
                    toLoad.push(e);
                }
                toLoad.sort(function(a, b) {
                    return anima_getTop(a) - anima_getTop(b);
                });
                for (var i = 0; i < toLoad.length; i++) {
                    var e = toLoad[i];
                    var asyncSrc = e.getAttribute("anima-src");
                    e.setAttribute("src", asyncSrc);
                }
            };
            anima_pauseHiddenVideos = function(tag) {
                var elements = document.getElementsByTagName("video");
                for (var i = 0; i < elements.length; i++) {
                    var e = elements[i];
                    var isPlaying = !!(e.currentTime > 0 && !e.paused && !e.ended && e.readyState > 2);
                    var isHidden = anima_isHidden(e);
                    if (!isPlaying && !isHidden && e.getAttribute("autoplay") == "autoplay") {
                        e.play();
                    } else if (isPlaying && isHidden) {
                        e.pause();
                    }
                }
            };
            anima_loadAsyncSrc = function(tag) {
                anima_loadAsyncSrcForTag("img");
                anima_loadAsyncSrcForTag("iframe");
                anima_loadAsyncSrcForTag("video");
                anima_pauseHiddenVideos();
            };
            var anima_getTop = function(e) {
                var top = 0;
                do {
                    top += e.offsetTop || 0;
                    e = e.offsetParent;
                } while (e);
                return top;
            };
            anima_loadAsyncSrc();
            anima_old_onResize = window.onresize;
            anima_new_onResize = undefined;
            anima_updateOnResize = function() {
                if (anima_new_onResize == undefined || window.onresize != anima_new_onResize) {
                    anima_new_onResize = function(x) {
                        if (anima_old_onResize != undefined) anima_old_onResize(x);
                        anima_loadAsyncSrc();
                    };
                    window.onresize = anima_new_onResize;
                    setTimeout(function() {
                        anima_updateOnResize();
                    }, 3000);
                }
            };
            anima_updateOnResize();
            setTimeout(function() {
                anima_loadAsyncSrc();
            }, 200);
        </script>
        <!-- End of Scripts -->
    </body>
</html>

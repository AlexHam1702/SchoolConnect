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
$stmt = $con->prepare('SELECT nickname, secondname, photo, delegue, classe FROM students WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($nickname, $secondname, $photo, $delegue, $classe);
$stmt->fetch();
$stmt->close();
?>
<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'schoolconnect_fb';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT chatpseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 20');
$stmt->execute();
$stmt->bind_result($chatpseudo, $message);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
    <head>
					<title>SchoolConnect | Agenda</title>
        <link href="./img/lakelogo.png" rel="shortcut icon"/>
        <meta charset="utf-8"/>
        <meta content="width=1280, maximum-scale=1.0" name="viewport"/>
        <link href="./css/agenda.css" rel="stylesheet" type="text/css"/>
        <meta content="Alexandre Hamard" name="author">
        </meta>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>     
        </head>
    <body style="margin: 0;
 background: rgba(255, 255, 255, 1.0);">
        <input id="anPageName" name="page" type="hidden" value="agenda"/>
        <div class="agenda">
            <div style="width: 1280px; height: 100%; position:relative; margin:auto;">
                <div class="group21">
                    <div class="group19">
																					<div class="group20">
                            <div class="agenda1">
                                Agenda
                            </div>
                            <div class="a3emeh">
                                <?=$classe?>
                            </div>
                        </div>
                        <img anima-src="./img/agenda-rectangle.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <div class="group18">
                            <div class="group14">
                                <div class="group13">
<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=schoolconnect_fb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT type, classdevoirs, donnele, pourle, matiere, contenu, online FROM devoirs ORDER BY `devoirs`.`donnele` DESC LIMIT 4');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<div class="rectangle1"> <div class="mathematiques" > ' . htmlspecialchars($donnees['matiere']) . '</div> <div class="donnelejeudi611" >  Pour le '  . htmlspecialchars($donnees['pourle']) . '</div> <div class"fairelactivite1p" style="padding-left: 15px;padding-top: 70px;">' . htmlspecialchars($donnees['contenu']) . '</div> </div>';

}

$reponse->closeCursor();

?>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
																				
                       
                    </div>
                    <br/>
																				<br/>
																				<br/>
																				<br/>
																				<br/>
																				<br/>
																				<br/>
																				<br/>
																				<input type="date" class="javascriptcomponentscalendar"  value="dd-mm-yyyy" style="z-index: 1;position: absolute;margin-top: 50px;margin-left: 1000px;width: 200px;height: 50px;font-size: 20px;font-family: helvetica;text-align: center;">
                </div>
                <div class="group10">
                    <img anima-src="./img/cours-rectangle.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="group7">
                        <div class="group4">
                            <div class="classe">
                                Classe
                            </div>
                            <div class="a3emeh">
                                <?=$classe?>
                            </div>
                        </div>
                        <div class="group5">
                            <div class="group41">
                                <div class="moyenne">
                                    Moyenne
                                </div>
                                <div class="a1754">
                                    17,54
                                </div>
                            </div>
                        </div>
                        <div class="group6">
                            <div class="group51">
                                <div class="group41">
                                    <div class="vademecum">
                                        Vade-Mecum
                                    </div>
                                </div>
                            </div>
                            <img anima-src="./img/messagerie-checkmark-blue@2x.png" class="checkmarkblue" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        </div>
                        <a href="logout.php">
                            <div class="deconnexion">
                                Déconnexion
                            </div>
                        </a>
                    </div>
                    <div class="group8">
                        <div class="group3">
                            <img anima-src="./img/<?=$photo?>" class="ellipse" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <img anima-src="./img/layer_rectangle.png" class="ellipse" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>	
																												<a href="messagerie.php">
                                <img anima-src="./img/home-mail@2x.png" class="mail" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            </a>
                            <a href="profile.php" class="profile">
                            <div class="lorizon">
                                <?=$secondname?>
                            </div>
                            <div class="cosme">
                                <?=$nickname?>
                            </div> </a>
                        </div>
                        <div class="deleguedeclasse">
                            <?=$delegue?>
                        </div>
                    </div>
                </div>
                <div class="group12">
                    <div class="group11">
                        <img anima-src="./img/agenda-rectangle-2.png" class="rectangle7" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <div class="group9">
                            <div class="classchat">
                                Class Chat
                            </div>
                            <div class="a3emeh">
                            <?=$classe?>
                            </div>
                        </div>
                    </div>
                    <div class="rectangle">
                    </div>
                    <div class="label2">
                        <form action="minichat_post_agenda.php" method="post" style="margin-top: 6.5px;">
																								<input type="text" name="message" id="message" placeholder="Message" />
                                                                                                <input type="text" name="chatpseudo" value="<?=$nickname?>" />
                                                                                                <input type="text" name="classchat" value="<?=$classe?>" style="width: 0px;height: 0px;"/>
																								<input type="submit" value="Envoyer" style="margin-left: 392.5px;"/>
                                                                                                <img anima-src="./img/classe-line@2x.png" class="line" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" style="top: 20px;left: 2px;margin-top: 3px;margin-left: -3px;"/>
																							</form>
                    </div> <div class="messages" style="height: 520px;overflow: scroll;width: 290px;scrollbar-width: none;margin-top: 160px;margin-left: 70px;border-top-left-radius: 35px;">
                    <?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=schoolconnect_fb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT chatpseudo, classchat, message FROM minichat ORDER BY ID');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<div class="others" style="margin-bottom: 0px;"> <div class="name" style="width: 175px;margin-left: -10px;margin-bottom: 10px;background-color: #e5e5e5;color: #727272;">' . htmlspecialchars($donnees['chatpseudo']) . ' </div>'  . htmlspecialchars($donnees['message']) . '</div>';

}

$reponse->closeCursor();

?> </div>
                </div>
                <div class="group2">
                    <img anima-src="./img/messagerie-rectangle-12.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <img anima-src="./img/cours-schoolco2-logo@2x.png" class="schoolco2logo" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="group">
                        <a href="home.php">
                            <div class="home">
                                Home
                            </div>
                        </a>
                        <div class="agenda1">
                            Agenda
                        </div>
                        <a href="cours.php">
                            <div class="cours">
                                Cours
                            </div>
                        </a>
                        <a href="classe.php">
                            <div class="classe">
                                Classe
                            </div>
                        </a>
                    </div>
                    <img anima-src="./img/agenda-rectangle-10@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script>
            setInterval('loadmessages()', 2000 );
                function loadmessages() {
                    $('.messages').load('load.php');
                }
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
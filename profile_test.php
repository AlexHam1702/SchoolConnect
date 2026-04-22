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

<!DOCTYPE html>
<html>
    <head>
					<title>SchoolConnect | Profile</title>
        <link href="./img/lakelogo.png" rel="shortcut icon"/>
        <meta charset="utf-8"/>
        <meta content="width=1280, maximum-scale=1.0" name="viewport"/>
        <link href="./css/profile_test.css" rel="stylesheet" type="text/css"/>
        <meta content="Launchpad by Anima" name="author">
        </meta>
    </head>
    <body style="margin: 0;
 background: rgba(255, 255, 255, 1.0);">
        <input id="anPageName" name="page" type="hidden" value="messagerie"/>
        <div class="messagerie">
            <div style="width: 1280px; height: 100%; position:relative; margin:auto;">
                <div class="group15">
                    <div class="group19">
                        <img anima-src="./img/agenda-rectangle.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <form action="register.php" method="post" autocomplete="off">
				<input type="text" name="username" placeholder="Username" id="username" required=""><br/>
				<input type="password" name="password" placeholder="Password" id="password" required=""><br/>
				<input type="email" name="email" placeholder="Email" id="email" required=""><br/>
				<input type="submit" value="Register">
			</form>                 
                    </div>
                    
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
                            <img anima-src="./img/home-mail@2x.png" class="mail" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="lorizon">
                                <?=$secondname?>
                            </div>
                            <div class="cosme">
                                <?=$nickname?>
                            </div>
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
                    <div class="antoinemartel">
                        Antoine Martel
                    </div>
                    <div class="alexandrehamard">
                        Alexandre Hamard
                    </div>
                    <div class="moi">
                        Moi
                    </div>
                    <img anima-src="./img/cours-rectangle-2@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <img anima-src="./img/messagerie-rectangle-5@2x.png" class="rectangle2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <img anima-src="./img/home-rectangle-10@2x.png" class="rectangle3" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="donconseraenperm">
                        Donc on sera en <br />permanence de <br />11h15 a 12h10, <br />avant de manger.
                    </div>
                    <img anima-src="./img/messagerie-rectangle-7@2x.png" class="rectangle4" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <img anima-src="./img/home-rectangle-12@2x.png" class="rectangle5" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="label1">
                        Bonsoir, Ã  quelle heure <br />on commence demain ?
                    </div>
                    <div class="onapassvtnonplu">
                        On a pas SVT<br />non plus.
                    </div>
                    <img anima-src="./img/messagerie-rectangle-9@2x.png" class="rectangle6" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="label2">
                        <form action="minichat_post_messagerie.php" method="post">
																								<input type="text" name="message" id="message" placeholder="Message" />
																								<input type="text" name="chatpseudo" value="<?=$nickname?>" />
																								<input type="submit" value="Envoyer" />
																							</form>
                    </div>
                    <img anima-src="./img/classe-line@2x.png" class="line" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="madameleclercqne">
                        Madame Le Clercq<br />ne sera pas la, elle a dit<br />vendredi dernier qu'elle <br />avait une formation donc<br />on a mot de Mr Boudrie <br />pour dire qu'on <br />commence a 9h.
                    </div>
                    <img anima-src="./img/messagerie-mute@2x.png" class="mute" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="silvousplait">
                        S'il vous plait<br />:)
                    </div>
                </div>
                <div class="group14">
                    
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
                        <a href="agenda.php">
                            <div class="agenda">
                                Agenda
                            </div>
                        </a>
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

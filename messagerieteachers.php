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
        <link href="./css/messagerieTeachers.css" rel="stylesheet" type="text/css"/>
        <meta content="Launchpad by Anima" name="author">
        </meta>
    </head>
    <body style="margin: 0;
 background: rgba(255, 255, 255, 1.0);">
        <input id="anPageName" name="page" type="hidden" value="messagerieteachers"/>
        <div class="messagerieteachers">
            <div style="width: 1280px; height: 100%; position:relative; margin:auto;">
                <div class="group15">
                    <div class="group19">
                        <img anima-src="./img/messagerie-teachers-rectangle.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                        <div class="messagerieeleves">
                            Messagerie | Eleves
                        </div>
                        <div class="a3emeh">
                            3eme H
                        </div>
                    </div>
                    <img anima-src="./img/messagerie-teachers-rectangle-1@2x.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="nouveaumessage">
                        Nouveau Message
                    </div>
                </div>
                <div class="group14">
                    <div class="rectangle">
                    </div>
                    <div class="rectangle1">
                    </div>
                    <img anima-src="./img/messagerie-teachers-rectangle-2@2x.png" class="rectangle2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="rectangle3">
                    </div>
                    <div class="rectangle4">
                    </div>
                    <div class="rectangle5">
                    </div>
                    <div class="boitedereception">
                        Boite de Reception
                    </div>
                    <img anima-src="./img/messagerie-teachers-rectangle-3.png" class="rectangle6" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="group134">
                        <div class="edouardkoffikoutsa1">
                            Edouard Koffi Koutsava
                        </div>
                        <div class="resoireescoutfb1">
                            Re: Soiree Scout FB
                        </div>
                        <div class="bonjourcijointla">
                            Bonjour, <br />Ci joint la circulaire …
                        </div>
                    </div>
                    <div class="group131">
                        <div class="antoineboudrie">
                            Antoine Boudrie
                        </div>
                        <div class="premierssecours">
                            Premiers Secours
                        </div>
                        <div class="bonjourcijointla">
                            Bonjour, <br />Ci joint la circulaire …
                        </div>
                    </div>
                    <div class="group132">
                        <div class="pierregiraud">
                            Pierre Giraud
                        </div>
                        <div class="realbumphoto2019">
                            Re: Album Photo 2019
                        </div>
                        <div class="bonjourcijointla">
                            Bonjour, <br />Ci joint la circulaire …
                        </div>
                    </div>
                    <div class="group133">
                        <div class="haroldbirene">
                            Harold Birene
                        </div>
                        <div class="recroixfry2020">
                            Re: Croix-Fry 2020
                        </div>
                        <div class="bonjourcijointla">
                            Bonjour, <br />Ci joint la circulaire …
                        </div>
                    </div>
                    <div class="rectangle7">
                    </div>
                    <div class="rectangle8">
                    </div>
                    <div class="rectangle9">
                    </div>
                    <div class="edouardkoffikoutsa">
                        Edouard Koffi Koutsava | Centre Pastorale
                    </div>
                    <div class="resoireescoutfb">
                        Re: Soiree Scout FB
                    </div>
                    <div class="bonjourcijointl">
                        Bonjour,<br /><br />Ci joint, la circulaire concernant <br />la Soiree Scout FB 2019<br /><br />Vous etes pries de la remplir pour <br />le vendredi 15 novembre 2019<br /><br />Si vous venez n’oubliez pas d’apporter<br />de la nourriture ou des boissons <br /><br />Veuillez remplir la circulaire meme si vous<br />ne serez  pas present.<br /><br /><br />Edouard Koffi Koutsava <br />Resposable Pastorale,<br /><br />Bonne journée.
                    </div>
                    <div class="rectangle10">
                    </div>
                    <div class="fichiersoireescout">
                        Fichier: SoireeScoutFB2019.pdf
                    </div>
                </div>
                <div class="group2">
                    <img anima-src="./img/pilote-rectangle-2.png" class="rectangle" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <img anima-src="./img/messagerie-teachers-schoolco2-logo@2x.png" class="schoolco2logo" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                    <div class="group">
                        <a href="hometeachers.php">
                            <div class="home">
                                Home
                            </div>
                        </a>
                        <a href="agendateachers.php">
                            <div class="agenda">
                                Agenda
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
                        <div class="group141">
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
                        <div class="group141">
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
                        <div class="group141">
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
                        <div class="group141">
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
                        <div class="group141">
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
                        <div class="group141">
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
                        <div class="group141">
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
                        <div class="group141">
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
                        <div class="group151">
                            <img anima-src="./img/messagerie-teachers-rectangle-15@2x.png" class="rectangle1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="/>
                            <div class="fairelu2019appel">
                                Faire l’appel
                            </div>
                        </div>
                        <div class="group141">
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

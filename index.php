<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:wght@300&family=Raleway&family=Roboto&family=Ubuntu&display=swap"
        rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="description"
        content="Luc-Olivier YOHAN, Développeur web à la recherche d'une alternance. Rythme: 3 semaines en entreprise, 1 semaine en formation">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Luc-Olivier YOHAN: Développeur web à la recherche d'une >alternance</title>
</head>

<body>
    <div class="container-fluid">
        <!--Pages de chargement ("Luc-Olivier qui s'écrit en néons puis logo de ma tête qui apparait en grand en animation ("scale animé")postion absolute-->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#about"><img src="images/man.png">A
                                    propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#réa"> <img src="images/portfolio.png">Réalisations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#skills"><img src="images/code.png">Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#contacts" tabindex="-1"><img
                                        src="images/message.png">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--Menu avec icons animés ("A propos, Réalisation, Skills, Contacts")-->
        </header>

        <main>
            <div class="me">
                <div class="logo">
                    <img src="images/luc.png" alt="Luc-Olivier">
                    <div class="texte">
                        <p>Luc-Olivier</p>
                        <p>Yohan</p>
                        <p>Développeur web front-end</p>
                    </div>
                </div>
                <h1>Développeur web à la recherche d'une alternance</h1>
            </div>
            <!--logo de moi, mon nom dans un logo de forme géométrique animé (infinite)-->
            <!--Sur mon logo,"Je suis développeut web a la recherche d'une alternance :)"-->
            <section>
                <div class="titre">
                    <div class="barreR"></div>
                    <h2 id="about">A propos de moi</h2>
                    <div class="barreL"></div>
                </div>
                <div class="about">
                    <div class="dev">
                        <h3>I'm developper !</h3>
                        <p>Issue de l'hotellerie-restauration et de la vente.
                            Je me suis découvert une nouvelle passion..."Le Code" plus précisément tous ce qui touche
                            au front-end.
                            La cuisine m'a permis de développer mon côté créatif, l'esprit d'équipe et également la
                            gestion du stress dû aux moments de rush.
                        </p>
                        <p>Elle,la vente, m'a permis de développer mon relationelle. Que des solutions pour nos clients
                            !</p>
                        <p>Je pense que ces deux expériences m'ont permis d'améliorer mon apprentissage en tant que
                            développeur web et d'être concentré et persévérant dans ce que j'entreprend.</p>
                    </div>
                    <div class="hobbie">
                        <h3>Mes Hobbies</h3>
                        <div class="slider">
                            <img class="slide active" src="images/jeux.png">
                            <img class="slide" src="images/bd.png">
                            <img class="slide" src="images/capoeira.png">
                            <img class="slide" src="images/cuisine.png">
                        </div>
                    </div>
                </div>
                <article>
                    <p class="download"><a href="cv-luc.pdf">Télécharger mon cv</a></p>

                    <div class="titre">
                        <div class="barreR"></div>
                        <h2 id="skills">Skills</h2>
                        <div class="barreL"></div>
                    </div>
                    <div class="skills">
                        <div data-aos="fade-up-left">
                            <div class="part1">
                                <div class="pix"><img src="images/html.png" alt="html"></div>
                                <div class="pix"><img src="images/css.png" alt="html"></div>
                                <div class="pix"><img src="images/sass.png" alt="html"></div>
                                <div class="pix"><img src="images/js.png" alt="html"></div>
                            </div>
                        </div>
                        <div data-aos="fade-up-right">
                            <div class="part2">
                                <div class="pix"><img src="images/java.png" alt="html"></div>
                                <div class="pix"><img src="images/php.png" alt="html"></div>
                                <div class="pix"><img src="images/mysql.png" alt="html"></div>
                                <div class="pix"><img src="images/vue.png" alt="html"></div>
                            </div>
                        </div>
                        <div data-aos="fade-up-left">
                            <div class="part3">
                                <div class="pix"><img src="images/react.png" alt="html"></div>
                                <div class="pix"><img src="images/angular.png" alt="html"></div>
                                <div class="pix"><img src="images/py.png" alt="html"></div>
                                <div class="pix"><img src="images/ps.png" alt="html"></div>
                                <div class="pix"><img src="images/boots.png" alt="html"></div>
                            </div>
                        </div>

                    </div>


                    <div class="titre">
                        <div class="barreR"></div>
                        <h2 id="réa">Réalisations</h2>
                        <div class="barreL"></div>
                    </div>
                    <div class="realisation">
                        <p>Certains de mes projets, ont été réaliser dans le cadre de ma formation.</p>
                        <p class="lien">Retrouvez-les et plus encore sur mon <a href="https://github.com/Luco06">Github</a></p>
                        <div data-aos="zoom-in">
                            <div class="part1">
                                <img class="pix" src="images/femacom.png" alt="">
                                <img class="pix" src="images/Bannière-Cartier.png">
                                <img class="pix" src="images/jo.png" alt="">
                            </div>
                        </div>
                        

                        <div class="part2">
                            <div data-aos="zoom-in-right">
                                <div class="pix1">
                                    <video controls autoplay muted src="videos/dt1.mp4" alt=""></video>
                                </div>
                            </div>

                            <div data-aos="zoom-in-left">
                                <div class="pix2">
                                    <video controls autoplay muted class="pix2" src="videos/psd.mp4" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </article>
            </section>
            <!--A propos
            télecharger mon CV (border solid)
            A propos de moi
            formations, skills 
            Réalisation (border-radius: 50%)
            -->

            <footer>
                <div class="titre">
                    <div class="barreR"></div>
                    <h2>Contact</h2>
                    <div class="barreL"></div>
                </div>

                <div class="contact">
                    <div class="formulaire">
                        <h3>Envoyer moi un message</h3>
                        <form action="index.php" method="post">
                            <div class="ident">
                                <input type="text" name="name" placeholder="Nom/Prénom" required>
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="text" name="sujet" placeholder="sujet" required>
                            </div>
                            <div class="msg">
                                <textarea name="message" id="" cols="30" rows="10" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit">Envoyer</button>
                        </form>
                    </div>
                    <div class="icons">
                        <h3>Mes réseaux</h3>
                        <li><a href="https://github.com/Luco06"><img class="icon" src="images/github.png"></li></a>
                        <li><a href="https://fr.linkedin.com/in/luc-olivier-yohan-837073159"><img class="icon"
                                    src="images/linkedin.png"></li></a>
                    </div>
                </div>
                <span>© 2021 by Luc-Olivier YOHAN</span>
                <!--Contact( Gmail pro)
                Résaux sociau-->
            </footer>
        </main>


    </div>
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
        <?php 
        $expéditeur = $_POST['email'];
        $to = 'lucolivieryohan@gmail.com';
        $sujet = $_POST['sujet'];
        $name = $_POST['name'];
        $message = $_POST['message'];

        mail($to, $sujet, $expéditeur,$message);
?>
</body> 
</html>
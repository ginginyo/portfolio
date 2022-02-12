<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/style.css">

    <title>Home</title>
</head>
<body>

    <?php include("./template/header.php"); ?>

    <main>
        <!--  About me  -->
        <article id="about-me" class="p-5 container-fluid d-flex flex-column justify-content-center align-items-center bg-dark text-white vh-half">
            <header>
                <div class="">
                    <h1>A propos de moi</h1>
                </div>
            </header>
            <section class="my-5">
                <div class="text-center">
                    <p>Diplômé en systèmes électroniques et embarqués, intermittent musicien la nuit tombée, j'ai décidé maintenant de porter
                        mon attention vers le développement informatique. C'est un domaine très vaste et porteur de notre futur, que ce soit
                        dans l'IA, la VR, la Cybersec', le Big Data, le Cloud, etc... C'est pourquoi j'ai entrepris une formation de développeur web
                        qui est ma première porte dans le monde du numérique.</p>
                </div>
            </section>
        </article>


        <!--  Mes projets  -->
        <article id="projects" class="p-5">
            <header>
                <div class="d-flex justify-content-center">
                    <h1>Mes projets</h1>
                </div>
            </header>

            <section class="my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6 pe-3">
                            <figure><img class="img-fluid shadow" src="/img/website.png" alt="desc img-1"></figure>
                        </div>
                        
                        <div class="col-6 ps-3">
                            <header>
                                <div class="row mb-3">
                                    <div class="col">
                                        <h2>Portfolio</h2>
                                    </div>
                                </div>
                            </header>

                            <div class="row mb-3">
                                <div class="col">
                                    <p>Il consiste à me faire découvrir et manipuler les langages de programmation Web tel que HTML, CSS (framework bootstrap) et JS pour la vue d'un site. Déployer le portfolio sur le web.</p>
                                    <p>Le portfolio présentera mes projets en cours et à venir !</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <h2>Technologies utilisées</h2>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-3">
                                    <img class="logo-techno" src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="logo HTML">
                                </div>
                                <div class="col-3">
                                    <img class="logo-techno" src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="logo CSS">
                                </div>
                                <div class="col-3">
                                    <img class="logo-techno" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg" alt="logo JS">
                                </div>
                                <div class="col-3">
                                    <img class="logo-techno" src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" alt="logo BS">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6 pe-3">
                            <header>
                                <div class="row mb-2">
                                    <div class="col">
                                        <h2>Site de location de vacances</h2>
                                    </div>
                                </div>
                            </header>

                            <div class="row mb-3">
                                <div class="col">
                                    <p>Ce projet a pour but de de manipuler Javascript pour le côté Client et Serveur.</p>
                                    <p>Au niveau du client, j'ai fait de la manipulation de DOM et intéragit avec le serveur avec l'API Fetch utilisant
                                        le protocole AJAX. Je me suis basé sur un template pour plus me focaliser sur la relation Client-Serveur
                                        et le transfert des données à travers les divers couches, le but ici n'était pas de designer les vues du site.
                                    </p>
                                    <p>Au niveau du serveur, j'ai utilisé MySQLWorkbench pour stocker mes données préalablement écrites en dur dans
                                        un fichier. Les contrôleurs vont recevoir les requêtes du client et procéder à envoyer une réponse suivant les
                                        données retirées de la BDD. Pour la partie authentification de l'administrateur, un token JWT est généré lors de
                                        la validation de ses identifiants et sera stocké dans un cookie. Le cookie sera transféré dans le header des
                                        requêtes HTTP.
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-2">
                                    <img class="logo-techno" src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="logo HTML">
                                </div>
                                <div class="col-2">
                                    <img class="logo-techno" src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="logo CSS">
                                </div>
                                <div class="col-2">
                                    <img class="logo-techno" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg" alt="logo JS">
                                </div>
                                <div class="col-2">
                                    <img class="logo-techno" src="https://upload.wikimedia.org/wikipedia/commons/6/64/Expressjs.png" alt="logo EXPRESS">
                                </div>
                                <div class="col-4">
                                    <img class="logo-techno" src="https://atomrace.com/blog/wp-content/uploads/2016/03/jwt-json-web-token-avec-angular-js.png" alt="logo JWT">
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-6 ps-3">
                            <figure><img class="img-fluid shadow" src="https://mdbootstrap.com/img/Photos/Others/images/77.jpg" alt="desc img-1"></figure>
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <!-- skillz -->
        <article id="skills" class="p-5 bg-light text-dark">
            <?php include("./content/skill.php"); ?>
        </article>

    </main>

    <?php include_once("./template/footer.php") ?>
</body>
</html>

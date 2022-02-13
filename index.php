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
                <h1>A propos de moi</h1>
            </header>
            <section class="my-5">
                <div class="text-center">
                    <p>Diplômé en systèmes électroniques et embarqués, intermittent musicien la nuit tombée, j'ai décidé maintenant de porter
                        mon attention vers le développement informatique. C'est un domaine très vaste et porteur de notre futur, que ce soit
                        dans l'IA, la VR, la Cybersec', le Big Data, le Cloud, etc... C'est pourquoi j'ai entrepris une formation de développeur web
                        qui est ma première porte dans le monde du numérique.
                    </p>
                </div>
            </section>
        </article>


        <!--  Mes projets  -->
        <article id="projects" class="mt-5">
            <header>
                <div class="d-flex justify-content-center">
                    <h1>Mes projets</h1>
                </div>
            </header>

            <section class="my-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col px-5">
                            <figure>
                                <img class="img-fluid shadow" src="/img/website.png" alt="personal website image">
                            </figure>
                        </div>

                        <div class="col px-5">
                            <div class="d-flex justify-content-center">
                                <header>
                                    <h2>Website personnel</h2>
                                </header>
                            </div>

                            <div class="mt-3">
                                <p class="lh-lg">Ce projet personnel consiste à me faire découvrir et manipuler les langages de programmation Web tel
                                    que HTML, CSS (framework Bootstrap). Utiliser JS pour la manipulation du DOM et les requêtes AJAX pour
                                    actualiser la vue du website. Gestion côté serveur avec PHP. Déployer le website sur la plateforme Heroku
                                    avec MySQL comme BDD.
                                </p>
                                <p>Le website présentera mes projets en cours et à venir !</p>
                            </div>

                            <div class="mt-5">
                                <div class="d-flex justify-content-center">
                                    <h4 class="text-purple">Technologies utilisées</h4>
                                </div>

                                <div class="row mt-4">
                                    <div class="col d-flex justify-content-center">
                                        <img class="logo-techno" src="/img/js-red.png" alt="logo JS">
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <img class="logo-techno" src="/img/php-red.png" alt="logo PHP">
                                    </div>

                                    <div class="col d-flex justify-content-center">
                                        <img class="logo-techno" src="/img/html5-red.png" alt="logo HTML">
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <img class="logo-css" src="/img/css3-red.png" alt="logo CSS">
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <img class="logo-techno" src="/img/bootstrap-red.png" alt="logo BS">
                                    </div>
                                </div>
                            </div>
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
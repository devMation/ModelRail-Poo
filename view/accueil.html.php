<style>
.card:hover {
    transform: scale(1.1);
    /* Fait grossir la carte de 10% */
    transition: transform 0.5s ease;
    /* Ajoute une transition fluide */
}

#btn:hover {
    transform: scale(1.3);
    /* Fait grossir la carte de 10% */
    transition: transform 0.8s ease;
    /* Ajoute une transition fluide */
}

/* #testAnim {
    height: 50px;
    width: 50%;
} */

img {
    height: 50%;
}
</style>
<div id="testAnim">
    <img src="../pictures/animes.png" alt="">
</div>
<div class="container ">
    <h1 class="text-center text-uppercase">Bienvenue sur Modelorail</h1>
    <p class="text-center">Découvrez nos maquettes de trains et locomotives rares.</p>
    <p>"Amine, c'est moi, un passionné inconditionnel des machines
        ferroviaires depuis mon plus jeune âge. Mon amour pour les locomotives à vapeur, les wagons
        historiques et les réseaux ferroviaires est sans égal. À chaque occasion, je me plonge dans
        l'univers fascinant du modélisme ferroviaire, recréant avec minutie des paysages pittoresques,
        des gares animées et des lignes sinueuses. "</p>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9"
                style="border-radius: 15px; overflow:-75 hidden; box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);">
                <video id="container" class="embed-responsive-item" controls style="width: 100%;">
                    <source src="../pictures/videoAccueil.mp4" autoplay loop type="video/mp4">
                    Votre navigateur ne supporte pas la lecture de vidéo.
                </video>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-text text-muted">"C'est pour cela que j'ai décidé de monter mon
                        entreprise pour vendre des maquettes ferroviaires et partager ma passion avec le monde. Je veux
                        offrir aux amateurs et aux passionnés la possibilité de recréer chez eux l'atmosphère
                        enchanteresse des chemins de fer à travers des modèles réduits de qualité. Chaque maquette que
                        je propose est le fruit de mon dévouement et de mon amour pour les trains, et je souhaite que
                        chacun puisse ressentir cette même passion en contemplant ces merveilles miniatures. Mon
                        entreprise n'est pas seulement un moyen de commerce, mais aussi une plateforme pour partager mon
                        enthousiasme, inspirer d'autres passionnés et rassembler une communauté dédiée à la magie
                        intemporelle des trains"</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="container" class="d-flex justify-content-around flex-wrap w-75 mx-auto mt-5">
    <?php foreach ($articles as $article) : ?>
    <div class="card shadow p-3 m-3 bg-body-tertiary rounded" style="width: 18rem;">
        <img src="<?= htmlspecialchars($article['image']) ?>" class="card-img-top card-img-top-custom"
            alt="<?= htmlspecialchars($article['nom']) ?>">
        <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title"><?= htmlspecialchars($article['nom']) ?></h5>
            <!-- <p class="card-text"><?= htmlspecialchars($article['description']) ?></p> -->
            <p class="card-text border border-warning text-warning p-2 text-center"><strong>Prix:
                </strong><?= htmlspecialchars($article['prix']) ?> €</p>
            <div class="d-flex justify-content-between mt-auto">
                <a href="../controller/detailController.php?id=<?= $article['id'] ?>" id="btn"
                    class="btn btn-warning">Détail</a>
                <a href="#=<?= $article['id'] ?>" class="btn btn-danger" id="btn">Commander</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
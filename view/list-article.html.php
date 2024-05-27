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
            <div class="d-flex justify-content-between p-2">
                <a href="../controller/updateController.php?id=<?= $article['id'] ?>"
                    class="btn btn-warning">Modifier</a>
                <a href="../controller/delete.controller.php?id=<?= $article['id'] ?>"
                    class="btn btn-danger">Supprimer</a>
            </div>
            <div class="text-center m-3">


                <a href="../controller/detailController.php?id=<?= $article['id'] ?>" class="btn btn-warning">Détail</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
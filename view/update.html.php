<div class="encadrement">
    <?php

    foreach ($articlesGet  as $get) :


    ?>
    <h1 class="text-center">Modifier un article</h1>
    <form action="../controller/updateController.php" method="post" class="d-flex flex-column mb-2 w-50 mx-auto "
        style="margin-top: 6%;">

        <input type="" name="id" hidden value="<?= $get['id'] ?>">
        <label for="nomArticle">Nom de l'article</label>
        <input type="text" name="nom" id="nomArticle" value="<?= $get['nom'] ?>">
        <label for="description">Description de l'article</label>
        <textarea name="description" id="description" rows="8"
            placeholder="Description de l'article"><?= $get['description'] ?></textarea>
        <label for="prix">Prix € TTC</label>
        <input type="number" name="prix" id="prix" class="w-25" placeholder="99.99€" value="<?= $get['prix'] ?>">
        <label for="picture">Image</label>
        <input type="url" name="image" id="picture" value="<?= $get['image'] ?>">
        <input type="submit" value="Modifier" class="w-75 mx-auto m-4">
    </form>
    <?php endforeach; ?>
</div>
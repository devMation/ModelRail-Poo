 <div class="encadrement">
     <form action="../controller/ajoutController.php" method="post" class="d-flex flex-column mb-2 w-50 mx-auto "
         style="margin-top: 6%;">
         <h1 class="text-center text-uppercase">Ajouter un article</h1>
         <label for=" nomArticle">Nom de l'article</label>
         <input type="text" name="nom" id="nomArticle">
         <label for="description">Description de l'article</label>
         <textarea name="description" id="description" rows="8"></textarea>
         <label for=" prix">Prix € TTC</label>
         <input type="number" name="prix" id="prix" class="w-25">
         <label for="picture">Image</label>
         <input type="text" name="image" id="picture">
         <button type="submit" class="btn btn-success m-3 w-75 mx-auto">Ajouter le produit</button>

     </form>
 </div>
 </div>
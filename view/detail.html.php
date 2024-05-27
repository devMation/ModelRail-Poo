 <section class="py-5 mx-auto border border-danger m-4 " style="background-color: white; width: 70%; ">
     <div class="container px-4 px-lg-5 my-5">
         <div class="row gx-4 gx-lg-5 align-items-center">
             <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                     src="<?= htmlspecialchars($article['image']) ?>" class="img-fluid rounded-start"
                     alt="<?= htmlspecialchars($article['nom']) ?>"></div>
             <div class="col-md-6">

                 <h5 class="display-5 fw-bolder"><?= htmlspecialchars($article['nom']) ?></h5>
                 <div class="fs-5 mb-5">
                     <span class="text-decoration-line-through">$45.00</span>
                     <span>Prix <?= htmlspecialchars($article['prix']) ?> €</span>
                 </div>
                 <p class="lead"><?= htmlspecialchars($article['description']) ?></p>
                 <div class="d-flex">
                     <input class="form-control text-center me-3" name="quantity" id="inputQuantity" type="num"
                         value="1" style="max-width: 3rem" />
                     <button class="btn btn-outline-success flex-shrink-0" type="button">
                         <i class="bi-cart-fill me-1"></i>
                         Commander
                     </button>
                 </div>
             </div>
         </div>
     </div>
 </section>
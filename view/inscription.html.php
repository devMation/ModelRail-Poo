 <!-- //class='text-center text-white text-uppercase -->
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-6">
             <?php
                if (!empty($messPassword)) {
                    echo "<p class='text-white text-center bg-success p-3'>$messPassword</p>";
                }
                ?>

             <div class="form_Inscription">
                 <?php if (isset($existCompte)) {
                        echo "<p class='text-center text-white bg-danger p-3'>$existCompte</p>";
                    } ?>
                 <h2 class="text-center mb-4">
                     Inscription au
                     guichet de la
                     vapeur
                 </h2>
                 <form method="POST" id="form_Inscription">

                     <div class=" form-group">
                         <label for="pseudo">Pseudo</label>
                         <input type="text" class="form-control" name="pseudo" id="pseudo"
                             placeholder="Entrez votre pseudo" required>
                     </div>

                     <div class="form-group">
                         <label for="email">Votre email Cheminos</label>
                         <input type="text" class="form-control" name="email" id="email"
                             placeholder="Entrez Votre email" required>
                     </div>
                     <div class="form-group">
                         <label for="Password"> Mot de passe</label>
                         <input type="text" class="form-control" name="password" id="password"
                             placeholder="Mot de passe" required>

                     </div>
                     <div class="form-group">
                         <label for="Password"> Confirmer Mot de passe</label>
                         <input type="text" class="form-control" name="passwordConfirm" id="passwordConfirm"
                             placeholder="Mot de passe" required>

                     </div>
                     <input type="submit" name="ok" value="Prochain quai " class="w-100 mx-auto m-3" require>
                     <?php if (isset($message)) {


                            echo "<p class='text-white text-center bg-success p-3 btn-warning'>$message</p> <a class='text-center ' href='../CompteClient/connexion.php'>Connecter Vous</a> ";
                            $page;
                        }



                        ?>
                 </form>
             </div>

         </div>
     </div>
 </div>

 <script src="../InscriptionUser/inscripYoupi.js">

 </script>
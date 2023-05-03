<?php

require __DIR__ . '/../src/boostrap.php';
require_login();
?>

<?php view('header', ['title' => 'Dashboard']) ?>
<p><a href="logout.php" role="button" class="btn btn-primary " style="background-color: #8167a9; border-color: #8167a9; ">Logout </a></p>


<?php
/*
session_start();
if(!isset($_SESSION['user'])){
        header('Location : index.php');
    }*/
    $_SESSION['donnees']=[
        'titre' => [],
        'emis' => [],
        'recu' => [],
    ];

?>

  <?php view('header', ['title' => 'Landing']); ?>

        <div class="container">
            
            <div class="row style ">
                <div class="row">
                    <p class="text-center fs-2 text-secondary  mt-3 mb-3  w-100">
                        Bienvenue <?= current_user() ?>
                    </p>
                </div>


                <div class=" row">

                    <div class="card w-50" >
                        <img src="t11.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Effectuer un suivi Statistique</h5>
                            <p class="card-text">Afficher les statistiques des paquets en entree et sortie dans votre ordinateur sur un période donnée</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSuivi">
                                Suivi
                            </button>
                        </div>
                    </div>
                    <div class="card w-50" >
                        <img src="t22.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Voir les paquets enregistrés</h5>
                            <p class="card-text">Retouvez les dernieres statistiques effectuées via notre application</p>
                            <a href="paquetsEnregistres.php" role="button" class="btn btn-primary " style="background-color: #8167a9; border-color: #8167a9; ">Voir </a>
                        </div>
                    </div>
                    

                </div>

                   
                    <!-- Modal -->
                    <div class="modal fade" id="ModalSuivi" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Entrez la durée</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action ="suiviPaquet.php" method="get">
                            <select class="form-select" aria-label="Default select example" name ="duree">
                                <option selected value="1">1 min</option>
                                <option value="3">3 min</option>
                                <option value="5">5 min</option>
                                <option value="10">10min</option>
                            </select>
                                      
                            <button type="submit" class="btn btn-primary" style="background-color: #8167a9; border-color: #8167a9;">Envoyer</button>
                        </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                        </div>
                    </div>
                    </div>         
            </div>
           
        </div>
        </script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">

        </script>  

        <br><br>
            <?php view('footer') ?>
          

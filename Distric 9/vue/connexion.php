<img width="100%" height="670" src="images/imgfondco.jpg" />
<div class="position-absolute bottom-0 top-0 start-50 translate-middle-x">
    <div style="margin-top:100px;">
        <?= Alerts::getFlash(); ?>

        <?php if (isset($_SESSION['lol'])) { header('Location: compte'); 
                  }else{
            ?>
    </div>
</div>

<!-- connexion-->

<div>
    <form method="post" action="">
        <div class="position-absolute bottom-0 top-50 start-50 translate-middle-x">
            <center>
                <div class="position_relative">

                    <h1 style="color:#FFFFFF;margin-top:-100px;">Vivez une experience immersive</h1>
                    <form method="post" action="">
                        <div class="mb-3 form-group">
                            <input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off" class="form-control" value="<?php if (isset($_POST['pseudo'])) { echo $_POST['pseudo']; } ?>">
                        </div>
                        <div class="mb-3 form-group">
                            <input type="password" name="mdp" placeholder="Mot de passe" autocomplete="off" class="form-control">
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <button type="submit" name="connexion" class="btn btn-warning" style="margin-top:20px;">Se Connecter</button>

                            </br>
</form>
                        </div>
                        <p style="color:#FFFFFF;"> Vous n'avez pas de compte ? <a class="btn btn-outline-light" href="inscription">S'inscrire !</a></p>
                    

                    <?php
        }
        ?>


                </div>



            </center>

    </form>
</div>
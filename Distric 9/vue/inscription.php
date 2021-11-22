<img width="100%" height="600" src="images/imgprofil.png" />
<div class="container-fluid">
    <div class="row" style="background:black;">
        <div>
            <h5 style="color:#FFFFFF;margin-left:30px;">Avec un compte D9, vous pouvez :</h5>
            </br>

        </div>
        <div class="col-7">
            <center>
                <h5 style="color:#FFFFFF;float: left;margin-left:30px;">
                    - Recenser les salles que vous avez jouées et vos records sur celles ci.</h5>
                <h5 style="color:#FFFFFF;float: left;margin-left:30px;">
                    - Noter et évaluer les salles que vous avez jouées</h5>
                <h5 style="color:#FFFFFF;float: left;margin-left:30px;">
                    - Créer une todo-list des salles que vous souhaitez jouer</h5>
            </center>
            <h5 style="color:#FFFFFF;float: left;margin-left:30px;">
                - Partager la liste des salles que vous avez jouées et/ou de celles que vous souhaitez jouer avec vos proches </h5>
            <center>
                <h5 class="" style="color:#FFFFFF;float: left;margin-left:30px;">
                    Il suffit de quelques secondes pour créer son compte !
                </h5>

            </center>



        </div>

    </div>
    <div class="row" style="background:black;">

        <div class="col-6">

            <center>
                </br>
                <h3 style="color:#FFFFFF;margin-top:50px;">
                    Mon Compte D9
                    </br>
                    </br>
                </h3>
                <h5 style="color:#FFFFFF;margin-top:10px;">
                    Vos imformations personelles*
                </h5>
                <div class="row" style="background:black;">
                    <div class="col-6">
                        <img weight="100" height="100" src="images/addimg.png" />
                    </div>
                    <div class="col-6">
                        </br>
                        </br>
                        <button type="submit" name="changerimg" class="btn btn-warning">AJOUTER UNE IMAGE</button>
                    </div>
                </div>

            </center>
        </div>
        <div class="col-6">


        </div>
    </div>
    <div class="row form-group" style="background:black;">

        <div class="col-6 form-group">
            <form>
                <div class="row form-group" style="background:black;margin-left:30px;">

                    <div class="mb-3 form-group col-6">
                        <input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off" class="form-control" value="<?php if (isset($_POST['pseudo'])) { echo $_POST['pseudo']; } ?>" required>
                    </div>
                    <div class="mb-3 form-group col-6">
                        <input type="text" name="firstName" placeholder="Prénom" autocomplete="off" class="form-control" value="<?php if (isset($_POST['firstName'])) { echo $_POST['firstName']; } ?>" required>
                    </div>
                    <div class="mb-3 form-group col-6">
                        <input type="text" name="lastName" placeholder="Nom" autocomplete="off" class="form-control" value="<?php if (isset($_POST['lastName'])) { echo $_POST['lastName']; } ?>" required>
                    </div>
                    <div class="mb-3 form-group col-6">
                        <input type="text" name="datenaiss" placeholder="AAAA-MM-JJ" autocomplete="off" class="form-control" value="<?php if (isset($_POST['datenaiss'])) { echo $_POST['datenaiss']; } ?>" required>
                    </div>
                    <div class="mb-3 form-group col-6">
                        <input type="text" name="telephone" placeholder="**********" autocomplete="off" class="form-control" value="<?php if (isset($_POST['telephone'])) { echo $_POST['telephone']; } ?>" required>
                    </div>
                    <div class="mb-3 form-group col-6">
                        <input type="email" name="email" placeholder="Adresse Email" autocomplete="off" pattern="^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,6}$" class="form-control" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; } ?>" required>
                    </div>
                    <div class="mb-3 form-group col-6">
                        <input type="password" name="mdp" placeholder="Mot de passe" class="form-control" minlength="8" required>
                    </div>
                    <div class="mb-3 form-group col-6">
                        <input type="password" name="mdp2" placeholder="Confirmez votre mot de passe" class="form-control" required>
                    </div>

                    <div class="col-12" style="margin-left:50px;">

                        <div>
                            <input type="checkbox" id="newsletters" name="newsletters">
                            <label style="color:#FFFFFF;" for="newsletters">Je ne souhaite pas recevoir les newsletters de DISTRICT 9
                                par sms et par email.

                            </label>
                        </div>


                        <div>
                            <input type="checkbox" id="cdt" name="cdt" checked>
                            <label style="color:#FFFFFF;" for="cdt">En cochant cette case, j'accepte et je reconnais avoir pris connaissance des
                            </label><label style="color:#FFFFFF;" for="cdt"> CONDITONS GENERALES DE VENTE et de LA NOTICE DONNEES PERSONELLES.
                            </label>
                        </div>

                    </div>

                    <form method="post" action="">
                        <div class="d-flex justify-content-center mb-3" minlength="8" style="margin-top:30px;" required>
                            <button type="submit" name="signup" class="btn btn-warning btn-lg active fw-bold">Créer un compte</button>
                        </div>
                    </form>
                    </br>
                </div>
        </div>

        <div class="col-6">

            <div class="row" style="background:#EBD1B2;border-radius: 47px;">
                <div class="col-5">

                    <img src="images/cxfb.png" weight="50" height="50" style="margin-top:20px;margin-bottom:20px;margin-left:80px;">

                </div>
                <div class="col-5">
                    <center>
                        <h4 style="margin-top:30px;margin-bottom:10px;margin-right:70px;">
                            Connexion avec Facebook</h4>
                    </center>
                </div>
            </div>
            </br>
            <div class="row" style="background:#EBD1B2;border-radius: 47px;">
                <div class="col-5">

                    <img src="images/cxgg.png" weight="50" height="50" style="margin-top:20px;margin-bottom:20px;margin-left:80px;">

                </div>
                <div class="col-6">
                    <center>
                        <h4 style="margin-top:30px;margin-bottom:10px;margin-right:70px;">
                            Connexion avec Google</h4>
                    </center>
                </div>
            </div>
            </br>
            <div class="row" style="background:#EBD1B2;border-radius: 47px;">
                <div class="col-6">

                    <img src="images/cxapple.png" weight="55" height="55" style="margin-top:20px;margin-bottom:20px;margin-left:80px;">

                </div>
                <div class="col-6">
                    <center>
                        <h4 style="margin-top:30px;margin-bottom:10px;margin-right:70px;">
                            Connexion avec Apple </h4>
                    </center>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-6 justify-content-center" style="margin-left:70px;">

                </br>
                </br>
                <h3 style="color:#FFFFFF;">Enregistrer un moyen de paiement :</h3>
                </br>

                <input type="checkbox" id="cartepaye" name="cartepaye" style="transform: scale(2);margin-right:20px;">
                <img src="images/grpcarte.png">
                </br>
                </br>
                <input type="checkbox" id="paypol" name="paypol" style="transform: scale(2);margin-right:20px;">
                <img src="images/imgpaypol.png">
                </br>
                </br>

              
                    <input type="checkbox" id="payeesp" name="payeesp" style="transform: scale(2);margin-right:20px;"><label style="color:#FFFFFF;font-size: 2em;">Paiement sur place</label>
              

            </div>
            <div class="col-6">

            </div>
            <center>
                </br>
                </br>
                </br>
                <a class="btn btn-outline-warning" href="deconnexion.php">Deconnexion</a>
                </br>
                </br>
                </br>
            </center>
        </div>
    </div>
</div>
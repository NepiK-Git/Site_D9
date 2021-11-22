<img width="100%" height="65%" src="images/yeux.png" />


<!-- pres 1 -->
<div class="container-fluid">

    <div>
        <div class="position-absolute bottom-0 top-50 start-50 translate-middle-x">
            <center>
                <div class="position_relative">
                    <h1 style="color:#FFFFFF;margin-top:-250px;">Mon profil</h1>
                </div>
            </center>

            <div class="container" style="background:white;border-radius: 10px;margin-top:250px;
">

                <div class="row">

                    <div>
                        <div class="col">
                            <?php
     echo "".$_SESSION['firstName']." ".$_SESSION['lastName']."<br>" ; ?>
                            </br>
                        </div>
                        <div class="col">
                            <?php
     echo "".$_SESSION['age']." ans <br>";
     
?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <?php
     echo "".$_SESSION['datenaiss']."" ; ?>
                        </div>
                        <div class="col">
                            <?php
     echo "".$_SESSION['telephone']."" ; ?>
                        </div>

                    </div>
                    <center>


                    </center>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-6" style="background:black;">
                <div style="margin-left:50px;">
                    <h4 style="color:#FFFFFF">Coordonnée bancaire :</h4>
                    <img src="images/pbimg.png">
                    <h5 style="color:#FFFFFF">Nom du titulaire de la carte*</h5>
                    <input type="nomcarte" class="form-control" id="inputnomcarte" placeholder="Nom Prénom ">
                    <h5 style="color:#FFFFFF">Numero de la carte*</h5>
                    <input type="nomcarte" class="form-control" id="inputnomcarte" placeholder="0343 **** **** ****">
                    <div class="row">
                        <div class="col-6">
                            <h5 style="color:#FFFFFF">Date d'expiration*</h5>
                            <input type="expiration" class="form-control" id="inputexpiration">
                        </div>
                        <div class="col-6">
                            <h5 style="color:#FFFFFF">CVC/CVV*</h5>
                            <input type="CVC" class="form-control" id="inputCVC">
                        </div>
                    </div>
                    </br>
                    </br> </br>
                    </br>
                </div>
            </div>
            <div class="col-6" style="background:black;">

                <center>
                    <div class="row" style="background:black; margin-top:60px;">
                        <div class="col-12">
                            </br>
                            </br>
                            <center>
                                <button type="submit" name="reserver" class="btn btn-warning">Ajouter un compte PayPal</button>
                            </center>
                        </div>
                        <div style="margin-top:60px;">
                            <img src="images/pbimg.png" onclick="window.location.href = 'lienPayPal';">
                        </div>
                    </div>
                </center>
            </div>




            <div class="row" style="background:black;">
                <center>

                    <button type="submit" name="modifier" class="btn btn-warning">Modifer</button>
                    </br></br>
                </center>
            </div>
            <div class="row" style="background:black;">
                <div style="background:black;margin-left:35px;">
                    <h3 style="color:#FFFFFF">Mes parties à venir :</h3>
                    <div style="background:white;border-radius: 10px;
">
                        <div class="row">

                            <div class="col-6">
                                <center>
                                    <h4>A venir ...</h4>
                                </center>
                            </div>
                            <div class="col-6">
                                <center>
                                    <h4>A venir ...</h4>
                                </center>
                            </div>

                        </div>



                    </div>
                </div>
                <div style="background:black;margin-left:35px;">
                    <h3 style="color:#FFFFFF">Mes Anciennes parties :</h3>
                    <div class="row">

                        <div class="col-6">
                            <center>
                                <h4>A venir ...</h4>
                            </center>
                        </div>
                        <div class="col-6">
                            <center>
                                <h4>A venir ...</h4>
                            </center>
                        </div>

                    </div>
                </div>
                <div style="background:black;margin-left:35px;">
                    <h3 style="color:#FFFFFF">Mes ancien coéquipiers :</h3>
                    <div class="row">

                        <div class="col-6">
                            <center>
                                <h4>A venir ...</h4>
                            </center>
                        </div>
                        <div class="col-6">
                            <center>
                                <h4>A venir ...</h4>
                            </center>
                        </div>

                    </div>
                </div>
                <div style="background:black;margin-left:35px;">
                    <h3 style="color:#FFFFFF">Mon avis District :</h3>
                    <div class="row">

                        <div class="col-6">
                            <center>
                                <h4>A venir ...</h4>
                            </center>
                        </div>
                        <div class="col-6">
                            <center>
                                <h4>A venir ...</h4>
                            </center>
                        </div>

                    </div>
                </div>
                <div style="background:black;margin-left:35px;">
                    <h3 style="color:#FFFFFF">Fidélité District 9 :</h3>
                    <div class="row">

                        <div class="col-6">
                            <center>
                                <h4>A venir ...</h4>
                            </center>
                        </div>
                        <div class="col-6">
                            <center>
                                <h4>A venir ...</h4>
                            </center>
                        </div>

                    </div>
                </div>

            </div>
            </br>
            </br>
            
  
 
        </div>
    </div>

</div>
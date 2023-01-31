<!DOCTYPE html>

<html>
  <head>
    <!--Setting up styles and the responsive factor-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Principale</title>
    <!--Importing corresponding css style file-->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="styleaccueil.css">
    <link rel ="stylesheet" href="navbar/navbar-main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="medeco.css">
    <link rel="shortcut icon" href="/views/assets/Logo-medicobot.png" />
  </head>
  <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once 'navbar/header-main.php';
      ?>
  </header>
  <body>
    <div class="container" id="first-part">
              <h1 class="title-over">MédicoBot</h1>
              <p class="text-over">A cause de la crise du covid, les médecins ainsi que les hôpitaux furent débordés. 
              Depuis cette crise, les rendez-vous inutiles chez les médecins se multiplient. De ce fait, nous avons 
              décidé de créer un produit afin de remédier à ça. Ce produit est MédicoBot, c’est le premier produit 
              créé par notre entreprise Nurse-E. MedicoBot s’apprête à révolutionner le domaine du monde médical 
              comme vous ne l’avez jamais vu.</p>
              <a href="#produit"><button class="btn-33"><span>Notre produit</span></button></a>
              <a href="/views/misc/apropos.php"><button class="btn-33"><span>A propos</span></button></a>
            </div>
    </div>
        <h1 class="titre" style="color:#274359;" id="produit">Notre produit</h1>
        <div class="produitvC">
            <h2 style="margin-left:-125px;color:#274359;">Notre capteur</h2>
            <p style="margin-left:-245px; color:#274359;">$199.95</p>
            <img src="/views/assets/capteur.jpg" style="width:300px;">
        </div>
        <div class="buttons">
            <a href="/views/medicalbot/medicobot.php">
            <button style="text-transform: uppercase;
            font-weight: bold;
            font-family: sans-serif;
            letter-spacing: 0.1em;" class="fill">Comment ça marche ?</button></a>
        </div>
        <div class="medeco">
          <div class="cube">
              <div class="a"></div>
              <div class="b"></div>
              <div class="c"></div>
              <div class="d"></div>
              <div class="e"></div>
              <div class="f"></div>
              <div class="g"></div>
              <div class="h"></div>
              <div class="i"></div>
              <div class="j"></div>
              <div class="k"></div>
              <div class="l"></div>
              <div class="m"></div>
              <div class="n"></div>
              <div class="o"></div>
              <div class="p"></div>
              <div class="q"></div>
              <div class="r"></div>
              <div class="s"></div>
              <div class="t"></div>
          </div>
          <div class="medi">
              <div class="bl" style="box-shadow: 0px 5px 25px #43B1F8;">
                <div class="medico">
                    <img src="/views/assets/Logo-medicobot.png" alt="medicobot">
                </div>
                <div class="hh">
                  <div class="pro">
                      <div class="produit">
                          <h1 style="text-transform: uppercase;
                          font-weight: bold;
                          font-family: sans-serif;
                          letter-spacing: 0.1em;">Notre produit: Medicobot</h1>
                          <h3 style="text-decoration: none;">Votre médecin généraliste de poche</h3>
                          <p class="p1">Chez Médicobot nous vous offrons un médecin généraliste directement dans votre maison.</p>    
                          <p class="p1">Acceder a vos analyse :</p>
                          <a href="/views/personalspace/client/questionnaire.php" style="text-decoration: none; color:white;"><button class="btn-38"><span>Commencer une analyse</span></button></a>
                      </div>
                  </div>
                </div>
              </div>
            <div class="ve" style="background: rgba(58, 152, 35, .5); box-shadow: 0px 5px 25px #9bc585;">
              <div class="ecolo" >
                  <img src="/views/assets/arbre.png" alt="arbre">
              </div> 
              <div class="hh">
                      <div class="produit" style="margin-left: -35vw;">
                              <h1 style="text-transform: uppercase;
                              font-weight: bold;
                              font-family: sans-serif;
                              letter-spacing: 0.1em;">L'entreprise: Nurse-E</h1>
                              <h3 style="text-decoration: none;">La startup révolutionnaire</h3>
                              <p class="p1">Avec l'informatique, aujourd'hui un domaine extrémement convoité, il est aussi malheureusement polluant. C'est pourquoi nous cherchons des initiative
                              pour réduire notre impact sur l'environnement en s'engageant sur des initiatives écologique comme planter des arbres ! </p>
                              </p>
                              <p class="p1">Voir votre arbre en direct:</p>
                              <a href="./personalspace/ecologie-arbre.php" style="text-decoration: none; color:white;"><button class="btn-34"><span>Votre arbre</span></button></a>
                      </div>          
              </div> 
            </div>
          </div>
        </div>
          <div class="cub">
              <div class="A"></div>
              <div class="B"></div>
              <div class="C"></div>
              <div class="D"></div>
              <div class="E"></div>
              <div class="F"></div>
              <div class="G"></div>
              <div class="H"></div>
              <div class="I"></div>
              <div class="J"></div>
              <div class="K"></div>
              <div class="L"></div>
              <div class="M"></div>
              <div class="N"></div>
              <div class="O"></div>
              <div class="P"></div>
              <div class="Q"></div>
              <div class="R"></div>
              <div class="S"></div>
              <div class="T"></div>
          </div>
        <div class="white">
          <div class="qui">
              <h1 style="color:#274359;" id="face">Qui sommes-nous ?</h1>
          </div>
          <div class="container3">
              <div class="box">
                <div class="imgBx">
                  <img src="/views/assets/Vincent.jpg">
                </div>
                <div class="content">
                  <div>
                    <h2>Vincent YAP</h2>
                    <p>Le bon back-end développeur de l'équipe de choque, a enchainé beaucoup trop de nuits blanches
                    </p>
                  </div>
                </div>
              </div>
              <div class="box">
                <div class="imgBx">
                  <img src="/views/assets/Junior.jpg">
                </div>
                <div class="content">
                  <div>
                    <h2>Junior YAMEUNDJEU TITCHEU</h2>
                    <p>Le stressé de la vie, et qui veut que des croissants
                    </p>
                  </div>
                </div>
              </div>
              <div class="box">
                <div class="imgBx">
                  <img src="/views/assets/Clem.jpg">
                </div>
                <div class="content">
                  <div>
                    <h2>Clementine DEBEUGNY</h2>
                    <p>La dev front-end, a bien enchainée des nuits blanches pour ce site de qualité
                    </p>
                  </div>
                </div>
              </div>
              <div class="box">
                <div class="imgBx">
                  <img src="/views/assets/Leo.jpg">
                </div>
                <div class="content">
                  <div>
                    <h2>Léo ZERBIB</h2>
                    <p>L'ambivalent de l'équipe, front-end et back-end hehe
                    </p>
                  </div>
                </div>
              </div>
              <div class="box">
                <div class="imgBx">
                  <img src="/views/assets/Marie-Eve.jpg">
                </div>
                <div class="content">
                  <div>
                    <h2>Marie-Evangéline DE LA BROISE</h2>
                    <p>La réveuse de notre équipe (on ne t'en veux pas, mais où sont nos croissants)
                    </p>
                  </div>
                </div>
              </div>
              <div class="box">
                <div class="imgBx">
                  <img src="/views/assets/Aelig.jpg">
                </div>
                <div class="content">
                  <div>
                    <h2>Aëlig VILLIETTE</h2>
                    <p>Arrive en retard alors qu'il habite juste à coté
                    </p>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="container" id="last-part">
          <h1 class="new-title-over">Rejoignez-nous<br>
            maintenant !</h1>
            <a href="./loginsys/signup.php"><button class="btn-35"><span>Inscription</span></button></a>
        </div>
    
    <footer>
      <!--Defining our bottom navigation bar in footer, for aesthetics purpose-->
      <?php
      include_once 'navbar/footer.php';
      ?>
    </footer>
  </body>
</html>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
    <title>FAQ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="FAQ.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
        <?php
            include_once '../navbar/header-main.php';
        ?>
    </header>
    <!-- Tout le corps de la F.A.Q -->
    <h1>FAQ</h1>

    <section>
        <div class="container-faq"> <!-- Contient toutes les quistions -->
            <div class="question"  > <!-- Engloble la premiere questions  -->
                <div class="visible-pannel" id="question1">
                    <a class="accordeon-lien" href="#question1"> <!-- Permet de defir la qutions posé -->
                        <div classe="Titre">
                            Question 1
                        </div> 
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="toggle-pannel"> <!-- Reponse a la question -->
                        <h4>titre question</h4>
                        <p>
                         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste illo delectus cumque adipisci deserunt cupiditate maiores et, nobis corrupti facere.
                        </p>
                     </div>
                </div>
            </div>
            <div class="question"  >
                <div class="visible-pannel" id="question1">
                    <a class="accordeon-lien" href="#question1">
                        <div classe="Titre">
                            Question 2
                        </div> 
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="toggle-pannel">
                        <h4>titre question</h4>
                        <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste illo delectus cumque adipisci deserunt cupiditate maiores et, nobis corrupti facere.
                        </p>
                    </div>
                </div>
            </div>

            <div class="question"  >
                <div class="visible-pannel" id="question1">
                    <a class="accordeon-lien" href="#question1">
                        <div classe="Titre">
                            Question 3
                        </div> 
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="toggle-pannel">
                        <h4>titre question</h4>
                        <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste illo delectus cumque adipisci deserunt cupiditate maiores et, nobis corrupti facere.
                        </p>
                    </div>
                </div>
            </div>
            <div class="question"  >
                <div class="visible-pannel" id="question1">
                    <a class="accordeon-lien" href="#question1">
                        <div classe="Titre">
                            <strong> Question 4 </strong>
                        </div> 
                        <i class="icon ion-md-add"></i>
                        <i class="icon ion-md-remove"></i>
                    </a>
                    <div class="toggle-pannel">
                        <h4>titre question</h4>
                        <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste illo delectus cumque adipisci deserunt cupiditate maiores et, nobis corrupti facere.
                        </p>
                    </div>
                </div>
            </div>




            <div class="question"  >
                <div class="visible-pannel" id="question1">
                    <a class="accordeon-lien" href="#question1">
                        <div classe="Titre">
                         Question 5
                        </div> 
                      <i class="icon ion-md-add"></i>
                       <i class="icon ion-md-remove"></i>
                   </a>
                  <div class="toggle-pannel">
                        <h4>titre question</h4>
                        <p>
                           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste illo delectus cumque adipisci deserunt cupiditate maiores et, nobis corrupti facere.
                       </p>
                   </div>
               </div>
            </div>

            <div class="question">

                <div class=" visible-pannel">
                    <h2> Posez votre Question ! </h2>
                    <div class="toggle-pannel">
                        <p id="Question">
                            <form>
                                <label for="fquestion"></label><br>
                                <input type="text" id="fquestion" name="fquestion"><br>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> 



    <footer>
      <!--Defining our bottom navigation bar in footer, for aesthetics purpose-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>
</html>
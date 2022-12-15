<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">    <!-- Implémente tous les symboles* -->
<<<<<<< HEAD
    <title>Questionnaire-Client</title>
=======
    <title>FAQ</title>
>>>>>>> e028cf2 (added medicobot/question+ reorganizing)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> <!-- Permet de prendre des images du site sans avoir à les télécharger -->
    <link rel="stylesheet" href="questionnaire.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
        <?php
            include_once '../navbar/header-main.php';
        ?>
    </header>

    <div class="question">
        <div class="instructions">
            <p class="pres">Pour obtenir un maximum de precision </P>
            <p class="pres">sur votre diagnostique, </p>
            <p class="pres">veuillez repondre le plus fidelement </p>
            <p class="pres">à se questionnaire </p>
        </div>
        <form action="">
          <label for="toux">Avez-vous de la toux :</label>
          <select name="toux" id="toux">
            <option value="non">non</option>
            <option value="oui">oui</option>
          </select>
          <br><br>
            <label for="toux">Si oui comment est votre toux:</label>
            <select name="toux" id="toux">
              <option value="seche">seche</option>
              <option value="grasse">grasse</option>
              <option value="pas de toux">pas de toux</option>
            </select>
            <br><br>
            <label for="toux">Avez-vous mal quelque part:</label>
            <select name="toux" id="toux">
              <option value="non">non</option>
              <option value="oui">oui</option>
            </select>
            <br><br>
            <label for="toux">Si oui, ou est votre douleur:</label>
            <select name="toux" id="toux">
              <option value="dos">dos</option>
              <option value="tete">tete</option>
              <option value="poumon">poumon</option>
              <option value="gorge">gorge</option>
              <option value="estomac">estomac</option>
            </select>
            <label for="toux">Avez-vous de la nausé</label>
            <select name="toux" id="toux">
              <option value="non">non</option>
              <option value="oui">oui</option>
            </select>
            <br><br>
            <label for="toux">Avez-vous des courbature</label>
            <select name="toux" id="toux">
              <option value="non">non</option>
              <option value="oui">oui</option>
            </select>
            <br><br>
            <label for="toux">Avez-vous de la toux :</label>
            <select name="toux" id="toux">
              <option value="non">non</option>
              <option value="oui">oui</option>
            </select>
            <br><br>

            <label for="toux">Avez-vous de la toux :</label>
            <select name="toux" id="toux">
              <option value="non">non</option>
              <option value="oui">oui</option>
            </select>
            <br><br>

            <label for="toux">Avez-vous de la toux :</label>
            <select name="toux" id="toux">
              <option value="non">non</option>
              <option value="oui">oui</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">
          </form>
    </div>
    
    <footer>
      <!--Defining our bottom navigation bar in footer, for aesthetics purpose-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>
</html>
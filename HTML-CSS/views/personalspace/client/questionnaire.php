<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Sono:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="questionnaire.css">
    <link rel="stylesheet" href="../../assets/template.css">
    <link rel ="stylesheet" href="../../navbar/header-main.css">

    <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once '../../navbar/header-main.php';
      ?>
    </header>

    <?php

    if(!isset($_SESSION["iduser"])){
      header("location:../../loginsys/login.php");
      exit();
    } elseif (!isset($_GET["idDia"])){
      header("location:client-personalspace.php");
      exit();
    }
    ?>

    <div class="debut">
    <h1>Questionnaire</h1>
      </div>
    <div class="question">
        <div class="instructions">
            <p class="pres">Pour obtenir un maximum de précision </P>
            <p class="pres">sur votre diagnostique, </p>
            <p class="pres">veuillez repondre le plus fidèlement </p>
            <p class="pres">à ce questionnaire :</p>
        </div>
         <form action="../../../controller/questionsprocesses.php" method="post">
          <input type="hidden" name="idDia" <?php echo 'value="'.$_GET["idDia"].'"'; ?>>
          <div class="all">
          <div class="for">
          <div class="quest">
            <label for="s1" class="ques">Avez-vous de la toux ?</label>
            <div class="rep">
              <input type="radio" name="s1" value="oui">
              <label>Oui</label>
              <input type="radio" name="s1" value="non">
              <label>Non</label>
              <br><br>
            </div>
            </div>
            <div class="quest">
           <label for="s2" class="ques">Si oui, comment est votre toux ?</label>
           <div class="rep">
              <input type="radio" name="s2" value="seche">
              <label>Sèche</label>
              <input type="radio" name="s2" value="grasse">
              <label>Grasse</label>
              <input type="radio" name="s2" value="pas de toux">
              <label>Pas de toux</label>
              <br><br>
              </div>
            </div>
            <div class="quest">
            <label for="s3" class="ques">Avez-vous mal quelque part ?</label>
            <div class="rep">
              <input type="radio" name="s3" value="oui">
              <label>Oui</label>
              <input type="radio" name="s3" value="non">
              <label>Non</label>
            <br><br>
            </div>
          </div>
          <div class="quest">
            <label for="s4" class="ques"> Si oui, votre douleur se situe à peu près où ?</label>
            <div class="rep">
              <input type="radio" name="s4" value="tete">
              <label>Tête</label>
              <input type="radio" name="s4" value="poumon">
              <label>Poumon</label>
              <input type="radio" name="s4" value="gorge">
              <label>Gorge</label>
              <input type="radio" name="s4" value="pas de douleur">
              <label>Pas de douleur</label><br>
              </div>
            </div>
            <div class="quest">
            <label for="s5" class="ques">Avez-vous de la nausée ?</label>
            <div class="rep">
              <input type="radio" name="s5" value="oui">
              <label>Oui</label><br>
              <input type="radio" name="s5" value="non">
              <label>Non</label><br>
              <br><br>
              </div>
            </div>
            </div>
              <button type="submit" name="submit" class= btn-34 >Confirmer</button><br>
            </div>
          </form>
    </div>
    <div class="container">
    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p> Veuillez remplir chaque compartiments !</p>";
      }
    }
    ?>
    </div>
    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../../navbar/footer.php';
      ?>
    </footer>   
</body>
</html>
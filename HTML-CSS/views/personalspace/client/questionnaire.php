<!DOCTYPE html>
<html lang="fr">
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
    <link rel ="stylesheet" href="../../navbar/header-main.php">
</head>

<body>
  <header>
    <!-- Defining in header a top navigation bar-->
    <?php
      include_once 'navbar/header-main.php';
    ?>
  </header>
  
  <?php
  if (!$_SESSION["iduser"]){
    header('location: ../../mainmenu.php');
    exit();
  }
  ?>
    
  <div class="debut">
  <h1>Questionnaire</h1>
    </div>
  <div class="question">
      <div class="instructions">
          <p class="pres">Pour obtenir un maximum de precision </P>
          <p class="pres">sur votre diagnostique, </p>
          <p class="pres">veuillez repondre le plus fidelement </p>
          <p class="pres">à se questionnaire </p>
      </div>
        <form action="../../../controller/questionsprocesses.php" method="post">
        <div class="all">
        <div class="for">
        <div class="quest">
          <label for="s1" class="ques">Avez-vous de la toux :</label>
          <div class="rep">
            <input type="radio" name="s1" value="oui">
            <label>oui</label>
            <input type="radio" name="s1" value="non">
            <label>non</label>
            <br><br>
          </div>
          </div>
          <div class="quest">
          <label for="s2" class="ques">Si oui comment est votre toux:</label>
          <div class="rep">
            <input type="radio" name="s2" value="seche">
            <label>seche</label>
            <input type="radio" name="s2" value="grasse">
            <label>grasse</label>
            <input type="radio" name="s2" value="pas de toux">
            <label>pas de toux</label>
            <br><br>
            </div>
          </div>
          <div class="quest">
          <label for="s3" class="ques">Avez-vous mal quelque part:</label>
          <div class="rep">
            <input type="radio" name="s3" value="oui">
            <label>oui</label>
            <input type="radio" name="s3" value="non">
            <label>non</label>
          <br><br>
          </div>
        </div>
        <div class="quest">
          <label for="s4" class="ques"> oui, ou est votre douleur:</label>
          <div class="rep">
            <input type="radio" name="s4" value="tete">
            <label>tete</label>
            <input type="radio" name="s4" value="poumon">
            <label>poumon</label>
            <input type="radio" name="s4" value="gorge">
            <label>gorge</label>
            <input type="radio" name="s4" value="pas de douleur">
            <label>pas de douleur</label><br>
            </div>
          </div>
          <div class="quest">
          <label for="s5" class="ques">Avez-vous de la nausé</label>
          <div class="rep">
            <input type="radio" name="s5" value="oui">
            <label>oui</label><br>
            <input type="radio" name="s5" value="non">
            <label>non</label><br>
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
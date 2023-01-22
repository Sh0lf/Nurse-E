<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MédicoBot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../navbar/navbar-main.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="shortcut icon" href="/views/assets/Logo-medicobot.png" />
    <link rel="stylesheet" href="medicobot.css">
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once '../navbar/header-main.php';
      ?>
    </header>

    <div class="info">
		<h2 class="bleu">Notre produit</h2>
		<p>A cause de la crise du covid, les médecins ainsi que les hôpitaux furent débordés.</p>
		<p>Depuis cette crise, les rendez-vous inutiles chez les médecins se multiplient.</p>
		<p>De ce fait, nous avons décidé de créer un produit afin de remédier à ça.</p>
		<p>Ce produit est MédicoBot, c’est le premier produit créé par notre entreprise Nurse-E.</p>
		<p ><ins class="bleu1">MedicoBot</ins> s’apprête à révolutionner le domaine du monde médical </p>
		<p> vous ne l’avez jamais vu.</p>		
	</div>
		
	<div class="pro">
		<div class="produit">
			<h1>Analyse</h1>
			<h3>Comment cela marche ?</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem</p>		

		</div>
	</div>
	<div class="produit1">
		<div class="ana">
			<div class="oe">
				<a href="page_annexe\analyse.html" class="bouton2">Commencer une analyse</a>
			</div>
		</div>
		<div>
			<div class="produit">
				<h1>Questionnaire</h1>
				<h3>Fonctionnement</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem</p>		

			</div>
		</div>
		
	</div>
	<div class="produit1">
		<div class="ana">
			<div class="oe">
				<a href="page_annexe\questionnaire.html" class="bouton2">commencer le questionnaire</a>
			</div>
		</div>	
	</div>
   <canvas id="myChart" width="60" height="10"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet'],
        datasets: [{
            label: "nombres d'analyses effectuer selon le mois",
            data: [45, 25, 45, 70, 45, 80, 75],
            backgroundColor: [
                'rgba(67, 177, 248, 1)'
            ],
            borderColor: [
                'rgba(238, 0, 0, 1)'
            ],
            borderWidth: 5
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
    
	<footer>
      <!--Defining our bottom navigation bar in footer, for aesthetics purpose-->
      <?php
        include_once '../navbar/footer.php';
      ?>
    </footer>
  </body>
</html>	
<!DOCTYPE html>


<html>
  <head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client personal space</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../../navbar/navbar-main.css">
    <link rel="shortcut icon" href="/views/assets/Logo-medicobot.png" />
    <link rel="stylesheet" href="../../assets/template.css">
    <link rel="stylesheet" href="historique.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>

  <body>
    <header>
      <!-- Defining in header a top navigation bar-->
      <?php
        include_once '../../navbar/header-main.php';
        include_once '../../assets/templateb.php';
      ?>
    </header>
    <div class='graph'>
        <canvas id="myChart"></canvas>
    </div>


    <?php
include_once '../../../controller/dbh.inc.php';

$sql = "SELECT Timestamp, Valeur FROM Valeur WHERE idCapteur = 4";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    header("location: ../views/loginsys/signup.php?error=stmtfailed");
    exit();
}
$stmt->execute();

while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $date[] = $data['Timestamp'];
    $valeur[] = $data['Valeur'];
}
    ?>

    <script>
        const labels = <?php echo json_encode($date) ?>

        const data = {
            labels: labels,
            datasets: [{
                type: 'bar',
                label: 'My First dataset',
                            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
                ],
                data: <?php echo json_encode($valeur) ?>
            },
            {
                type: 'line',
                label: 'My First dataset',
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
                ],
                data: <?php echo json_encode($valeur) ?>
            }],
        };

        const config = {
            type: 'scatter',
            data: data,
            options: {    
                scales: {
                    y: {
                    beginAtZero: true
                }
    }}
        };

    </script>
    <script>
        // === include 'setup' then 'config' above ===

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
    <div>
        <div>
            <button>

            </button>
            
        </div>
    </div>
    <footer>
      <!-- Defining in footer a small navigation bar-->
      <?php
        include_once '../../navbar/footer.php';
      ?>
    </footer>
  </body>  
</html>

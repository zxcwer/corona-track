<?php
    include "logic.php"
?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >"
    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- google font-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- font aw-->
    <script src="https://kit.fontawesome.com/7699307519.js" crossorigin="anonymous"></script>
    
    <!-- My stylesheet -->
    <link rel="stylesheet" href="style.css">
    
    <title>Corona-19 Tracker</title>
<body>
    <div class="container-fluid bg-light p-5 text-center my">
        <h1>Covid-19 Tracker</h1>
        <h5 class="text-muted">An opensource project to keep track of all the covid-19 cases around the world </h5>
    </div>
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed ?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths?>
            </div>
        </div>
    </div>
    <div class="container bg-light p-3 my-3 text-center">
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>
    <div class="container-fluid">
        <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Countries</th>
                    <th scope="col">Confirmed</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Deceased</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data as $key => $value){
                        $increase = $value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed']
                ?>
                    <tr>
                        <th><?php echo $key;?></th>
                        <td>
                            <?php echo $value[$days_count]['confirmed'];?>
                            <?php if($increase!=0){?>
                                <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>
                            <?php }?>
                        </td>
                        <td>
                            <?php echo $value[$days_count]['recovered'];?>
                        </td>
                        <td>
                            <?php echo $value[$days_count]['deaths'];?>
                        </td>
   
                    </tr>

                <?php }?>
            </tbody>
        </table>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-light">
  <div class="container text-center">
    <span class="text-muted">Copyright &copy;2020, <a href="https://www.facebook.com/Nitiphon.keoduangdy/">Kee</a></span>
  </div>
</footer>

</body>
</head>
</html>
<?php
    include "logic.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>covid19</title>

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">

    <!-- font Awsome -->
    <script src="https://kit.fontawesome.com/ef95e2206f.js" crossorigin="anonymous"></script>

    <!-- My style -->
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <div class="text-center">
        <img src="who.png" alt="">
    </div>

    <div class="container-fluid bg-amber text-center my-2">
        <h1>Covid19 Tracker</h1>
    </div>

    <div class="container my-5">
        <div class="row align-item-center">

            <div class="col">
                <div class="card text-center">
                    <div class="card-header bg-warning">
                        Confirmed
                    </div>

                    <div class="card-body bg-light text-warning">
                        <?php echo number_format($total_confirmed,0);?>
                    </div>


                </div>
            </div>
            
            <div class="col">
                <div class="card text-center">
                    <div class="card-header bg-danger">
                        Deceased
                    </div>


                    <div class="card-body bg-light text-danger">
                        <?php echo number_format($total_deaths,0);?>
                    </div>

                </div>
            </div>

        </div>


        <div class="container bg-light p-3 my-3 text-center table-info">
                <h2>🇸🇨Stay At Home🇸🇨</h2>
                
            </div>



    <div class="container-lg">
        <table class="table table-hover">
            <thead class="table table-dark">
                <tr>

                    <th>Counties</th>
                    <th>Confirmed</th>
                    <th>Deceased</th>
                    
                </tr>
            </thead>
            
            <tbody>
                <?php
                    foreach($data as $key => $value){
                        $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']

                ?>

                <tr>
                    <td><?php echo $key; ?></td>
                    <td>
                        <?php echo number_format($value[$days_count]['confirmed'],0);?>
                        <?php if($increase !=0) { ?>
                            <small class="text-danger pl-3"><i class="fas fa-arrow-up"> </i><?php echo $increase; ?></small>
                        <?php } ?>

                    </td>

                    <td>
                        <?php echo number_format($value[$days_count]['deaths'],0);?>
                    </td>

                </tr>

                <?php   } ?>  

            </tbody>

        </table>
    </div>
    
    </div>

    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Company, Inc</p>
  </footer>
<!-- 
    <div class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Design By Wachirawit</span>
        </div>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
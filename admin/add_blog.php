<?php

// session_start();
// if (!isset($_SESSION["loggedin"])) {
//     header("Location:login.php");
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <title>Dashboard</title>

 
    
</head>

<body>
    
    <div class="row min-vh-100 g-0">

        <?php include("content/navbar.php") ?>

        <div class="col-lg-10 wrapper">

            <div class="card custom-card-2">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0 fw-bold">Add Blog</h5>
                </div>
            </div>

            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Title :</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description :</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="Enter the description" required><br>
                        </div>
                        <br>
                        <div class="mb-3"> 
                            <button type="submit" class="btn btn-success float-end" name="add_blog" style="background-color:#FEB700;"> Add Blog</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
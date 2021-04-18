<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>BD News24</title>
</head>

<body class="body_col">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand custom_font" href="index.php">BD News24</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link custom_font" aria-current="index" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom_font" href="features.php">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom_font" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom_font" href="about_us.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>



    <div style="text-align: center;">
        <h1>Contact</h1>
        <hr>
    </div>

    <div style="width: 50%; margin-left:25%; text-align: center">
        <form action="mailto:team_qubit@diu.edu.bd" method="POST" enctype="multipart/form-data" name="EmailForm">
            <div class="form-group">
                <label for="formGroupExampleInput">Your Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="ContactName">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Your Message</label>
                <textarea type="text" class="form-control" id="formGroupExampleInput2" name="ContactComment" rows="6" cols="20"></textarea>
            </div>
            <br>
            <input type="submit" value="Submit" class="btn text-white bg-custom custom_btn custom_font">
        </form>
    </div>



    <footer class="bg-dark" style="position: fixed; width:100%; bottom:0">
        <p class="text-white text-center">All right reserved by &copy Team_QuBit 2021</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
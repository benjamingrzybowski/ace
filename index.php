<!doctype html>
<html lang="en">
<meta charset="utf-8">
<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="../bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/82dc6da854.js"></script>
    <title>  </title>
</head>

<body>

<?php include "../inc/main-nav-deep.php"; ?>

<header class="container-fluid" id="register">
    <div class="row pad ">
        <div class="col-md-12 pad">
            <h1>Volunteer and Athlete registration</h1>
        </div>
    </div>
</header>
<img src="../assets/btm-line.png">
<section class="container">
    <div class="row pad">
        <div class="col-md-12 pad">
            <a class="js-scroll-trigger" href="#volunteer">Click here to register to volunteer</a>
            <p>voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsu</p>
        </div>
    </div>
    <div class="row pad">
        <div class="col-md-12 pad">
            <a class="js-scroll-trigger" href="#athlete">Click here to register as an athlete</a>
            <p>voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsu</p>
        </div>
    </div>
</section>
<section class="container-fluid" id="weather">
    <div class="container">
        <div id="volunteer"></div>
            <div class="row pad">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2>Volunteers</h2>
                    <p>
                        voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsu
                    </p>
                    <form method="post" action="volunteer.php" id="">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="your name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="your phone number">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="your email">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Message</label>
                            <textarea class="form-control" name="msg" id="msg" placeholder="anything you think we should know?" row pads="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        <div id="athlete"></div>
            <div class="row pad">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2>Athletes</h2>
                    <p>
                        voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsu
                    </p>
                    <form method="post" action="athlete.php" id="">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="your name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="your phone number">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="your email">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="race[]" id="race" value="Olympic Course"> Olympic Course</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="race[]" id="race" value="Long Course"> Long Course</label>
                        </div><div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="race[]" id="race" value="Try-A-Tri">Try-A-Tri</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="race[]" id="race" value="Sprint"> Sprint</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="race[]" id="race" value="Half Marathon"> Half Marathon</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="race[]" id="race" value="10k"> 10k</label>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Message</label>
                            <textarea class="form-control" name="msg" id="msg" placeholder="anything you think we should know?" row pads="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
    </div>
    <img src="../assets/btm-line.png">
</section>

<?php include "../inc/scripts-deep.php"?>

<?php include "../inc/footer-deep.php" ?>

</body>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="../view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../view/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../view/assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="../view/assets/css/loginStyle.css">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>SORRY, THIS PAGE IS FOR COVID KOREA ADMINS ONLY!</h3>
                    <p>YOU DON'T HAVE PERMISSION TO LOGIN.</p>
                    <img src="../view/assets/img/graphic5.svg">
                    <a href="../index"><img src="../view/assets/img/logo5.png"></a>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="../index">
                                <div class="logo">
                                    <img class="logo-size" src="../view/assets/img/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="login" class="active">Login</a>
                        </div>
                        <form method="POST" action="check">
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </div>
</body>
</html>

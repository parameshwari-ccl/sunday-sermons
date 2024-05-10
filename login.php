<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php require_once 'css.php';?>

    <!-- css -->
    <link rel='stylesheet' href='styles/login.css'>
</head>
<body>

    <div class="holder">
        <div class="video-wrapper">
            <!-- background video -->
            <video autoplay muted loop class="my-video">
                <source src="video/background.mp4" type="video/mp4">
            </video>
            <!-- main -->
            <div class="d-flex justify-content-center align-items-center position-absolute top-0 w-100 card-top">
                <div class="card login-card">
                    <div class="card-body card-inner">
                        <h4 class="mb-1 pt-2">Welcome to ZamieWord!</h4>
                        <p class="mb-4">Please sign-in to your account and start helping</p>

                        <form id="login-form" class="mb-3" action="https://zamieword.org/login" method="POST">
                            <input type="hidden" name="_token" value="8G52NitCnZK1AlyxMtqk0FkYQmwOSd6Q5UbYfxKL" autocomplete="off">                        <div class="mb-3">
                                <label for="user" class="form-label">Username</label>
                                <input type="text" class="form-control" id="user" name="email" placeholder="Enter your username" autofocus="">
                            </div>
                            <div class="mb-3 form-password-toggle">

                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="············" aria-describedby="password">
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me">
                                    <label class="form-check-label remember-check" for="remember-me"> Remember Me </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
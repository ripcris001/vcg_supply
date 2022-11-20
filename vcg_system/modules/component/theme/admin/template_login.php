<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/posdash/html/backend/auth-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 15:30:26 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo isset($data->title) ? $data->title : WEB_TITLE; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://templates.iqonic.design/posdash/html/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo $theme->assetPath; ?>/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?php echo $theme->assetPath; ?>/css/backende209.css?v=1.0.0">
    <link rel="stylesheet"
        href="<?php echo $theme->assetPath; ?>/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet"
        href="<?php echo $theme->assetPath; ?>/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $theme->assetPath; ?>/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="<?php echo CUSTOMASSEST; ?>/custom.css">
    <link rel="stylesheet" href="<?php echo CUSTOMASSEST; ?>/plugin/fontawesome/faw/css/all.min.css">
    <!-- Backend Bundle JavaScript -->
    <script src="<?php echo $theme->assetPath; ?>/js/backend-bundle.min.js"></script>
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-lg-6">
                        <div class="card auth-card">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center auth-content">
                                    <div class="col-lg-12 align-self-center">
                                        <div class="p-3">
                                            <h2 class="mb-2">Sign In</h2>
                                            <p>Login to stay connected.</p>
                                            <form class="main-login-form">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" type="text"
                                                                id="username" placeholder=" ">
                                                            <label>Username</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" id="password"
                                                                type="password" placeholder=" ">
                                                            <label>Password</label>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-6">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <label class="custom-control-label control-label-1" for="customCheck1">Remember Me</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a>
                                       </div> -->
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sign In</button>
                                                <p class="mt-3">
                                                    Create an Account <a href="auth-sign-up.html"
                                                        class="text-primary">Sign Up</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".main-login-form").on('submit', function(e) {
            e.preventDefault();
            const username = $(this).find('#username').val()
            const password = $(this).find('#password').val()
            $.post('/api/login', {
                username: username,
                password: password
            }).done(function(res) {
                res = JSON.parse(res);
                if (res.status) {
                    utils.notify.setTitle("Success").setMessage(res.message).setType("success")
                        .load();
                    setTimeout(() => {
                        window.location.href = res.redirect ? res.redirect : '/admin';
                    }, 3000);
                } else {
                    utils.notify.setTitle("Error").setMessage(res.message).setType("danger")
                        .load();
                }
            })
        })
    })
    </script>

    <!-- app JavaScript -->
    <script src="<?php echo $theme->assetPath; ?>/js/app.js"></script>
    <script src="<?php echo CUSTOMASSEST.'/plugin/notify/bootstrap-notify.min.js'; ?>"></script>
    <script src="<?php echo CUSTOMASSEST.'/plugin/notify/notify-script.js'; ?>"></script>
    <script src="<?php echo CUSTOMASSEST; ?>/custom.js"></script>
</body>

<!-- Mirrored from templates.iqonic.design/posdash/html/backend/auth-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Oct 2021 15:30:27 GMT -->

</html>
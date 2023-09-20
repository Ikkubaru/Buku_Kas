<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>Login</title>
        <?php require_once('layout/css.php'); ?>
    </head>
    <body class="bg-theme bg-theme9">
        <!-- Start wrapper-->
        <div id="wrapper">
            <div class="card card-authentication1 mx-auto my-5">
                <div class="card-body">
                    <div class="card-content p-2">
                        <div class="card-title text-uppercase text-center py-3">Login</div>
                        <form method="post" action="<?= base_url('auth/login'); ?>">
                        <div id="hilang">
								<?= $this->session->flashdata('alert',TRUE);?>
							</div>
                            <div class="form-group">
                                <label for="exampleInputUsername" class="sr-only">Username</label>
                                <div class="position-relative has-icon-right">
                                    <input
                                        type="text"
                                        name="username"
                                        class="form-control input-shadow"
                                        placeholder="Enter Username"
                                        required>
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword" class="sr-only">Password</label>
                                <div class="position-relative has-icon-right">
                                    <input
                                        type="password"
										name="password"
                                        class="form-control input-shadow"
                                        placeholder="Enter Password"
                                        required>
                                    <div class="form-control-position">
                                        <i class="icon-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-light btn-block">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>

            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top">
                <i class="fa fa-angle-double-up"></i>
            </a>
        </div>
        <?php require_once('layout/js.php'); ?>
    </body>
</html>
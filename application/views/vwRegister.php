<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                            echo validation_errors();

                            if (isset($status) && $status) {
                                echo "<div class='alert alert-" . $status['type'] . "' role='alert'>". $status['message'] ."</div>";
                            }
                        ?>
                        <!-- REGISTRATION FORM -->
                        <form id="form1" name="form1" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Email address" name="email_address" type="email" value="">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>First name</label>
                                            <input class="form-control" placeholder="First name" name="first_name" type="text" value="">    
                                        </div>
                                        <div class="col-md-6">
                                            <label>Last name</label>
                                            <input class="form-control" placeholder="Last name" name="last_name" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" placeholder="Password" name="password_one" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <label>Repeat password</label>
                                    <input class="form-control" placeholder="Repeat password" name="password_two" type="password" value="">
                                </div>
                                <input type="submit" value="Register" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- Back to login button -->
                <div><a href="/auth">< Back to login</a></div>
            </div>
        </div>
    </div>
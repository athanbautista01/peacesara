        <?php
        //Connect to MySQL
        // require_once("database/connect.php");
        //include the header
        $title="Peacesara | Login";
        include("include/header.php");
        ?>

        <div class="container">
            <center>
                <div class="dizz col-md-4 col-md-offset-4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">LOGIN</a></li>
                        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">REGISTER</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="login">
                            <form role="form" action="include/login.php" method="post" class="login-form">
                            <br>
                                <div class="form-group">
                                    <label class="sr-only" for="username">Username</label>
                                    <input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password" required>
                                </div>
                                <!--<input type="submit" name="submitlogin" class="btn" value="Sign in!" />-->
                                <button type="submit" name="submitlogin" class="btn btn-custom">Sign in!</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="register">
                            <form role="form" action="include/userInput.php" name="registerForm" id="registerForm" method="post" class="registration-form">
                            <br>
                                        <div class="form-group">
                                            <label class="sr-only" for="formFirstName">First name</label>
                                            <input type="text" name="formFirstName" placeholder="First name..." class="form-first-name form-control" id="formFirstName" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formLastName">Last name</label>
                                            <input type="text" name="formLastName" placeholder="Last name..." class="form-last-name form-control" id="formLastName" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formAddress">Address</label>
                                            <input type="text" name="formAddress" placeholder="Address..." class="form-address form-control" id="formAddress" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formContact">Contact Number</label>
                                            <input type="text" name="formContact" placeholder="Contact Number..." class="form-contact form-control" id="formContact" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formEmail">Email</label>
                                            <input type="email" name="formEmail" placeholder="Email..." class="form-email form-control" id="formEmail" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formEmail">Username</label>
                                            <input type="text" name="formUsername" placeholder="Username..." class="form-email form-control" id="formUsername" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="formPassword">Password</label>
                                            <input type="password" name="formPassword" placeholder="Password..." class="form-email form-control" id="formPassword" required>
                                        </div>

                                        <button type="submit" class="btn">Sign me up!</button>
                                    </form>
                        </div>
                    </div>
                </div>
            </center>
        </div>

        <?php
        //include the header
        include("include/footer.php");
        ?>
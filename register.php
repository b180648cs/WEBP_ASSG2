<?php
    require("includes/classes/Header.php");

    $header = new Header("Register","logins.css");
    $header->output();
?>

<body>

    <?php
        require("includes/config.php");
        require("includes/components/navbar.php");
    ?>

    <section id="register">

        <div class="right">

            <h2>Create a new account</h2>

            <div class="ui card">

                <div class="content">

                    <form class="ui large form" method="POST" action="register.php" enctype="multipart/form-data"
                        id="register-form">

                        <div class="two fields">

                            <!-- First name -->
                            <div class="field">
                                <label>First Name</label>
                                <div class="ui icon input">
                                    <input type="text" name="fname" placeholder="First Name" id="fname-input" required>
                                    <i class="notched circle loading icon"></i>
                                    <i class="check icon"></i>
                                </div>
                            </div>

                            <!-- Last name -->
                            <div class="field">
                                <label>Last Name</label>
                                <div class="ui icon input">
                                    <input type="text" name="lname" placeholder="Last Name" id="lname-input" required>
                                    <i class="notched circle loading icon"></i>
                                    <i class="check icon"></i>
                                </div>
                            </div>

                        </div>

                        <div class="two fields">

                            <!-- Username -->
                            <div class="field">
                                <label>Username</label>
                                <div class="ui icon input">
                                    <input type="text" name="uname" placeholder="Username" id="uname-input" required>
                                    <i class="notched circle loading icon"></i>
                                    <i class="check icon"></i>
                                </div>
                            </div>

                            <!-- Email address -->
                            <div class="field">
                                <label>Email</label>
                                <div class="ui icon input">
                                    <input type="email" name="email" placeholder="Email" id="email-input" required>
                                    <i class="notched circle loading icon"></i>
                                    <i class="check icon"></i>
                                </div>
                            </div>

                        </div>

                        <div class="two fields">

                            <!-- Password -->
                            <div class="field">
                                <label>Password</label>
                                <div class="ui icon input">
                                    <input type="password" name="pwd1" placeholder="Password" id="pwd1-input" required>
                                    <i class="notched circle loading icon"></i>
                                    <i class="check icon"></i>
                                </div>
                            </div>

                            <!-- Confirm password -->
                            <div class="field">
                                <label>Confirm Password</label>
                                <div class="ui icon input">
                                    <input type="password" name="pwd2" placeholder="Confirm password" id="pwd2-input"
                                        required>
                                    <i class="notched circle loading icon"></i>
                                    <i class="check icon"></i>
                                </div>
                            </div>

                        </div>
                        <div class="field">

                            <!-- Image input -->
                            <div class="field">
                                <label>Upload Profile Picture (only .jpg files)</label>
                                <input type="file" id="img" name="img" required>
                            </div>

                           
                        </div>

                       

                        <!-- Message -->
                        <div id="messages"></div>
                        <br>
                        <!-- Submit  -->
                        <button class="ui fluid large submit button green " type="submit" name="registerBtn"
                            id="registerBtn">Sign
                            up</button>

                    </form>

                    <div class="bottom">
                        Already have an account? <a href="login.php">&nbsp;Log In</a>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <?php include("includes/components/footer.php"); ?>

   

    <?php 
        require("includes/classes/FooterLinks.php");

        $footerLinks = new FooterLinks("register.js");
        $footerLinks->output();
    ?>

</body>

</html>
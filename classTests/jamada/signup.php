<?php
require './config/config.php';
include_once './inc/header.inc.php';

?>
</body>
<main class="container">
    <div class="row" algin=center>
        <div class="col-50">
            <form action="./process.php" method="post" class="login">
                <?php
                        if(isset($_REQUEST['err']))
                        {
                            $msg = $_REQUEST['err'];
                            echo "
                                <div style='color: red'> $msg </div>
                            ";
                        }
                    ?>
                <div class="input-group">
                    
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" 
                    placeholder="Email" />
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" 
                    name="password" placeholder="password" />
                </div>
                <div class="input-group">
                    <label for="c_password">Confirm Password</label>
                    <input type="password" id="c_password" 
                    name="c_Password" placeholder="password" />
                </div>
                <div class="input-group">
                    <button class="btn" type="submit" name="signup_form" >
                        Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</main>
</html>
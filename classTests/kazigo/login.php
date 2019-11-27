<?php
require './config/config.php';
include_once './inc/header.inc.php';
?>
</body>

<main class="container">
    <div class="row" algin=center>
        <div class="col-50">
            <form action="./process.php" class="login" method="post">
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
                    <button class="btn" type="submit" 
                    name="login_form">Login</button>
                </div>
            </form>
        </div>
    </div>
</main>










</html>
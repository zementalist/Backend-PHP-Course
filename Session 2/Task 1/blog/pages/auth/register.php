<?php
    require_once "../../shared/header.php";

?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="auth-form">
            <form action="register" method="POST">
                <h2 class="text-center">Sign Up</h2>
                <br>
                <div class="form-group">
                    <input type="text" name='username' class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="email" name='email' class="form-control" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" name='password' class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <input type="password" name='password_confirm' class="form-control" placeholder="Confirm Password" required="required">
                </div>
                <div class="form-group">
                    <input type="submit" name="regform" class="btn btn-primary btn-block">Create Account</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once "../../shared/header.php";

?>
<?php
require_once "../../shared/header.php";

?>
<br><br><br>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="auth-form">

            <form action="login" method="POST">
                <h2 class="text-center">Login</h2>
                <div class="form-group">
                    <input type="text" name='username' class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" name='password' class="form-control" placeholder="Password"
                        required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
                <div class="clearfix">
                    <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                    <a href="#" class="float-right">Forgot Password?</a>
                </div>
            </form>
        </div>

    </div>
</div>

<?php
require_once "../../shared/footer.php";

?>
<section class="my-account-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-12"></div>
            <div class="col-lg-8 col-md-12">
                <div class="login-form mb-30">
                    <h2>Login</h2>
                    <form class="main-login-form">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">Remember me</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                                <a href="#" class="lost-your-password">Forgot your password?</a>
                            </div>
                        </div>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-12"></div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        $(".main-login-form").on('submit', function(e){
            e.preventDefault();
            $.post('/api/login', {name: 'me'}).done(function(res){
                res = JSON.parse(res);
                console.log(res);
            })
        })
    })
</script>
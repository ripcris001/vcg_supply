<section class="my-account-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-12"></div>
            <div class="col-lg-8 col-md-12">
                <div class="login-form mb-30">
                    <h2>Register</h2>
                    <form class="main-register-form">
                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" class="form-control form-input" id="customer_name" placeholder="Enter Full name" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control form-input" id="customer_address" placeholder="Enter Address" required>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control form-input" id="customer_username" placeholder="Enter Username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control form-input" id="customer_password" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control form-input" id="customer_password_confirm" placeholder="Retype Password" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control form-input" id="customer_email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input type="text" class="form-control form-input" id="customer_phone_no" placeholder="Enter Contact Number" required>
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
           $(".main-register-form").on('submit', function(e){
               e.preventDefault();
               const skip = ['customer_password_confirm'];
               const input = {}
               const elem = $(this).find('.form-input')
               const pass = $(this).find('#customer_password').val();
               const conpass = $(this).find('#customer_password_confirm').val();
               if(pass != conpass){
                utils.notify.setTitle("Error").setMessage("Password doesnt match.").setType("danger").load();
               }else{
                    $(this).find('.form-input').each(function(i){
                        const local = $(this);
                        const id = local.attr('id');
                        const value = local.val();
                        if(skip.indexOf(id) <= -1){
                            input[id] = value;
                        }
                        if(i == (elem.length - 1)){
                            $.post('/api/login/register', input).done(function(res){
                               res = JSON.parse(res);
                               if(res.status){
                                   utils.notify.setTitle("Success").setMessage(res.message).setType("success").load();
                                   setTimeout(() => {
                                       window.location.href = '/login';
                                   }, 3000);
                               }else{
                                   utils.notify.setTitle("Error").setMessage(res.message).setType("danger").load();
                               }
                           })
                        }
                   })
               }
               
               // const username = $(this).find('#username').val()
               // const password = $(this).find('#password').val()
               
           })
       })
      </script>
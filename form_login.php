

<!-- <centre><h1>LOGIN DATA MAHASISWA</h1></centre> -->
<link rel="stylesheet" href="tampilan/tampilan.css">
	<section class="forms-section">
        <h1 class="section-title">Great Website.com</h1>
        <div class="forms">
          <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
              Login
              <span class="underline"></span>
            </button>
            <form class="form form-login" action="" method="POST">
              <fieldset>
                <legend>Please, enter your email and password for login.</legend>
                <div class="input-block">
                  <label for="login-email">E-mail</label>
                  <input id="login-email" type="text" name="username" required>
                </div>
                <div class="input-block">
                  <label for="login-password">Password</label>
                  <input id="login-password" type="password" name="password" required>
                </div>
              </fieldset>
              <input type="submit" text="number" name="login">
            </form>
          </div>
          <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
              Sign Up
              <span class="underline"></span>
            </button>
            <form class="form form-signup">
              <fieldset>
                <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                <div class="input-block">
                  <label for="signup-email">E-mail</label>
                  <input id="signup-email" type="email" name="email"required>
                </div>
                <div class="input-block">
                  <label for="signup-username">Username</label>
                  <input id="signup-username" type="text" name="username" required>
                </div>
                <!-- <div class="input-block">
                  <label for="signup-password-confirm">Confirm password</label>
                  <input id="signup-password-confirm" type="password" required>
                </div> -->
                <div class="input-block">
                  <label for="signup-password">Password</label>
                  <input id="signup-password" type="password" name="pass" required>
                </div>
                
                <div class="input-block">
                  <label for="signup-password">level</label>
                  <select name="" id="">
                  <option value="penjual">Penjual</option>>
                  <option value="pembeli">Pembeli</option>>
                  </select>
                </div>
              </fieldset>
              
              <button type="submit" class="btn-signup">Continue</button>
            </form>
          </div>
        </div>
      </section>
	

    
 <?php
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($username=='uly' && $password=='123'){
            echo "<script> alert(window.location.href='bootstrap_biodata.php');
            </script>";
        }
    }
 
 ?> 
  <script src="tampilan/tampilan.js"></script> 
</body>
</html>





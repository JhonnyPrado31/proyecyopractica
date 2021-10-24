<br>
<br>
    <link rel="stylesheet" href="vistas/css/ingreso.css" type="text/css">
    <div class="cont">
        <div class="form sign-in">
            <h2>Welcome</h2>
            <form method="post" action="">
            <label>
                <span>Email</span>
                <input type="text" name="usuarioi"  placeholder="Usuario" required/>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="contraseñai"  placeholder="Contraseña" required/>
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <input type="submit" value="Registrar" />
            </form>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span>
                    <input type="text" />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" />
                </label>
                <button type="button" class="submit">Sign Up</button>
                
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>

<?php 
$ingreso = new adminC();
$ingreso -> IngresoC();

?>
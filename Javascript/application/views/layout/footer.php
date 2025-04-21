<style>
    .login_signup {
        position: fixed;
        top: 20%;
        left: 40%;
        width: 300px;
        height: auto;
        padding: 20px;
        box-shadow: 0 0 20px rgb(0,0,0,.1);
        border-radius: 15px;
        background: #fff;
        z-index: 999;
        display: none;
    }

    .login_signup .signupBx , .loginBx {
        width: 100%;
        display: none;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .login_signup form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .login_signup form input {
        padding: 10px;
        margin-top: 10px;
        border-radius: 8px;
        border: none;
        background: #fff;
        box-shadow: 0 0 20px rgb(0,0,0,.1);
    }
    .login_signup form button {
        padding: 10px 15px;
        margin-top: 10px;
        border-radius: 8px;
        border: none;
        background: #037b83;
        color: #fff;
        box-shadow: 0 0 20px rgb(0,0,0,.1);
        cursor: pointer;
    }

    .login_signup_ll {
        display: block;
    }
    .login_signup_ll .loginBx {
        display: flex;
    }

    .login_signup_ss {
        display: block;
    }
    .login_signup_ss .signupBx {
        display: flex;
    }
</style>

<!-- Login And Signup  -->
 
 <div class="login_signup">
    <div class="signupBx">
        <h2>Register</h2>
        <form id="signupForm">
            <input type="text" id="signup_name" placeholder="name" required>
            <input type="number" id="signup_mobile" placeholder="mobile" required>
            <input type="password" id="signup_password" placeholder="password" required>
            <button type="submit" id="signup">Signup</button>
        </form>
    </div>

    <div class="loginBx">
    <h2>Login</h2>
        <form id="loginForm">
            <input type="number" id="login_mobile" placeholder="mobile" required>
            <input type="password" id="login_password" placeholder="password" required>
            <button type="submit" id="login">Login</button>
        </form>
    </div>
 </div>


 <script>
    let login_signup = document.getElementsByClassName('login_signup')[0];
    let loginBtn = document.getElementById('loginBtn');
    let signupBtn = document.getElementById('signupBtn');

    loginBtn.addEventListener('click' , () => {
        login_signup.classList.toggle('login_signup_ll');
        login_signup.classList.remove('login_signup_ss');
    })
    signupBtn.addEventListener('click' , () => {
        login_signup.classList.remove('login_signup_ll');
        login_signup.classList.toggle('login_signup_ss');
    })
 </script>

 <script>
    let base_url = "<?php echo base_url('user/');?>";

    // Login 
    document.getElementById('login').addEventListener('click' , async (e) => {
        e.preventDefault();

        let form = new FormData();
        form.append('mobile', document.getElementById('login_mobile').value);
        form.append('password', document.getElementById('login_password').value);

        try {
            const response = await fetch(base_url +  'login' , {
                method: "POST",
                body: form
            }
        );

        const result = await response.json();

        alert(result.message);

        window.location.reload();


        } catch (error) {
            console.log(error);
        }
    });

    // signup 
    document.getElementById('signup').addEventListener('click' , async (e) => {
        e.preventDefault();

        let form = new FormData();
        form.append('name', document.getElementById('signup_name').value);
        form.append('mobile', document.getElementById('signup_mobile').value);
        form.append('password', document.getElementById('signup_password').value);

        try {
            const response = await fetch(base_url +  'signup' , {
                method: "POST",
                body: form
            }
        );

        const result = await response.json();

        alert(result.message);

        window.location.reload();


        } catch (error) {
            console.log(error);
        }
    });


    // logoutBtn 
    document.getElementById('logoutBtn').addEventListener('click' , async (e) => {
        e.preventDefault();

        try {
            const response = await fetch(base_url +  'logout');

        const result = await response.json();

        alert(result.message);

        window.location.reload();


        } catch (error) {
            console.log(error);
        }
    });


 </script>


<footer>
        <h2>Subscribe & <br> get special discount</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt neque animi .</p>
        <div class="input">
            <input type="text" placeholder="Enter your Email Address">
            <button>Subscribe</button>
        </div>
        <ul>
            <li>7823 <br> <h6>Years Serving the travel Industry</h6></li>
            <li>6374 <br><h6>Global <br> Patnership</h6> </li>
            <li>1496 <br> <h6>Industry Awards since 2022</h6></li>
            <li>5658 <br> <h6>Subscribe</h6></li>
        </ul>
    </footer>
    <script src="app.js"></script>
    
</body>

</html>
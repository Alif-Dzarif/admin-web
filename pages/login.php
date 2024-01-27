<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/styles/style.css" rel="stylesheet">
  <title>Document</title>
</head>

<body data-theme="light">
  <div class="container">
    <div class="banner">
      <div class="banner_box" id="banner">
        LOGIN
      </div>
    </div>
    <div class="wrapper_login">
      <div class="login_box">
        <h1>ADMIN WEB</h1>
        <form>
          <div class="login_input">
            <label>What is your Email ?</label>
            <input type="email" placeholder="Type here" id="email" />
          </div>
          <div class="login_input">
            <label>What is your Password ?</label>
            <input type="password" placeholder="Type here" id="password" />
            <div class="toogle_password">
              <input type="checkbox" name="toogle_password" onclick="showPassword()" id="toogle_password"><span>Show Password</span>
            </div>
          </div>
          <div class="button_wrapper">
            <div class="button register_button">
              <button>
                REGISTER
              </button>
            </div>
            <div class="button login_button">
              <button>
                LOGIN
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script>
  const bannerEl = document.querySelector('.banner_box');

  const showBanner = () => {
    bannerEl.classList.add('show');
  }

  window.addEventListener('load', setTimeout(showBanner, 500));

  function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>

</html>

<style>
  body {
    margin: 0px;
  }

  :root {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .container {
    padding: 2.5rem 0rem;
    overflow: hidden;
    max-width: 100dvw;
  }

  .wrapper_login {
    display: flex;
    justify-content: center;
    max-width: 100dvw;
  }

  .login_box {
    margin-top: 5rem;
    min-width: 40%;
    background-color: rgb(209, 213, 219, 0.3);
    border-radius: 10px;
  }

  .login_box h1 {
    text-align: center;
  }

  .login_box form {
    width: auto;
    padding: 1.25rem 1.75rem;
  }

  .login_input {
    display: flex;
    flex-direction: column;
    margin: 2rem 0rem;
  }

  .login_input input::placeholder {
    opacity: 0.5;
  }

  .login_input label {
    font-size: medium;
    font-weight: 700;
    letter-spacing: 0.5px;
  }

  .login_input input {
    max-width: 10 0%;
    padding: 0.5rem 0rem;
    height: auto;
    margin-top: 10px;
    background-color: rgb(255, 255, 255, 0.1);
    border: none;
    border-bottom: 2px solid black;
    font-size: medium;
    font-weight: 550;
    letter-spacing: 0.5px;
  }

  .login_box input:focus {
    outline: none;
  }

  input[type=checkbox] {
    /* Double-sized Checkboxes */
    -ms-transform: scale(1.5);
    /* IE */
    -moz-transform: scale(1.5);
    /* FF */
    -webkit-transform: scale(1.5);
    /* Safari and Chrome */
    -o-transform: scale(1.5);
    /* Opera */
    transform: scale(1.5);
    margin: 1.5rem 0px;
    margin-right: 0.9rem;
    /* padding: 5px; */
    margin-left: 0.5rem;
  }

  .toogle_password {
    margin: 0px;
  }

  .button_wrapper {
    display: flex;
    justify-content: space-between;
    padding: 0rem 1rem;
    height: 50px;
    margin-top: 3rem;
  }

  .button button {
    padding: 0.9rem 1.2rem;
    border: none;
    font-weight: 700;
    font-size: medium;
    letter-spacing: 1px;
    cursor: pointer;
    color: white;
    min-width: 10rem;
    border-radius: 5px;
  }

  .register_button button {
    background-color: #f2a450;
  }

  .login_button button {
    background-color: #6063f7;
  }


  .banner {
    display: flex;
    justify-content: end;
    overflow: hidden;
  }

  .banner_box {
    position: relative;
    padding: 1.3rem 6rem;
    min-width: 70px;
    background-color: blue;
    color: white;
    font-weight: bold;
    font-size: larger;
    right: -320px;
    transition: right 0.5s ease;
  }

  .banner_box.show {
    right: 0px;
  }
</style>
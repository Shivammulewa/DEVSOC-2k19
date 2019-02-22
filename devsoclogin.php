<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
  h1 {
      font-weight:bold;
      padding:22px;
      color:white;
      font-family: Comic Sans MS;
      font-size: 40px;
      }
      #a {
        color: white;
        font-size: 30px;
        position: absolute;
        top: 173px;
      }
      #b {
        position: absolute;
        top: 200px;
        left: 800px;
      }
      .button { color:black;

        border-radius: 2px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        padding: 14px 40px;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
      }
      .button:hover {
        background-color: #000000;
        color: white;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
      }#goback{

        color: white;
      }
  </style>
</head>
<body background="back.jpg">
  <center><h1>Geeky Devs</h1></center>
  <br/><br/>
  <div id="a"><p>Rural unemployment is the biggest <br/>problem in India and here we aim to <br/>solve exactly that. Join our platform<br/> today to acquire people based on their <br/>profile for any type of low wage and <br/>labour jobs.</p></div>
    <div id="b"><form action="login.php" method="POST" name="sign_up_form">
        <input type="text" name="email" placeholder="Email" required="required" style="width:300px;height:30px"/><br />
        <input type="password" name="password" placeholder="Set a password" required="required" style="width:300px;height:30px"/><br />
        <br /><br /><button type="submit" name="si" class="button">Log in</button>

  </form>
<br/>
<form action="devsoc.php">
<button type="submit">Go Back</button>
</form>
</body>
</html>

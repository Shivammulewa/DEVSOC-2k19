<html>

<head>
  <style type=text/css>
    #a {
      color: white;
      font-size: 30px;
    }
    #c {
      color: white;
      font-size: 20px;
    }
    #b {
      position: absolute;
      top: 200px;
      left: 800px;
    }
    #sex {
      color: white;
    }
    #loginbutton{
      position: absolute;
      top:530px;
      left:800px;
    }
    .button { color:black;
      position: absolute;
      top: 470px;
      left: 800px;
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
    }
    h1 {
        font-weight:bold;
        padding:35px;
        color:white;
        font-family: Comic Sans MS;
      font-size: 40px;}
  </style>
</head>

<body background = "back.jpg">
  <center><h1>Geeky Devs</h1></center>
  <br/><br/>
  <div id="a"><p>Rural unemployment is the biggest <br/>problem in India and here we aim to <br/>solve exactly that. Join our platform<br/> today to acquire people based on their <br/>profile for any type of low wage and <br/>labour jobs.</p></div>
  <div id="b"><form action="signup.inc.php" method="POST" name="sign_up_form">
      <input type="text" name="email" placeholder="Email" required="required" style="width:300px;height:30px"/><br />
      <input type="text" name="username" placeholder="Username" required="required" style="width:300px;height:30px"/><br />
      <input type="password" name="password" placeholder="Set a password" required="required" style="width:300px;height:30px"/><br />
      <input type ="text" name="company" placeholder="Enter the name of your company" required="required" style="width:300px;height:30px"/><br />
  		<input type ="text" name="number" placeholder="Mobile Number" required="required" style="width:300px;height:30px"/><br />
      <br/>
      <div id="c">Company establishment date:</div>
      <select name="date">
  			<option>Date</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
  		</select>
  		<select name="month">
  			<option>Month</option><option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option>
  		</select>
  		<select name="year">
  			<option>Year</option><option>1961</option><option>1962</option><option>1963</option><option>1964</option><option>1965</option><option>1966</option><option>1967</option><option>1968</option><option>1969</option><option>1970</option><option>1971</option><option>1972</option><option>1973</option><option>1974</option><option>1975</option><option>1976</option><option>1977</option><option>1978</option><option>1979</option><option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option>
  		</select><br /><br/>
  		<div id = "sex">Male <input type="radio" name="sex" value="male" style="font-color:white"/>
  		Female <input type="radio" name="sex" value="female" /></div></div>
  		<br /><br /><button type="submit" name="su" class="button">Sign up</button>
  </form>
  <div id="loginbutton">or
  <form action="devsoclogin.php">
  <button type="submit">login</button></div>
</form>
</body>

</html>

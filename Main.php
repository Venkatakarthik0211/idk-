
<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="skin.css">
    <script src="validator.js"></script>
    <title>order</title>
</head>

<body>

    
<div class="header">
    <nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact us</a></li>
            <div class="search">
                <input type="text" name="search" id="search" placeholder="Search this website">
            </div>
        </ul>
    </nav>
</div>

<div class="catalogue">
    <h2 style="text-align: center;">CATALOGUE</h2> 
<table>
    <tr> <h2 style="text-align: center;"> ARABIC </h2> </tr>
        <tr><th>knafeh</th> <th>baklava</th> <th>falafel</th> </tr>
       <tr> <td><div class="container"><img src="knafeh.jpg">  <div class="overlay">
        <div class="text">Knafeh - ₹500  </div>
      </div>
    </div>
    </td>
        <td ><div class="container"><img src="baklava.jpg" > <div class="overlay"> <div class="text">Baklava - ₹450</div>
        </div>
      </div></td> <td> <div class="container"><img src="falafel.jpg">  <div class="overlay"><div class="text">Falafel - ₹350</div>
      </div>
    </div></td> </tr>
       <tr> <td><div class="container"><img src="sushi.jpg"> <div class="overlay">  <div class="overlay">
        <div class="text">Sushi - ₹800</div>
      </div>
    </div></td> <td><div class="container"><img src="ramen.jpg"> <div class="overlay"><div class="text">Ramen - ₹1000</div>
    </div>
  </div></td> <td> <div class="container"><img src="Tiramisu.jpg"> <div class="overlay"> <div class="text">Tiramisu - ₹1450</div>
  </div>
</div></td> </tr>
    

</table>
</div>

<div class="menu"></div>
<div class="order">
    <form name="order" onsubmit="return validateForm()" action="target.html" method="post">
    <div class="group">
        <label>First Name</label>
        <input type="text" name="fname">
        <div class="error" id="fnameErr"></div>
    </div>
    <div class="group">
        <label>last Name</label>
        <input type="text" name="lname">
        <div class="error" id="lnameErr"></div>
    </div>
    <div class="group">
        <label>Email Address</label>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>
    <div class="group">
        <label>pno Number</label>
        <input type="text" name="pno" maxlength="10">
        <div class="error" id="pnoErr"></div>
    </div>     
    <div class="group">
        <input type="submit" value="Submit">
    </div>
</form>
</div>



</body>
</html>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Chevyview Estate</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('login-style/css/style.css') }}">

  
</head>

<body>
  <div class="signupSection">
  <div class="info">
    <img class="logo" src="{{ asset('login-style/images/1652051691354 2.png') }}" alt="">
    

    <div class="cropped">
      <img class="form-image" src="{{ asset('login-style/images/Group 3350.png') }}" alt="">
    </div>
    <div class="footer">

      <span style="font-weight:600;"> Powered By:</span>  <img src="{{ asset('login-style/images/1652051691354 2.png') }}" alt="">
  
    </div>
    
  </div>

  <form action=" " method="POST" class="signupForm" name="signupform">





    <h2 style="font-weight:700;">Hello Again!</h2>
    <h2>Welcome Back</h2>



   


    <ul class="noBullet">
      
      
      <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required/>
        
      </li>


      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="{{ old('password') }}"  required/>
        
      </li>

      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Login">
      </li>
    </ul>
  </form>
  
 
</div>



  
    <script src="js/index.js"></script>

</body>
</html>

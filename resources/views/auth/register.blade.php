<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Chevyview Estate</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

      <link rel="stylesheet" href="{{ asset('register-style/css/style.css') }}"> 

  
</head>

<body>
  <div class="signupSection">
  <div class="info">
    <img class="logo" src="{{ asset('register-style/images/1652051691354 2.png') }}" alt="">
    

    <div class="cropped">
      <img class="form-image" src="{{ asset('register-style/images/Group 3350.png') }}" alt="">
    </div>
    <div class="footer">

      <span style="font-weight:600;"> Powered By:</span>  <img src="{{ asset('register-style/images/1652051691354 2.png') }}" alt="">
  
    </div>
    
  </div>

  <form action=" " method="POST" class="signupForm" name="signupform">
    <h2 style="font-weight:700;">Create Account!</h2>





   
    
    <ul class="noBullet">
      



      
      
      <li>
        <label for="Name"></label>
        <input type="text" class="inputFields" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required/>
        
      </li>


      <li>
        <label for="Email"></label>
        <input type="text" class="inputFields" id="email" name="email" placeholder="Email" value="{{ old('email') }}"  required/>
        
      </li>


      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="{{ old('password') }}"  required/>
        
      </li>


      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Register">
      </li>
    </ul>
  </form>
  
 
</div>



  

</body>
</html>

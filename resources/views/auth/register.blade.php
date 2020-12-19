 <html>
<head>
<body> 
  
  <style>
  *{
  margin: 0;
  padding: 0;
}

body{
  background: #e9eaea;
  font-family: roboto;
  user-select: none;
}

.container{
  width: 450px;
  margin: 30px auto;
}

.signup,
.login{
  width: 50%;
  background: #fff;
  float: left;
  height: 60px;
  line-height: 60px;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
}

.signup-form,
.login-form{
  background: #fff;
  padding: 40px;
  clear: both;
  width: 100%;
  box-sizing: border-box;
  height: 550px;
}

.input{
  width: 100%;
  padding: 20px;
  box-sizing: border-box;
  margin-bottom: 25px;
  border: 2px solid #e9eaea;
  color: #3e3e40;
  font-size: 14px;
  outline: none;
  transform: all 0.5s ease;
}

.input:focus{
  border: 2px solid #34b3a0;
}

.btn{
  width: 100%;
  background: #34b3a0;
  height: 60px;
  text-align: center;
  line-height: 60px;
  text-transform: uppercase;
  color: #fff;
  font-weight: bold;
  letter-spacing: 1px;
  cursor: pointer;
  margin-bottom: 30px;
  font-family: Georgia;

}

span a{
  text-decoration: none;
  color: #000;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #3e3e40;
  font-family: roboto;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #3e3e40;
  font-family: roboto;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #3e3e40;
  font-family: roboto;
}
:-moz-placeholder { /* Firefox 18- */
  color: #3e3e40;
  font-family: roboto;
}




















  
  
  
  </style>
  
                  <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

  
  
  
  
  
  
  <div class="wrapper">
    <div class="container">
    
             <div class="signup-form">
			<h2><p align="center"><font face="Times New Roman" size="6">Register</font></h2>
			<font face="Times New Roman" size="6"><br>
          	</font>
			   <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
              Name       
			<input type="text" class="input" name="name" value="{{ old('name') }}"><br />
          Email
          <input type="text" class="input" name="email" value="{{ old('email') }}"><br />
    	  Password
    	  <input type="password" class="input" name="password" value="{{ old('password') }}"><br />
          Confirm Password
          <input type="password" class="input" name="password_confirmation" value="{{ old('password_confirmation') }}"><br />
     	<input type="submit" name="add" class="btn btn-primary input-lg" value="Create Account" /><br/>
		<br>
		
		 @if($errors->first())
                    <ul class="aler alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

  </div>
  </div>
    </div>
 </div>






<!-- By Coding Market -->
</form>
</head>
</body>
</html>




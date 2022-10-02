<!DOCTYPE html>
<html>
  <head>
    <title>Geek Bot</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href="{{asset('template2/stylesheets/bootstrap.css')}}" >
    <link rel='stylesheet' href="{{asset('template2/stylesheets/style.css')}}" />
  </head>
  <body class="login">
    
    <div class="row">
      <div class="col-md-4">
          <div class="head">
              <h1 style="color:white;">Geek Bot</h1>
              <h2 style="color:white;">Registrasi</h2>
          </div>
      </div>
      <div class="col-md-4">
          <div class="form-style">
            <center>
              <h1 style="color:white">Registrasi</h1>
              <img src="{{asset('template2/images/Login.png')}}" >
                <form action="<%= dir %>" >
                    <p style="color:white">Nama</p>
                    <input type="text" name="nama" ><br>
                    <br>

                  <p style="color:white">Email</p>
                    <input type="email" name="email" ><br>
                    <br>

                   <p style="color:white">Password</p> 
                    <input type="password" name="password" ><br>
                    <br>

                    <p style="color:white">No HP</p> 
                    <input type="text" name="nohp" ><br>
                    <br>

                    <p style="color:white">Alamat Rumah</p> 
                    <input type="text" name="alamat" ><br>
                    <br>

                    <input type="submit" value="Register">
                  </form>
            </center>        
          </div>
      </div>
    </div>
   
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="{{asset('template2/javascripts/jquery-3.1.0.js')}}"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="{{asset('template2/javascripts/bootstrap.js')}}"></script>
  </body>
</html>

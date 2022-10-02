<!DOCTYPE html>
<html>
  <head>
    <title>Geek Bot</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href="{{asset('template2/stylesheets/bootstrap.css')}}" >
    <link rel='stylesheet' href="{{asset('template2/stylesheets/style.css')}}" />
  </head>
  <body>
    
     <!-- Fixed navbar -->
     <nav class="navbar navbar-default navbar-fixed-top" style="background:#002350;">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
          <h4 class="nav-head-custom">GEEK BOT</h4>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a  href="#">Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="row" >
      <div class="col-md-2 col-sm-2 col-lg-2">
          <div class="head" style="background:url('{{asset('template2/images/wallpaper.jpg')}}')">
              <h1 style="background:#002350;padding:10%;color:white;">Manage Product </h1>
          </div>
      </div>
      <div class="col-md-9 col-sm-9 col-lg-9 admin-box" style="margin-top:70px;">
        <h1>Product</h1>
          <a href="#" class="btn btn-primary">Add Product</a>
          <br><br>
        <div class="table-responsive">          
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Berat</th>
                <th scope="col">Tanggal Produksi</th>
                <th scope="col">Harga Produk</th>
                <th scope="col">Kategori</th>
              </tr>
            </thead>
            <tbody>

              @foreach($produk as $i => $item)
              <tr>
                <th scope="row">{{ $item -> id }}</th>
                <td>{{ $item -> namaProduk }}</td>
                <td>{{ $item -> beratProduk }}</td>
                <td>{{ $item -> tanggalProduksi }}</td>
                <td>Rp. {{ $item -> hargaProduk }}</td>
                <td>{{ $item -> kategori_id }}</td>
                </tr>
                @endforeach
            </tbody>

          </table>
          </div>
          <h1>Category</h1>
          <a href="#" class="btn btn-primary">Add Category</a>
          <br><br>
          <div class="table-responsive">          
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Kategori</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr>
                    <th scope="row"></th>
                    <td></td>
                  </tr>
                  
                </tbody>
              </table>
              </div>
          

        </div>
      
      <div class="col-md-1 col-sm-1 col-lg-1">
        <div class="head" style="background:url('{{asset('template2/images/wallpaper.jpg')}}')">
      </div>
      </div>
    </div>

    <!-- The Modal Category -->
<!-- <div id="ModalEditor" class="modal"> -->
    
   <!-- Modal content -->
   <!-- <div class="modal-content">
     <div class="modal-header">
       <span class="close">&times;</span>
       <h2>Edit Data</h2>
     </div>
     <div class="modal-body">
         <form  action="/admin/insert" method="get" class="data">
           <div class="row">
              <div class="col-md-offset-2 col-sm-offset-2 col-lg-offset-2 col-md-3 col-sm-3 col-lg-3">
                <ul id="tabpad">
                  <li>ID</li>
                  <li>Nama</li>
                  <li>Berat</li>
                  <li>Warna</li>
                  <li>Tanggal Produksi</li>
                  <li>Harga</li>
                  <li>Kategori</li>
                </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-lg-5 ">
                    <ul class="modal-info">
                        <li> : <input type="text"   onchange="InvalidId(this);" oninvalid="InvalidId(this);" name="id" oninput="InvalidId(this);" required></li>
                        <li> : <input type="text" name="nama" required></li>
                        <li> : <input type="number" name="berat" required></li>
                        <li> : <input type="text" name="warna" required></li>
                        <li> : <input type="date" name="tanggal" required></li>
                        <li> : <input type="number" name="harga" required></li>
                        <li> :  <select name="kategori" required>
                     
                              <!--    <option value="harga">contoh</option>-->
                            
                          
                              <!-- </select>
                        </li>
                    </ul>

                </div>
           </div>

           <input type="submit"  name="submit" value="submit">
         </form>
     </div>
     <div class="modal-footer">
       
     </div>
   </div>
 
 </div> --> -->
  
     <!-- The Modal Category -->
<!-- <div id="ModalKategori" class="modal"> -->
    
   <!-- Modal content -->
   <!-- <div class="modal-content">
     <div class="modal-header">
       <span class="close">&times;</span>
       <h2>Edit Data</h2>
     </div>
     <div class="modal-body">
         <form  action="/admin/insertcat" method="get" class="data">
           <div class="row">
              <div class="col-md-offset-2 col-sm-offset-2 col-lg-offset-2 col-md-3 col-sm-3 col-lg-3">
                <ul id="tabpad">
                  <li>Kategori</li>
                </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-lg-5 ">
                    <ul class="modal-info">
                        <li> : <input type="text" oninvalid="InvalidCat(this);" name="kategori" oninput="InvalidCat(this);"   required></li>
                    </ul>

                </div>
           </div>

           <input type="submit"  name="submit" value="submit">
         </form>
     </div> -->
     <!-- <div class="modal-footer">
       
     </div> -->
   </div>
 
 </div>
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="{{asset('template2/javascripts/jquery-3.1.0.js')}}"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="{{asset('template2/javascripts/bootstrap.js')}}"></script>
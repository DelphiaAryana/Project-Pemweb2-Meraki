<!doctype html>
<html lang="en">
  <head>
  	<title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="{!! asset('assets/css/styleSidebar2.css') !!}" rel="stylesheet">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="responsive show">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">Meraki <span>Halaman Admin</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="{{ route('admin.index') }}"><span class="fa fa-home mr-3"></span>Beranda</a>
	          </li>
	          <li>
	              <a href="{{ route('admin.showDataPengguna') }}"><span class="fa fa-user mr-3"></span>Data Pengguna</a>
	          </li>
	          <li>
              <a href="{{ route('motif.show') }}"><span class="fa fa-cut mr-3"></span>Data Motif Sasirangan</a>
	          </li>
	          <li>
              <a href="{{ route('style.show') }}"><span class="fa fa-shirtsinbulk mr-3"></span>Data Modern Style</a>
	          </li>
	          <li>
              <a href="{{ route('datakuis.show') }}"><span class="fa fa-pencil mr-3"></span>Data Soal Kuis</a>
	          </li>
	          <li>
              <a href="{{ route('datapoint.show') }}"><span class="fa fa-trophy mr-3"></span>Data Score Kuis</a>
	          </li>
	        </ul>

	        <div class="mb-5">
						<h3 class="h6 mb-3"><a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a></h3>
					</div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5 shifted">
        <br>

        <h3 class="text-center">Tambah Data Style Modern</h3><br><br>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-5 border rounded mt-2">
                    <form action="{{ route('data_style.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis Baju</label>
                            <select class="form-control" id="jenis" name="jenis">
                                <option value = "blouse"> Blouse </option>
                                <option value = "dress"> Dress </option>
                                <option value = "tunik"> Tunik </option>
                                <option value = "kemeja"> Kemeja </option>
                                <option value = "seragam"> Seragam </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">                         
                        </div>

                        <div class="row mx-2">
                            <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>

		</div>

	<script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
	<script src="{!! asset('assets/js/popper.js') !!}"></script>
	<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('assets/js/main2.js') !!}"></script>
  <script>
    $(document).ready(function() {
      $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('show');
        $('#content').toggleClass('shifted');
      });
    });
  </script>
  </body>
</html>
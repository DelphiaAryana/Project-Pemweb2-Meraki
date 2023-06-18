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
        <h3 class="text-center">Edit Data Soal Kuis</h3>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-5 border rounded mt-2">
                    <form action="{{ route('data_kuis.update', $kuis->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="soal" class="form-label">Soal</label>
                            <input type="text" class="form-control" id="soal" name="soal" value="{{ $kuis->soal }}">
                        </div>

                        <div class="mb-3">
                            <label for="jawaban_a" class="form-label">Opsi A</label>
                            <input type="text" class="form-control" id="jawaban_a" name="jawaban_a" value="{{ $kuis->jawaban_a }}">                         
                        </div>

                        <div class="mb-3">
                            <label for="jawaban_b" class="form-label">Opsi A</label>
                            <input type="text" class="form-control" id="jawaban_b" name="jawaban_b" value="{{ $kuis->jawaban_b }}">                         
                        </div>

                        <div class="mb-3">
                            <label for="jawaban_c" class="form-label">Opsi A</label>
                            <input type="text" class="form-control" id="jawaban_c" name="jawaban_c" value="{{ $kuis->jawaban_c }}">                         
                        </div>

                        <div class="mb-3">
                            <label for="jawaban_d" class="form-label">Opsi A</label>
                            <input type="text" class="form-control" id="jawaban_d" name="jawaban_d" value="{{ $kuis->jawaban_d }}">                         
                        </div>

                        <div class="mb-3">
                            <label for="kunci_jawaban" class="form-label">Kunci Jawaban</label>
                            <select class="form-control" id="kunci_jawaban" name="kunci_jawaban" value="{{ $kuis->kunci_jawaban }}">
                                <option value = "a"> a </option>
                                <option value = "b"> b </option>
                                <option value = "c"> c </option>
                                <option value = "d"> d </option>
                            </select>
                        </div>

                        <div class="mb-3">
                          <label for="image" class="form-label">Upload Gambar</label>
                          <input type="file" class="form-control" id="image" name="image" value="{{ $kuis->image }}">                         
                        </div>

                        <div class="row mx-2">
                            <button type="submit" class="btn btn-primary mb-3">Update</button>
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
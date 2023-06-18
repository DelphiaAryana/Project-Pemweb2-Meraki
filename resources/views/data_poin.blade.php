<!doctype html>
<html lang="en">
  <head>
  	<title>Data Score Kuis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
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
        <div class="container mt-3">
          <div class="row">
              <div class="col-md-10">
                  <center><h2>Data Score Kuis</h2></center>

                  <a href="{{ route('data_point.create') }}" class="btn btn-success">Tambah Data</a>
                  <a href="{{ route('export.pdf') }}" class="btn btn-info text-white ">Export PDF</a>
  
                  <table class="table" style="margin-top: 5%">
                      <thead>
                          <tr align="center">
                              <th scope="col">Peringkat</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Score</th>
                              <th scope="col">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          @php
                              $n= 1;
                          @endphp
                          @foreach ($poin as $score)
                          <tr align="center">
                              <th scope="row">{{ $n }}</th>
                              <td>{{ $score->name }}</td>
                              <td>{{ $score->poin_kuis }}</td>
                            <td>
                              <div style="display: flex; gap: 10px;">
                                  <a href="{{ route('data_point.edit', $score->id) }}" class="btn btn-primary">Edit</a>
                                  <form action="{{ route('data_point.destroy', $score->id) }}" method="POST" class="d-inline">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
                                  </form>
                              </div>
                          </td>
                          </tr>
                          @php
                              $n++;
                          @endphp
                          @endforeach
  
                      </tbody>
                    </table>
              </div>
          </div>
      </div>
      </div>
		</div>

	<script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
	<script src="{!! asset('assets/js/popper.js') !!}"></script>
	<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('assets/js/main2.js') !!}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
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
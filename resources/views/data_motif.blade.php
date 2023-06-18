<!doctype html>
<html lang="en">
  <head>
  	<title>Data Motif Sasirangan</title>
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
		  		<h1><a href="{{ route('admin.index') }}" class="logo">Meraki<span>Halaman Admin</span></a></h1>
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
        <div class="data">

          <h2 align="center">Data Motif Sasirangan</h2><br>

          <a href="{{ route('data_motif.create') }}" class="btn btn-success">Tambah Data</a>
          
          <br><br>

          <table class="table">
              <thead>
                  <tr align="center">
                      <th scope="col">Nama</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Gambar</th>
                  </tr>
              </thead>
              <tbody>
                  @php
                      $no = 1;
                  @endphp
  
                  @foreach ($motif as $item)
                  <tr>
                      <td>{{ $item->nama }}</td>
                      <td align="justify">{{ $item->deskripsi }}</td>
                      <td><img src="{!! asset('storage/app/'.$item->image) !!}" alt="$item->image" width="100" height="100"></td>
                      <td>
                        <div style="display: flex; gap: 10px;">
                            <a href="{{ route('data_motif.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('data_motif.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
                            </form>
                        </div>
                    </td>
                  </tr>
  
                  @php
                      $no++;
                  @endphp
                  @endforeach
              </tbody>
          </table>
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

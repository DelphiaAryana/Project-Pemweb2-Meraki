<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{!! asset('assets/css/styleSidebar.css') !!}" rel="stylesheet">

</head>
<body>
    <div class="container-sidebar">

        <div class="sidebar">
          <div class="header">
            <div class="list-item">
              <a href="#">
                <img src="" alt="" class="icon">
                <span clas="description-header">Halaman Admin</span>
              </a>
            </div>

            <div class="ilustration">
              <img src="{!! asset('assets/img/icon_sidebar.png') !!}" alt="icon sidebar">
            </div>
    
          </div>
          <div class="main">
            <div class="list-item">
                <a href="{{ route('admin.index') }}">
                  <img src="{!! asset('assets/img/home.png') !!}" alt="icon home" class="icon" width="20px" height="20px">
                  <span class="description">Beranda Admin</span>
                </a>
              </div>
            <div class="list-item">
              <a href="{{ route('admin.showDataPengguna') }}">
                <img src="{!! asset('assets/img/pengguna.png') !!}" alt="icon user" class="icon" width="20px" height="20px">
                <span class="description">Data Pengguna</span>
              </a>
            </div>
    
            <div class="list-item">
              <a href="">
                <img src="{!! asset('assets/img/pattern.png') !!}" alt="icon motif" class="icon" width="20px" height="20px">
                <span class="description">Data Motif Sasirangan</span>
      
              </a>
            </div>
    
            <div class="list-item">
              <a href="">
                <img src="{!! asset('assets/img/style.png') !!}" alt="icon style" class="icon" width="20px" height="20px">
                <span class="description">Data Modern Style</span>
              </a>
            </div>
            <div class="list-item">
                <a href="">
                    <img src="{!! asset('assets/img/kuis.png') !!}" alt="icon kuis" class="icon" width="20px" height="20px">
                    <span class="description">Data Soal Kuis</span>
                </a>
            </div>
            <div class="list-item">
                <a href="">
                    <img src="{!! asset('assets/img/jawaban.png') !!}" alt="icon jawaban" class="icon" width="20px" height="20px">
                    <span class="description">Data Jawaban</span>
                </a>
            </div>
            <div class="list-item">
                <a href="">
                    <img src="{!! asset('assets/img/nilai.webp') !!}" alt="icon poin" class="icon" width="20px" height="20px">
                    <span class="description">Data Point</span>
                </a>
            </div>
            <div class="logout">
                <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
            </div>
          </div>
        </div>
        <div class="main-content">
        
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-10">
                        <center><h2>Data Pengguna</h2></center>
        
                        <table class="table" style="margin-top: 5%">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $n= 1;
                                @endphp
                                @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $n }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ($user->is_admin)== 1 ? "Admin" : "Mahasiswa" }}</td>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

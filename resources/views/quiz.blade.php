<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous">
    </script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <link href="assets/css/styleKuis.css" rel="stylesheet">
</head>
<body>
    <div class="icons">
        <a style="text-decoration:black; font-size:40px; color: #daa520;"class="fa-sharp fa-solid fa-coins" id="koin">&nbsp;0</a>  
    </div>
    @include('sweetalert::alert')
    @foreach ($kuis as $soal => $item)
    <section class="section-{{ $soal + 1 }}" id="section-{{ $soal + 1 }}" style="{{ $soal > 0 ? 'display:none' : '' }}" >
    <div class="icons">
        <button class="hint" onclick="bukaKunci('{{ $item->kunci_jawaban }}', '{{ $item->jawaban_a }}', '{{ $item->jawaban_b }}', '{{ $item->jawaban_c }}', '{{ $item->jawaban_d }}')">Kunci Jawaban</button>     
    </div>
<div class="body">
    <div class="grid questions">
    <div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <p align="justify" style="font-size: 15px"><span class="label label-warning" id="qid" ></span> {{ $item->soal }}</p>
        </div>
        <div class="modal-body">
            <div class="col-xs-3 col-xs-offset-5">
               <div id="loadbar" style="display: none;">
                  <div class="blockG" id="rotateG_01"></div>
                  <div class="blockG" id="rotateG_02"></div>
                  <div class="blockG" id="rotateG_03"></div>
                  <div class="blockG" id="rotateG_04"></div>
                  <div class="blockG" id="rotateG_05"></div>
                  <div class="blockG" id="rotateG_06"></div>
                  <div class="blockG" id="rotateG_07"></div>
                  <div class="blockG" id="rotateG_08"></div>
              </div>
          </div> 
          <div class="quiz" id="quiz" data-toggle="buttons">
           <label class="element-animation1 btn btn-lg btn-primary btn-block" for="one-a-{{ $soal + 1 }}" onclick="checkAnswer('{{$item->kunci_jawaban}}', 'one-a-{{ $soal + 1 }}','a')"><span class="btn-label">
            <i class="glyphicon glyphicon-chevron-right"></i></span> 
            <input  type="radio" id="one-a-{{ $soal + 1 }}" name="yes-{{ $soal + 1 }}" required>{{ $item->jawaban_a }}</label>

            <label class="element-animation1 btn btn-lg btn-primary btn-block" for="one-b-{{ $soal + 1 }}" onclick="checkAnswer('{{$item->kunci_jawaban}}', 'one-b-{{ $soal + 1 }}','b')"><span class="btn-label">
            <i class="glyphicon glyphicon-chevron-right"></i></span> 
            <input  type="radio" id="one-b-{{ $soal + 1 }}" name="yes-{{ $soal + 1 }}" required>{{ $item->jawaban_b }}</label>

            <label class="element-animation1 btn btn-lg btn-primary btn-block" for="one-c-{{ $soal + 1 }}" onclick="checkAnswer('{{$item->kunci_jawaban}}', 'one-c-{{ $soal + 1 }}','c')"><span class="btn-label">
            <i class="glyphicon glyphicon-chevron-right"></i></span> 
            <input type="radio"  id="one-c-{{ $soal + 1 }}" name="yes-{{ $soal + 1 }}" required>{{ $item->jawaban_c }}</label>

            <label class="element-animation1 btn btn-lg btn-primary btn-block" for="one-d-{{ $soal + 1 }}" onclick="checkAnswer('{{$item->kunci_jawaban}}', 'one-d-{{ $soal + 1 }}','d')"><span class="btn-label">
            <i class="glyphicon glyphicon-chevron-right"></i></span> 
            <input type="radio"  id="one-d-{{ $soal + 1 }}" name="yes-{{ $soal + 1 }}" required>{{ $item->jawaban_d }}</label>
       </div>
   </div>
   <div class="modal-footer text-muted">
    <span id="answer"></span>
</div>
</div>
</div>
</div>
    </div>
    <div class="grid image"><img src = "{!! asset('storage/app/'.$item->image) !!}">
        @if ($soal + 1 < count($kuis))
         <button type="button" class="next" onclick="nextSection({{ $soal + 1 }})">Next &raquo;</button>
        @else
        <button class="selesai" style="font-size: 20px" onclick="selesai()">Selesai</button>     
        @endif
    </div>
</div>
</section>
@endforeach
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
<script>
    $(function(){
    
    $("label.btn").on('click',function () {
    	// var choice = $(this).find('input:radio').val();
    	// $('#loadbar').show();
    	// $('#quiz').fadeOut();
    	setTimeout(function(){    
            $('#quiz').show();
            $('#loadbar').fadeOut();
           /* something else */
    	}, 1500);
    });
    });	


    function updateKoin() {
        const koinElement = document.getElementById('koin');
        koinElement.innerHTML = "&nbsp;" + koin.toString();
    }

    function nextSection(currentIndex) {
      document.getElementById(`section-${currentIndex}`).style.display = 'none';
      const nextIndex = currentIndex + 1;
      document.getElementById(`section-${nextIndex}`).style.display = 'block';
    }

    let skor = 0;
    let koin = 0;
  
    function checkAnswer(correctAnswer, selectedOption, Jawaban) {
      const label = document.querySelector(`label[for="${selectedOption}"]`);
      const radio = document.getElementById(selectedOption);
  
      if (Jawaban === correctAnswer) {
        label.style.backgroundColor = 'green';
        skor+=5;
        koin+=1;
      } else {
        label.style.backgroundColor = 'red';
      }

      updateKoin();

    }

    function selesai() {
        let userId = '<?php echo Auth::user()->id; ?>';
        let leaderboardUrl = `<?php echo route('leaderboard.show', ['__score__', '__user__']) ?>`;
        leaderboardUrl = leaderboardUrl.replace('__score__', skor).replace('__user__', userId);

        Swal.fire({
            title: 'Skor: ' + skor,
            text: 'Klik URL leaderboard di bawah untuk melihat peringkatmu.',
            footer: '<a id="score-link" href="' + leaderboardUrl + '">Leaderboard</a>',
            showConfirmButton: false
        });
    }
    
    function bukaKunci(jawaban, jawabanA, jawabanB, jawabanC){
        if (koin >= 5){
            koin = koin - 5;
            if (jawaban === 'a'){
                Swal.fire("Jawaban: <br>" + jawabanA)
            }
            else if (jawaban === 'b'){
                Swal.fire("Jawaban: <br>" + jawabanB)
            } 
            else if (jawaban === 'c'){
                Swal.fire("Jawaban: <br>" + jawabanC)
            }
            else if (jawaban === 'd'){
                Swal.fire("Jawaban: <br>" + jawabanD)
            }
        } else {
            Swal.fire('Koin belum cukup untuk membuka kunci jawaban.')
        }
        updateKoin();
    }
</script>
</body>
</html>
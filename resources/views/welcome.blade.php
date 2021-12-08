@extends('layouts.master')
    @section('content')
    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{asset('/image')}}/gambar/TOEFL.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <br><br><br>
      <h3 class="text-center" style="color: #b06c49; font-size: 25pt;">. . . . . . . . . . . . . . . . . . . . . . . . . . . .</h3>
      <h2 class="text-center font-wb" style="color: #b06c49; font-size: 35pt;"><i class="bi bi-book pe-2"></i> STUDYIT! <i class="bi bi-book ps-2"></i></h2>
      <h3 class="text-center" style="color: #b06c49;">Kursus TOEFL</h3>
      <h3 class="text-center" style="color: #b06c49; font-size: 25pt;">. . . . . . . . . . . . . . . . . . . . . . . . . . . .</h3>
      
      <div class="row">
          <div class="col-md-4 text-center p-5">
              <img src="{{asset('/image')}}/gambar/study.png" width="300px">
          </div>
          <div class="col-md-4 pt-5">
              <h2 class="text-center font-wb ps-2 pe-2 pb-3" style="color: #642b09; font-family: century gothic; font-size: 27pt;">WELCOME ADMIN</h1>
              <p style="font-family: century gothic; font-size: 14pt; text-align: justify;">
                Selamat Datang Admin StudyIt!. StudyIt! adalah start-up yang bergerak dibidang Digital Education dengan berbagai program yang menarik.
              </p>
          <div class="text-center">
              <a href="/customer" class="btn btn-warning fw-bold mt-2">Data Pendaftar TOEFL</a>
          </div>
          </div>
          <div class="col-md-4 text-center p-5">
              <img src="{{asset('/image')}}/gambar/study.png" width="300px">
          </div>
    </div>

    @endsection 
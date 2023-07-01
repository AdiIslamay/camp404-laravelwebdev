@extends('layouts.main')

@section('header')
<div class="container px-4 px-lg-5 my-5">
    <div class="text-center text-white">
        <h1 class="display-5 fw-bolder">About Us</h1>
        <p class="lead fw-normal text-white-50 mb-0">Toko CDAM bergerak dibidang Retail Sepatu</p>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col md-6">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/company.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
        </div>
        <div class="col mb-6">
            <h4>About Toko CDAM</h4>
            <p>
                
                Founded in January 2023, Toko CDAM Merupakan toko retail yang menjual berbagai macam merk sepatu ternama 
                seperti Adidas, ASICS, Converse, Hoka One One, New Balance, Nike, Puma, Reebok, Skechers, dan masih banyak lagi. 

                Di Toko CDAM kami bertujuan untuk memberi pengalaman berbelanja di satu tempat yang kami sebut Toko CDAM.  
                Dengan berbagai jenis pilihan olahraga tepat di ujung jari Anda, kami memberikan tempat yang melayani semua penggemar olahraga dari berbagai tingkatan, 
                mulai dari pemula hingga profesional. Di Toko CDAM kami dengan bangga menyediakan pelayanan paling lengkap kepada para pelanggan setia kami; memberi petunjuk mengenai teknik, 
                nutrisi dan pelatihan di berbagai kanal,melalui siaran video langsung, artikel dan video berdasarkan informasi dan pengetahuan dari para atlet professional kami. 
                Toko & produk kami yang telah berpengalaman akan semakin melengkapi pengalaman belanja Anda, dengan memberikan rekomendasi produk yang paling tepat untuk masing-masing pelanggan Toko CDAM.
            </p>
        </div>
    </div>
</div>
    
@endsection
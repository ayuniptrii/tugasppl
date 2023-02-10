@extends('layout.guest')

@section('content')
@include('partial.nav')
<!-- ======= Popular Courses Section ======= -->
<section id="popular-courses" class="courses">
    <header class="section-header mt-5">
        <p>Shop</p>
        <h3>Here listed all of our product</h3>
    </header>
    <div class="container d-flex my-5">
        <div>
            @for ($i=0;$i<5;$i++) <div class="row mb-4">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <a href="/shop/1">
                        <div class="shadow border border-1">
                            <img src="{{ asset('img/Product/sock.jpg') }}" class="img-fluid" alt="...">
                            <div class="course-content" style="color: black">
                                <div class="d-flex justify-content-between align-items-center ms-3">
                                    <h5>Kaos Kaki Hitam Motif Jordan</h5>
                                </div>
                                <p class=" h3 price my-auto ms-3 mb-2">Rp. 50.000</p>
                            </div>
                        </div>
                    </a>
                </div> <!-- End Course Item-->
        @endfor
    </div>
    </div>
</section><!-- End Popular Courses Section -->
@endsection
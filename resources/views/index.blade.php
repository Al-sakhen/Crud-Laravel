@extends('layouts.master')

@section('content')
    <main id="main" class="py-5">
        <div class="text-center">
            <h1>Information</h1>
        </div>
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">
                    @foreach ($informations as $info)
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-activity icon"></i></div>
                                <h4><a href="" class="stretched-link">{{ $info->title }}</a></h4>
                                <p>{{ $info->description }}</p>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach
                </div>

            </div>
        </section><!-- End Featured Services Section -->
    </main><!-- End #main -->
@endsection




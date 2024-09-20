@extends('layouts.app')

@section('content')
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('{{ asset("metro/img/slider2.jpg") }}')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>Toshkent <span>Metropoliteniga</span> Xush kelibsiz <span>!</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider" style="background-image:url('{{ asset("metro/img/slider.jpg")}}')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>Toshkent <span>Metropoliteniga</span> Xush kelibsiz <span>!</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider" style="background-image:url('{{ asset("metro/img/slider3.jpg")}}')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>Toshkent <span>Metropoliteniga</span> Xush kelibsiz <span>!</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>TASH | METRO VAKANSIYALARI</h2>
                        <p>Agar siz biz qidirayotgan nomzod bo‘lsangiz, o‘zimiz sizni topamiz</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="single-table">
                            <div class="table-head">
                                <h4 class="title">{{ $category->name }}</h4>
                            </div>
                            <ul class="table-list">
                                <li><i class="icofont icofont-ui-check"></i>{{ $category->works_count ?? 0 }} ta vakansiya</li>
                                <li><i class="icofont icofont-ui-check"></i>{{ $category->price }}</li>
                            </ul>
                            <div class="table-bottom">
                                <a class="btn" href="{{ route("work",$category->id) }}">Ko'rib Chiqish</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

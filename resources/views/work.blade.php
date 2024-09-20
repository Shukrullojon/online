@extends('layouts.app')

@section('content')

    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>{{ $category->name }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($works as $work)
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="single-table">
                            <div class="table-head">
                                <h4 class="title">{{ $work->name }}</h4>
                            </div>
                            <ul class="table-list">
                                <li><i class="icofont icofont-ui-check"></i>{{ \App\Models\Work::$work_type_status[$work->work_type] ?? "" }}</li>
                                <li><i class="icofont icofont-ui-check"></i>{{ $work->experence }}</li>
                                <li><i class="icofont icofont-ui-check"></i>{{ $work->salary }}</li>
                                <li><i class="icofont icofont-ui-check"></i>{{ $work->info }}</li>
                                <li><i class="icofont icofont-ui-check"></i>{{ $work->requir }}</li>
                                <li><i class="icofont icofont-ui-check"></i>{{ $work->offer }}</li>
                            </ul>
                            <div class="table-bottom">
                                <a class="btn" href="{{ route("resume",$work->id) }}">Resumeni Yuborish</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

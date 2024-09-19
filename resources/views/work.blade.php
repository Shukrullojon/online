@extends('layouts.app')

@section('content')

    <div class="w3-container w3-center w3-dark-grey" style="padding:64px 16px" id="pricing">
        <p class="w3-large" style="margin-bottom: -40px">{{ $category->name }}</p>

        <div class="w3-row-padding" style="margin-top:32px">

            @foreach($works as $work)
                <div class="w3-third w3-section">
                    <ul class="w3-ul w3-white w3-hover-shadow">
                        <li class="w3-padding-16">
                            {{ $work->name }} <br>
                            {{ \App\Models\Work::$work_type_status[$work->work_type] ?? "" }} <br>
                            {{ $work->experence }} <br>
                            {{ $work->salary }} <br>
                            {{ $work->info }} <br>
                            {{ $work->requir }} <br>
                            {{ $work->offer }} <br>
                            <button style="color: green"><a href="{{ route("resume",$work->id) }}">Resumeni Yuborish</a></button>
                        </li>
                    </ul>
                </div>
            @endforeach

        </div>
    </div>

@endsection

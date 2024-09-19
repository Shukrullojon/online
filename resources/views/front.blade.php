@extends('layouts.app')

@section('content')

    <div class="w3-container w3-center w3-dark-grey" style="padding:64px 16px" id="pricing">
        <h3>TASH | METRO VAKANSIYALARI</h3>
        <p class="w3-large">Agar siz biz qidirayotgan nomzod bo‘lsangiz, o‘zimiz sizni topamiz</p>
        <div class="w3-row-padding" style="margin-top:32px">

            @foreach($categories as $category)
                <div class="w3-third w3-section">
                    <a href="{{ route("work",$category->id) }}">
                        <ul class="w3-ul w3-white w3-hover-shadow">
                            <li class="w3-padding-16">{{ $category->works_count ?? 0 }} ta vakansiya</li>
                            <li class="w3-padding-16">{{ $category->price }}</li>
                            <li class="w3-padding-16">{{ $category->name }}</li>
                        </ul>
                    </a>
                </div>
            @endforeach

        </div>
    </div>


@endsection

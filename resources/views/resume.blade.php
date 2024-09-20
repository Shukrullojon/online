@extends('layouts.app')

@section('content')

    <div class="w3-container w3-center w3-dark-grey" style="padding:64px 16px" id="pricing">
        <p class="w3-large" style="margin-left: 250px">{{ $work->name }} vakansiya uchun pastdagi malumotlarni to'ldiring</p>

        <div class="w1-row-padding" style="margin-top:32px">
            <form method="POST" action="{{ route("send_resume", $work->id) }}">
                @csrf
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <input name="fio" type="text" placeholder="FIO" required class="form-control">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <input name="phone" type="text" placeholder="Telefon Raqam" required class="form-control">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <input name="tg_username" type="text" placeholder="Telegram Username" required class="form-control">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <textarea class="form-control" name="additional" placeholder="Qo'shimcha Malumot">Qo'shimcha Malumot</textarea>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="submit" class="form-control btn btn-success">Yuborish</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>

            </form>

        </div>
    </div>


@endsection

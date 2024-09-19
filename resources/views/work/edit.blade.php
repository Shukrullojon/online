@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Изменить Работа</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($work, ['method' => 'PATCH','route' => ['work.update', $work->id]]) !!}
                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="category_id"><strong>Категория:</strong></label>{!! Form::label('position_id',"*",['style'=>"color:red"]) !!}
                                    {!! Form::select('category_id',$categories, null, ['autocomplete'=>'OFF','id'=>'category_id','required'=>true,'class' => "form-control ".($errors->has('category_id') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('category_id'))
                                        <span class="error invalid-feedback">{{ $errors->first('category_id') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="name"><strong>Название:</strong></label>{!! Form::label('name',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('name', null, ['autocomplete'=>'OFF','id'=>'name','placeholder' => 'Название','required'=>true,'class' => "form-control ".($errors->has('name') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('name'))
                                        <span class="error invalid-feedback">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="work_type"><strong>Тип работы:</strong></label>{!! Form::label('work_type',"*",['style'=>"color:red"]) !!}
                                    {!! Form::select('work_type', \App\Models\Work::$work_type_status,null, ['autocomplete'=>'OFF','id'=>'work_type','required'=>true,'class' => "form-control ".($errors->has('work_type') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('work_type'))
                                        <span class="error invalid-feedback">{{ $errors->first('work_type') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="experence"><strong>Опыт:</strong></label>{!! Form::label('name',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('experence', null, ['autocomplete'=>'OFF','id'=>'name','placeholder' => 'Опыт','required'=>true,'class' => "form-control ".($errors->has('experence') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('experence'))
                                        <span class="error invalid-feedback">{{ $errors->first('experence') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="salary"><strong>Цена:</strong></label>{!! Form::label('salary',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('salary', null, ['autocomplete'=>'OFF','id'=>'salary','placeholder' => 'Цена','required'=>true,'class' => "form-control ".($errors->has('salary') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('salary'))
                                        <span class="error invalid-feedback">{{ $errors->first('salary') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="info"><strong>Информация:</strong></label>{!! Form::label('info',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('info', null, ['autocomplete'=>'OFF','id'=>'info','placeholder' => 'Информация','class' => "form-control ".($errors->has('info') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('info'))
                                        <span class="error invalid-feedback">{{ $errors->first('info') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="requir"><strong>Требовать:</strong></label>{!! Form::label('requir',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('requir', null, ['autocomplete'=>'OFF','id'=>'requir','placeholder' => 'Требовать','class' => "form-control ".($errors->has('requir') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('requir'))
                                        <span class="error invalid-feedback">{{ $errors->first('requir') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="offer"><strong>Предложение:</strong></label>{!! Form::label('offer',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('offer', null, ['autocomplete'=>'OFF','id'=>'offer','placeholder' => 'Предложение','class' => "form-control ".($errors->has('offer') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('offer'))
                                        <span class="error invalid-feedback">{{ $errors->first('offer') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <br>
                                <button type="submit" class="btn btn-primary form-control">Редактировать</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

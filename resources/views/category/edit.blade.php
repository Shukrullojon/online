@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Изменить Категория</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($category, ['method' => 'PATCH','route' => ['category.update', $category->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name"><strong>Название:</strong></label>{!! Form::label('name',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('name', null, ['autocomplete'=>'OFF','id'=>'name','placeholder' => 'Название','required'=>true,'class' => "form-control ".($errors->has('name') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('name'))
                                        <span class="error invalid-feedback">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="price"><strong>Цена:</strong></label>{!! Form::label('price',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('price', null, ['autocomplete'=>'OFF','id'=>'price','placeholder' => 'Цена','required'=>true,'class' => "form-control ".($errors->has('price') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('price'))
                                        <span class="error invalid-feedback">{{ $errors->first('price') }}</span>
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

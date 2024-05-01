@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit lesson</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($lesson, ['method' => 'PATCH','route' => ['lesson.update', $lesson->id]]) !!}
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name"><strong>Name:</strong></label>{!! Form::label('name',"*",['style'=>"color:red"]) !!}
                                    {!! Form::text('name', null, ['autocomplete'=>'OFF','id'=>'name','placeholder' => 'Name','required'=>true,'class' => "form-control ".($errors->has('name') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('name'))
                                        <span class="error invalid-feedback">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="info"><strong>Info:</strong></label>{!! Form::label('info',"*",['style'=>"color:red"]) !!}
                                    {!! Form::textarea('info', null, ['rows' => 3,'autocomplete'=>'OFF','id'=>'info','placeholder' => 'Info','required'=>true,'class' => "form-control ".($errors->has('info') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('info'))
                                        <span class="error invalid-feedback">{{ $errors->first('info') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="cource_id"><strong>Cource:</strong></label>{!! Form::label('cource_id',"*",['style'=>"color:red"]) !!}
                                    {!! Form::select('cource_id',$cources, $lesson->cource_id, ['autocomplete'=>'OFF','id'=>'cource_id','required'=>true,'class' => "form-control ".($errors->has('cource_id') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('cource_id'))
                                        <span class="error invalid-feedback">{{ $errors->first('cource_id') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="status"><strong>Status:</strong></label>{!! Form::label('status',"*",['style'=>"color:red"]) !!}
                                    {!! Form::select('status', \App\Models\Lesson::$statuses,$lesson->status, ['autocomplete'=>'OFF','id'=>'status','required'=>true,'class' => "form-control ".($errors->has('status') ? 'is-invalid' : '')]) !!}
                                    @if($errors->has('status'))
                                        <span class="error invalid-feedback">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <br>
                                <button type="submit" class="btn btn-primary form-control">Edit</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

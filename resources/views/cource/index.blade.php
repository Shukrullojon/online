@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cource Management</h3>

                        @can('cource-create')
                            <a href="{{ route('cource.create') }}" class="btn btn-success btn-sm float-right">
                                <span class="fas fa-plus-circle"></span>
                                Create
                            </a>
                        @endcan

                        @can('cource-filter')
                            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#cource_filter" style="margin-right: 5px">
                                <span class="fas fa-filter"></span> Filtr
                            </button>
                        @endcan
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <!-- Data table -->
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Info</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cources as $cource)
                                <tr>
                                    <td>{{ $cource->name }}</td>
                                    <td>{{ $cource->info }}</td>
                                    <td>{{ number_format($cource->price) }} UZS</td>
                                    <td>{{ \App\Models\Cource::$statuses[$cource->status] }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            @can('cource-show')
                                                <a class="" href="{{ route('cource.show',$cource->id) }}"
                                                   style="margin-right: 7px">
                                                    <span class="fa fa-eye"></span>
                                                </a>
                                            @endcan

                                            @can('cource-edit')
                                                <a class="" href="{{ route('cource.edit',$cource->id) }}"
                                                   style="margin-right: 2px">
                                                    <span class="fa fa-edit" style="color: #562bb0"></span>
                                                </a>
                                            @endcan

                                            @can('cource-destroy')
                                                <form action="{{ route("cource.destroy", $cource->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="button"
                                                            style='display:inline; border:none; background: none'
                                                            onclick="if (confirm('Вы уверены?')) { this.form.submit() } "><span
                                                            class="fa fa-trash"></span></button>
                                                </form>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfooter>
                                <tr>
                                    <td colspan="12">
                                        {{ $cources->withQueryString()->links()   }}
                                    </td>
                                </tr>
                            </tfooter>
                        </table>

                        <div class="modal fade" id="cource_filter">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Filtr</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::open(['method'=>'GET']) !!}
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Name:</strong>
                                                    {!! Form::text('name', request()->get('name'), ['placeholder' => 'Name','maxlength'=> 100,'class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Info:</strong>
                                                    {!! Form::text('info', request()->get('info'), ['placeholder' => 'Info','maxlength'=> 100,'class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Price:</strong>
                                                    {!! Form::text('price', request()->get('price'), ['placeholder' => 'Price','class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Status:</strong>
                                                    {!! Form::select('status', \App\Models\Cource::$statuses,request()->get('status'), ['placeholder' => '','maxlength'=> 100,'class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Filtr</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Управление Приложения</h3>
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
                        <table id="dataTable"
                               class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                               user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Работа</th>
                                <th>Фио</th>
                                <th>Телефон</th>
                                <th>Тг</th>
                                <th>Информация</th>
                                <th>Статус</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($submits as $submit)
                                <tr>
                                    <td>{{ $submit->work->name ?? "" }}</td>
                                    <td>{{ $submit->fio }}</td>
                                    <td>{{ $submit->phone }}</td>
                                    <td>{{ $submit->tg_username }}</td>
                                    <td>{{ $submit->additional }}</td>
                                    <td>{{ \App\Models\Submit::$status_list[$submit->status] ?? "" }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                                <a class="" href="{{ route('submit.edit',$submit->id) }}"
                                                   style="margin-right: 2px">
                                                    <span class="fa fa-edit" style="color: #562bb0"></span>
                                                </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfooter>
                                <tr>
                                    <td colspan="12">
                                        {{ $submits->withQueryString()->links()   }}
                                    </td>
                                </tr>
                            </tfooter>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

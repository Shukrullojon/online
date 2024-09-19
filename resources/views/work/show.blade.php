@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Показать Работа</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Категория</th>
                                <td>{{ $work->category->name ?? "" }}</td>
                            </tr>

                            <tr>
                                <th>Название</th>
                                <td>{{ $work->name }}</td>
                            </tr>

                            <tr>
                                <th>Тип работы</th>
                                <td>{{ \App\Models\Work::$work_type_status[$work->work_type] ?? "" }}</td>
                            </tr>

                            <tr>
                                <th>Опыт</th>
                                <td>{{ $work->experence }}</td>
                            </tr>

                            <tr>
                                <th>Цена</th>
                                <td>{{ $work->salary }}</td>
                            </tr>

                            <tr>
                                <th>Информация</th>
                                <td>{{ $work->info }}</td>
                            </tr>

                            <tr>
                                <th>Требовать</th>
                                <td>{{ $work->requir }}</td>
                            </tr>

                            <tr>
                                <th>Предложение</th>
                                <td>{{ $work->offer }}</td>
                            </tr>

                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

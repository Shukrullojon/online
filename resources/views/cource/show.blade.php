@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Show cource</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <td>{{ $cource->name }}</td>
                            </tr>

                            <tr>
                                <th>Info</th>
                                <td>{!! $cource->info !!}</td>
                            </tr>

                            <tr>
                                <th>Price</th>
                                <td>{{ number_format($cource->price) }} UZS</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ \App\Models\Cource::$statuses[$cource->status] }}</td>
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

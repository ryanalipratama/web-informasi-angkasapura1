@extends('admin.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <!-- Konten utama -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Skill</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Skill</th>
                                <th>Persentasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ourskill as $o)
                                <tr>
                                    <td>{{ $o->id }}</td>
                                    <td>{{ $o->skill }}</td>
                                    <td>{{ $o->persentase }}</td>
                                    <td>
                                        <a href="{{ route('admin.ourskill.edit', ['id' => $o->id]) }}" class="btn btn-primary">
                                            <i class="fas fa-pen"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@endsection

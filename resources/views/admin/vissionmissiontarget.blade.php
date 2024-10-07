@extends('admin.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <!-- Konten utama -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Vission Mission Target</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Judul</th>
                                <th style="max-width: 400px;">Deskripsi</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vissionmissiontarget as $v)
                                <tr>
                                    <td>{{ $v->id }}</td>
                                    <td>{{ $v->judul }}</td>
                                    <td>
                                        <div style="max-height: 100px; max-width: 400px; overflow-y: auto; white-space: normal; margin: 0; padding: 0; line-height: 1.2; text-align: justify;">
                                            {{ $v->deskripsi }}
                                        </div>
                                    </td>
                                    <td>
                                        @if ($v->icon)
                                            <img src="{{ asset($v->icon) }}" style="max-width: 100px;">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.vissionmissiontarget.edit', ['id' => $v->id]) }}" class="btn btn-primary">
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

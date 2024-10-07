@extends('admin.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <!-- Konten utama -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Airport Technology</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Judul</th>
                                <th style="max-width: 300px;">Konten</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($airporttechnology as $a)
                                <tr>
                                    <td>{{ $a->id }}</td>
                                    <td>{{ $a->judul }}</td>
                                    <td>
                                        <div style="max-height: 100px; max-width: 300px; overflow-y: auto; white-space: normal; margin: 0; padding: 0; line-height: 1.2; text-align: justify;">
                                            {{ $a->konten }}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.airporttechnology.edit', ['id' => $a->id]) }}" class="btn btn-primary">
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
    <a href="airporttechnologyimage" class="btn btn-primary ml-5">
        <i class="fas fa-pen">Tambah Gambar</i> 
    </a>
</div>

@endsection

@extends('admin.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <!-- Konten utama -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Paragraf Our Service</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th style="max-width: 300px;">Paragraf</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ourservice as $o)
                                <tr>
                                    <td>{{ $o->id }}</td>
                                    <td>
                                        <div style="max-height: 100px; max-width: 300px; overflow-y: auto; white-space: normal; margin: 0; padding: 0; line-height: 1.2; text-align: justify;">
                                            {{ $o->paragraf }}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.ourservice.edit', ['id' => $o->id]) }}" class="btn btn-primary">
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
    <a href="ourservicedata" class="btn btn-primary ml-5">
        <i class="fas fa-pen">Tambah Data</i> 
    </a>
</div>

@endsection

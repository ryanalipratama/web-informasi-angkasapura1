@extends('admin.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <!-- Konten utama -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Welcome</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Judul</th>
                                <th>Konten</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($welcome as $w)
                                <tr>
                                    <td>{{ $w->id }}</td>
                                    <td>{{ $w->judul }}</td>
                                    <td>
                                        <div style="max-height: 100px; overflow-y: auto; white-space: normal; margin: 0; padding: 0; line-height: 1.2; text-align: justify">
                                            {{ $w->konten }}
                                        </div>
                                    </td>
                                    <td>
                                        @if ($w->gambar)
                                            <img src="{{ asset($w->gambar) }}" style="max-width: 100px;">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.welcome.edit', ['id' => $w->id]) }}" class="btn btn-primary">
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

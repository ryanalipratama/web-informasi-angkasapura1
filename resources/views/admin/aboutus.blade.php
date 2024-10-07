@extends('admin.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <!-- Konten utama -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data About Us</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th style="max-width: 300px;">Deskripsi</th>
                                <th>Gambar Deskripsi</th>
                                <th>Struktur Kantor Pusat</th>
                                <th>Struktur SAMS</th>
                                <th>Struktur IT SAMS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aboutus as $a)
                                <tr>
                                    <td>{{ $a->id }}</td>
                                    <td>
                                        <div style="max-height: 100px; max-width: 300px; overflow-y: auto; white-space: normal; margin: 0; padding: 0; line-height: 1.2; text-align: justify;">
                                            {{ $a->deskripsi }}
                                        </div>
                                    </td>
                                    <td>
                                        @if ($a->gambardeskripsi)
                                            <img src="{{ asset($a->gambardeskripsi) }}" style="max-width: 100px;">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($a->strukturkantorpusat)
                                            <img src="{{ asset($a->strukturkantorpusat) }}" style="max-width: 100px;">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($a->struktursams)
                                            <img src="{{ asset($a->struktursams) }}" style="max-width: 100px;">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($a->strukturitsams)
                                            <img src="{{ asset($a->strukturitsams) }}" style="max-width: 100px;">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.aboutus.edit', ['id' => $a->id]) }}" class="btn btn-primary">
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

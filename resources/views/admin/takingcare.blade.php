@extends('admin.main')
@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <a href="{{ route('admin.takingcare.create') }}" class="btn btn-primary mb-3">Tambah Gambar Taking Care</a>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Taking Care</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Judul</th>
                                            <th style="max-width: 300px;">Deskripsi</th> <!-- Menambahkan max-width -->
                                            <th>Icon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($takingcare as $t)
                                            <tr>
                                                <td>{{ $t->id }}</td>
                                                <td>{{ $t->judul }}</td>
                                                <td>
                                                    <div style="max-height: 100px; max-width: 300px; overflow-y: auto; white-space: normal; margin: 0; padding: 0; line-height: 1.2; text-align: justify;">
                                                        {{ $t->deskripsi }}
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($t->icon)
                                                        <img src="{{ asset($t->icon) }}" style="max-width: 100px;">
                                                    @endif
                                                </td>

                                                <td>
                                                    <a href="{{ route('admin.takingcare.edit', ['id' => $t->id]) }}" class="btn btn-primary">
                                                        <i class="fas fa-pen"></i> Edit
                                                    </a>
                                                    <a data-toggle="modal" data-target="#modal-hapus{{ $t->id }}" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="modal-hapus{{ $t->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah yakin ingin menghapus data ini?</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <form action="{{ route('admin.takingcare.delete', ['id' => $t->id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Ya, Hapus Data</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection

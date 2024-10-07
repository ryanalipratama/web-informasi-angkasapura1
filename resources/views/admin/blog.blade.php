@extends('admin.main')
@section('content')
    <!-- Main content -->
        <section class="content">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary mb-3">Tambah Data Blog</a>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Blog</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Judul</th>
                                            <th style="max-width: 300px;">Deskripsi</th>
                                            <th>Tanggal</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blog as $b)
                                            <tr>
                                                <td>{{ $b->id }}</td>
                                                <td>{{ $b->judul }}</td>
                                                <td>
                                                    <div style="max-height: 100px; max-width: 300px; overflow-y: auto; white-space: normal; margin: 0; padding: 0; line-height: 1.2; text-align: justify;">
                                                        {{ $b->deskripsi }}
                                                    </div>
                                                </td>
                                                <td>{{ $b->tanggal }}</td>
                                                <td>
                                                    @if ($b->gambar)
                                                        <img src="{{ asset($b->gambar) }}"
                                                            style="max-width: 100px;">
                                                    @endif
                                                </td>

                                                <td>
                                                    <a href="{{ route('admin.blog.edit', ['id' => $b->id]) }}"
                                                        class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                                                    <a data-toggle="modal" data-target="#modal-hapus{{ $b->id }}"
                                                        class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="modal-hapus{{ $b->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah yakin ingin menghapus data ini?</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <form action="{{ route('admin.blog.delete', ['id' => $b->id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Ya, Hapus
                                                                    Data</button>
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
    </div>
@endsection

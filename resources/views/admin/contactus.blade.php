@extends('admin.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <!-- Konten utama -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Contact Us</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th style="max-width: 300px;">Email</th>
                                <th>Telepon</th>
                                <th>Judul</th>
                                <th style="max-width: 300px;">Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactus as $c)
                                <tr>
                                    <td>{{ $c->id }}</td>
                                    <td>{{ $c->nama }}</td>
                                    <td>
                                        <div style="max-height: 100px; max-width: 300px; overflow-y: auto; white-space: normal; margin: 0; padding: 0; line-height: 1.2; text-align: justify;">
                                            {{ $c->email }}
                                        </div>
                                    </td>
                                    <td>{{ $c->telepon }}</td>
                                    <td>{{ $c->judul }}</td>
                                    <td>
                                        <div style="max-height: 100px; max-width: 300px; overflow-y: auto; white-space: normal; margin: 0; padding: 0; line-height: 1.2; text-align: justify;">
                                            {{ $c->deskripsi }}
                                        </div>
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target="#modal-hapus{{ $c->id }}"
                                            class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus
                                        </a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="modal-hapus{{ $c->id }}">
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
                                                <form action="{{ route('admin.contactus.delete', ['id' => $c->id]) }}" method="POST">
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

@extends('admin.main')
@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <a href="{{ route('admin.daftarnilai.create') }}" class="btn btn-primary mb-3">Tambah Data Daftar Nilai PKL</a>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Daftar Nilai PKL</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>File</th>
                                            <th>Link</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($daftarnilai as $d)
                                            <tr>
                                                <td>{{ $d->id }}</td>
                                                <td>{{ $d->namafile }}</td>
                                                <td>{{ $d->link }}</td>
                                                <td>{{ $d->remarks }}</td>
                                                <td>
                                                    <a href="{{ route('admin.daftarnilai.edit', ['id' => $d->id]) }}" class="btn btn-primary">
                                                        <i class="fas fa-pen"></i> Edit
                                                    </a>
                                                    <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="modal-hapus{{ $d->id }}">
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
                                                            <form action="{{ route('admin.daftarnilai.delete', ['id' => $d->id]) }}" method="POST">
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

@extends('admin.main')
@section('content')

        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <a href="{{ route('admin.carousellawal.create') }}" class="btn btn-primary mt-5 mb-1">Tambah Gambar Carousel Awal</a>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Carousel Awal</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carousellawal as $c)
                                            <tr>
                                                <td>{{ $c->id }}</td>
                                                <td>
                                                    @if ($c->gambar)
                                                        <img src="{{ asset($c->gambar) }}" style="max-width: 100px;">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.carousellawal.edit', ['id' => $c->id]) }}" class="btn btn-primary">
                                                        <i class="fas fa-pen"></i>Edit
                                                    </a>
                                                    <a data-toggle="modal" data-target="#modal-hapus{{ $c->id }}" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-hapus{{ $c->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah yakin ingin menghapus data gambar ini?</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <form action="{{ route('admin.carousellawal.delete', ['id' => $c->id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Ya, Hapus Data</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
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
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

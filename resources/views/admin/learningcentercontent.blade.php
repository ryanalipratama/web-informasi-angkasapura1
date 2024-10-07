@extends('admin.main')
@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <a href="{{ route('admin.learningcentercontent.create') }}" class="btn btn-primary mb-3">Upload File</a>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">File</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama File</th>
                                            <th>File</th>
                                            <th style="max-width: 300px;">Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($learningcentercontent as $l)
                                            <tr>
                                                <td>{{ $l->id }}</td>
                                                <td>{{ $l->namafile }}</td>
                                                <td>
                                                    @if ($l->file)
                                                        @php
                                                            $extension = pathinfo($l->file, PATHINFO_EXTENSION);
                                                            $filename = basename($l->file);
                                                        @endphp
                                                
                                                        {{-- Menampilkan gambar --}}
                                                        @if (in_array($extension, ['png', 'jpg', 'jpeg']))
                                                            <img src="{{ asset($l->file) }}" style="max-width: 100px;" alt="Image">
                                                            <p>{{ $filename }}</p>
                                                
                                                        {{-- Menampilkan file PDF --}}
                                                        @elseif ($extension == 'pdf')
                                                            <a href="{{ asset($l->file) }}" target="_blank">{{ $filename }}</a>
                                                
                                                        {{-- Menampilkan dokumen Word --}}
                                                        @elseif (in_array($extension, ['doc', 'docx']))
                                                            <a href="{{ asset($l->file) }}" download>{{ $filename }}</a>
                                                
                                                        {{-- Untuk file yang tidak dikenali --}}
                                                        @else
                                                            <a href="{{ asset($l->file) }}" download>{{ $filename }}</a>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    <div style="max-height: 100px; max-width: 300px; overflow-y: auto; white-space: normal; margin: 0; padding: 0; line-height: 1.2; text-align: justify;">
                                                        {{ $l->remarks }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.learningcentercontent.edit', ['id' => $l->id]) }}" class="btn btn-primary">
                                                        <i class="fas fa-pen"></i> Edit
                                                    </a>
                                                    <a data-toggle="modal" data-target="#modal-hapus{{ $l->id }}" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="modal-hapus{{ $l->id }}">
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
                                                            <form action="{{ route('admin.learningcentercontent.delete', ['id' => $l->id]) }}" method="POST">
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

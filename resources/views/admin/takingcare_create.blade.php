@extends('admin.main')
@section('content')
        <section class="content">
            <div class="container pt-5">
                <form action="{{ route('admin.takingcare.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Tambah Data Taking Care</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul</label>
                                            <input class="form-control" id="judul" name="judul" value="{{ old('judul') }}"
                                                placeholder="Masukan Judul">
                                            @error('judul')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}"
                                                placeholder="Masukan deskripsi"></textarea>
                                            @error('deskripsi')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="icon">Upload Icon</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="icon" name="icon">
                                                    <label class="custom-file-label" for="icon">Pilih Icon</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                    </div>
                </form>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

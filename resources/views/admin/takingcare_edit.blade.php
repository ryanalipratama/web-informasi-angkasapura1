@extends('admin.main')
@section('content')
    <section class="content">
        <div class="container pt-5">
            <form action="{{ route('admin.takingcare.update', ['id' => $takingcare->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Taking Care</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Masukan Judul Baru</label>
                                        <input class="form-control" id="judul" name="judul"
                                            value="{{ old('judul', $takingcare->judul) }}">
                                        @error('judul')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Masukan Deskripsi Baru</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi', $takingcare->deskripsi) }}</textarea>
                                        @error('deskripsi')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Icon</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="icon"
                                                    name="icon">
                                                <label class="custom-file-label" for="icon">Ambil Icon</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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

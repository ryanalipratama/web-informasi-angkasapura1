@extends('admin.main')
@section('content')
        <section class="content">
            <div class="container pt-5">
                <form action="{{ route('admin.aboutus.update', ['id' => $aboutus->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Edit Halaman About Us</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi', $aboutus->deskripsi) }}</textarea>
                                            @error('deskripsi')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Gambar Deskripsi</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="gambardeskripsi" name="gambardeskripsi">
                                                    <label class="custom-file-label" for="gambardeskripsi">Ambil Gambar</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Struktur Kantor Pusat</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="strukturkantorpusat" name="strukturkantorpusat">
                                                    <label class="custom-file-label" for="strukturkantorpusat">Ambil Gambar</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Struktur SAMS</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="struktursams" name="struktursams">
                                                    <label class="custom-file-label" for="struktursams">Ambil Gambar</label>
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Struktur IT SAMS</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="strukturitsams" name="strukturitsams">
                                                    <label class="custom-file-label" for="strukturitsams">Ambil Gambar</label>
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

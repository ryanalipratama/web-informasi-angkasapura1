@extends('admin.main')
@section('content')
    <section class="content">
        <div class="container pt-5">
            <form action="{{ route('admin.peraturanpkl.update', ['id' => $peraturanpkl->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Peraturan PKL</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Gambar Baru</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar"
                                                    name="gambar">
                                                <label class="custom-file-label" for="icon">Ambil Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Masukan Paragraf Baru</label>
                                        <textarea class="form-control" id="paragraf" name="paragraf">{{ old('paragraf', $peraturanpkl->paragraf) }}</textarea>
                                        @error('paragraf')
                                            <small>{{ $message }}</small>
                                        @enderror
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

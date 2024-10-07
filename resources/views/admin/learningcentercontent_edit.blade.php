@extends('admin.main')
@section('content')
    <section class="content">
        <div class="container pt-5">
            <form action="{{ route('admin.learningcentercontent.update', ['id' => $learningcentercontent->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit File Learning Center   </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Masukan Nama File Baru</label>
                                        <input class="form-control" id="namafile" name="namafile" value="{{ old('namafile', $learningcentercontent->namafile) }}">
                                        @error('namafile')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload File</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="file"
                                                    name="file">
                                                <label class="custom-file-label" for="icon">Upload file baru</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Masukan Remarks Baru</label>
                                        <textarea class="form-control" id="remarks" name="remarks">{{ old('remarks', $learningcentercontent->remarks) }}</textarea>
                                        @error('remarks')
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

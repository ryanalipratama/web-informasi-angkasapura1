@extends('admin.main')
@section('content')
    <section class="content">
        <div class="container pt-5">
            <form action="{{ route('admin.daftarnilai.update', ['id' => $daftarnilai->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Daftar Nilai</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Masukan Nama File Baru</label>
                                        <textarea class="form-control" id="namafile" name="namafile">{{ old('namafile', $daftarnilai->namafile) }}</textarea>
                                        @error('namafile')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Masukan Link Baru</label>
                                        <textarea class="form-control" id="link" name="link">{{ old('link', $daftarnilai->link) }}</textarea>
                                        @error('paragraf')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Masukan Remarks Baru</label>
                                        <textarea class="form-control" id="remarks" name="remarks">{{ old('remarks', $daftarnilai->remarks) }}</textarea>
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

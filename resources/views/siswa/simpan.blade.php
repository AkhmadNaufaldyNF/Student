@extends('utama')

@section('content')

 <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Siswa</h3>
                    </div>
                    <form action="{{url('/')}}" method="POST" role="form">
                    {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" name="nis" class="form-control" placeholder="Isi NIS"/>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Isi Nama"/>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" name="kelas" class="form-control" placeholder="Isi Kelas"/>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="jurusan" id="" class="form-control">
                                    <option value="jurusan">Pilih Jurusan</option>
                                </select>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{url('/')}}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection


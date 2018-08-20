@extends('utama')

@section('content')

 <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Data Siswa</h3>
                    </div>
                    <form action="{{action('SiswaController@update', $idsiswa)}}" method="POST" role="form">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="PUT">
                        <div class="box-body">
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" name="nis" class="form-control" value="{{$siswas->nis}}"/>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$siswas->nama}}"/>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" name="kelas" class="form-control" value="{{$siswas->kelas}}"/>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="item" class="form-control">
                                    <option value="">Pilih Jurusan</option>
                                @foreach($items as $item)
                                    <option value="{{$item->idjurusan}}" {{$siswas->idjurusan == $item->idjurusan ? 'selected="selected"' : ''}} >{{$item->deskripsi}}</option>
                                @endforeach
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


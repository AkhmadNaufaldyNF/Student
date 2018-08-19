@extends('utama')

@section('content')

<section class="content-header">
        <h1>
            DATA SISWA
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($siswas as $indexKey => $Siswa)
                                <tr>
                                    <td>{{ $indexKey+1 }}</td>
                                    <td>{{ $Siswa['nis'] }}</td>
                                    <td>{{ $Siswa['nama'] }}</td>
                                    <td>{{ $Siswa['kelas'] }}</td>
                                    <td>{{ $Siswa->jurusan->deskripsi }}</td>
                                    <td class="td-edit"><a href="" class="btn btn-warning">Ubah</a></td>
                                    <td class="td-delete">
                                        <form action="{{action('SiswaController@destroy', $Siswa['idsiswa'])}}" method=POST class="delete_form">
                                            {{csrf_field()}}
                                            <input type="hidden" value="DELETE" name="_method">
                                            <button class="btn btn-danger" type="submit">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="button-add">
                            <a href="{{route('siswa.create')}}" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

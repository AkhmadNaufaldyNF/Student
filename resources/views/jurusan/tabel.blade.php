@extends('utama')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            DATA JURUSAN
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
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($jurusans as $indexKey => $Jurusan)
                                <tr>
                                    <td>{{ $indexKey+1 }}</td>
                                    <td>{{ $Jurusan['deskripsi'] }}</td>
                                    <td class="td-edit"><a href="{{action('JurusanController@edit', $Jurusan['idjurusan'])}}" class="btn btn-warning">Ubah</a></td>
                                    <td class="td-delete">
                                        <form action="{{action('JurusanController@destroy', $Jurusan['idjurusan'])}}" method=POST class="delete_form">
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
                            <a href="{{route('jurusan.create')}}" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

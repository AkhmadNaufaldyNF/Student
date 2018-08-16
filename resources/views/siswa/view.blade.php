<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
       <div class="row">
            <div class="col-md-12">
                <br/>
                <h3>Student Data</h3>
                <br/>
                <div align="right">
                    <a href="/" class="btn btn-primary">Add</a>
                    <br/>
                    <br/>
                </div>
                <!-- <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Descriptions</th>                        
                    </tr>
                    @foreach($students as $indexKey => $Student)
                    <tr>
                        <td>{{ $indexKey+1 }}</td>
                        <td>{{ $Student['deskripsi'] }}</td>
                    </tr>
                    @endforeach
                </table> -->
            </div>
       </div>
    </body>
</html>

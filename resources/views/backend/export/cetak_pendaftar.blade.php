<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" sizes="96x96" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PPDB Online Tahun {{$pendaftaran->tahun_ajaran}}</title>
    <style type="text/css">
        @font-face {
            font-family: 'Roboto',sans-serif;
            src: url("https://fonts.googleapis.com/css?family=Roboto&display=swap") format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body{
            font-family: 'Roboto',sans-serif;
        }
        p,
		table tr td,
		table tr th{
			font-size: 12px;
		}
	</style>
</head>
<body>
    <img src="{{ public_path('images/logo.png')}}" class="img-fluid float-left" width="15%">
    <img src="{{ public_path('images/logo.png')}}" class="img-fluid float-right" width="15%">
    <div class="text-center">
        <h6>LEMBAGA PENDIDIKAN MA'ARIF NU KOTA SEMARANG</h6>
        <h4 style="margin-top:-5px">MA HIDAYATUS SYUBBAN</h4>
        <p style="margin-top:-8px;font-size:16px"><i>TERAKREDITASI A</i></p>
        <p style="margin-top:-15px"><i>Akte Notaris No. 043 Tahun 1983</i></p>
        @foreach ($kontak as $k)
        <p style="margin-top:-15px">{{$k->alamat}}, Telp. {{$k->telepon}}</p>
        @endforeach
        <hr style="border:2px solid">
        <hr style="border:1px solid;margin-top:-15px;">
    </div>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>NO</th>
                <th>NO. PENDAFTARAN</th>
                <th>NAMA</th>
                <th>ASAL SEKOLAH</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pendaftaran->formulir as $form)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$form->no_pendaftaran}}</td>
                <td>{{$form->nama}}</td>
                <td>{{$form->asal_sekolah}}</td>
                <td>{{$form->status_daftar}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-9 text-right">
            <p>Semarang, {{\Date::now()->format('d F Y')}}<br>Kepala Sekolah</p>
            <p style="margin-top:55px">KH. Muh. Shohib, M.Pd.i</p>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" sizes="96x96" href="{{public_path('images/logo.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>{{$formulir->no_pendaftaran}}</title>
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
    <div class="text-center">
        <h6>FORMULIR PENDAFTARAN</h6>
        <hr width="30%" style="margin-top:-9px;margin-bottom:-11px;border:0.5px solid;">
        <p>No. {{$formulir->no_pendaftaran}}</p>
    </div>
    <table style="margin-bottom:30px">
        <tr>
            <td>Nama Lengkap </td>
            <td>:</td>
            <td> {{$formulir->nama}}</td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir </td>
            <td>:</td>
            <td> {{$formulir->tempat_lahir}}, {{\Date::parse($formulir->tanggal_lahir)->format('d F Y')}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin </td>
            <td>:</td>
            <td> {{$formulir->jenis_kelamin}}</td>
        </tr>
        <tr>
            <td>Agama </td>
            <td>:</td>
            <td> {{$formulir->agama}}</td>
        </tr>
        <tr>
            <td>Status dalam Keluarga </td>
            <td>:</td>
            <td> {{$formulir->status_keluarga}}</td>
        </tr>
        <tr>
            <td>Alamat </td>
            <td>:</td>
            <td> {{$formulir->alamat}}</td>
        </tr>
        <tr>
            <td>SMP/MTs Asal</td>
        </tr>
        <tr>
            <td>1. Nama SMP/MTs </td>
            <td>:</td>
            <td> {{$formulir->asal_sekolah}}</td>
        </tr>
        <tr>
            <td>2. Ijasah SMP/MTs </td>
            <td>:</td>
            <td> {{$formulir->ijasah}}</td>
        </tr>
        <tr>
            <td>3. NISN </td>
            <td>:</td>
            <td> {{$formulir->nisn}}</td>
        </tr>
        <tr>
            <td>Ayah</td>
        </tr>
        <tr>
            <td>1. Nama </td>
            <td>:</td>
            <td> {{$formulir->nama_ayah}}</td>
        </tr>
        <tr>
            <td>2. Agama </td>
            <td>:</td>
            <td> {{$formulir->agama_ayah}}</td>
        </tr>
        <tr>
            <td>3. Pekerjaan </td>
            <td>:</td>
            <td> {{$formulir->pekerjaan_ayah}}</td>
        </tr>
        <tr>
            <td>4. Alamat </td>
            <td>:</td>
            <td> {{$formulir->alamat_ayah}}</td>
        </tr>
        <tr>
            <td>Ibu</td>
        </tr>
        <tr>
            <td>1. Nama </td>
            <td>:</td>
            <td> {{$formulir->nama_ibu}}</td>
        </tr>
        <tr>
            <td>2. Agama </td>
            <td>:</td>
            <td> {{$formulir->agama_ibu}}</td>
        </tr>
        <tr>
            <td>3. Pekerjaan </td>
            <td>:</td>
            <td> {{$formulir->pekerjaan_ibu}}</td>
        </tr>
        <tr>
            <td>4. Alamat </td>
            <td>:</td>
            <td> {{$formulir->alamat_ibu}}</td>
        </tr>
        <tr>
            <td>Wali</td>
        </tr>
        <tr>
            <td>1. Nama </td>
            <td>:</td>
        </tr>
        <tr>
            <td>2. Agama </td>
            <td>:</td>
        </tr>
        <tr>
            <td>3. Pekerjaan </td>
            <td>:</td>
        </tr>
        <tr>
            <td>4. Alamat </td>
            <td>:</td>
        </tr>
        <tr>
            <td>Jumlah Saudara </td>
            <td>:</td>
            <td> {{$formulir->jml_saudara}}</td>
        </tr>
    </table>
    <div class="row">
        <div class="col-md-3 text-left">
            <p>Panitia PPDB</p>
            <p style="margin-top:80px">............................................................</p>
        </div>
        <div class="col-md-9 text-right">
            <p>Semarang, {{\Date::now()->format('d F Y')}}<br>Pendaftar</p>
            <p style="margin-top:55px">{{$formulir->nama}}</p>
        </div>
    </div>
</body>
</html>
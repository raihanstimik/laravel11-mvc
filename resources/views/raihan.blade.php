@extends('sireka.app')
@section('content')
<form action="{{ url('raihan') }}" method="get">
    <table border="1" cellpadding='10' style="width:100%">
        <tr>
        <th>No Rekam Pasien</th>
        <th>Nama Pasien</th>
        <th>Tanggal Pemeriksaan</th>
        <th>Diagnosa</th>
        </tr>
        @foreach ($data_tabel as $item)
            <tr id="data">
                <td>{{ $item->no_rekam_pasien }}</td>
                <td>{{ $item->nama_pasien }}</td>
                <td>{{ $item->tanggal_pemeriksaan }}</td>
                <td>{{ $item->diagnosa }}</td>
            </tr>
        @endforeach
    </table>
</form>

<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    #data{
        text-align-last: center;
    }
    </style>

@endsection
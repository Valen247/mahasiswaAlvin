<?php
    use App\Models\mahasiswa;
    use App\Models\vjlhmhskrs;
?>
@extends('layouts.app')

@section('title','Mahasiswa')

@section('content')

<center><h1>Profile</h1>
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="https://cdn.discordapp.com/attachments/873955007706300436/1025344390614503504/20200111_093000.jpg" class="img-fluid" alt="image">
        </div>
        <div class="col align-self-center">
        <h3>
          <li>
            Nama : Alvin Valencia
          </li>
          <li>
            StudentID : 03081190020
          </li>
          <li>
            Gender : Laki-laki
          </li>
          <li>
            Tanggal Lahir : 07 Mei 1999
          </li>
          <li>
            Term : 2019
          </li>
        </h3>
        </div>
      </div>
    </div>
    <style>
        table tr{
            padding: 10px;
        }
    </style>
            <?php
            $mhss = \DB::select('SELECT studentID,nama,kode_krs,kode_term,kode_matakuliah,nama_matakuliah,sks,totalsks FROM vmhskrs')[0];
            echo "Nama : ".$mhss->Nama."<br>";
            echo "Student ID : ".$mhss->StudentID."<br>";
            echo "Total Sks : ".$mhss->totalsks."<br><br>";
       ?>
    <table style="padding: 10px;">
        <tr>
            <th>No</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
        </tr>
        <?php
        $rows = \DB::select('SELECT StudentID,Nama,kode_krs,kode_term,kode_matakuliah,nama_matakuliah,sks,totalsks FROM vmhskrs');
 
        $no=1;
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$row->kode_matakuliah."</td>";
            echo "<td>".$row->nama_matakuliah."</td>";
            echo "<td>".$row->sks."</td>";
            echo "</tr>";
            $no+=1;
        }
        ?>
    </table>
@endsection
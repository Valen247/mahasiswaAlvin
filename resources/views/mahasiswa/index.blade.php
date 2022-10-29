<?php
    use App\Models\mahasiswa;
?>
<html>
<head>
    <title>Index Mahasiswa</title>
</head>
    <body>
        <h1>Index Mahasiswa</h1>
        <style>
            table tr{
                padding: 10px;
            }
        </style>
        <table>
            <th>
                <tr>
                    Student ID
                </tr>
                <tr>
                    Nama
                </tr>
                <tr>
                    Jurusan
                </tr>
                <tr>
                    Tahun
                </tr>
            </th>
            <?php
            $mahasiswas = mahasiswas::get();

            foreach ($mahasiswas as $mahasiswa)
            {
                echo "<tr>";
                echo "<td>".$mahasiswa->studentId,"</td>"
                echo "<td>".$mahasiswa->nama,"</td>"
                echo "<td>".$mahasiswa->jurusan,"</td>"
                echo "<td>".$mahasiswa->tahunMasuk,"</td>"
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
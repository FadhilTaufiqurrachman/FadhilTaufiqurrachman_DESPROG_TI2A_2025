<?php
    $nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
    $nilailulus = [];
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai >= 70) {
            $nilaiLulus[] = $nilai;
        }
    }
    echo "Daftar Nilai Siswa Yang Lulus : " . Implode(', ', $nilailulus);

    $daftarkaryawan = [
        ['Alice', 7],
        ['Bob', 3],
        ['Charlie', 9],
        ['David', 5],
        ['Eva', 6],
    ];

    $karyawanPengalamanLimaTahun = [];
    foreach ($daftarkaryawan as $karyawan) {
        if ($karyawan [1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }
    echo "<hr> Daftar Karyawan Dengan Pengalaman Kerja Lebih Dari 5 Tahun : " . Implode(', ',
    $karyawanPengalamanLimaTahun);


    $daftarNilai = [
        'Matematika' => [
            ['Alice', 85],
            ['Bob', 92],
            ['Charlie', 78],
        ],
        'Fisika' => [
            ['Alice', 90],
            ['Bob', 88],
            ['Charlie', 75],
        ],
        'Kimia' => [
            ['Alice', 92],
            ['Bob', 80],
            ['Charlie', 85],
        ],
    ];
        $matakuliah = 'Fisika';
        echo "<hr> Daftar Nilai Mahasiswa Dalam Mata Kuliah $matakuliah : <br>";
        foreach ($daftarNilai [$matakuliah] as $nilai) {
            echo "Nama : {$nilai [0]}, Nilai : {$nilai [1]} <br> <hr>";
        }

    $nilaiSiswa = [
        ["Nama" => "Alice", "Nilai" => 85],
        ["Nama" => "Bob", "Nilai" => 92],
        ["Nama" => "Charlie", "Nilai" => 78],
        ["Nama" => "David", "Nilai" => 64],
        ["Nama" => "Eva", "Nilai" => 90]
    ];

    $jumlahNilai = 0;
    $jumlahSiswa = count($nilaiSiswa);
    foreach ($nilaiSiswa as $siswa) {
        $jumlahNilai += $siswa['Nilai'];
    }
    $rataRata = $jumlahNilai / $jumlahSiswa;

    echo "Rata-Rata Kelas : $rataRata <br>";
    echo "Daftar Siswa Di Atas Rata-Rata : <br>";

    foreach ($nilaiSiswa as $siswa) {
        if ($siswa['Nilai'] > $rataRata) {
            echo "- " . $siswa['Nama'] . " (" . $siswa['Nilai'] . ")<br>";
        }
    }
?>
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php'); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Absensi</title>
        <link rel="stylesheet" href="./asset/css/styleBoard.css">
    </head>
    <body>
        <header class="header">
            <h1>Sistem Absensi Mahasiswa</h1>
            <div>
                <span>Halo, Selamat Datang!</span>
                <a href="auth.php?action=logout" class="logout-btn">Logout</a>
            </div>
        </header>
        <main class="main-container">
            <div class="form-container">
                <h2>Form Absensi</h2>
                <div id="alert-message"></div>
                <form id="absensi-form" novalidate>
                    <input type="hidden" id="edit-index" name="edit-index" value="">
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" id="nama" name="nama">
                        <span class="error-msg" id="nama-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim">
                        <span class="error-msg" id="nim-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="status">Status Kehadiran</label>
                        <select id="status" name="status">
                            <option value="Hadir">Hadir</option>
                            <option value="Alpha">Alpha</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Izin">Izin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea id="keterangan" name="keterangan" placeholder="Masukkan Keterangan Minimal 10 Karakter." rows="3"></textarea>
                        <span class="error-msg" id="keterangan-error"></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-submit">Simpan Data</button>
                        <button type="button" class="btn btn-cancel" id="btn-cancel" style="display: none;">Batalkan</button>
                    </div>
                </form>
            </div>
            <div class="table-container">
                <h2>Data Absensi Tercatat</h2>
                <table id="absensi-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Waktu Dicatat</th> <th>Aksi</th> </tr>
                    </thead>
                    <tbody>
                        </tbody>
                </table>
            </div>
        </main>
        <script src="./asset/js/jquery-3.7.1.js"></script>
        <script src="./asset/js/dashboard.js"></script>
    </body>
</html>
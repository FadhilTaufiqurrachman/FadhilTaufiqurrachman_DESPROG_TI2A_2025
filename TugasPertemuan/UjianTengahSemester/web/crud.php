<?php
session_start();
date_default_timezone_set("asia/jakarta");
header('Content-Type: application/json'); 

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo json_encode(['status' => 'error', 'message' => 'Maaf, Akses Ditolak.']);
    exit;
}

$absensi = []; 
if (isset($_COOKIE['absensi_data'])) {
    $absensi = json_decode($_COOKIE['absensi_data'], true);
}

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

function simpanDataKeCookie($data) {
    $dataJson = json_encode(array_values($data));
    setcookie('absensi_data', $dataJson, time() + (86400 * 30), "/");
}

switch ($action) {
    case 'create':
        $newData = [
            'nama' => isset($_POST['nama']) ? $_POST['nama'] : '',
            'nim' => isset($_POST['nim']) ? $_POST['nim'] : '',
            'status' => isset($_POST['status']) ? $_POST['status'] : '',
            'keterangan' => isset($_POST['keterangan']) ? $_POST['keterangan'] : '',
            'waktu' => date('Y-m-d H:i:s') 
        ];
        $absensi[] = $newData;
        simpanDataKeCookie($absensi);      
        echo json_encode(['status' => 'success', 'message' => 'Data Berhasil Disimpan.']);
        break;
    case 'read':
        echo json_encode($absensi);
        break;
    case 'read_single':
        $index = isset($_GET['index']) ? (int)$_GET['index'] : -1;
        if (isset($absensi[$index])) {
            echo json_encode($absensi[$index]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Data Tidak Ditemukan.']);
        }
        break;
    case 'update':
        $index = isset($_POST['edit-index']) ? (int)$_POST['edit-index'] : -1;
        if (isset($absensi[$index])) {
            $absensi[$index]['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
            $absensi[$index]['nim'] = isset($_POST['nim']) ? $_POST['nim'] : '';
            $absensi[$index]['status'] = isset($_POST['status']) ? $_POST['status'] : '';
            $absensi[$index]['keterangan'] = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';
            $absensi[$index]['waktu'] = date('Y-m-d H:i:s'); 
            simpanDataKeCookie($absensi);
            echo json_encode(['status' => 'success', 'message' => 'Data Berhasil Diperbarui.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Data Gagal Diperbarui.']);
        }
        break;

    case 'delete':
        $index = isset($_POST['index']) ? (int)$_POST['index'] : -1;
        if (isset($absensi[$index])) {
            unset($absensi[$index]);
            simpanDataKeCookie($absensi);
            echo json_encode(['status' => 'success', 'message' => 'Data Berhasil Dihapus.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Data Gagal Dihapus.']);
        }
        break;
    default:
        echo json_encode(['status' => 'error', 'message' => 'Aksi Tidak Valid.']);
        break;
}
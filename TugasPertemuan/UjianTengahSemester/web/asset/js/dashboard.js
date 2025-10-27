$(document).ready(function() {
    function loadTable() {
        $.ajax({
            type: 'GET',
            url: 'crud.php?action=read',
            dataType: 'json',
            success: function(data) {
                var tableRows = '';
                $.each(data, function(index, item) {
                    tableRows += `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${item.nama}</td>
                            <td>${item.nim}</td>
                            <td>${item.status}</td>
                            <td>${item.keterangan}</td>
                            <td>${item.waktu}</td>
                            <td>
                                <button class="btn-aksi btn-edit" data-index="${index}">Edit</button>
                                <button class="btn-aksi btn-delete" data-index="${index}">Hapus</button>
                            </td>
                        </tr>
                    `;
                });
                $('#absensi-table tbody').html(tableRows);
            }
        });
    }

    function validateForm() {
        var isValid = true;
        $('.error-msg').text(''); 

        var nama = $('#nama').val();
        var nim = $('#nim').val();
        var status = $('#status').val();
        var keterangan = $('#keterangan').val();

        if (nama === '') {
            $('#nama-error').text('Nama Tidak Boleh Kosong!');
            isValid = false;
        }

        if (nim === '') {
            $('#nim-error').text('NIM Tidak Boleh Kosong!');
            isValid = false;
        } else if (nim <= 0) {
            $('#nim-error').text('NIM Tidak Boleh Negatif!');
            isValid = false;
        } else if (nim.length < 10) {
            $('#nim-error').text('NIM Harus Memiliki Minimal 10 Angka.');
            isValid = false;
        } else if (!/^\d+$/.test(nim)) { 
            $('#nim-error').text('NIM Harus Berupa Angka!');
            isValid = false;
        }

        if (status === 'Sakit' || status === 'Izin') {
            if (keterangan.length < 10) {
                $('#keterangan-error').text('Keterangan Harus Lebih Dari 10 Karakter.');
                isValid = false;
            }
        }
        
        return isValid;
    }
    
    function showAlert(message, type) {
        $('#alert-message')
            .removeClass('success error') 
            .addClass(type) 
            .text(message)
            .fadeIn(500); 

        setTimeout(function() {
            $('#alert-message').fadeOut(500); 
        }, 3000);
    }

    $('#absensi-form').on('submit', function(e) {
        e.preventDefault();

        if (validateForm()) {
            var editIndex = $('#edit-index').val();
            var action = (editIndex === '') ? 'create' : 'update'; 
            
            var formData = $(this).serialize() + '&action=' + action;

            $.ajax({
                type: 'POST',
                url: 'crud.php',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        showAlert(response.message || 'Data Berhasil Diproses!', 'success');
                        loadTable(); 
                        $('#absensi-form')[0].reset(); 
                        $('#edit-index').val(''); 
                        $('#btn-cancel').hide(); 
                    } else {
                        showAlert(response.message || 'Terjadi Kesalahan.', 'error');
                    }
                }
            });
        }
    });

    $('#absensi-table').on('click', '.btn-edit', function() {
        var index = $(this).data('index');
        $.ajax({
            type: 'GET',
            url: 'crud.php?action=read_single',
            data: { index: index },
            dataType: 'json',
            success: function(data) {
                $('#edit-index').val(index);
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#status').val(data.status);
                $('#keterangan').val(data.keterangan);
                
                $('#btn-cancel').show(); 

                $('html, body').animate({
                    scrollTop: $('.form-container').offset().top
                }, 'slow');
            }
        });
    });

    $('#absensi-table').on('click', '.btn-delete', function() {
        var index = $(this).data('index');

        if (confirm('Anda Yakin Ingin Menghapus Data Ini?')) {
            $.ajax({
                type: 'POST',
                url: 'crud.php',
                data: { action: 'delete', index: index },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        showAlert('Data Berhasil Dihapus.', 'success');
                        loadTable(); 
                    } else {
                        showAlert('Gagal Menghapus Data.', 'error');
                    }
                }
            });
        }
    });

    $('#btn-cancel').on('click', function() {
        $('#absensi-form')[0].reset();
        $('#edit-index').val('');
        $(this).hide(); 
        $('.error-msg').text(''); 
    });
    loadTable();
});
$(document).ready(function() {
    $('main.fade').fadeIn(1000);
    $('.forgot-password').on('click', function(e) {
        e.preventDefault(); 
        alert("Username : dosen\nPassword  : dosen123");
    });
    $('#login-form').on('submit', function(e) {
        e.preventDefault(); 
    });

    $('#login-form').on('submit', function(e) {
        e.preventDefault(); 
        $('.error-text').text('');

        var username = $('#username').val(); 
        var password = $('#password').val();
        var isValid = true;

        if (username === '') {
            $('#username-error').text('Username Tidak Boleh Kosong!'); 
            isValid = false;
        }

        if (password === '') {
            $('#password-error').text('Password Tidak Boleh Kosong!');
            isValid = false;
        }

        if (isValid) {
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'), 
                data: formData,
                dataType: 'json', 
                success: function(response) {
                    if (response.status === 'success') { 
                        $('#not-valid').text('Login Berhasil, Mengarahkan...').css('color', 'green');
                        $('main.fade').fadeOut('slow', function() {
                            window.location.href = response.redirect;
                        });
                    } else {
                        $('#not-valid').text(response.message);
                    }
                },
                error: function() {
                    $('#not-valid').text('Terjadi Kesalahan Saat Menghubungkan Ke Halaman Dashboard.');
                }
            });
        }
    });
});
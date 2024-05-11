$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#judulModalLabel').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });


    $('.tampilModalUbah').on('click', function() {
        $('#judulModalLabel').html('Ubah Data User');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/eyvote/public/user/ubah');


        const id_user = $(this).data('id_user');

        $.ajax({
            url: 'http://localhost/eyvote/public/user/getubah',
            data: {id_user : id_user},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#email').val(data.email);
                $('#password').val(data.password);
                $('#status').val(data.status);
                $('#id_person').val(data.id_person);
                $('#id_user').val(data.id_user);
            }
        });
    });

});
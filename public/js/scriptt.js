$(function(){
    $('.tombolTambahData').on('click', function(){
        $('#judulModalLabel').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });


    $('.tampilModalUbah').on('click', function() {
        $('#judulModalLabel').html('Ubah Data User');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/eyvote/public/person/ubah');


        const id_person = $(this).data('id_person');

        $.ajax({
            url: 'http://localhost/eyvote/public/person/getubah',
            data: {id_person : id_person},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#alamat').val(data.alamat);
                $('#no_hp').val(data.no_hp);
                $('#tipe').val(data.tipe);
                $('#visi').val(data.visi);
                $('#misi').val(data.misi);
                $('#id_img').val(data.id_img);
                $('#id_person').val(data.id_person);
            }
        });
    });
});
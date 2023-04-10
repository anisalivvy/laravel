$(function(){


    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Blog');
        $('#formModalLabel').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        
    })

    $('.tampilModalUbah').on('click', function(){
        
        $('#formModalLabel').html('Ubah Data Blog');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/mvc-pwpb/public/blog/ubah');
        const id = $(this).data('id');
        
        $.ajax({
            url: "http://localhost/mvc-pwpb/public/blog/getubah",
            data: {id : id},
            method: 'post',
            success: function(data) {
                let result = JSON.parse(data);
                console.log(result);
                $('#penulis').val(result.penulis);
                $('#judul').val(result.judul);
                $('#tulisan').val(result.tulisan);
                $('#id').val(result.id);
            }

        });
    
    });

});
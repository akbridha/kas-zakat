// console.log('ok');
$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#ModalTitle').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    })

    $('.tampilModalUbah').on('click', function(){


        $('#ModalTitle').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/patterned_me/public/mahasiswa/ubah');
     

        const id = $(this).data('id');
   
        $.ajax({
        url: 'http://localhost/patterned_me/public/mahasiswa/getubah',
        data:{ id : id},
        method: 'post',
        dataType: 'json', 
        success: function(data){
           $('#nama').val(data.nama);
           $('#NIM').val(data.NIM);
           $('#email').val(data.email);
           $('#jurusan').val(data.jurusan);
           $('#id').val(data.id);
        }
        });

    });
});
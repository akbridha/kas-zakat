// console.log('ok');
$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#ModalTitle').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    })

    $('.tampilModalUbah').on('click', function(){


        $('#ModalTitle').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        console.log('okkkk');
    })

})
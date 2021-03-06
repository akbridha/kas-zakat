$(function(){
    
    $('.tombolTambahData').on('click', function(){
        console.log("okk");
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
                $('#id').val(data.id);    }
            });
        });
        
        
        $('.tombolTambahKas').on('click', function(){
            $('#judulModalKas').html('Tambah Info Kas');
             $('.modal-footer button[type=submit]').html('Tambah');
    })
    
    
    $('.ModalUbahKas').on('click', function(){
        $('#judulModalKas').html('Ubah Info Kas');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/patterned_me/public/kas/ubah');
        const id = $(this).data('id');
    
        $.ajax({
        url: 'http://localhost/patterned_me/public/kas/getubah',
        data:{ id : id},
        method: 'post',
        dataType: 'json', 
        success: function(data){
            $('#id').val(data.id);
            $('#jenis').val(data.jenis);
            $('#info').val(data.info);
            $('#nominal').val(data.nominal);
            $('#keterangan').val(data.keterangan);
        }
        });
    });
    
    
});


// $(function()){

    

// };
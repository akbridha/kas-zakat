<div class = "container mt-5">

<div class="row">
<div class="col-lg-6">
  <?php Flasher::flash();?></div>
</div>


  
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-grup mt-5">
            
            <?php foreach( $data['mhs'] as $mhs ) : ?>

            <li class="list-group-item ">

            <?= $mhs['nama'];?>
            <a href="<?=BASEURL;?>/mahasiswa/hapus/<?=$mhs['id'];?>" class="badge badge-danger float-right ml-2"
            onclick="return confirm('yakin');">hapus</a>
            <a href="<?=BASEURL;?>/mahasiswa/ubah/<?=$mhs['id'];?>" class="badge badge-success float-right ml-2 tampilModalUbah"data-toggle="modal" data-target="#exampleModalLong">ubah</a>
            <a href="<?=BASEURL;?>/mahasiswa/detail/<?=$mhs['id'];?>" class="badge badge-primary float-right">detail</a>
            
            </li>

            <?php endforeach; ?>
            </ul>
            
        </div>
    </>




</div>


<div class="container">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#exampleModalLong">
  Tambah Data
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

          <!-- modal header -->
        <div class="modal-header">
          <h5 class="modal-title" id="ModalTitle">Tambah data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- modal body -->
        <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama</label>
                  <input type="text" class="form-control" id="nama" name ="nama">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">NIM</label>
                  <input type="text" class="form-control" id="NIM" name ="NIM">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">email</label>
                  <input type="email" class="form-control" id="email" name ="email">
                </div>
                <div class="form-group">
                  <label for="jurusan">jurusan</label>
                  <select class="form-control" id="jurusan" name = "jurusan">
                    <option>Teknik Informatika</option>
                    <option>Teknik Mesin</option>
                    <option>Teknik Industri</option>
                    <option>Teknik Pangan</option>
                    <option>Teknik plano</option>
                  </select>
                </div>
        </div>
        

              <!-- modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>


              </div>
              </form>


          


    </div>
  </div>
</div>
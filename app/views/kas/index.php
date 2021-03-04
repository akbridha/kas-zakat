<div class = "container mt-5">

  <div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash();?></div>
  </div>


  <!-- Pencarian -->
  <div class="row mb-3">
    <div class="col-lg-6">

      <form action = "<?=BASEURL; ?>/kas/cari" method = "post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari kas" name="keyword" id="keyword" autocomplete = "off" >
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="button-cari">Cari</button>
          </div>
        </div>
      </form>

    </div>
  </div>


  <!-- tombol tambah -->
  <div class="row mb-4">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#modalKas">
        Tambah Data
      </button>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-6">

      <h3>Daftar Kas</h3>
      <ul class="list-group">
          <?php foreach( $data['kas'] as $kas ) : ?>
          <li class="list-group-item ">
            <?= $kas['info'];?>
            <a href="<?=BASEURL;?>/kas/hapus/<?=$kas['id'];?>" class="badge badge-danger float-right ml-2"onclick="return confirm('yakin');">hapus</a>
            <a href="<?=BASEURL;?>/kas/ubah/<?=$kas['id'];?>" class="badge badge-success float-right  ml-2 tampilModalUbah" data-toggle="modal"  data-target="#modalKas" data-id="<?=$kas['id'];?>">ubah</a>
            <a href="<?=BASEURL;?>/kas/detail/<?=$kas['id'];?>" class="badge badge-primary float-right">detail</a>
            <a href="#" class="badge badge-secondary float-right mr-5">Rp. <?= number_format($kas['nominal']);?></a>
          </li>
        <?php endforeach; ?>
      </ul> 
    </div>
  </div>
    




</div>


<!-- Modal -->
<div class="modal fade" id="modalKas" tabindex="-1" role="dialog" aria-labelledby="modalKasTitle" aria-hidden="true">
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
                <form action="<?= BASEURL; ?>/kas/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <label for="jenis">Jenis</label>
                  <select class="form-control" id="jenis" name = "jenis">
                    <option></option>
                    <option>Kas Masuk</option>
                    <option>Kas Keluar</option>
                    <option>Lainnya</option>
      
                  </select>
                </div>


                <div class="form-group">
                  <label for="exampleFormControlInput1">Info</label>
                  <input type="text" class="form-control" id="info" name ="info">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlInput1">Nominal</label>
                  <input type="number" class="form-control" id="nominal" name ="nominal">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlInput1">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name ="keterangan">
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
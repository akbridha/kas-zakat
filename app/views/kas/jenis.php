<div class = "container mt-5">
<div class="row">
    <div class="col-lg-6">

      <h3>Kas <?=$data['judul'];?></h3>
      <ul class="list-group">
          <?php foreach( $data['kas'] as $kas ) : ?>
          <li class="list-group-item ">
            <?= $kas['info'];?>
            <a href="<?=BASEURL;?>/kas/hapus/<?=$kas['id'];?>" class="badge badge-danger float-right ml-2"onclick="return confirm('yakin');">hapus</a>
            <a href="<?=BASEURL;?>/kas/ubah/<?=$kas['id'];?>" class="badge badge-success float-right  ml-2 ModalUbahKas" data-toggle="modal"  data-target="#modalKas" data-id="<?=$kas['id'];?>">ubah</a>
            <a href="<?=BASEURL;?>/kas/detail/<?=$kas['id'];?>" class="badge badge-primary float-right">detail</a>
            <a href="#" class="badge badge-secondary float-right mr-5">Rp. <?= number_format($kas['nominal']);?></a>
          </li>
        <?php endforeach; ?>
      </ul> 
      <a href="<?=BASEURL;?>/kas" class="btn btn-info mt-5" role="button"> Kemballi</a>
    </div>
  </div>
  </div>
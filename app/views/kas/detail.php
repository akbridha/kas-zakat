<div class="container mt-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$data['kas']['info'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$data['kas']['jenis'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted">Rp. <?=number_format($data['kas']['nominal']);?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?=$data['kas']['keterangan'];?></h6>
  
    <a href="<?=BASEURL?>/kas" class="card-link">kembali</a>
  </div>
</div>
</div>
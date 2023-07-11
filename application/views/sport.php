<div class="container-fluid">

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/sport.png') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/sport1.png') ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row text-center mt-3">

    <?php foreach ($sport as $produk) : ?>
      <div class="card ml-3 mb-3" style="width: 14rem;">
        <img src="<?php echo base_url() . '/uploads/' . $produk->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo $produk->nama_produk ?></h5>
          <small><?php echo $produk->keterangan ?></small><br>
          <span class="badge bg-success mb-3">RP.18.000.0000 <?php echo  number_format($produk->harga, 0, ',', '.') ?></span></br>
          <?php echo anchor('dashboard/tambah_ke_keranjang/' . $produk->id_produk, '<div class="btn btn-sm btn-primary">Beli Sekarang</div>') ?>
          <?php echo anchor('dashboard/detail/' . $produk->id_produk, '<div class="btn btn-sm btn-success">detail</div>') ?>

        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>
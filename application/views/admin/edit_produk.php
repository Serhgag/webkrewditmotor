<div class="container-fluid">
	<h3><i class="fa fa-edit"></i>Edit produk</h3>

	<?php foreach($produk as $produk) : ?>

	<form method="post" action="<?php echo base_url(). 'admin/data_produk/update' ?>">

		<div class="form-group">
			<label>nama produk</label>
			<input type="text" name="nama_produk" class="form-control" value="<?php echo $produk->nama_produk ?>">	
		</div>

			<div class="form-group">
			<label>keterangan</label>
			<input type="text" name="keterangan" class="form-control" value="<?php echo $produk->keterangan ?>">	
		</div>

			<div class="form-group">
			<label>kategori</label>
			<input type="hidden" name="id_produk" class="form-control" value="<?php echo $produk->id_produk ?>">
			<input type="text" name="kategori" class="form-control" value="<?php echo $produk->kategori ?>">	
		</div>

			<div class="form-group">
			<label>harga</label>
			<input type="text" name="harga" class="form-control" value="<?php echo $produk->harga ?>">	
		</div>
			<div class="form-group">
			<label>stok</label>
			<input type="text" name="stok" class="form-control" value="<?php echo $produk->stok ?>">	
		</div>

		<button type="submit" class="btn btn-primary btn-sm mt-3">simpan</button>
		
	</form>	

	<?php endforeach; ?>	
</div>
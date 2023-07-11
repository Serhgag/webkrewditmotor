<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_produk"><i class="fas fa-plus fa-sm"> </i>tambahkan Produk</button>

	<table class="table table-bordered">
		<tr>
			<th>no</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="3">aksi</th>
		</tr>

		<?php
		$no = 1;
		foreach ($produk as $produk) : ?>

			<tr>
				<th><?php echo $no++ ?></th>
				<th><?php echo $produk->nama_produk ?></th>
				<th><?php echo $produk->keterangan ?></th>
				<th><?php echo $produk->kategori ?></th>
				<th><?php echo $produk->harga ?></th>
				<th><?php echo $produk->stok ?></th>
				<td>
					<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
				</td>
				<td><?php echo anchor('admin/data_produk/edit/' . $produk->id_produk, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_produk/hapus/' . $produk->id_produk, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>


			</tr>

		<?php endforeach; ?>

	</table>

</div>

<!-- Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Input Produk</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url() . 'admin/data_produk/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label>Nama Produk</label>
						<input type="text" name="nama_produk" class="form-control">
					</div>

					<div class="form-group">
						<label>keterangan</label>
						<input type="text" name="keterangan" class="form-control">
					</div>

					<div class="form-group">
						<label>kategori</label>
						<select class="form-control" name="kategori">
							<option>metik</option>
							<option>sport</option>
							<option>bebek</option>

						</select>
					</div>

					<div class="form-group">
						<label>harga</label>
						<input type="text" name="harga" class="form-control">
					</div>

					<div class="form-group">
						<label>Stok</label>
						<input type="text" name="stok" class="form-control">
					</div>

					<div class="form-group">
						<label>gambar produk</label>
						<input type="file" name="gambar" class="form-control">
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>


			</form>
		</div>
	</div>
</div>
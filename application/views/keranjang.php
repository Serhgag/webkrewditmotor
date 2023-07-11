<div class="container-fluid">
	<h4>Keranjang belanja</h4>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
		</tr>
		<?php
		$no = 1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td align="center"><?php echo $no++ ?></td>
				<td align="center"><?php echo $items['name'] ?></td>
				<td align="center"><?php echo $items['qty'] ?></td>
				<td align="center">Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></td>
			</tr>
		<?php endforeach ?>
		<tr>
			<td colspan="3" align="center">Total Harga</td>
			<td align="center"> Rp. <?php echo number_format($this->cart->total(), 0, ',', '.')  ?></td>
		</tr>

	</table>

	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
			<div class="btn btn-sm btn-danger">Hapus keranjang</div>
		</a>
		<a href="<?php echo base_url('') ?>">
			<div class="btn btn-sm btn-primary">lanjut belanja</div>
		</a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>">
			<div class="btn btn-sm btn-success">Bayar Sekarang</div>
		</a>
	</div>
</div>
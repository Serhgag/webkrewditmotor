<div class="container-fluid">
	<h4>Invoice pemesanan</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>id Invoice</th>
			<th>nama pemesanan</th>
			<th>alamat pengiriman</th>
			<th>tangal pemesanan</th>
			<th>batas pembayaran</th>
			<th colspan="3">aksi</th>
		</tr>
		<?php foreach ($invoice as $inv) : ?>
			<tr>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php echo anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary ">Detail</div>') ?></td>

			</tr>

		<?php endforeach; ?>

	</table>
</div>
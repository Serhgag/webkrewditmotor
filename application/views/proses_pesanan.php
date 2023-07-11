	<div class="container-fluid">
		<p class="text-center align-middle">Selamat pesanan anda telah berhasil diproses</p>
		<h4>Pesanan akan dikirim paling lambat 5 hari</h4>
		<div class="container-fluid">
			<h4>Invoice pemesanan</h4>

			<table class="table table-bordered table-hover table-striped">
				<tr>
					<th>id Invoice</th>
					<th>nama pemesanan</th>
					<th>alamat pengiriman</th>
					<th>tangal pemesanan</th>
					<th>batas pembayaran</th>
				</tr>
				<?php foreach ($invoice as $inv) : ?>
					<tr>
						<td><?php echo $inv->id ?></td>
						<td><?php echo $inv->nama ?></td>
						<td><?php echo $inv->alamat ?></td>
						<td><?php echo $inv->tgl_pesan ?></td>
						<td><?php echo $inv->batas_bayar ?></td>
					</tr>

				<?php endforeach; ?>

			</table>
		</div>
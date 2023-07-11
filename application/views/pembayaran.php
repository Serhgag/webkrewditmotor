<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total = 0;
				if ($keranjang = $this->cart->contents()) {
					foreach ($keranjang as $item) {
						$grand_total = $grand_total + $item['subtotal'];
					}
					echo "<h4>Total Belanja Adalah  : Rp. " . number_format($grand_total, 0, ', ', '.');
					echo "<h6>Harga Sudah Termasuk Pajak & Biaya Pengiriman";
				?>
			</div><br><br>
			<h3>Input Alamat Pengiriman dan Metode Pembayaran</h3>

			<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama lengkap" class="form-control" required>

					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control" required>

						<div class="form-group">
							<label>No Telphone</label>
							<input type="text" name="no_telp" placeholder="Nomer Telphone" class="form-control" required>

							<div class="form-group">
								<label>Jasa pengiriman, (Khusus luar JABODETABEK )</label>
								<select class="form-control">
									<option>JNE</option>
									<option>JNT</option>
									<option>POS</option>
								</select>
							</div>
							<div class="form-group">
								<label>Jasa pengiriman, ( JABODETABEK )</label>
								<select class="form-control">
									<option>Dijemput/Ambil sendiri</option>
									<option>Diantar</option>

								</select>

								<div class="form-group">
									<label>Pilih Bank</label>
									<select class="form-control">
										<option>BRI - xxxxxx</option>
										<option>BCA - xxxxxx</option>
										<option>BNI - xxxxxxx</option>
									</select>
								</div>
								<button type="submit" class="btn btn-sm btn-primary" mb-3>Pesan</button>

			</form>
		<?php
				} else {
					echo "<h4>keranjang belanja anda masih kosong";
				} ?>
		</div>

		<div class="col-md-2"></div>
	</div>
</div>
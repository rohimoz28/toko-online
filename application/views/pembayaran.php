<div class="container-fluid">
    <div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button class="btn btn-lg btn-success mb-3">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "Total belanja anda adalah : " . number_format($grand_total, 0, ',', '.');
                ?>
            </button>
            <h3 class="mb-3">Isi form di bawah ini</h3>
            <form action="<?= base_url('dashboard/pembayaran_proses') ?>" method="POST">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" id="" placeholder="Alamat Lengkap">
                </div>
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" name="no_telp" class="form-control" id="" placeholder="No Telp.">
                </div>
                <div class="form-group">
                    <label for="">Pilih Kurir</label>
                    <select class="form-control" id="" name="kurir">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>SiCepat</option>
                        <option>Gojek</option>
                        <option>Grab</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Pilih Pembayaran</label>
                    <select class="form-control" id="" name="bayar">
                        <option>BCA</option>
                        <option>BNI</option>
                        <option>Virtual Account</option>
                        <option>Gopay</option>
                        <option>Ovo</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mb-3 text-right">Proses</button>
            </form>

        <?php } else {
                    echo "Anda belum memiliki pesanan";
                }
        ?>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>

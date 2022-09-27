<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-success">No Invoice: <?= $invoice->id ?></div>
    </h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <td>No ID Barang</td>
            <td>Nama Produk</td>
            <td>Jumlah Pesanan</td>
            <td>Harga Satuan</td>
            <td class="text-center">Subtotal</td>
        </tr>
        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>
            <tr>
                <td><?= $psn->id_brg; ?></td>
                <td><?= $psn->nama_brg; ?></td>
                <td><?= $psn->jumlah; ?></td>
                <td>Rp. <?= number_format($psn->harga, 0, ',', '.'); ?></td>
                <td class="text-center">Rp. <?= number_format($subtotal, 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td class="text-right" colspan="4">Total Bayar : </td>
            <td class="text-center">Rp. <?= number_format($total, 0, ',', '.') ?></td>
        </tr>
    </table>

    <a href="<?= base_url('admin/invoice/index') ?>" class="btn btn-primary">Kembali</a>
</div>

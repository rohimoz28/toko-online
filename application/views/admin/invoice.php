<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>Tanggal Pesan</th>
            <th>Batas Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($invoices as $invoice) : ?>
            <tr>
                <td><?= $invoice->id ?></td>
                <td><?= $invoice->nama ?></td>
                <td><?= $invoice->alamat ?></td>
                <td><?= $invoice->tgl_pesan ?></td>
                <td><?= $invoice->batas_bayar ?></td>
                <td>
                    <?= anchor('admin/invoice/detail/' . $invoice->id, '<div class="btn btn-primary">Detail</div>
') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

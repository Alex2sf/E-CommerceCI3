<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id; ?></div></h4>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>ID BARANG</th>
                <th>NAMA PRODUK</th>
                <th>JUMLAH PESANAN</th>
                <th>HARGA SATUAN</th>
                <th>SUB-TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            if (!empty($pesanan)) { // Pastikan $pesanan tidak kosong
                foreach ($pesanan as $psn) {
                    $subtotal = $psn->jumlah * $psn->harga;
                    $total += $subtotal;
            ?>
            <tr>
                <td><?= $psn->id_brg ?></td>
                <td><?= $psn->nama_brg ?></td>
                <td><?= $psn->jumlah ?></td>
                <td class="text-right">Rp. <?= number_format($psn->harga, 0, ',', '.') ?></td>
                <td class="text-right">Rp. <?= number_format($subtotal, 0, ',', '.') ?></td>
            </tr>
            <?php
                }
            } else {
                echo '<tr><td colspan="5" class="text-center">Tidak ada pesanan ditemukan</td></tr>';
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" align="right"><strong>Grand Total</strong></td>
                <td align="right"><strong>Rp. <?= number_format($total, 0, ',', '.') ?></strong></td>
            </tr>
        </tfoot>
    </table>

    <a href="<?= base_url('admin/invoice/index') ?>">
        <div class="btn btn-sm btn-primary">Kembali</div>
    </a>
</div>

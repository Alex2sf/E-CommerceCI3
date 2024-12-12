<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Sub Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1; // Nomor dimulai dari 1
            foreach ($this->cart->contents() as $items) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($items['name']); ?></td>
                    <td><?php echo htmlspecialchars($items['qty']); ?></td>
                    <td align="right">Rp <?php echo number_format($items['price'], 0, ',', '.'); ?></td>
                    <td align="right">Rp <?php echo number_format($items['subtotal'], 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4" align="right"><strong>Total</strong></td>
                <td align="right"><strong>Rp <?php echo number_format($this->cart->total(), 0, ',', '.'); ?></strong></td>
            </tr>
        </tbody>
    </table>

    <div class="text-right">
    <a href="<?php echo base_url('dashboard/hapus_keranjang'); ?>" class="btn btn-sm btn-danger">Hapus Keranjang</a>
    <a href="<?php echo base_url('dashboard/index'); ?>" class="btn btn-sm btn-primary">Lanjutkan Belanja</a>
    <a href="<?php echo base_url('dashboard/pembayaran'); ?>" class="btn btn-sm btn-success">Pembayaran</a>
    </div>

    
</div>
</div>

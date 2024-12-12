<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
            $grand_total = 0;
            if ($keranjang = $this->cart->contents()) {
                foreach ($keranjang as $item) {
                    $grand_total += $item['subtotal'];
                }
                ?>
                <div class="btn btn-sm btn-success mb-3">
                    <?php echo "Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.'); ?>
                </div>

                <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select name="jasa_pengiriman" class="form-control" required>
                            <option value="JNE">JNE</option>
                            <option value="TIKI">TIKI</option>
                            <option value="POS INDONESIA">POS INDONESIA</option>
                            <option value="GOJEK">GOJEK</option>
                            <option value="GRAB">GRAB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pilih Bank</label>
                        <select name="bank" class="form-control" required>
                            <option value="BCA">BCA - XXXXXX</option>
                            <option value="BNI">BNI - XXXXXX</option>
                            <option value="MANDIRI">MANDIRI - XXXXXX</option>
                            <option value="BRI">BRI - XXXXXX</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
                </form>
                <?php
            } else {
                echo "<div class='alert alert-danger'>Keranjang Belanja Anda Masih Kosong</div>";
            }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

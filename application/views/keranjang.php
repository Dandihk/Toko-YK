<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-striped table-hover ">
        <tr class="text-center">
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub total</th>
        </tr>
        <?php
        $no=1;
        foreach($this->cart->contents()as $items):?>

            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name']?></td>
                <td><?php echo $items['qty']?></td>
                <td>Rp.<?php echo number_format($items['price'],0,',','.')?></td>
                <td>Rp.<?php echo number_format($items['subtotal'],0,',','.')?></td>
            </tr>
            
        <?php endforeach;?>  
        <tr>
                <td colspan="4"></td>
                <td class="text-center"> Rp. <?php echo number_format($this->cart->total(),0,',','.')?></td>
            </tr>  
    </table>
    <div align="center">
        <a href="<?php echo base_url ('dashboard/hapus_keranjang')?>"><div
        class="btn btn-sm btn-danger mr-3">Hapus Keranjang</div></a>
        <a href="<?php echo base_url ('dashboard')?>"><div
        class="btn btn-sm btn-primary mr-3">Lanjut Belanja</div></a>
        <a href="<?php echo base_url ('dashboard/pembayaran')?>"><div
        class="btn btn-sm btn-success mr-3 ">Pembayaran</div></a>
    </div>
</div>
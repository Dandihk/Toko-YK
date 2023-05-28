<div class="container-fluid">
    <h4>Detail Pesanan <div class= "btn btn-m btn-success">No. Invoice : <?php 
    echo $invoice->id ?></div></h4>

    <table class= "table table-bordered table-hover table-striped">
        <tr class="text-center">
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga /pcs</th>
            <th>Sub Total</th>
        </tr>

    
    
        <?php
        $total=0;
        foreach($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>
        <tr class="text-center">
            <td><?php echo $psn->id_brg ?></td>
            <td><?php echo $psn->nama_brg ?></td>
            <td><?php echo $psn->jumlah ?></td>
            <td><?php echo number_format($psn->harga,0,',','.')?></td>
            <td><?php echo number_format($subtotal,0,',','.')?></td>

        </tr>
        <?php endforeach; ?>

        <tr class="text-center">
            <td colspan="4" >Total </td>
            <td >Rp. <?php echo number_format($total,0,',','.')?></td>
        </tr>
    </table>
    <div align="center">
        <a href="<?php echo base_url ('admin/invoice/index')?>"><div
        class="btn btn-sm btn-danger mr-3">Kembali</div></a>
        
    </div>
</div>
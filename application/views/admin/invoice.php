<div class="container-fluid">
    <h4>Invoice pesanan</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr class="text-center">
            <th>ID Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pemesan</th>
            <th>Nomor telepon</th>
            <th>Jasa Kirim</th>
            <th>Pembayaran</th>
            <th>Tanggal Memesan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($invoice as $inv):?>
            <tr class="text-center">
                <td><?php echo $inv->id?></td>
                <td><?php echo $inv->nama?></td>
                <td><?php echo $inv->alamat?></td>
                <td><?php echo $inv->nohp?></td>
                <td><?php echo $inv->jasa?></td>
                <td><?php echo $inv->pembayaran?></td>
                <td><?php echo $inv->tgl_pesan?></td>
                <td><?php echo $inv->batas_bayar?></td>
                <td><?php echo anchor('/admin/invoice/detail/'.$inv->id,'
                <div class="btn btn-sm btn-success">Detail</div>')?></td>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </table>
</div>
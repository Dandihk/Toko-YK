<div class="container-fluid justify-content-center">

    
    <div class="row no-gutters">
        <?php foreach($barang as $brg):?>
        <div class="col-6">
        <img src="<?php echo base_url().'/upload/'.$brg->gambar?>" class="card-img" alt="...">
        </div>
        <div class="col-6">
        <div class="card-body mt-5">
            <h2 class="card-title"><?php echo $brg->nama_brg?></h2>
            <h5 class="card-text"><?php echo $brg->keterangan?></h5>
            <h5 class="card-text">Stok : <?php echo $brg->stok?></h5>
            <h3><span class="badge bg-success text-white">Rp.<?php echo number_format(($brg->harga),0,',','.')  ?></span></h3>
            <br>
            <?php echo anchor('dashboard',
                '<div class=" btn btn-m btn-danger">Kembali</div>')?>
            <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,
                '<div class=" btn btn-m btn-primary">Tambah Ke Keranjang</div>')?>
        </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>
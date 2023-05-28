<div class="container-fluid justify-content-center">

    
    <div class="row no-gutters">
        <?php foreach($barang as $brg):?>
        <div class="col-6">
        <img src="<?php echo base_url().'/upload/'.$brg->gambar?>" class="card-img" alt="...">
        </div>
        <div class="col-6">
        <div class="card-body mt-5">
            <h2 class="card-title"><?php echo $brg->nama_brg?></h2>
            <h6 class="card-text"><?php echo $brg->kategori?></h6>
            <h5 class="card-text"><?php echo $brg->keterangan?></h5>
            <h5 class="card-text">Stok : <?php echo $brg->stok?></h5>
            <h3><span class="badge bg-success text-white">Rp.<?php echo number_format(($brg->harga),0,',','.')  ?></span></h3>
            <br>
            <?php echo anchor('admin/data_barang',
                '<div class=" btn btn-m btn-danger">Kembali</div>')?>
            
        </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>
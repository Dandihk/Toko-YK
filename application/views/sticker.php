<div class="container-fluid"> 


    <div class="row text-center mt-4 d-md-block">
    <h5>Sticker</h5>
    </div>


    <div class="row text-center  ">
        <?php foreach ($sticker as $brg):?>
            <div class="card mt-3 mr-md-3" style="width: 19rem; ">
                <img src="<?php echo base_url();?>/upload/<?php echo $brg->gambar;?>"class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                <p class="card-text"><?php echo $brg->keterangan ?></p>
                <h5><span class="badge bg-success text-white">Rp.<?php echo number_format(($brg->harga),0,',','.')  ?></span></h5>
                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,
                '<div class=" btn btn-m btn-primary">Tambah Ke Keranjang</div>')?>
                <?php echo anchor('dashboard/detail/'.$brg->id_brg,
                '<div class=" btn btn-m btn-danger">Detail</div>')?>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>

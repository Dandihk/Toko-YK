<div class="container-fluid"> 

<div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="asset/img/Artboard1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/img/slider2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/img/slider3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
        </div>

    <div class="row text-center mt-4 d-md-block">
    <h5>Produk</h5>
    </div>


    <div class="row text-center  ">
        <?php foreach ($barang as $brg):?>
            <div class="card mt-3 mr-md-2" style="width: 19rem; ">
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

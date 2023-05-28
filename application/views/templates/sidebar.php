
                
<nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">
<a class="navbar-brand" href="<?php echo base_url('dashboard')?>">YK Merchendise</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('kategori/kaos')?>">Kaos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/softcase')?>">Softcase</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/sticker')?>">Sticker</a>
      </li>
    </ul>
    
    <span class="navbar-text">
        <div class= "navbar"> 
            <ul class= "nav navbar-nav navbar-right" > 
                <li>
                    <i class="fas fa-fw fa-store"></i>
                    <?php  
                    //'Keranjang Belanja: '.
                        $keranjang= $this->cart->total_items()?>
                    <?php echo anchor('dashboard/detail_keranjang',$keranjang) ?>
                </li>
            </ul>

        </div>
    </span>
    <span>
        <div class="navbar">
            <ul class="navbar-nav navbar-right ">
                <?php if($this->session->userdata('username')){?>
                    <li><div><?php echo $this->session->userdata('username')?></div></li>
                    <li class="ml-5"><?php echo anchor('auth/logout','Logout')?></li>
                        <?php } else{?> 
                        <li><?php echo anchor('auth/login','Login');?></li>

                        <?php } ?>
            </ul>
        </div>
    </span>
  </div>
</nav>
              
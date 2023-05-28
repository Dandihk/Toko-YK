<div class="container-fluid d-flex justify-content-center" >
    <div class="row" >
        <div class="col-md2"></div>
        <div class="col-md8  ">
            <div class="btn btn-m btn-success">
                <?php
                $grand_total=0;
                if($keranjang=$this->cart->contents()){
                    foreach($keranjang as $item){
                        $grand_total=$grand_total+$item['subtotal'];
                    }
                    echo "Total Belanja : Rp. ".number_format($grand_total,0,',','.');
                ?>
                    </div>
                    <br><br>
                    <h3>Input Alamat dan Pembayaran</h3>
                    <form method="post"action="<?php echo base_url()?>dashboard/proses_pesanan">
                        
                        <div class="form-group">
                            <label >Nama lengkap</label>
                            <input type="text" name="nama" placeholder="Nama lengkap anda" class="form-control">
                            <?php echo form_error ('nama');?>
                        </div>
                        <div class="form-group">
                            <label >Alamat Lengkap</label>
                            <input type="text" name="alamat" placeholder="Alamat lengkap anda"class="form-control"> 
                            <?php echo form_error ('alamat');?>
                        </div>
                        <div class="form-group">
                            <label >Nomor Telepon</label>
                            <input type="text" name="nohp" placeholder="Nomor Telepon anda"class="form-control">
                            <?php echo form_error ('nohp');?>
                        </div>

                        <div class="form-group">
                            <label >Jasa Pengiriman</label>
                            <select type="text" name="jasa" class="form-control">
                                <option >JNE</option>
                                <option >JNT</option>
                                <option >Si Cepat</option>
                                <option >Anter Aja</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Pilih Pembayaran</label>
                            <select type="text" name="pembayaran" class="form-control">
                                <option >BCA</option>
                                <option >BNI</option>
                                <option >BRI</option>
                                <option >DANA</option>
                            </select>
                        </div>
                        <h4>Silahkan transfer ke BCA 89356834 a.n. Hennya dan</h4>
                        <h4>kirim bukti transfer ke Whatsapp 0893637463 a.n. Hennya</h4>
                        <button type="submit" class="btn btn-m btn-primary">Konfirmasi Pembayaran</button>
                    </form>
                    <?php
                    }else{
                        echo"<h3>keranjang anda Kosong";
                    }
                    ?>

        </div>         
        <div class="col-md2"></div>
    </div>
</div>
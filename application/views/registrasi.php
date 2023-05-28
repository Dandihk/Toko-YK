
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 mx-auto my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('registrasi/index') ?>"class="user">

                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Fullname" name="nama">
                                        <?php echo form_error ('nama');?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username" name="username">
                                        <?php echo form_error ('username');?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                            <?php echo form_error ('password');?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="password_1">
                                            <?php echo form_error ('password_1');?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary form-control"> Buat Akun </button>
                                
                            </form>
                            <hr>
                        
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login') ?>">Punya akun? login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

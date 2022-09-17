

    <!-- CONTENT START -->
    <section class="py-5 bg-light">

        <!-- .container start -->
        <div class="container">
            
            <!-- .row start -->
            <div class="row">

                <!-- .col start -->
                <div class="col-lg-3">

                    <?php 
                        include __DIR__ . '../../layout/menu.php';
                    ?>

                </div>
                <!-- .col end -->

                <!-- .col start -->
                <div class="col-lg-9">
                    
                    <div class="card">

                        <div class="card-header d-flex justify-content-between">

                            <h3>Create <span class="fw-bold"><i class="fa-solid fa-graduation-cap"></i> Ekskul</span></h3>

                            <div>
                                <a href="?menu=ekskul&page=read" class="btn btn-dark"><i class="fa-solid fa-left-long me-1"></i> Kembali</a>
                            </div>

                        </div>

                        <div class="card-body">

                            <form>

                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <img src="./assets/img/user-empty.png" alt="Picture" class="img img-thumbnail" style="width: 100px;">
                                        
                                        <label for="nama-lengkap" class="form-label d-block mt-2">Gambar</label>
                                        <input type="file" class="form-control form-control-lg">
                                    </li>
                                    <li class="list-group-item">
                                        <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama-lengkap" class="form-control form-control-lg" placeholder="Tulis nama lengkap...">
                                    </li>
                                    <li class="list-group-item">
                                        <label for="alamat-email" class="form-label">Alamat Email</label>
                                        <input type="mail" name="alamat-email" class="form-control form-control-lg" placeholder="Tulis alamat email...">
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <label for="jenis-kelmin" class="form-label">Jenis Kelamin</label>
                                        <select name="jenis-kelmin" id="" class="form-select form-select-lg">
                                            <option selected>Pilih</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </li>
                                </ul>

                            </form>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-lg btn-primary w-100"><i class="fa-solid fa-plus-square me-2"></i> Create</button>
                        </div>

                    </div>

                </div>
                <!-- .col end -->

            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->

    </section>
    <!-- CONTENT END -->
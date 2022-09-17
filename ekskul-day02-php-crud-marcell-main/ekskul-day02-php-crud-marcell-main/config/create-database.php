<?php 
    if(isset($_POST['create'] )){
        $nama_lengkap = $_POST['nama_lengkap'];
        echo $nama_lengkap
    }

    // integrasi koneksi
    require_once('connection.php');

    // Create database
    $sql = "CREATE DATABASE sacode_course";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
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

                            <?php 
                                if(isset($_POST['create'])){
                                    $nama_lengkap = $_POST['nama_lengkap'];
                                    echo $nama_lengkap;
                                    echo '<br>';
                                    echo $alamat_email;
                                }
                            ?>

                            <form action="?" method="post">

                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <img src="./assets/img/user-empty.png" alt="Picture" class="img img-thumbnail" style="width: 100px;">                                        
                                        <label for="gambar" class="form-label d-block mt-2">Gambar</label>
                                        <input type="file" class="form-control form-control-lg">
                                    </li>
                                    <li class="list-group-item">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control form-control-lg" placeholder="Tulis nama lengkap...">
                                    </li>
                                    <li class="list-group-item">
                                        <label for="alamat_email" class="form-label">Alamat Email</label>
                                        <input type="mail" name="alamat_email" class="form-control form-control-lg" placeholder="Tulis alamat email...">
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <label for="jenis_kelmin" class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelmin" id="" class="form-select form-select-lg">
                                            <option selected>Pilih</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </li>
                                    <?php 
                        if(isset($_GET['action']) && $_GET['action'] == 'proses'){
                            $nama_lengkap = $_POST['nama_lengkap'];
                            $alamat_email = $_POST['alamat_email'];
                            echo $nama_lengkap;
                            echo '<br>';
                            echo $alamat_email;
                        }
                                       ?>
                                
                                    <?php 
                                    if(isset($_GET['action']) && $_GET['action'] == 'proses'){

                                        $nama_lengkap = $_POST['nama_lengkap'];
                                        $alamat_email = $_POST['alamat_email'];
                                        $jenis_kelamin = $_POST['jenis_kelamin'];

                                        echo $nama_lengkap;
                                        echo '<br>';
                                        echo $alamat_email;
                                        echo '<br>';
                                        echo $jenis_kelamin;
                                    }
                                    ?>
                                    <li class="list-group-item">
                                        <button type="submit" class="btn btn-lg btn-primary w-100"><i class="fa-solid fa-plus-square me-2"></i> Create</button>
                                    </li>
                                </ul>

                            </form>

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
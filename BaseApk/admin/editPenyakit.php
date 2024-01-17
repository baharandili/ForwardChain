<?php
    include "headerAdmin.php";
    include "model/classPenyakit.php";
    $db = new Penyakit();

?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="source/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Penyakit</h2>
                        <div class="breadcrumb__links">
                            <a href="indexAdmin.php">Beranda</a>
                            <span>Penyakit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<body>

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="consultation__form">
                        <div class="section-title">
                          <h2>Edit Penyakit</h2>
                        </div>
                            <form action ="controller/prosesPenyakit.php?aksi=update" method="post" class="form-horizontal">
								<?php 
									foreach ($db->edit($_GET['id']) as $m){
								?>
								<div class="card-body">
									<div class="col col-sm-8">
										<div class="form-group">
											<label>Kode Penyakit</label>
											<input name="ID_Penyakit" type="text" class="form-control" readonly value="<?php echo $m['ID_Penyakit'];?>">
										</div>
										<div class="form-group">
											<label>Keterangan Penyakit</label>
											<input name="ketPenyakit" type="text" class="form-control" value="<?php echo $m['ketPenyakit'];?>" required oninvalid="this.setCustomValidity('Ketetangan tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
											<label>ID Home Product</label>
											<input name="ID_HP" type="text" class="form-control" value="<?php echo $m['ID_HP'];?>" required oninvalid="this.setCustomValidity('ID Home Product tidak boleh kosong')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
											<label>Opsi Treatment</label>
											<input name="opsiTR" type="textarea" class="form-control" value="<?php echo $m['opsiTR'];?>" required oninvalid="this.setCustomValidity('Opsi Treatment tidak boleh kosong')" oninput="setCustomValidity('')">
										</div>
										<a href=""><button type="submit" class="btn btn-info btn-md btn-block">Ubah Penyakit</button></a>  
										<br>
										<a href="jenisKulit.php"><button type="button" class="btn btn-outline-link btn-md btn-block">Batal</button></a>
									</div>
									<hr>
								</div>
									<?php } ?>
							</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <?php
        include "footer.php";
    ?>

    <!-- Js Plugins -->
    <script src="source/js/jquery-3.3.1.min.js"></script>
    <script src="source/js/bootstrap.min.js"></script>
    <script src="source/js/jquery.magnific-popup.min.js"></script>
    <script src="source/js/masonry.pkgd.min.js"></script>
    <script src="source/js/jquery-ui.min.js"></script>
    <script src="source/js/jquery.nice-select.min.js"></script>
    <script src="source/js/jquery.slicknav.js"></script>
    <script src="source/js/owl.carousel.min.js"></script>
    <script src="source/js/main.js"></script>
</body>
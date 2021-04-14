<div class="container ">
    <div class="row vh-100 ">
        <div class="col-12 align-self-center">
            <div class="auth-page">
                <div class="card auth-card shadow-lg">
                    <div class="card-body">
                        <div class="px-3">
                            <!--end auth-logo-box-->

                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 ">Daftarkan Cafe</h4>
                                <p class="text-muted mb-0">E-MENU</p>
                            </div>
                            <!--end auth-logo-text-->


                            <form autocomplete="off" id="i-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <input name="id_pemilik" value="<?= $_SESSION['id']; ?>" hidden>

                                                <div class="form-group">
                                                    <label for="nama_cafe">Nama Cafe</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="nama_cafe" id="nama_cafe" placeholder="Enter Nama Cafe" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_kartu">NIK Pemilik</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="id_kartu" id="id_kartu" placeholder="Enter NIK" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto_kartu">Foto KTP</label>
                                                    <div class="custom-file mb-3">
                                                        <input type="file" class="custom-file-input" id="foto_kartu" name="foto_kartu" onchange="previewFile()" required>
                                                        <label class="custom-file-label" for="customFile">
                                                            <div id="nama_ktp">Pilih Gambar</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <center>
                                                    <div id="ktp">
                                                        <img id="ktpna" src="<?= base_url(); ?>assets/images/ktp/ktp.png" alt="" width="90%">
                                                    </div>
                                                </center>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->




                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-round btn-block waves-effect waves-light btnload" type="submit">Simpan</button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end form-group-->
                            </form>
                            <!--end form-->
                        </div>
                        <!--end /div-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->

            </div>
            <!--end auth-page-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>
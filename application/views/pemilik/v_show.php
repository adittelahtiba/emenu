
<!-- Page Content-->
<div class="page-content">
    <br><br><br><br>
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <!--  <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>  -->
                    </div>
                    <!--end /div-->
                    <h4 class="page-title">Data Pemilik Toko</h4>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


                        <table id="tb_data" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pemilik</th>
                                    <th>ID Kartu</th>
                                    <th>Toko</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->
</div>
<!-- end page content -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="input-modal" tabindex="-1" role="dialog" aria-labelledby="input-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-white">
            <form autocomplete="off" id="i-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="input-modalLabel">Tambah divisi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="div_name">Nama divisi</label>
                            <input type="text" class="form-control" id="div_name" name="div_name" aria-describedby="emailHelp" placeholder="Enter Nama divisi" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="div_desc">Deskripsi divisi</label>
                            <input type="text" class="form-control" id="div_desc" name="div_desc" aria-describedby="emailHelp" placeholder="Enter Deskripsi Karyawan" required>
                        </div>
                        <div class="col-md-12 pull-right">
                            <button type="submit" class="btn btn-primary btnload">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Modal edit-->
<div class="modal fade bd-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-white">
            <form autocomplete="off" id="e-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="edit-modalLabel">Edit pemilik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <input type="number" name="id_pemilik" id="id_pemilik" hidden>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="nama_pemilik">Nama Pemilik</label>
                            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" aria-describedby="emailHelp" placeholder="Enter Nama Pemilik" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="status_aktif">Status Aktif</label>
                            <select class="form-control" name="status_aktif" id="status_aktif">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" placeholder="Enter password">
                        </div>
                        <div class="col-md-12 pull-right">
                            <button type="submit" class="btn btn-primary btnload">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
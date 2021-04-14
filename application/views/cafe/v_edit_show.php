	<!-- Page Content-->
	<div class="page-content">
		<div class="container-fluid">
			<!-- Page-Title -->

			<div class="row">
				<div class="col-lg-12">
					<div class="page-title-box" id="menuna" data-kode_cafe="<?= $kode_cafe; ?>">
						<!-- <iframe src="http://menus.ptmsn.co.id/demod/" class="responsive-frame" id="iframe" frameborder="0"></iframe> -->
					</div>
				</div>
			</div>
			<!-- end page title end breadcrumb -->
		</div>
		<!-- container -->

		<footer class="footer text-center text-sm-left">
			&copy; 2021 PT Media Solusi Network
			<span class="text-muted d-none d-sm-inline-block float-right">Made with <i class="mdi mdi-heart text-danger"></i> by MSN
				Dev</span>
		</footer>
		<!--end footer-->
	</div>
	<!-- end page content -->
	</div>
	<!-- end page-wrapper -->

	<!-- Modal Edit Logo -->
	<div class="modal fade edit-logo" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Ubah Logo
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<form autocomplete="off" id="logo-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
						<input type="text" name="id_cafe" id="id_cafe" value="<?= $id_cafe; ?>" hidden>
						<!-- <p>Edit Logo</p> -->
						<input type="file" id="input-file-now-custom-1" name="logo_cafe" class="dropify" data-default-file="<?= base_url(); ?>assets/statis/menu/images/logo/<?= $logo_cafe; ?>" />
						<p>File Yang diizinkan: PNG, JPG/JPEG</p>
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btnload btn-primary waves-effect waves-light">
						Save changes
					</button>
				</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Akhir Modal Edit Logo -->

	<!-- Modal Edit Background Logo -->
	<div class="modal fade edit-background-logo" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Ubah Background Logo
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<!-- <p>Edit Logo</p> -->
					<form autocomplete="off" id="background-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
						<input type="text" name="id_cafe" id="id_cafe" value="<?= $id_cafe; ?>" hidden>
						<input type="file" id="input-file-now-custom-1" name="background" class="dropify" data-default-file="<?= base_url(); ?>assets/statis/menu/images/logo/<?= $background; ?>" />
						<p>File Yang diizinkan: PNG, JPG/JPEG</p>
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btnload btn-primary waves-effect waves-light">
						Save changes
					</button>
				</div>
				</form>
			</div>

			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Edit Background Logo -->

	<!-- Modal Edit Background menu-->
	<div class="modal fade edit-background-menu" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Ubah Background Logo
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<!-- <p>Edit Logo</p> -->
					<form autocomplete="off" id="background_body-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
						<input type="text" name="id_cafe" id="id_cafe" value="<?= $id_cafe; ?>" hidden>
						<input type="file" id="input-file-now-custom-1" name="background_body" class="dropify" data-default-file="<?= base_url(); ?>assets/statis/menu/images/food/<?= $background_body; ?>" />
						<p>File Yang diizinkan: PNG, JPG/JPEG</p>
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btnload btn-primary waves-effect waves-light">
						Save changes
					</button>
				</div>
				</form>
			</div>

			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Edit Background menu-->

	<!-- Modal Edit Judul-->
	<div class="modal fade edit-judul" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Edit Judul
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<form autocomplete="off" id="tageline-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
						<input type="text" name="id_cafe" id="id_cafe" value="<?= $id_cafe; ?>" hidden>
						<div class="form-group">
							<label for="tageline">Edit Judul</label>
							<input type="text" class="form-control" id="tageline" name="tageline" placeholder="Ketikan Judul" />
						</div>
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btnload btn-primary waves-effect waves-light">
						Save changes
					</button>
				</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Edit Judul-->

	<!-- Modal Edit Tagline-->
	<div class="modal fade edit-tagline" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Edit Tagline
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<form autocomplete="off" id="tagelines-form" method="POST" class="form-horizontal repeater" enctype="multipart/form-data" role="form">
						<input type="text" name="id_cafe" id="id_cafe" value="<?= $id_cafe; ?>" hidden>
						<div data-repeater-list="category-group">
							<label for="judul">Edit / Tambah Tagline</label>
							<div data-repeater-item>
								<div class="form-group row">
									<div class="col-sm-10 col-lg-10 col-10">
										<input type="text" class="form-control" id="message" name="message" placeholder="Ketikan Judul" />
									</div>
									<div class="col-sm-2 col-lg-2 col-2">
										<button type="button" class="btn btn-danger waves-effect" data-repeater-delete type="button">
											<i class="fa fa-trash"></i>
										</button>
									</div>
								</div>
								<!-- <input  value="Delete" /> -->
							</div>
						</div>
						<button data-repeater-create type="button" class="btn btn-primary waves-effect">
							<i class="fa fa-plus"></i>
						</button>
						<!--end form-->
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btnload btn-primary waves-effect waves-light">
						Save changes
					</button>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Edit Tagline-->

	<!-- Modal Edit Social Media-->
	<div class="modal fade edit-social-media" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Edit Social Media
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<form autocomplete="off" id="sosmed-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
						<input type="text" name="id_cafe" id="id_cafe" value="<?= $id_cafe; ?>" hidden>
						<div class="form-group row">
							<div class="col-lg-6">
								<label for="instagram">Username Instagram <i class="fab fa-instagram"></i></label>
								<input type="text" class="form-control" name="instagram" id="instagram" placeholder="Ketik Username Instagram">
							</div>
							<div class="col-lg-6">
								<label for="twitter">Username Twitter <i class="fab fa-twitter"></i></label>
								<input type="text" class="form-control" name="twitter" id="twitter" placeholder="Ketik Username Twitter">
							</div>



						</div>

						<div class="form-group row">
							<div class="col-lg-12">
								<label for="facebook">Link Profil Facebook <i class="fab fa-facebook"></i></label>
								<input type="text" class="form-control" name="facebook" id="facebook" placeholder="Ketik Link Profil Facebook">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-lg-12">
								<label for="youtube">Link Profil Youtube <i class="fab fa-youtube"></i></label>
								<input type="text" class="form-control" name="youtube" id="youtube" placeholder="Ketik Link Profil Youtube">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="alert alert-info border-0" role="alert">
									<strong>Informasi</strong> Jika Tidak ada salah satu dari social media di atas, kosongkan inputannya nya
								</div>
							</div>

						</div>
						<!--end form-->
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btnload btn-primary waves-effect waves-light">
						Save changes
					</button>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Social Media-->

	<!-- Modal Edit Upload PDF Menu -->
	<div class="modal fade edit-pdf" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Ubah Pdf Daftar Menu
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<!-- <p>Edit Logo</p> -->
					<form autocomplete="off" id="menu-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
						<input type="text" name="id_cafe" id="id_cafe" value="<?= $id_cafe; ?>" hidden>
						<input type="file" id="input-file-now-custom-1" class="dropify" name="menu" data-default-file="<?= base_url(); ?>assets/statis/menu/pdf/<?= $menu; ?>" />
						<p>File Yang diizinkan: .PDF</p>
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btnload btn-primary waves-effect waves-light">
						Save changes
					</button>
				</div>
				</form>
			</div>

			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Edit Upload PDF Menu -->

	<!-- Modal Edit Pesan Reservasi -->
	<div class="modal fade edit-reservasi" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Edit Pesan Reservasi WhatsApp
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<form autocomplete="off" id="reservasi-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
						<input type="text" name="id_cafe" id="id_cafe" value="<?= $id_cafe; ?>" hidden>
						<div class="form-group">
							<label for="whatsapp">No WhatsApp</label>
							<input type="Number" id="whatsapp" name="whatsapp" class="form-control" placeholder="Ketikan no WhatsApp">

						</div>
						<div class="form-group">
							<label for="message_wa">Ketikan Untuk Pesan WhatsApp</label>

							<textarea name="message_wa" id="message_wa" class="form-control" cols="30" rows="3" placeholder="Ketikan Pesan Whatsapp contoh (Halo selamat siang, saya ingin pesan )"></textarea>

						</div>
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btnload btn-primary waves-effect waves-light">
						Save changes
					</button>
				</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Edit Pesan Reservasi-->

	<!-- Modal Edit Kontak -->
	<div class="modal fade edit-kontak" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Edit Kontak
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<form autocomplete="off" id="kontak-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
						<input type="text" name="id_cafe" id="id_cafe" value="<?= $id_cafe; ?>" hidden>
						<div class="form-group">
							<label for="maps_embed">Link Embed Alamat Maps</label>
							<input type="text" id="maps_embed" name="maps_embed" class="form-control" placeholder='Contoh : <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27424.310575027102!2d107.61754187127167!3d-6.9390382983548715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e86490c3479d%3A0xf5941a5e0075f2b0!2sTurangga%2C%20Lengkong%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1618224429642!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'>
							<a href="<?= base_url(); ?>assets/statis/video/tutor/tutor.mp4" target="_blank"><small>Cara Copy Link I frame di google Maps</small></a>
						</div>
						<div class="form-group">
							<label for="maps_url">Link Alamat Maps</label>
							<input name="maps_url" id="maps_url" class="form-control" cols="30" rows="3" placeholder="Contoh : https://goo.gl/maps/Fu5yo3FDoRYi9DmS6"></input>

						</div>
						<div class="form-group">
							<label for="alamat">Alamat Lengkap</label>
							<input name="alamat" id="alamat" class="form-control" cols="30" rows="3" placeholder="Ketikan Alamat Lengkap"></input>

						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-info border-0" role="alert">
									<strong>Informasi</strong> Jika Tidak ada salah satu dari social media di atas, kosongkan inputannya nya
								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btnload btn-primary waves-effect waves-light btnload">
						Save changes
					</button>
				</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Edit Kontak -->
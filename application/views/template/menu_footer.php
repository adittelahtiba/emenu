<!--
		jQuery Scripts
	-->
<script src="<?= base_url('assets/statis/menu/'); ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/statis/menu/'); ?>js/jquery.validate.js"></script>
<script src="<?= base_url('assets/statis/menu/'); ?>js/jquery.magnific-popup.js"></script>
<script src="<?= base_url('assets/statis/menu/'); ?>js/imagesloaded.pkgd.js"></script>
<script src="<?= base_url('assets/statis/menu/'); ?>js/isotope.pkgd.js"></script>
<script src="<?= base_url('assets/statis/menu/'); ?>js/jquery.slimscroll.js"></script>
<script src="<?= base_url('assets/statis/menu/'); ?>js/owl.carousel.js"></script>
<script src="<?= base_url('assets/statis/menu/'); ?>js/typed.js"></script>
<script src="<?= base_url('assets/statis/menu/'); ?>js/custom.js"></script>
<!-- <script src="../../../use.fontawesome.com/8da76d029b.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<!--
		Google map api
	-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>

<!--
		Main Scripts
	-->
<script src="<?= base_url('assets/statis/menu/'); ?>js/scripts.js"></script>
<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("activee");
      var isi = this.nextElementSibling;
      if (isi.style.display === "block") {
        isi.style.display = "none";
        isi.style.transition = "all 2s";
      } else {
        isi.style.display = "block";
        isi.style.transition = "all 2s";
      }
    });
  }
</script>
<!-- <>
      $(document).ready(function () {
        $(window).scroll(function () {
          if ($(document).scrollTop() > 0) {
            $("footer").addClass("foo");
          } else {
            $("footer").removeClass("foo");
          }
        });
      });
    </> -->
</body>

<!-- Mirrored from bslthemes.com/ryan/demo/blog-post-new.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 08:50:59 GMT -->

</html>
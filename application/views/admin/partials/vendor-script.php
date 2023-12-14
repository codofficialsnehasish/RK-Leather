<!-- JAVASCRIPT -->
<script src="<?= base_url('assets/admin/libs/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?= base_url('assets/admin/libs/metismenu/metisMenu.min.js');?>"></script>
<script src="<?= base_url('assets/admin/libs/simplebar/simplebar.min.js');?>"></script>
<script src="<?= base_url('assets/admin/libs/node-waves/waves.min.js');?>"></script>



<!-- toast message -->
<script src="<?= base_url('assets/admin/libs/toast/toastr.js');?>"></script>
<script src="<?= base_url('assets/admin/js/pages/toastr.init.js');?>"></script>
<!-- toast message -->

 <?php PageSpecScript($pagescript);?>

 <?php $this->load->view('admin/partials/_messages');?>    
 <script>
    function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
// $(document).ready(function(){
//   $('.toast').toast('show');
// });
</script>
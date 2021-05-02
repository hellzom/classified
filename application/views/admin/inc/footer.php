</div>
</div>

<footer class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <!--<img src="https://i.ibb.co/sHZz13b/logo.png" class="w-50 logo-footer" >--> 
                  <p class="logo-footer">U & I</p>
                  <p>C/O Hari Om Agency</p>
                  <p>Bhatta Durgabari, Purnea</p>
                  <p>Bihar - 854301</p>
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6> About Company</h6>
               <p>Welcome to the new innovative dimension of business.</p>
               <a href="#" class="btn-footer"> Get Set Go </a><br>
               <a href="#" class="btn-footer"> Contact Us</a>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 px-4">
               <h6>Quick Links</h6>
               <div class="row ">
                  <div class="col-md-12">
                     <ul>
                        <li> <a href="#"> Home</a> </li>
                        <li> <a href="#"> About</a> </li>
                        <li> <a href="#"> Contact</a> </li>
                        <li> <a href="#"> Advertise</a> </li>
                        <li> <a href="#"> Terms & Conditions</a> </li>
                        <li> <a href="#"> Frequently Asked Questions</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6 ">
               <h6> Social Links</h6>
               <div class="social">
                  <a href="#" class="mr-2"><i class="fab fa-2x fa-facebook" aria-hidden="true"></i></a>
                  <a href="#" class="mr-2"><i class="fab fa-2x fa-instagram" aria-hidden="true"></i></a>
                  <a href="#" class="mr-2"><i class="fab fa-2x fa-twitter" aria-hidden="true"></i></a>
                  <a href="#" class="mr-2"><i class="fab fa-2x fa-google-plus" aria-hidden="true"></i></a>
                  <a href="#" class="mr-2"><i class="fab fa-2x fa-linkedin" aria-hidden="true"></i></a>
                  <a href="#" class="mr-2"><i class="fab fa-2x fa-youtube" aria-hidden="true"></i></a>
               </div>
               <br>
               <p>Follow U & I for latest updates.</p>
            </div>
         </div>
      </div>
   </div>
</div>
</footer> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>/assets/js/script.js"></script>
<script src="<?= base_url();?>/assets/js/owl.carousel.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>



<script>
  $(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
  });

  $('#iAll').on('click', function(e){
  e.preventDefault();
  $('#iSelect option').prop('selected', true).trigger('chosen:updated');
  });

  $('#iNone').on('click', function(e){
  e.preventDefault();
  $("#iSelect option:selected").removeAttr("selected").trigger('chosen:updated');
  });
</script>
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    responsiveClass:true,
    loop:true,
    nav:true,
    rewind:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
  });

});
</script>

<script>
$(document).ready(function(){
  $(".business-owl-carousel").owlCarousel({
    responsiveClass:true,
    loop:true,
    nav:true,
    rewind:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
  });
  
});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var $optgroups = $('#selectscat > option');
    
    $("#selectmcat").on("change",function(){
      var selectedVal = this.value;
      
      $('#selectscat').html($optgroups.filter('[id="'+selectedVal+'"]'));
   });  
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var $optgroups = $('#selectcity > option');
    
    $("#selectstate").on("change",function(){
      var selectedVal = this.value;
      
      $('#selectcity').html($optgroups.filter('[id="'+selectedVal+'"]'));
   });  
  });
</script>
<?php if(!empty($this->session->flashdata('icon_error'))){ ?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#submit").trigger('click');
  });
</script>
<?php } ?>
</body>
</html>
<?php
$active = 'Products';
include('header.php');
include('topImage.php');
?>



<section id="gallery">
   
</section>



<script>
   $(document).ready(function(){
    var allImages = '';
        for(i=1; i<16; i++){
        
            allImages += "<div class='gal-image'>" + "<img src='images/gal/product ("+i+").jpg' >" + "</div>";
            
            

        }
        $('#gallery').html(
            allImages
        );
    });
        
</script>

<?php include('footer.php') ?> 
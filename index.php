<?php
$active = 'Home';
        include('header.php');
        include('bootstrap-sldv.php');
        include('home-body.php');
        ?>
        <div class="gallery-cont">
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
        </div>
        <?php
        include('footer.php');
    ?>
<!-- </div> -->

<?php  ?>
                
                    

                    
                    
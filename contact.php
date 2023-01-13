
<?php
$active = 'Contact';
include('header.php');

include('topImage.php');

?>   


   
<section id="contact">

    <div class="contact-details">
        <h4>CONTACT INFO</h4>

        
            <section class="flex flex-v-center">

                <p>
                <i class="fa-solid fa-envelope"></i>
                </p>

                <p>marketing.sldv@gmail.com, 
                uslifesciences@gmail.com <br>
                marketing@sldvlifesciences.com
                </p>

            </section>


            <section class="flex flex-v-center">

                <p>
                    <i class="fa-solid fa-mobile-retro"></i>
                </p>

                <p>
                    +91 9319421289, 9643430289
                </p>

            </section>


            <section class="flex flex-v-center">

                <p>
                    <i class="fa-solid fa-house-chimney"></i>
                </p>

                <p>
                    www.sldvlifesciences.com
                </p>

            </section>


            <section class="flex flex-v-center">

                <p>
                    <i class="fa-solid fa-map-marker"></i>
                </p>

                <p>
                    Head Office : Flat No. 26, CGHS Sadar Apartment,<br>
                    Mayur Vihar Phase-1, Delhi-110091
                </p>

            </section>


            <section class="flex flex-v-center">

                <p>
                    <i class="fa-solid fa-map-marker"></i>
                </p>

                <p>
                    Corp. Office : 238/1, Brahmapuri, Muzaffarnagar, (U.P.)
                </p>

            </section>
        

    </div>

    <div class="contact-form">

    <h4>SEND US A MESSAGE</h5>
                            <form action="contactForm.php" method="post" enctype="multipart/form-data" class="f-color pt-3">
							
                            <div class="form-group">
                                <label for="contactusername">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
							
                            <div class="form-group">
                                <label for="contactusername">Mobile</label>
                                <input type="text" class="form-control" name="mobile" required>
                            </div>
							
                            <div class="form-group my-4">
                                <label for="contactemail">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
							
                            <div class="form-group">
                                <label for="contactcomment">Your Message</label>
                                <textarea class="form-control" rows="5" name="urMessage" required></textarea>
                            </div>
							
                            <input type="submit" name="submit" >
                        </form>

    </div>
</section>
            

           

           

    




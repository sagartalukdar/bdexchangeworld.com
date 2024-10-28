
 <!-- blinking-component Modal -->
 <?php include('include/blinking-component.php'); ?>


  <!-- current time.php Modal -->
  <?php include('include/current-time.php'); ?>



<div class="me-top-header" style="padding: 10px;">
    <div class="container">
        <div class="me-top-head">
            <div class="me-top-header-left">
                <ul>
                    <li style="margin-left: 130px; font-weight: 900; font-size: medium;">
                        <Span>Operator:</Span> <?php if($is_online){  ?>
                            <i class="fas fa-circle fa-green-circle blink" style="color: rgb(12, 245, 12);"></i> Online 
                       <?php }else {  ?>
                        <i class="fas fa-circle fa-green-circle "></i> Offline 
                            
                      <?php } ?> 

                    </li>  
                </ul>

            </div>          

            
            <div class="me-top-header-right" style="font-weight: 600; ">        

                <ul>                   
                    <li>
                       Our Email: <i class="far fa-envelope-open"></i> <a href="mailto:bdexchangeworld@gmail.com">bdexchangeworld@gmail.com</a> </li>
                    <li>
                      Call Anytime: <i class="fas fa-mobile-alt"></i> <a href="tel:+916026151356">6026151356</a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
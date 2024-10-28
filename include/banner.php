
<?php
 $Offers=$crud->Read("offer","1 order by `id` desc");
 if($Offers){
  $Offer=$Offers[0];
 }
?>

<div class="me-banner" style="padding-top: 30px !important;">
    <div class="container">
        <div class="row">        
            <div class="col-md-8 col-12">
                <?php include('include/calculator.php'); ?>
            </div>
            <div class="col-md-4 col-12" >
            <?php if($Offers){ ?>
                <img src="<?php echo $Offer['image']; ?>" style="width: 100%; max-height: 300px; border-radius: 12px;" alt="image" class="img-fluid mt-3" />              
            <?php }else{ ?>
              <img src="" style="width: 100%; height: 300px; border-radius: 12px;border:1px solid black;" alt="image" class="img-fluid mt-3" />
            <?php } ?>
            </div>      
            
        </div>
    </div>
</div>


<div class="container" style="padding-top: 20px; padding-bottom: 20px;" >
    <div class="row border border-2 ">

        <div class="me-transaction-box">
            <div class="table table-responsive">
                <table>
                    <thead>
                        <tr>
                           
                            <th style="font-size: large; display: flex; align-items: center; justify-content: center;">
                              <div >
                                <i class="fas fa-check"></i> Our Reserve
                              </div>
                            </th>
                          
                        </tr>
                    </thead>
                   
                </table>
            </div>
        </div>

        <?php
          $reserves=$crud->Read("our_reserve","1 order by `id` desc");
          if($reserves){
            foreach($reserves as $reserve){
        ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-30 d-flex" style="padding: 15px;">
              <img style="max-height: 36px; max-width: 36px; border-radius: 100%;"  src="<?= $reserve['image']; ?>" alt="">
                <div style="margin-left: 8px;">
                  <p style="font-weight: 600; font-size: large;"><?php echo $reserve['payment_method']; ?></p>
                  <p><?php echo $reserve['reserve']; ?></p>
                </div>
          </div>
        <?php
            }
          }else{
            for($i=0;$i<5;$i++){
        ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-30 d-flex" style="padding: 15px;">
              <img style="max-height: 36px; max-width: 36px; border-radius: 100%;"  src="" alt="">
                <div style="margin-left: 8px;">
                  <p style="font-weight: 600; font-size: large;">payment method</p>
                  <p>xxxxxx INR/BDT</p>
                </div>
          </div>
        <?php
            }
          }
        ?>

    </div>
    
</div>
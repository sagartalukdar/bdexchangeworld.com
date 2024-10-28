




<style>
  

.converter {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}
 
 .converter h1 {
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.input-group button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #28a745;
    color: white;
    cursor: pointer;
}

.input-group button:hover {
    background-color: #218838;
}

.update-rates {
    margin-top: 20px;
}

.update-rates label {
    display: block;
    margin-bottom: 5px;
}

.update-rates input {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.update-rates button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
}

.update-rates button:hover {
    background-color: #0056b3;
}

</style>



<?php
  $conversationRate=$crud->Read("conversation_rate","1 order by `id` desc");
  $exchangeMoney=$crud->Read("exchange_money","1 order by `id` desc");
  if($conversationRate){
    $Cr=$conversationRate[0];
  }
?>

    <div class="converter" style="background: linear-gradient(45deg, #f93e7e, #ffb628); color: white !important;">

       <div class="d-flex justify-content-center">
            <div>
               
                <img style="max-width: 46px; max-height: 46px;" src="assets/images/calulate-removebg-preview.png" alt="">
            </div>
            <h5 class="text-center text-white" style="font-weight: 700; font-size: x-large; margin-bottom: 30PX;">Calculate, receive, and send amount</h5>
       </div>

        <div class="container">
             <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="input-group" >
                        <label for="bdt">Amount in BDT:</label>
                        <input type="number" id="bdt" placeholder="Enter amount in BDT" style="border-radius: 3px;">
                        <button onclick="convertBDTtoINR()" style="margin: auto; border-radius: 9px;"><div class="vertical-exchange">
                            <i class="fas fa-arrow-up"></i>
                            <i class="fas fa-arrow-down"></i>
                        </div></button>

                      
                    </div>
                    <div class="col-10" style="margin: auto;">
                        <label for="bdtResult">Amount in INR:</label>
                        <p id="bdtResult" style="padding: 20px; border: 1px solid #aca5a5; border-radius: 4px; background-color: white; color: black; font-weight: 700;"></p>
                    </div>
    
                </div>

                <div class="col-12 col-md-6 col-lg-6">

                    <div class="input-group">
                        <label for="inr">Amount in INR:</label>
                        <input type="number" id="inr" placeholder="Enter amount in INR" style="border-radius: 3px;">
                        <button onclick="convertINRtoBDT()" style="margin: auto; border-radius: 9px;">
                            <div class="vertical-exchange">
                                <i class="fas fa-arrow-up"></i>
                                <i class="fas fa-arrow-down"></i>
                            </div></button>

                       
                    </div>
                    

                    <div class="col-10" style="margin: auto;">
                        <label for="inrResult">Amount in BDT:</label>
                        <p id="inrResult" style="padding: 20px; border: 1px solid #aca5a5; border-radius: 4px; background-color: white; color: black; font-weight: 700;"></p>
                    </div>

                </div>




                
        <style>
            .f-dropdown {
  --max-scroll: 3;
  position: relative;
  z-index: 10;
}
.f-dropdown select {
  display: none;
}
.f-dropdown > span {
  cursor: pointer;
  padding: 8px 12px;
  border-radius: 6px;
  display: flex;
  align-items: center;
  position: relative;
  color: #bbb;
  border: 1px solid #ccc;
  background: #fff;
  transition: color 0.2s ease, border-color 0.2s ease;
}
.f-dropdown > span > span {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  padding-right: 12px;
}
.f-dropdown > span img {
  width: 40px;
  height: 40px;
  border-radius: 100%;
  margin-right: 10px;
}
.f-dropdown > span:before, .f-dropdown > span:after {
  content: "";
  display: block;
  position: absolute;
  width: 8px;
  height: 2px;
  border-radius: 1px;
  top: 50%;
  right: 12px;
  background: #000;
  transition: all 0.3s ease;
}
.f-dropdown > span:before {
  margin-right: 4px;
  transform: scale(0.96, 0.8) rotate(50deg);
}
.f-dropdown > span:after {
  transform: scale(0.96, 0.8) rotate(-50deg);
}
.f-dropdown ul {
  margin: 0;
  padding: 0;
  list-style: none;
  opacity: 0;
  visibility: hidden;
  position: absolute;
  max-height: calc(var(--max-scroll) * 46px);
  top: 40px;
  left: 0;
  z-index: 1;
  right: 0;
  background: #FFF;
  border: 1px solid #CCC;
  border-radius: 6px;
  overflow-x: hidden;
  overflow-y: auto;
  transform-origin: 0 0;
  transition: opacity 0.2s ease, visibility 0.2s ease, transform 0.3s cubic-bezier(0.4, 0.6, 0.5, 1.32);
  transform: translate(0, 5px);
}
.f-dropdown ul li {
  padding: 0;
  margin: 0;
}
.f-dropdown ul li a {
  cursor: pointer;
  display: block;
  padding: 8px 12px;
  color: #000;
  text-decoration: none;
  outline: none;
  position: relative;
  transition: all 0.2s ease;
  display: flex;
  align-items: center;
}
.f-dropdown ul li a img {
  width: 40px;
  height: 40px;
  margin-right: 10px;
  border-radius: 100%;
}
.f-dropdown ul li a:hover {
  color: #5C6BC0;
}
.f-dropdown ul li.active a {
  color: #FFF;
  background:#e4e5ee;
}
.f-dropdown ul li.active a:before, .f-dropdown ul li.active a:after {
  --scale: 0.6;
  content: "";
  display: block;
  width: 10px;
  height: 2px;
  position: absolute;
  right: 12px;
  top: 50%;
  opacity: 0;
  background: #FFF;
  transition: all 0.2s ease;
}
.f-dropdown ul li.active a:before {
  transform: rotate(45deg) scale(var(--scale));
}
.f-dropdown ul li.active a:after {
  transform: rotate(-45deg) scale(var(--scale));
}
.f-dropdown ul li.active a:hover:before, .f-dropdown ul li.active a:hover:after {
  --scale: 0.9;
  opacity: 1;
}
.f-dropdown ul li:first-child a {
  border-radius: 6px 6px 0 0;
}
.f-dropdown ul li:last-child a {
  border-radius: 0 0 6px 6px;
}
.f-dropdown.disabled {
  opacity: 0.7;
}
.f-dropdown.disabled > span {
  cursor: not-allowed;
}
.f-dropdown.filled > span {
  color: #000;
}
.f-dropdown.open {
  z-index: 15;
}
.f-dropdown.open > span {
  border-color: #AAA;
}
.f-dropdown.open > span:before, .f-dropdown.open > span:after {
  background: #000;
}
.f-dropdown.open > span:before {
  transform: scale(0.96, 0.8) rotate(-50deg);
}
.f-dropdown.open > span:after {
  transform: scale(0.96, 0.8) rotate(50deg);
}
.f-dropdown.open ul {
  opacity: 1;
  visibility: visible;
  transform: translate(0, 12px);
  transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s cubic-bezier(0.4, 0.6, 0.5, 1.32);
}

/* --------------------------- */
.f-group {
  max-width: 250px;
  margin: 0 auto;
  text-align: left;
}
.f-group select {
  width: 100%;
}

.f-control {
  font-size: 14px;
  line-height: normal;
  color: #000;
  display: inline-block;
  background-color: #ffffff;
  border: #ccc 1px solid;
  border-radius: 6px;
  padding: 8px 12px;
  outline: none;
  max-width: 250px;
}

li a span {
  color:  #000000;
}



        </style>
        
 





   
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div><i class="fas fa-paper-plane"></i> Send Method</div>
                        <div class="input-group">
                                                                                
                            <div class="f-group">
                                <select class="f-control f-dropdown" placeholder="Select any Send Method " id="fromMethod">
                                  <?php
                                    if($exchangeMoney){
                                      foreach($exchangeMoney as $em){
                                  ?>
                                    <option  style="background-color: #fff !important;" value="<?= $em['fromWhere']; ?>" data-image="<?= $em['sendImage']; ?>"><?= $em['fromWhere']; ?></option>
                                  <?php
                                      }
                                    }
                                  ?>
                               
                                <!-- <option value="1" data-send="amazon" data-image="images/paymentMethod/amapay.jpeg">Amazon Pay</option>
                                <option value="2" data-image="images/paymentMethod/bang bank.png">Bangladesh Banking</option>
                                <option value="3" data-image="images/paymentMethod/rocket.png">Rocket Bangladesh</option>
                                <option value="4" data-image="images/paymentMethod/phonepay-removebg-preview.png">Phone Pay</option>
                                <option value="5" data-image="https://bdexchangeworld.com/images/offer/7e88a653f5810ee5196f1e889a913ec6discount.png">Other Payment</option> -->
                                </select>
                            </div><br/>
                        </div>
                    </div>
                  
        
                    <div class="col-12 col-md-6 col-lg-6">
                        <div>Receive Method <i class="fas fa-reply"></i></div>
                        <div class="input-group">

                            <div class="f-group">
                                <select class="f-control f-dropdown" placeholder="Select any Receive Method " id="toMethod">
                                <!-- <option value="1" data-receive="nagad" data-image="images/paymentMethod/nogod.png">Nagad Bangladesh</option>
                                <option value="3" data-image="images/paymentMethod/rocket.png">Rocket Bangladesh</option>
                                <option value="4" data-image="images/paymentMethod/phonepay-removebg-preview.png">Phone Pay</option>
                                <option value="5" data-image="https://bdexchangeworld.com/images/offer/7e88a653f5810ee5196f1e889a913ec6discount.png">Other Payment</option> -->

                                <?php
                                    if($exchangeMoney){
                                      foreach($exchangeMoney as $em){
                                ?>
                                    <option  style="color: #fff !important;" value="<?= $em['toWhere']; ?>" data-image="<?= $em['receiveImage']; ?>"><?= $em['toWhere']; ?></option>
                                <?php
                                    }
                                  }
                                ?>

                                </select>
                            </div><br/>

                        </div>
                    </div>
                </div>

             </div>
        </div>
        
        <a href="" class="btn btn-md" style="background-color: black; color: white; border-radius: 10px;" id="exchange"><i class="fas fa-exchange-alt exchange-icon"></i> Exchange</a>

        <div class="update-rates" style="display: none;">
            <h2>Update Conversion Rates:</h2>
            <label for="rate">1 INR to BDT:</label>
            <!-- <input type="number" id="rate" value="1.4096"> -->
            <p id="rate"> <?php if($conversationRate){echo $Cr['conversation_rate'];}else {echo 1.4096;} ?> </p>
            <button onclick="updateRates()">Update Rates</button>
        </div>
    </div>






    
<script>
    (function( $ ){
  $.fn.mySelectDropdown = function(options) {    
    return this.each(function() {  
      var $this = $(this);
      
      $this.each(function () {
        var dropdown = $("<div />").addClass("f-dropdown selectDropdown");
        
        if($(this).is(':disabled')) 
          dropdown.addClass('disabled');

        $(this).wrap(dropdown);

        var label = $("<span />").append($("<span />")
          .text($(this).attr("placeholder"))).insertAfter($(this));
        var list = $("<ul />");

        $(this)
          .find("option")
          .each(function () {
            var image = $(this).data('image');
            if(image) {
              list.append($("<li />").append(
                $("<a />").attr('data-val',$(this).val())
                .html(
                  $("<span />").append($(this).text())
                ).prepend('<img src="'+image+'">')
              ));
            } else if($(this).val() != '') {
              list.append($("<li />").append(
                $("<a />").attr('data-val',$(this).val())
                .html(
                  $("<span />").append($(this).text())
                )
              ));
            }
          });

        list.insertAfter($(this));

        if ($(this).find("option:selected").length > 0 && $(this).find("option:selected").val() != '') {
          list.find('li a[data-val="' + $(this).find("option:selected").val() + '"]').parent().addClass("active");
          $(this).parent().addClass("filled");
          label.html(list.find("li.active a").html());
        }
      });

      if(!$(this).is(':disabled')) {
        $(this).parent().on("click", "ul li a", function (e) {
          e.preventDefault();
          var dropdown = $(this).parent().parent().parent();
          var active = $(this).parent().hasClass("active");
          var label = active
            ? $('<span />').text(dropdown.find("select").attr("placeholder"))
            : $(this).html();

          dropdown.find("option").prop("selected", false);
          dropdown.find("ul li").removeClass("active");

          dropdown.toggleClass("filled", !active);
          dropdown.children("span").html(label);

          if (!active) {
            dropdown
              .find('option[value="' + $(this).attr('data-val') + '"]')
              .prop("selected", true);
            $(this).parent().addClass("active");
          }

          dropdown.removeClass("open");
        });

        $this.parent().on("click", "> span", function (e) {
          var self = $(this).parent();
          self.toggleClass("open");
        });

        $(document).on("click touchstart", function (e) {
          var dropdown = $this.parent();
          if (dropdown !== e.target && !dropdown.has(e.target).length) {
            dropdown.removeClass("open");
          }
        });
      }
    });
  };
})( jQuery );

$('select.f-dropdown').mySelectDropdown();

</script>




<script>
    let inrToBdtRate = document.getElementById('rate').innerText;
    let bdtToInrRate = 1 / inrToBdtRate;

function convertBDTtoINR() {
    const bdtAmount = parseFloat(document.getElementById('bdt').value);
    if (isNaN(bdtAmount)) {
        document.getElementById('bdtResult').innerText = 'Invalid input';
        return;
    }
    const inrAmount = bdtAmount * bdtToInrRate;
    document.getElementById('bdtResult').innerText = `Send ${bdtAmount} BDT receiver get ${inrAmount.toFixed(2)} INR`;
}

function convertINRtoBDT() {
    const inrAmount = parseFloat(document.getElementById('inr').value);
    if (isNaN(inrAmount)) {
        document.getElementById('inrResult').innerText = 'Invalid input';
        return;
    }
    const bdtAmount = inrAmount * inrToBdtRate;
    document.getElementById('inrResult').innerText = `Send ${inrAmount} INR receiver get ${bdtAmount.toFixed(2)} BDT`;
}

function updateRates() {
    const newRate = parseFloat(document.getElementById('rate').value);
    if (isNaN(newRate) || newRate <= 0) {
        alert('Invalid rate input');
        return;
    }
    inrToBdtRate = newRate;
    bdtToInrRate = 1 / newRate;
    alert('Conversion rates updated successfully');
}

</script>



<input type="hidden" id="hidVal" value=<?php 
if(empty($_SESSION['username'])){
    echo "0";
} else{
    echo "1";
}
?> 
>



<script>
  document.getElementById('exchange').addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default action of the anchor tag
      
      var hidVal = document.getElementById('hidVal').value;
      
      if (hidVal === "0") {
          Swal.fire({
              title: "Error !",
              text: "You need to login or register to exchange.",
              icon: "error"
          });
      } else if (hidVal === "1") {
          var fromWhere = document.getElementById('fromMethod').value;
          var toWhere = document.getElementById('toMethod').value;
          var newHref = "exchange.php?send=" + encodeURIComponent(fromWhere) + "&to=" + encodeURIComponent(toWhere);
          this.setAttribute('href', newHref);
          window.location.href = newHref;
      }
  });
</script>




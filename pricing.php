<?php require_once('header.php') ?>

<!-- Hero Start-->
<!-- <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="hero-cap text-center pt-50">
          <h2>Pricing</h2>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!--Hero End -->

<div class="container  pt-150">
  <div class="row">
    <div class="col-md-12 wow zoomIn" data-wow-delay="0.5s">
      <div class="section-tittle text-center mb-20">
        <h2>Calculate Pricing Here</h2>
        <span class="down-arrow">
          <a href="#calculator" data-toggle="tooltip" title="Click Here!">
            <i class="fa fa-arrow-down"></i>
          </a>
        </span>
      </div>
    </div>
  </div>
</div>
<div class="services-area" data-background="assets/img/gallery/section_bg02.jpg">
  <div class="container">
    <a name="calculator"></a>
    <div class="row">
      <div class="col-md-6 mt-50 mb-50 pb-50 shadow-lg rounded-lg wow fadeInLeft" data-wow-delay="0.5s"
        style="background-color: #eff3f8;border-radius: 15px !important;">
        <h4 class="mt-40 mb-20">AGREEMENT COST</h4>
        <p class="text-danger">PLEASE FILL IN THE FORM BELOW. WE'LL CALCULATE COST OF REGISTRATION HERE.</p>
        <form action="#">
          <div class="mt-20">
            <label for="city"> City : </label>
            <div class="form-select">
              <select id="city">
                <option value="1">Mumbai</option>
                <option value="2">Pune</option>
                <option value="3">Thane</option>
                <option value="4">Navi-Mumbai</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md 6">
              <div class="mt-20">
                <label for="property_area"> PROPERTY AREA : </label>
                <div class="form-select">
                  <select id="propertyArea">
                    <option value="1">Urban</option>
                    <option value="2">Rural</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md 6">
              <div class="mt-20">
                <label for="property_area"> Type : </label>
                <div class="form-select">
                  <select id="rentType">
                    <option value="fixed">Fixed</option>
                    <option value="varient">Varient</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-20">
            <div class="row">
              <div class="col-md-12">
                <label for="deposit"> REFUNDABLE DEPOSIT : </label>
                <input type="number" id="deposit" name="deposit" placeholder="REFUNDABLE DEPOSIT" required class="single-input">
              </div>
              <!-- <div class="col-md-6">
                <label for="deposit"> NON REFUNDABLE DEPOSIT : </label>
                <input type="number" id="non-deposit" name="non-deposit" placeholder="NON REFUNDABLE DEPOSIT" required class="single-input">
              </div> -->
            </div>
          </div>
          <div class="mt-20">
            <label for="number_of_months"> License Period in Months : </label><span
              class="badge badge-dark float-right p-2 mr-10 pointer rentType d-none" data-toggle="modal"
              data-target="#exampleModalCenter" title="RENT AMOUNT"><i class="fa fa-plus"></i></span><span class="float-right mr-10 rentType d-none">( Click Here )</span>
            <input type="number" id="number_of_months" name="number_of_months" placeholder="Number Of Months" required class="single-input">
          </div>
          <div class="mt-20">
            <label for="avg_month_rent"> RENT AMOUNT : </label>
            <input type="number" id="avg_month_rent" name="avg_month_rent" placeholder="RENT AMOUNT" required class="single-input">
          </div>
          <div class="mt-20">
            <button type="button" onclick="calculate();" class="btn btn-default btn-sm float-none">Calculate</button>
          </div>
        </form>
      </div>
      <div class="col-md-6 mt-50 mb-50 pb-50 shadow-lg rounded-lg wow fadeInRight" data-wow-delay="0.5s"
        style="background-color: #eff3f8;border-radius: 15px !important;">
        <h4 class="mt-40 mb-20">HERE IS AN ESTIMATE OF THE CHARGES:</h4>
        <p>PLEASE CHECK BELOW CHARGES</p>
        <div>
          <br>
          <div class="" style="background-color: #fff;">
            <div>
              <table class="table table-bordered" id="labor-table" style="display: table;border: 2px solid #CCC"
                border="1">
                <tbody>
                  <tr>
                    <td><span>License Period in Months :</span></td>
                    <td><span><label class="number_of_months"></label></span></td>
                  </tr>
                  <tr>
                    <td><span>RENT AMOUNT :</span></td>
                    <td><span><label class="avg_month_rent"></label></span></td>
                  </tr>
                  <tr>
                    <td><span>REFUNDABLE DEPOSIT :</span></td>
                    <td><span><label class="deposit"></label></span></td>
                  </tr>
                  <tr>
                    <td><span>PROPERTY AREA :</span></td>
                    <td><span><label class="propertyArea"></label></span></td>
                  </tr>
                  <tr>
                    <td>
                      <small>Govt. Reg. Charges : Rs. <b><span id="reg_charg"></span></b>/- </small><br>
                      <small>Govt. Stamp Duty : Rs. <b><span id="stamp_duty"></span></b>/- </small><br>
                      <small>Govt. ASP Charges : Rs. <b><span id="asp_charges"></span></b>/- </small><br>
                      <small>Service Charges : Rs. <b><span id="service_charges"></span></b>/- </small><br>
                      <span>TOTAL CHARGES :</span>
                    </td>
                    <td class="highlight-text" style="padding-top: 55px !important;"><span>RS. <span
                          id="total_charges"></span>/-</span></td>
                  </tr>
                  <!-- <tr>
                                        <td colspan="2">
                                            <h5>PAY ONLY ₹ 300/- TO
                                                START PROCESS</h5>
                                        </td>
                                    </tr> -->
                  <tr>
                    <td class="highlight-text">
                      <span>FOR AGREEMENT</span>
                    </td>
                    <td>
                      <button type="button" class="btn btn-default btn-sm"><a href="contact.php">Contact US</a></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Rent Amount Calculator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="rent_submit" method="post" name="rent_submit">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-6 text-center">
              <label for="recipient-name" class="col-form-label">Month</label>  
            </div>
            <div class="col-md-6 col-sm-6 col-6 text-center">
              <label for="message-text" class="col-form-label">Amount Per Month</label>
            </div>
          </div>
        <?php $count = 4;
          for($i=0;$i <= $count ;$i++)
          { 
        ?>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-6">
                <div class="form-group">
                  <input type="number" class="form-control" id="month_<?= $i ?>" name="month_<?= $i ?>" value="">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-6">
                <div class="form-group">
                  <input type="number" class="form-control" id="rent_<?= $i ?>" name="rent_<?= $i ?>" value="">
                </div>
              </div>
            </div>
        <?php 
          } 
        ?>
          <!-- <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="recipient-name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="recipient-name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="recipient-name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="recipient-name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="recipient-name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="recipient-name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="recipient-name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="recipient-name">
              </div>
            </div>
          </div> -->
        </form>
      </div>
      <div class="modal-footer">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-4">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
          </div>
          <div class="col-md-8 col-sm-8 col-8">
            <button type="button" data-dismiss="modal" id="add_rent" class="btn btn-sm btn-primary">Average Calculate</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once('footer.php') ?>
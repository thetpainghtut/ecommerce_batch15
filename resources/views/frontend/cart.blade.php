  @extends('frontend.master')

  @section('content')

  <div class="container">
   


        <div class="row">


          <div class="col-lg-8 pt-5">

            <h5 class="mb-1 pt-5">Cart (<span class="cartplus"></span> items)</h5>



            <div class="card wish-list mb-3">

              <div class="card-body" id="shoppingcart_table">
                <table class="table" id="mytable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Photo</th>
                      <th>Price</th>
                      <th>Qty</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody id="tbody">
                    
                  </tbody>
                </table>
                

                <hr class="mb-4">

              </div>

            </div>

              <div class="card mb-3">
                <div class="card-body">

                  <h5 class="mb-4">Expected shipping delivery</h5>

                  <p class="mb-0"> Sunday ... Friday</p>
                </div>
              </div>

              <div class="card mb-3">
                <div class="card-body">

                  <h5 class="mb-4">We accept</h5>

                  <img class="mr-2" width="45px"
                  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                  alt="Visa">
                  <img class="mr-2" width="45px"
                  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                  alt="American Express">
                  <img class="mr-2" width="45px"
                  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                  alt="Mastercard">
                  <img class="mr-2" width="45px"
                  src="https://z9t4u9f6.stackpathcdn.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                  alt="PayPal acceptance mark">
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="mb-4 py-5"></div>
              <!-- Card -->
              <div class="card mb-3">
                <div class="card-body" id="shoppingcart_tfoot">

                  <h5 class="mb-3">The total amount of</h5>

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                      Temporary amount
                      <span>10000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      Shipping
                      <span>Gratis</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                      <div>
                        <strong>The total amount of</strong>
                        <strong>
                          <p class="mb-0">(including VAT)</p>
                        </strong>
                      </div>
                      <span><strong>10000</strong></span>
                    </li>
                  </ul>
                  <input type="text" class="form-control mb-4" placeholder="Enter Note" name="note" id="note">
                  <button class="btn btn-primary btn-block waves-effect waves-light checkout_btn" data-total=${total}>go to checkout</button>
              </div>
            </div>


          </div> 

        </div>


    </div>
  @endsection
<div id="modal1" class="modal">
    <div class="modal-content pd0">
      <div class="row mg0" style="height: 100%">
        <div class="col m6 pd0" style="background-color: white !important; height:100%">
          <h3 class="center mgt20">Jordan 1 Retro High</h3>
          <p class="center">
              Off-White University Blue
          </p>
          <div class="row mg0" style="margin-top: 10% !important">
            <img src="https://images.stockx.com/images/Air-Jordan-1-Retro-High-Off-White-University-Blue-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&dpr=2&trim=color&updated_at=1606321054" style="width: 90%; height:50%;">
          </div>
        </div>
        <div class="col m6 pd0" style="overflow: hidden">
          <div class="row mg0">
            <a class="modal-close waves-effect waves-green btn-flat right">X</a>
          </div>
          <div class="info-container"  id="info">
            <div class="row mg0">
              <div class="col m6" style="padding: 0px 20px" id="first-half">
                <form>
                  <div class="row mg0 mgb10">
                    <div class="col m6 pd0">
                      <input type="text" name="text-1" placeholder="First Name" value="" onchange="onChange(event, 'firstname')">
                    </div>
                    <div class="col m6 pd0">
                      <input type="text" name="text-2" placeholder="Last Name" value="" onchange="onChange(event, 'lastname')">
                    </div>
                  </div>
                  <div class="row mg0 mgb10">
                    <input type="email" name="email-1" placeholder="E-mail Address" value="" onchange="onChange(event, 'email')">
                  </div>
                  <div class="row mg0 mgb10">
                    <input type="text" name="text-3" placeholder="Address" value="" onchange="onChange(event, 'address')">
                  </div>
                  <div class="row mg0 mgb10">
                    <div class="col m6 pd0">
                      <input type="text" name="text-6" placeholder="State" value="" onchange="onChange(event, 'state')">
                    </div>
                    <div class="col m6 pd0">
                      <input type="text" name="text-5" placeholder="city" value="" onchange="onChange(event, 'city')">
                    </div>
                  </div>
                  <div class="row mg0 mgb10">
                    <div class="col m4 pd0">
                      <input type="text" name="text-3" placeholder="Zip Code" value="" onchange="onChange(event, 'zip')">
                    </div>
                    <div class="col m8 pd0">
                      <input type="text" name="text-4" placeholder="Contact" value="" onchange="onChange(event, 'contact')">
                    </div>
                  </div>
                  <div class="row mg0 mgb10">
                    <h1 style="font-size: 16px">Size</h1>
                    <div class="col m3 box-size active" onclick="onClick(event, '4M',   )">
                      4M <br>
                      $1800
                    </div>
                    <div class="col m3 box-size" onclick="onClick(event, '4.5M', 2199)">
                      4.5M <br>
                      $2199
                    </div>
                    <div class="col m3 box-size" onclick="onClick(event, '5M', 2271)">
                      5M <br>
                      $2271
                    </div>
                    <div class="col m3 box-size mgt20" onclick="onClick(event, '5.5M', 2272)">
                      5.5M <br>
                      $2272
                    </div>
                    <div class="col m3 box-size mgt20" onclick="onClick(event, '6M', 2530)">
                      6M <br>
                      $2530
                    </div>
                    <div class="col m3 box-size mgt20" onclick="onClick(event, '6.5M', 2531)">
                      6.5M <br>
                      $2531
                    </div>
                  </div>
                  <div class="row mg0 mgb10">
                    <h3 style="font-size: 16px">Payment Method</h3>
                    <label>
                      <input name="group1" type="radio" checked />
                      <span style="color: black">Paypal</span>
                    </label>
                  </div>
                </form>
                <div class="row mg0">
                  <button class="btn" id="checkout">Check Out</button>
                </div>
              </div>
              <div class="col m6 pd0" id="second-half" style="padding: 0px 20px">
                <div class="row mg0">
                  <p class="center">
                    <button class="btn" id="back">Go Back</button>
                  </p>
                </div>
                
                <div class="row mg0">
                  <table class="table-details">
                    <tr>
                      <td>DELIVERY ADDRESS</td>
                    </tr>
                    <tr>
                      <td id="detail-address"></td>
                    </tr>
                  </table>
                  <table class="table-details">
                    <tr>
                      <td>Size</td>
                      <td>Quantity</td>
                      <td>Sub Total</td>
                    </tr>
                    <tr>
                      <td id="detail-size"></td>
                      <td id="detail-quantity">1</td>
                      <td id="detail-prize"></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="text-align: right">Grand Total</td>
                      <td id="detail-total"></td>
                    </tr>
                  </table>
                  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_xclick"> 
                    <input type="hidden" name="business" value="sb-mxcjx12110920@business.example.com"> 
                    <input type="hidden" name="item_name" value="Jordan 1 Retro High"> 
                    <input type="hidden" name="item_number" value="123"> 
                    <input type="hidden" name="amount" id="prize" value="1800"> 
                    <input type="hidden" name="address_override" value="1"> 
                    <input type="hidden" name="first_name" id="firstname" value=""> 
                    <input type="hidden" name="last_name" id="lastname" value=""> 
                    <input type="hidden" name="address1" id="address" value=""> 
                    <input type="hidden" name="city" id="city" value=""> 
                    <input type="hidden" name="state" id="state" value="Rosario"> 
                    <input type="hidden" name="country" id="country" value="PH"> 
                    <input type="hidden" name="zip" id="zip" value=""> 
                    <input type="hidden" name="night_phone_a" id="contact" value=""> 
                    <input type="hidden" name="email" id="email" value=""> 
                    <input class="btn" id="checkout" type="submit" value="Pay Now">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
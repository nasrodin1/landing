@php
$firstName = null;
$lastName = null;
$email = null;
$address = null;
$contact = null;
@endphp
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
          <table>
            <tr>
              <td>Price</td>
              <td>$1,800</td>
            </tr>
          </table>
        </div>
        <div class="col m6 pd0" style="overflow: hidden">
          <div class="row mg0">
            <a class="modal-close waves-effect waves-green btn-flat right">X</a>
          </div>
          <div class="row mg0" style="padding: 0px 20px">
            <form>
              <div class="row mg0 mgb10">
                <div class="col m6 pd0">
                  <input type="text" name="text-1" placeholder="First Name" value="{{ $firstName }}">
                </div>
                <div class="col m6 pd0">
                  <input type="text" name="text-2" placeholder="Last Name" value="{{ $lastName }}">
                </div>
              </div>
              <div class="row mg0 mgb10">
                <input type="email" name="email-1" placeholder="E-mail Address" value="{{ $email }}">
              </div>
              <div class="row mg0 mgb10">
                <input type="text" name="text-3" placeholder="Address" value="{{ $address }}">
              </div>
              <div class="row mg0 mgb10">
                <input type="text" name="text-4" placeholder="Contact" value="{{ $contact }}">
              </div>
              <div class="row mg0 mgb10">
                <h3 style="font-size: 16px">Payment Method</h3>
                <label>
                  <input name="group1" type="radio" checked />
                  <span style="color: black">Paypal</span>
                </label>
              </div>
            </form>
            <div class="row mg0" style="margin-top: 30% !important;">
              {{-- <button class="btn" id="checkout">Checkout</button> --}}
              <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_xclick"> 
                <input type="hidden" name="business" value="sb-mxcjx12110920@business.example.com"> 
                <input type="hidden" name="item_name" value="Jordan 1 Retro High"> 
                <input type="hidden" name="item_number" value="123"> 
                <input type="hidden" name="amount" value="1"> 
                <input type="hidden" name="address_override" value="1"> 
                <input type="hidden" name="first_name" value="{{ $firstName }}"> 
                <input type="hidden" name="last_name" value="{{ $lastName }}"> 
                <input type="hidden" name="address1" value="{{ $address }}"> 
                <input type="hidden" name="night_phone_a" value="{{ $contact }}"> 
                {{-- <input type="hidden" name="night_phone_b" value="555">  --}}
                {{-- <input type="hidden" name="night_phone_c" value="1234">  --}}
                <input type="hidden" name="email" value="{{ $email }}"> 
                {{-- <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online"> --}}
                <input class="btn" id="checkout" type="submit" value="Buy Now">
              </form>
            </div>
          </div>
          {{-- <div class="info-container" id="info">
            <div class="row" style="height: 45px"></div>
            <div class="row mg0">
              <div class="col m6" style="padding: 0px 20px">
                <form>
                  <div class="row mg0 mgb10">
                    <div class="col m6 pd0">
                      <input type="text" name="text-1" placeholder="First Name">
                    </div>
                    <div class="col m6 pd0">
                      <input type="text" name="text-2" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="row mg0 mgb10">
                    <input type="email" name="email-1" placeholder="E-mail Address">
                  </div>
                  <div class="row mg0 mgb10">
                    <input type="text" name="text-3" placeholder="Address">
                  </div>
                  <div class="row mg0 mgb10">
                    <input type="text" name="text-4" placeholder="Contact">
                  </div>
                  <div class="row mg0 mgb10">
                    <h3 style="font-size: 16px">Payment Method</h3>
                    <label>
                      <input name="group1" type="radio" checked />
                      <span style="color: black">Paypal</span>
                    </label>
                  </div>
                </form>
                <div class="row mg0" style="margin-top: 30% !important;">
                  <button class="btn" id="checkout">Checkout</button>
                </div>
              </div>
              <div class="col m6 pd0">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_xclick"> 
                  <input type="hidden" name="business" value="sb-mxcjx12110920@business.example.com"> 
                  <input type="hidden" name="item_name" value="Jordan 1 Retro High"> 
                  <input type="hidden" name="item_number" value="123"> 
                  <input type="hidden" name="amount" value="1800"> 
                  <input type="hidden" name="first_name" value="John"> 
                  <input type="hidden" name="last_name" value="Doe"> 
                  <input type="hidden" name="address1" value="9 Elm Street"> 
                  <input type="hidden" name="address2" value="Apt 5"> 
                  <input type="hidden" name="city" value="Berwyn"> 
                  <input type="hidden" name="state" value="US"> 
                  <input type="hidden" name="zip" value="19312"> 
                  <input type="hidden" name="night_phone_a" value="4083792928"> 
                  <input type="hidden" name="night_phone_b" value="555"> 
                  <input type="hidden" name="night_phone_c" value="1234"> 
                  <input type="hidden" name="email" value="jdoe@zyzzyu.com"> 
                  <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
                </form>
              </div>
            </div> 
          </div> --}}
        </div>
      </div>
    </div>
</div>
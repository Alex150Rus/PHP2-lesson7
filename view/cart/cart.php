<?php

$str="
  <section class=\"newarrivalsmenWoman\">
      <div class=\"newarrivals container onshoppingcartpage\">
          <div class=\"leftpartnewarrivals\">
              <h2 class=\"leftpartnewarrivals__header text-pop-up-right\">NEW ARRIVALS</h2>
          </div>
          <nav class=\"rightpartnewarrivals\">
              <ul class=\"rightpartnewarrivals__source\">
                  <li class=\"rightpartnewarrivals__list\">
                      <a class=\"rightpartnewarrivals__link\" href=\"index.html\">HOME/</a>
                  </li>
                  <li class=\"rightpartnewarrivals__list\">
                      <a class=\"rightpartnewarrivals__link\"  href=\"singlepage.html\">WOMEN/</a>
                  </li>
                  <li class=\"rightpartnewarrivals__list\">
                      <a class=\"rightpartnewarrivals__link rightpartnewarrivals__link_coloredAndWeighed\" href=\"singlepage.html\">NEW ARRIVALS</a>
                  </li>
              </ul>
          </nav>
      </div>
  </section>
  <section class=\"shoppingCartSection\">
      <div class=\"shoppingCart__products container\">
          <div class=\"ShoppingCartHeader\">
              <h2 class=\"ShoppingCartHeader__header ShoppingCartHeader__header_AddProp\">product details</h2>
              <h2 class=\"ShoppingCartHeader__header\">unit price</h2>
              <h2 class=\"ShoppingCartHeader__header\">quantity</h2>
              <h2 class=\"ShoppingCartHeader__header\">shipping</h2>
              <h2 class=\"ShoppingCartHeader__header\">subtotal</h2>
              <h2 class=\"ShoppingCartHeader__header\">action</h2>
          </div>
";
var_dump($products);
var_dump($q_ty);
foreach ($products as $key => $value) {
$str.= "
  <article class='ShoppingCartProduct'>
      <div class='ShoppingCartProduct__productdetails'>
          <div class='ShoppingCartProduct__image'>
              <a href='#'><img src='img/shoppingcartpict/1.jpg' alt='product1'></a>
          </div>
          <div class='ShoppingCartProduct__description'>
              <p class='ShoppingCartProduct__description_ProductName'>{$products[$key]->name}</p>
              <p>
                  <span class='ShoppingCartProduct__description_ProductChar'>Color:</span>
                  <span class='ShoppingCartProduct__description_ProductCharName'>Red</span>
              </p>
              <p>
                  <span class='ShoppingCartProduct__description_ProductChar'>Size:</span>
                  <span class='ShoppingCartProduct__description_ProductCharName'>Xll</span>
              </p>
          </div>
      </div>
      <div class='ShoppingCartProduct__unitPrice'>
          <p>150$</p>
      </div>
      <div >
          <input class='ShoppingCartProduct__quantity' type='text' value='{$products[$key]->q_ty}'>
      </div>
      <div class='ShoppingCartProduct__shipping'>
          <p>FREE</p>
      </div>
      <div class='ShoppingCartProduct__subtotal'>
          <p>$300</p>
      </div>
      <div class='ShoppingCartProduct__action'>
          <i class='fas fa-times-circle'></i>
      </div>
  </article>";


}

$str.="
  <div class=\"ShoppingCartButtons\">
              <button class=\"ShoppingCartButtons__button\">CLEAR SHOPPING CART</button>
              <button class=\"ShoppingCartButtons__button\">CONTINUE SHOPPING</button>
          </div>
          <div class=\"shoppingCartBeforeCheckOut\">
              <form class=\"shippingAddressCart\">
                  <h2 class=\"shippingAddressCart__header\">Shipping Adress</h2>
                  <details>
                      <summary class=\"shippingAddressCart__Country\">Bangladesh</summary>
                  </details>
                  <input class=\"shippingAddressCart__StateZip\" type=\"text\" placeholder=\"State\">
                  <input class=\"shippingAddressCart__StateZip\" type=\"text\" placeholder=\"Postcode/Zip\">
                  <button class=\"shippingAddressCart__button\">get a&nbsp;quote</button>
              </form>
              <form class=\"couponDiscount\">
                  <h2 class=\"couponDiscount__header\">coupon discount</h2>
                  <p class=\"couponDiscount__paragraph\">Enter your coupon code if&nbsp;you have one</p>
                  <input class=\"shippingAddressCart__StateZip\" type=\"text\" placeholder=\"Enter coupon code\">
                  <button class=\"couponDiscount__button\">Apply coupon</button>
              </form>
              <div class=\"proceedToCheckOut\">
                  <p class=\"proceedToCheckOut__firstParagraph\">
                      <span>Sub total</span>
                      <span class=\"proceedToCheckOut__spanSubTotal\">$900</span>
                  </p>
                  <p class=\"proceedToCheckOut__secondParagraph\">
                      <span>GRAND TOTAL</span>
                      <span class=\"proceedToCheckOut__spanGrandTotal\">$900</span>
                  </p>
                  <hr>
                  <a class=\"proceedToCheckOut__button\" href=\"checkout.html\">proceed to&nbsp;checkout</a>
              </div>
          </div>
      </div>
  </section>
";
echo $str;




<?php
$str = "<section class=\"newarrivalsmenWoman\">
  <div class=\"newarrivals container\">
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
<section class=\"checkoutSection\">
  <div class=\"checkout container\">
    <details open>
      <summary class=\"checkout__list\"><h2 class=\"checkout__headers\">01.&nbsp;&nbsp;&nbsp;SHIPPING ADDRESS</h2></summary>
      <div class=\"shippingaddress\">
        <div class=\"shippingaddress__left\">
          <h2 class=\"shippingaddress__headers\">Check as a guest or register</h2>
          <a  class=\"shippingaddress__sameStyleSentences shippingaddress__sameStyleSentences_hover\" href=\"#\">Register with us for future convenience</a>
          <form class=\"shippingaddress__radioform\">
            <label for=\"radio1\"><input id=\"radio1\" name=\"radio\" type=\"radio\">
              <b class=\"shippingaddress__formguestOrRegistered\">checkout as guest</b>
            </label><br>
            <label for=\"radio2\"><input class=\"shippingaddress__radioform_margintop\" id=\"radio2\" name=\"radio\" checked type=\"radio\">
              <b class=\"shippingaddress__formguestOrRegistered\">register</b>
            </label>
          </form>
          <h2 class=\"shippingaddress__headers\">register and save time!</h2>
          <a class=\"shippingaddress__sameStyleSentences shippingaddress__sameStyleSentences_hover shippingaddress__sameStyleSentences_margin\" href=\"#\">Register with us for future convenience</a>
          <a class=\"shippingaddress__sameStyleSentences shippingaddress__sameStyleSentences_hover\" href=\"#\">&#x276D;&#x276D; Fast and easy checkout</a>
          <a class=\"shippingaddress__sameStyleSentences shippingaddress__sameStyleSentences_hover\" href=\"#\">&#x276D;&#x276D; Easy access to your order history and status</a>
          <button class=\"shippingaddress__continueBtn\">Continue</button>
        </div>
        <div class=\"shippingaddress__right\">
          <h2 class=\"shippingaddress__headers\">Already registed?</h2>
          <h3 class=\"shippingaddress__sameStyleSentences shippingaddress__right_margin\">Please log in below</h3>
          <form method=\"POST\">
            <label class=\"shippingaddress__formheaders\" for=\"email\">EMAIL ADDRESS
              <b class=\"shippingaddress__right_starStyle\">*</b>
            </label>
            <input class=\"shippingaddress__right_dimensions\" id=\"email\" type=\"email\" name=\"login\"><br>
            <span>{$_SESSION['message']}</span>
            <label class=\"shippingaddress__formheaders shippingaddress__formheaders_passwordMarginTop\" for=\"password\">PASSWORD
              <b class=\"shippingaddress__right_starStyle\">*</b>
            </label>
            <input class=\"shippingaddress__right_dimensions\" id=\"password\" type=\"password\" name=\"password\">
            <p class=\"shippingaddress__right_RequiredFields\">* Required Fileds</p>
            <button formaction=\"/user/login\" class=\"shippingaddress__right_button\">Log in</button>
            <button formaction=\"/user/register\" style=\"margin-left: 30px\" class=\"shippingaddress__right_button\">Register</button>
            <a class=\"shippingaddress__right_ForgotPassword\" href=\"#\">Forgot Password ?</a>
          </form>

        </div>
      </div>
    </details>
    <details>
      <summary class=\"checkout__list\"><h2 class=\"checkout__headers\">02.&nbsp;&nbsp;&nbsp;BILLING INFORMATION</h2></summary>
    </details>
    <details>
      <summary class=\"checkout__list\"><h2 class=\"checkout__headers\">03.&nbsp;&nbsp;&nbsp;SHIPPING INFORMATION</h2></summary>
    </details>
    <details>
      <summary class=\"checkout__list\"><h2 class=\"checkout__headers\">04.&nbsp;&nbsp;&nbsp;SHIPPING METHOD</h2></summary>
    </details>
    <details>
      <summary class=\"checkout__list\"><h2 class=\"checkout__headers\">05.&nbsp;&nbsp;&nbsp;PAYMENT METHOD</h2></summary>
    </details>
    <details>
      <summary class=\"checkout__list\"><h2 class=\"checkout__headers\">06.&nbsp;&nbsp;&nbsp;ORDER REVIEW</h2></summary>
    </details>
  </div>
</section>";
echo $str;


<?php

$str="
    <section class=\"slider\">
      <div class=\"slider__inside container\">
        <div class=\"slider__inside-left\"></div>
        <div class=\"slider__inside-right\">
          <h2 class=\"slider__header text-pop-up-right\">THE BRAND</h2>
          <h3 class=\"slider__headerpart text-pop-up-right\">OF&nbsp;LUXERIOUS <span class=\"slider__fashionword\">FASHION</span></h3>
        </div>
      </div>
    </section>
    <section class=\"productmesh\">
      <div class=\"productsmesh container\">
        <div>
          <article class=\"productsmesh__formen\">
            <a href=\"product.html\">
              <img src=\"img/goodstype1.png\" alt=\"ForMen\">
              <div class=\"productsmesh__menlabel\">
                <h2 class=\"productsmesh__header-first\">HOT DEAL</h2>
                <h2 class=\"productsmesh__header-second\">FOR MEN</h2>
              </div>
            </a>
          </article>
          <article class=\"productsmesh__accessories\">
            <a href=\"#\">
              <img src=\"img/goodstype2.png\" alt=\"Accessories\">
              <div class=\"productsmesh__acclabel\">
                <h2 class=\"productsmesh__header-first\">LUXIROUS &amp;&nbsp;TRENDY</h2>
                <h2 class=\"productsmesh__header-second\">ACCESSORIES</h2>
              </div>
            </a>
          </article>
        </div>
        <div>
          <article class=\"productsmesh__women\">
            <a href=\"#\">
              <img src=\"img/goodstype3.png\" alt=\"Women\">
              <div class=\"productsmesh__womenlabel\">
                <h2 class=\"productsmesh__header-first\">30% OFFER</h2>
                <h2 class=\"productsmesh__header-second\">WOMEN</h2>
              </div>
            </a>
          </article>
          <article class=\"productsmesh__kids\">
            <a href=\"#\">
              <img src=\"img/goodstype4.png\" alt=\"Kids\">
              <div class=\"productsmesh__kidslabel\">
                <h2 class=\"productsmesh__header-first\">NEW ARRIVALS</h2>
                <h2 class=\"productsmesh__header-second\">FOR KIDS</h2>
              </div>
            </a>
          </article>
        </div>
      </div>
    </section>
    <section class=\"fetureditemscont\">
      <header class=\"fetureditems container\">
        <h2 class=\"fetureditems__header\">Fetured Items</h2>
        <h2 class=\"fetureditems__secondline\">Shop for items based on&nbsp;what we&nbsp;featired in&nbsp;this week</h2>
      </header>
      <div class=\"featureditemsmesh container\">
";

foreach ($product as $key => $value) {
$str.= "
        <article class='product'>
          <a class='product__link' href='#'>
            <img class='product__image' src='{$product[$key]->img_src}' alt='{$product[$key]->name}'>
            <h2 class='product__name'>{$product[$key]->name}</h2>
            <h2 class='product__price'>\${$product[$key]->price}</h2>
          </a>
          <div class='product__cartbuttonflex'>
            <a class='product__invisiblebutton' href='cart/add?id={$product[$key]->id}'>
              <i class='product__cart-image fas fa-shopping-cart'> Add to&nbsp;Cart</i>
            </a>
          </div>
        </article>";
}

$str .= "
      </div>
    </section>
    <section class=\"browseallproductscont\">
      <header class=\"browseallproducts container\">
        <a class=\"browseallproducts__BrowseAllProductsButton\" href=\"#\"><h2 class=\"browseallproducts__header\">Browse All Products &#10145;</h2></a>
      </header>
    </section>
    <section class=\"specoffer\">
      <div class=\"percentoffer container\">
        <article class=\"percentoffer__offerleft\">
          <a href=\"#\">
            <img src=\"img/30percentoffer.jpg\" alt=\"offer\">
            <div class=\"percentoffer__offertext\">
              <h2 class=\"percentoffer__header\">30% <b class=\"percentoffer__red\">OFFER</b></h2>
              <h2 class=\"percentoffer__header percentoffer__header-secondline\">FOR WOMEN</h2>
            </div>
          </a>
        </article>
        <article class=\"percentoffer__offerright\">
          <div class=\"percentoffer__redicons\">
            <div class=\"percentoffer__imagered1\">
              <img src=\"img/delivery.png\" alt=\"delivery\">
            </div>
            <div class=\"percentoffer__imagered2\">
              <img src=\"img/discount.png\" alt=\"discount\">
            </div>
            <div class=\"percentoffer__imagered3\">
              <img src=\"img/crown.png\" alt=\"crown\">
            </div>
          </div>
          <div class=\"percentoffer__rightparttext\">
            <h2 class=\"percentoffer__right-header\">Free Delivery</h2>
            <div class=\"percentoffer__text\">
              Worldwide delivery on&nbsp;all. Authorit<br>
              tively morph next-generation innov<br>
              tion with extensive models.
            </div>
            <h2 class=\"percentoffer__right-header\">Sales &amp;&nbsp;discounts</h2>
            <div class=\"percentoffer__text\">Worldwide delivery on&nbsp;all. Authorit<br>
              tively morph next-generation innov<br>
              tion with extensive models.
            </div>
            <h2 class=\"percentoffer__right-header\">Quality assurance</h2>
            <div class=\"percentoffer__text\">
              Worldwide delivery on&nbsp;all. Authorit<br>
              tively morph next-generation innov<br>
              tion with extensive models.
            </div>
          </div>
        </article>
      </div>
    </section>
";

echo $str;
<!-- OLD PRODUCTS LIST -->
<!-- DISCARDED -->

<style>
  .products_container a{
  color: initial;
  text-decoration: none;
  }

  .products_container{
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-around;
  justify-content: space-evenly;
  align-items: center;
  font-family:  'Rajdhani', sans-serif;
  }

  .products_item{
  box-shadow: 0 0 1px 1px #EFEFEF;
  width: 200px;
  margin: 10px;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  transition: all 0.3s ease;
  }

  .products_item:hover{
  box-shadow: 0 3px 3px 1px #EFEFEF;
  }

  .products_item .products_image, .products_item .products_image img{
  height: 200px;
  }

  .products_item .products_footer{
  padding: 15px 5px;
  font-size: 0.8em;
  background: #FEFEFE;
  }

  .products_item .products_footer .products_title{
  font-weight: 700;
  font-size: 1.3em;
  text-transform: Uppercase;
  }

  .products_item .products_footer .products_desc{
  font-weight: 600;
  font-size: 0.9em;
  line-height: 15px;
  }

  .products_price{
  padding-top: 5px;
  font-weight: 700;
  }

  .products_price .discount{
  text-decoration: line-through;
  opacity: 0.5;
  font-weight: 500;
  padding-left: 5px;
  }

  /* PRODUCTS CONTROL */
  .products_item .products_control{
  background: #EFEFEF;
  padding: 10px 5px;
  position: absolute;
  width: 100%;
  box-sizing: border-box;
  bottom: 0;
  opacity: 0;
  transform: translate(0, 50px);
  transition: all 0.3s ease;
  }

  .products_item:hover .products_control{
  opacity: 1;
  transform: translate(0, 0);
  }

  .products_item:hover .products_footer{
  opacity: 0;
  }

  .products_item .products_control .products_buy, .products_item .products_control .products_heart{
  margin-top: 10px;
  margin-bottom: 10px;

  background: none;
  border: 1px solid #ABABAB;
  font-size: 0.8em;
  padding: 5px 5px;
  outline: 0;
  cursor: pointer;
  font-family: Arial;
  color: white;
  font-weight: 700;
  letter-spacing: 1px;
  border-radius: 3px;
  transition: all 0.5s ease;
  }

  .products_item .products_control .products_buy{
  background: teal;
  }

  .products_item .products_control .products_buy:hover{
  opacity: 0.7;
  }

  .products_item .products_control .products_heart{
  color: #323232;
  }

  .products_item .products_control .products_heart:hover{
  opacity: 0.7;
  background: #ABABAB;
  }

  .products_stats{
  position: absolute;
  top: 0;
  background: whitesmoke;
  width: 100%;
  text-align: center;
  font-size: 1.6em;
  letter-spacing: 5px;
  color: orange;
  opacity: 0;
  transform: translate(0,-50px);
  transition: all 0.3s 0.1s ease;
  }

  .products_item:hover .products_stats{
  opacity: 1;
  transform: translate(0, 0);
  }

  .products_special{
  position: absolute;
  top: 5%;
  right: 20px;
  font-size: 0.8em;
  }

  .products_special .products_sale, .products_special .products_new{
  font-weight: 600;
  font-family: Arial;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  text-align: center;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5px;
  margin-bottom: 5px;
  transition: all 0.3s ease;
  }

  .products_special .products_sale{
  background: orange;
  }

  .products_special .products_new{
  background: palegoldenrod;
  }

  .products_special .products_sale:hover, .products_special .products_new:hover{
  transform: translate(0, 1px);
  box-shadow: 0 1px 2px whitesmoke;
  }



  /*RESPONSIVE*/
  @media screen and (max-width: 730px){
  .products_container{
    flex-wrap: wrap;
  }

  .products_item{
    width: 150px;
    min-width: 100px;
  }

  .products_item .products_image, .products_item .products_image img{
    height: 150px;
  }

  .products_item .products_footer{
    font-size: 0.65em;
  }

  .products_item .products_control{
    font-size: 0.7em;
  }

  .products_stats{
    background: whitesmoke;
    font-size: 1.1em;
  }

  .products_special{
    font-size: 0.6em;
  }

  .products_special .products_sale, .products_special .products_new{
    font-weight: 600;
    font-family: Arial;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    text-align: center;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    margin-bottom: 5px;
  }
  }
</style>

<div class="products_container">
  <!-- 400 x 400 px Image -->

  <div class="products_item">
    <a href="#">
    <div class="products_image">
      <img src="https://gd.image-gmkt.com/FALL-YOUTH-MEN-S-TROUSERS-PANTS-OF-COMMERCE-PIERRE-CARDIN-MEN/li/705/235/756235705.g_400-w_g.jpg">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        Jeans Trousers
      </div>

      <div class="products_desc">
       Pierr Cardin Fit Jeans Autumn for Men. Available at different sizes.
      </div>

      <div class="products_price">
        Rs. 500 <span class="discount">Rs. 899</span>
      </div>
    </div>

    <div class="products_control">
      <div class="products_sizes">Sizes: <span>S M L XL</span></div>
      <button class="products_buy">Add To Cart</button>
      <button class="products_heart">Wishlist</button>
      <div class="products_price">
        Rs. 500 <span class="discount">Rs. 899</span>
      </div>
    </div>

    <div class="products_stats">
      <div class="products_rating">⋆⋆⋆⋆⋆</div>
    </div>
  </div>

  <div class="products_item">
    <a href="#">
    <div class="products_image">
      <img src="https://images-na.ssl-images-amazon.com/images/I/61WS7d81pWL.SS400.jpg">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        Slim Pants
      </div>

      <div class="products_desc">
       Mens Slim Fit Stylish Slacks Simple And Practical Straight Dress Pants
      </div>

      <div class="products_price">
        Rs. 1000
      </div>
    </div>

    <div class="products_control">
      <div class="products_sizes">Sizes: <span>XL XXL</span></div>
      <button class="products_buy">Add To Cart</button>
      <button class="products_heart">Wishlist</button>
      <div class="products_price">
        Rs. 1000
      </div>
    </div>

    <div class="products_stats">
      <div class="products_rating">⋆⋆⋆⋆</div>
    </div>

    <div class="products_special">
      <div class="products_sale">Sale</div>
      <div class="products_new">New</div>
    </div>
  </div>

  <div class="products_item">
    <a href="#">
    <div class="products_image">
      <img src="https://gd.image-gmkt.com/FALL-YOUTH-MEN-S-TROUSERS-PANTS-OF-COMMERCE-PIERRE-CARDIN-MEN/li/705/235/756235705.g_400-w_g.jpg">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        Jeans Trousers
      </div>

      <div class="products_desc">
       Pierr Cardin Fit Jeans Autumn for Men. Available at different sizes.
      </div>

      <div class="products_price">
        Rs. 500 <span class="discount">Rs. 899</span>
      </div>
    </div>

    <div class="products_control">
      <div class="products_sizes">Sizes: <span>S M L XL</span></div>
      <button class="products_buy">Add To Cart</button>
      <button class="products_heart">Wishlist</button>
      <div class="products_price">
        Rs. 500 <span class="discount">Rs. 899</span>
      </div>
    </div>

    <div class="products_stats">
      <div class="products_rating">⋆⋆⋆⋆⋆</div>
    </div>

    <div class="products_special">
      <div class="products_new">New</div>
    </div>
  </div>

  <div class="products_item">
    <a href="#">
    <div class="products_image">
      <img src="https://gd.image-gmkt.com/FALL-YOUTH-MEN-S-TROUSERS-PANTS-OF-COMMERCE-PIERRE-CARDIN-MEN/li/705/235/756235705.g_400-w_g.jpg">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        Jeans Trousers
      </div>

      <div class="products_desc">
       Pierr Cardin Fit Jeans Autumn for Men. Available at different sizes.
      </div>

      <div class="products_price">
        Rs. 500 <span class="discount">Rs. 899</span>
      </div>
    </div>

    <div class="products_control">
      <div class="products_sizes">Sizes: <span>S M L XL</span></div>
      <button class="products_buy">Add To Cart</button>
      <button class="products_heart">Wishlist</button>
      <div class="products_price">
        Rs. 500 <span class="discount">Rs. 899</span>
      </div>
    </div>

    <div class="products_stats">
      <div class="products_rating">⋆⋆⋆⋆⋆</div>
    </div>

    <div class="products_special">
      <div class="products_sale">Sale</div>
    </div>
  </div>

  <div class="products_item">
    <a href="#">
    <div class="products_image">
      <img src="https://gd.image-gmkt.com/FALL-YOUTH-MEN-S-TROUSERS-PANTS-OF-COMMERCE-PIERRE-CARDIN-MEN/li/705/235/756235705.g_400-w_g.jpg">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        Jeans Trousers
      </div>

      <div class="products_desc">
       Pierr Cardin Fit Jeans Autumn for Men. Available at different sizes.
      </div>

      <div class="products_price">
        Rs. 500 <span class="discount">Rs. 899</span>
      </div>
    </div>

    <div class="products_control">
      <div class="products_sizes">Sizes: <span>S M L XL</span></div>
      <button class="products_buy">Add To Cart</button>
      <button class="products_heart">Wishlist</button>
      <div class="products_price">
        Rs. 500 <span class="discount">Rs. 899</span>
      </div>
    </div>

    <div class="products_stats">
      <div class="products_rating">⋆⋆⋆⋆⋆</div>
    </div>

    <div class="products_special">
      <div class="products_sale">Sale</div>
    </div>
  </div>
</div>

 <!--=============== MAIN ===============-->
 <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="?mod=page&act=home" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Shop</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Checkout</span></li>
        </ul>
      </section>

      <!--=============== CHECKOUT ===============-->
      <section class="checkout section--lg">
        <div class="checkout__container container grid">
          <div class="checkout__group">
            <h3 class="section__title">Billing Details</h3>

            <form action="" method="post" class="form grid">
              <input type="text" placeholder="Name" name="Name" class="form__input">

              <input type="text" placeholder="Address" name="Address" class="form__input">

              <input type="text" placeholder="City" name="City" class="form__input">

              <input type="text" placeholder="Country" name="Country" class="form__input">

              <input type="text" placeholder="Postcode" name="Postcode" class="form__input">

              <input type="text" placeholder="Phone" name="Phone" class="form__input">

              <input type="email" placeholder="Email" name="Email" class="form__input">

              <h3 class="checkout__title">Additional Information</h3>

              <textarea name=""   placeholder="Order note" id="" cols="30" rows="10" class="form__input textarea"></textarea>
            </form>
          </div>

           <div class="checkout__group">
            <h3 class="section__title">Cart Totals</h3>

            <table class="order__table">
              <tr>
                <th colspan="2">Products</th>
                <th>Total</th>
              </tr>

              <tr>
                <td>
                  <img 
                    src="<?= $baseURL?><?= $product['img']?>" 
                    alt="" 
                    class="order__img"
                  />
                </td>

                <td>
                  <h3 class="table__title">J.Crew Mercantile Women's Short-Sleeve</h3>
                  <p class="table__quantity">x 2</p>
                </td>

                <td><span class="table__price">$180.00</span></td>
              </tr>

              <tr>
                <td>
                  <img 
                    src="<?= $baseURL?><?= $product['img']?>" 
                    alt="" 
                    class="order__img"
                  />
                </td>

                <td>
                  <h3 class="table__title">J.Crew Mercantile Women's Short-Sleeve</h3>
                  <p class="table__quantity">x 2</p>
                </td>

                <td><span class="table__price">$180.00</span></td>
              </tr>

              <tr>
                <td>
                  <img 
                    src="<?= $baseURL?><?= $product['img']?>" 
                    alt="" 
                    class="order__img"
                  />
                </td>

                <td>
                  <h3 class="table__title">J.Crew Mercantile Women's Short-Sleeve</h3>
                  <p class="table__quantity">x 2</p>
                </td>

                <td><span class="table__price">$180.00</span></td>
              </tr>

              <tr>
                <td><span class="order__subtitle">SubTotal</span></td>
                <td  colspan="2"><span class="table__price">$240,00</span></td>
              </tr>

              <tr>
                <td><span class="order__subtitle">Shipping</span></td>
                <td colspan="2"><span class="table__price">Free Shipping</span></td>
              </tr>

              <tr>
                <td><span class="order__subtitle">Total</span></td>
                <td colspan="2"><span class="order__grand-total">$240,00</span></td>
              </tr>
              
            </table>

            <div class="payment__methods">
              <h3 class="checkout__title payment__title">Payment</h3>

              <div class="payment__option flex">
                <input type="radio" name="radio" checked 
                class="payment__input">
                <lable for="" class="payment__lable"
                >Direct Bank Transfer</lable
                >
              </div>

              <div class="payment__option flex">
                <input type="radio" name="radio" checked 
                class="payment__input">
                <lable for="" class="payment__lable"
                >Check Payment</lable
                >
              </div>

              <div class="payment__option flex">
                <input type="radio" name="radio" checked 
                class="payment__input">
                <lable for="" class="payment__lable">Paypal</lable>
              </div>
            </div>
                <form action="?mod=page&act=post-checkout">
                    <button type="submit" class="btn btn--md" >Place Order</button>
                </form>
           </div>
        </div>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="public/assets/img/icon-email.svg" class="newsletter__icon">
            Sign up to Newsletter
          </h3>

          <p class="newsletter__description">
            ...and receive $25 coupon for first shopping.
          </p>

          <form action="" class="newsletter__form">
            <input type="text" class="newsletter__input" placeholder="Enter your email">
            <button type="submit" class="newsletter__btn">Subcribe</button>
          </form>
        </div>
      </section>
    </main>
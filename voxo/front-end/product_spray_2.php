<?php include 'header.php'?>

<!-- Shop Section start -->
<section>
    <div class="container">
        <div class="row gx-4 gy-5">
            <div class="col-12">
                <div class="details-items">
                    <div class="row g-4">
                        <div class="col-md-5">
                            <div class="degree-section">
                                <div class="details-image ratio_asos">
                                    <div>
                                        <div class="product-image-tag">
                                            <img src="assets/images/products/spray-2.jpg" id="zoom_01"
                                                data-zoom-image="assets/images/products/spray-2.jpg"
                                                class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="cloth-details-size">

                                <div class="details-image-concept">
                                    <h2>პანდორას ელექტრო შემასხურებელი</h2>
                                </div>

                                <div class="label-section">
                                    <span class="badge badge-grey-color">აგროტეცნიკა</span>
                                </div>

                                <h3 class="price-detail">₾<span id="pricetag">190.00</span></h3>

                                <div id="selectSize" class="addeffect-section product-description border-product">

                                    <h6 class="product-title size-text">აირჩიეთ მოცულობა:
                                    </h6>

                                    <div class="size-box">
                                        <ul>
                                            <li class="pricechange active" id="activeprice" value="190" realvalue="190">
                                                <a href="javascript:void(0)">16 ლიტრი</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <h6 class="product-title product-title-2 d-block">რაოდენობა</h6>

                                    <div class="qty-box">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="priceupdate btn quantity-left-minus"
                                                    data-type="minus" data-field="">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control input-number"
                                                value="1">
                                            <span class="input-group-prepend">
                                                <button type="button" class="priceupdate btn quantity-right-plus"
                                                    data-type="plus" data-field="">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <a href="tel:+995599728372" class="btn btn-solid">
                                        <i class="fa fa-shopping-cart fz-16 me-2"></i>
                                        <span>ყიდვა</span>
                                    </a>
                                    <a href="tel:+995597950700" class="btn btn-solid hover-solid btn-animation">
                                        <i class="fa fa-phone-alt"></i>
                                        <span>კონსულტაცია</span>
                                    </a>
                                </div>

                                <ul class="product-count shipping-order">
                                    <li>
                                        <img src="assets/images/gif/truck.png" class="img-fluid blur-up lazyload"
                                            alt="image">
                                        <span class="lang">უფასო მიწოდების სერვისი</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="cloth-review">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#desc" type="button">დახასიათება</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="desc">
                            <div class="shipping-chart">
                                <div class="part">
                                    <h4 class="inner-title mb-2">პანდორას ელექტრო შემასხურებელი</h4>
                                    <ul>
                                        <li>მოდელი: 16 ლიტრიანი ელექტრო შემასხურებელი</li>
                                        <li>ბრენდი: პანდორა - Pandora  </li>
                                        <li>სერიული ნომერი: CF-BP-16</li>
                                        <li>მოდელის ნომერი: CF-BP-16</li>
                                        <li>მოცულობა: 16 ლიტრი</li>
                                        <li>შეფუთვა: 1ცალი/ყუთში
</li>
                                        <li>Მთლიანი წონა: 6.3 კგ.
</li>
                                        <li>ზომა: 38.5x19x57სმ
</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Shop Section end -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script>
    $(".size-box").hide();
    $(".product-title.size-text").hide();
</script>
<!-- product section end -->

<!-- Size Modal Start -->
<?php include 'footer.php'?>
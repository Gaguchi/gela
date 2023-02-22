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
                                            <img src="assets/images/products/wire-1.jpg" id="zoom_01"
                                                data-zoom-image="assets/images/products/wire-1.jpg"
                                                class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="cloth-details-size">

                                <div class="details-image-concept">
                                    <h2>ცელის გაზის მავთული</h2>
                                </div>

                                <div class="label-section">
                                    <span class="badge badge-grey-color">აგროტეცნიკა</span>
                                </div>

                                <h3 class="price-detail">₾<span id="pricetag">14.00</span></h3>

                                <div id="selectSize" class="addeffect-section product-description border-product">

                                    <h6 class="product-title size-text">აირჩიეთ მოცულობა:
                                    </h6>

                                    <h6 class="error-message">ზომა</h6>

                                    <div class="size-box">
                                        <ul>
                                            <li class="pricechange active" id="activeprice" value="14" realvalue="14">
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
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
                                                <img src="assets/images/products/abamet.jpg" id="zoom_01"
                                                    data-zoom-image="assets/images/products/abamet.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="cloth-details-size">

                                    <div class="details-image-concept">
                                        <h2>აბამეთი</h2>
                                    </div>

                                    <div class="label-section">
                                        <span class="badge badge-grey-color">ინსექტიციდი</span>
                                    </div>

                                    <h3 class="price-detail">₾<span id="pricetag">33.00</span> <del id="oldprice"></del> <span id="discount"></span></h3>
                                    <h3 class="active-price-detail">საცალო ფასი: ₾<span id="unitprice">33.00</span></h3><h3 class="active-price-discount"> საბითუმო ფასი: ₾<span id="wholesaleprice">30.00</span></h3>
                                    <h3><span id="until-discount">დარჩა 10 საბითუმო ფასამდე</span></h3>

                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                        <h6 class="product-title size-text">აირჩიეთ მოცულობა:</h6>

                                        <div class="size-box">
                                            <ul>
                                                <li class="pricechange active" id="activeprice" value="33" realvalue="30">
                                                    <a href="javascript:void(0)">0.5 კგ.</a>
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
                                        <a href="tel:+995597950700" 
                                            class="btn btn-solid hover-solid btn-animation">
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

                                <button class="nav-link" id="nav-speci-tab" data-bs-toggle="tab" data-bs-target="#speci"
                                    type="button">ქიმიური შემადგენლობა</button>

                                <button class="nav-link" id="nav-question-tab" data-bs-toggle="tab"
                                    data-bs-target="#question" type="button">უსაფრთხოების ზომები</button>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="desc">
                                <div class="shipping-chart">
                                    <div class="part">
                                        <h4 class="inner-title mb-2">აბამეთი</h4>
                                        <p class="font-light">აბამეტი არის წამყვანი აკარიციდი/ინსექტიციდი და მოქმედებს ძირითადად გადაყლაპვით, მაგრამ ასევე აქვს კონტაქტური და ტრანსლამინარული აქტივობა, რაც იმას ნიშნავს, რომ აქტიური ინგრედიენტი გადადის ფოთლის ქსოვილში და ქმნის აბამექტინის ტოქსიკურ რეზერვუარს, რომელიც აგრძელებს მავნებლების მოკვლას, რადგან ისინი იკვებებიან მესფილის ქსოვილით.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="speci">
                                <div class="pro mb-4">
                                                <h3 class="inner-title mb-2">Ძირითადი ინგრედიენტები:</h3>
                                    <div class="table-responsive">
                                        <table class="table table-part">
                                            <tr>
                                                <th>აბამექტინი</th><td>18 გ/ლ.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="question">
                                <div class="question-answer">
                                    <ul>
                                        <li>
                                            <div class="que">
                                                <i class="fas fa-exclamation"></i>
                                                <div class="que-details">
                                                    <p class="font-light">აუცილებელია პირადი დამცავი აღჭურვილობის გამოყენება სასუნთქი გზების, მხედველობისა და კანის მთლიანობისთვის.
                                                    </p>
                                                </div>
                                            </div>
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

    
    </section>
    <!-- product section end -->

    <!-- Size Modal Start -->
<?php include 'footer.php'?>
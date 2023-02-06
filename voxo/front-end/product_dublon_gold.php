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
                                                <img src="assets/images/fashion/1.jpg" id="zoom_01"
                                                    data-zoom-image="assets/images/fashion/1.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="cloth-details-size">

                                    <div class="details-image-concept">
                                        <h2>დუბლინ გოლდი</h2>
                                    </div>

                                    <div class="label-section">
                                        <span class="badge badge-grey-color">ჰერბიციდი</span>
                                    </div>

                                    <h3 class="price-detail">₾<span id="pricetag">50.00</span> <del id="oldprice"></del> <span id="discount"></span></h3>
                                    <h3 class="active-price-detail">საცალო ფასი: ₾<span id="unitprice">50.00</span></h3><h3 class="active-price-discount"> საბითუმო ფასი: ₾<span id="wholesaleprice">45.00</span></h3><h3 class="mb-3"><span id="until-discount">დარჩა 10 საბითუმო ფასამდე</span></h3>

                                    <div id="selectSize" class="addeffect-section product-description border-product">

                                        <h6 class="product-title size-text">აირჩიეთ მოცულობა: 
                                        </h6>

                                        <h6 class="error-message">მოცულობა</h6>

                                        <div class="size-box">
                                            <ul>
                                                <li class="pricechange active" id="activeprice" value="50" realvalue="45">
                                                    <a href="javascript:void(0)" >70 გრ</a>
                                                </li>
                                                <li class="pricechange" value="570" realvalue="560">
                                                    <a href="javascript:void(0)" >750 გრ</a>
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
                                        <h4 class="inner-title mb-2">დუბლიონის ოქრო</h4>
                                        <p class="font-light">კომბინირებული ჰერბიციდი ერთწლიანი და მრავალწლიანი მარცვლეულის, ერთწლოვანი და ზოგიერთი მრავალწლიანი ორფეხა სარეველების წინააღმდეგ სიმინდის კულტურებში
                                        </p>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-lg-8">
                                            <h4 class="inner-title mb-2">ძირითადი უპირატესობები</h4>
                                            <ol>
                                                <li>მოქმედების ძალიან ფართო სპექტრი ორი აქტიური ნივთიერების კომბინაციის გამო, რომლებიც ავსებენ ერთმანეთს</li>
                                                <li>კულტურის დაცვის ხანგრძლივი პერიოდი</li>
                                                <li>ეკონომიური გამოყენება დაბალი მოხმარების სიჩქარის გამო</li>
                                                <li>თანამედროვე, ადვილად გამოსაყენებელი, ტრანსპორტირება და შესანახი მოსამზადებელი ფორმა</li>
                                            </ol>

                                            <div class="part mt-3">
                                                <h4 class="inner-title mb-2">პრეპარატის დანიშვნა:</h4>
                                                <p class="font-light">კომბინირებული სისტემური ჰერბიციდი მრავალი სახის წლიური და მრავალწლოვანი ბალახის და ერთწლოვანი და ზოგიერთი მრავალწლიანი ორფეხა სარეველების კონტროლისთვის სიმინდის კულტურებში.
                                                </p>
                                                <br>
                                                <h4 class="inner-title mb-2">გამოყენების რეკომენდაციები:</h4>
                                                <p class="font-light">დუბლინ გოლდი რეგისტრირებულია სიმინდის კულტურებზე გამოსაყენებლად (გარდა ზეთიანი სიმინდისა). სიმინდი მუშავდება მე-2 ფაზაში - 6 ფოთოლი ტახტის ბალახის სიმაღლეზე 10 - 15 სმ, 1 ფაზაში - 4 ფოთოლი ერთწლოვანი ორფოთლიანი და მარცვლოვანი სარეველა.არასასურველია პრეპარატის გამოყენება შაქარზე და პოპკორნზე, მშობლის ხაზებზე თესლის წარმოებისთვის.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <img src="assets/images/fashion/slider/corn1.jpg"
                                                class="img-fluid rounded blur-up lazyload" alt="">
                                        </div>

                                        <div class="col-lg-8 order-lg-2 mt-4">
                                                <h4 class="inner-title mb-2">სამუშაო ხსნარის მომზადება:</h4>
                                            <p class="font-light">სამუშაო ხსნარი მზადდება შესხურებამდე დაუყოვნებლივ. გაზომეთ დუბლინ გოლდის საჭირო რაოდენობა თითო შემასხურებლის შევსებაზე. პრეპარატის დედახსნარის მოსამზადებლად კონტეინერი (ვედრო) ივსება წყლით 1/4-ით, შემდეგ ემატება გაზომილი რაოდენობის ჰერბიციდი, აურიეთ საფუძვლიანად, ზემოდან ავსებენ წყალს მოცულობის 3/4-მდე. შემდეგ მუშა ხსნარს ამზადებენ შემდეგნაირად: გამფრქვევი ავზი ივსება დაახლოებით ნახევრად წყლით, ჩართულია მიქსერი, მასში ასხამენ ჰერბიციდის სადედე ხსნარს, ემატება ადიუ წებოს შესაბამისი რაოდენობა და წყალი იხსნება. დაემატა სრულ მოცულობას. სადედე ხსნარის მოსამზადებელ ჭურჭელს რამდენჯერმე რეცხავენ წყლით და ასხამენ შემასხურებელ ავზში.</p>
                                            <div class="part mt-3">
                                                <p class="font-light">Მნიშვნელოვანი! ადიუ ბოლოს უნდა დაემატოს შემასხურებელ ავზს, წინააღმდეგ შემთხვევაში, უხვი ქაფის გამო, წებოვანი ნივთიერების დამატებისას შესაძლოა, ხსნარის ნაწილი გადმოვიღვაროს მფრქვეველი ავზიდან.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 order-lg-0 mt-4">
                                            <img src="assets/images/fashion/slider/corn2.jpg"
                                                class="img-fluid rounded blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="speci">
                                <div class="pro mb-4">
                                                <h3 class="inner-title mb-2">Ძირითადი ინგრედიენტები:</h3>
                                    <div class="table-responsive">
                                        <table class="table table-part">
                                            <tr>
                                                <th>ნიკოსულფურონი</th>
                                                <td>600 გ/კგ</td>
                                            </tr>
                                            <tr>
                                                <th>თიფენსულფურონ-მეთილი</th>
                                                <td>150 გ/კგ</td>
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

    <!-- product section end -->

    <!-- Size Modal Start -->
<?php include 'footer.php'?>
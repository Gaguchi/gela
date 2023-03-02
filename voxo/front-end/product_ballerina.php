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
                                            <img src="assets/images/products/ballerina.jpg" id="zoom_01"
                                                data-zoom-image="assets/images/products/ballerina.jpg"
                                                class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="cloth-details-size">

                                <div class="details-image-concept">
                                    <h2>ბალერინა</h2>
                                </div>

                                <div class="label-section">
                                    <span class="badge badge-grey-color">ჰერბიციდი</span>
                                </div>

                                <h3 class="price-detail">₾<span id="pricetag">30.00</span> <del id="oldprice"></del>
                                    <span id="discount"></span></h3>
                                <h3 class="active-price-detail">საცალო ფასი: ₾<span id="unitprice">30.00</span></h3>
                                <h3 class="active-price-discount"> საბითუმო ფასი: ₾<span
                                        id="wholesaleprice">25.00</span></h3>
                                <h3 class="mb-3"><span id="until-discount">დარჩა 10 საბითუმო ფასამდე</span></h3>

                                <div id="selectSize" class="addeffect-section product-description border-product">

                                    <h6 class="product-title size-text">აირჩიეთ მოცულობა:
                                    </h6>
                                    <div class="size-box">
                                        <ul>
                                            <li class="pricechange active" id="activeprice" value="30" realvalue="25">
                                                <a href="javascript:void(0)">500 მლ.გრ.</a>
                                            </li>
                                            <li class="pricechange" value="205" realvalue="200">
                                                <a href="javascript:void(0)">5 ლ.</a>
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
                                    <h4 class="inner-title mb-2">ბალერინა</h4>
                                    <p class="font-light">სისტემური ჰერბიციდი ყოველწლიური ორკოტილედონების წინააღმდეგ,
                                        მათ შორის 2,4-D და MCPA-ს მიმართ რეზისტენტული და ზოგიერთი მრავალწლიანი სარეველა
                                        მარცვლეულის, სიმინდის, ფეტვისა და სორგოს კულტურებში.</p>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-lg-12">
                                        <h4 class="inner-title mb-2">ძირითადი უპირატესობები</h4>
                                        <ol>
                                            <li>მაღალი ეფექტურობა ორფოთლიანი სარეველების ფართო სპექტრის წინააღმდეგ, მათ
                                                შორის საწოლები, გვირილა, წიწაკა და ეიფორბია ვაზი</li>
                                            <li>მოქმედების მაღალი სისწრაფე</li>
                                            <li>გამოყენების ფართო სპექტრი (მარცვლოვანი კულტურების მეორე კვანძის ფაზამდე
                                                და 3 ფაზაში - სიმინდის 5 ფოთოლი)</li>
                                            <li>შემდგომი ეფექტის ნაკლებობა და გამოყენების შესაძლებლობა ყველა სახის
                                                მოსავლის როტაციაში</li>
                                        </ol>

                                        <div class="part mt-3">
                                            <h4 class="inner-title mb-2">პრეპარატის დანიშვნა:</h4>
                                            <p class="font-light">სისტემური ჰერბიციდი წლიური ორკოტილედონების
                                                კონტროლისთვის, მათ შორის 2,4-D და MCPA-ს მიმართ რეზისტენტული და ზოგიერთი
                                                მრავალწლიანი სარეველა მარცვლეულის, სიმინდის, ფეტვისა და სორგოს
                                                კულტურებში.</p>
                                            <br>
                                            <h4 class="inner-title mb-2">გამოყენების რეკომენდაციები:</h4>
                                            <p class="font-light">ერთწლოვანი ორფოთლიანი სარეველები ყველაზე დაუცველია
                                                ბალერინას მიმართ 2-6 ფოთლის ფაზაში (სიმაღლე 5-10 სმ), მრავალწლოვანი
                                                ფესვის სარეველა - ღეროს ჩამოყალიბების ფაზაში.

                                                მაქსიმალური მოხმარების მაჩვენებელი გამოიყენება: საწყისი მაღალი
                                                დაბინძურების შემთხვევაში; კულტურებში მრავალწლოვანი ფესვის სარეველების
                                                გამრავლება; ზედმეტად გაზრდილი სარეველების არსებობა (მდგრადი საწოლები 15
                                                - 20 სმ სიმაღლეზე, გვირილის სახეობები - 20 სმ-მდე, თესვა ეკალი და ეკლის
                                                სახეობები - კვირტის დაწყებამდე).

                                                დამუშავების დროს ტემპერატურის რეჟიმი არის 5-დან 25 ° C-მდე, მაგრამ
                                                ყველაზე ოპტიმალური ტემპერატურაა 8-დან 25 ° C-მდე, როდესაც სარეველა
                                                აქტიურად იზრდება და პრეპარატი უფრო სწრაფად მოქმედებს. არ არის
                                                რეკომენდებული დამუშავების ჩატარება იმ დღეებში, როდესაც მოსალოდნელია
                                                ღამის ყინვები და მათ შემდეგ, პრეპარატის ეფექტურობის შემცირების
                                                შესაძლებლობის გამო.

                                                სამუშაო ხსნარის მოსამზადებლად წყალი უნდა მომზადდეს Soylent კონდიციონერის
                                                გამოყენებით.</p>
                                        </div>
                                    </div>

                                    <div class="part col-lg-12 order-lg-2 mt-4">
                                        <h4 class="inner-title mb-2">სამუშაო ხსნარის მომზადება:</h4>
                                        <p class="font-light">სამუშაო ხსნარი მზადდება შესხურებამდე დაუყოვნებლივ. გაზომეთ
                                            წამლის საჭირო რაოდენობა მფრქვეველის ერთი შევსებისთვის. პრეპარატი შეჰყავთ
                                            პირდაპირ გამფრქვევის ავზში, იმ პირობით, რომ ჰიდრავლიკური აგიტატორი კარგად
                                            მუშაობს. ამ შემთხვევაში, გამფრქვევი ავზი უნდა იყოს მინიმუმ ნახევრად სავსე
                                            წყლით.

                                            იმ შემთხვევებში, როდესაც საჭიროა დედის ხსნარის მომზადება, მასში პრეპარატის
                                            კონცენტრაცია არ უნდა აღემატებოდეს 15%-ს. ამისათვის დაამატეთ 1,5 ლიტრი
                                            პრეპარატი 10 ლიტრი მოცულობის კონტეინერში (ვედროში) 7,5 ლიტრ წყალთან ერთად და
                                            კარგად აურიეთ. ასე მომზადებული სადედე ლიქიორი არ უნდა გაჩერდეს 5 - 10 წუთზე
                                            მეტ ხანს, ამიტომ შერევის დასრულებისთანავე მას უმატებენ წყლით სავსე გამფრქვევ
                                            ავზს. მიღებულ სამუშაო ხსნარს ურევენ ერთგვაროვანი სუპოემულსიის წარმოქმნამდე.
                                            კონტეინერი, რომელშიც ჰერბიციდი იყო განთავსებული, რამდენჯერმე ირეცხება წყლით,
                                            შიგთავსი შეედინება მფრქვეველ ავზში.

                                            ჰერბიციდის სამუშაო ხსნარის მომზადება და მფრქვეველის შევსება ხდება სპეციალურ
                                            უბნებზე, რომლებიც შემდგომ დეზინფექციას ახდენენ.</p>
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
                                            <th>კომპლექსური 2-ეთილჰექსილესტერი 2,4-D მჟავა</th>
                                            <td>410 გ/ლ</td>
                                        </tr>
                                        <tr>
                                            <th>ფლორასულამი</th>
                                            <td>7,4 გ/ლ</td>
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
                                                <p class="font-light">აუცილებელია პირადი დამცავი აღჭურვილობის გამოყენება
                                                    სასუნთქი გზების, მხედველობისა და კანის მთლიანობისთვის.
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

<!-- Size Modal End -->
</section>
<!-- product section end -->

<!-- Size Modal Start -->
<?php include 'footer.php'?>
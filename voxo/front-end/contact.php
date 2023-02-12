<?php include 'header.php'?>

<!-- Breadcrumb section start -->
<section class="breadcrumb-section section-b-space">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>დაგვიკავშირდით</h3>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->
<!-- Contact Section Start -->
<section class="contact-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="materialContainer">
                    <div class="material-details">
                        <div class="title title1 title-effect mb-1 title-left">
                            <h2>დაგვიკავშირდით</h2>
                            <p class="ms-0 w-100">დაგვიტოვეთ თქვენი საკონტაქტო ინფორმაცია და ჩვენ აუცილებლად დაგიკავშირდებით</p>
                        </div>
                    </div>
                        <form action="form-to-email-contact.php" method="post">
                    <div class="row g-4 mt-md-1 mt-2">
                            <div class="col-md-6">
                                <label for="first" class="form-label">თქვენი სახელი</label>
                                <input name="firstname" type="text" class="form-control" id="first" placeholder="მოგვწერეთ თქვენი სახელი"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="last" class="form-label">თქვენი გვარი</label>
                                <input name="lastname" type="text" class="form-control" id="last" placeholder="მოგვწერეთ თქვენი გვარი"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">ელ-ფოსტა</label>
                                <input name="email" type="email" class="form-control" id="email"
                                    placeholder="მოგვწერეთ თქვენი ელ-ფოსტა" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email2" class="form-label">ტელეფონი</label>
                                <input name="phone" type="tel" class="form-control" id="email2"
                                    placeholder="მოგვწერეთ თქვენი ტელეფონი" required>
                            </div>

                            <div class="col-12">
                                <label for="comment" class="form-label">კომენტარი</label>
                                <textarea name="comment" class="form-control" id="comment" rows="5" required></textarea>
                            </div>

                            <div class="col-auto">
                                <button class="btn btn-solid-default" type="submit">გაგზავნა</button>
                            </div>
                    </div>
                        </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="contact-details">
                    <div>
                        <h2>ჩვენი საკონტაქტო ინფორმაცია</h2>
                        <h5 class="font-light">კონსულტაციებისა და დახმარებისათვის მოგვმართეთ:</h5>
                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="map-pin"></i>
                            </div>
                            <div class="contact-title">
                                <h4>მისამართი :</h4>
                                <p>ქ. ზუგდიდი, სოხუმის ქ. № 192 (ბენზინგასამართი "გეკო"-ს მიმდებარე)</p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="phone"></i>
                            </div>
                            <div class="contact-title">
                                <h4>ტელეფონი :</h4>
                                <p>აგრომარკეტი: <a href="tel:+995599728372">+995 599 72-83-72</a></p>
                                <p>აგონომი (თამარ ზარანდია): <a href="tel:+995597950700">+995 597 950 700</a></p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="mail"></i>
                            </div>
                            <div class="contact-title">
                                <h4>ელ-ფოსტა :</h4>
                                <p><a href="mailto:odishiagro@gmail.com">odishiagro@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Section start -->
<section class="contact-section">
    <div class="container-fluid">
        <div class="row gy-4">
            <div class="col-12 p-0">
                <div class="location-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7227.225249699896!2d55.17263937326456!3d25.081115462415855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1632538854272!5m2!1sen!2sin"
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Map Section End -->

<?php include 'footer.php'?>
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
                            <p class="ms-0 w-100">დაგვიტოვეთ თქვენი საკონტაქტო ინფორმაცია და ჩვენ აუცილებლად
                                დაგიკავშირდებით</p>
                        </div>
                    </div>
                    <form action="form-to-email-contact.php" method="post">
                        <div class="row g-4 mt-md-1 mt-2">
                            <div class="col-md-6">
                                <label for="first" class="form-label">თქვენი სახელი</label>
                                <input name="firstname" type="text" class="form-control" id="first"
                                    placeholder="მოგვწერეთ თქვენი სახელი" required>
                            </div>
                            <div class="col-md-6">
                                <label for="last" class="form-label">თქვენი გვარი</label>
                                <input name="lastname" type="text" class="form-control" id="last"
                                    placeholder="მოგვწერეთ თქვენი გვარი" required>
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
                <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3Af985e6e0770a2a686897f87b05a1a17e01be3be69a0cd33e5356de193e29e623&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Map Section End -->

<?php include 'footer.php'?>
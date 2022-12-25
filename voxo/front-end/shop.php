<?php include 'header.php'?>


    <!-- mobile fix menu start -->
    <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="index.html">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="toggle-category">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="cart.html">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="wishlist.html">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.html">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

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
                    <h3>Shop Listing</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Fashion</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Shop Section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="category-option">
                        <div class="button-close mb-3">
                            <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                        </div>
                        <div class="accordion category-name" id="accordionExample">

                            <div class="accordion-item category-rating">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        Brand
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body category-scroll">
                                        <ul class="category-list" id="filters-brand">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox" value="branda"
                                                        id="flexCheckDefault1">
                                                    <label class="form-check-label" for="flexCheckDefault1">brandA</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox" value="brandb" 
                                                        id="flexCheckDefault2">
                                                    <label class="form-check-label" for="flexCheckDefault2">brandB</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault3">
                                                    <label class="form-check-label" for="flexCheckDefault3">Louis
                                                        Philippe</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault4">
                                                    <label class="form-check-label" for="flexCheckDefault4">Louis
                                                        Philippe Sport</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault5">
                                                    <label class="form-check-label" for="flexCheckDefault5">H&M</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault6">
                                                    <label class="form-check-label" for="flexCheckDefault6">Fila</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault7">
                                                    <label class="form-check-label" for="flexCheckDefault7">Puma</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault8">
                                                    <label class="form-check-label" for="flexCheckDefault8">Nike</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault9">
                                                    <label class="form-check-label" for="flexCheckDefault9">HRX</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item category-color">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        Color
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="category-list">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item category-price">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">Price</button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="range-slider category-list">
                                            <input type="text" class="js-range-slider" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item category-rating">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">
                                        Category
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne">
                                    <div class="accordion-body category-scroll">
                                        <ul class="category-list" id="filters-category">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox" value="categorya"
                                                        id="flexCheckDefault10">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault10">categoryA</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox" value="categoryb"
                                                        id="flexCheckDefault11">
                                                    <label class="form-check-label" for="flexCheckDefault11">categoryB</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault12">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault12">Kurtas</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault13">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault13">Sweatshirts</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault14">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault14">Jackets</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault15">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault15">Blazers</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault16">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault16">Puma</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault17">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault17">Nike</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault18">
                                                    <label class="form-check-label" for="flexCheckDefault18">HRX</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        Discount Range
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="category-list">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault19">
                                                    <label class="form-check-label" for="flexCheckDefault19">5% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault20">
                                                    <label class="form-check-label" for="flexCheckDefault20">10% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault21">
                                                    <label class="form-check-label" for="flexCheckDefault21">20% and
                                                        above</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider section start -->
                            <div class="most-popular">
                                <div class="title title-2 text-lg-start">
                                    <h3>Most Popular</h3>
                                </div>

                                <div class="product-slider border-top round-arrow1">
                                    <div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="product-image" >
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/1.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₾49.00</del> <span
                                                                class="theme-color">₾35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12" class="categoryb">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/2.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₾49.00</del> <span
                                                                class="theme-color">₾35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/3.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₾49.00</del> <span
                                                                class="theme-color">₾35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/6.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₾49.00</del> <span
                                                                class="theme-color">₾35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/7.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₾49.00</del> <span
                                                                class="theme-color">₾35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/8.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₾49.00</del> <span
                                                                class="theme-color">₾35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Section End -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-12 ratio_30">
                    <div class="banner-deatils">
                        <div class="banner-image">
                            <img src="assets/images/fashion/banner.jpg" class="img-fluid bg-img blur-up lazyload"
                                alt="">
                            <div class="banner-content">
                                <div>
                                    <h3>Shop The Latest Trends</h3>
                                    <p>Shop the latest clothing trends with our weekly edit of what's new in online at
                                        Voxo. From out latest woman collection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-contain mt-3 mb-5">
                            <p class="font-light">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <div class="row g-4">
                        <!-- filter button -->
                        <div class="filter-button">
                            <button class="danger-button danger-center btn btn-sm filter-btn"><i
                                    data-feather="align-left"></i> Filter</button>
                        </div>
                        <!-- filter button -->


                        <!-- label and featured section -->
                        <div class="col-md-12">
                            <ul class="short-name">
                                <li>
                                    <div class="label-tag">
                                        <span>Shirts</span>
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li>
                                    <div class="label-tag">
                                        <span>Kurtas</span>
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li>
                                    <div class="label-tag">
                                        <span>Jackets</span>
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li>
                                    <div class="label-tag">
                                        <span>Blazers</span>
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li>
                                    <div class="label-tag">
                                        <a href="javascript:void(0)"><span>Clear All</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="filter-options">
                                <div class="select-options">
                                    <div class="page-view-filter">
                                        <div class="dropdown select-featured">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                24 Page per view
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Alphabetically
                                                        A-Z</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Alphabetically
                                                        Z-A</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Price, High To
                                                        Low</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Price, Low To
                                                        High</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Date, Old To
                                                        New</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Date, New To
                                                        Old</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dropdown select-featured">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Featured
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Jeans</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">T-Shirt</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Shirt</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Jacket</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Hoodie</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid-options d-sm-inline-block d-none">
                                    <ul class="d-flex">
                                        <li class="two-grid">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/grid-2.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="three-grid d-md-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/grid-3.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="grid-btn d-lg-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/grid.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="list-btn active">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/list.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- label and featured section -->

                    <!-- Prodcut setion -->
                    <div
                        class="row g-sm-4 g-3 product-load-more mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section list-style">
                        <div  class="productcheck categorya brandb" data-category="categorya brandb">
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/ballerina.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ჰერბიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product_ballerina.php" class="font-default">
                                            <h5 class="ms-0">ბალერინა</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ჰერბიციდი</span>
                                            <p class="font-light">სისტემური ჰერბიციდი ყოველწლიური ორკოტილედონების წინააღმდეგ, მათ შორის 2,4-D და MCPA-ს მიმართ რეზისტენტული და ზოგიერთი მრავალწლიანი ფესვის გასროლის სარეველა მარცვლეულის, სიმინდის, ფეტვისა და სორგოს კულტურებში.</p>
                                        </div>
                                        <h3 class="theme-color">₾45.00</h3>
                                        <button onclick="location.href = 'product_ballerina.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box productcheck categoryb branda" data-category="categoryb branda">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/dublon-gold.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ჰერბიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">დუბლინ გოლდი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ჰერბიციდი</span>
                                            <p class="font-light">კომბინირებული ჰერბიციდი ერთწლიანი და მრავალწლიანი მარცვლეულის, ერთწლოვანი და ზოგიერთი მრავალწლიანი ორფეხა სარეველების წინააღმდეგ სიმინდის კულტურებში.</p>
                                        </div>
                                        <h3 class="theme-color">₾45.00</h3>
                                        <button onclick="location.href = 'product_dublon_gold.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/tornado.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ჰერბიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">ტორნადო </h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ჰერბიციდი</span>
                                            <p class="font-light">უწყვეტი მოქმედების უნივერსალური ჰერბიციდი.</p>
                                        </div>
                                        <h3 class="theme-color">
                                            ₾45.00
                                        </h3>
                                        <button onclick="location.href = 'product_tornado.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/ordan.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ჰერბიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">ორდანი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ჰერბიციდი</span>
                                            <p class="font-light">ლოკალურ-სისტემური მოქმედების ორკომპონენტიანი ფუნგიციდი კარტოფილის, პომიდვრის, კიტრის, ხახვისა და ყურძნის დაავადებების კომპლექსისგან დასაცავად.</p>
                                        </div>
                                        <h3 class="theme-color">₾50.00</h3>
                                        <button onclick="location.href = 'product_ordan.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/borei-neo.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ინსექტიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">ბორეი-ნეო</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ინსექტიციდი</span>
                                            <p class="font-light">სისტემური ჰერბიციდი ყოველწლიური ორკოტილედონების წინააღმდეგ, მათ შორის 2,4-D და MCPA-ს მიმართ რეზისტენტული და ზოგიერთი მრავალწლიანი ფესვის გასროლის სარეველა მარცვლეულის, სიმინდის, ფეტვისა და სორგოს კულტურებში.</p>
                                        </div>
                                        <h3 class="theme-color">₾7.00</h3>
                                        <button onclick="location.href = 'product_borei_neo.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/adieu.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">დამხმარე</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">ადიუ მიმწებებელი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">დამხმარე</span>
                                            <p class="font-light">დამხმარე საშუალება (სურფაქტანტი) ჰერბიციდებთან კომბინირებული გამოყენებისა და მათი ეფექტურობის გაზრდისთვის.</p>
                                        </div>
                                        <h3 class="theme-color">₾10.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/colossal.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ფუნგიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">კოლოსალი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ფუნგიციდი</span>
                                            <p class="font-light">პროფილაქტიკური და სამკურნალო სისტემური ფუნგიციდი მარცვლეულის, ბრინჯის, რაფსის და ყურძნის დაავადებების კონტროლისთვის.</p>
                                        </div>
                                        <h3 class="theme-color">₾10.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/cooper-88.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ფუნგიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">კუპერ 88</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ფუნგიციდი</span>
                                            <p class="font-light">მოქმედი ნივთიერება: 877 გ/კგ სპილენძის ოქსიქლორიდი (500გ/კგ სპილენძის მიხედვით) კუპერ 88 პრევენციული ხასიათის მქონე, კონტაქტური ფუნგიციდი ვაზში, ხეხილში, კაკლოვნებში, პარკოსნებსა და ზეთისხილში სოკოვანი დაავადებების წინააღმდეგ საბრძოლველად. თავსებადია სხვა პესტიციდებთან და აგროქიმიკატებთან. დაუშვებელია მისი შერევა მჟავა რეაქციისა და ძლიერი ტუტე რეაქციის პროდუქტებთან. რეკომენდებული დოზებისა და გამოყენების პერიოდების დაცვისას არ არის ფიტოტოქსიკური. ფიტოტოქსიკური ნიშნების შეიძლება გამოვლინდეს წვიმიან და ცივ ამინდებში, როდესაც ჰაერის ტემპერატურა 8°C-ზე დაბალია.</p>
                                        </div>
                                        <h3 class="theme-color">₾50.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/ramin.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ფუნგიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">რამინი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ფუნგიციდი</span>
                                            <p class="font-light">რამინი - დამცავი და სამკურნალო თვისებების მქონე ფუნგიციდი კულტურებში სოკოვანი დაავადებების წინააღმდეგ საბრძოლველად. ის წარმოადგენს წყალში ხსნადი მიკროგრანულებისგან შემდგარ პრეპარატულ ფორმას რომელსაც წარმოების ორიგინალური პროცესების და ნაწილაკების სიწმინდის გამო ფოთლების ზედაპირზე მიწებების და გადანაწილების განსაკუთრებული უნარი გააჩნია. ეს თვისებები უზრუნველყოფს ფუნგიციდური და ბაქტერიული ეფექტიანობის ზრდას და სპილენძის დოზების მნიშვნელოვან შემცირებას, რაც თავის მხრივ გარემოს დაცვას უწყობს ხელს. პრეპარატი თავსებადია თითქმის ყველა პესტიციდთან და აგროქიმიკატთან.</p>
                                        </div>
                                        <h3 class="theme-color">₾14.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/pinazol.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ფუნგიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">პინაზოლი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ფუნგიციდი</span>
                                            <p class="font-light">პინაზოლი - კონტაქტური მოქმედების ფუნგიციდი - თხევადი გოგირდი გამოიყენება ნებისმიერი კულტურის დასამუშავებლად, ის გამოირჩევა ორმაგი მოქმედების მექანიზმით.გააჩნია როგორც ფუნგიციდური უნარი, ნაცრის წინააღმდეგ ასევე ინსექტიციდური უნარი, ტკიპებისა და სხვა მავნებლების წინააღმდეგ.პინაზოლი გამოიყენება ყველა სასოფლო-სამეურნეო კულტურაზე, მისი განვითარების ნებისმიერ ეტაპზე, როგორც ღია ასევე დახურულ გრუნტზე (სათბურები) მხოლოდ ფოთლოვანი შესხურების გზით, 3-5 ლ/ჰა დოზით.

თავსებადია სხვა პესტიციდებთან, გარდა ზეთოვანი და ტუტე რეაქციის მქონე პრეპარატებისა.</p>
                                        </div>
                                        <h3 class="theme-color">₾23.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="assets/images/products/ammofos.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">კომბინირებული სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">ამოფოსი 12.52</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">კომბინირებული სასუქი</span>
                                            <p class="font-light">მრავალმხრივი, მაღალი ხარისხის მარცვლოვანი სასუქი, რომელიც შეიცავს აზოტს და ფოსფორს.</p>
                                        </div>
                                        <h3 class="theme-color">₾165.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_karbamid.php">
                                            <img src="assets/images/products/karbamid.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">კარბამიდი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">სასუქი</span>
                                            <p class="font-light">კარბამიდი (შარდოვანა) - ყველაზე კონცენტრირებული მარცვლოვანი აზოტის სასუქი (46,2% აზოტი).</p>
                                        </div>
                                        <h3 class="theme-color">₾180.00</h3>
                                        <button onclick="location.href = 'product_karbamid.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_sufammofos.php">
                                            <img src="assets/images/products/sulfoammofos.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">კომბინირებული სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">სულფოამოფოსი 20.20.14</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">კომბინირებული სასუქი</span>
                                            <p class="font-light">უნივერსალური მარცვლოვანი აზოტ-ფოსფორიანი სასუქი გოგირდის შემცველობით.</p>
                                        </div>
                                        <h3 class="theme-color">₾135.00</h3>
                                        <button onclick="location.href = 'product_sufammofos.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_avroroa_14.php">
                                            <img src="assets/images/products/avrora-14.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">წყალხსნადი სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">ავრორა 14.14.23</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">წყალხსნადი სასუქი</span>
                                            <p class="font-light">იდეალური გადაწყვეტა კარტოფილისა და ბოსტნეულისთვის.</p>
                                        </div>
                                        <h3 class="theme-color">₾135.00</h3>
                                        <button onclick="location.href = 'product_avroroa_14.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_avrora_16.php">
                                            <img src="assets/images/products/avrora-16.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">კომბინირებული სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">ავრორა 16.16.16</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">კომბინირებული სასუქი</span>
                                            <p class="font-light">უნივერსალური მაღალი ხარისხის კომპლექსური სასუქი.</p>
                                        </div>
                                        <h3 class="theme-color">₾150.00</h3>
                                        <button onclick="location.href = 'product_avrora_16.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_avrora_10.php">
                                            <img src="assets/images/products/karbamid.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">კომბინირებული სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">ავრორა 10.26.26</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">კომბინირებული სასუქი</span>
                                            <p class="font-light">კარბამიდი (შარდოვანა) - ყველაზე კონცენტრირებული მარცვლოვანი აზოტის სასუქი (46,2% აზოტი).</p>
                                        </div>
                                        <h3 class="theme-color">₾155.00</h3>
                                        <button onclick="location.href = 'product_avrora_10.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_aqualis_13.php">
                                            <img src="assets/images/products/aqualis-13.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">წყალხსნადი სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">აკვალის 10.26.26</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">წყალხსნადი სასუქი</span>
                                            <p class="font-light">იგი გამოიყენება ვეგეტაციის დასაწყისში ფესვთა სისტემის და ფოთლის აპარატის განვითარების სტიმულირებისთვის. შემადგენლობაში შემავალი აზოტი, კალიუმი და მიკროელემენტები ხელს უწყობს ჯანსაღი და ძლიერი გენერაციული ორგანოების მოყვანას ხარისხიანი მოსავლისთვის. ამონიუმის სახით ჭარბობს აზოტი.</p>
                                        </div>
                                        <h3 class="theme-color">₾140.00</h3>
                                        <button onclick="location.href = 'product_aqualis_13.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_aqualis_12.php">
                                            <img src="assets/images/products/aqualis-12.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">წყალხსნადი სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">აკვალის 12.8.31</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">წყალხსნადი სასუქი</span>
                                            <p class="font-light">გამოიყენება ვეგეტაციის ბოლოს და მოსავლის აღების პერიოდში. უზრუნველყოფს დაჩქარებულ მომწიფებას, აუმჯობესებს პროდუქტის ხარისხს. კალიუმის მაღალი შემცველობა უფრო სწრაფად მომწიფებისთვის, ძლიერი და ლამაზი კანი უფრო დიდ ნაყოფებზე. აზოტი ძირითადად ნიტრატის სახითაა. მაგნიუმი და კვალი ელემენტები მოსავლის სრული სიმწიფისთვის.</p>
                                        </div>
                                        <h3 class="theme-color">₾140.00</h3>
                                        <button onclick="location.href = 'product_aqualis_12.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_aqualis_15.php">
                                            <img src="assets/images/products/aqualis-15.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">წყალხსნადი სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">აკვალის 15.15.30</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">წყალხსნადი სასუქი</span>
                                            <p class="font-light">აჩქარებს სიმწიფეს, აუმჯობესებს ხილის ხარისხს და ზრდის მშრალი ნივთიერების რაოდენობას. უზრუნველყოფს ნივთიერებების სრულ გადინებას მცენარეული მასიდან. მაგნიუმი და მიკროელემენტები პროდუქტის მაქსიმალური ხარისხისა და მოსავლიანობისთვის. მარცვლეულში გლუტენის მატება, ჭარხალში შაქრის მომატება.</p>
                                        </div>
                                        <h3 class="theme-color">₾140.00</h3>
                                        <button onclick="location.href = 'product_aqualis_15.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_aqualis_20.php">
                                            <img src="assets/images/products/aqualis-20.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">წყალხსნადი სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">აკვალის 20.20.20</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">წყალხსნადი სასუქი</span>
                                            <p class="font-light">ბალანსი კვალი ელემენტებით ხელს შეუწყობს მოსავლის ზრდას და განვითარებას მთელი ვეგეტაციის განმავლობაში. მას აქვს სტრესის საწინააღმდეგო ეფექტი არასასურველი ამინდის პირობებში ან პესტიციდების გამოყენების შემდეგ.</p>
                                        </div>
                                        <h3 class="theme-color">₾115.00</h3>
                                        <button onclick="location.href = 'product_aqualis_20.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_kas_32.php">
                                            <img src="assets/images/products/kas-32.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">კას-32</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">სასუქი</span>
                                            <p class="font-light">წონასწორობის ბრენდი კვალი ელემენტებით.</p>
                                        </div>
                                        <h3 class="theme-color">₾42.00</h3>
                                        <button onclick="location.href = 'product_kas_32.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_rus_gvar.php">
                                            <img src="assets/images/products/rus-gvarjila.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">რუსული გვარჯილა</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">სასუქი</span>
                                            <p class="font-light">ამონიუმის ნიტრატის სასუქი (UAN) არის უნივერსალური მარცვლოვანი აზოტის სასუქი, რომელიც შეიცავს აზოტს ამონიუმის და ნიტრატის სახით (33.5% აზოტი).</p>
                                        </div>
                                        <h3 class="theme-color">₾105.00</h3>
                                        <button onclick="location.href = 'product_rus_gvar.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_fosbel.php">
                                            <img src="assets/images/products/fosbel-extra.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ფუნგიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">ფოსბელ ექსტრა</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ფუნგიციდი</span>
                                            <p class="font-light">ფოსბელ ექსტრა აერთიანებს ფოსეთილის მოქმედების სისტემურ მეთოდს, ფოლპეტის მოქმედების კონტაქტურ მეთოდს და ციმოქსანილის შეღწევადობას. გამოირჩევა განსაკუთრებული უნარით, გადაადგილდება მცენარეში წვენთან ერთად როგორც ზევიდან ქვევით ასევე ქვევიდან ზევით მიმართულებით. აკონტროლებს პათოგენის აგენტს ინკუპაციის პერიოდში, ხელს უშლის მიცელიუმის ზრდას, სპორების წარმოქმნას და პათოგენების გამრავლებას. ფოსბელ ექსტრა ხელს უწყობს მცენარეების ფიზიოლოგიური დაცვის უნარის გაძლიერებას. შეთავსებადია სხვა პესტიციდებთან და სასუქებთან გარდა გოგირდისა და შაბიამნისა.</p>
                                        </div>
                                        <h3 class="theme-color">₾82.00</h3>
                                        <button onclick="location.href = 'product_fosbel.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_abamet.php">
                                            <img src="assets/images/products/abamet.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ინსექტიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">აბამეთი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ინსექტიციდი</span>
                                            <p class="font-light">აბამეტი არის წამყვანი აკარიციდი/ინსექტიციდი და მოქმედებს ძირითადად გადაყლაპვით, მაგრამ ასევე აქვს კონტაქტური და ტრანსლამინარული აქტივობა, რაც იმას ნიშნავს, რომ აქტიური ინგრედიენტი გადადის ფოთლის ქსოვილში და ქმნის აბამექტინის ტოქსიკურ რეზერვუარს, რომელიც აგრძელებს მავნებლების მოკვლას, რადგან ისინი იკვებებიან მესფილის ქსოვილით.</p>
                                        </div>
                                        <h3 class="theme-color">₾33.00</h3>
                                        <button onclick="location.href = 'product_abamet.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_gvarjila.php">
                                            <img src="assets/images/products/gvarjila.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">სასუქი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">გვარჯილა</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">სასუქი</span>
                                            <p class="font-light">აზოტოვანი ჯგუფის მინერალური სასუქებიდან ამონიუმის გვარჯილა უნივერსალური, მაღალკონცენტრირებული აზოტოვანი სასუქია. მასში ძირითადი მკვებავი ელემენტი აზოტია, რომლის შემცველობაც პროდუქტში მინიმუმ 34,4 % -ია, აქედან 17,2 % აზოტს იგი შეიცავს ნიტრატული და ასევე 17,2 % აზოტს ამიაკური ფორმით. ეფექტურობის მხრივ მას პირველი ადგილი უჭირავს აზოტოვან სასუქებს შორის, რადგანაც იგი გამოიყენება ყველანაირი ტიპის ნიადაგებისათვის და სასოფლო - სამეურნეო კულტურების უმეტესობისათვის, როგორც ძირითადი, ასევე თესვისწინა და დამატებითი კვების უზრუნველყოფის მიზნით. ამონიუმის გვარჯილის სწორი დოზირებით მოსავლის რაოდენობა იზრდება 35 – 38 % -ით, ხოლო ნიადაგში აზოტის დეფიციტი განაპირობებს მცენარის განვითარების შეჩერებას და დაბალ მოსავლიანობას.</p>
                                        </div>
                                        <h3 class="theme-color">₾74.00</h3>
                                        <button onclick="location.href = 'product_gvarjila.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_galant.php">
                                            <img src="assets/images/products/galant.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ჰერბიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product_galant.php" class="font-default">
                                            <h5 class="ms-0">გალანტი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ჰერბიციდი</span>
                                            <p class="font-light">ამონიუმის გლუფოსინატი - ბლოკავს ფერმენტ გლუტამინსინთეზატის ფუნქციონირებას, რაც იწვევს უჯრედში ამიაკის შემცველობის მატებას, რის შედეგადაც ხდება ფოტოსინთეზის პროცესის ჩახშობა, მემბრანული ფუნქციის რღვევა და ცილების ბიოსინთეზის კლება. ამიაკის მაღალი შემცველობა рН-ის ნიშნულს ქვემოთ წევს მთლიან მემბრანაში, ამცირებს მცენარის ზრდა განვითარებისთვის გამომუშავებულ ენერგიას. ამიაკის ტოქსიკურ ნიშნულამდე დაგროვების შედეგად მცენარეში ხდება მწვანე მასის სწრაფი ხმობა და განადგურება.</p>
                                        </div>
                                        <h3 class="theme-color">₾63.00</h3>
                                        <button onclick="location.href = 'product_galant.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_blue_bordo.php">
                                            <img src="assets/images/products/blue-bordo.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ფუნგიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product_blue_bordo.php" class="font-default">
                                            <h5 class="ms-0">ბლუ ბორდო</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ფუნგიციდი</span>
                                            <p class="font-light">ბლუ ბორდო დისპერსი არის ფართო სპექტრის უნივერსალური ფუნგიციდი, რომელსაც გააჩნია ისეთი სოკოვანი და ბაქტერიული დაავადებვებისგან მცენარის დაცვის უნარი როგორიცაა: ჭრაქი, ატმის ფოთლის სიხუჭუჭე, კლასტეროსპოროზი, მონოლიოზი, ფიტოფტორა, ალტერნარიოზი, ფოთლის ლაქიანობები, ბაქტერიული ნეკროზი და სხვა. ბლუ ბორდო დისპერსს ახასიათებს კარგი მიმწებებლობის უნარი, რაც ზრდის დაცვითი მოქმედების ხანგრძლივობას. დაშვებულია ორგანულ სოფლის მეურნეობაში.</p>
                                        </div>
                                        <h3 class="theme-color">₾220.00</h3>
                                        <button onclick="location.href = 'product_blue_bordo.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_nixon.php">
                                            <img src="assets/images/products/karbamid.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ფუნგიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product_nixon.php" class="font-default">
                                            <h5 class="ms-0">ნიქსონი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ფუნგიციდი</span>
                                            <p class="font-light">ნიქსონი არის სისტემურ–კონტაქტური მოქმედების ფუნგიციდი, რომელსაც გააჩნია, როგორც პროფილაქტიკური, ასევე სამკურნალო მოქმედება და გამოიყენება ვაზის, კარტოფილის, ბოსტნეულისა და სხვა სასოფლო–სამეურნეო კულტურების ძირითადი სოკოვანი დაავადებებისაგან დასაცავად.</p>
                                        </div>
                                        <h3 class="theme-color">₾12.00</h3>
                                        <button onclick="location.href = 'product_nixon.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_actec.php">
                                            <img src="assets/images/products/actek.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ფუნგიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product_actec.php" class="font-default">
                                            <h5 class="ms-0">აცტეკი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ფუნგიციდი</span>
                                            <p class="font-light">აცტეკი წარმოადგენს ტრანსლამინარულ ინსექტო-აკარიციდს, რომელიც ებრძვის სასოფლო სამეურნეო კულტურების ყველა სახეობის მავნე ტკიპებსა და ჭიჭინობელებს. იგი მოქმედებს ტკიპების განვითარების ყველა ფაზაზე, მათ შორის ტკიპას კვერცხებზეც. პრეპარატი მოქმედებს შეხებით და საჭმლის მომნელებელი სისტემის საშუალებით. შესხურებისთანავე იჭრება მცენარის წვენში და ანადგურებს იმ ტკიპასაც, რომელიც წამლობისას არ იმყოფებოდა კონტაქტში. მას გააჩნია შერჩევითი მოქმედების უნარი.</p>
                                        </div>
                                        <h3 class="theme-color">₾33.00</h3>
                                        <button onclick="location.href = 'product_actec.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product_sulfavita.php">
                                            <img src="assets/images/products/sulfavita.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">ფუნგიციდი</span>
                                    </div>
                                    <div class="main-price">
                                        <a href="product_sulfavita.php" class="font-default">
                                            <h5 class="ms-0">კარბამიდი</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">ფუნგიციდი</span>
                                            <p class="font-light">სულფოვიტა არის კონტაქტური მოქმედების ფუნგიციდი და აკარიციდი, რომელიც გამოიყენება უმეტესი სასოფლო–სამეურნეო კულტურების ნაცროვანი და ზოგიერთი სხვა სახის დაავადებებისა და ტკიპების წინააღმდეგ. სულფოვიტას უნიკალური პრეპარატული ფორმის მეშვეობით ახასიათებს კარგი მიმწებებლობა, ასევე კონტაქტური მოქმედება და აქტიურობა აირად ფაზაში. მისი ნაწილაკების იდეალური ზომა განაპირობებს კარგ ხსნადობას, წარმოქმნის ერთგვაროვან და მდგრად სუსპენზიას. სულფოვიტას გამოყენება დაშვებულია ორგანულ მეურნეობაში.</p>
                                        </div>
                                        <h3 class="theme-color">₾12.00</h3>
                                        <button onclick="location.href = 'product_sulfavita.php';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Prodcut setion -->
                    </div>

                    <div class="load-more">
                        <button class="loadMore btn btn-submit btn-full">load more</button>
                    </div>
                    <!-- Product section -->
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section end -->

<?php include 'footer.php'?>
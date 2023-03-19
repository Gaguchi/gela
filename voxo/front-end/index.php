<?php include 'header.php'?>
<?php include 'slider.php'?>

    <!-- service section start -->
    <section class="service-section service-style-2">
        <div class="container">
            <div class="row g-4 g-sm-3 reveal">
                <div class="col-xl-3 col-sm-6" >
                    <div class="service-wrap">
                        <div class="service-icon">
                            <img src="assets/images/icons/herbicide.svg" alt="" srcset="">
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">ჰერბიციდები</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <img src="assets/images/icons/insecticide.svg" alt="" srcset="">
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">პესტიციდები</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <img src="assets/images/icons/fungicide.svg" alt="" srcset="">
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">ფუნგიციდები</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <img src="assets/images/icons/fertilizer.svg" alt="" srcset="">
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">მინერალური სასუქი</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->
    <hr class="featurette-divider">


<?php include 'products-slider.php'?>


		<!-- Three columns of text below the carousel -->
        <!-- /.row -->
<!-- Map Section start -->
<!-- <section class="contact-section">
    <div class="container-fluid">
        <div class="row gy-4">
            <div class="col-12 p-0">
                <div class="location-map">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ZP7v6o3mwTP3ar3Kbg5z5KCCZ6fuKN4&ehbc=2E312F" width="100%" height="480"></iframe>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Map Section End -->
<?php include 'footer.php'?>
<script>
    
/*=====================
    26. create video element
 ==========================*/

 const box = document.createElement('p'); // is a node
 box.innerHTML = 'test satu dua tiga';


 $(window).on('load', function() {
    if ($("#generate-video").length){
    $( "#generate-video" ).prepend( '<video id="background-video" autoplay loop muted poster="assets/videos/thumbnail.jpg"><source src="assets/videos/video.mp4" type="video/mp4"></video>' );
}});

</script>
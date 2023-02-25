/*=====================
    26. create video element
 ==========================*/

 const box = document.createElement('p'); // is a node
 box.innerHTML = 'test satu dua tiga';


 $(document).ready( function() {
    if ($("#generate-video").length){
    $( "#generate-video" ).prepend( '<video id="background-video" autoplay loop muted poster="assets/videos/thumbnail.png"><source src="assets/videos/video.mp4" type="video/mp4"></video>' );
}});


AOS.init();
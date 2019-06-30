$(document).ready( function () {
    $('#table_id').DataTable();
} );

$('.slideShow').slick({
    infinite: true,
    arrows: false,
    autoplay: true,
    speed: 4000,
    autoplaySpeed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});
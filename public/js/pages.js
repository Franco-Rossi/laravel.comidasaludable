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
            breakpoint: 990,
            settings: {
                slidesToShow: 3,
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
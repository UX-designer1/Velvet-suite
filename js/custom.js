jQuery(document).ready( function($) {
    $(window).on('resize', main);
    /*$('.testimonial').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        dotsEach: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });*/
   /* $('.brands-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        dotsEach: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    });*/
    $('.grid').masonry({
        itemSelector: '.grid-item'
    });


    /* $('.menu-items').children().click(function () {
         var a = $(this).attr('target');
        $('.menu-items').find('.active').removeClass('active');
        $(this).addClass('active');
      $('.menu-display').find('.active').removeClass('active');
        $(a).addClass('active');
     });
*/


// user subscribe banner when website is loaded then we will ask to user subscribe your website or not.

//    setTimeout(function(){

//     $('#user_subscripbe').modal('show');

//     }, 3000

//     );



$('.for_companies_vt').on('click', function(){

  var Companies = $("[value^='For Companies']").trigger('click');
  console.log(Companies.val());

});

$('.for_individuals_vt').on('click', function(){
 var individual = $("[value^='For Individuals']").trigger('click');

 console.log(individual.val());
});



$('.more_info').on('click', function(){
        var id_post = $(this).attr('post_id');
        $.ajax({
            type: 'POST',
            url: $(this).attr('data-url'),
            data: {
                'post_id': id_post,
                'action': 'vs_result_get_post_content'
            }, success: function (result) {

                $('#team_info').html(result);
                $('#team_info').modal('show');
            },
            error: function () {
                //alert("error");
            }
        });

});



    function main() {
        var b = $('.brands-slider .item').height();
        $('.brands-slider .item').each(function () {
            var a = $(this).children().children().height();
            $(this).css('padding-top', ((b - a) / 2) + 'px');
        });
    }

    /*$(window).scroll(function () {
        var windowHeight = $(window).height();
        var scrollHeight = $(window).scrollTop();
        if (scrollHeight > windowHeight)
            $('#header').addClass('navbar-fixed-top');
        else
            $('#header').removeClass('navbar-fixed-top');
    });*/
    $grid = $('.list').isotope({
        // options
        itemSelector: '.list__item',
        layoutMode: 'masonry',
        masonry: {
            gutter: 0
        }
    });
    // filter items on button click
    $('.js-filter').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
        $( '.js-filter button' ).removeClass( 'is-active' );
        $( this ).addClass( 'is-active' );
    });
});
$(document).ready(function () {

    $("#banner .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    }
    );
    $("#top .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 4 }
        },

    }
    );

    var $grid = $('.grid').isotope({
        itemSelector: ".grid-item",
        layoutMode: "fitRows"
    });


    $(".button-group").on("click", "button", function () {

        var filterValue = $(this).attr("data-filter");
        console.log('clicked', filterValue);
        $grid.isotope({ filter: filterValue });
    });

    $('#blogs .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 4 }
        },
    })

    let $qty_up = $('.qty .qty-up');
    let $qty_down = $('.qty .qty-down');
    // let $input = $('.qty .qty-input')

    $qty_up.click(function (e) {
       let number = $(this).data('id');
        
       let $input=$(".qty-input[data-id="+number+"]");

console.log($input.val());
        if ($input.val() >= 1 && $input.val() <= 9) {

            $input.val(function (i, oldval) {
                return ++oldval;
            })


        }

    })


    $qty_down.click(function (e) {
         let number = $(this).data('id');
        
       let $input=$(".qty-input[data-id="+number+"]");
        console.log('hi', $input.val());
        if ($input.val() >= 1 && $input.val() <= 9) {

            $input.val(function (i, oldval) {
                return --oldval;
            })


        }

    })
})
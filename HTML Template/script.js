$(document).ready(function () {
    //top-sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });

    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        layoutMode: "fitRows",
    });

    //filter items on button click
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({ filter: filterValue });
    });

    //new-equipments owl carousel
    $("#new-equipments .owl-carousel").owlCarousel({
        loop: true,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });

    //blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
        },
    });

    // Product Qty Section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty-input");

    //click on qty up button
    $qty_up.click(function () {
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if ($input.val() >= 1 && $input.val() <= 9) {
            $input.val(function (i, oldval) {
                return ++oldval;
            });
        }
    });

    //click on qty down button
    $qty_down.click(function () {
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if ($input.val() > 1 && $input.val() <= 10) {
            $input.val(function (i, oldval) {
                return --oldval;
            });
        }
    });
});

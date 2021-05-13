$(document).ready(function () {
	$("#banner .owl-carousel").owlCarousel({
		dots: true,
		items: 1,
	});
	$("#top .owl-carousel").owlCarousel({
		loop: false,
		nav: true,
		dots: false,
		autoheight: true,
		responsive: {
			0: { items: 4 },
			600: { items: 4 },
			1000: { items: 4 },
		},
	});

	var $grid = $(".grid").isotope({
		itemSelector: ".grid-item",
		layoutMode: "fitRows",
	});

	$(".button-group").on("click", "button", function () {
		var filterValue = $(this).attr("data-filter");
		console.log("clicked", filterValue);
		$grid.isotope({ filter: filterValue });
	});

	$("#blogs .owl-carousel").owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoheight: true,
		responsive: {
			0: { items: 1 },
			600: { items: 1 },
			1000: { items: 4 },
		},
	});

	let $qty_up = $(".qty .qty-up");
	let $qty_down = $(".qty .qty-down");
	// let $input = $('.qty .qty-input')

	$qty_up.click(function (e) {
		let number = $(this).data("id");
		let $price = $(".product-price[data-id=" + number + "]");
		let $deal_price = $("#deal-price");
		let $input = $(".qty-input[data-id=" + number + "]");
		$.ajax({
			url: "template/ajax.php",
			type: "post",
			data: { item_id: $(this).data("id") },
			success: function (result) {
				let obj = JSON.parse(result);
				let item_price = obj[0]["item_price"];
				// console.log(item_price);
				if ($input.val() >= 0 && $input.val() <= 9) {
					$input.val(function (i, oldval) {
						return ++oldval;
					});
                    console.log($input.val());
                    $price.text(item_price * $input.val());
				let subtotal =
					parseFloat($deal_price.text()) + parseFloat(item_price);
				$deal_price.text(subtotal);
				}

				
			},
		});
	});

	$qty_down.click(function (e) {
		let number = $(this).data("id");
		let $price = $(".product-price[data-id=" + number + "]");
		let $deal_price = $("#deal-price");

		let $input = $(".qty-input[data-id=" + number + "]");
		$.ajax({
			url: "template/ajax.php",
			type: "post",
			data: { item_id: $(this).data("id") },
			success: function (result) {
				let obj = JSON.parse(result);
				let item_price = obj[0]["item_price"];
				// console.log(item_price);
				if ($input.val() >= 1 && $input.val() <= 9) {
					$input.val(function (i, oldval) {
						return --oldval;
                    });
                    		$price.text(item_price * $input.val());
				let subtotal =
					parseFloat($deal_price.text()) - parseFloat(item_price);
				$deal_price.text(subtotal.toFixed(2));
				}

		
			},
		});
	});
});

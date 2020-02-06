$(document).ready(function() {
    $('.submit-stock-request-form').on('click', function(e) {
    	e.preventDefault();
        if ($(this).is('#save-normal')) {
            $('#draft').val(false);
            validateMinimumQuantities();
        } else {
            $('#draft').val(true);
        }
    });

    function validateMinimumQuantities() {
    	$('.min-qty').each(function() {
    		if (parseInt($(this).val()) < parseInt($(this).data('min-qty'))) {
    			if (confirm('You are attempting to purchase a quantity lower that the minimum order quantity. Press OK to continue.') == true) {
    				$('.stock-request-form').submit();
    			}
    		}
    	});
    }
});
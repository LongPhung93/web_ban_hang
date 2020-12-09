$(document).ready(function () {
    $('.quantity').change(function () {
        let quantity = $(this).val();
        let rowId = $(this).attr('data-id');
        let origin = window.origin;
        $.ajax({
            url: origin + '/cart/update/',
            data: {
                quantity : quantity,
                rowId: rowId
            },
            type: 'GET',
            success: function (res) {
                function formatNumber (num) {
                    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
                }
                if (res.message === 'success') {
                    let totalPrice = formatNumber(res.item.price * res.item.qty);

                    $('#price-'+rowId).html(totalPrice);
                    let total = res.totalCart;
                    $('#totalCart').html(total);
                }
            }

        })

    })

});

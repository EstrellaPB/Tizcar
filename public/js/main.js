(function() {
    'use strict';
    document.addEventListener('DOMContentLoaded', function() {

        var automobile = document.getElementById('automobileSelect');
        var subtotal = document.getElementById('subtotal');
        var total = document.getElementById('total');
        var extra = document.getElementById('extra');
        automobile.addEventListener('change', function(event) {
            subtotal.value = automobile.options[automobile.selectedIndex].getAttribute('data-price');
            if (subtotal.value > 0) {
                // extra.removeAttribute('disabled');
                extra.value = 0;
            } else {
                // extra.setAttribute('disabled');
            }
            console.log(extra.value);
            getTotal();
        });
        extra.addEventListener('keyup', function() {
            getTotal();
        })

        function getTotal() {
            console.log('extra', extra.value);
            console.log('total', total.value);
            console.log('subtotal', subtotal.value);

            if (!extra.value) {
                total.value = parseFloat(subtotal.value) + parseFloat(0);
            } else {
                total.value = parseFloat(subtotal.value) + parseFloat(extra.value);
            }


        }

    });
})();
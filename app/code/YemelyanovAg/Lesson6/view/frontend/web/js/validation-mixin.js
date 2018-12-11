define([
    'jquery'
], function ($) {
    'use_strict';

    return function () {
        $.validator.addMethod(
            'validate-ua-phone-number',
            function (phone_number) {
                if (phone_number.match(/^((\+?3)?8)?0\d{9}$/)){
                    return true;
                } else {
                    return false;
                }
            },
            $.mage.__('Invalid number format or non-Ukrainian mobile number')
        );

    }
});
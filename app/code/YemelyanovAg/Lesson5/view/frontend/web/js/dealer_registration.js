define(['jquery', 'Magento_Ui/js/modal/modal'], function ($, modal) {
    var options = {
        type: 'popup',
        responsive: true,
        innerScroll: true,
        title: '',
        buttons: [{
            text: $.mage.__('Close'),
            class: '',
            click: function () {
                this.closeModal();
            }
        }]
    };
    var dealerForm = '#dealer-registration-form';
    var popup = modal(options, $(dealerForm));
    $("#dealer-reg-link").on('click', function () {
        $(dealerForm).modal("openModal");
        $(dealerForm).trigger('contentUpdated');
    });
});


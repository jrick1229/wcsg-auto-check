jQuery(document).ready(function($) {
        $('input#gifting_0_option').prop("checked", true);
        $('p.woocommerce_subscriptions_gifting_recipient_email').show();
        $('input.input-text.recipient_email').prop('required',true);
});
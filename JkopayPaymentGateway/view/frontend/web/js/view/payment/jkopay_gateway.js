/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'ecpay_jkopay_gateway',
                component: 'Ecpay_JkopayPaymentGateway/js/view/payment/method-renderer/jkopay_gateway'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);

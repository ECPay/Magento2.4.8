<?php

namespace Ecpay\JkopayPaymentGateway\Model;

use Magento\Payment\Model\Method\AbstractMethod;
class PaymentMethod extends AbstractMethod
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = 'ecpay_jkopay_gateway';

    protected $_infoBlockType = 'Ecpay\\JkopayPaymentGateway\\Block\\Info';

}

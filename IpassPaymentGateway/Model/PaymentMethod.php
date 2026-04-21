<?php

namespace Ecpay\IpassPaymentGateway\Model;

use Magento\Payment\Model\Method\AbstractMethod;
use Magento\Quote\Api\Data\CartInterface;
use Magento\Framework\App\ObjectManager;

class PaymentMethod extends AbstractMethod
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = 'ecpay_ipass_gateway';

    protected $_infoBlockType = 'Ecpay\\IpassPaymentGateway\\Block\\Info';

    public function isAvailable(?CartInterface $quote = null)
    {
        $objectManager = ObjectManager::getInstance();
        $cart = $objectManager->get('\Magento\Checkout\Model\Cart');
        $grandTotal  = $cart->getQuote()->getGrandTotal();

        // 訂單金額不可小於1元或大於50000元
        if (1 > $grandTotal || $grandTotal > 50000) {
            return false;
        }

        return parent::isAvailable($quote);
    }
}

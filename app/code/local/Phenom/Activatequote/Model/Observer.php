<?php
class Phenom_Activatequote_Model_Observer extends Mage_Core_Model_Abstract {

	public function sales_model_service_quote_submit_after(Varien_Event_Observer $observer) {

		//$onepage = Mage::getSingleton('checkout/type_onepage');

		//$redirectUrl = $onepage->getCheckout()->getRedirectUrl();

		//if ($redirectUrl) {
			// Activate the quote
			//$observer->getQuote()->setIsActive(true)->save();
			
			$observer->getQuote()->setIsActive(true);
		//}
			
	}
}
<?php 

namespace App\ThirdParty;

use MercadoPago;
use App\Database\Entities\ProductEntity;

class PaymentMercadoPago {

    private $apiUrl;
    private $apiKey;
    private $mercado_pago;

    public function __construct() {
        $this->apiUrl       = "https://api.mercadopago.com/v1";
        $this->apiKey       = env('KEY_MP');
        $this->mercado_pago = MercadoPago\SDK::setAccessToken($this->apiKey);
    }

	/**
	 * Create a mercadopago payment link
	 *
	 * @param ProductEntity $product
	 * @return string|null
	 */
    public function createLinkPayment(ProductEntity $product):? string {
		$paymentLink = null;

		if ($product) {

			$preference = new MercadoPago\Preference();
			$itemsArray = [];
			
			foreach ($product as $items) {

				$item = new MercadoPago\Item();
	
				$item->title 	  = $items['name'];
				$item->quantity   = $items['qty'];
				$item->unit_price = $items['subtotal'];
				
				$itemsArray[] 	  = $item;
			}

			$preference->items = $itemsArray;

			//$preference->payment_methods = [
			//	"excluded_payment_types" => [
			//	  	[
			//			"id" => "credit_card"
			//		]
			//	],
			//	"installments" => 12
			//];

			$preference->external_reference = "A Test payment";
			$preference->save();

			$paymentLink = $preference->sandbox_init_point;
		}

		return $paymentLink;
	}
}
<?php 

namespace App\ThirdParty;

use MercadoPago;
use App\Database\Entities\ProductEntity;

class PaymentMercadoPago {

    private string $endpoint;
	private string $api_key;
	private ?string $payment_link = null;
	private array $items_array;
	private $mercado_pago;

    public function __construct(string $apiKey) {
        $this->endpoint = "https://api.mercadopago.com/v1";
        $this->api_key = $apiKey;
    }

	/**
	 * Create a mercadopago payment link
	 *
	 * @param ProductEntity $product
	 * @return string|null
	 */
    public function createLinkPayment(ProductEntity $product):? string {

		if ($product) {

			$this->mercado_pago = MercadoPago\SDK::setAccessToken($this->api_key);

			$preference = new MercadoPago\Preference();

			foreach ($product as $items) {

				$item = new MercadoPago\Item();
	
				$item->title 	  = $items->name;
				$item->quantity   = $items->qty;
				$item->unit_price = $items->price;
				
				$this->itemsArray[] = $item;
			}

			$preference->items = $this->itemsArray;

			//$preference->payment_methods = [
			//	"excluded_payment_types" => [
			//	  	[
			//			"id" => "credit_card"
			//		]
			//	],
			//	"installments" => 12
			//];

			$preference->external_reference = "Coffe Code";
			$preference->save();

			$this->payment_link = $preference->sandbox_init_point;
		}

		return $this->payment_link;
	}
}
<?php

namespace WeDevs\WeMail\Core\Ecommerce\WooCommerce;

use WeDevs\WeMail\Traits\Singleton;

class WCOrderProducts {

    use Singleton;

    protected $source = 'woocommerce';

    /**
     * GET ORDER PRODUCTS
     * @param $order_obj
     * @return array
     */
    public function get_ordered_products( $order_obj ) {
        $items = $order_obj->get_items();
        $products = [];
        foreach ( $items as $item ) {
            $id = $item->get_product_id();
            $product = new \WC_Product( $id );

            $products[] = [
                'id'           => $id,
                'source'       => $this->source,
                'name'         => $product->get_name(),
                'slug'         => $product->get_slug(),
                'total'        => $item->get_total(),
                'quantity'     => $item->get_quantity(),
            ];
        }

        return $products;
    }
}

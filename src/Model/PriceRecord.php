<?php
/**
 * PriceRecord
 *
 * @package  BigCommerce\Api\v3
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 API.
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

class PriceRecord extends PriceRecordBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PriceRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'price' => 'double',
        'sale_price' => 'double',
        'retail_price' => 'double',
        'map_price' => 'double',
        'bulk_pricing_tiers' => '\BigCommerce\Api\v3\Model\BulkPricingTier[]',
        'sku' => 'string',
        'price_list_id' => 'int',
        'variant_id' => 'int',
        'currency' => 'string',
        'calculated_price' => 'double',
        'date_created' => '\DateTime',
        'date_modified' => '\DateTime',
        'product_id' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'price' => 'price',
        'sale_price' => 'sale_price',
        'retail_price' => 'retail_price',
        'map_price' => 'map_price',
        'bulk_pricing_tiers' => 'bulk_pricing_tiers',
        'sku' => 'sku',
        'price_list_id' => 'price_list_id',
        'variant_id' => 'variant_id',
        'currency' => 'currency',
        'calculated_price' => 'calculated_price',
        'date_created' => 'date_created',
        'date_modified' => 'date_modified',
        'product_id' => 'product_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'price' => 'setPrice',
        'sale_price' => 'setSalePrice',
        'retail_price' => 'setRetailPrice',
        'map_price' => 'setMapPrice',
        'bulk_pricing_tiers' => 'setBulkPricingTiers',
        'sku' => 'setSku',
        'price_list_id' => 'setPriceListId',
        'variant_id' => 'setVariantId',
        'currency' => 'setCurrency',
        'calculated_price' => 'setCalculatedPrice',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified',
        'product_id' => 'setProductId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'price' => 'getPrice',
        'sale_price' => 'getSalePrice',
        'retail_price' => 'getRetailPrice',
        'map_price' => 'getMapPrice',
        'bulk_pricing_tiers' => 'getBulkPricingTiers',
        'sku' => 'getSku',
        'price_list_id' => 'getPriceListId',
        'variant_id' => 'getVariantId',
        'currency' => 'getCurrency',
        'calculated_price' => 'getCalculatedPrice',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified',
        'product_id' => 'getProductId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['price'] = array_key_exists('price', $data) ? $data['price'] : null;
        $this->container['sale_price'] = array_key_exists('sale_price', $data) ? $data['sale_price'] : null;
        $this->container['retail_price'] = array_key_exists('retail_price', $data) ? $data['retail_price'] : null;
        $this->container['map_price'] = array_key_exists('map_price', $data) ? $data['map_price'] : null;
        $this->container['bulk_pricing_tiers'] = array_key_exists('bulk_pricing_tiers', $data) ? $data['bulk_pricing_tiers'] : null;
        $this->container['sku'] = array_key_exists('sku', $data) ? $data['sku'] : null;
        $this->container['price_list_id'] = array_key_exists('price_list_id', $data) ? $data['price_list_id'] : null;
        $this->container['variant_id'] = array_key_exists('variant_id', $data) ? $data['variant_id'] : null;
        $this->container['currency'] = array_key_exists('currency', $data) ? $data['currency'] : null;
        $this->container['calculated_price'] = array_key_exists('calculated_price', $data) ? $data['calculated_price'] : null;
        $this->container['date_created'] = array_key_exists('date_created', $data) ? $data['date_created'] : null;
        $this->container['date_modified'] = array_key_exists('date_modified', $data) ? $data['date_modified'] : null;
        $this->container['product_id'] = array_key_exists('product_id', $data) ? $data['product_id'] : null;
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price The list price for the variant mapped in a Price List. Overrides any existing or Catalog list price for the variant/product.
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets sale_price
     * @return double
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     * @param double $sale_price The sale price for the variant mapped in a Price List. Overrides any existing or Catalog sale price for the variant/product. If empty, the sale price will be treated as not being set on this variant.
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets retail_price
     * @return double
     */
    public function getRetailPrice()
    {
        return $this->container['retail_price'];
    }

    /**
     * Sets retail_price
     * @param double $retail_price The retail price for the variant mapped in a Price List. Overrides any existing or Catalog retail price for the variant/product.  If empty, the retail price will be treated as not being set on this variant.
     * @return $this
     */
    public function setRetailPrice($retail_price)
    {
        $this->container['retail_price'] = $retail_price;

        return $this;
    }

    /**
     * Gets map_price
     * @return double
     */
    public function getMapPrice()
    {
        return $this->container['map_price'];
    }

    /**
     * Sets map_price
     * @param double $map_price The MAP (Manufacturer's Advertised Price) for the variant mapped in a Price List. Overrides any existing or Catalog MAP price for the variant/product. If empty, the MAP price will be treated as not being set on this variant.
     * @return $this
     */
    public function setMapPrice($map_price)
    {
        $this->container['map_price'] = $map_price;

        return $this;
    }

    /**
     * Gets bulk_pricing_tiers
     * @return \BigCommerce\Api\v3\Model\BulkPricingTier[]
     */
    public function getBulkPricingTiers()
    {
        return $this->container['bulk_pricing_tiers'];
    }

    /**
     * Sets bulk_pricing_tiers
     * @param \BigCommerce\Api\v3\Model\BulkPricingTier[] $bulk_pricing_tiers
     * @return $this
     */
    public function setBulkPricingTiers($bulk_pricing_tiers)
    {
        $this->container['bulk_pricing_tiers'] = $bulk_pricing_tiers;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku The variant with which this price set is associated. Either sku or variant_id is required.
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets price_list_id
     * @return int
     */
    public function getPriceListId()
    {
        return $this->container['price_list_id'];
    }

    /**
     * Sets price_list_id
     * @param int $price_list_id The Price List with which this price set is associated.
     * @return $this
     */
    public function setPriceListId($price_list_id)
    {
        $this->container['price_list_id'] = $price_list_id;

        return $this;
    }

    /**
     * Gets variant_id
     * @return int
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     * @param int $variant_id The variant with which this price set is associated. Either variant_id or sku is required.
     * @return $this
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency The 3-letter currency code with which this price set is associated.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets calculated_price
     * @return double
     */
    public function getCalculatedPrice()
    {
        return $this->container['calculated_price'];
    }

    /**
     * Sets calculated_price
     * @param double $calculated_price The price of the variant as seen on the storefront if a price record is in effect. It will be equal to the `sale_price`, if set, and the `price` if there is not a `sale_price`.  Read only.
     * @return $this
     */
    public function setCalculatedPrice($calculated_price)
    {
        $this->container['calculated_price'] = $calculated_price;

        return $this;
    }

    /**
     * Gets date_created
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param \DateTime $date_created The date on which the Price entry was created.
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_modified
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     * @param \DateTime $date_modified The date on which the Price entry was created.
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

        return $this;
    }

    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id The id of the `Product` this `Price Record`'s variant_id is associated with.  Read only.
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}



<?php
/**
 * Product
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Kaufland
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kaufland.de Seller API v2
 *
 * This is the Kaufland.de Seller API v2. You can find more information on [https://sellerapi.kaufland.com/](https://sellerapi.kaufland.com/)
 *
 * The version of the OpenAPI document: 2.18.3
 * Contact: seller-api-support@kaufland-online.de
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Kaufland\Model;

use \ArrayAccess;
use \OpenAPI\Client\Kaufland\ObjectSerializer;

/**
 * Product Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Kaufland
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Product implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'idProduct' => 'int',
        'storefront' => '\OpenAPI\Client\Kaufland\Model\Storefront',
        'title' => 'string',
        'eans' => 'string[]',
        'idCategory' => 'int',
        'mainPicture' => 'string',
        'manufacturer' => 'string',
        'url' => 'string',
        'ageRating' => 'float',
        'isValid' => 'bool',
        'dangerousGoodsLiShipping' => 'string',
        'dangerLabel9A' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'idProduct' => 'int64',
        'storefront' => null,
        'title' => null,
        'eans' => null,
        'idCategory' => 'int64',
        'mainPicture' => null,
        'manufacturer' => null,
        'url' => null,
        'ageRating' => 'double',
        'isValid' => null,
        'dangerousGoodsLiShipping' => null,
        'dangerLabel9A' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'idProduct' => false,
        'storefront' => false,
        'title' => false,
        'eans' => false,
        'idCategory' => false,
        'mainPicture' => false,
        'manufacturer' => false,
        'url' => false,
        'ageRating' => false,
        'isValid' => false,
        'dangerousGoodsLiShipping' => true,
        'dangerLabel9A' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'idProduct' => 'id_product',
        'storefront' => 'storefront',
        'title' => 'title',
        'eans' => 'eans',
        'idCategory' => 'id_category',
        'mainPicture' => 'main_picture',
        'manufacturer' => 'manufacturer',
        'url' => 'url',
        'ageRating' => 'age_rating',
        'isValid' => 'is_valid',
        'dangerousGoodsLiShipping' => 'dangerous_goods_li_shipping',
        'dangerLabel9A' => 'danger_label_9A'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'idProduct' => 'setIdProduct',
        'storefront' => 'setStorefront',
        'title' => 'setTitle',
        'eans' => 'setEans',
        'idCategory' => 'setIdCategory',
        'mainPicture' => 'setMainPicture',
        'manufacturer' => 'setManufacturer',
        'url' => 'setUrl',
        'ageRating' => 'setAgeRating',
        'isValid' => 'setIsValid',
        'dangerousGoodsLiShipping' => 'setDangerousGoodsLiShipping',
        'dangerLabel9A' => 'setDangerLabel9A'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'idProduct' => 'getIdProduct',
        'storefront' => 'getStorefront',
        'title' => 'getTitle',
        'eans' => 'getEans',
        'idCategory' => 'getIdCategory',
        'mainPicture' => 'getMainPicture',
        'manufacturer' => 'getManufacturer',
        'url' => 'getUrl',
        'ageRating' => 'getAgeRating',
        'isValid' => 'getIsValid',
        'dangerousGoodsLiShipping' => 'getDangerousGoodsLiShipping',
        'dangerLabel9A' => 'getDangerLabel9A'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('idProduct', $data ?? [], null);
        $this->setIfExists('storefront', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('eans', $data ?? [], null);
        $this->setIfExists('idCategory', $data ?? [], null);
        $this->setIfExists('mainPicture', $data ?? [], null);
        $this->setIfExists('manufacturer', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('ageRating', $data ?? [], null);
        $this->setIfExists('isValid', $data ?? [], null);
        $this->setIfExists('dangerousGoodsLiShipping', $data ?? [], null);
        $this->setIfExists('dangerLabel9A', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['idProduct'] === null) {
            $invalidProperties[] = "'idProduct' can't be null";
        }
        if (($this->container['idProduct'] < 1)) {
            $invalidProperties[] = "invalid value for 'idProduct', must be bigger than or equal to 1.";
        }

        if ($this->container['storefront'] === null) {
            $invalidProperties[] = "'storefront' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['eans'] === null) {
            $invalidProperties[] = "'eans' can't be null";
        }
        if ($this->container['idCategory'] === null) {
            $invalidProperties[] = "'idCategory' can't be null";
        }
        if (($this->container['idCategory'] < 1)) {
            $invalidProperties[] = "invalid value for 'idCategory', must be bigger than or equal to 1.";
        }

        if ($this->container['mainPicture'] === null) {
            $invalidProperties[] = "'mainPicture' can't be null";
        }
        if ($this->container['manufacturer'] === null) {
            $invalidProperties[] = "'manufacturer' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['ageRating'] === null) {
            $invalidProperties[] = "'ageRating' can't be null";
        }
        if ($this->container['isValid'] === null) {
            $invalidProperties[] = "'isValid' can't be null";
        }
        if ($this->container['dangerousGoodsLiShipping'] === null) {
            $invalidProperties[] = "'dangerousGoodsLiShipping' can't be null";
        }
        if ($this->container['dangerLabel9A'] === null) {
            $invalidProperties[] = "'dangerLabel9A' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets idProduct
     *
     * @return int
     */
    public function getIdProduct()
    {
        return $this->container['idProduct'];
    }

    /**
     * Sets idProduct
     *
     * @param int $idProduct idProduct
     *
     * @return self
     */
    public function setIdProduct($idProduct)
    {
        if (is_null($idProduct)) {
            throw new \InvalidArgumentException('non-nullable idProduct cannot be null');
        }

        if (($idProduct < 1)) {
            throw new \InvalidArgumentException('invalid value for $idProduct when calling Product., must be bigger than or equal to 1.');
        }

        $this->container['idProduct'] = $idProduct;

        return $this;
    }

    /**
     * Gets storefront
     *
     * @return \OpenAPI\Client\Kaufland\Model\Storefront
     */
    public function getStorefront()
    {
        return $this->container['storefront'];
    }

    /**
     * Sets storefront
     *
     * @param \OpenAPI\Client\Kaufland\Model\Storefront $storefront storefront
     *
     * @return self
     */
    public function setStorefront($storefront)
    {
        if (is_null($storefront)) {
            throw new \InvalidArgumentException('non-nullable storefront cannot be null');
        }
        $this->container['storefront'] = $storefront;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets eans
     *
     * @return string[]
     */
    public function getEans()
    {
        return $this->container['eans'];
    }

    /**
     * Sets eans
     *
     * @param string[] $eans eans
     *
     * @return self
     */
    public function setEans($eans)
    {
        if (is_null($eans)) {
            throw new \InvalidArgumentException('non-nullable eans cannot be null');
        }
        $this->container['eans'] = $eans;

        return $this;
    }

    /**
     * Gets idCategory
     *
     * @return int
     */
    public function getIdCategory()
    {
        return $this->container['idCategory'];
    }

    /**
     * Sets idCategory
     *
     * @param int $idCategory idCategory
     *
     * @return self
     */
    public function setIdCategory($idCategory)
    {
        if (is_null($idCategory)) {
            throw new \InvalidArgumentException('non-nullable idCategory cannot be null');
        }

        if (($idCategory < 1)) {
            throw new \InvalidArgumentException('invalid value for $idCategory when calling Product., must be bigger than or equal to 1.');
        }

        $this->container['idCategory'] = $idCategory;

        return $this;
    }

    /**
     * Gets mainPicture
     *
     * @return string
     */
    public function getMainPicture()
    {
        return $this->container['mainPicture'];
    }

    /**
     * Sets mainPicture
     *
     * @param string $mainPicture mainPicture
     *
     * @return self
     */
    public function setMainPicture($mainPicture)
    {
        if (is_null($mainPicture)) {
            throw new \InvalidArgumentException('non-nullable mainPicture cannot be null');
        }
        $this->container['mainPicture'] = $mainPicture;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string $manufacturer manufacturer
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        if (is_null($manufacturer)) {
            throw new \InvalidArgumentException('non-nullable manufacturer cannot be null');
        }
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets ageRating
     *
     * @return float
     */
    public function getAgeRating()
    {
        return $this->container['ageRating'];
    }

    /**
     * Sets ageRating
     *
     * @param float $ageRating ageRating
     *
     * @return self
     */
    public function setAgeRating($ageRating)
    {
        if (is_null($ageRating)) {
            throw new \InvalidArgumentException('non-nullable ageRating cannot be null');
        }
        $this->container['ageRating'] = $ageRating;

        return $this;
    }

    /**
     * Gets isValid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
     * Sets isValid
     *
     * @param bool $isValid isValid
     *
     * @return self
     */
    public function setIsValid($isValid)
    {
        if (is_null($isValid)) {
            throw new \InvalidArgumentException('non-nullable isValid cannot be null');
        }
        $this->container['isValid'] = $isValid;

        return $this;
    }

    /**
     * Gets dangerousGoodsLiShipping
     *
     * @return string
     */
    public function getDangerousGoodsLiShipping()
    {
        return $this->container['dangerousGoodsLiShipping'];
    }

    /**
     * Sets dangerousGoodsLiShipping
     *
     * @param string $dangerousGoodsLiShipping dangerousGoodsLiShipping
     *
     * @return self
     */
    public function setDangerousGoodsLiShipping($dangerousGoodsLiShipping)
    {
        if (is_null($dangerousGoodsLiShipping)) {
            array_push($this->openAPINullablesSetToNull, 'dangerousGoodsLiShipping');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dangerousGoodsLiShipping', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dangerousGoodsLiShipping'] = $dangerousGoodsLiShipping;

        return $this;
    }

    /**
     * Gets dangerLabel9A
     *
     * @return string
     */
    public function getDangerLabel9A()
    {
        return $this->container['dangerLabel9A'];
    }

    /**
     * Sets dangerLabel9A
     *
     * @param string $dangerLabel9A dangerLabel9A
     *
     * @return self
     */
    public function setDangerLabel9A($dangerLabel9A)
    {
        if (is_null($dangerLabel9A)) {
            array_push($this->openAPINullablesSetToNull, 'dangerLabel9A');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dangerLabel9A', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dangerLabel9A'] = $dangerLabel9A;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



<?php
/**
 * UnitCondition
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
use \OpenAPI\Client\Kaufland\ObjectSerializer;

/**
 * UnitCondition Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Kaufland
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UnitCondition
{
    /**
     * Possible values of this enum
     */
    public const USED___ACCEPTABLE = 'USED___ACCEPTABLE';

    public const USED___VERY_GOOD = 'USED___VERY_GOOD';

    public const USED___AS_NEW = 'USED___AS_NEW';

    public const USED___GOOD = 'USED___GOOD';

    public const _NEW = 'NEW';

    public const REFURBISHED___VERY_GOOD = 'REFURBISHED___VERY_GOOD';

    public const REFURBISHED___GOOD = 'REFURBISHED___GOOD';

    public const REFURBISHED___AS_NEW = 'REFURBISHED___AS_NEW';

    public const REFURBISHED___ACCEPTABLE = 'REFURBISHED___ACCEPTABLE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USED___ACCEPTABLE,
            self::USED___VERY_GOOD,
            self::USED___AS_NEW,
            self::USED___GOOD,
            self::_NEW,
            self::REFURBISHED___VERY_GOOD,
            self::REFURBISHED___GOOD,
            self::REFURBISHED___AS_NEW,
            self::REFURBISHED___ACCEPTABLE
        ];
    }
}



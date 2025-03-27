<?php
/**
 * ReturnEmbeddable
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
 * ReturnEmbeddable Class Doc Comment
 *
 * @category Class
 * @description Additional data to be returned for return
 * @package  OpenAPI\Client\Kaufland
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnEmbeddable
{
    /**
     * Possible values of this enum
     */
    public const BUYER = 'buyer';

    public const RETURN_UNITS = 'return_units';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUYER,
            self::RETURN_UNITS
        ];
    }
}



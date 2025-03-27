<?php
/**
 * VatIndicator
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
 * VatIndicator Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Kaufland
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VatIndicator
{
    /**
     * Possible values of this enum
     */
    public const STANDARD_RATE = 'standard_rate';

    public const REDUCED_RATE_1 = 'reduced_rate_1';

    public const REDUCED_RATE_2 = 'reduced_rate_2';

    public const SUPER_REDUCED_RATE = 'super_reduced_rate';

    public const ZERO_RATE = 'zero_rate';

    public const UNSPECIFIED = 'unspecified';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STANDARD_RATE,
            self::REDUCED_RATE_1,
            self::REDUCED_RATE_2,
            self::SUPER_REDUCED_RATE,
            self::ZERO_RATE,
            self::UNSPECIFIED
        ];
    }
}



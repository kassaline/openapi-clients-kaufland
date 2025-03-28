<?php
/**
 * ProductDataStatusAttributeValueState
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
 * ProductDataStatusAttributeValueState Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Kaufland
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductDataStatusAttributeValueState
{
    /**
     * Possible values of this enum
     */
    public const ACCEPTED = 'ACCEPTED';

    public const DECLINED = 'DECLINED';

    public const DELETE_REJECTED = 'DELETE_REJECTED';

    public const EXISTS = 'EXISTS';

    public const IGNORED = 'IGNORED';

    public const MIN_ONE_MISSING = 'MIN_ONE_MISSING';

    public const MISSING = 'MISSING';

    public const MODIFIED = 'MODIFIED';

    public const PENDING = 'PENDING';

    public const REFUSED = 'REFUSED';

    public const TRANSFORMED = 'TRANSFORMED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCEPTED,
            self::DECLINED,
            self::DELETE_REJECTED,
            self::EXISTS,
            self::IGNORED,
            self::MIN_ONE_MISSING,
            self::MISSING,
            self::MODIFIED,
            self::PENDING,
            self::REFUSED,
            self::TRANSFORMED
        ];
    }
}



<?php
/**
 * ProductDataImportFileStatus
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
 * ProductDataImportFileStatus Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Kaufland
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductDataImportFileStatus
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'NEW';

    public const DOWNLOADING = 'DOWNLOADING';

    public const DOWNLOADED = 'DOWNLOADED';

    public const DOWNLOADING_FAILED = 'DOWNLOADING_FAILED';

    public const PREPARING = 'PREPARING';

    public const PREPARED = 'PREPARED';

    public const PREPARING_FAILED = 'PREPARING_FAILED';

    public const CHECKING = 'CHECKING';

    public const CHECKED = 'CHECKED';

    public const CHECKING_FAILED = 'CHECKING_FAILED';

    public const PREPROCESSING = 'PREPROCESSING';

    public const PREPROCESSED = 'PREPROCESSED';

    public const PREPROCESSING_FAILED = 'PREPROCESSING_FAILED';

    public const IMPORTING = 'IMPORTING';

    public const IMPORTED = 'IMPORTED';

    public const IMPORTING_FAILED = 'IMPORTING_FAILED';

    public const IMPORTING_STOPPED = 'IMPORTING_STOPPED';

    public const ERROR = 'ERROR';

    public const ABORTED = 'ABORTED';

    public const DONE = 'DONE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::DOWNLOADING,
            self::DOWNLOADED,
            self::DOWNLOADING_FAILED,
            self::PREPARING,
            self::PREPARED,
            self::PREPARING_FAILED,
            self::CHECKING,
            self::CHECKED,
            self::CHECKING_FAILED,
            self::PREPROCESSING,
            self::PREPROCESSED,
            self::PREPROCESSING_FAILED,
            self::IMPORTING,
            self::IMPORTED,
            self::IMPORTING_FAILED,
            self::IMPORTING_STOPPED,
            self::ERROR,
            self::ABORTED,
            self::DONE
        ];
    }
}



# # OrderUnitDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**idOrderUnit** | **int** |  |
**idOrder** | **string** |  |
**tsCreatedIso** | **\DateTime** |  |
**isMarketplaceDeemedSupplier** | **bool** |  |
**tsUpdatedIso** | **\DateTime** |  |
**status** | [**\OpenAPI\Client\Kaufland\Model\OrderUnitStatus**](OrderUnitStatus.md) |  |
**price** | **int** |  |
**idOffer** | **string** |  |
**revenueGross** | **int** |  |
**revenueNet** | **int** |  |
**note** | **string** |  |
**unitCondition** | **string** |  |
**storefront** | [**\OpenAPI\Client\Kaufland\Model\Storefront**](Storefront.md) |  |
**currency** | [**\OpenAPI\Client\Kaufland\Model\Currency**](Currency.md) |  |
**deliveryTimeMin** | **int** |  |
**deliveryTimeMax** | **int** |  |
**deliveryTimeExpiresIso** | **\DateTime** |  |
**orderReceivedTimestampIso** | **\DateTime** |  |
**shippingRate** | **int** |  |
**cancelReason** | **string** |  |
**fulfillmentType** | [**\OpenAPI\Client\Kaufland\Model\FulfillmentType**](FulfillmentType.md) |  |
**buyer** | [**\OpenAPI\Client\Kaufland\Model\Buyer**](Buyer.md) |  |
**billingAddress** | [**\OpenAPI\Client\Kaufland\Model\Address**](Address.md) |  |
**shippingAddress** | [**\OpenAPI\Client\Kaufland\Model\Address**](Address.md) |  |
**product** | [**\OpenAPI\Client\Kaufland\Model\Product**](Product.md) |  |
**vat** | **float** |  |
**deliveryAttemptTimestampIso** | **\DateTime** | The attribute is only responded when explicitly requested as an embedded field | [optional]
**tickets** | [**\OpenAPI\Client\Kaufland\Model\Ticket[]**](Ticket.md) | The attribute is only responded when explicitly requested as an embedded field | [optional]
**returnUnit** | [**\OpenAPI\Client\Kaufland\Model\ReturnUnit**](ReturnUnit.md) | The attribute is only responded when explicitly requested as an embedded field | [optional]
**delivery** | [**\OpenAPI\Client\Kaufland\Model\Delivery**](Delivery.md) |  | [optional]
**kssEligible** | **bool** | The attribute is only responded when explicitly requested as an embedded field | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

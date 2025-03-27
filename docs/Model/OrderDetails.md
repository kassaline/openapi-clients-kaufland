# # OrderDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**idOrder** | **string** |  |
**tsCreatedIso** | **\DateTime** |  |
**isMarketplaceDeemedSupplier** | **bool** |  |
**storefront** | [**\OpenAPI\Client\Kaufland\Model\Storefront**](Storefront.md) |  |
**fulfillmentType** | [**\OpenAPI\Client\Kaufland\Model\FulfillmentType**](FulfillmentType.md) |  |
**orderUnits** | [**\OpenAPI\Client\Kaufland\Model\OrderDetailsOrderUnitsInner[]**](OrderDetailsOrderUnitsInner.md) |  |
**billingAddress** | [**\OpenAPI\Client\Kaufland\Model\Address**](Address.md) |  |
**shippingAddress** | [**\OpenAPI\Client\Kaufland\Model\Address**](Address.md) |  |
**buyer** | [**\OpenAPI\Client\Kaufland\Model\Buyer**](Buyer.md) |  |
**orderInvoices** | [**\OpenAPI\Client\Kaufland\Model\OrderInvoice[]**](OrderInvoice.md) |  | [optional]
**delivery** | [**\OpenAPI\Client\Kaufland\Model\Delivery**](Delivery.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

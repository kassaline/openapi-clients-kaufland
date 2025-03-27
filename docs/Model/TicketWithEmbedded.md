# # TicketWithEmbedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**idTicket** | **string** | Unique id of the ticket. |
**idsOrderUnits** | **int[]** | The list of order units IDs |
**idBuyer** | **int** |  |
**tsCreatedIso** | **\DateTime** | Creation date of the ticket in iso 8601 |
**tsUpdatedIso** | **\DateTime** | Last update on the ticket in iso 8601 |
**status** | [**\OpenAPI\Client\Kaufland\Model\TicketStatus**](TicketStatus.md) |  |
**openReason** | [**\OpenAPI\Client\Kaufland\Model\TicketReason**](TicketReason.md) |  |
**topic** | [**\OpenAPI\Client\Kaufland\Model\TicketTopic**](TicketTopic.md) | The topic of the ticket |
**isSellerResponsible** | **bool** | An indicator, whether the seller needs to take action |
**fulfillmentType** | [**\OpenAPI\Client\Kaufland\Model\FulfillmentType**](FulfillmentType.md) |  |
**messages** | [**\OpenAPI\Client\Kaufland\Model\TicketMessage[]**](TicketMessage.md) | A list of the tickets&#39; messages |
**orderUnits** | [**\OpenAPI\Client\Kaufland\Model\OrderUnit[]**](OrderUnit.md) | A list of the order units linked to the ticket |
**buyer** | [**\OpenAPI\Client\Kaufland\Model\Buyer**](Buyer.md) | The buyer of the ticket |
**product** | [**\OpenAPI\Client\Kaufland\Model\Product**](Product.md) | The product related to the ticket |
**files** | [**\OpenAPI\Client\Kaufland\Model\TicketFile[]**](TicketFile.md) | Uploaded files inside the ticket |
**storefront** | **string** | Current storefront (country) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

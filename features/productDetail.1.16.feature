
#Feature: ProductDetailPage - View Product Information
#
#Background:
#    Given Setup Country Configuration for FR

#Scenario Outline: Validate the Product Detail content page
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}<ProductDetailPage>
#    Then the object ProductDetail.SKU should be visible
#    And the object ProductDetail.Name should be visible
#    And the object ProductDetail.MainImage should be visible
#    And the return code of URL from attribute src of object ProductDetail.MainImage should be equal to TWO HUNDRED
#    And the object ProductDetail.Bullets should be visible
#    And the return code of URL from attribute src of object ProductDetail.Images should be equal to TWO HUNDRED {{AllObjects}}
#    And the return code of URL from attribute href of object ProductDetail.ImageLinks should be equal to TWO HUNDRED {{AllObjects}}
#    And the object ProductDetail.Price should be visible
#    And the object ProductDetail.SelectSize should be visible
#    And the content of object ProductDetail.SelectSize should be not equal to EMPTY ARRAY SIGH
#    And the return code of URL from attribute href of object ProductDetail.SelectSize.Documentation should be equal to TWO HUNDRED
#    And the object ProductDetail.AddToCart should be visible
#    And the object ProductDetail.ReserveInStore should be visible
#    And the return code of URL from attribute href of object ProductDetail.ReserveInStore.Help should be equal to TWO HUNDRED
#    And the object ProductDetail.InfoComplementaire should be visible
#
#    Examples:
#        | ProductDetailPage                                 |
#        | catalog/product/view/id/5174/s/t1206071104100/    |
        
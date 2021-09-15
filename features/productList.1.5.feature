#
#Feature: ProductListPage - View Product List
#
#Background:
#    Given Setup Country Configuration for FR
#
#Scenario Outline: Validate the Product List page
#    # Navigate to environment URL
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}<ProductListPage>
#
#    # Products should have the same size in each row
#    # Products on each row should be aligned top
#    # Products on each column should be aligned left
#    Then the objects ProductList.Product should be aligned in a matrix with rows of size 4
#    And the return code of URL from attribute href of object ProductList.Product should be equal to TWO HUNDRED For all productS
#    And the return code of URL from attribute src of object ProductList.Product.Image should be equal to TWO HUNDRED For all imageS
#    And the objects ProductList.Product.Name, ProductList.Product.TechnicalBadge, ProductList.Product.Price should be aligned: Vertically Centered For all productS
#
#    Examples:
#        | ProductListPage   |
#        | montre-homme.html |
#        | montre-femme.html |
#        | collection.html   |

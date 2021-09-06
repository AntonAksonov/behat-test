
Feature: Main Page - Navigation Menu

Background:
    Given Setup Country Configuration for FR

Scenario: Validate the menu "Homme" and the sublinks
    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
    Then the object Main.Menu_Men should be visible

#    When the user clicks on object Main.Menu_Men
#    Then the object Main.SubMenu_Men should be visible
#     And the return code of URL from attribute href of object Main.SubMenu_Men.Links should be equal to TWO HUNDRED For all linkS

#Scenario: Validate the menu "Femme" and the sublinks
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_Women should be visible
#
#    When the user clicks on object Main.Menu_Women
#    Then the object Main.SubMenu_Women should be visible
#    And the return code of URL from attribute href of object Main.SubMenu_Women.Links should be equal to TWO HUNDRED For all linkS
#
#Scenario: Validate the menu "Collections" and the sublinks
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_Collection should be visible
#
#    When the user clicks on object Main.Menu_Collection
#    Then the object Main.SubMenu_Collection should be visible
#    And the return code of URL from attribute href of object Main.SubMenu_Collection.Links should be equal to TWO HUNDRED For all linkS
#
#Scenario: Validate the menu "Univers Tissot"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_Brand should be visible
#    And the return code of URL from attribute href of object Main.Menu_Brand should be equal to TWO HUNDRED
#
#Scenario: Validate the menu "Service Client"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_CustomerService should be visible
#    And the return code of URL from attribute href of object Main.Menu_CustomerService should be equal to TWO HUNDRED
#
#Scenario: Validate the menu "Selection Pays" and the sublinks
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_CountrySelection should be visible
#
#    When the user clicks on object Main.Menu_CountrySelection
#    Then the object Main.Popup_CountrySelection should be visible
#    And the return code of URL from attribute href of object Main.Popup_CountrySelection.Links should be equal to TWO HUNDRED For all linkS
#
#Scenario: Validate the menu "Rechercher"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_Search should be visible
#
#    When the user clicks on object Main.Menu_Search
#    Then the object Main.Search.Input should be visible
#
#Scenario: Validate the menu "Store Locator"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_StoreLocator should be visible
#    And the return code of URL from attribute href of object Main.Menu_StoreLocator should be equal to TWO HUNDRED
#
#Scenario: Validate the menu "Enregistrer Montre"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_RegisterWatch should be visible
#    And the return code of URL from attribute href of object Main.Menu_RegisterWatch should be equal to TWO HUNDRED
#
#Scenario: Validate the menu "Mon Compte"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_MyAccount should be visible
#    And the return code of URL from attribute href of object Main.Menu_MyAccount should be equal to TWO HUNDRED
#
#Scenario: Validate the menu "Mon Panier"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.Menu_MyCart should be visible
#    And the return code of URL from attribute href of object Main.Menu_MyCart should be equal to TWO HUNDRED
#
#Scenario: Validate the "Tissot Logo"
#    When the user navigates to {https://www.tissotwatches.com/fr-fr/}
#    Then the object Main.TissotLogo should be visible
#    And the value of attribute href of object Main.TissotLogo should be equal to {https://www.tissotwatches.com/fr-fr/}

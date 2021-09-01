<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Session;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }


    /**
     * @Given shop url
     */

    public function shopUrl()
    {
        $driver = new \Behat\Mink\Driver\GoutteDriver();
        $session = new \Behat\Mink\Session($driver);

        $session->start();
        $session->visit('http://sylius.aksonov.pp.ua/en_US/') . "\n";
        echo "Status code " . $session->getStatusCode() . " ";
        echo " Current URL: " . $session->getCurrentUrl() . "\n";


        $page = $session->getPage();
        $linkEl = $page->findLink('jeans');
        $linkEl->click();
        echo "Page URL после нажатия на продукт: " . $session->getCurrentUrl() . "\n";


        $page = $session->getPage();
        $cart = $page->findButton('Add to cart');
        $cart->click();
        echo "Page URL после нажатия на кнопку Add to cart: " . $session->getCurrentUrl() . "\n";


        $session->visit('http://sylius.aksonov.pp.ua/en_US/checkout/address');
        echo "Переход на Checkout/address. Eсли в корзине есть товар то откроется /Checkout/address. Если корзина пуста редирект в /cart. Current URL:"
            . $session->getCurrentUrl();
    }

    /**
     * @Given Setup Country Configuration for FR
     */
    public function setupCountryConfigurationForFr()
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {https:\/\/www.tissotwatches.com\/fr-fr\/}
     */
    public function theUserNavigatesToHttpsWwwTissotwatchesComFrFr()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_Men should be visible
     */
    public function theObjectMainMenuMenShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @When the user clicks on object Main.Menu_Men
     */
    public function theUserClicksOnObjectMainMenuMen()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.SubMenu_Men should be visible
     */
    public function theObjectMainSubmenuMenShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.SubMenu_Men.Links should be equal to :arg1 (For all links)
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainSubmenuMenLinksShouldBeEqualToForAllLinks($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {Env_URL}
     */
    public function theUserNavigatesToEnvUrl()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_Women should be visible
     */
    public function theObjectMainMenuWomenShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @When the user clicks on object Main.Menu_Women
     */
    public function theUserClicksOnObjectMainMenuWomen()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.SubMenu_Women should be visible
     */
    public function theObjectMainSubmenuWomenShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.SubMenu_Women.Links should be equal to :arg1 (For all links)
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainSubmenuWomenLinksShouldBeEqualToForAllLinks($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_Collection should be visible
     */
    public function theObjectMainMenuCollectionShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @When the user clicks on object Main.Menu_Collection
     */
    public function theUserClicksOnObjectMainMenuCollection()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.SubMenu_Collection should be visible
     */
    public function theObjectMainSubmenuCollectionShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.SubMenu_Collection.Links should be equal to :arg1 (For all links)
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainSubmenuCollectionLinksShouldBeEqualToForAllLinks($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_Brand should be visible
     */
    public function theObjectMainMenuBrandShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_Brand should be equal to :arg1
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuBrandShouldBeEqualTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_CustomerService should be visible
     */
    public function theObjectMainMenuCustomerserviceShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_CustomerService should be equal to :arg1
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuCustomerserviceShouldBeEqualTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_CountrySelection should be visible
     */
    public function theObjectMainMenuCountryselectionShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @When the user clicks on object Main.Menu_CountrySelection
     */
    public function theUserClicksOnObjectMainMenuCountryselection()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Popup_CountrySelection should be visible
     */
    public function theObjectMainPopupCountryselectionShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Popup_CountrySelection.Links should be equal to :arg1 (For all links)
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainPopupCountryselectionLinksShouldBeEqualToForAllLinks($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_Search should be visible
     */
    public function theObjectMainMenuSearchShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @When the user clicks on object Main.Menu_Search
     */
    public function theUserClicksOnObjectMainMenuSearch()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Search.Input should be visible
     */
    public function theObjectMainSearchInputShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_StoreLocator should be visible
     */
    public function theObjectMainMenuStorelocatorShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_StoreLocator should be equal to :arg1
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuStorelocatorShouldBeEqualTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_RegisterWatch should be visible
     */
    public function theObjectMainMenuRegisterwatchShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_RegisterWatch should be equal to :arg1
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuRegisterwatchShouldBeEqualTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_MyAccount should be visible
     */
    public function theObjectMainMenuMyaccountShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_MyAccount should be equal to :arg1
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuMyaccountShouldBeEqualTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_MyCart should be visible
     */
    public function theObjectMainMenuMycartShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_MyCart should be equal to :arg1
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuMycartShouldBeEqualTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.TissotLogo should be visible
     */
    public function theObjectMainTissotlogoShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the value of attribute href of object Main.TissotLogo should be equal to {Env_URL}
     */
    public function theValueOfAttributeHrefOfObjectMainTissotlogoShouldBeEqualToEnvUrl()
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {Env_URL}montre-homme.html
     */
    public function theUserNavigatesToEnvUrlMontreHommeHtml()
    {
        throw new PendingException();
    }

    /**
     * @Then the objects ProductList.Product should be aligned in a matrix with rows of size :arg1
     */
    public function theObjectsProductlistProductShouldBeAlignedInAMatrixWithRowsOfSize($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object ProductList.Product should be equal to :arg1 (For all products)
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectProductlistProductShouldBeEqualToForAllProducts($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute src of object ProductList.Product.Image should be equal to :arg1 (For all images)
     */
    public function theReturnCodeOfUrlFromAttributeSrcOfObjectProductlistProductImageShouldBeEqualToForAllImages($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the objects [ProductList.Product.Name, ProductList.Product.TechnicalBadge, ProductList.Product.Price] should be aligned: Vertically Centered (For all products)
     */
    public function theObjectsProductlistProductNameProductlistProductTechnicalbadgeProductlistProductPriceShouldBeAlignedVerticallyCenteredForAllProducts()
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {Env_URL}montre-femme.html
     */
    public function theUserNavigatesToEnvUrlMontreFemmeHtml()
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {Env_URL}collection.html
     */
    public function theUserNavigatesToEnvUrlCollectionHtml()
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {Env_URL}catalog\/product\/view\/id\/:arg1\/s\/t1206071104100\/
     */
    public function theUserNavigatesToEnvUrlCatalogProductViewIdST($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.SKU should be visible
     */
    public function theObjectProductdetailSkuShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.Name should be visible
     */
    public function theObjectProductdetailNameShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.MainImage should be visible
     */
    public function theObjectProductdetailMainimageShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute src of object ProductDetail.MainImage should be equal to :arg1
     */
    public function theReturnCodeOfUrlFromAttributeSrcOfObjectProductdetailMainimageShouldBeEqualTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.Bullets should be visible
     */
    public function theObjectProductdetailBulletsShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute src of object ProductDetail.Images should be equal to :arg1 {{AllObjects}}
     */
    public function theReturnCodeOfUrlFromAttributeSrcOfObjectProductdetailImagesShouldBeEqualToAllobjects($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object ProductDetail.ImageLinks should be equal to :arg1 {{AllObjects}}
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectProductdetailImagelinksShouldBeEqualToAllobjects($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.Price should be visible
     */
    public function theObjectProductdetailPriceShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.SelectSize should be visible
     */
    public function theObjectProductdetailSelectsizeShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the content of object ProductDetail.SelectSize should be not equal to []
     */
    public function theContentOfObjectProductdetailSelectsizeShouldBeNotEqualTo()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object ProductDetail.SelectSize.Documentation should be equal to :arg1
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectProductdetailSelectsizeDocumentationShouldBeEqualTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.AddToCart should be visible
     */
    public function theObjectProductdetailAddtocartShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.ReserveInStore should be visible
     */
    public function theObjectProductdetailReserveinstoreShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object ProductDetail.ReserveInStore.Help should be equal to :arg1
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectProductdetailReserveinstoreHelpShouldBeEqualTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.InfoComplementaire should be visible
     */
    public function theObjectProductdetailInfocomplementaireShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {https:\/\/www.tissotwatches.com\/en-us\/}
     */
    public function theUserNavigatesToHttpsWwwTissotwatchesComEnUs()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.SubMenu_Men.Links should be equal to :arg1 (For all links)
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainSubmenuMenLinksShouldBeEqualToForAllLinks2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.SubMenu_Women.Links should be equal to :arg1 (For all links)
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainSubmenuWomenLinksShouldBeEqualToForAllLinks2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.SubMenu_Collection.Links should be equal to :arg1 (For all links)
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainSubmenuCollectionLinksShouldBeEqualToForAllLinks2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Popup_CountrySelection.Links should be equal to :arg1 (For all links)
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectMainPopupCountryselectionLinksShouldBeEqualToForAllLinks2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object ProductList.Product should be equal to :arg1 (For all products)
     */
    public function theReturnCodeOfUrlFromAttributeHrefOfObjectProductlistProductShouldBeEqualToForAllProducts2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute src of object ProductList.Product.Image should be equal to :arg1 (For all images)
     */
    public function theReturnCodeOfUrlFromAttributeSrcOfObjectProductlistProductImageShouldBeEqualToForAllImages2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the objects [ProductList.Product.Name, ProductList.Product.TechnicalBadge, ProductList.Product.Price] should be aligned: Vertically Centered (For all products)
     */
    public function theObjectsProductlistProductNameProductlistProductTechnicalbadgeProductlistProductPriceShouldBeAlignedVerticallyCenteredForAllProducts2()
    {
        throw new PendingException();
    }
}

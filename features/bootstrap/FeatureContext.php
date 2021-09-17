<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Session;
use Behat\Mink\Mink;
use Behat\Mink\Driver\Selenium2Driver;
use DMore\ChromeDriver\ChromeDriver;

$mink = new Mink(array(
    'browser' => new Session(new ChromeDriver('http://localhost:9222', null, 'https://www.tissotwatches.com'))
));

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends \Behat\MinkExtension\Context\RawMinkContext implements Context
{
    protected $session;

    /**
     * @Given Setup Country Configuration for FR
     */
    public function setupCountryConfigurationForFr()
    {
        $driver = new \Behat\Mink\Driver\Selenium2Driver();
        $session = new \Behat\Mink\Session($driver);
        $session->start();
        $session = $this->getSession();
        $session->visit($this->locatePath('/'));
        $page = $this->getSession()->getPage();

        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $this->getSession()->getPage()->find('xpath', "//li/a[@href='#']")->click();

        $this->getSession()->getPage()->find('xpath',"//*[@id='tissot_storeselector']/div[2]/div[1]/div/ul/li[5]")->click();
        echo $this->getSession()->getCurrentUrl();

    }

    /**
     * @When the user navigates to {https:\/\/www.tissotwatches.com\/fr-fr\/}
     */
    public
    function theUserNavigatesToHttpsWwwTissotwatchesComFrFr()
    {
//        $driver = new \Behat\Mink\Driver\Selenium2Driver();
//        $session = new \Behat\Mink\Session($driver);
//        $session->start();
        $this->getSession()->visit('https://www.tissotwatches.com/fr-fr/') . "\n";
        echo $this->getSession()->getCurrentUrl() . "\n";
//        echo $session->getStatuscode();
    }

    /**
     * @Then the object Main.Menu_Men should be visible
     */
    public
    function theObjectMainMenuMenShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'HOMME']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }


    /**
     * @When the user clicks on object Main.Menu_Men
     */
    public
    function theUserClicksOnObjectMainMenuMen()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $elements = $page->findAll('named', ['content', 'HOMME']);
        foreach ($elements as $item) {
            if ($item->getHtml() === 'HOMME') {
                $item->click();
            }
        }

        echo $this->getSession()->getCurrentUrl();
    }


    /**
     * @Then the object Main.SubMenu_Men should be visible
     */
    public
    function theObjectMainSubmenuMenShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $elements = $page->findAll('named', ['content', 'HOMME']);
        foreach ($elements as $item) {
            if ($item->getHtml() === 'HOMME') {
                $item->click();
            }
        }

        $this->getSession()->wait(1000);

        $element = $page->findAll('named', ['content', 'CLASSIC']);
        if ($element[0]->isVisible()) {
            echo ' Подменю CLASSIC в мужском меню видно';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @Then the return code of URL from attribute href of object Main.SubMenu_Men.Links should be equal to TWO HUNDRED For all linkS
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectMainSubmenuMenLinksShouldBeEqualToTwoHundredForAllLinks()
    {

    }

    /**
     * @Then the object Main.Menu_Women should be visible
     */
    public
    function theObjectMainMenuWomenShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'FEMME']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @When the user clicks on object Main.Menu_Women
     */
    public
    function theUserClicksOnObjectMainMenuWomen()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $elements = $page->findAll('named', ['content', 'FEMME']);
        foreach ($elements as $item) {
            if ($item->getHtml() === 'FEMME') {
                $item->click();
            }
        }

        echo $this->getSession()->getCurrentUrl();
    }

    /**
     * @Then the object Main.SubMenu_Women should be visible
     */
    public
    function theObjectMainSubmenuWomenShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $elements = $page->findAll('named', ['content', 'FEMME']);
        foreach ($elements as $item) {
            if ($item->getHtml() === 'FEMME') {
                $item->click();
            }
        }

        $this->getSession()->wait(1000);

        $element = $page->findAll('named', ['content', 'CLASSIC']);
        if ($element[0]->isVisible()) {
            echo ' Подменю CLASSIC в женском меню видно';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @Then the return code of URL from attribute href of object Main.SubMenu_Women.Links should be equal to TWO HUNDRED For all linkS
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectMainSubmenuWomenLinksShouldBeEqualToTwoHundredForAllLinks()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_Collection should be visible
     */
    public
    function theObjectMainMenuCollectionShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'COLLECTIONS']);

        if ($element[0]->isVisible()) {
            echo 'Visible';

        } else {
            echo 'Not found';
        }
    }

    /**
     * @When the user clicks on object Main.Menu_Collection
     */
    public
    function theUserClicksOnObjectMainMenuCollection()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $elements = $page->findAll('named', ['content', 'COLLECTIONS']);
        foreach ($elements as $item) {
            if ($item->getHtml() === 'COLLECTIONS') {
                $item->click();
            }
        }

        echo $this->getSession()->getCurrentUrl();
    }

    /**
     * @Then the object Main.SubMenu_Collection should be visible
     */
    public
    function theObjectMainSubmenuCollectionShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $elements = $page->findAll('named', ['content', 'TOUT VOIR']);
        foreach ($elements as $item) {
            if ($item->getHtml() === 'TOUT VOIR') {
                $item->click();
            }
        }

        $this->getSession()->wait(1000);

        $element = $page->findAll('named', ['content', 'T-SPORT']);
        if ($element[0]->isVisible()) {
            echo ' Подменю T-SPORT в меню COLLECTIONS видно';
        } else {
            echo 'Not found';

        }
    }

    /**
     * @Then the return code of URL from attribute href of object Main.SubMenu_Collection.Links should be equal to TWO HUNDRED For all linkS
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectMainSubmenuCollectionLinksShouldBeEqualToTwoHundredForAllLinks()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_Brand should be visible
     */
    public
    function theObjectMainMenuBrandShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);


        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'Univers Tissot']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }


    /**
     * @Then the return code of URL from attribute href of object Main.Menu_Brand should be equal to TWO HUNDRED
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuBrandShouldBeEqualToTwoHundred()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_CustomerService should be visible
     */
    public
    function theObjectMainMenuCustomerserviceShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }
        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'Service Client']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_CustomerService should be equal to TWO HUNDRED
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuCustomerserviceShouldBeEqualToTwoHundred()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_CountrySelection should be visible
     */
    public
    function theObjectMainMenuCountryselectionShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'MSelection Pays']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @When the user clicks on object Main.Menu_CountrySelection
     */
    public
    function theUserClicksOnObjectMainMenuCountryselection()
    {

        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $page = $this->getSession()->getPage();
        $elements = $page->findAll('named', ['content', 'MSelection Pays']);
        foreach ($elements as $item) {
            if ($item->getHtml() === 'Main.Menu_CountrySelection') {
                $item->click();
            }
            echo $this->getSession()->getCurrentUrl();
        }
    }

    /**
     * @Then the object Main.Popup_CountrySelection should be visible
     */
    public
    function theObjectMainPopupCountryselectionShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('named', ['content', 'MSelection Pays']);
        foreach ($elements as $item) {
            if ($item->getHtml() === 'MSelection Pays') {
                $item->click();
            }
        }

        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                echo 'Visible';
            } else {
                echo 'Not found';
            }
        }
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Popup_CountrySelection.Links should be equal to TWO HUNDRED For all linkS
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectMainPopupCountryselectionLinksShouldBeEqualToTwoHundredForAllLinks()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_Search should be visible
     */
    public
    function theObjectMainMenuSearchShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);


        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'Rechercher']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @When the user clicks on object Main.Menu_Search
     */
    public
    function theUserClicksOnObjectMainMenuSearch()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);

        $page = $this->getSession()->getPage();
        $elements = $page->findAll('named', ['content', 'Rechercher']);
        foreach ($elements as $item) {
            if ($item->getHtml() === 'SEARCH') {
                $item->click();
            }
            echo $this->getSession()->getCurrentUrl();
        }
    }

    /**
     * @Then the object Main.Search.Input should be visible
     */
    public
    function theObjectMainSearchInputShouldBeVisible()
    {

        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'INPUT']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);
    }

    /**
     * @Then the object Main.Menu_StoreLocator should be visible
     */
    public
    function theObjectMainMenuStorelocatorShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);


        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'Store Locator']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_StoreLocator should be equal to TWO HUNDRED
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuStorelocatorShouldBeEqualToTwoHundred()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_RegisterWatch should be visible
     */
    public
    function theObjectMainMenuRegisterwatchShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);


        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'Enregistrer Montre']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_RegisterWatch should be equal to TWO HUNDRED
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuRegisterwatchShouldBeEqualToTwoHundred()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_MyAccount should be visible
     */
    public
    function theObjectMainMenuMyaccountShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);


        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'Mon Compte']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_MyAccount should be equal to TWO HUNDRED
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuMyaccountShouldBeEqualToTwoHundred()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.Menu_MyCart should be visible
     */
    public
    function theObjectMainMenuMycartShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);


        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'Mon Panier']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @Then the return code of URL from attribute href of object Main.Menu_MyCart should be equal to TWO HUNDRED
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectMainMenuMycartShouldBeEqualToTwoHundred()
    {
        throw new PendingException();
    }

    /**
     * @Then the object Main.TissotLogo should be visible
     */
    public
    function theObjectMainTissotlogoShouldBeVisible()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click();
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);


        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'Tissot Logo']);

        if ($element[0]->isVisible()) {
            echo 'Visible';
        } else {
            echo 'Not found';
        }
    }

    /**
     * @Then the value of attribute href of object Main.TissotLogo should be equal to {https:\/\/www.tissotwatches.com\/fr-fr\/}
     */
    public
    function theValueOfAttributeHrefOfObjectMainTissotlogoShouldBeEqualToHttpsWwwTissotwatchesComFrFr()
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {https:\/\/www.tissotwatches.com\/fr-fr\/}montre-homme.html
     */
    public
    function theUserNavigatesToHttpsWwwTissotwatchesComFrFrMontreHommeHtml()
    {
        throw new PendingException();
    }

    /**
     * @Then the objects ProductList.Product should be aligned in a matrix with rows of size :arg1
     */
    public
    function theObjectsProductlistProductShouldBeAlignedInAMatrixWithRowsOfSize($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object ProductList.Product should be equal to TWO HUNDRED For all productS
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectProductlistProductShouldBeEqualToTwoHundredForAllProducts()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute src of object ProductList.Product.Image should be equal to TWO HUNDRED For all imageS
     */
    public
    function theReturnCodeOfUrlFromAttributeSrcOfObjectProductlistProductImageShouldBeEqualToTwoHundredForAllImages()
    {
        throw new PendingException();
    }

    /**
     * @Then the objects ProductList.Product.Name, ProductList.Product.TechnicalBadge, ProductList.Product.Price should be aligned: Vertically Centered For all productS
     */
    public
    function theObjectsProductlistProductNameProductlistProductTechnicalbadgeProductlistProductPriceShouldBeAlignedVerticallyCenteredForAllProducts()
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {https:\/\/www.tissotwatches.com\/fr-fr\/}montre-femme.html
     */
    public
    function theUserNavigatesToHttpsWwwTissotwatchesComFrFrMontreFemmeHtml()
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {https:\/\/www.tissotwatches.com\/fr-fr\/}collection.html
     */
    public
    function theUserNavigatesToHttpsWwwTissotwatchesComFrFrCollectionHtml()
    {
        throw new PendingException();
    }

    /**
     * @When the user navigates to {https:\/\/www.tissotwatches.com\/fr-fr\/}catalog\/product\/view\/id\/:arg1\/s\/t1206071104100\/
     */
    public
    function theUserNavigatesToHttpsWwwTissotwatchesComFrFrCatalogProductViewIdST($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.SKU should be visible
     */
    public
    function theObjectProductdetailSkuShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.Name should be visible
     */
    public
    function theObjectProductdetailNameShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.MainImage should be visible
     */
    public
    function theObjectProductdetailMainimageShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute src of object ProductDetail.MainImage should be equal to TWO HUNDRED
     */
    public
    function theReturnCodeOfUrlFromAttributeSrcOfObjectProductdetailMainimageShouldBeEqualToTwoHundred()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.Bullets should be visible
     */
    public
    function theObjectProductdetailBulletsShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute src of object ProductDetail.Images should be equal to TWO HUNDRED {{AllObjects}}
     */
    public
    function theReturnCodeOfUrlFromAttributeSrcOfObjectProductdetailImagesShouldBeEqualToTwoHundredAllobjects()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object ProductDetail.ImageLinks should be equal to TWO HUNDRED {{AllObjects}}
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectProductdetailImagelinksShouldBeEqualToTwoHundredAllobjects()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.Price should be visible
     */
    public
    function theObjectProductdetailPriceShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.SelectSize should be visible
     */
    public
    function theObjectProductdetailSelectsizeShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the content of object ProductDetail.SelectSize should be not equal to EMPTY ARRAY SIGH
     */
    public
    function theContentOfObjectProductdetailSelectsizeShouldBeNotEqualToEmptyArraySigh()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object ProductDetail.SelectSize.Documentation should be equal to TWO HUNDRED
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectProductdetailSelectsizeDocumentationShouldBeEqualToTwoHundred()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.AddToCart should be visible
     */
    public
    function theObjectProductdetailAddtocartShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.ReserveInStore should be visible
     */
    public
    function theObjectProductdetailReserveinstoreShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Then the return code of URL from attribute href of object ProductDetail.ReserveInStore.Help should be equal to TWO HUNDRED
     */
    public
    function theReturnCodeOfUrlFromAttributeHrefOfObjectProductdetailReserveinstoreHelpShouldBeEqualToTwoHundred()
    {
        throw new PendingException();
    }

    /**
     * @Then the object ProductDetail.InfoComplementaire should be visible
     */
    public
    function theObjectProductdetailInfocomplementaireShouldBeVisible()
    {
        throw new PendingException();
    }

    /**
     * @Given shop url
     */
    public
    function shopUrl()
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
}


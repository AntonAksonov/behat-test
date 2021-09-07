<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Session;
use Behat\Mink\Mink;

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
        $driver = new \Behat\Mink\Driver\GoutteDriver();
        $session = new \Behat\Mink\Session($driver);
        $session->start();
        $session = $this->getSession();
        $session->visit($this->locatePath('https://www.tissotwatches.com/fr-fr/'));

        $element = $session->getPage()->findLink('tissot_scopeselector');
        if (null == $element) {
            echo 'Not found';
        } else {
            echo 'Visible';
        }

    }


    /**
     * @When the user navigates to {https:\/\/www.tissotwatches.com\/fr-fr\/}
     */
    public function theUserNavigatesToHttpsWwwTissotwatchesComFrFr()
    {
        $driver = new \Behat\Mink\Driver\GoutteDriver();
        $session = new \Behat\Mink\Session($driver);
        $session->start();
        $session->visit('https://www.tissotwatches.com/fr-fr/') . "\n";
        echo $session->getCurrentUrl() . "\n";
        echo $session->getStatuscode();
    }

    /**
     * @Then the object Main.Menu_Men should be visible
     */
    public function theObjectMainMenuMenShouldBeVisible()
    {
//        $driver = new \Behat\Mink\Driver\GoutteDriver();
//        $session = new \Behat\Mink\Session($driver);
//        $session->start();
//        $session = $this->getSession();
//        $session->visit($this->locatePath('https://www.tissotwatches.com/fr-fr/'));
//        $elements = $session->getPage()->findAll('named', array('content', 'HOMME'));
//        if (count($elements) === 1) {
//            echo 'Visible';
//        } else {
//            echo 'Not found';
//        }
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click(); // это закрывает всплывающий попал (если откроешь в инкогнито сайт то там попап который не дает кликать)
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);    // ждем 1сек пока попап закроется

        $page = $this->getSession()->getPage();
        $element = $page->findAll('named', ['content', 'HOMME']);

        if ($element[0]->isVisible()) {
            echo 'Visible77777777';
        }
        else {
            echo 'Not found666666';
        }
    }


    /**
     * @When the user clicks on object Main.Menu_Men
     */
    public function theUserClicksOnObjectMainMenuMen()
    {
        $page = $this->getSession()->getPage();
        $elements = $page->findAll('css', '.action-close');
        foreach ($elements as $item) {
            if ($item->isVisible()) {
                $item->click(); // это закрывает всплывающий попал (если откроешь в инкогнито сайт то там попап который не дает кликать)
            }
        }

        $this->getSession()->resizeWindow(1800, 1000);
        $this->getSession()->wait(1000);    // ждем 1сек пока попап закроется

        $elements = $page->findAll('named', ['content', 'FEMME']);
        foreach ($elements as $item) {
            if($item->getHtml() === 'FEMME') {
                $item->click();
            }
        }

        $this->getSession()->wait(1000);

        $element = $page->findAll('named', ['content', 'CLASSIC']);
        if ($element[0]->isVisible()) {
            echo 'Ура, подменю CLASSIC в женском меню видно';
        }
        else {
            echo 'Not found666666';
        }
    }
//    {
//        $driver = new \Behat\Mink\Driver\BrowserKitDriver();
//        $session = new \Behat\Mink\Session($driver);
//        $session->start();
//        $session->visit('https://www.tissotwatches.com/fr-fr/') . "\n";
////      $page = $session->getPage();
//        $menuitem = $session->getPage()->findAll('named', array('content', 'HOMME'));
////      $menuitem = $page->find('css', 'Main.Menu_Men');
//        $menuitem[0]->click();
//        click($menuitem->link());
//        echo "Page URL после нажатия на Main.Menu_Men " . $session->getCurrentUrl() . "\n";
//    }
//        {
//            $mink = new Mink(array(
//                'silex' => new Session(new Behat\Mink\Driver\BrowserKitDriver(new Symfony\Component\HttpKernel\Client())),
//            ));
//
//            $page = $mink->getSession('silex')->getPage();
//            $page->findLink('Chat')->click();
//
////            echo "Page URL после нажатия на Main.Menu_Men " . $session->getCurrentUrl() . "\n";
//        }


        /**
         * @Then the object Main.SubMenu_Men should be visible
         */
        public
        function theObjectMainSubmenuMenShouldBeVisible()
        {
            throw new PendingException();
        }

        /**
         * @Then the return code of URL from attribute href of object Main.SubMenu_Men.Links should be equal to TWO HUNDRED For all linkS
         */
        public
        function theReturnCodeOfUrlFromAttributeHrefOfObjectMainSubmenuMenLinksShouldBeEqualToTwoHundredForAllLinks()
        {
            throw new PendingException();
        }

        /**
         * @Then the object Main.Menu_Women should be visible
         */
        public
        function theObjectMainMenuWomenShouldBeVisible()
        {
            throw new PendingException();
        }

        /**
         * @When the user clicks on object Main.Menu_Women
         */
        public
        function theUserClicksOnObjectMainMenuWomen()
        {
            throw new PendingException();
        }

        /**
         * @Then the object Main.SubMenu_Women should be visible
         */
        public
        function theObjectMainSubmenuWomenShouldBeVisible()
        {
            throw new PendingException();
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
            throw new PendingException();
        }

        /**
         * @When the user clicks on object Main.Menu_Collection
         */
        public
        function theUserClicksOnObjectMainMenuCollection()
        {
            throw new PendingException();
        }

        /**
         * @Then the object Main.SubMenu_Collection should be visible
         */
        public
        function theObjectMainSubmenuCollectionShouldBeVisible()
        {
            throw new PendingException();
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
            throw new PendingException();
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
            throw new PendingException();
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
            throw new PendingException();
        }

        /**
         * @When the user clicks on object Main.Menu_CountrySelection
         */
        public
        function theUserClicksOnObjectMainMenuCountryselection()
        {
            throw new PendingException();
        }

        /**
         * @Then the object Main.Popup_CountrySelection should be visible
         */
        public
        function theObjectMainPopupCountryselectionShouldBeVisible()
        {
            throw new PendingException();
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
            throw new PendingException();
        }

        /**
         * @When the user clicks on object Main.Menu_Search
         */
        public
        function theUserClicksOnObjectMainMenuSearch()
        {
            throw new PendingException();
        }

        /**
         * @Then the object Main.Search.Input should be visible
         */
        public
        function theObjectMainSearchInputShouldBeVisible()
        {
            throw new PendingException();
        }

        /**
         * @Then the object Main.Menu_StoreLocator should be visible
         */
        public
        function theObjectMainMenuStorelocatorShouldBeVisible()
        {
            throw new PendingException();
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
            throw new PendingException();
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
            throw new PendingException();
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
            throw new PendingException();
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
            throw new PendingException();
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

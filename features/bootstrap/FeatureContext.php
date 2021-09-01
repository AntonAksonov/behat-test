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
}







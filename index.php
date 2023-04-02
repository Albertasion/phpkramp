<?php
function format ($expre) {
    echo "<pre>";
    print_r($expre);
    echo "</pre>";
  }

// namespace Facebook\WebDriver;

// use Facebook\WebDriver\Remote\DesiredCapabilities;
// use Facebook\WebDriver\Remote\RemoteWebDriver;

// require_once('vendor/autoload.php');

// // This is where Selenium server 2/3 listens by default. For Selenium 4, Chromedriver or Geckodriver, use http://localhost:4444/
// $host = 'http://localhost:9515';

// $capabilities = DesiredCapabilities::chrome();

// $driver = RemoteWebDriver::create($host, $capabilities);

// // navigate to Selenium page on Wikipedia
// $driver->get('https://www.kramp.com/shop-ua/uk');




// $button = $driver->findElement(WebDriverBy::cssSelector('.primary'));
// $button->click();

// $enter_log = $driver->findElement(WebDriverBy::xpath('//*[@id="__next"]/header/div[1]/div/div/div[3]/div/div[3]/div/a/span'));

// $enter_log->click();
// $login = $driver->findElement(WebDriverBy::name('username'));
// $login->sendKeys('strumentua@gmail.com');
// $password = $driver->findElement(WebDriverBy::name('password'));
// $password->sendKeys('strument1')->submit();
// sleep(3);
// $firstmenuglobal = $driver->findElement(WebDriverBy::xpath('/html/body/div[2]/header/div[2]/div/div/div[1]/div/nav/a[1]'));
// $firstmenuglobal->click();
// $html = $driver->getPageSource();
// file_put_contents('page.html', $html);


require 'phpquery.php';
$html = file_get_contents('page.html');
$document = phpQuery::newDocument($html);
$text_all = [];
$links_all = [];
$links = $document->find('.kh-w3piuq');
$text = $document->find('span.kh-m2feck');
foreach ($links as $key => $link) {
   $pqlink = pq($link)->attr('href');

   $full_links = 'https://www.kramp.com'. $pqlink.'<br>';
   $links_all[$key]['link'] = $full_links;
   
   foreach ($text as $key => $tex) {
      $pqtext = pq($tex)->text();
      $links_all[$key]['text'] = $pqtext;
      
   }
}
format($links_all);







// $input = $driver->findElement(WebDriverBy::tagName('input'));


// $input->sendKeys("AL-KO")->submit();
// $driver->executeScript('window.scrollTo(0, document.body.scrollHeight);');
<?php
include ("Controller.php");
include ("Component/ScraperComponent.php");
class NewsController extends Controller
{
    function test()
    {
        $scraper = new ScraperComponent();
        $data = $scraper->scraper('http://www.planet-php.net/rss/');
        $finalData = $data->channel;
        $this->view($finalData);
    }
}

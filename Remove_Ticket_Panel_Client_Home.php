 <?php
use WHMCS\View\Menu\Item;

add_hook('ClientAreaHomepagePanels', 1, function (Item $homePagePanels)
{
$homePagePanels->removeChild('Recent Support Tickets');
}); 
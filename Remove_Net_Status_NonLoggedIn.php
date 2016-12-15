 <?php
use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
    $userid = intval($_SESSION['uid']);
    if ($userid=='0'){
        if (!is_null($primaryNavbar->getChild('Network Status'))) {
            $primaryNavbar->removeChild('Network Status');
        }
    }
});  


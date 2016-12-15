 <?php

use WHMCS\View\Menu\Item as MenuItem;
 
add_hook('ClientAreaSecondarySidebar', 1, function(MenuItem $secondarySidebar)
{
    if (!is_null($secondarySidebar->getChild('Support'))) {
             $secondarySidebar->getChild('Support')
                            ->removeChild('Announcements')
                            ->removeChild('Knowledgebase')
                            ->removeChild('Downloads')
                            ->removeChild('Network Status')
                            ->removeChild('Open Ticket');
    }
}); 


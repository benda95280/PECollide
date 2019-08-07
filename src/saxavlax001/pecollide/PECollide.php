<?php
namespace saxavlax001\pecollide;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;

class PECollide implements Listener
{

    public function onMove(PlayerMoveEvent $ev)
    {

        $player = $ev->getPlayer();
      
        foreach ($player->getViewers() as $viewer)
        {
            //If player too far, continue
            if ($player->distance($viewer) > 0.5) continue;
            //Get speed of that close player
            $speed = abs($player->getMotion()->x) + abs($player->getMotion->z);
            //If player
            if ($speed > 2)
            {
                $viewer->knockBack($player, 0, $viewer->x - $player->x, $viewer->z - $player->z, 0.2);
                $player->knockBack($viewer, 0, $player->x - $viewer->x, $player->z - $viewer->z, 0.1);
            }
            if (abs($player->getMotion()
                ->x) + abs($player->getMotion()
                ->z) < 2)
            {
                $ev->setCancelled();
            }
        }
    }
    
}

    foreach($player->getViewers() as $viewer) {
        if($player->distance($viewer) > 0.5) continue;
            $viewer->knockBack($player, 0, $viewer->x - $player->x, $viewer->z - $player->z, 0.2);
            $player->knockBack($viewer, 0, $player->x - $viewer->x, $player->z - $viewer->z, 0.1);
            break;
         }
       }
    }

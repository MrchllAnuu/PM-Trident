<?php

declare(strict_types = 1);

namespace TheNote\PMTrident\item;

use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemIds;
use pocketmine\item\VanillaItems;

class ItemManager {
    public static function init(): void
    {
        VanillaItems::register(new Trident(new ItemIdentifier(ItemIds::TRIDENT, 0), "Trident"));
    }
}

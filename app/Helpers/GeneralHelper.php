<?php

use App\Models\Menu;

function getMenu()
{
    $menus = Menu::get();
    
    return $menus;
}
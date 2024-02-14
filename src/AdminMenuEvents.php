<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminMenu;

use CodeIgniter\Events\Events;

class AdminMenuEvents
{

    const EVENT_MAIN_MENU = 'admin-main-menu';

    const EVENT_OPTIONS_MENU = 'admin-options-menu';

    public static function onMainMenu($callback)
    {
        return Events::on(static::EVENT_MAIN_MENU, $callback);
    }

    public static function onOptionsMenu($callback)
    {
        return Events::on(static::EVENT_OPTIONS_MENU, $callback);
    }

}
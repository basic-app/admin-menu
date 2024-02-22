<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use BasicApp\AdminMenu\AdminMenuEvents;
use CodeIgniter\Events\Events;

if (!function_exists('adminMainMenu'))
{
    function adminMainMenu(array $customItems = [], bool $removeEmpty = true) : array
    {
        $mainMenu = new stdClass;

        $mainMenu->items = [];

        Events::trigger(AdminMenuEvents::EVENT_MAIN_MENU, $mainMenu);

        $return = $mainMenu->items;

        if ($customItems)
        {
            $return = array_merge_recursive($return, $customItems);
        }

        if ($removeEmpty)
        {
            foreach($return as $key => $value)
            {
                if (empty($value['url']) || ($value['url'] == '#'))
                {
                    if (empty($value['items']))
                    {
                        unset($return[$key]);
                    }
                }
            }
        }

        return $return;
    }
}

if (!function_exists('adminOptionsMenu'))
{
    function adminOptionsMenu(array $customItems = []) : array
    {
        $optionsMenu = new stdClass;

        $optionsMenu->items = [];

        Events::trigger(AdminMenuEvents::EVENT_OPTIONS_MENU, $optionsMenu);

        $return = $optionsMenu->items;

        if ($customItems)
        {
            $return = array_merge_recursive($return, $customItems);
        }

        return $return;
    }
}

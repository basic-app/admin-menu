<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use CodeIgniter\Events\Events;

Events::on('pre_system', function()
{
    helper(['admin_menu']);
});

<?php
if (file_exists('./agiletoolkit-sandbox.phar')) {
    require_once "./agiletoolkit-sandbox.phar";
} elseif (file_exists('./agiletoolkit-sandbox') && is_dir('./agiletoolkit-sandbox')){

    include_once'vendor/atk4/atk4/loader.php';
    include_once'agiletoolkit-sandbox/init.php';

    # We need to manually load the API
    include_once'agiletoolkit-sandbox/api/Controller/Config.php';
    include_once'agiletoolkit-sandbox/api/AgileToolkit/Installer.php';

} else {
    exit('Download atk4-ide.phar to use installer.');
}

$api=new AgileToolkit_Installer('new_atk4_install');
$api->main();

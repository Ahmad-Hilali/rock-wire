if "%1" == "create_controller" (
    if "%4"=="" (
    echo "<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Main_core   extends MX_Controller {" >%cd%/application/modules/%2/controllers/%3.php
)
elseif "%4"!="" (
 echo.>%cd%/application/modules/%2/controllers/%3/%4.php
)
)
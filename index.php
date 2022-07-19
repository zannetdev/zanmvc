<?php
require 'server/config/database.php';
require 'server/config/const.php';
require 'server/config/server.php';
require 'server/lib/Bootstrap.php';
require 'server/lib/Controller.php';
require 'server/lib/Database.php';
require 'server/lib/Form.php';
require 'server/lib/Hash.php';
require 'server/lib/Model.php';
require 'server/lib/Session.php';
require 'server/lib/View.php';
require 'vendor/autoload.php';
require 'server/config/env.php';

$bootstrap = new Bootstrap();
$bootstrap->init();

<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('calculate'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('calculate', 'calc');
//Utils::addRoute('action_name', 'controller_class_name');
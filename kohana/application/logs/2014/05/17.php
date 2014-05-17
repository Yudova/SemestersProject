<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-17 08:46:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:46:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:47:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:47:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:47:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:47:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:47:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:47:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:47:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:47:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:47:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:47:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:48:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:48:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:48:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:48:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:49:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:49:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:49:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:49:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:49:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:49:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:50:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:50:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:52:03 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/s/slimmi/quote.slimmi.us/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-05-17 08:52:03 --- DEBUG: #0 /home/s/slimmi/quote.slimmi.us/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/s/slimmi/quote.slimmi.us/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/s/slimmi/quote.slimmi.us/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('categories')
#3 /home/s/slimmi/quote.slimmi.us/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/s/slimmi/quote.slimmi.us/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/s/slimmi/quote.slimmi.us/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/s/slimmi/quote.slimmi.us/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/s/slimmi/quote.slimmi.us/kohana/application/classes/Controller/Application.php(13): Kohana_ORM::factory('Category')
#8 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Controller.php(69): Controller_Application->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/s/slimmi/quote.slimmi.us/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/s/slimmi/quote.slimmi.us/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-05-17 08:53:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_quote' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:53:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 08:55:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view pagination/basic could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php:137
2014-05-17 08:55:09 --- DEBUG: #0 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pagination/basi...')
#1 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('pagination/basi...', Array)
#2 /home/s/slimmi/quote.slimmi.us/kohana/modules/pagination/classes/Kohana/Pagination.php(179): Kohana_View::factory('pagination/basi...', Array)
#3 /home/s/slimmi/quote.slimmi.us/kohana/application/classes/Controller/Index.php(51): Kohana_Pagination->render()
#4 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/s/slimmi/quote.slimmi.us/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php:137
2014-05-17 08:56:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php:137
2014-05-17 08:56:00 --- DEBUG: #0 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('index')
#1 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('index', Array)
#2 /home/s/slimmi/quote.slimmi.us/kohana/application/classes/Controller/Index.php(52): Kohana_View::factory('index', Array)
#3 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/s/slimmi/quote.slimmi.us/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php:137
2014-05-17 08:57:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view quote/quotes could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php:137
2014-05-17 08:57:33 --- DEBUG: #0 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('quote/quotes')
#1 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('quote/quotes', Array)
#2 /home/s/slimmi/quote.slimmi.us/kohana/application/views/Index.php(11): Kohana_View::factory('quote/quotes', Array)
#3 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(61): include('/home/s/slimmi/...')
#4 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/s/slimmi/...', Array)
#5 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#7 /home/s/slimmi/quote.slimmi.us/kohana/application/classes/Controller/Index.php(52): Kohana_Response->body(Object(View))
#8 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/s/slimmi/quote.slimmi.us/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php:137
2014-05-17 08:58:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_author' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-17 08:58:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 09:04:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view quote/quotes could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php:137
2014-05-17 09:04:39 --- DEBUG: #0 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('quote/quotes')
#1 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('quote/quotes', Array)
#2 /home/s/slimmi/quote.slimmi.us/kohana/application/views/All.php(12): Kohana_View::factory('quote/quotes', Array)
#3 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(61): include('/home/s/slimmi/...')
#4 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/s/slimmi/...', Array)
#5 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#7 /home/s/slimmi/quote.slimmi.us/kohana/application/classes/Controller/Category.php(68): Kohana_Response->body(Object(View))
#8 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Controller.php(84): Controller_Category->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/s/slimmi/quote.slimmi.us/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php:137
2014-05-17 09:05:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Category.php [ 13 ] in file:line
2014-05-17 09:05:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 09:05:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Category.php [ 13 ] in file:line
2014-05-17 09:05:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 09:05:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Category.php [ 13 ] in file:line
2014-05-17 09:05:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 09:06:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::redirect() ~ APPPATH/classes/Controller/Category.php [ 13 ] in file:line
2014-05-17 09:06:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-17 09:06:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view all could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php:137
2014-05-17 09:06:24 --- DEBUG: #0 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('all')
#1 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('all', Array)
#2 /home/s/slimmi/quote.slimmi.us/kohana/application/classes/Controller/Author.php(73): Kohana_View::factory('all', Array)
#3 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Controller.php(84): Controller_Author->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Author))
#6 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/s/slimmi/quote.slimmi.us/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/s/slimmi/quote.slimmi.us/kohana/system/classes/Kohana/View.php:137
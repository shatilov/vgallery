<?php
// Защита от прямого доступа к файлу
defined('_JEXEC') or die('Restricted access');
// Подключаем библеотеку контроллера Joomla
jimport('joomla.application.component.controller');
// Получаем экземпляр класса контроллера с префиксом Hello
$controller = JController::getInstance('vgallery');
// Обрабатываем запрос (task)
$controller->execute(JRequest::getCmd('task'));
// Переадресуем, если установлено контроллером
$controller->redirect();
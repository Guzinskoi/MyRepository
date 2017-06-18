<?php
require_once ('menu.php');
require_once ('command/add_mark.php');
require_once ('command/add_students.php');
require_once ('command/clear_mark.php');
require_once ('command/delete_mark.php');
require_once ('command/delete_student.php');
require_once ('command/deselect_student.php');
require_once ('command/edit_f_name.php');
require_once ('command/edit_l_name.php');
require_once ('command/edit_m_name.php');
require_once ('command/edit_mark.php');
require_once ('command/edit_group.php');
require_once ('command/list_students.php');
require_once ('command/show_high_achievers.php');
require_once ('command/show_low_achievers.php');
require_once ('command/show_selected.php');
require_once ('command/deselect_student.php');
require_once ('command/select_student.php');

$menu = new Menu();

$menu->addItem("Список студентов", new ListStudentsCommand());
$menu->addItem("Добавить студента", new AddStudentCommand());
$submenu = $menu->addSubmenu("Редактировать студента");
$menu->addItem("удалить студента", new DeleteStudentCommand());
$menu->addItem("Список отличников", new ShowHighAchieversCommand());
$menu->addItem("Список должников", new ShowLowAchieversCommand());

$submenu->addItem("Изменить фамилию", new EditLastNameCommand());
$submenu->addItem("Изменить имя", new EditFirstNameCommand());
$submenu->addItem("Изменить отчество", new EditMiddleNameCommand());
$submenu->addItem("Изменить группу", new EditGroupCommand());
$submenu->addItem("Добавить оценку", new AddMarkCommand());
$submenu->addItem("Изменить оценку", new EditMarkCommand());
$submenu->addItem("Удалить оценку", new DeleteMarkCommand());
$submenu->addItem("Удалить все оценки", new ClearMarkCommand());

$submenu->setStartupCommand(new SelectStudentCommand());
$submenu->setBeforeSelectCommand(new ShowSelectedCommand());
$submenu->setTearDownCommand(new DeselectStudentCommand());

$menu->execute();

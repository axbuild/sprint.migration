<?php

require_once __DIR__ . '/../lib/locale.php';

\Sprint\Migration\Locale::loadLocale([
    "SPRINT_MIGRATION_MIGRATION_DIR" => "Директория для миграций",
    "SPRINT_MIGRATION_MODULE_NAME" => "Миграции для разработчиков",
    "SPRINT_MIGRATION_MODULE_DESCRIPTION" => "Модуль для управления миграциями бд, создание, установка, откат миграций",
    "SPRINT_MIGRATION_PARTNER_NAME" => "Андрей Рябин",
    "SPRINT_MIGRATION_PARTNER_URI" => "https://dev.1c-bitrix.ru/community/webdev/user/39653/blog/",
    "SPRINT_MIGRATION_MENU_SPRINT" => "Миграции для разработчиков",
    "SPRINT_MIGRATION_MENU_MIGRATIONS" => "Миграции",
    "SPRINT_MIGRATION_MENU_SCHEMAS" => "Схемы данных",
    "SPRINT_MIGRATION_TITLE" => "Миграции",
    "SPRINT_MIGRATION_FORM_DESCR" => "Описание",
    "SPRINT_MIGRATION_FORM_PREFIX" => "Заголовок",
    "SPRINT_MIGRATION_LIST_EMPTY" => "нет",
    "SPRINT_MIGRATION_UP" => "Установить",
    "SPRINT_MIGRATION_DOWN" => "Откатить",
    "SPRINT_MIGRATION_UP_START" => "Установить новые",
    "SPRINT_MIGRATION_DOWN_START" => "Откатить все",
    "SPRINT_MIGRATION_UP_CONFIRM" => "Установить новые миграции?",
    "SPRINT_MIGRATION_DOWN_CONFIRM" => "Откатить все установленные миграции?",
    "SPRINT_MIGRATION_SET_REQUIRED_FIELD" => "Заполните обязательное поле: #TITLE#",
    "SPRINT_MIGRATION_REFRESH" => "Обновить",
    "SPRINT_MIGRATION_TOGGLE_LIST" => "Все",
    "SPRINT_MIGRATION_TOGGLE_NEW" => "Новые",
    "SPRINT_MIGRATION_TOGGLE_STATUS" => "Суммарно",
    "SPRINT_MIGRATION_TOGGLE_INSTALLED" => "Установленные",
    "SPRINT_MIGRATION_TOGGLE_UNKNOWN" => "Неизвестные",

    "SPRINT_MIGRATION_LINK_MP" => "Маркетплейс",
    "SPRINT_MIGRATION_LINK_DOC" => "Документация",
    "SPRINT_MIGRATION_LINK_ARTICLES" => "Статьи",
    "SPRINT_MIGRATION_LINK_COMPOSER" => "Composer",
    "SPRINT_MIGRATION_LINK_TASKS" => "Задачи",
    "SPRINT_MIGRATION_LINK_TELEGRAM" => "Группа в телеграме",

    "SPRINT_MIGRATION_TAB1" => "Миграции",
    "SPRINT_MIGRATION_TAB1_TITLE" => "Список миграций",
    "SPRINT_MIGRATION_TAB2" => "Создать",
    "SPRINT_MIGRATION_TAB2_TITLE" => "Создать миграцию",
    "SPRINT_MIGRATION_TAB3" => "Логирование",
    "SPRINT_MIGRATION_TAB3_TITLE" => "Логирование",
    "SPRINT_MIGRATION_TAB4" => "Конфиги",
    "SPRINT_MIGRATION_TAB4_TITLE" => "Конфиги",
    "SPRINT_MIGRATION_NEW" => "Новые миграции",
    "SPRINT_MIGRATION_INSTALLED" => "Установленные",
    "SPRINT_MIGRATION_UNKNOWN" => "Неизвестные",
    "SPRINT_MIGRATION_DESC_NEW" => "(только файл)",
    "SPRINT_MIGRATION_DESC_INSTALLED" => "(файл + запись об установке)",
    "SPRINT_MIGRATION_DESC_UNKNOWN" => "(только запись об установке)",
    "SPRINT_MIGRATION_META_NEW" => "New",
    "SPRINT_MIGRATION_META_INSTALLED" => "Installed",
    "SPRINT_MIGRATION_META_UNKNOWN" => "Unknown",
    "SPRINT_MIGRATION_CREATED_SUCCESS" => "Миграция #VERSION# создана",
    "SPRINT_MIGRATION_SEARCH" => "Поиск",
    "SPRINT_MIGRATION_ADMIN_INTERFACE_HIDDEN" => "Управление миграциями через админку отключено",

    "SPRINT_MIGRATION_CONFIG_TITLE" => "Миграции",
    "SPRINT_MIGRATION_CONFIG" => "Конфигурация",
    "SPRINT_MIGRATION_CONFIG_archive" => "Архив",

    "SPRINT_MIGRATION_CONFIG_migration_dir" => "Директория для миграций",
    "SPRINT_MIGRATION_CONFIG_migration_extend_class" => "Класс, от которого наследуются миграции",
    "SPRINT_MIGRATION_CONFIG_migration_table" => "Таблица в бд с миграциями",
    "SPRINT_MIGRATION_CONFIG_version_prefix" => "Заголовок класса миграции",
    "SPRINT_MIGRATION_CONFIG_version_builders" => "Конструкторы",
    "SPRINT_MIGRATION_CONFIG_version_filter" => "Фильтрация списка миграций",
    "SPRINT_MIGRATION_CONFIG_stop_on_errors" => "Останавливать выполнение миграций при ошибках",
    "SPRINT_MIGRATION_CONFIG_show_admin_interface" => "Показывать сервис миграций в админке",
    "SPRINT_MIGRATION_CONFIG_console_user" => "Пользователь, от которого запускаются миграции в консоли",
    "SPRINT_MIGRATION_CONFIG_config_file" => "Файл конфигурации",
    "SPRINT_MIGRATION_CONFIG_title" => "Название конфигурации",
    "SPRINT_MIGRATION_CONFIG_version_schemas" => "Схемы данных",

    "SPRINT_MIGRATION_CONFIG_yes" => "да",
    "SPRINT_MIGRATION_CONFIG_no" => "нет",

    "SPRINT_MIGRATION_BUILDER_ERROR" => "Ошибка",
    "SPRINT_MIGRATION_BUILDER_NEXT" => "Далее",
    "SPRINT_MIGRATION_BUILDER_RESET" => "Сбросить",
    "SPRINT_MIGRATION_SELECT_ALL" => "Выбрать все",
    "SPRINT_MIGRATION_SELECT_ONE" => "Выбрать",

    "SPRINT_MIGRATION_BUILDER_Transfer1" => "Перенести миграции",
    "SPRINT_MIGRATION_BUILDER_TransferTo" => "Перенести в другую конфигурацию",
    "SPRINT_MIGRATION_BUILDER_TransferAll" => "Все",
    "SPRINT_MIGRATION_BUILDER_TransferNew" => "Новые",
    "SPRINT_MIGRATION_BUILDER_TransferInstalled" => "Установленные",
    "SPRINT_MIGRATION_BUILDER_TransferUnknown" => "Неизвестные",
    "SPRINT_MIGRATION_BUILDER_TransferSelect" => "Выбрать миграции",
    "SPRINT_MIGRATION_BUILDER_TransferCnt" => "Перенесено миграций: #CNT#",
    "SPRINT_MIGRATION_BUILDER_TransferEmptyDest" => "Укажите конфигурацию для перемещения",
    "SPRINT_MIGRATION_BUILDER_TransferBadDest" => "Укажите подходящую конфигурацию",

    "SPRINT_MIGRATION_BUILDER_EventExport1" => "Создать миграцию для почтовых событий",
    "SPRINT_MIGRATION_BUILDER_EventExport2" => "",
    "SPRINT_MIGRATION_BUILDER_EventExport_event_types" => "Выберите типы почтовых событий",

    "SPRINT_MIGRATION_BUILDER_AgentExport1" => "Создать миграцию для агентов",
    "SPRINT_MIGRATION_BUILDER_AgentExport2" => "",
    "SPRINT_MIGRATION_BUILDER_AgentExport_agent_id" => "Выберите агенты",

    "SPRINT_MIGRATION_BUILDER_Version1" => "Создать простую миграцию",
    "SPRINT_MIGRATION_BUILDER_Version2" => "",

    "SPRINT_MIGRATION_BUILDER_UserGroupExport1" => "Создать миграцию для групп пользователей",
    "SPRINT_MIGRATION_BUILDER_UserGroupExport2" => "",
    "SPRINT_MIGRATION_BUILDER_UserGroupExport_user_group" => "Выберите группы",

    "SPRINT_MIGRATION_BUILDER_IblockExport1" => "Создать миграцию для инфоблока",
    "SPRINT_MIGRATION_BUILDER_IblockExport2" => "",
    "SPRINT_MIGRATION_BUILDER_IblockExport_IblockId" => "Выберите инфоблок",
    "SPRINT_MIGRATION_BUILDER_IblockExport_PropertyIds" => "Выберите свойства",
    "SPRINT_MIGRATION_BUILDER_IblockExport_What" => "Что переносим",
    "SPRINT_MIGRATION_BUILDER_IblockExport_WhatIblock" => "Инфоблок",
    "SPRINT_MIGRATION_BUILDER_IblockExport_WhatIblockType" => "Тип инфоблока",
    "SPRINT_MIGRATION_BUILDER_IblockExport_WhatIblockFields" => "Поля инфоблока",
    "SPRINT_MIGRATION_BUILDER_IblockExport_WhatIblockProperties" => "Свойства инфоблока",
    "SPRINT_MIGRATION_BUILDER_IblockExport_WhatIblockUserOptions" => "Настройки формы редактирования и списка",
    "SPRINT_MIGRATION_BUILDER_IblockExport_WhatIblockPermissions" => "Доступ к инфоблоку",

    'SPRINT_MIGRATION_BUILDER_IblockElementsExport1' => 'Перенести элементы инфоблоков',
    'SPRINT_MIGRATION_BUILDER_IblockElementsExport2' => "Переносит элементы с полями и свойствами\nПереносит изображения, файлы, списки\nНе переносит категории",
    'SPRINT_MIGRATION_BUILDER_IblockElementsExport_IblockId' => 'Выберите инфоблок',

    'SPRINT_MIGRATION_BUILDER_HlblockElementsExport1' => 'Перенести элементы highload-блоков',
    'SPRINT_MIGRATION_BUILDER_HlblockElementsExport2' => "Переносит элементы\nПереносит файлы и списки",
    'SPRINT_MIGRATION_BUILDER_HlblockElementsExport_HlblockId' => 'Выберите highload-блок',

    "SPRINT_MIGRATION_BUILDER_UserOptionsExport_Title" => "Создать миграцию для пользовательских настроек",
    "SPRINT_MIGRATION_BUILDER_UserOptionsExport_Desc" => "",
    "SPRINT_MIGRATION_BUILDER_UserOptionsExport_What" => "Что переносим",
    "SPRINT_MIGRATION_BUILDER_UserOptionsExport_WhatUserForm" => "Настрока формы редактирования пользователей",
    "SPRINT_MIGRATION_BUILDER_UserOptionsExport_WhatUserList" => "Настрока списка пользователей",
    "SPRINT_MIGRATION_BUILDER_UserOptionsExport_WhatGroupList" => "Настрока списка групп",

    "SPRINT_MIGRATION_BUILDER_HlblockExport1" => "Создать миграцию для highload-блока",
    "SPRINT_MIGRATION_BUILDER_HlblockExport2" => "",
    "SPRINT_MIGRATION_BUILDER_HlblockExport_HlblockId" => "Выберите highload-блоки",

    "SPRINT_MIGRATION_BUILDER_UserTypeEntities1" => "Создать миграцию для пользовательских полей",
    "SPRINT_MIGRATION_BUILDER_UserTypeEntities2" => "",
    "SPRINT_MIGRATION_BUILDER_UserTypeEntities_EntityId" => "Укажите поле для выгрузки",

    "SPRINT_MIGRATION_BUILDER_FormExport1" => "Создать миграцию для веб-формы",
    "SPRINT_MIGRATION_BUILDER_FormExport2" => "",
    "SPRINT_MIGRATION_BUILDER_FormExport_FormId" => "Выберите форму",
    "SPRINT_MIGRATION_BUILDER_FormExport_What" => "Что переносим?",
    "SPRINT_MIGRATION_BUILDER_FormExport_Form" => "Форму",
    "SPRINT_MIGRATION_BUILDER_FormExport_Fields" => "Поля формы",
    "SPRINT_MIGRATION_BUILDER_FormExport_Statuses" => "Статусы",

    "SPRINT_MIGRATION_BUILDER_OptionExport1" => "Создать миграцию для настроек модулей",
    "SPRINT_MIGRATION_BUILDER_OptionExport2" => "",
    "SPRINT_MIGRATION_BUILDER_OptionExport_module_id" => "Выберите модули",

    "SPRINT_MIGRATION_BUILDER_CacheCleaner1" => "Очистка кеша",
    "SPRINT_MIGRATION_BUILDER_CacheCleaner2" => "Выполнить BXClearCache(true)",

    "SPRINT_MIGRATION_BUILDER_Configurator" => "Создать конфигурацию",
    "SPRINT_MIGRATION_BUILDER_Configurator_config_name" => "Название (лат буквы и цифры)",
    "SPRINT_MIGRATION_BUILDER_Configurator_config_created" => "Конфигурация создана",
    "SPRINT_MIGRATION_BUILDER_Configurator_error" => "Ошибка создания конфигурации",
    "SPRINT_MIGRATION_BUILDER_Configurator_success" => "Конфигурация создана",

    "SPRINT_MIGRATION_BUILDER_Cleaner" => "Удалить конфигурацию",
    "SPRINT_MIGRATION_BUILDER_Cleaner_desc" => "Удаление файла конфигурации, файлов миграций и записей в таблице миграций",
    "SPRINT_MIGRATION_BUILDER_Cleaner_config_name" => "Название (лат буквы и цифры)",
    "SPRINT_MIGRATION_BUILDER_Cleaner_error" => "Ошибка удаления конфигурации",
    "SPRINT_MIGRATION_BUILDER_Cleaner_success" => "Конфигурация удалена",

    "SPRINT_MIGRATION_BUILDER_SchemaImport" => "Установка схемы",
    "SPRINT_MIGRATION_BUILDER_SchemaExport" => "Создание схемы",

    "SPRINT_MIGRATION_GOTO_MIGRATION" => "Админка миграций",
    "SPRINT_MIGRATION_GOTO_OPTIONS" => "Настройки модуля",

    "SPRINT_MIGRATION_OPTIONS_REMOVE" => "Сбросить настройки модуля",
    "SPRINT_MIGRATION_OPTIONS_REMOVE_success" => "Настройки сброшены",


    "SPRINT_MIGRATION_MARK" => "Отметить миграцию",
    "SPRINT_MIGRATION_MARK_FIELD1" => "Выбрать миграцию",
    "SPRINT_MIGRATION_MARK_FIELD2" => "Отметить как",
    "SPRINT_MIGRATION_MARK_VERSION" => "Название|installed|new|unknown",
    "SPRINT_MIGRATION_MARK_AS_NEW" => "новую",
    "SPRINT_MIGRATION_MARK_AS_INSTALLED" => "установленную",
    "SPRINT_MIGRATION_MARK_SUCCESS1" => "Миграция #VERSION# отмечена как новая",
    "SPRINT_MIGRATION_MARK_SUCCESS2" => "Миграция #VERSION# отмечена как установленная",
    "SPRINT_MIGRATION_MARK_ERROR1" => "Миграция #VERSION# уже является новой",
    "SPRINT_MIGRATION_MARK_ERROR2" => "Миграция #VERSION# уже была установлена",
    "SPRINT_MIGRATION_MARK_ERROR3" => "Миграция #VERSION# не изменена",
    "SPRINT_MIGRATION_MARK_ERROR4" => "Не найдено миграций для изменения",

    "SPRINT_MIGRATION_DELETE_OK" => "Миграция #VERSION# удалена",
    "SPRINT_MIGRATION_DELETE_ERROR1" => "Миграций для удаления не найдено",
    "SPRINT_MIGRATION_DELETE_ERROR2" => "Миграция #VERSION# не найдена",

    "SPRINT_MIGRATION_CREATE" => "Создать миграцию",
    "SPRINT_MIGRATION_VERSION_NOT_FOUND" => "Миграция не найдена",
    "SPRINT_MIGRATION_RIGHT_D" => "Доступ запрещен",
    "SPRINT_MIGRATION_RIGHT_W" => "Доступ разрешен",

    "SPRINT_MIGRATION_MODIFIED_VERSION" => "Код миграции был изменен после установки",
    "SPRINT_MIGRATION_MODIFIED_SCHEMA" => "Содержимое схемы было изменено после установки",
    "SPRINT_MIGRATION_MODIFIED_LABEL" => "M",
    "SPRINT_MIGRATION_TAG" => "Миграция отмечена тегом",
    "SPRINT_MIGRATION_ADDTAG" => "Поставить тег",
    "SPRINT_MIGRATION_ADDTAG_TAG" => "Название",
    "SPRINT_MIGRATION_ADDTAG_TITLE" => "Поставить тег устанавливаемым миграциям",

    "SPRINT_MIGRATION_MENU_SCHEMA" => "Cхемы данных",
    "SPRINT_MIGRATION_SCHEMA_DIFF" => "Проверить изменения",
    "SPRINT_MIGRATION_SCHEMA_IMPORT" => "Установить схему",
    "SPRINT_MIGRATION_SCHEMA_EXPORT" => "Создать схему",

]);
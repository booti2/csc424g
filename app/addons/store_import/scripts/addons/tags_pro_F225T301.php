<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$section_id = db_query("INSERT INTO ?:settings_sections (`parent_id`, `edition_type`, `name`, `position`, `type`) VALUES ('0', 'ROOT,ULT:VENDOR', 'tags', '0', 'ADDON')");
$tab_section_id = db_query("INSERT INTO ?:settings_sections (`parent_id`, `edition_type`, `name`, `position`, `type`) VALUES ('$section_id', 'ROOT,ULT:VENDOR', 'general', '0', 'TAB')");

$object_id = db_query("INSERT INTO ?:settings_objects (`edition_type`, `name`, `section_id`, `section_tab_id`, `type`, `value`, `position`, `is_global`, `handler`) VALUES "
    . "('ROOT,ULT:VENDOR', 'tags_for_products', $section_id, $tab_section_id, 'C', 'Y', 0, 'N', '')"
);
db_query("INSERT INTO ?:settings_descriptions (`object_id`, `object_type`, `lang_code`, `value`, `tooltip`) VALUES "
    . "($object_id, 'O', 'EN', 'Tags for products', '')"
);
$object_id = db_query("INSERT INTO ?:settings_objects (`edition_type`, `name`, `section_id`, `section_tab_id`, `type`, `value`, `position`, `is_global`, `handler`) VALUES "
    . "('ROOT,ULT:VENDOR', 'tags_for_pages', $section_id, $tab_section_id, 'C', 'N', 10, 'N', '')"
);
db_query("INSERT INTO ?:settings_descriptions (`object_id`, `object_type`, `lang_code`, `value`, `tooltip`) VALUES "
    . "($object_id, 'O', 'EN', 'Tags for pages', '')"
);

<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * The file is responsible for handing the chat installation
 */
$CI = &get_instance();

add_option('daily_report_enabled', 1);

if (!$CI->db->table_exists(TABLE_DAILYREPORT)) {
    $CI->db->query('CREATE TABLE `' . TABLE_DAILYREPORT . "` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `report_date` date NOT NULL,
  `achievement` int(11) NOT NULL,
  `notified` int(11) NOT NULL DEFAULT '0',
  `staff_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=" . $CI->db->char_set . ';');

$CI->db->query('ALTER TABLE `' . TABLE_DAILYREPORT . '`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `staff_id` (`staff_id`);');

    $CI->db->query('ALTER TABLE `' . TABLE_DAILYREPORT . '`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1');
}

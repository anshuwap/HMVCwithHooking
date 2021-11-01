<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Constant TABLE_STAFF already defined /home/binplusi/public_html/crm.binplus.in/modules/daily_report/daily_report.php 20
ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:06:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:06:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND ' at line 1 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, ((SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 17:36:06 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:08:59 --> Severity: Notice --> Constant TABLE_STAFF already defined /home/binplusi/public_html/crm.binplus.in/modules/daily_report/daily_report.php 20
ERROR - 2020-04-06 17:39:01 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:09:51 --> Severity: Notice --> Constant TABLE_STAFF already defined /home/binplusi/public_html/crm.binplus.in/modules/daily_report/daily_report.php 20
ERROR - 2020-04-06 17:39:52 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Constant TABLE_STAFF already defined /home/binplusi/public_html/crm.binplus.in/modules/daily_report/daily_report.php 20
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:10:01 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:10:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND ' at line 1 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, ((SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 17:40:02 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:12:15 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:12:15 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:12:15 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:12:15 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:12:15 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:12:15 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:12:15 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:12:15 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:12:15 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:12:15 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:12:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND ' at line 1 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, ((SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 17:42:18 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:43:14 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:14:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:02 --> Severity: Notice --> Undefined index: draw /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 249
ERROR - 2020-04-06 17:44:02 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:02 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:02 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:02 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:02 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:02 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:02 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:02 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:03 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:14:24 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:24 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:24 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:24 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:24 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:24 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:24 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:24 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:24 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:14:24 --> Severity: Notice --> Undefined index: draw /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 249
ERROR - 2020-04-06 17:44:25 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:25 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:25 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:25 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:25 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:25 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:25 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:25 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:44:25 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:16:05 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:16:05 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:16:05 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:16:05 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:16:05 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:16:05 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:16:05 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:16:05 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:16:05 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:16:05 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:16:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND ' at line 1 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, ((SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 17:46:07 --> 404 Page Not Found: /index
ERROR - 2020-04-06 17:59:33 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:00:47 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:34:45 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:34:45 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:34:45 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:34:45 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:34:45 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:34:45 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:34:45 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:34:45 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:34:45 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:34:45 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:34:45 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-06 23:34:45 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 23:35:29 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:35:29 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:35:29 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:35:29 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:35:29 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:35:29 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:35:29 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:35:29 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:35:29 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:35:29 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:35:29 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-06 23:35:29 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 18:05:30 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:36:04 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:36:04 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:36:04 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:36:04 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:36:04 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:36:04 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:36:04 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:36:04 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:36:04 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:36:04 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:36:04 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-06 23:36:04 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 18:06:12 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:36:27 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-06 23:36:27 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as total_paid FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    WHERE  ( status IN (1, 2, 3))
    
    ORDER BY deadline IS NULL ASC, deadline ASC
    LIMIT 0, 25
    
ERROR - 2020-04-06 23:37:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:37:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:37:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:37:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:37:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:37:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:37:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:37:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:37:03 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:37:03 --> Severity: Notice --> Undefined index: draw /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 249
ERROR - 2020-04-06 18:07:04 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:07:04 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:07:04 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:07:04 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:07:04 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:07:04 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:07:04 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:07:04 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:07:05 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:39:06 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:39:06 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:39:06 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:39:06 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:39:06 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:39:06 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:39:06 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:39:06 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:39:06 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:39:06 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:39:06 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-06 23:39:06 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paids, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 18:09:10 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:13:27 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:44:13 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:44:13 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:44:13 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:44:13 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:44:13 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:44:13 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:44:13 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:44:13 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:44:13 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:44:13 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:44:13 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-06 23:44:13 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paids, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 18:14:15 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:14:35 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:14:53 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:45:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:45:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:45:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:45:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:45:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:45:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:45:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:45:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:45:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:45:02 --> Severity: Notice --> Undefined index: columns /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 161
ERROR - 2020-04-06 23:45:02 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-06 23:45:02 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paids, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 18:15:03 --> 404 Page Not Found: /index
ERROR - 2020-04-06 23:46:49 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-06 23:46:49 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paids, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-06 18:16:50 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:35:11 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:35:51 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:45:46 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:55:12 --> 404 Page Not Found: /index
ERROR - 2020-04-06 18:57:43 --> 404 Page Not Found: /index
ERROR - 2020-04-06 19:05:26 --> 404 Page Not Found: /index
ERROR - 2020-04-06 19:05:55 --> 404 Page Not Found: /index
ERROR - 2020-04-06 19:23:26 --> 404 Page Not Found: /index
ERROR - 2020-04-06 19:37:56 --> 404 Page Not Found: /index
ERROR - 2020-04-06 19:38:37 --> 404 Page Not Found: /index
ERROR - 2020-04-06 19:48:51 --> 404 Page Not Found: /index

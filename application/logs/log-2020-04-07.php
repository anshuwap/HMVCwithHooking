<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-07 00:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id)' at line 1 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT SUM(SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 00:05:50 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 00:05:50 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 00:15:45 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 00:15:45 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 00:25:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id)' at line 1 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT GROUP_CONCAT(SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 00:27:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id)' at line 1 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT SUM(SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2 GROUP BY invoices.project_id) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 00:35:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id)' at line 1 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT SUM(SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2 GROUP BY invoices.project_id) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 00:35:50 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 00:35:51 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 01:07:55 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 01:07:55 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 01:08:36 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 01:08:36 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 01:09:13 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 01:09:13 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, (SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 01:18:50 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 01:18:50 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, project_cost-IFNULL((SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2), 0) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 06:41:00 --> 404 Page Not Found: /index
ERROR - 2020-04-07 12:11:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_i' at line 2 - Invalid query: SELECT *
WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_id FROM tblstaff_permissions WHERE feature = "invoices" AND capability="view_own")) OR sale_agent=14))
ERROR - 2020-04-07 06:50:05 --> 404 Page Not Found: /index
ERROR - 2020-04-07 12:22:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_i' at line 2 - Invalid query: SELECT *
WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_id FROM tblstaff_permissions WHERE feature = "invoices" AND capability="view_own")) OR sale_agent=14))
ERROR - 2020-04-07 12:22:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_i' at line 2 - Invalid query: SELECT *
WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_id FROM tblstaff_permissions WHERE feature = "invoices" AND capability="view_own")) OR sale_agent=14))
ERROR - 2020-04-07 12:22:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_i' at line 2 - Invalid query: SELECT *
WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_id FROM tblstaff_permissions WHERE feature = "invoices" AND capability="view_own")) OR sale_agent=14))
ERROR - 2020-04-07 12:23:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_i' at line 2 - Invalid query: SELECT *
WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_id FROM tblstaff_permissions WHERE feature = "invoices" AND capability="view_own")) OR sale_agent=14))
ERROR - 2020-04-07 12:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_i' at line 2 - Invalid query: SELECT *
WHERE (((tblinvoices.addedfrom = 14 AND tblinvoices.addedfrom IN (SELECT staff_id FROM tblstaff_permissions WHERE feature = "invoices" AND capability="view_own")) OR sale_agent=14))
ERROR - 2020-04-07 08:24:56 --> 404 Page Not Found: /index
ERROR - 2020-04-07 08:42:34 --> 404 Page Not Found: /index
ERROR - 2020-04-07 09:26:27 --> 404 Page Not Found: admin/Projects_oneview/index
ERROR - 2020-04-07 09:26:40 --> 404 Page Not Found: admin/Projects_one_view/index
ERROR - 2020-04-07 09:30:48 --> 404 Page Not Found: /index
ERROR - 2020-04-07 09:32:31 --> 404 Page Not Found: /index
ERROR - 2020-04-07 15:02:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE (((tblinvoices.addedfrom = 9 AND tblinvoices.addedfrom IN (SELECT staff_id' at line 2 - Invalid query: SELECT *
WHERE (((tblinvoices.addedfrom = 9 AND tblinvoices.addedfrom IN (SELECT staff_id FROM tblstaff_permissions WHERE feature = "invoices" AND capability="view_own")) OR sale_agent=9))
ERROR - 2020-04-07 15:02:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE (((tblinvoices.addedfrom = 9 AND tblinvoices.addedfrom IN (SELECT staff_id' at line 2 - Invalid query: SELECT *
WHERE (((tblinvoices.addedfrom = 9 AND tblinvoices.addedfrom IN (SELECT staff_id FROM tblstaff_permissions WHERE feature = "invoices" AND capability="view_own")) OR sale_agent=9))
ERROR - 2020-04-07 13:13:49 --> 404 Page Not Found: admin/Images/cal_date_over.gif
ERROR - 2020-04-07 13:13:50 --> 404 Page Not Found: admin/Loginphp/index
ERROR - 2020-04-07 13:13:50 --> 404 Page Not Found: /index
ERROR - 2020-04-07 13:13:54 --> 404 Page Not Found: /index
ERROR - 2020-04-07 18:05:45 --> 404 Page Not Found: /index
ERROR - 2020-04-07 23:36:37 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 23:36:37 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, project_cost-IFNULL((SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2), 0) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    WHERE  ( status IN (1, 2, 3))
    
    ORDER BY deadline IS NULL ASC, deadline ASC
    LIMIT 0, 25
    
ERROR - 2020-04-07 23:36:40 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 23:36:40 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, project_cost-IFNULL((SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2), 0) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 23:38:21 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 23:38:21 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, project_cost-IFNULL((SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2), 0) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 18:08:22 --> 404 Page Not Found: /index
ERROR - 2020-04-07 23:38:59 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 23:38:59 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, project_cost-IFNULL((SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2), 0) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, ' ', lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids
    FROM tblprojects
    JOIN tblclients ON tblclients.userid = tblprojects.clientid
    
    
    
    
    
    
ERROR - 2020-04-07 18:09:00 --> 404 Page Not Found: /index
ERROR - 2020-04-07 23:42:48 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-07 23:42:48 --> Query error: Subquery returns more than 1 row - Invalid query: SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags, start_date, deadline, project_cost, project_cost-IFNULL((SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2), 0) as total_paid, (SELECT GROUP_CONCAT(CONCAT(firstname, " ", lastname) SEPARATOR ",") FROM tblproject_members JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids FROM tblprojects JOIN tblclients ON tblclients.userid = tblprojects.clientid
ERROR - 2020-04-07 18:12:53 --> 404 Page Not Found: /index
ERROR - 2020-04-07 23:45:26 --> Severity: Notice --> Undefined index: draw /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 260
ERROR - 2020-04-07 18:15:29 --> 404 Page Not Found: /index
ERROR - 2020-04-07 18:15:29 --> 404 Page Not Found: /index
ERROR - 2020-04-07 18:15:29 --> 404 Page Not Found: /index
ERROR - 2020-04-07 18:15:30 --> 404 Page Not Found: /index
ERROR - 2020-04-07 18:15:30 --> 404 Page Not Found: /index
ERROR - 2020-04-07 18:15:30 --> 404 Page Not Found: /index
ERROR - 2020-04-07 18:15:30 --> 404 Page Not Found: /index
ERROR - 2020-04-07 18:15:30 --> 404 Page Not Found: /index
ERROR - 2020-04-07 18:15:31 --> 404 Page Not Found: /index
ERROR - 2020-04-07 18:30:45 --> 404 Page Not Found: /index
ERROR - 2020-04-07 19:07:21 --> 404 Page Not Found: /index
ERROR - 2020-04-07 19:07:21 --> 404 Page Not Found: /index
ERROR - 2020-04-07 19:07:21 --> 404 Page Not Found: /index
ERROR - 2020-04-07 19:07:21 --> 404 Page Not Found: /index
ERROR - 2020-04-07 19:07:21 --> 404 Page Not Found: /index
ERROR - 2020-04-07 19:07:21 --> 404 Page Not Found: /index
ERROR - 2020-04-07 19:07:21 --> 404 Page Not Found: /index
ERROR - 2020-04-07 19:07:21 --> 404 Page Not Found: /index

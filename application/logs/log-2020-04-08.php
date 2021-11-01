<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-08 00:00:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvo' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, 
    (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags,
    start_date,
    deadline,
    project_cost, 
    IFNULL(
        SELECT (SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2, 0
    ) as total_paid,
    (SELECT GROUP_CONCAT(CONCAT(firstname, " ", lastname) SEPARATOR ",") FROM tblproject_members
    JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids FROM tblprojects JOIN tblclients ON tblclients.userid = tblprojects.clientid
ERROR - 2020-04-08 00:04:39 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-08 00:04:39 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, 
    (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags,
    start_date,
    deadline,
    project_cost, 
    IFNULL(
        (SELECT (SELECT SUM(tblinvoicepaymentrecords.amount) FROM tblinvoicepaymentrecords WHERE tblinvoicepaymentrecords.invoiceid=tblinvoices.id) as tbls FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2), 0
    ) as total_paid,
    (SELECT GROUP_CONCAT(CONCAT(firstname, " ", lastname) SEPARATOR ",") FROM tblproject_members
    JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids FROM tblprojects JOIN tblclients ON tblclients.userid = tblprojects.clientid
ERROR - 2020-04-08 00:05:46 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-08 00:05:46 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, 
    (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags,
    start_date,
    deadline,
    project_cost, 
    IFNULL(
        (SELECT id FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2), 0
    ) as total_paid,
    (SELECT GROUP_CONCAT(CONCAT(firstname, " ", lastname) SEPARATOR ",") FROM tblproject_members
    JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids FROM tblprojects JOIN tblclients ON tblclients.userid = tblprojects.clientid
ERROR - 2020-04-08 00:19:44 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-08 00:19:44 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, 
    (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags,
    start_date,
    deadline,
    project_cost, 
    IFNULL(
        (SELECT id FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2), 0
    ) as total_paid,
    (SELECT GROUP_CONCAT(CONCAT(firstname, " ", lastname) SEPARATOR ",") FROM tblproject_members
    JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids FROM tblprojects JOIN tblclients ON tblclients.userid = tblprojects.clientid
ERROR - 2020-04-08 00:36:39 --> Severity: Warning --> mysqli::query(): (21000/1242): Subquery returns more than 1 row /home/binplusi/public_html/crm.binplus.in/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-04-08 00:36:39 --> Query error: Subquery returns more than 1 row - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS tblprojects.id as id, name, CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END as company, 
    (SELECT GROUP_CONCAT(name SEPARATOR ",") FROM tbltaggables JOIN tbltags ON tbltaggables.tag_id = tbltags.id WHERE rel_id = tblprojects.id and rel_type="project" ORDER by tag_order ASC) as tags,
    start_date,
    deadline,
    project_cost, 
    IFNULL(
        (SELECT id FROM tblinvoices WHERE tblinvoices.project_id= tblprojects.id AND tblinvoices.status=2), 0
    ) as total_paid,
    (SELECT GROUP_CONCAT(CONCAT(firstname, " ", lastname) SEPARATOR ",") FROM tblproject_members
    JOIN tblstaff on tblstaff.staffid = tblproject_members.staff_id WHERE project_id=tblprojects.id ORDER BY staff_id) as members, status ,clientid,(SELECT GROUP_CONCAT(staff_id SEPARATOR ",") FROM tblproject_members WHERE project_id=tblprojects.id ORDER BY staff_id) as members_ids FROM tblprojects JOIN tblclients ON tblclients.userid = tblprojects.clientid
ERROR - 2020-04-08 00:37:20 --> Severity: Notice --> Undefined index: draw /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 262
ERROR - 2020-04-08 00:44:01 --> Severity: Notice --> Undefined index: draw /home/binplusi/public_html/crm.binplus.in/application/helpers/datatables_helper.php 262
ERROR - 2020-04-08 00:44:01 --> Severity: Error --> Cannot redeclare _d() (previously declared in /home/binplusi/public_html/crm.binplus.in/application/helpers/general_helper.php:449) /home/binplusi/public_html/crm.binplus.in/application/views/admin/tables/projects_oneview.php 114

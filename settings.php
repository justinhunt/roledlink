<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Roled Image settings.
 *
 * @package   tinymce_roledlink
 * @copyright 2013 Justin Hunt {@link http://www.poodll.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

   $options = array('0' => new lang_string('usecapabilities', 'tinymce_roledlink'),
			'1' => new lang_string('usecheckboxes', 'tinymce_roledlink'));

				
	$settings->add(new admin_setting_configselect('tinymce_roledlink/role_eval',
					   get_string('roleeval', 'tinymce_roledlink'),
					   get_string('roleevaldetails', 'tinymce_roledlink'), 0,$options));
	
	// Section for evaluating by checkbox
	$settings->add(new admin_setting_heading('evalcheckboxheading', '', get_string('evalcheckboxheading', 'tinymce_roledlink')));

                
// Show Permissions
	$settings->add(new admin_setting_configcheckbox('tinymce_roledlink/allow_guest',
					   get_string('allowguest', 'tinymce_roledlink'),
					   get_string('allowguestdetails', 'tinymce_roledlink'), 0));
					   
	$settings->add(new admin_setting_configcheckbox('tinymce_roledlink/allow_frontpage',
				   get_string('allowfrontpage', 'tinymce_roledlink'),
				   get_string('allowfrontpagedetails', 'tinymce_roledlink'), 0));
	
	$settings->add(new admin_setting_configcheckbox('tinymce_roledlink/allow_authuser',
				   get_string('allowauthuser', 'tinymce_roledlink'),
				   get_string('allowauthuserdetails', 'tinymce_roledlink'), 0));
					   
	$settings->add(new admin_setting_configcheckbox('tinymce_roledlink/allow_student',
					   get_string('allowstudent', 'tinymce_roledlink'),
					   get_string('allowstudentdetails', 'tinymce_roledlink'), 0));
					   
	$settings->add(new admin_setting_configcheckbox('tinymce_roledlink/allow_noneditteacher',
					   get_string('allownoneditteacher', 'tinymce_roledlink'),
					   get_string('allownoneditteacherdetails', 'tinymce_roledlink'), 1));
					   
	$settings->add(new admin_setting_configcheckbox('tinymce_roledlink/allow_teacher',
					   get_string('allowteacher', 'tinymce_roledlink'),
					   get_string('allowteacherdetails', 'tinymce_roledlink'), 1));
	
	$settings->add(new admin_setting_configcheckbox('tinymce_roledlink/allow_manager',
					   get_string('allowmanager', 'tinymce_roledlink'),
					   get_string('allowmanagerdetails', 'tinymce_roledlink'), 1));
	
	$settings->add(new admin_setting_configcheckbox('tinymce_roledlink/allow_coursecreator',
					   get_string('allowcoursecreator', 'tinymce_roledlink'),
					   get_string('allowcoursecreatordetails', 'tinymce_roledlink'), 1));
	
	$settings->add(new admin_setting_configcheckbox('tinymce_roledlink/allow_admin',
					   get_string('allowadmin', 'tinymce_roledlink'),
					   get_string('allowadmindetails', 'tinymce_roledlink'), 1));				   
	
					   
}

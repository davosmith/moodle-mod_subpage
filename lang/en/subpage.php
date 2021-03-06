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
 * Strings for component 'scorm', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @author Dan Marsden <dan@danmarsden.com>
 * @package   subpage
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['modulename'] = 'Subpage';
$string['modulenameplural'] = 'Subpages';
$string['pluginname'] = 'Subpage';
$string['pluginadministration'] = 'Subpage administration';

$string['sectionlimitexceeded'] = 'There is a limit on the number of subpage sections permitted per course. You cannot add more subpage sections to any subpage on this course.';
$string['unspecifysubpageid'] = 'Unspecified subpage id';
$string['addsection'] = 'Add section';
$string['sectiondeleteconfirm'] = 'Are you sure you want to delete section {$a}';
$string['movetopage'] = 'Move items to this page';
$string['movefrompage'] = 'Move items from this page';
$string['moveitems'] = 'Move items';
$string['moveselected'] = 'Move selected items';
$string['topsection'] = 'Top section';
$string['newsection'] = 'New section';
$string['coursemainpage'] = 'Course main page';
$string['anothersection'] = 'Another section on this subpage';
$string['moveto'] = 'Move to';
$string['section'] = 'Section';
$string['nomodulesselected'] = 'No modules were selected to move.';
$string['sectionnotcreatedorexisting'] = 'Section doesn\'t exist or can\'t be created.';
$string['modulenotfound'] = 'Module not found.';
$string['nomodules'] = 'No modules were found on this subpage to move.';

$string['modulename_help'] = '<p>A subpage is a smaller version of the main course page.  You can create sections and add activities to group them together.</p>';

$string['enablesharing'] = 'Enable sharing';
$string['enablesharing_help'] = 'When you choose to enable sharing, anyone can add a copy of this page as a shared subpage to any course.

When enabling sharing you must enter an ID number in the field below. This ID number can then be used to create copies of the page.

Sharing only works for items of the following types: Label, Heading, File, and URL. Other items will not be shared.

Items are also not shared if they contain any type of access restriction (date, grouping, etc) or have completion tickboxes.';
$string['error_noidnumber'] = 'When sharing is enabled, you must enter an ID number';
$string['error_duplicateidnumber'] = 'The ID number must be unique across the system; choose something different';
$string['error_sharingused'] = 'Cannot disable sharing because there is already a shared subpage that copies this page';
$string['stealth'] = 'Stealth';
$string['unstealth'] = 'Un-stealth';
$string['error_deletingsection'] = 'Can not delete this section due to it still containing content';
$string['error_deletingsubpage'] = 'This subpage cannot be deleted because it still contains activities. Before deleting this subpage, you must delete or move away the activities inside it.';
$string['subpage:view'] = 'View subpages';

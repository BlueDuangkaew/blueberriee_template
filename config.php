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
 * Blueberriee Theme config.
 *
 * @package   theme_blueberriee
 * @copyright 2023 Kadpon Duangkaew <kduangka@cmkl.ac.th>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */                                                                                       

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();

//Core requirements
$THEME->name = 'blueberriee';
$THEME->parents = array(
    'boost',
);
$THEME->sheets = array(
    'styles',
);
$THEME->haseditswitch = true;
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
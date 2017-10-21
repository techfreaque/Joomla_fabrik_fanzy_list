<?php
/**
 * Fabrik List Template: Div CSS
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2015 fabrikar.com - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

header('Content-type: text/css');
$c = $_REQUEST['c'];
$buttonCount = (int) $_REQUEST['buttoncount'];
$buttonTotal = $buttonCount === 0 ? '100%' : 30 * $buttonCount ."px";
echo "



/** Hide the checkbox in each record*/

#listform_$c .fabrikList input[type=checkbox] {
	display: none;
}
#listform_$c .well {
	position: relative;
}

#listform_$c .fabrik_action {
	position: absolute;
	top: 10px;
	right: 10px;
}

.filtertable_horiz {
	display: inline-block;
	vertical-align: top;
}
.fabrikNav {
    float: inline-start;
}

.fabrik_groupdata > .row-fluid {
	float:none;
	width:auto!important;
}


.fabrikNav {

    width: 100%;
}

.fabrik_groupdata {
    -moz-column-count: 3;
    -webkit-column-count: 3;
    column-count: 3;
    column-gap: 20px;
}


.groupdataMsg {
	width: 100%;
}

.fabrik_groupdata .row-fluid {
    page-break-inside: avoid;           /* Theoretically FF 20+ */
    break-inside: avoid-column;         /* IE 11 */
    display:table; 
 }
 @media (max-width: 1000px) {

.fabrik_groupdata {
	-moz-column-count: 2;
	-webkit-column-count: 2;
	column-count: 2;
	}
}
 @media (max-width: 800px) {

.fabrik_groupdata {
	-moz-column-count: 1;
	-webkit-column-count: 1;
	column-count: 1;
	}
}
";?>

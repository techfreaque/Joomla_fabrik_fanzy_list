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

#listform_$c .fabrik_actions .fabrik_view {
	display:none
} 

#listform_2_com_fabrik_2 .fabrik_action {

    top: 5px!important;
    right: 5px!important;
}

.nav.nav-pills.pull-left {
	float: none;
}

.fabrikFilterContainer > .row-fluid > .span6 {
    width: 100%;
    display: contents;
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

.fabrikDataContainer > .fabrikList {
    -moz-column-count: 3;
    -webkit-column-count: 3;
    column-count: 3;
    column-gap: 20px;
}

.well.span12 {
	padding: 0!important;
	border: none;
	width: 100%;
	page-break-inside: avoid;
   display: table;
   margin: auto 0 20px 0;
	background: white;
}

.groupdataMsg {
	width: 100%;
}

.fabrik_groupdata .row-fluid {
    page-break-inside: avoid;
    break-inside: avoid-column;
    display:table; 
}
 
.fabrik_row.row-striped > .row-fluid {
	padding: 0;
	margin: 0;
	}
 
 .row-fluid::before, .row-fluid::after {
    content: unset!important;
}

.flax-wrapper > .fabrikForm.fabrikDetails > .fabrikGroup.form-horizontal > *,
.flax-wrapper > .fabrikForm.fabrikDetails > .fabrikGroup.form-horizontal > * > * {
	border: none;
}

.list-striped li:hover, .list-striped dd:hover, .row-striped .row:hover, .row-striped .row-fluid:hover {
    background-color: inherit!important;
}

.row-striped .row-fluid  {
	padding: 0!important;
}

.plg-display {
	background-color: white;
}

.row-striped .row-fluid:hover, .row-striped .row-fluid:hover * {
	background-color: white;
	color: inherit;
}


@media (max-width: 1000px) {

	.fabrikDataContainer > .fabrikList {
	-moz-column-count: 2;
	-webkit-column-count: 2;
	column-count: 2;
	}
}	

 @media (max-width: 800px) {

	.fabrikDataContainer > .fabrikList {
	-moz-column-count: 1;
	-webkit-column-count: 1;
	column-count: 1;
	}
}



";?>

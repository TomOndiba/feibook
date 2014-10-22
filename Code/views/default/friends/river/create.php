<?php
/**
 * Elgg create new friend river item
 *
 * @package Elgg
 *
 * @uses $vars['entity']
 */
$performed_by = get_entity($vars['item']->subject_guid);
$performed_on = get_entity($vars['item']->object_guid);

$url = "<a href=\"{$performed_by->getURL()}\">{$performed_by->name}</a>";
$string = sprintf(elgg_echo("friends:river:add"),$url) . " ";
$string .= "<a href=\"{$performed_on->getURL()}\">{$performed_on->name}</a>";
$string .= "<div class=\"river_content_display\">";
$string .= "<table><tr><td>" . elgg_view("profile/icon",array('entity' => $performed_by, 'size' => 'small')) . "</td>";
$string .= "<td><div class=\"following_icon\"></div></td><td>" . elgg_view("profile/icon",array('entity' => $performed_on, 'size' => 'small')) . "</td></tr></table>";
$string .= "</div>";

echo $string;
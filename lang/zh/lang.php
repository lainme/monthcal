<?php
/**
 * English language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Milosz Galazka <milosz@sleeplessbeastie.eu>
 */
if ($conf['lang'] == 'zh') {
    setlocale(LC_TIME, 'zh_CN.UTF-8');
}

// months
$lang['monthcal_months'] = array(
				'一月',
				'二月',
				'三月',
				'四月',
				'五月',
				'六月',
				'七月',
				'八月',
				'九月',
				'十月',
				'十一月',
				'十二月'
				);

// weekdays
$lang['monthcal_weekdays'] = array('一','二','三','四','五','六','日');
$lang['monthcal_week'] = "周";
$lang['monthcal_week_link'] = "%Y年第%W周";

?>

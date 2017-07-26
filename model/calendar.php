<?php

class calendar extends ActiveRecord\Model {


	/**
	 * 获取某一天的日期类型
	 * 
	 * @author: chenliujin <liujin.chen@qq.com>
	 * @since: 2017-07-27
	 */
	function calendar_date_type($date) {
		//calendar.calendar_status = 1
		//calendar_special.calendar_special_date = $date
		//return $calendar_date_type
		//or 返回 1（工作日：周一至周五） / 2（非工作日：周六和周日）
	}
}

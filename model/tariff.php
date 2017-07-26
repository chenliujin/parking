<?php

class tariff extends ActiveRecord\Model {

	/**
	 * 计算停车费用
	 *
	 * @author: chenliujiin <liujin.chen@qq.com>
	 * @since: 2017-07-27
	 * 
	 * @$place_code: 泊位编号
	 * @$parking_starttime: 停车开始时间
	 * @$parking_minute: 停车时长（单位：分钟）
	 */
	static function parking_price($city_id, $place_code, $parking_starttime, $parking_minute) {
		//
	}
}

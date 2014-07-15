<?php
	Configure::write('Cache.default', array('prefix'=>''));
	Configure::write('Cache.short', array('duration'=>60, 'prefix'=>'short_'));
	Configure::write('Cache.hourly', array('duration'=>3600, 'prefix'=>'hourly_'));
	Configure::write('Cache.daily', array('duration'=>86400, 'prefix'=>'daily_'));
	Configure::write('Cache.weekly', array('duration'=>604800, 'prefix'=>'weekly_'));
<?php

namespace App\Http\Utilities;

class City{

	protected static $cities = [
	'大多地区 (GTA)' => 'gta',
	'东约克 (East York)' => 'eastyork',
	'北约克 (North York)' => 'northyork',
	'怡陶碧谷 (Etobicoke)' => 'etobicoke',
	'士嘉堡 (Scarborough)' => 'scarborough',
	'万锦 (Markham)' => 'markham',
	'密西沙加 (Mississauga)' => 'mississauga',
	'旺市 (Vaughan)' => 'vaughan',
	'列治文山 (Richmond Hill)' => 'richmondhill',
	'康山 (Thornhill)' => 'thornhill',
	'宾顿 (Brampton)' => 'brampton',
	'皮克灵 (Pickering)' => 'pickering',
	'艾加科斯 (Ajax)' => 'ajax',
	'惠特比 (Whitby)' => 'whitby',
	'奥沙华 (Oshawa)' => 'oshawa',
	'新市 (Newmarket)' => 'newmarket',
	'奥罗拉 (Aurora)' => 'aurora',
	'奥克维尔 (Oakville)' => 'oakville',
	'伯灵顿 (Burlington)' => 'burlington',
	'弥敦 (Milton)' => 'milton',
	'史托维尔 (Stouffville)' => 'stouffville',
	'其他地区 (Other)' => 'other',
	];

	public static function all(){
		return static::$cities;
	}
}

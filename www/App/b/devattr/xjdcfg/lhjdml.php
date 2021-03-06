<?php
$GLOBALS['lhjdmlJson'] = array(
	'page'  => 'xjd',
	'open'  => array( 0=>ATTRCFG_XF_OPEN_GUAN, 1=>ATTRCFG_XF_OPEN_KAI ),

	'select' => array(
		'yl' => array(
			'name' => '音量',
			'icon' => 'ml',
			'value' =>array( 
					0xE4=>'音量1',
					0xE8=>'音量2',
					0xEB=>'音量3',
					0xEE=>'音量4',
			),
		),
		'gq' => array(
			'name' => '歌曲',
			'icon' => 'bjyy',
			'value' =>array( 
				0 => '欢迎光临（国）',
				1 => '欢迎光临（英）',
				2 => '报警声',
				3 => '警笛声',
				4 => '门铃声',
				5 => '西敏寺钟声',
				6 => '致爱丽丝',
				7 => '叮咚叮咚',
				8 => '秋日私语',
				9 => '斗牛士之歌',

				10 => '老婆老婆我爱你',
				11 => '爱的罗曼史',
				12 => '走在乡间小路',
				13 => '小蜜蜂',
				14 => '上海滩',
				15 => '小舞曲',
				16 => '土耳其进行曲',
				17 => '法国抒情小调',
				18 => '梁山伯与祝英台',
				19 => '顽皮的小猫',

				20 => '我心永恒',
				21 => '匈牙利舞曲',
				22 => '恭喜恭喜你',
				23 => '红河谷',
				24 => '船歌小调',
				25 => '圣诞歌',
				26 => '阿拉木汗',
				27 => '好日子',
				28 => '美国歌谣2',
				29 => '美国歌谣3',
	

				30 => '圣诞快乐',
				31 => '哆啦A梦',
				32 => '民歌小调',
				33 => 'MerryChristmas',
				34 => '新年好',
				35 => '断点',
				36 => '你是我的情人',
				37 => '祝你生日快乐',
				38 => 'memory',
				39 => '土耳其进行曲',


				40 => '船歌小调',
				41 => '恭喜发财',
				42 => '梁山伯与祝英台',
				43 => '快乐的劳作',
				44 => '365个祝福',
				45 => '明朗的清晨',
				46 => '沧海一声笑',
				47 => '猪八戒背媳妇',
				48 => '吻别',
				49 => '步步高音乐',


				50 => '世界第一等',
				51 => '走在乡间小路',
				52 => '蓝色多瑙河',
				53 => '梦中的婚礼',
				),
		),
	),
	'selectIndex'=> array(
			'hide'=>array(  //选项折叠显示的
				0 => array(  //折叠的分区域显示，一个区域里包含多个，有个区域名
					'area' => '音量', //区域名有可能为空
					'item' => array('yl'),
				),
			),
			//选项展开显示的
			'show' => array('gq'),
	),
);
 
?>
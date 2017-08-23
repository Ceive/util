<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 23.05.2016
 * Time: 2:23
 */
namespace Ceive\Util {

	/**
	 * Class System
	 * @package Ceive\Util
	 */
	class System{

		/** @var array  */
		protected static $internalIds = [];

		/**
		 * @param string $prefix
		 * @param null $context
		 * @return mixed
		 */
		public static function uniqSysId($prefix='',$context = null){
			if($context===null){
				$context = 'global';
			}
			if(!isset(self::$internalIds[$context])){
				self::$internalIds[$context] = 0;
			}
			return $prefix . (++self::$internalIds[$context]);
		}

	}
}


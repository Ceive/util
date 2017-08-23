<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 15.10.2016
 * Time: 19:07
 */
namespace Ceive\Util\PropContainer {
	
	/**
	 * Interface PropContainerConfigInterface
	 * @package Ceive\Util
	 */
	interface PropContainerConfigInterface{

		/**
		 * @param $key
		 * @param null $default
		 * @param bool $createLinkIfDefault
		 * @return null
		 */
		public function &getConfig($key,$default = null, $createLinkIfDefault = false);

		/**
		 * @param $key
		 * @param $value
		 */
		public function setConfig($key,$value);

		/**
		 * @param $key
		 * @return mixed
		 * @throws RequiredPropException
		 */
		public function requireConfig($key);

		/**
		 * @param $key
		 * @return bool
		 */
		public function hasConfig($key);

		/**
		 * @param $key
		 * @return $this
		 */
		public function rmConfig($key);

	}
}


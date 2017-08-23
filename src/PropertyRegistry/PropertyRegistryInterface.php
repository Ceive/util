<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 22.05.2016
 * Time: 20:17
 */
namespace Ceive\Util\PropertyRegistry {

	/**
	 * Interface PropertyRegistryInterface
	 * @package Ceive\Data\Record
	 */
	interface PropertyRegistryInterface{

		/**
		 * @param $key
		 * @param $value
		 * @return $this
		 */
		public function setProperty($key, $value);

		/**
		 * @param $key
		 * @return bool
		 */
		public function hasProperty($key);

		/**
		 * @param $key
		 * @return mixed
		 */
		public function getProperty($key);

	}
}


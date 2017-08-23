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
	 * Interface PropertyRegistryRemovableInterface
	 * @package Ceive\Data\Record
	 */
	interface PropertyRegistryRemovableInterface{

		/**
		 * @param $key
		 * @return mixed
		 */
		public function removeProperty($key);

	}
}


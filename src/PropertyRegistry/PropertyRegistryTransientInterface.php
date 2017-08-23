<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 22.05.2016
 * Time: 20:20
 */
namespace Ceive\Util\PropertyRegistry {

	/**
	 * Interface PropertyRegistryTransientInterface
	 * @package Ceive\Data\Record
	 */
	interface PropertyRegistryTransientInterface{

		/**
		 * @param null $field
		 * @return bool
		 */
		public function hasChangesProperty($field = null);

		/**
		 * @return string[]
		 */
		public function getChangedProperties();

	}
}


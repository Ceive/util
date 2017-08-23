<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 25.04.2016
 * Time: 7:47
 */
namespace Ceive\Util\Named {

	/**
	 * Interface NamedAlternatesInterface
	 * @package Ceive\Basic
	 */
	interface NamedAlternatesInterface extends NamedInterface{

		/**
		 * @param $name
		 * @return bool
		 */
		public function isName($name);

	}
}


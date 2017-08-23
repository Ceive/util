<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 05.10.2016
 * Time: 12:42
 */
namespace Ceive\Util\Buffer {

	/**
	 * Interface BufferInterface
	 * @package Ceive\Util\Communication\Hypertext
	 */
	interface BufferInterface{

		/**
		 * @param $string
		 * @return mixed
		 */
		public function write($string);

		/**
		 * @return mixed
		 */
		public function clear();

		/**
		 * @return mixed
		 */
		public function contents();

	}
}


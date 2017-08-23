<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 05.10.2016
 * Time: 13:34
 */
namespace Ceive\Util\Buffer {

	/**
	 * Interface BufferAwareInterface
	 * @package Ceive\Util\Communication\Hypertext
	 */
	interface BufferAwareInterface{

		/**
		 * @param BufferInterface|null $buffer
		 * @return $this
		 */
		public function setBuffer(BufferInterface $buffer = null);

		/**
		 * @return BufferInterface
		 */
		public function getBuffer();

	}
}


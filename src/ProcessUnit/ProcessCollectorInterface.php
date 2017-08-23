<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 17.10.2016
 * Time: 17:44
 */
namespace Ceive\Util\ProcessUnit {

	/**
	 * Interface ProcessCollectorInterface
	 * @package Ceive\Util\ProcessUnit
	 */
	interface ProcessCollectorInterface extends \Countable{

		/**
		 * @param ProcessInterface $process
		 * @return $this
		 */
		public function push(ProcessInterface $process);

		/**
		 * @return ProcessInterface
		 */
		public function last();

		/**
		 * @return ProcessInterface
		 */
		public function first();

		/**
		 * @return int
		 */
		public function count();

		/**
		 * @return ProcessInterface[]
		 */
		public function getCollection();
	}
}


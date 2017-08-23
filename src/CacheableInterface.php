<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 17.07.2016
 * Time: 2:35
 */
namespace Ceive\Util {

	/**
	 * Interface CacheableInterface
	 * @package Ceive\Util
	 */
	interface CacheableInterface{

		/**
		 * Cache this object clear.
		 * @return $this
		 */
		public function cacheClear();

		/**
		 * Enables cache in this object context.
		 * @param bool $cacheable
		 * @return $this
		 */
		public function setCacheable($cacheable = true);

		/**
		 * @return bool
		 */
		public function isCacheable();

	}
}


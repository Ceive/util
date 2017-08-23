<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 05.10.2016
 * Time: 13:22
 */
namespace Ceive\Util\Buffer {


	/**
	 * Class Buffer
	 * @package Ceive\Util\Buffer
	 */
	class Buffer implements BufferInterface{

		/** @var  string */
		protected $data;

		/**
		 * @param $string
		 * @return mixed
		 */
		public function write($string){
			$this->data .= $string;
		}

		/**
		 * @return void
		 */
		public function clear(){
			$this->data = '';
		}

		/**
		 * @return mixed
		 */
		public function contents(){
			return $this->data;
		}
	}
}


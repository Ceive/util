<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 26.03.2016
 * Time: 22:20
 */
namespace Ceive\Util {

	/**
	 * Class Memory
	 * @package Ceive\Util
	 */
	class Memory implements \Serializable{

		/**
		 * @param $key
		 * @param null $default
		 * @return mixed
		 */
		public function get($key, $default = null){
			return isset($this->{$key})?$this->{$key}:$default;
		}

		/**
		 * @param $key
		 * @param $value
		 */
		public function __set($key, $value){
			$this->{$key} = $value;
		}

		/**
		 * @param $key
		 * @return mixed
		 */
		public function __get($key){
			return isset($this->{$key})?$this->{$key}:null;
		}

		/**
		 * @param $key
		 * @return bool
		 */
		public function __isset($key){
			return isset($this->{$key});
		}

		/**
		 * @param $key
		 */
		public function __unset($key){
			unset($this->{$key});
		}

		/**
		 * @return array
		 */
		public function toArray(){
			$a = [];
			foreach($this as $property => $value){
				$a[$property] = $value;
			}
			return $a;
		}

		/**
		 * @param array $array
		 */
		public function fromArray(array $array){
			foreach($array as $property => $value){
				$this[$property] = $value;
			}
		}

		/**
		 * @return string
		 */
		public function serialize(){
			return serialize($this->toArray());
		}

		/**
		 * @param string $serialized
		 */
		public function unserialize($serialized){
			$unSerialized = unserialize($serialized);
			$this->fromArray($unSerialized);
		}




	}
}


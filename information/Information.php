<?php
class CartDetails {
	private $name;
	private $price;
	private $pic;
	public function getName() {
		return $this->name;
	}
	public function getPrice() {
		return $this->price;
	}
	public function getPic() {
		return $this->pic;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function setPrice($price) {
		$this->price = $price;
	}
	public function setPic($pic) {
		$this->pic = $pic;
	}
}
?>
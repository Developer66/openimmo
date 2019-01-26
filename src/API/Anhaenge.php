<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Anhaenge {

	/**
	 * @var Anhang[]
	 */
	protected $anhang;

	/**
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @var UserDefinedSimplefield[]
	 */
	protected $userDefinedSimplefield;

	/**
	 * Returns array of Anhang[]
	 *
	 * @return array
	 */
	public function getAnhang(): array {
		return $this->anhang;
	}

	/**
	 * Returns array of UserDefinedAnyfield[]
	 *
	 * @return array
	 */
	public function getUserDefinedAnyfield(): array {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend[]
	 *
	 * @return array
	 */
	public function getUserDefinedExtend(): array {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield[]
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield(): array {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @param array $anhang Setter for anhang
	 * @return Anhaenge
	 */
	public function setAnhang(array $anhang) {
		$this->anhang = $anhang;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Anhaenge
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Anhaenge
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Anhaenge
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}

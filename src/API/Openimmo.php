<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Openimmo {

	/**
	 * @var Anbieter[]
	 */
	protected $anbieter;

	/**
	 * @var Uebertragung
	 */
	protected $uebertragung;

	/**
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @var UserDefinedSimplefield[]
	 */
	protected $userDefinedSimplefield;

	/**
	 * Returns array of Anbieter[]
	 *
	 * @return array
	 */
	public function getAnbieter(): array {
		return $this->anbieter;
	}

	/**
	 * @return Uebertragung
	 */
	public function getUebertragung(): Uebertragung {
		return $this->uebertragung;
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
	 * Returns array of UserDefinedSimplefield[]
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield(): array {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @param array $anbieter Setter for anbieter
	 * @return Openimmo
	 */
	public function setAnbieter(array $anbieter) {
		$this->anbieter = $anbieter;
		return $this;
	}

	/**
	 * @param Uebertragung $uebertragung Setter for uebertragung
	 * @return Openimmo
	 */
	public function setUebertragung(Uebertragung $uebertragung) {
		$this->uebertragung = $uebertragung;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Openimmo
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Openimmo
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}

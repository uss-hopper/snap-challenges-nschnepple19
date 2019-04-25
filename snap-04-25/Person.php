<?php

namespace Nschnepple\SnapChallenge;

require_once(dirname(__DIR__));

use http\Exception\BadQueryStringException;
use Ramsey\Uuid\Uuid;

class Person {
	use ValidateUuid;
	/**
	 * id for this person, this is the primary key
	 *
	 * @var
	 */
	private $personId;

	/**
	 * email for this person
	 *
	 * @var string $authorEmail
	 */
	private $personEmail;


	/**
	 * accessor method for personId
	 *
	 * @return mixed
	 */
	public function getPersonId() {
		return $this->personId;
	}


	/**
	 * mutator method for personId
	 *
	 */

	/**
	 * @param mixed $personId
	 */
	public function setPersonId($newPersonId): void {
		try {
			$uuid = self::validateUuid($newPersonId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {

			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		$this->personId = $uuid;
	}


	/**
	 * accessor method for email
	 *
	 * @return string value of email
	 */

	/**
	 * @return string
	 */
	public function getPersonEmail(): string {
		return $this->personEmail;
	}

	/**
	 * mutator method for this persons email
	 *
	 * @param string $newPersonEmail new value of email
	 * @throws \InvalidArgumentException if $newEmail is not a valid email or insecure
	 * @throws \RangeException if $newEmail is > 128 characters
	 * @throws \TypeError if $newEmail is not a string
	 */

	public function setPersonEmail(string  $newPersonEmail): void {
		$newPersonEmail = trim($newPersonEmail);
		$newPersonEmail = filter_var($newPersonEmail, FILTER_VALIDATE_EMAIL);
		if(empty($newPersonEmail) === true) {
			throw(new \InvalidArgumentException(" required field left empty"));
		}
		if(strlen($newPersonEmail) > 128) {
			throw(new \RangeException("email is too big"));
		}
		$this->personEmail = $newPersonEmail;
	}
}
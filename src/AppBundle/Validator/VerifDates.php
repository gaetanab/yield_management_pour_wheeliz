<?php

namespace AppBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */

class VerifDates extends Constraint
{
	public $message = "La date de fin doit apparaître après la date de début";	
}

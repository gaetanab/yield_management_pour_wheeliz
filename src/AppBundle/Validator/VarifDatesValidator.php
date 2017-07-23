<?php

namespace AppBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class VerifDatesValidator extends ConstraintValidator
{
	public function validate($value, Constraint $constraint){
		if(strtotime($value1) > strtotime($value2)){
			
		}
		
		$this->context->addViolation($constraint->message);
	}
}

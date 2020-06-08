<?php namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ReviewTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('rating', 'A rating is required')
            ->notEmpty('email', 'An email is required')
            ->notEmpty('titolo', 'An title is required')
            ->notEmpty('recensione', 'A text code is required');
     
    }

}

?>
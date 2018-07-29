<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 03/07/18
 * Time: 19:20
 */

namespace App\Http\Repository;


class Repository implements RepositoryInterface
{

    protected $errors;

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors($errorMessage)
    {
        $this->errors[] = $errorMessage;
    }

}
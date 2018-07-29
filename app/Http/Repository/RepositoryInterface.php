<?php
/**
 * Created by: William Tahira Rabaldeli Santos
 * Company: 2mundos.net
 * Date: 03/07/18
 * Time: 19:20
 */

namespace App\Http\Repository;


interface RepositoryInterface
{
    public function getErrors();
    public function setErrors($errorMessage);
}
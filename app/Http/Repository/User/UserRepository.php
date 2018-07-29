<?php
/**
 * Created by William Tahira Rabaldeli dos Santos.
 * GitHub: https://github.com/Wiuu
 * Email: vviuu@live.com
 * Date: 28/07/18
 * Time: 19:50
 */

namespace App\Http\Repository\User;


use App\Http\Entities\User;
use App\Http\Repository\Repository;
use \Exception;
use Illuminate\Support\Facades\Log;

class UserRepository extends Repository
{


    /**
     * @param $params
     * @return array
     */
    public function saveUser($params)
    {
        try {
            User::create($params);
        } catch (Exception $e) {
            Log::info($e);
            return array(
                'error' => "DB-ERROR: ".$e->getCode(),
            );
        }
        return array(
            'message' => 'User Created Successfully',
        );
    }
}

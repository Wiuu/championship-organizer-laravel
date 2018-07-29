<?php
/**
 * Created by William Tahira Rabaldeli dos Santos.
 * GitHub: https://github.com/Wiuu
 * Email: vviuu@live.com
 * Date: 28/07/18
 * Time: 19:49
 */

namespace App\Http\Services\User;

use App\Http\Repository\User\UserRepository;
use App\Http\Services\Service;
use Illuminate\Http\Request;

class UserService extends Service
{
    private $repository;

    /**
     * UserService constructor.
     * @param UserRepository $repo
     */
    public function __construct(UserRepository $repo)
    {
        $this->repository = $repo;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function saveUser(Request $request)
    {
        $params = $request->all();
        $params['avatar'] = 'none';

        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $params['avatar'] = $name;
            $file->move(public_path().'/images/', $name);
            unset($params['filename']);
        }
        $params['password'] = password_hash($request->file('password'), PASSWORD_BCRYPT);

        return $this->repository->saveUser($params);

    }

}

<?php
/**
 * Created by PhpStorm.
 * user: wiuu
 * Date: 28/07/18
 * Time: 18:53
 */

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Services\User\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $request;

    private $service;

    /**
     * UserController constructor.
     * @param Request $request
     * @param UserService $service
     */
    public function __construct(Request $request, UserService $service)
    {
        $this->request = $request;
        $this->service = $service;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function signup()
    {
        return view('user.signup');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function signin()
    {
        return view('user.signin');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $response = $this->service->saveUser($this->request);
        if (isset($response['error'])) {
            return view('user.signup')->with('error', 'Deu Ruim, Não sei oque é!');
        }
        return view('user.signin')->with('success', 'Deu bom, Logae!');
    }


}

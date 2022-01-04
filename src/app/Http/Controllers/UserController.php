<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

use App\Services\UserService;

use Exception;
use InvalidArgumentException;

class UserController extends Controller
{
	private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
		$data = $this->userService->getAll();

        return view('admin.contents.users.index', get_defined_vars());
    }

    public function show($id)
    {
		$data = $this->userService->getById($id);

        return view('admin.contents.users.show', get_defined_vars());
    }

    public function edit($id)
    {
		$data = $this->userService->getById($id);

        return view('admin.contents.users.edit', get_defined_vars());	
    }

    public function store(Request $request)
    {
        $userId;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $data = $this->userService->saveUserData($request);
        
        if (!$data['error']) {
            $userId = $data['data']->id;
        } else {                
            return redirect()->route('users');
        }

        return redirect()->route('user', $userId);
    }

    public function update(Request $request, $id)
    {
        $userId;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        try {
            $data = $this->userService->updateUserData($request, $id);

            if (!$data['error']) {
                $userId = $data['data']->id;
            }
        } catch (Exception $ex) {
            return redirect()->route('users');
        }

        return redirect()->route('user', $userId);
    }

    public function destroy($id)
    {
        $this->userService->deleteById($id);

        return redirect()->route('users');
    }
}

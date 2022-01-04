<?php

namespace App\Repositories;

use App\Interfaces\UserInterface as UserInterface;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserRepository implements UserInterface
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function getAll()
    {
        return $this->user
        	->orderBy('id', 'ASC')
            ->get();
    }

    public function getById($id)
    {
        return $this->user
            ->where('id', $id)
            ->first();
    }

    public function save($params)
    {
        $data = new $this->user;

        $data->name = $params->name;
        $data->email = $params->email;
        $data->password = Hash::make($params->email);

        $data->save();

        return $data->fresh();
    }

    public function update($params, $id)
    {        
        $data = $this->user->find($id);

        $data->name = $params->name;
        $data->email = $params->email;

        $data->update();

        return $data;
    }

    public function delete($id)
    {        
        $data = $this->user->find($id);
        
        $data->delete();

        return $data;
    }
}
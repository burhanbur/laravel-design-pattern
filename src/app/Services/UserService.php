<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

use App\Repositories\UserRepository;

use Exception;
use Session;
use InvalidArgumentException;

class UserService
{
	protected $userRepository;

	public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	public function getAll()
    {
        return $this->userRepository->getAll();
    }

    public function getById($id)
    {
        return $this->userRepository->getById($id);
    }

    public function saveUserData($data)
    {
        $returnValue;

        DB::beginTransaction();

        try {

            $user = $this->userRepository->save($data);
            $data->user_id = $user->id;

            DB::commit(); 

            $message = 'Berhasil menambahkan pengguna baru';

            Session::flash('success', $message);   

            $returnValue = [
                'error' => false,
                'message' => $message,
                'data' => $user
            ];
        } catch (Exception $ex) {
            DB::rollBack();

            Session::flash('error', $ex->getMessage());

            $returnValue = [
                'error' => true,
                'message' => $ex->getMessage()
            ];
        }

        return $returnValue;
    }

    public function updateUserData($data, $id)
    {
       $returnValue;

        DB::beginTransaction();

        try {
            $user = $this->userRepository->update($data, $id);

            DB::commit();

            $message = 'Berhasil mengubah data pengguna';

            Session::flash('success', $message);   

            $returnValue = [
                'error' => false,
                'message' => $message,
                'data' => $user
            ];
        } catch (Exception $e) {
            DB::rollBack();

            Session::flash('error', $ex->getMessage());

            $returnValue = [
                'error' => true,
                'message' => $ex->getMessage()
            ];
        }

        return $returnValue;;
    }

    public function deleteById($id)
    {
        DB::beginTransaction();

        try {
            $user = $this->userRepository->delete($id);

            DB::commit();

            Session::flash('success', 'Berhasil menghapus data pengguna');  

        } catch (Exception $ex) {
            DB::rollBack();
            Session::flash('error', $ex->getMessage());
        }
    }
}
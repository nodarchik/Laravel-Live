<?php

namespace App\Http\Controllers;

use App\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        try {
            $users = $this->userRepository->getAllUsersWithWallets();
            return response()->apiResponse(true, 'Users fetched successfully', $users);
        } catch (\Exception $e) {
            return response()->apiResponse(false, 'An error occurred: ' . $e->getMessage());
        }
    }
}

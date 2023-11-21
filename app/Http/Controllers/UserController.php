<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerServiceMessage;

class UserController extends Controller
{
    public function UserHomePage()
    {
        $workerUsers = User::where('role', 'worker')->get();
        // Retrieve categories
        $categories = Category::all();

        return view("user.user-homepage", compact('workerUsers', 'categories'));
    }

    public function sort(Request $request)
    {
        $query = User::where('role', 'worker');

        // Category filter logic
        if ($request->has('category')) {
            $categoryId = $request->input('category');
            if ($categoryId !== 'all') {
                $query->where('category_id', $categoryId);
            }
        }

        // Search logic
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('name', 'like', "%$searchTerm%")
                ->orWhereHas('category', function ($q) use ($searchTerm) {
                    $q->where('name', 'like', "%$searchTerm%");
                });
        }

        // Pagination without sorting
        $workers = $query->paginate(6);
        $categories = Category::all();

        return view('user.user-homepage', ['workerUsers' => $workers, 'categories' => $categories]);
    }

    public function UserSettings()
    {
        return view("user.user-settings");
    }

    public function UserChatify()
    {
        return view("user.chatify");
    }

    public function UserApplyJobseeker()
    {
        return view("user.user-apply-jobseeker");
    }

    public function UserApplyEmployer()
    {
        return view("user.user-apply-employer");
    }

    public function UserCustomerService()
    {
        return view("user.user-customerService");
    }

    public function storeCustomerServiceMessage(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Get the authenticated user's ID
        $user_id = Auth::id();

        // Create a new CustomerServiceMessage model and save the data
        CustomerServiceMessage::create([
            'user_id' => $user_id,
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ]);

        return redirect()->route('user.customerService'); // Adjust the route name as needed
    }


}

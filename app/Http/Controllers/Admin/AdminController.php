<?php

namespace App\Http\Controllers\Admin;


use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Income;
use App\Models\Expense;
use App\Models\Product;
use App\Models\Employee;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\AccountTransaction;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {



        $data = [
            'expenses'              => Expense::with('expTransaction.cashbookAccount')->whereYear('created_at', date('Y'))->limit(10)->latest()->get(),
            'total_expenses'        => Expense::whereYear('created_at', date('Y'))->sum('amount'),
            'incomes'               => Income::with('incomeTransaction.cashbookAccount')->whereYear('created_at', date('Y'))->limit(10)->latest()->get(),
            'total_incomes'         => Income::whereYear('created_at', date('Y'))->sum('amount'),
            'clients'               => User::latest()->count(),
            'employees'             => Employee::latest()->count(),
            'transactions'          => AccountTransaction::with('cashbookAccount')->whereYear('created_at', date('Y'))->latest()->limit(10)->get(),
            'debit_transactions'    => AccountTransaction::with('cashbookAccount')->where('type','0')->whereYear('created_at', date('Y'))->whereMonth('created_at', date('m'))->latest()->sum('amount'),
            'credit_transactions'   => AccountTransaction::with('cashbookAccount')->where('type','1')->whereYear('created_at', date('Y'))->whereMonth('created_at', date('m'))->latest()->sum('amount'),
            // 'profit'                => ,

        ];

        return view('admin.dashboard', $data);
    }

    public function getMonthlySalesData()
    {
        $monthlySales = DB::table('orders')
            ->select(DB::raw('DATE_FORMAT(order_created_at, "%Y-%m") as month'), DB::raw('SUM(total_amount) as total_sales'))
            ->whereNotNull('order_created_at')
            ->groupBy(DB::raw('DATE_FORMAT(order_created_at, "%Y-%m")'))
            ->orderBy('month')
            ->get();

        return $monthlySales;
    }
}

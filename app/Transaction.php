<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Charts\Homepage;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    protected $table = 'transaksi';
    protected $guarded = [];

    public function scopeIn($query)
    {
        return $query->where('status', TRUE)->get();
    }

    public function scopeCancle($query)
    {
        return $query->where('status', FALSE)->get();
    }

    public static function chartTransaction()
    {
        $transactionIn = Transaction::in();
        $transactionCancle = Transaction::cancle();
        $transactionChart = new Homepage;
        $transactionChart
            ->title('All Transaction')
            // ->minimalist(true)
            ->labels(['masuk', 'cancle'])
            ->dataset('All Transaction', 'bar', [$transactionIn, $transactionCancle])
            ->backgroundColor(['#42B7FE', '#3BF6C3']);
        return $transactionChart;
    }

    public static function chartMonthTransaction()
    {
        $months = Transaction::select(DB::raw("COUNT(*) as count ,  MONTHNAME(created_at) as month"))
        ->orderBy("created_at")
        ->groupBy(DB::raw("month(created_at)"))
        ->get();
        $arrayMonth = [];
        $arrayCount = [];

        if ($months) {
            foreach ($months as $month) {
                $arrayMonth [] = $month->month; 
                $arrayCount [] = $month->count; 
            }
            $userMonthChart = new Homepage;
            $userMonthChart->title('Transaction Per Month')
            // ->minimalist(true)
            ->labels($arrayMonth)
            ->dataset('Transaction Per Month', 'pie', $arrayCount)
            ->backgroundColor('#42B7FE');
            return $userMonthChart;
        }
        return ;
    }

    public static function getPeriod()
    {
        $oldestTransaction = Transaction::oldest()->first();
        $latestTransaction = Transaction::latest()->first();
        if ($oldestTransaction && $latestTransaction) {
            $period = collect($oldestTransaction->created_at->isoFormat('MMM Do YY'))->merge($latestTransaction->created_at->isoFormat('MMM Do YY'));
            return $period;
        }
        return ;
    }
}

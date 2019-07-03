<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Charts\Homepage;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function chartUser()
    {
        $user = User::all()->count();
        $userChart = new Homepage;
        $userChart
            ->title('All Customer')
            // ->minimalist(true)
            ->labels(['customer'])
            ->dataset('All Customer', 'bar', [$user])
            ->backgroundColor('#42B7FE');
        return $userChart;
    }

    public static function chartMonthUser()
    {
        $months = User::select(DB::raw("COUNT(*) as count ,  MONTHNAME(created_at) as month"))
        ->orderBy("created_at")
        ->groupBy(DB::raw("month(created_at)"))
        ->get();
        $arrayMonth = [];
        $arrayCount = [];

        if (isset($months)) {
            foreach ($months as $month) {
                $arrayMonth [] = $month->month; 
                $arrayCount [] = $month->count; 
            }
            
            $userMonthChart = new Homepage;
            $userMonthChart->title('Customer Per Month')
            // ->minimalist(true)
            ->labels($arrayMonth)
            ->dataset('Customer Per Month', 'pie', $arrayCount)
            ->backgroundColor('#42B7FE');
            return $userMonthChart;
        }
        return ;
    }

    public static function getPeriod()
    {
        $oldestCustomer = User::oldest()->first();
        $latestCustomer = User::latest()->first();
        $period = [];
        if ($oldestCustomer && $latestCustomer) {
            $period = collect($oldestCustomer->created_at->isoFormat('MMM Do YY'))->merge($latestCustomer->created_at->isoFormat('MMM Do YY'));
            return $period;
        }
        return ;
    }
}

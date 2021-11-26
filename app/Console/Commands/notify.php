<?php

namespace App\Console\Commands;

use App\Mail\mailUser;
use Illuminate\Console\Command;
use app\User;
use Illuminate\Support\Facades\Mail;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is for notify user to go bak to web site ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //    $emails =User::pluck('email')->toArray();
        //    $data=[
        //        "title"=>'notify',
        //        "description"=>"welcome back"
        //    ];
        //    foreach($emails as $email ){
        //         Mail::to($email)->send(new mailUser($data));
        //    }
    }
}

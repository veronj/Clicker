<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class endDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:endDay';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'End the day';

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
        $user = User::first();
            $user->food +=10;
            $user->metal +=10;
            $user->day++;
            $user->save();
    }
}

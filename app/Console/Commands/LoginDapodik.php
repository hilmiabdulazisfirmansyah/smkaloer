<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LoginDapodik extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grab:dapodikLocal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Login Dapodik Siswa';

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
        loginDapodikSiswa();
    }
}

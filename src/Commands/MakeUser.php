<?php

namespace Laracademy\Make\Commands;

use App\User;
use Illuminate\Console\Command;

class MakeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user {email : The email address of the user}
                            {--name= : Will assign the name to the user (Optional)}
                            {--password=N : Allows you to assign the password (Optional)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user based on the email supplied';

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
        $emailAddress = $this->argument('email');
        $name = $this->option('name') ? $this->option('name') : $emailAddress;
        $password = strtolower($this->option('password')) != 'n' ? $this->secret('Please enter a password') : str_random(8);

        if(User::where('email', $emailAddress)->count() > 0) {
            $this->error('Email Address already exists');
            return;
        }


        $this->info('Creating user for: '. $emailAddress);
        User::create([
            'name'     => $name,
            'email'    => $emailAddress,
            'password' => bcrypt($password),
        ]);

        $this->info('Password has been set to: '. $password);
        $this->info('Finished');
    }
}

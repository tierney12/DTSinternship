<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Ultraware\Roles\Models\Role;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create '
    .'{name : Full user first name} '
    .'{email : User email} '
    .'{password : User password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new user';

    /**
     * Create a new command instance.
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
        $email = $this->argument('email');
        $user = User::where('email', $email)->first();

        if ($user) {
            $this->error('This user already exists!');
        } else {
            $role = Role::where('slug', 'admin')->first();
            $newUser = User::create([
                'name'     => $this->argument('name'),
                'email'    => $this->argument('email'),
                'password' => bcrypt($this->argument('password')),
                'archive'  => false,
            ]);

            $newUser->attachRole($role->id);

            $this->info('New user created!');
        }
    }
}

<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;

class AssignRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assign:role {username?} {role?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assigns a role to a user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $username = $this->argument('username')
            ? $this->argument('username')
            : $this->ask("What's the name of the user to be assigned?");

        $user = User::where('username', '=', $username)->first();

        if (! $user instanceof User) {
            $this->error("\nUser with the username {$username} does not exist, or did you perhaps forget to check it?\n");

            return 1;
        }

        $roleName = $this->argument('role')
            ? $this->argument('role')
            : $this->ask("What role is going to be assigned to {$username}?");

        $role = Role::StrictByName($roleName)->first();

        if (! $role) {
            $this->error("\nRole with the name {$roleName} does not exist, or did you perhaps forget to seed the db?\n");

            return 1;
        }

        if ($user->hasRole($role->id)) {
            $this->error("\n{$username} already has {$roleName} attached to them!");

            return 1;
        }

        $user->roles()->attach($role->id);

        $this->info("\n>> Successfully attached the role of {$roleName} to {$username}!\n");

        return 0;
    }
}

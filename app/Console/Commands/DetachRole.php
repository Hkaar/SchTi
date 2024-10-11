<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;

class DetachRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'detach:role {username?} {role?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Detaches a role from a user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $username = $this->argument('username')
        ? $this->argument('username')
        : $this->ask("What's the name of the user?");

        $user = User::where('username', '=', $username)->first();

        if (!$user instanceof User) {
            $this->error("\nUser with the username {$username} does not exist, or did you perhaps forget to check it?\n");
            return 1;
        }

        $roleName = $this->argument('role')
            ? $this->argument('role')
            : $this->ask("What role is going to be detached from {$username}?");

        $role = Role::StrictByName($roleName)->first();

        if (! $role) {
            $this->error("\nRole with the name {$roleName} does not exist, or did you perhaps forget to seed the db?\n");
            return 1;
        }

        if (! $user->hasRole($role->id)) {
            $this->error("\n{$username} doesn't have the role {$roleName} attached!\n");
            return 1;
        }

        $user->roles()->detach($role->id);

        $this->info("\n>> Successfully detached the role of {$roleName} from {$username}!\n");
        return 0;
    }
}

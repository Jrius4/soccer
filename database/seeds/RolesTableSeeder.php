<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        // create roles
        $super_admin = new Role();
        $super_admin->name = "superadministrator";
        $super_admin->display_name = "Super Administrator";
        $super_admin->save();

        $admin = new Role();
        $admin->name = "administrator";
        $admin->display_name = "Administrator";
        $admin->save();

        $editor = new Role();
        $editor->name = "editor";
        $editor->display_name = "Editor";
        $editor->save();

        $author = new Role();
        $author->name = "author";
        $author->display_name = "Author";
        $author->save();

        $contributor = new Role();
        $contributor->name = "contributor";
        $contributor->display_name = "Contributor";
        $contributor->save();

        $supporter = new Role();
        $supporter->name = "supporter";
        $supporter->display_name = "Supporter";
        $supporter->save();

        $subscriber = new Role();
        $subscriber->name = "subscriber";
        $subscriber->display_name = "Subscriber";
        $subscriber->save();

        // Attach roles

        // first user as super_admin
        $user1 = User::find(1);
        $user1->detachRole($super_admin);
        $user1->attachRole($super_admin);

        // no2 user as super_admin
        $user2 = User::find(2);
        $user2->detachRole($admin);
        $user2->attachRole($admin);

        // second user as editor
        $user3 = User::find(3);
        $user3->detachRole($editor);
        $user3->attachRole($editor);

        // third user as author
        $user4 = User::find(4);
        $user4->detachRole($author);
        $user4->attachRole($author);

        // forth user as contributor
        $user5 = User::find(5);
        $user5->detachRole($contributor);
        $user5->attachRole($contributor);

        // fifth user as supporter
        $user6 = User::find(6);
        $user6->detachRole($supporter);
        $user6->attachRole($supporter);

        // sixth user as subscriber
        $user7 = User::find(7);
        $user7->detachRole($subscriber);
        $user7->attachRole($subscriber);
    }
}

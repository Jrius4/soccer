<?php

use App\Role;
use App\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('permissions')->delete();

        // crud post
        $crudArticle = new Permission();
        $crudArticle->name = "crud-article";
        $crudArticle->save();

        // update others post
        $updateOthersArticle = new Permission();
        $updateOthersArticle->name = "update-others-article";
        $updateOthersArticle->save();

        // delete others post
        $deleteOthersArticle = new Permission();
        $deleteOthersArticle->name = "delete-others-article";
        $deleteOthersArticle->save();

        // crud category
        $crudCategory = new Permission();
        $crudCategory->name = "crud-category";
        $crudCategory->save();

        // crud user
        $crudUser = new Permission();
        $crudUser->name = "crud-user";
        $crudUser->save();



        // attach roles permissions
        $superadmin = Role::whereName('superadministrator')->first();
        $admin = Role::whereName('administrator')->first();
        $editor = Role::whereName('editor')->first();
        $author = Role::whereName('author')->first();

        $superadmin->detachPermissions([$crudArticle, $updateOthersArticle, $deleteOthersArticle, $crudCategory, $crudUser]);
        $superadmin->attachPermissions([$crudArticle, $updateOthersArticle, $deleteOthersArticle, $crudCategory, $crudUser]);


        $admin->detachPermissions([$crudArticle, $updateOthersArticle, $deleteOthersArticle, $crudCategory, $crudUser]);
        $admin->attachPermissions([$crudArticle, $updateOthersArticle, $deleteOthersArticle, $crudCategory, $crudUser]);

        $editor->detachPermissions([$crudArticle, $updateOthersArticle, $deleteOthersArticle, $crudCategory]);
        $editor->attachPermissions([$crudArticle, $updateOthersArticle, $deleteOthersArticle, $crudCategory]);

        $author->detachPermission($crudArticle);
        $author->attachPermission($crudArticle);
    }
}

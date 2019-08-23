<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('clients',function(Blueprint $table){
            $table->dropUnique('unique_clients');
            $table->unique('name','unique_clients');
        });

        Schema::table('projects',function(Blueprint $table){
            $table->dropUnique('unique_project');
            $table->unique('project_name','unique_project');
        });

        Schema::table('milestones',function(Blueprint $table){
            $table->dropUnique('unique_milestones');
            $table->unique('name','unique_milestones');
        });

        Schema::table('tasks',function(Blueprint $table){
            $table->dropUnique('unique_tasks');
            $table->unique('taskname','unique_tasks');
        });

        Schema::table('costs',function(Blueprint $table){
            $table->dropUnique('unique_cost');
            $table->unique('name','unique_cost');
        });

        Schema::table('tasksStatus',function(Blueprint $table){
            $table->dropUnique('unique_status');
            $table->unique('status_name','unique_status');
        });
        Schema::table('milstoneStatus',function(Blueprint $table){
            $table->dropUnique('unique_milstoneStatus');
            $table->unique('ml_status_name','unique_milstoneStatus');
        });

        Schema::table('project_status',function(Blueprint $table){
            $table->dropUnique('unique_project_status');
            $table->unique('name','unique_project_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients',function(Blueprint $table){
            $table->dropUnique('unique_clients');
        });

        Schema::table('projects',function(Blueprint $table){
            $table->dropUnique('unique_project');
        });

        Schema::table('milestones',function(Blueprint $table){
            $table->dropUnique('unique_milestones');
            $table->unique('name','unique_milestones');
        });

        Schema::table('tasks',function(Blueprint $table){
            $table->dropUnique('unique_tasks');
        });

        Schema::table('costs',function(Blueprint $table){
            $table->dropUnique('unique_cost');
        });

        Schema::table('tasksStatus',function(Blueprint $table){
            $table->dropUnique('unique_status');
        });
        Schema::table('milstoneStatus',function(Blueprint $table){
            $table->dropUnique('unique_milstoneStatus');
        });

        Schema::table('project_status',function(Blueprint $table){
            $table->dropUnique('unique_project_status');
        });
    }
}

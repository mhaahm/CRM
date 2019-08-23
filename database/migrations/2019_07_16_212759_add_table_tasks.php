<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasksStatus',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('status_name',255);
        });
        Schema::create('milstoneStatus',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('ml_status_name',255);
        });


        Schema::create('project_status',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
        });

        Schema::create('clients', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('webSite',255);
            $table->string('industry',255);
            $table->string('revenue',255);
            $table->text('description');
            $table->string('phone',255);
            $table->string('street1',255);
            $table->string('street2',255);
            $table->string('city',255);
            $table->string('state',255);
            $table->string('zip',255);
            $table->string('country',255);
            $table->text('notes');
        });

        Schema::create('projects',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('project_manager');
            $table->bigInteger('project_status');
            $table->bigInteger('client');
            $table->string('project_name');
            $table->dateTime('start_date');
            $table->float('hourly_rate');
            $table->float('budget');
            $table->boolean('active');
            $table->float('total_hours');
            $table->float('labor_cost');
            $table->float('material_cost');
            $table->float('total_cost');
            $table->foreign('project_manager')->references('id')->on('users');
            $table->foreign('project_status')->references('id')->on('project_status');
            $table->foreign('client')->references('id')->on('clients');
        });
        Schema::create('milestones',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->dateTime('duDate');
            $table->boolean('delivrable');
            $table->bigInteger('ms_staus');
            $table->foreign('ms_staus')->references('id')->on('milstoneStatus');
            $table->bigInteger('project');
            $table->foreign('project')->references('id')->on('projects');
            $table->decimal('totalHours');
        });

        Schema::create('tasks',function (Blueprint $table) {
            $table->string('taskname',255);
            $table->bigIncrements('id');
            $table->string('instructions',255);
            $table->float('totalHours');
            $table->bigInteger('task_status');
            $table->bigInteger('milestone_id');
            $table->bigInteger('project_id');
            $table->bigInteger('employee_id');
            $table->foreign('task_status')->references('id')->on('tasksStatus');
            $table->foreign('milestone_id')->references('id')->on('milestones');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('employee_id')->references('id')->on('users');
        });

        Schema::create('costs',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->text('description');
            $table->float('pricePer');
            $table->float('quantity');
            $table->float('totalCost');
            $table->bigInteger('project');
            $table->foreign('project')->references('id')->on('projects');
            $table->bigInteger('milstone');
            $table->foreign('milstone')->references('id')->on('milestones');
        });

        Schema::create('hours',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date');
            $table->bigInteger('time');
            $table->text('workCompleted');
            $table->bigInteger('task');
            $table->foreign('task')->references('id')->on('tasks');
            $table->bigInteger('project');
            $table->foreign('project')->references('id')->on('projects');
            $table->bigInteger('employe');
            $table->foreign('employe')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasksStatus');
        Schema::dropIfExists('milstoneStatus');

        Schema::dropIfExists('clients');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('project_status');
        Schema::dropIfExists('milestones');
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('costs');
        Schema::dropIfExists('hours');
    }
}

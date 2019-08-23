@extends("layouts.app")
@section("content")
    <div class="jumbotron">
        <h1 class="display-3"><a href="{{route('login')}}">Project Manager</a></h1>
        <p class="lead">A project management application is a software system used for project planning, resource allocation, tracking of project components, and change management.</p>
        <hr class="my-4">
        <p>We will be creating a simple and easily customizable PM system to tracks projects, including milestones, tasks, hours, costs, and more. Since every project is unique, this tutorial merely means to build an application foundation; you should be able to easily extend it based on your requirements.</p>
        <p><h3>In our project management application,</h3></p>
        <p><b>Employees will be able to:</b></p>

        <ul>
            <li>View their tasks</li>
            <li>Log in hours worked</li>
        </ul>
        <p><b>Managers will be able to:</b></p>
        <ul>
            <li>Manage projects
            <li>Manage milestones
            <li>Manage tasks
            <li>Manage costs and hours
            <li>Manage employee resources
        </ul>
        <p><h3>The Building Blocks of a Project Management System</h3></p>
        <p>Here are the primary functions of a project management system:</p>

        <p><b>Project planning:</b> To define a project schedule, a project manager may use the
            software to map project tasks and visually describe task interactions. </p>
        <p><b>Task management:</b> Allows the project manager to create and assign tasks, establish
            deadlines, and produce status reports.</p>
        <p><b>Resource management:</b>Defines responsibilities – who is supposed to do what.</p>
        <p><b>Budgeting and cost tracking:</b> A good project management application facilitates budget reporting as
            well as viewing, notifying, and updating costs for stakeholders.</p>
        <p><b>Time tracking:</b>The software must have the ability to track time spent on all tasks and maintain
            records for third-party consultants.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
@endsection

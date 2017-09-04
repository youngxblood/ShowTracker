@extends('layouts.app')

@section('content')

<div class="container">
    <br><br><br>


    <div class="col-lg-4">
        <div class="text-center panel-header">
            <h2>First Show</h2>
        </div>
        <div class="panel-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="col-lg-4">
            <div class="text-center panel-header">
                <h2>Second Show</h2>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center panel-header">
                    <h2>Third Show</h2>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="col-lg-4">
                    <br><br>
                    <img src="{{ asset('flat-image.jpeg') }}" alt="logo" height="100%" width="100%">
                </div>
                <div class="col-lg-8">
                    <br><br>
                    <h2>Testing testing.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                </div>

                <div class="container">
                    <div class="col-lg-6 text-center">
                        <h1>Header One.</h1>
                    </div>
                    <div class="col-lg-6 text-center">
                        <h1>Header Two.</h1>
                    </div>
                </div>

                <div class="container-fluid text-center">
                    <h2>Services</h2>
                    <h4>What we offer:</h4>

                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-off"></span>
                            <h4>Power</h4>
                            <p>Blah blah blah.</p>
                        </div>
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-heart"></span>
                            <h4>Power</h4>
                            <p>Blah blah blah.</p>
                        </div>
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-off"></span>
                            <h4>Power</h4>
                            <p>Blah blah blah.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-off"></span>
                            <h4>Power</h4>
                            <p>Blah blah blah.</p>
                        </div>
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-off"></span>
                            <h4>Power</h4>
                            <p>Blah blah blah.</p>
                        </div>
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-off"></span>
                            <h4>Power</h4>
                            <p>Blah blah blah.</p>
                        </div>
                    </div>
                </div>



                @endsection

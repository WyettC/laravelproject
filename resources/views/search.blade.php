@extends('layouts.layout')

@section('title', 'Searh Bar')

@section('content')

        <!-- Main Container -->
        <div class="container mx-auto px-6 py-10">
            <!-- title section -->
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-[#556087]">PAGE TITLE<!--TIMESHEET, DEDUCTION AND PENALTY LOGS, etc. --></h1>
            </div>

            <!-- search bar section-->
            <div class="absolute top-24 left-6">
                <div class="relative w-64">
                    <i class="fa fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-black"></i>
                    <input type="text" placeholder="Search" class="w-full h-10 pl-10 pr-4 rounded-lg bg-white shadow border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700">
                </div>
            </div>
        </div>

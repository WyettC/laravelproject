@extends('layouts.layout')

@section('title', 'Dark Mode Save Change')

@section('content')

<!-- Main Modal Container -->
<div id="saveModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
    <!-- Modal Content -->
    <div class="bg-[#303b47] text-white p-4 rounded-md shadow-lg max-w-xs w-full md:max-w-md">
        <h2 class="mb-4 text-2xl font-bold text-center">Save Changes</h2>
        <p class="mb-6 text-center">Are you sure you want to save your changes?</p>
        <div class="flex flex-col md:flex-row justify-between space-y-2 md:space-y-0 md:space-x-4">
            <!-- Cancel Button -->
            <button class="w-full md:w-auto px-4 py-2 rounded-md shadow hover:bg-gray-600" style="background-color: #4a5161; color: white;">
                Cancel
            </button>
            <!-- Save/Update Button -->
            <button class="w-full md:w-auto px-4 py-2 rounded-md shadow hover:bg-blue-800" style="background-color: #5f6e82; color: white;">
                UPDATE
            </button>
        </div>
    </div>
</div>

<script>
    // Show modal when the page loads
    window.onload = function() {
        document.getElementById('saveModal').classList.remove('hidden');
    };
</script>

@endsection



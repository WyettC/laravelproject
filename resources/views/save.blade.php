@extends('layouts.layout')

@section('title', 'Save Change')

@section('content')

<!-- Main Modal Container -->
<div id="saveModal" class="fixed inset-0 bg-gray-100 bg-opacity-50 flex justify-center items-center z-50 hidden">
    <!-- Modal Content -->
    <div class="bg-white text-black p-4 rounded-md shadow-lg max-w-xs w-full md:max-w-md">
        <h2 class="mb-4 text-2xl font-bold text-black text-center">Save Changes</h2>
        <p class="mb-6 text-gray-600 text-center">Are you sure you want to save your changes?</p>
        <div class="flex flex-col md:flex-row justify-between space-y-2 md:space-y-0 md:space-x-4">
            <!-- Cancel Button -->
            <button class="w-full md:w-auto px-4 py-2 rounded-md shadow hover:bg-gray-300" style="background-color: #e5e8f3; color: #475998;">
                Cancel
            </button>
            <!-- Save/Update Button -->
            <button class="w-full md:w-auto px-4 py-2 rounded-md shadow hover:bg-blue-600" style="background-color: #475998; color: white;">
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

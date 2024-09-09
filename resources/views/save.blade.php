@extends('layouts.layout')

@section('title', 'Save Change')

@section('content')

<!-- Main Modal Container -->
<div id="saveModal" class="fixed inset-0 bg-gray-100 bg-opacity-50 flex justify-center items-center z-50 hidden">
    <!-- Modal Content -->
    <div class="px-4 py-2 rounded-md shadow-lg hover:bg-gray-200" style="background-color: #ffffff; color: black;">
        <h2 class="mb-4 text-2xl font-bold text-black text-center">Save Changes</h2>
        <p class="mb-6 text-gray-600">Are you sure you want to save your changes?</p>
        <div class="flex justify-between space-x-4">
            <!-- Cancel Button -->
            <button class="px-4 py-2 rounded-md shadow hover:bg-gray-300" style="background-color: #e5e8f3; color: #475998;">
             Cancel
            </button>
            <!-- Save/Update Button -->
            <button class="px-4 py-2 rounded-md shadow hover:bg-blue-600" style="background-color: #475998; color: white;">
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

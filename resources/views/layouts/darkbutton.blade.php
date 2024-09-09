@extends('layouts.layout')

@section('title', 'Dark Submit and Cancel Button')

@section('content')

<!-- Main Modal Container -->
<div id="actionModal" class="fixed inset-0 bg-gray-100 bg-opacity-50 flex justify-center items-center z-50 hidden">
    <!-- Modal Content -->
    <div class="bg-white text-black p-4 rounded-md shadow-lg max-w-xs w-full md:max-w-md">
        <div class="flex flex-col md:flex-row justify-between space-y-2 md:space-y-0 md:space-x-4">
            <!-- Submit Button -->
            <button class="w-full md:w-auto px-4 py-2 rounded-lg shadow-lg hover:bg-blue-600" style="background-color: #4a5161; color: white;">
                Submit
            </button>
            <!-- Cancel Button -->
            <button class="w-full md:w-auto px-4 py-2 rounded-lg shadow-lg hover:bg-gray-300" style="background-color: #4a5161; color: white;">
                Cancel
            </button>
        </div>
    </div>
</div>

<script>
    // Show modal when the page loads
    window.onload = function() {
        document.getElementById('actionModal').classList.remove('hidden');
    };
</script>

@endsection

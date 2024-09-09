@extends('layouts.layout')

@section('title', 'Dark Submit and Cancel Button')

@section('content')

<!-- Main Modal Container -->
<div id="actionModal" class="fixed inset-0 bg-gray-100 bg-opacity-50 flex justify-center items-center z-50 hidden">
    <!-- Modal Content -->
    <div class="px-4 py-2 rounded-md shadow-lg hover:bg-gray-200" style="background-color: #ffffff; color: black;">
        <div class="flex justify-between space-x-4">
            <!-- Submit Button -->
            <button class="px-4 py-2 rounded-lg shadow-lg hover:bg-blue-600" style="background-color: #4a5161; color: white;">
                Submit
            </button>
            <!-- Cancel Button -->
            <button class="px-4 py-2 rounded-lg shadow-lg hover:bg-gray-300" style="background-color: #4a5161; color: white;">
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


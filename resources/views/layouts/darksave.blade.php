@extends('layouts.layout')

@section('title', ' Dark Mode Save Change')

@section('content')

<!-- Main Modal Container -->
<div id="saveModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
    <!-- Modal Content -->
    <div class="px-4 py-2 rounded-md shadow hover:bg-gray-600" style="background-color: #303b47; color: white;">
        <h2 class="mb-4 text-2xl font-bold text-white text-center">Save Changes</h2>
        <p class="mb-6 text-white">Are you sure you want to save your changes?</p>
        <div class="flex justify-between space-x-4">
            <!-- Cancel Button -->
            <button class="px-4 py-2 rounded-md shadow hover:bg-gray-600" style="background-color: #4a5161; color: white;">
             Cancel
            <!-- Save/Update Button -->
            <button class="px-4 py-2 rounded-md shadow hover:bg-blue-800" style="background-color: #5f6e82; color: white;">
            UPDATE
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



@extends('layouts.layout')

@section('title', 'Filter and Export')

@section('content')

<!-- Main Modal Container -->
<div id="filterExportModal" class="fixed inset-0 bg-gray-100 bg-opacity-50 flex justify-center items-center z-50 hidden">
    <!-- Modal Content -->
    <div class="bg-white text-black p-4 rounded-md shadow-lg max-w-xs w-full md:max-w-md">
        <div class="flex flex-col md:flex-row justify-between space-y-2 md:space-y-0 md:space-x-4">
            <!-- Export Button -->
            <button class="w-full md:w-auto px-4 py-2 rounded-lg shadow-lg hover:bg-gray-300" style="background-color: #e5e8f3; color: #3b5998; font-size: 12px;">
                Export
                <span style="font-size: 10px; margin-left: 5px;">&#x25BC;</span>
            </button>
            <!-- Filter Button -->
            <button class="w-full md:w-auto px-4 py-2 rounded-lg shadow-lg hover:bg-blue-600" style="background-color: #3b5998; color: white; font-size: 12px;">
                Filter
                <span style="font-size: 10px; margin-left: 5px;">&#x25BC;</span>
            </button>
        </div>
    </div>
</div>

<script>
    // Show modal when the page loads
    window.onload = function() {
        document.getElementById('filterExportModal').classList.remove('hidden');
    };

    function closeModal() {
        document.getElementById('filterExportModal').classList.add('hidden');
    }
</script>

@endsection


@extends('layouts.layout')

@section('title', 'Dark Filter and Export')

@section('content')

<!-- Main Modal Container -->
<div id="filterExportModal" class="fixed inset-0 bg-gray-100 bg-opacity-50 flex justify-center items-center z-50 hidden">
    <!-- Modal Content -->
    <div class="px-4 py-2 rounded-md shadow-lg hover:bg-gray-200" style="background-color: #ffffff; color: black; width: 320px;">
        <div class="flex justify-between space-x-4">
            <!-- Export Button -->
            <button class="px-4 py-2 rounded-lg shadow-lg hover:bg-gray-300" style="background-color: #4a5161; color: white; font-size: 12px;">
                Export
                <span style="font-size: 10px; margin-left: 5px;">&#x25BC;</span>
            </button>
            <!-- Filter Button -->
            <button class="px-4 py-2 rounded-lg shadow-lg hover:bg-blue-600" style="background-color: #4a5161; color: white; font-size: 12px;">
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

@endsection

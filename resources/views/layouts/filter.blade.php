@extends('layouts.layout')

@section('title', 'Filter and Export')

@section('content')

<div id="filterExportModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background-color: white; padding: 20px; border-radius: 8px; width: 300px; text-align: center;">
        <div style="display: flex; justify-content: space-between; align-items: center; padding: 0 20px;"> 

            <div style="position: relative;">
                <button style="background-color: #e5e8f3; color: #3b5998; border: none; height: 16px; line-height: 16px; padding: 0 10px; border-radius: 5px; font-size: 10px; cursor: pointer;">
                    Filter
                    <span style="font-size: 10px; margin-left: 5px;">&#x25BC;</span> 
                </button>
            </div>

            <div style="position: relative;">
                <button style="background-color: #3b5998; color: white; border: none; height: 16px; line-height: 16px; padding: 0 10px; border-radius: 5px; font-size: 10px; cursor: pointer;">
                    Export
                    <span style="font-size: 10px; margin-left: 5px;">&#x25BC;</span> 
                </button>
               
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        document.getElementById('filterExportModal').style.display = 'flex';
    };

    function closeModal() {
        document.getElementById('filterExportModal').style.display = 'none';
    }
</script>

@endsection

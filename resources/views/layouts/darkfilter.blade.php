@extends('layouts.layout')

@section('title', 'Filter and Export')

@section('content')

<div id="filterExportModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div class="modal-content dark-mode">
        <div class="modal-header">
            <div class="button-container">
                <button class="filter-button dark-mode-button black-button">
                    Filter
                    <span class="dropdown-icon">&#x25BC;</span> 
                </button>
            </div>
            <div class="button-container">
                <button class="export-button dark-mode-button">
                    Export
                    <span class="dropdown-icon">&#x25BC;</span> 
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    
    .modal-content.dark-mode {
        background-color: #2f3b4c; 
        padding: 20px;
        border-radius: 8px;
        width: 300px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); 
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    .button-container {
        position: relative;
    }

    .dark-mode-button {
        color: white;
        border: none;
        height: 30px;
        line-height: 30px;
        padding: 0 20px;
        border-radius: 5px;
        font-size: 12px;
        cursor: pointer;
    }

   
    .black-button {
        background-color: black;
    }

    .export-button.dark-mode-button {
        background-color: black; 
    }

    .dropdown-icon {
        font-size: 12px;
        margin-left: 5px;
        color: white;
    }

    @media only screen and (max-width: 600px) {
        .modal-content.dark-mode {
            width: 90%;
            padding: 15px;
        }

        .modal-header {
            flex-direction: column;
        }

        .button-container {
            width: 100%;
            margin-bottom: 10px;
        }

        .dark-mode-button {
            width: 100%;
            font-size: 14px;
            padding: 0 15px;
            height: 40px;
            line-height: 40px;
        }

        .dropdown-icon {
            font-size: 14px;
        }
    }
</style>

<script>
    window.onload = function() {
        document.getElementById('filterExportModal').style.display = 'flex';
    };

    function closeModal() {
        document.getElementById('filterExportModal').style.display = 'none';
    }
</script>

@endsection

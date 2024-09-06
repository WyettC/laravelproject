@extends('layouts.layout')

@section('title', 'Button Page')

@section('content')

<div id="saveModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div class="modal-content">
        <div class="button-group">
            <div class="button-row">
                <button class="submit-light" disabled>SUBMIT</button>
                <button class="submit-dark" disabled>SUBMIT</button>
            </div>
            <div class="button-row">
                <button class="cancel-light" disabled>Cancel</button>
                <button class="cancel-dark" disabled>Cancel</button>
            </div>
        </div>
    </div>
</div>

<style>

    .modal-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        width: 300px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .button-group {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .button-row {
        display: flex;
        gap: 20px;
        justify-content: center;
    }

    button {
        border: none;
        height: 35px;
        padding: 0 15px;
        border-radius: 5px;
        font-size: 12px;
        cursor: not-allowed;
        pointer-events: none;
    }

    
    .submit-light,
    .cancel-light {
        background-color: black;
        color: white;
    }

    
    .submit-dark,
    .cancel-dark {
        background-color: black;
        color: white;
    }

    /* Mobile responsiveness */
    @media only screen and (max-width: 600px) {
        .modal-content {
            width: 90%;
            padding: 15px;
        }

        button {
            width: 100%;
            font-size: 14px;
            height: 40px;
        }

        .button-row {
            flex-direction: column;
            gap: 15px;
        }
    }
</style>

<script>
    window.onload = function() {
        document.getElementById('saveModal').style.display = 'flex';
    };

    function closeModal() {
        document.getElementById('saveModal').style.display = 'none';
    }
</script>

@endsection


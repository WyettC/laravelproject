@extends('layouts.layout')

@section('title', 'Dark Mode Save Page')

@section('content')

<div id="saveModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background-color: #303b47; padding: 20px; border-radius: 8px; width: 300px; text-align: center;">
        <h2 style="margin-bottom: 20px; font-weight: bold; text-align: left; color: white;">Save Changes</h2>
        <p style="margin-bottom: 30px; text-align: left; font-size: 14px; font-family: 'Montserrat', sans-serif; color: #e5e8f3;">Are you sure you want to save your changes?</p>
        <div style="display: flex; justify-content: space-between;">
            <button style="background-color: #4a5161; color: white; border: none; height: 24px; padding: 0 10px; border-radius: 5px; font-size: 16px; cursor: pointer;">Cancel</button>
            <button style="background-color: #5f6e82; color: white; border: none; height: 24px; padding: 0 10px; border-radius: 5px; font-size: 16px; cursor: pointer;">UPDATE</button>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        document.getElementById('saveModal').style.display = 'flex';
    };

    function closeModal() {
        document.getElementById('saveModal').style.display = 'none';
    }

    function updateData() {
        closeModal();
    }
</script>

@endsection


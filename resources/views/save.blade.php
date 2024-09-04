@extends('layouts.layout')

@section('title', 'Save Page')

@section('content')
   
<div id="saveModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background-color: white; padding: 20px; border-radius: 8px; width: 300px; text-align: center;">
        <h2 style="margin-bottom: 20px; font-weight: bold; text-align: left;">Save Changes</h2>
        <p style="margin-bottom: 30px; text-align: left; font-size: 14px; font-family: Calibri, sans-serif;">Are you sure you want to save your changes?</p>
        <div style="display: flex; justify-content: space-between;">
            <button style="background-color: #e5e8f3; color: #3b5998; border: none; height: 16px; line-height: 16px; padding: 0 10px; border-radius: 5px; font-size: 12px; cursor: not-allowed; pointer-events: none;">Cancel</button>
            <button style="background-color: #3b5998; color: white; border: none; height: 16px; line-height: 16px; padding: 0 10px; border-radius: 5px; font-size: 12px; cursor: not-allowed; pointer-events: none;">UPDATE</button>
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

@extends('layouts.layout')

@section('title', 'Button Page')

@section('content')
   
<div id="saveModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background-color: white; padding: 20px; border-radius: 8px; width: 300px; text-align: center;">
        <div style="display: flex; flex-direction: column; gap: 30px;">
            
            <div style="display: flex; gap: 50px; justify-content: center;">
                <button style="background-color: #e5e8f3; color: #3b5998; border: none; height: 16px; line-height: 16px; padding: 0 10px; border-radius: 5px; font-size: 10px; cursor: not-allowed; pointer-events: none;">SUBMIT</button>
                <button style="background-color: #3b5998; color: white; border: none; height: 16px; line-height: 16px; padding: 0 10px; border-radius: 5px; font-size: 10px; cursor: not-allowed; pointer-events: none;">SUBMIT</button>
            </div>
            
            <div style="display: flex; gap: 50px; justify-content: center;">
                <button style="background-color: #e5e8f3; color: #3b5998; border: none; height: 16px; line-height: 16px; padding: 0 10px; border-radius: 5px; font-size: 10px; cursor: not-allowed; pointer-events: none;">Cancel</button>
                <button style="background-color: #3b5998; color: white; border: none; height: 16px; line-height: 16px; padding: 0 10px; border-radius: 5px; font-size: 10px; cursor: not-allowed; pointer-events: none;">Cancel</button>
            </div>
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

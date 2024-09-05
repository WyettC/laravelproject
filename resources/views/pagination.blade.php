<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Attendance</title>
    </head>
    
    <body class="min-h-screen bg-[#C8D9E2]">
        <!-- Main Container -->
        <div class="container mx-auto px-6 py-10">
            <!-- pagination section -->
            <div class="w-full py-4 px-8 flex md:flex-row justify-between items-center absolute bottom-10 left-0">
            <!-- previous button -->
            <div class="w-24 md:w-auto mb-2 md:mb-0 text-center md:text-left">
                <button class="bg-white px-4 py-2 border border-gray-300 font-semibold text-black rounded-lg">
                    Previous
                </button>
            </div>
            <!-- page indicator -->
            <div class="w-full md:w-auto mb-2 md:mb-0 font-semibold text-center text-black">
                <span>Page 1 of 10</span>
            </div>
            <!-- next button -->
            <div class="w-24 md:w-auto text-center md:text-right">
                <button class="bg-white px-4 py-2 border border-gray-300 font-semibold text-black rounded-lg">
                    Next
                </button>
            </div>
        </div>
    </body>
</html>

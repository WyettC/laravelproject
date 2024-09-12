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
            <div class="w-full py-4 px-6 flex justify-center sm:justify-between items-center absolute bottom-10 left-0 right-0">
                <!-- previous button -->
                <div class="w-auto text-left">
                    <button class="w-24 bg-white px-4 py-2 border border-gray-300 font-semibold text-black rounded-lg hover:bg-[#2E5090] hover:text-white">
                        Previous
                    </button>
                </div>
                <!-- page indicator -->
                <div class="w-auto text-center font-normal sm:font-semibold text-black text-base sm:text-lg whitespace-nowrap mx-4">
                    <span>Page 1 of 10</span>
                </div>
                <!-- next button -->
                <div class="w-auto text-right">
                    <button class="w-24 bg-white px-4 py-2 border border-gray-300 font-semibold text-black rounded-lg hover:bg-[#2E5090] hover:text-white">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>

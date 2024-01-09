<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">
    <div class="container mx-auto p-4 mt-9">
        <h1 class="text-4xl font-bold text-center mb-8">Currency Converter</h1>
        <div class="max-w-md mx-auto bg-white rounded-md p-6 shadow-md">
            <form class="space-y-4 form">
                <span class="text-slate-600">You send exactly</span>
                <div class="flex items-center rounded-lg border border-gray-300 px-3 py-2">
                    <input type="number" value="1000" min="100" class="InputAmount w-2/3 p-2 text-3xl font-bold focus:outline-none" />
                    <span class="mx-2 text-sm md:text-lg">in</span>
                    <select class="fromCurrency w-[85px] text-3xl font-bold focus:outline-none">
                    </select>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 bg-slate-200 rounded-full p-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                        </svg>
                        <span class="ourFee text-lg font-semibold text-slate-900 ml-3">4.95</span>
                    </div>
                    <span class="text-base font-semibold text-slate-700 flex justify-end">Our fee</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 bg-slate-200 rounded-full p-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                        </svg>
                        <span class="totalConvertedAmount text-lg font-semibold ml-3"></span>
                    </div>
                    <span class="text-base font-semibold text-slate-700">Total amount we'll convert</span>
                </div>
                <div class="flex items-center justify-between mb-7">
                    <div class="flex items-center justify-between">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 bg-slate-200 rounded-full p-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        <span class="conversionRate text-lg font-semibold underline ml-3"></span>
                    </div>
                    <span class="text-lg font-semibold underline">Guaranteed Rate (2h)</span>
                </div>

                <div class="mt-7">
                <span class="text-slate-600">Recipient gets</span>
                </div>
                <div class="flex items-center rounded-lg border border-gray-300 px-3 py-2">
                    <input type="number" value="1" min="1" class="ConvertedAmount w-2/3 p-2 text-3xl font-bold focus:outline-none" />
                    <span class="mx-2 text-sm md:text-lg">in</span>
                    <select class="toCurrency w-[85px] text-3xl font-bold focus:outline-none">
                    </select>
                </div>
                <div class="text-center ">
                    <span class="result text-2xl font-bold">1 USD = 82 INR</span>
                </div>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>

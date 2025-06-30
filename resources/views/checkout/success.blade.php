@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md mx-auto">
        <div class="text-center">
            <div class="text-green-500 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            
            <h1 class="text-2xl font-bold mb-4">Order Confirmed!</h1>
            
            <p class="mb-6 text-gray-600">
                Thank you for your purchase! We've sent a confirmation email with your order details.
            </p>

            <p class="mb-6 text-sm text-gray-500">
                Check your email or view it in <a href="http://localhost:8025" class="text-blue-500 underline">MailHog</a>.
            </p>
            
            <a href="/" class="inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
                Continue Shopping
            </a>
        </div>
    </div>
</div>
@endsection

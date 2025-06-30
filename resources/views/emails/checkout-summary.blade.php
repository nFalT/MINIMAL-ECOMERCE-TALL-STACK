<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #f8f9fa;
        }
        .content {
            padding: 20px;
        }
        .order-details {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }
        .total {
            font-weight: bold;
            text-align: right;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Thank You for Your Order!</h1>
        <p>Order #{{ $order->id ?? rand(100000, 999999) }}</p>
    </div>

    <div class="content">
        <p>Dear {{ $order->user->name ?? 'Valued Customer' }},</p>
        
        <p>Your order has been received and is being processed. Below is a summary of your purchase:</p>
        
        <div class="order-details">
            <h2>Order Summary</h2>
            
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td>{{ $item->product->name ?? 'Product' }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->price, 2) }}</td>
                            <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No items</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            
            <div class="total">
                <p>Total: ${{ number_format($total, 2) }}</p>
            </div>
            
            @if(isset($order->shipping_address) || isset($shippingAddress))
                <h3>Shipping Address</h3>
                <p>{{ isset($order->shipping_address) ? $order->shipping_address : $shippingAddress }}</p>
            @endif
            
            @if(isset($order->payment_method) || isset($paymentMethod))
                <h3>Payment Method</h3>
                <p>{{ isset($order->payment_method) ? $order->payment_method : $paymentMethod }}</p>
            @endif
        </div>
        
        <p>If you have any questions about your order, please contact our customer service team.</p>
        
        <p>Thank you for shopping with us!</p>
    </div>

    <div class="footer">
        <p>&copy; {{ date('Y') }} Your Store Name. All rights reserved.</p>
    </div>
</body>
</html>
    </div>

    <div class="footer">
        <p>&copy; {{ date('Y') }} Your Store Name. All rights reserved.</p>
    </div>
</body>
</html>

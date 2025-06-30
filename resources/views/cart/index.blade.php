<!-- Each cart item should have these classes and data attributes -->
<tr class="cart-item" data-id="{{ $id }}">
    <!-- ...existing code... -->
    <td>
        <button class="cart-minus text-red-500" data-id="{{ $id }}">-</button>
        <span class="cart-item-quantity mx-2" data-id="{{ $id }}">{{ $details['quantity'] }}</span>
        <button class="cart-plus text-green-500" data-id="{{ $id }}">+</button>
    </td>
    <!-- ...existing code... -->
</tr>

<!-- Total price element -->
<span class="cart-total">${{ $total }}</span>

<!-- ...existing code... -->
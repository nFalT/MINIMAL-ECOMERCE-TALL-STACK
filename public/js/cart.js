document.addEventListener('DOMContentLoaded', function() {
    // Add to cart buttons (both on product listing and details pages)
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    
    if (addToCartButtons.length > 0) {
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = this.getAttribute('data-id');
                if (!productId) {
                    console.error('No product ID found');
                    return;
                }
                
                // Add loading state
                const originalText = this.innerHTML;
                this.innerHTML = 'Adding...';
                this.disabled = true;
                
                fetch(`/add-to-cart/${productId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        id: productId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    // Update cart count in navigation
                    updateCartCount(data.cartCount);
                    
                    // Reset button
                    this.innerHTML = originalText;
                    this.disabled = false;
                    
                    // Show success message
                    showNotification('Product added to cart!', 'success');
                })
                .catch(error => {
                    console.error('Error:', error);
                    this.innerHTML = originalText;
                    this.disabled = false;
                    showNotification('Failed to add product', 'error');
                });
            });
        });
    }

    // Listen for cart-updated Livewire events
    window.addEventListener('cart-updated', function(event) {
        updateCartCount(event.detail.cartCount);
    });
    
    // Plus buttons in cart
    const plusButtons = document.querySelectorAll('.cart-plus');
    if (plusButtons.length > 0) {
        plusButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = this.getAttribute('data-id');
                
                fetch(`/update-cart/${productId}`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        id: productId,
                        action: 'increase'
                    })
                })
                .then(response => response.json())
                .then(data => {
                    // Update quantity display for this item
                    updateItemQuantity(productId, data.quantity);
                    
                    // Update total price
                    if(data.total) {
                        document.querySelector('.cart-total').textContent = `$${data.total.toFixed(2)}`;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showNotification('Failed to update cart', 'error');
                });
            });
        });
    }
    
    // Minus buttons in cart
    const minusButtons = document.querySelectorAll('.cart-minus');
    if (minusButtons.length > 0) {
        minusButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = this.getAttribute('data-id');
                
                fetch(`/update-cart/${productId}`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        id: productId,
                        action: 'decrease'
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if(data.removed) {
                        // If item was removed, remove the row
                        removeItemFromCart(productId);
                    } else {
                        // Update quantity display for this item
                        updateItemQuantity(productId, data.quantity);
                    }
                    
                    // Update total price
                    if(data.total) {
                        document.querySelector('.cart-total').textContent = `$${data.total.toFixed(2)}`;
                    }
                    
                    // Update cart count
                    updateCartCount(data.cartCount);
                })
                .catch(error => {
                    console.error('Error:', error);
                    showNotification('Failed to update cart', 'error');
                });
            });
        });
    }
    
    function updateCartCount(count) {
        const cartCountElements = document.querySelectorAll('.cart-count');
        if (cartCountElements.length > 0) {
            cartCountElements.forEach(element => {
                element.textContent = count;
            });
        }
    }
    
    function updateItemQuantity(productId, quantity) {
        const quantityElement = document.querySelector(`.cart-item-quantity[data-id="${productId}"]`);
        if (quantityElement) {
            quantityElement.textContent = quantity;
        }
    }
    
    function removeItemFromCart(productId) {
        const cartRow = document.querySelector(`.cart-item[data-id="${productId}"]`);
        if (cartRow) {
            cartRow.remove();
            
            // If cart is now empty, show empty cart message
            const cartItems = document.querySelectorAll('.cart-item');
            if (cartItems.length === 0) {
                const cartTable = document.querySelector('.cart-table');
                if (cartTable) {
                    cartTable.innerHTML = '<div class="p-4 text-center">Your cart is empty</div>';
                }
            }
        }
    }
    
    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 p-3 rounded-md shadow-lg z-50 ${type === 'success' ? 'bg-green-500' : 'bg-red-500'} text-white`;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transition = 'opacity 0.5s ease';
            
            setTimeout(() => {
                notification.remove();
            }, 500);
        }, 3000);
    }
});

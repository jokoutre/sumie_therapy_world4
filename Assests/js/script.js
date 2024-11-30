// Initialize the cart from localStorage or create an empty cart
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Function to add items to the cart
function addToCart(name, price, image = "images/default.png") {
  const existingItem = cart.find(item => item.name === name);
  if (existingItem) {
    // If the product exists, increase the quantity
    existingItem.quantity++;
  } else {
    // If the product is new, add it to the cart
    cart.push({ name, price, image, quantity: 1 });
  }
  // Save the updated cart to localStorage
  localStorage.setItem('cart', JSON.stringify(cart));
  updateCartCount();
  alert(`${name} added to cart!`);
}

// Function to update the cart count in the top bar
function updateCartCount() {
  const totalItems = cart.reduce((count, item) => count + item.quantity, 0);
  const cartCountElement = document.getElementById('cart-count');
  if (cartCountElement) {
    cartCountElement.textContent = totalItems;
  }
}

// Function to display the cart items on the cart page
function displayCartItems() {
  const cartItemsContainer = document.getElementById('cart-items');
  if (!cartItemsContainer) return; // Exit if not on the cart page
  cartItemsContainer.innerHTML = ''; // Clear previous items

  if (cart.length === 0) {
    cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
    return;
  }

  // Populate the cart items dynamically
  cart.forEach((item, index) => {
    cartItemsContainer.innerHTML += `
      <div>
        <img src="${item.image}" alt="${item.name}" width="50">
        ${item.name} (UGX ${item.price}) x ${item.quantity}
        <button onclick="removeFromCart(${index})">Remove</button>
      </div>`;
  });

  // Update the total price
  const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
  const cartTotalElement = document.getElementById('cart-total');
  if (cartTotalElement) {
    cartTotalElement.textContent = total;
  }
}

// Function to remove an item from the cart
function removeFromCart(index) {
  cart.splice(index, 1); // Remove the item from the array
  localStorage.setItem('cart', JSON.stringify(cart)); // Update localStorage
  displayCartItems(); // Refresh the cart display
  updateCartCount(); // Update the cart count
}

// Event listener to initialize the cart on page load
document.addEventListener('DOMContentLoaded', () => {
  updateCartCount(); // Update the cart count on all pages
  displayCartItems(); // Display items if on the cart page
});

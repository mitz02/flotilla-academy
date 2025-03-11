<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.shopping-cart {
    padding: 20px;
    position: relative;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.cart-items {
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.contain {
           max-width: 1200px;
           margin: 0 auto;
       }

.cart-item {
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: flex-start;
    gap: 15px;
    max-width:800px;
}

.video-container {
    flex: 1;
    max-width: 150px;
    height: 100%;
}

.video-container video {
    width: 100%;
    height: 100%;
    border-radius: 8px;
    object-fit: cover;
}

.item-details {
    flex: 2;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.title-price {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.title-price h2 {
    font-size: 18px;
    margin: 0;
}

.title-price .price {
    font-size: 18px;
    font-weight: bold;
    color: #2ecc71;
}

.item-details p {
    font-size: 14px;
    color: #555;
    margin: 0;
}

.rating {
    color: #f39c12;
    font-size: 14px;
}

.details {
    font-size: 14px;
    color: #777;
}

.actions {
    display: flex;
    gap: 10px;
}

.actions button {
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}

.actions .save {
    background-color: #3498db;
    color: #fff;
}

.actions .remove {
    background-color: #e74c3c;
    color: #fff;
}

.online-details {
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    position: fixed;
    right: 20px;
    top: 150px;
    width: 300px;
}

.online-details table {
    width: 100%;
    margin-bottom: 15px;
}

.online-details table td {
    padding: 8px 0;
    font-size: 14px;
}

.online-details table td:last-child {
    text-align: right;
}

.checkout {
    width: 100%;
    padding: 12px;
    background-color: #27ae60;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

@media (max-width: 600px) {
    h1 {
        font-size: 20px;
    }

    .cart-item {
        flex-direction: column;
    }

    .video-container {
        max-width: 100%;
        height: auto;
    }

    .title-price h2 {
        font-size: 16px;
    }

    .title-price .price {
        font-size: 16px;
    }

    .item-details p, .rating, .details {
        font-size: 12px;
    }

    .actions button {
        font-size: 12px;
        padding: 6px 10px;
    }

    .online-details {
        position: static;
        width: 100%;
    }

    .checkout {
        font-size: 14px;
    }
}
</style>
    <div class="shopping-cart contain">
        <h1>Shopping Cart</h1>
        <div class="cart-items">
            <div class="cart-item">
                <div class="video-container">
                    <video controls>
                        <source src="video1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="item-details">
                    <div class="title-price">
                        <h2>Essential Foundation of Small Craft Design</h2>
                        <div class="price">NGN 65,000</div>
                    </div>
                    <p>By John Doe</p>
                    <div class="rating">4.6 ★★★★★ (250 rating)</div>
                    <div class="details">22 Total Hours · 155 Lectures · All levels</div>
                    <div class="actions">
                        <button class="save">Save for later</button>
                        <button class="remove">Remove</button>
                    </div>
                </div>
            </div>
            <!-- Repeat for other items -->


            <div class="cart-item">
                <div class="video-container">
                    <video controls>
                        <source src="video1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="item-details">
                    <div class="title-price">
                        <h2>Essential Foundation of Small Craft Design</h2>
                        <div class="price">NGN 65,000</div>
                    </div>
                    <p>By John Doe</p>
                    <div class="rating">4.6 ★★★★★ (250 rating)</div>
                    <div class="details">22 Total Hours · 155 Lectures · All levels</div>
                    <div class="actions">
                        <button class="save">Save for later</button>
                        <button class="remove">Remove</button>
                    </div>
                </div>
            </div>
            <!-- Repeat for other items -->
        </div>
        <div class="online-details">
            <table>
                <tr>
                    <td>Price</td>
                    <td>NGN 65,000</td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td>-NGN 1,000</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>NGN 20</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>NGN 66,020</td>
                </tr>
            </table>
            <button class="checkout">PROCEED TO CHECKOUT</button>
        </div>
    </div>
  
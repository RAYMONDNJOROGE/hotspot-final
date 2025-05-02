function handlePayment(event, amount) {
    event.preventDefault();

    const paymentPopup = document.getElementById('paymentpopup');
    const overlay = document.getElementById('overlay');
    const body = document.body;

    // Show popup and overlay
    paymentPopup.style.display = 'block';
    overlay.style.display = 'block';

    // Disable scrolling
    body.classList.add('no-scroll');

    console.log("Selected amount: KES", amount);
}

function closePopup(popupId) {
    const popup = document.getElementById(popupId);
    const overlay = document.getElementById('overlay');
    const body = document.body;

    // Hide popup and overlay
    popup.style.display = 'none';
    overlay.style.display = 'none';

    // Enable scrolling again
    body.classList.remove('no-scroll');
}
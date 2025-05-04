function openPopup(popupId) {
    const popup = document.getElementById(popupId);
    const overlay = document.getElementById('overlay');
    const body = document.body;

   
    popup.style.display = 'block';
    overlay.style.display = 'block';

    body.classList.add('no-scroll');
    const phoneInput = document.getElementById("phone");
    if (phoneInput) phoneInput.value = "";
}
function closePopup(popupId) {
    const popup = document.getElementById(popupId);
    const overlay = document.getElementById('overlay');
    const body = document.body;
    popup.style.display = 'none';
    overlay.style.display = 'none';
    body.classList.remove('no-scroll');
}


        
let selectedAmount = 0;
function handlePayment(event, amount) {
    event.preventDefault();
    selectedAmount = amount;
    openPopup('paymentpopup');
}
async function handlePaymentSubmit() {
    event.preventDefault();
    closePopup('paymentpopup')
  
    const phone = document.getElementById("phone").value.trim();
  

    if (!/^254\d{9}$/.test(phone)) {
      openPopup('errornpopup');
      return;
    }
    openPopup('okaypopup');  

    
    try {
        const res = await fetch("pay.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `phone=${encodeURIComponent(phone)}&amount=${encodeURIComponent(selectedAmount)}&submit=1`
        });

        const data = await res.json();
        const checkoutID = data.CheckoutRequestID;

        setTimeout(() => {
            closePopup('okaypopup');
        
            if (data.ResponseCode === "0") {
                openPopup('stkokpopup');
                setTimeout(() => closePopup('stkokpopup'), 3000);
            } else {
                openPopup('stkerrorpopup');
                setTimeout(() => closePopup('stkerrorpopup'), 3000);
            }
        }, 1000);

        // ✅ Poll every second for payment status
        if (data.ResponseCode === "0" && checkoutID) {
            const pollInterval = setInterval(async () => {
                try {
                    const statusRes = await fetch("check_status.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/x-www-form-urlencoded" },
                        body: `CheckoutRequestID=${checkoutID}`
                    });

                    const stat = await statusRes.json();

                    if (stat.ResultCode === 0) {
                        clearInterval(pollInterval);
                        
                        // Display success
                        document.getElementById("payments").textContent = `✅ Payment of KES ${selectedAmount} received from ${phone}`;
                        openPopup("popup5");
                        setTimeout(() => closePopup("popup5"), 4000);

                        // ✅ Send to database (optional)
                        await fetch("save_payment.php", {
                            method: "POST",
                            headers: { "Content-Type": "application/x-www-form-urlencoded" },
                            body: `phone=${encodeURIComponent(phone)}&amount=${selectedAmount}`
                        });
                    } 
                    else if (stat.ResultCode === 1032) {
                        clearInterval(pollInterval);
                        document.getElementById("failMessage").textContent = "❌ Payment Cancelled by User";
                        openPopup("popup5");
                        setTimeout(() => closePopup("popup5"), 4000);
                    }

                    // Otherwise still pending

                } catch (err) {
                    clearInterval(pollInterval);
                    document.getElementById("failMessage").textContent = "❌ Failed to verify payment";
                    openPopup("popup5");
                    setTimeout(() => closePopup("popup5"), 4000);
                }
            }, 1000); // every second
        }

    } catch (error) {
        console.error("STK Push failed❌:", error);
        closePopup('popup3');
        openPopup('popup4');
        document.getElementById("stkStatusMessage").textContent = "❌ Network Error. Please Try Again!";
        setTimeout(() => closePopup('popup4'), 4000);
    }
}




//Validate Code function//
function validateCode() {
    const code = document.getElementById("code").value.trim();
}


                
    
  
  
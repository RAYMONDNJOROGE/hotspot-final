<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
        <script defer src="index.js"></script> <!-- ✅ Using defer ensures script loads properly -->
        <title>Raynger Hotspot</title>
    </head>
<body>
            <!--Overlay-->
            <div id="overlay"></div>

            <!--Header-->
            <div id="header">
                    <div>
                        <h1><u>Raynger Hotspot</u></h1>    
                    </div>
            </div>

            <div id="description">
                        <p>
                            Welcome to Raynger Hotspot,<br>Choose your prefered Subscription Package and tap on 'connect' to subscribe.
                        </p>
                    </div>
            </div>
                <div id="main-con">
                    <div class="sub-boxes">
                        <h1 class="header-box">1-Hour Vybz</h1>
                        <h2 class="header2-box">@kes. 10</h2>
                        <div><button class="button-box" type="button" onclick="handlePayment(event, 10);">connect</button></div>
                    </div>
                    <div class="sub-boxes">
                        <h1 class="header-box">3-Hour Vybz</h1>
                        <h2 class="header2-box">@kes. 20</h2>
                        <div><button class="button-box" type="button" onclick="handlePayment(event, 15);">connect</button></div>
                    </div>
                    <div class="sub-boxes">
                        <h1 class="header-box">8-Hour Vybz</h1>
                        <h2 class="header2-box">@kes. 30</h2>
                        <div><button class="button-box" type="button" onclick="handlePayment(event, 20);">connect</button></div>
                    </div>
                    <div class="sub-boxes">
                        <h1 class="header-box">24-Hour Vybz</h1>
                        <h2 class="header2-box">@kes. 50</h2>
                        <div><button class="button-box" type="button" onclick="handlePayment(event, 30);">connect</button></div>
                    </div>
                    <div class="sub-boxes">
                        <h1 class="header-box">2-Day Vybz</h1>
                        <h2 class="header2-box">@kes. 70</h2>
                        <div><button class="button-box" type="button" onclick="handlePayment(event, 50);">connect</button></div>
                    </div>
                    <div class="sub-boxes">
                        <h1 class="header-box">7-Day Vybz</h1>
                        <h2 class="header2-box">@kes. 200</h2>
                        <div><button class="button-box" type="button" onclick="handlePayment(event, 170);">connect</button></div>
                    </div>
                </div>


                <div id="reconnect-div">
                        <form autocomplete="off" onsubmit="return validatePhone()">
                            <div>
                                <h1 id="h1-reconnect">Already have an active Subscription?<br>Enter your Phone Number to Reconnect</h1>
                            </div>
                            <div>
                                <input id="recon-phone" placeholder="e.g 254123456789" required><br>
                                <button id="reconnect-button" type="submit">reconnect</button>
                            </div>
                        </form>
                </div>

                <div id="voucher-div">
                        <form autocomplete="off" onsubmit="return validatePhone()">
                            <div>
                                <h1 id="h1-voucher"><u>Voucher Subscription</u></h1>
                            </div>
                            <div>
                                <div>
                                    <label for="username-voucher" id="username-label">Username:</label><br>
                                    <input id="username-voucher"  type="text" required placeholder="Username"><br>
                                </div>
                                <div>
                                    <label for="password-voucher" id="password-label">Password:</label><br>
                                    <input id="password-voucher"  type="Password" required placeholder="Password"><br>
                                </div>
                                <button id="voucher-button" type="submit">connect</button>
                            </div>
                        </form>
                </div>

<!--Footer-->

                <div id="footer">
                    <div>
                        <p id="p1-footer">Call us on: (254)717888783</p>
                        <p id="p2-footer">Raynger Hotspot &#124; All Rights Reserved</p>
                    </div>
                </div>



            <!--payment popup-->
        <div id="paymentpopup">
            <form autocomplete="off" onsubmit="return handlePaymentSubmit(event)">
                   <div>
                      <h1 id="h1-paymentpopup">Enter your Phone Number in the format 254......... and click 'Pay Now'</h1>
                   </div>
                    <div>
                    <input placeholder="e.g 254123456789" id="phone" type="number" required><br>
                    <button type="submit" id="pay-button">
                            Pay Now
                    </button>
                    <button type="button" onclick="closePopup('paymentpopup')" id="cancel-button">
                            X
                    </button>
                    </div>
            </form> 
        </div>
            <!--Phonenumber Error-->
        <div id="errornpopup">
            <p id="errorp">Error. Invalid Format!</p>
            <button type="button" onclick="closePopup('errornpopup')" id="errorokbutton">Ok</button>
        </div>

            <!--Phonenumber okay-->
        <div id="okaypopup">
            <p id="okayp">Kindly wait as we validate your Phone Number</p> 
            <div id="spinner"></div>
        </div>

           <!--Stk okay-->
        <div id="stkokpopup">
            <p id="stkokay">Phone number valid!. Check your phone and input your pin</p>
            
        </div>

          <!--Stk error-->
        <div id="stkerrorpopup">
            <p id="stkoerror">Phone number invalid or network error!. Please try again</p>
        </div>

          <!--Payment okay-->
        <div id="payokpopup">
            <p id="payokay">Payment Complete!. Kindly wait as we automatically connect you</p>
            <div id="check"></div>
        </div>

         <!--Payment Cancelled-->
        <div id="payerrorpopup">
            <p id="payerror">Payment Cancelled!</p>
            <div id="cross"></div>
        </div>

        <!--Reconnect Success-->
        <div id="reconokpopup">
            <p id="reconokay">Valid Code!. Kindly wait as we automatically reconnect you</p>
        </div>

        <!--Reconnect Failiure-->
        <div id="reconfailpopup">
            <p id="reconfail">Invalid Code!</p>
        </div>

        <style>
            *{
    font-family: 'roboto', sans-serif;
    margin: 0;
    padding: 0; 
}
body{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background: rgb(0, 0, 0,0.6) url(bodybackground.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-blend-mode: darken;
    background-position: center;
}
#header{
    background-color: white;
    background: transparent;
    border: 2px solid rgba(255,255,255,.2);
    backdrop-filter: blur(40px);
    box-shadow: 2px 2px 2px 2px rgb(34, 34, 46);
    border-radius: 10px;
    font-size: 1.6em;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    height: 80px;
    padding-left: 10px;
    padding-right: 10px;
    color: blue;
}
#description{
    background-color: white;
    background: transparent;
    border: 2px solid rgba(255,255,255,.2);
    backdrop-filter: blur(40px);
    box-shadow: 2px 2px 2px 2px rgb(34, 34, 46);
    border-radius: 10px;
    width: 100%;
    font-size: 2.2em;
    font-weight: 400;
    color: white;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    padding-left: 10px;
    padding-right: 10px;
    margin-top: 10px;
}
#main-con{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;
    gap: 10px;
    margin-top: 20px;
}
.sub-boxes{
    width: 300px;
    height: 180px;
    border-radius: 10px;
    color: white;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    text-align: center;
    border: 2px solid rgba(255,255,255,.2);
    backdrop-filter: blur(40px);
    box-shadow: 2px 2px 2px 2px rgb(34, 34, 46);
}
.header-box{
    font-weight: 600;
    padding: 0;
    font-size: 2.6em;
    width: 100%;
}
.header2-box{
    font-weight: 400;
    font-size: 2.4em;
    padding: 0;
    width: 100%;
}
.button-box{
    background-color: rgb(13, 126, 13);
    border: none;
    width: 110px;
    height: 45px;
    color: white;
    font-size: 1.5em;
    border-radius: 10px;
}
.button-box:hover{
    opacity: 0.9;
}
.button-box:active{
    background-color: rgb(123, 6, 6);
}
#paymentpopup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    height: 280px;
    width: 500px;
    justify-content: center;
    text-align: center;
    background-color: white;
    border-radius: 10px;
    z-index: 1000;
    border: 2px rgb(4, 4, 156) solid;
}
#h1-paymentpopup{
    font-size: 1.7em;
}
#phone{
    width: 300px;
    height: 45px;
    text-align: center;
    font-size: 2em;
    border-radius: 5px;
    border: black solid 1px;
}
#pay-button{
    background-color: rgb(13, 126, 13);
    border: none;
    width: 100px;
    height: 40px;
    color: white;
    font-size: 1.2em;
    border-radius: 10px;
}
#pay-button:hover{
    opacity: 0.9;
}
#pay-button:active{
    background-color: rgb(13, 13, 126);
}
#cancel-button{
    position: absolute;
    top: 0;
    right: 0;
    width: 30px;
    height: 30px;
    font-size: 1.6em;
    background-color: rgb(137, 7, 7);
    color: white;
    border: none;
    border-radius: 5px;
}
#cancel-button:hover{
    opacity: 0.9;
}
#cancel-button:active{
    background-color: black;
}
#errornpopup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    height: 110px;
    width: 400px;
    justify-content: center;
    text-align: center;
    color: white;
    background-color: white;
    border-radius: 10px;
    z-index: 1000;
    border: 2px rgb(156, 4, 4) solid;
}
#errorp{
    font-size: 2.2em;
    color: rgb(156, 4, 4);
    font-weight: 500;
}
#errorokbutton{
    background-color: rgb(156, 4, 4);
    border: none;
    width: 50px;
    height: 40px;
    color: white;
    font-size: 1.2em;
    border-radius: 50px;
    margin-top: 20px;
}
#errorokbutton:active{
    opacity: 0.7;
}
#okaypopup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    height: 160px;
    width: 400px;
    justify-content: center;
    text-align: center;
    color: white;
    background-color: white;
    border-radius: 10px;
    z-index: 1000;
    border: 2px rgb(4, 4, 156) solid;
}
#spinner {
    margin: 20px auto;
    width: 30px;
    height: 30px;
    border: 5px solid rgba(0, 0, 255, 0.2);
    border-top-color: rgb(4, 4, 156);
    border-radius: 50%;
    animation: spin 1s linear infinite;
}
#spinner2{
    margin: 10px auto;
    width: 40px;
    height: 40px;
    border: 5px solid rgba(0, 0, 255, 0.2);
    border-top-color: rgb(4, 4, 156);
    border-radius: 50%;
    animation: spin 1s linear infinite;
} 
  @keyframes spin {
    to {
      transform: rotate(360deg);
    }
  }
#okayp{
    font-size: 2.2em;
    color: rgb(4, 4, 156);
    font-weight: 500;
    padding-top: 5px;
}
#stkokpopup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    height: 200px;
    width: 400px;
    justify-content: center;
    text-align: center;
    color: white;
    background-color: white;
    border-radius: 10px;
    z-index: 1000;
    border: 2px rgb(4, 156, 4) solid;
}
#stkokay{
    font-size: 2.2em;
    color: rgb(4, 156, 4);
    font-weight: 500;
}
#stkerrorpopup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    height: 200px;
    width: 400px;
    justify-content: center;
    text-align: center;
    color: white;
    background-color: white;
    border-radius: 10px;
    z-index: 1000;
    border: 2px rgb(156, 4, 4) solid;
}
#stkerror{
    font-size: 2.2em;
    color: rgb(156, 4, 4);
    font-weight: 500;
}
#payokpopup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    height: 200px;
    width: 400px;
    justify-content: center;
    text-align: center;
    color: white;
    background-color: white;
    border-radius: 10px;
    z-index: 1000;
    border: 2px rgb(4, 156, 4) solid;
}
#payokay{
    font-size: 2.2em;
    color: rgb(4, 156, 4);
    font-weight: 500;
}
#payerrorpopup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    height: 200px;
    width: 400px;
    justify-content: center;
    text-align: center;
    color: white;
    background-color: white;
    border-radius: 10px;
    z-index: 1000;
    border: 2px rgb(156, 4, 4) solid;
}
#payerror{
    font-size: 2.2em;
    color: rgb(156, 4, 4);
    font-weight: 500;
}
#reconnect-div{
    width: 100%;
    height: 310px;
    color: white;
    background-color: white;
    background: transparent;
    border: 2px solid rgba(255,255,255,.2);
    backdrop-filter: blur(40px);
    box-shadow: 2px 2px 2px 2px rgb(34, 34, 46);
    border-radius: 5px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px;
    margin-top: 50px;
    margin-bottom: 20px;
}
#h1-reconnect{
    font-size: 2.6em;
    font-weight: 400;
}
#recon-phone{
    width: 400px;
    height: 45px;
    text-align: center;
    font-size: 2em;
    border-radius: 5px;
    border: black solid 1px;
}
#reconnect-button{
    width: 100%;
    height: 100%;
    background-color: rgb(13, 126, 13);
    border: none;
    width: 150px;
    height: 40px;
    color: white;
    font-size: 1.6em;
    border-radius: 10px;
}
#reconnect-button:hover{
    opacity: 0.9;
}
#reconnect-button:active{
    background-color: rgb(123, 6, 6);
}
#reconokpopup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    height: 200px;
    width: 400px;
    justify-content: center;
    text-align: center;
    color: white;
    background-color: white;
    border-radius: 10px;
    z-index: 1000;
    border: 2px rgb(4, 156, 4) solid;
}
#reconokay{
    color: rgb(4, 156, 4);
    font-size: 2.2em;
    font-size: 500;
}
#reconfailpopup{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    height: 200px;
    width: 400px;
    justify-content: center;
    text-align: center;
    color: white;
    background-color: white;
    border-radius: 10px;
    z-index: 1000;
    border: 2px rgb(156, 4, 4) solid;
}
#reconfail{
    color: rgb(156, 4, 4);
    font-size: 2.2em;
    font-size: 500;
}
#voucher-div{
    width: 100%;
    height: 350px;
    color: white;
    background-color: white;
    background: transparent;
    border: 2px solid rgba(255,255,255,.2);
    backdrop-filter: blur(40px);
    box-shadow: 2px 2px 2px 2px rgb(34, 34, 46);
    border-radius: 5px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
    margin-bottom: 20px;
}
#h1-voucher{
    font-size: 2.8em;
    padding-bottom: 20px;
}
#username-label{
    font-size: 2em;
    font-weight: 400;
}
#username-voucher{
    width: 400px;
    height: 45px;
    text-align: center;
    font-size: 2em;
    margin-bottom: 20px;
    border-radius: 5px;
    border: black solid 1px;
}
#password-label{
    font-size: 2em;
    font-weight: 400;
}
#password-voucher{
    width: 400px;
    height: 45px;
    text-align: center;
    font-size: 2em;
    margin-bottom: 10px;
    border-radius: 5px;
    border: black solid 1px;
}
#voucher-button{
    width: 100%;
    height: 100%;
    background-color: rgb(13, 126, 13);
    border: none;
    width: 150px;
    height: 40px;
    color: white;
    font-size: 1.6em;
    border-radius: 10px;
}
#footer{  
    background-color: white;
    background: transparent;
    border: 2px solid rgba(255,255,255,.2);
    backdrop-filter: blur(40px);
    box-shadow: 2px 2px 2px 2px rgb(34, 34, 46);
    border-radius: 10px;
    width: 100%;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    height: auto;
    z-index: auto;
}
#p1-footer{
    font-size: 1.8em;
}
#p2-footer{
    font-size: 1.4em;
}
#overlay {
    position: fixed;
    top: 0; left: 0;
    width: 100vw; height: 100vh;
    background: rgba(0, 0, 0, 0.6);
    display: none;
    transition: opacity 0.3s ease;
    z-index: 999;
}
.no-scroll {
    overflow: hidden;
    height: 100vh; /* Optional: Prevent unwanted layout shifts */
}
@media (min-width: 100px) {
    #header{
        height: 75px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1em;
    }
    #description{
        font-size: 1em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 100px;
        gap: 5px;
    }
    .sub-boxes{
        width: 170px;
        height: 120px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 1.1em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 1em;
    }
    .button-box{
        width: 55px;
        height: 25px;
        font-size: 0.8em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 190px;
        width: 160px;
        padding-left: 5px;
        padding-right: 5px;
    }
    #h1-paymentpopup{
        font-size: 1.1em;
        padding-top: 10px;
    }
    #phone{
        width: 150px;
        height: 25px;
        font-size: 1.1em;
        margin-bottom: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }
    #pay-button{
        width: 60px;
        height: 20px;
        font-size: 0.7em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 15px;
        height: 15px;
        font-size: 0.9em;
    }
    #errornpopup{
        height: 100px;
        width: 150px;
    }
    #errorp{
        font-size: 1.2em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 30px;
        height: 20px;
        font-size: 0.9em;
    }
    #okaypopup{
        height: 130px;
        width: 170px;
    }
    #spinner {
        width: 20px;
        height: 20px;
    }
    #okayp{
        font-size: 1.2em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 130px;
        width: 170px;
    }
    #stkokay{
        font-size: 1.2em;
    }
    #stkerrorpopup{
        height: 100px;
        width: 150px;
    }
    #stkerror{
        font-size: 1.2em;
    }
    #payokpopup{
        height: 130px;
        width: 170px;
    }
    #payokay{
        font-size: 1.2em;
    }
    #payerrorpopup{
        height: 100px;
        width: 150px;
    }
    #payerror{
        font-size: 1.2em;
    }
    #reconnect-div{
        height: 260px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 1.1em;
        font-weight: 400;
    }
    #recon-phone{
        width: 140px;
        height: 30px;
        font-size: 1.1em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 100px;
        height: 30px;
        font-size: 1em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 130px;
        width: 170px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 1.4em;
    }
    #reconfailpopup{
        height: 130px;
        width: 150px;
    }
    #reconfail{
        font-size: 1.2em;
    }
    #voucher-div{
        height: 290px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 1.4em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 1em;
        font-weight: 400;
    }
    #username-voucher{
        width: 150px;
        height: 30px;
        font-size: 1em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 1em;
        font-weight: 400;
    }
    #password-voucher{
        width: 150px;
        height: 30px;
        font-size: 1em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 90px;
        height: 30px;
        font-size: 1.1em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 1.1em;
    }
    #p2-footer{
        font-size: 0.8em;
    }
}
@media (min-width: 200px) {
    #header{
        height: 70px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 0.9em;
    }
    #description{
        font-size: 1.1em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 200px;
        gap: 5px;
    }
    .sub-boxes{
        width: 150px;
        height: 90px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 1em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 1.3em;
    }
    .button-box{
        width: 50px;
        height: 25px;
        font-size: 0.7em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 180px;
        width: 180px;
        padding-left: 5px;
        padding-right: 5px;
    }
    #h1-paymentpopup{
        font-size: 1.1em;
        padding-top: 10px;
    }
    #phone{
        width: 180px;
        height: 25px;
        font-size: 1.1em;
        margin-bottom: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }
    #pay-button{
        width: 60px;
        height: 20px;
        font-size: 0.7em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 15px;
        height: 15px;
        font-size: 0.9em;
    }
    #errornpopup{
        height: 100px;
        width: 150px;
    }
    #errorp{
        font-size: 1.2em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 30px;
        height: 20px;
        font-size: 0.9em;
    }
    #okaypopup{
        height: 130px;
        width: 170px;
    }
    #spinner {
        width: 20px;
        height: 20px;
    }
    #okayp{
        font-size: 1.2em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 130px;
        width: 170px;
    }
    #stkokay{
        font-size: 1.2em;
    }
    #stkerrorpopup{
        height: 100px;
        width: 150px;
    }
    #stkerror{
        font-size: 1.2em;
    }
    #payokpopup{
        height: 130px;
        width: 170px;
    }
    #payokay{
        font-size: 1.2em;
    }
    #payerrorpopup{
        height: 100px;
        width: 150px;
    }
    #payerror{
        font-size: 1.2em;
    }
    #reconnect-div{
        height: 260px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 1.2em;
        font-weight: 400;
    }
    #recon-phone{
        width: 170px;
        height: 30px;
        font-size: 1.25em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 100px;
        height: 30px;
        font-size: 1.1em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 130px;
        width: 170px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 1.4em;
    }
    #reconfailpopup{
        height: 130px;
        width: 150px;
    }
    #reconfail{
        font-size: 1.2em;
    }
    #voucher-div{
        height: 290px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 1.4em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 1em;
        font-weight: 400;
    }
    #username-voucher{
        width: 170px;
        height: 30px;
        font-size: 1em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 1em;
        font-weight: 400;
    }
    #password-voucher{
        width: 170px;
        height: 30px;
        font-size: 1em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 90px;
        height: 30px;
        font-size: 1.1em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 1.1em;
    }
    #p2-footer{
        font-size: 0.8em;
    }
}
@media (min-width: 300px) {
    #header{
        height: 60px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.1em;
    }
    #description{
        font-size: 1.4em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 300px;
        gap: 5px;
    }
    .sub-boxes{
        width: 140px;
        height: 180px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 1.8em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 1.6em;
    }
    .button-box{
        width: 90px;
        height: 35px;
        font-size: 1.2em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 200px;
        width: 280px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 1.4em;
        padding-top: 20px;
    }
    #phone{
        width: 200px;
        height: 35px;
        font-size: 1.4em;
        margin-bottom: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }
    #pay-button{
        width: 100px;
        height: 30px;
        font-size: 1em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 25px;
        height: 25px;
        font-size: 1.2em;
    }
    #errornpopup{
        height: 100px;
        width: 280px;
    }
    #errorp{
        font-size: 1.8em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 40px;
        height: 30px;
        font-size: 1em;
    }
    #okaypopup{
        height: 130px;
        width: 280px;
    }
    #spinner {
        width: 25px;
        height: 25px;
    }
    #okayp{
        font-size: 1.6em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 130px;
        width: 280px;
    }
    #stkokay{
        font-size: 1.6em;
    }
    #stkerrorpopup{
        height: 130px;
        width: 280px;
    }
    #stkerror{
        font-size: 1.6em;
    }
    #payokpopup{
        height: 130px;
        width: 280px;
    }
    #payokay{
        font-size: 1.6em;
    }
    #payerrorpopup{
        height: 130px;
        width: 280px;
    }
    #payerror{
        font-size: 1.6em;
    }
    #reconnect-div{
        height: 260px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 1.6em;
        font-weight: 400;
    }
    #recon-phone{
        width: 240px;
        height: 40px;
        font-size: 1.6em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 110px;
        height: 40px;
        font-size: 1.3em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 130px;
        width: 280px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 1.6em;
    }
    #reconfailpopup{
        height: 130px;
        width: 280px;
    }
    #reconfail{
        font-size: 1.6em;
    }
    #voucher-div{
        height: 350px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 2em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 1.5em;
        font-weight: 400;
    }
    #username-voucher{
        width: 240px;
        height: 40px;
        font-size: 1.5em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 1.5em;
        font-weight: 400;
    }
    #password-voucher{
        width: 240px;
        height: 40px;
        font-size: 1.5em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 100px;
        height: 40px;
        font-size: 1.4em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 1.4em;
    }
    #p2-footer{
        font-size: 1.1em;
    }
}
@media (min-width: 350px) {
    #header{
        height: 60px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.2em;
    }
    #description{
        font-size: 1.5em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 350px;
        gap: 10px;
    }
    .sub-boxes{
        width: 165px;
        height: 180px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 1.85em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 1.65em;
    }
    .button-box{
        width: 95px;
        height: 37px;
        font-size: 1.3em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 210px;
        width: 310px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 1.5em;
        padding-top: 20px;
    }
    #phone{
        width: 250px;
        height: 35px;
        font-size: 1.6em;
        margin-bottom: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }
    #pay-button{
        width: 110px;
        height: 30px;
        font-size: 1.2em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 27px;
        height: 27px;
        font-size: 1.2em;
    }
    #errornpopup{
        height: 120px;
        width: 300px;
    }
    #errorp{
        font-size: 1.9em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 50px;
        height: 40px;
        font-size: 1.1em;
    }
    #okaypopup{
        height: 180px;
        width: 300px;
    }
    #spinner {
        width: 30px;
        height: 30px;
    }
    #okayp{
        font-size: 1.8em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 140px;
        width: 300px;
    }
    #stkokay{
        font-size: 1.4em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 300px;
    }
    #stkerror{
        font-size: 1.8em;
    }
    #payokpopup{
        height: 140px;
        width: 300px;
    }
    #payokay{
        font-size: 1.8em;
    }
    #payerrorpopup{
        height: 140px;
        width: 300px;
    }
    #payerror{
        font-size: 1.8em;
    }
    #reconnect-div{
        height: 270px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 1.7em;
        font-weight: 400;
    }
    #recon-phone{
        width: 300px;
        height: 40px;
        font-size: 1.8em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 110px;
        height: 40px;
        font-size: 1.3em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 130px;
        width: 280px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 1.8em;
    }
    #reconfailpopup{
        height: 140px;
        width: 300px;
    }
    #reconfail{
        font-size: 1.8em;
    }
    #voucher-div{
        height: 350px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 2.2em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 1.6em;
        font-weight: 400;
    }
    #username-voucher{
        width: 240px;
        height: 40px;
        font-size: 1.6em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 1.6em;
        font-weight: 400;
    }
    #password-voucher{
        width: 240px;
        height: 40px;
        font-size: 1.6em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 100px;
        height: 40px;
        font-size: 1.4em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 1.6em;
    }
    #p2-footer{
        font-size: 1.3em;
    }
}
@media (min-width: 400px) {
    #header{
        height: 70px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.4em;
    }
    #description{
        font-size: 1.6em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 400px;
        gap: 10px;
    }
    .sub-boxes{
        width: 190px;
        height: 180px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 1.9em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 1.8em;
    }
    .button-box{
        width: 100px;
        height: 40px;
        font-size: 1.5em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 210px;
        width: 310px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 1.5em;
        padding-top: 20px;
    }
    #phone{
        width: 250px;
        height: 35px;
        font-size: 1.6em;
        margin-bottom: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }
    #pay-button{
        width: 110px;
        height: 30px;
        font-size: 1.2em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 27px;
        height: 27px;
        font-size: 1.2em;
    }
    #errornpopup{
        height: 120px;
        width: 300px;
    }
    #errorp{
        font-size: 1.9em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 50px;
        height: 40px;
        font-size: 1.1em;
    }
    #okaypopup{
        height: 180px;
        width: 300px;
    }
    #spinner {
        width: 30px;
        height: 30px;
    }
    #okayp{
        font-size: 1.8em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 140px;
        width: 300px;
    }
    #stkokay{
        font-size: 1.4em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 300px;
    }
    #stkerror{
        font-size: 1.8em;
    }
    #payokpopup{
        height: 140px;
        width: 300px;
    }
    #payokay{
        font-size: 1.8em;
    }
    #payerrorpopup{
        height: 140px;
        width: 300px;
    }
    #payerror{
        font-size: 1.8em;
    }
    #reconnect-div{
        height: 280px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 1.8em;
        font-weight: 400;
    }
    #recon-phone{
        width: 300px;
        height: 40px;
        font-size: 1.8em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 110px;
        height: 40px;
        font-size: 1.3em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 130px;
        width: 280px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 1.8em;
    }
    #reconfailpopup{
        height: 140px;
        width: 300px;
    }
    #reconfail{
        font-size: 1.8em;
    }
    #voucher-div{
        height: 360px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 2.4em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 1.65em;
        font-weight: 400;
    }
    #username-voucher{
        width: 240px;
        height: 40px;
        font-size: 1.65em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 1.65em;
        font-weight: 400;
    }
    #password-voucher{
        width: 240px;
        height: 40px;
        font-size: 1.65em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 100px;
        height: 40px;
        font-size: 1.4em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 1.65em;
    }
    #p2-footer{
        font-size: 1.3em;
    }
}
@media (min-width: 450px) {
    #header{
        height: 70px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.4em;
    }
    #description{
        font-size: 1.7em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 450px;
        gap: 10px;
    }
    .sub-boxes{
        width: 215px;
        height: 180px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 2em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 1.9em;
    }
    .button-box{
        width: 100px;
        height: 40px;
        font-size: 1.5em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 210px;
        width: 310px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 1.5em;
        padding-top: 20px;
    }
    #phone{
        width: 250px;
        height: 35px;
        font-size: 1.6em;
        margin-bottom: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }
    #pay-button{
        width: 110px;
        height: 30px;
        font-size: 1.2em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 27px;
        height: 27px;
        font-size: 1.2em;
    }
    #errornpopup{
        height: 120px;
        width: 300px;
    }
    #errorp{
        font-size: 1.9em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 50px;
        height: 40px;
        font-size: 1.1em;
    }
    #okaypopup{
        height: 180px;
        width: 300px;
    }
    #spinner {
        width: 30px;
        height: 30px;
    }
    #okayp{
        font-size: 1.8em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 140px;
        width: 300px;
    }
    #stkokay{
        font-size: 1.4em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 300px;
    }
    #stkerror{
        font-size: 1.8em;
    }
    #payokpopup{
        height: 140px;
        width: 300px;
    }
    #payokay{
        font-size: 1.8em;
    }
    #payerrorpopup{
        height: 140px;
        width: 300px;
    }
    #payerror{
        font-size: 1.8em;
    }
    #reconnect-div{
        height: 280px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 1.9em;
        font-weight: 400;
    }
    #recon-phone{
        width: 300px;
        height: 40px;
        font-size: 1.9em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 120px;
        height: 40px;
        font-size: 1.4em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 130px;
        width: 280px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 1.8em;
    }
    #reconfailpopup{
        height: 140px;
        width: 300px;
    }
    #reconfail{
        font-size: 1.8em;
    }
    #voucher-div{
        height: 370px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 2.6em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 1.7em;
        font-weight: 400;
    }
    #username-voucher{
        width: 240px;
        height: 40px;
        font-size: 1.7em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 1.7em;
        font-weight: 400;
    }
    #password-voucher{
        width: 240px;
        height: 40px;
        font-size: 1.7em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 110px;
        height: 40px;
        font-size: 1.5em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 1.7em;
    }
    #p2-footer{
        font-size: 1.35em;
    }
}
@media (min-width: 500px) {
    #header{
        height: 70px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.4em;
    }
    #description{
        font-size: 1.75em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 500px;
        gap: 10px;
    }
    .sub-boxes{
        width: 240px;
        height: 180px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 2.1em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 2em;
    }
    .button-box{
        width: 110px;
        height: 50px;
        font-size: 1.6em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 230px;
        width: 400px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 1.6em;
        padding-top: 25px;
    }
    #phone{
        width: 260px;
        height: 38px;
        font-size: 1.8em;
        margin-bottom: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }
    #pay-button{
        width: 120px;
        height: 40px;
        font-size: 1.3em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 30px;
        height: 30px;
        font-size: 1.2em;
    }
    #errornpopup{
        height: 130px;
        width: 350px;
    }
    #errorp{
        font-size: 2em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 60px;
        height: 50px;
        font-size: 1.4em;
    }
    #okaypopup{
        height: 175px;
        width: 380px;
    }
    #spinner {
        width: 35px;
        height: 35px;
    }
    #okayp{
        font-size: 2em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 160px;
        width: 380px;
    }
    #stkokay{
        font-size: 1.6em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 350px;
    }
    #stkerror{
        font-size: 2em;
    }
    #payokpopup{
        height: 175px;
        width: 380px;
    }
    #payokay{
        font-size: 2em;
    }
    #payerrorpopup{
        height: 140px;
        width: 350px;
    }
    #payerror{
        font-size: 2em;
    }
    #reconnect-div{
        height: 290px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 2em;
        font-weight: 400;
    }
    #recon-phone{
        width: 320px;
        height: 40px;
        font-size: 2em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 120px;
        height: 40px;
        font-size: 1.4em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 380px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2em;
    }
    #reconfailpopup{
        height: 140px;
        width: 350px;
    }
    #reconfail{
        font-size: 2em;
    }
    #voucher-div{
        height: 370px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 2.7em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 1.8em;
        font-weight: 400;
    }
    #username-voucher{
        width: 300px;
        height: 40px;
        font-size: 1.8em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 1.8em;
        font-weight: 400;
    }
    #password-voucher{
        width: 300px;
        height: 40px;
        font-size: 1.8em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 120px;
        height: 40px;
        font-size: 1.6em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 1.75em;
    }
    #p2-footer{
        font-size: 1.4em;
    }
}
@media (min-width: 550px) {
    #header{
        height: 70px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.5em;
    }
    #description{
        font-size: 1.8em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 550px;
        gap: 10px;
    }
    .sub-boxes{
        width: 265px;
        height: 180px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 2.1em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 2em;
    }
    .button-box{
        width: 110px;
        height: 50px;
        font-size: 1.6em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 230px;
        width: 400px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 1.6em;
        padding-top: 25px;
    }
    #phone{
        width: 260px;
        height: 38px;
        font-size: 1.8em;
        margin-bottom: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }
    #pay-button{
        width: 120px;
        height: 40px;
        font-size: 1.3em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 30px;
        height: 30px;
        font-size: 1.2em;
    }
    #errornpopup{
        height: 130px;
        width: 350px;
    }
    #errorp{
        font-size: 2em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 60px;
        height: 50px;
        font-size: 1.4em;
    }
    #okaypopup{
        height: 175px;
        width: 380px;
    }
    #spinner {
        width: 35px;
        height: 35px;
    }
    #okayp{
        font-size: 2em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 160px;
        width: 380px;
    }
    #stkokay{
        font-size: 1.6em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 350px;
    }
    #stkerror{
        font-size: 2em;
    }
    #payokpopup{
        height: 175px;
        width: 380px;
    }
    #payokay{
        font-size: 2em;
    }
    #payerrorpopup{
        height: 140px;
        width: 350px;
    }
    #payerror{
        font-size: 2em;
    }
    #reconnect-div{
        height: 290px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 2em;
        font-weight: 400;
    }
    #recon-phone{
        width: 320px;
        height: 40px;
        font-size: 2em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 120px;
        height: 40px;
        font-size: 1.4em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 380px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2em;
    }
    #reconfailpopup{
        height: 140px;
        width: 350px;
    }
    #reconfail{
        font-size: 2em;
    }
    #voucher-div{
        height: 370px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 2.7em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 1.9em;
        font-weight: 400;
    }
    #username-voucher{
        width: 350px;
        height: 45px;
        font-size: 1.9em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 1.9em;
        font-weight: 400;
    }
    #password-voucher{
        width: 350px;
        height: 45px;
        font-size: 1.9em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 130px;
        height: 40px;
        font-size: 1.7em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 1.8em;
    }
    #p2-footer{
        font-size: 1.45em;
    }
}
@media (min-width: 600px) {
    #header{
        height: 70px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.5em;
    }
    #description{
        font-size: 1.8em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 600px;
        gap: 10px;
    }
    .sub-boxes{
        width: 290px;
        height: 180px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 2.2em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 2.1em;
    }
    .button-box{
        width: 110px;
        height: 50px;
        font-size: 1.6em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 230px;
        width: 400px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 1.6em;
        padding-top: 25px;
    }
    #phone{
        width: 260px;
        height: 38px;
        font-size: 1.8em;
        margin-bottom: 10px;
        border-radius: 5px;
        margin-top: 10px;
    }
    #pay-button{
        width: 120px;
        height: 40px;
        font-size: 1.3em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 30px;
        height: 30px;
        font-size: 1.2em;
    }
    #errornpopup{
        height: 130px;
        width: 350px;
    }
    #errorp{
        font-size: 2em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 60px;
        height: 50px;
        font-size: 1.4em;
    }
    #okaypopup{
        height: 175px;
        width: 380px;
    }
    #spinner {
        width: 35px;
        height: 35px;
    }
    #okayp{
        font-size: 2em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 160px;
        width: 380px;
    }
    #stkokay{
        font-size: 1.6em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 350px;
    }
    #stkerror{
        font-size: 2em;
    }
    #payokpopup{
        height: 175px;
        width: 380px;
    }
    #payokay{
        font-size: 2em;
    }
    #payerrorpopup{
        height: 140px;
        width: 350px;
    }
    #payerror{
        font-size: 2em;
    }
    #reconnect-div{
        height: 290px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 2.2em;
        font-weight: 400;
    }
    #recon-phone{
        width: 320px;
        height: 55px;
        font-size: 2.2em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 130px;
        height: 50px;
        font-size: 1.6em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 380px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2em;
    }
    #reconfailpopup{
        height: 140px;
        width: 350px;
    }
    #reconfail{
        font-size: 2em;
    }
    #voucher-div{
        height: 370px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 2.9em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 1.95em;
        font-weight: 400;
    }
    #username-voucher{
        width: 350px;
        height: 45px;
        font-size: 1.95em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 1.95em;
        font-weight: 400;
    }
    #password-voucher{
        width: 350px;
        height: 45px;
        font-size: 1.95em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 130px;
        height: 40px;
        font-size: 1.75em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 1.85em;
    }
    #p2-footer{
        font-size: 1.5em;
    }
}
@media (min-width: 700px) {
    #header{
        height: 80px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.6em;
    }
    #description{
        font-size: 1.9em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 700px;
        gap: 10px;
    }
    .sub-boxes{
        width: 340px;
        height: 180px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 2.5em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 2.3em;
    }
    .button-box{
        width: 130px;
        height: 50px;
        font-size: 1.9em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 250px;
        width: 500px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 1.8em;
        padding-top: 30px;
    }
    #phone{
        width: 280px;
        height: 40px;
        font-size: 2em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 120px;
        height: 40px;
        font-size: 1.3em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 33px;
        height: 33px;
        font-size: 1.3em;
    }
    #errornpopup{
        height: 140px;
        width: 450px;
    }
    #errorp{
        font-size: 2.2em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 65px;
        height: 55px;
        font-size: 1.6em;
    }
    #okaypopup{
        height: 175px;
        width: 500px;
    }
    #spinner {
        width: 37px;
        height: 37px;
    }
    #okayp{
        font-size: 2.2em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 180px;
        width: 500px;
    }
    #stkokay{
        font-size: 1.8em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 450px;
    }
    #stkerror{
        font-size: 2.2em;
    }
    #payokpopup{
        height: 175px;
        width: 500px;
    }
    #payokay{
        font-size: 2.2em;
    }
    #payerrorpopup{
        height: 140px;
        width: 450px;
    }
    #payerror{
        font-size: 2.2em;
    }
    #reconnect-div{
        height: 290px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 2.4em;
        font-weight: 400;
    }
    #recon-phone{
        width: 400px;
        height: 55px;
        font-size: 2.4em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 130px;
        height: 50px;
        font-size: 1.6em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 500px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2.2em;
    }
    #reconfailpopup{
        height: 140px;
        width: 450px;
    }
    #reconfail{
        font-size: 2.2em;
    }
    #voucher-div{
        height: 370px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 3em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 2em;
        font-weight: 400;
    }
    #username-voucher{
        width: 400px;
        height: 45px;
        font-size: 2em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 2em;
        font-weight: 400;
    }
    #password-voucher{
        width: 400px;
        height: 45px;
        font-size: 2em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 130px;
        height: 45px;
        font-size: 1.8em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 1.95em;
    }
    #p2-footer{
        font-size: 1.55em;
    }
}
@media (min-width: 750px) {
    #header{
        height: 80px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.65em;
    }
    #description{
        font-size: 2em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 750px;
        gap: 10px;
    }
    .sub-boxes{
        width: 365px;
        height: 200px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 2.7em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 2.5em;
    }
    .button-box{
        width: 140px;
        height: 55px;
        font-size: 2.1em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 280px;
        width: 600px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 2.2em;
        padding-top: 35px;
    }
    #phone{
        width: 350px;
        height: 50px;
        font-size: 2.4em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 130px;
        height: 45px;
        font-size: 1.5em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 35px;
        height: 35px;
        font-size: 1.4em;
    }
    #errornpopup{
        height: 150px;
        width: 520px;
    }
    #errorp{
        font-size: 2.5em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 70px;
        height: 60px;
        font-size: 1.7em;
    }
    #okaypopup{
        height: 180px;
        width: 600px;
    }
    #spinner {
        width: 40px;
        height: 40px;
    }
    #okayp{
        font-size: 2.4em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 180px;
        width: 600px;
    }
    #stkokay{
        font-size: 2em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 520px;
    }
    #stkerror{
        font-size: 2.4em;
    }
    #payokpopup{
        height: 175px;
        width: 600px;
    }
    #payokay{
        font-size: 2.4em;
    }
    #payerrorpopup{
        height: 140px;
        width: 520px;
    }
    #payerror{
        font-size: 2.4em;
    }
    #reconnect-div{
        height: 310px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 2.6em;
        font-weight: 400;
    }
    #recon-phone{
        width: 400px;
        height: 55px;
        font-size: 2.4em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 140px;
        height: 50px;
        font-size: 1.7em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 600px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2.4em;
    }
    #reconfailpopup{
        height: 140px;
        width: 520px;
    }
    #reconfail{
        font-size: 2.4em;
    }
    #voucher-div{
        height: 380px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 3.2em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 2.2em;
        font-weight: 400;
    }
    #username-voucher{
        width: 500px;
        height: 50px;
        font-size: 2.2em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 2.2em;
        font-weight: 400;
    }
    #password-voucher{
        width: 500px;
        height: 50px;
        font-size: 2.2em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 140px;
        height: 50px;
        font-size: 2em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 2em;
    }
    #p2-footer{
        font-size: 1.6em;
    }
}
@media (min-width: 800px) {
    #header{
        height: 80px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.8em;
    }
    #description{
        font-size: 2.4em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 800px;
        gap: 10px;
    }
    .sub-boxes{
        width: 390px;
        height: 200px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 2.8em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 2.6em;
    }
    .button-box{
        width: 140px;
        height: 55px;
        font-size: 2.1em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 280px;
        width: 600px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 2.2em;
        padding-top: 35px;
    }
    #phone{
        width: 350px;
        height: 50px;
        font-size: 2.4em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 130px;
        height: 45px;
        font-size: 1.5em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 35px;
        height: 35px;
        font-size: 1.4em;
    }
    #errornpopup{
        height: 150px;
        width: 520px;
    }
    #errorp{
        font-size: 2.5em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 70px;
        height: 60px;
        font-size: 1.7em;
    }
    #okaypopup{
        height: 180px;
        width: 600px;
    }
    #spinner {
        width: 40px;
        height: 40px;
    }
    #okayp{
        font-size: 2.4em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 180px;
        width: 600px;
    }
    #stkokay{
        font-size: 2em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 520px;
    }
    #stkerror{
        font-size: 2.4em;
    }
    #payokpopup{
        height: 175px;
        width: 600px;
    }
    #payokay{
        font-size: 2.4em;
    }
    #payerrorpopup{
        height: 140px;
        width: 520px;
    }
    #payerror{
        font-size: 2.4em;
    }
    #reconnect-div{
        height: 320px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 2.8em;
        font-weight: 400;
    }
    #recon-phone{
        width: 400px;
        height: 55px;
        font-size: 2.6em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 150px;
        height: 55px;
        font-size: 1.9em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 600px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2.4em;
    }
    #reconfailpopup{
        height: 140px;
        width: 520px;
    }
    #reconfail{
        font-size: 2.4em;
    }
    #voucher-div{
        height: 400px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 3.4em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 2.4em;
        font-weight: 400;
    }
    #username-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.4em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 2.4em;
        font-weight: 400;
    }
    #password-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.4em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 140px;
        height: 50px;
        font-size: 2.2em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 2.05em;
    }
    #p2-footer{
        font-size: 1.65em;
    }
}
@media (min-width: 850px) {
    #header{
        height: 90px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.9em;
    }
    #description{
        font-size: 2.6em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 850px;
        gap: 10px;
    }
    .sub-boxes{
        width: 415px;
        height: 220px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 2.9em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 2.7em;
    }
    .button-box{
        width: 140px;
        height: 55px;
        font-size: 2.1em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 280px;
        width: 600px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 2.2em;
        padding-top: 35px;
    }
    #phone{
        width: 350px;
        height: 50px;
        font-size: 2.4em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 130px;
        height: 45px;
        font-size: 1.5em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 35px;
        height: 35px;
        font-size: 1.4em;
    }
    #errornpopup{
        height: 150px;
        width: 520px;
    }
    #errorp{
        font-size: 2.5em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 70px;
        height: 60px;
        font-size: 1.7em;
    }
    #okaypopup{
        height: 180px;
        width: 600px;
    }
    #spinner {
        width: 40px;
        height: 40px;
    }
    #okayp{
        font-size: 2.4em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 180px;
        width: 600px;
    }
    #stkokay{
        font-size: 2em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 520px;
    }
    #stkerror{
        font-size: 2.4em;
    }
    #payokpopup{
        height: 175px;
        width: 600px;
    }
    #payokay{
        font-size: 2.4em;
    }
    #payerrorpopup{
        height: 140px;
        width: 520px;
    }
    #payerror{
        font-size: 2.4em;
    }
    #reconnect-div{
        height: 360px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 3em;
        font-weight: 400;
    }
    #recon-phone{
        width: 420px;
        height: 60px;
        font-size: 2.8em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 150px;
        height: 55px;
        font-size: 1.9em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 600px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2.4em;
    }
    #reconfailpopup{
        height: 140px;
        width: 520px;
    }
    #reconfail{
        font-size: 2.4em;
    }
    #voucher-div{
        height: 420px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 3.6em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 2.5em;
        font-weight: 400;
    }
    #username-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 2.5em;
        font-weight: 400;
    }
    #password-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 140px;
        height: 50px;
        font-size: 2.2em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 2.1em;
    }
    #p2-footer{
        font-size: 1.7em;
    }
}
@media (min-width: 900px) {
    #header{
        height: 90px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.9em;
    }
    #description{
        font-size: 2.6em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 900px;
        gap: 10px;
    }
    .sub-boxes{
        width: 425px;
        height: 230px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 2.9em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 2.7em;
    }
    .button-box{
        width: 140px;
        height: 55px;
        font-size: 2.1em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 280px;
        width: 600px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 2.2em;
        padding-top: 35px;
    }
    #phone{
        width: 350px;
        height: 50px;
        font-size: 2.4em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 130px;
        height: 45px;
        font-size: 1.5em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 35px;
        height: 35px;
        font-size: 1.4em;
    }
    #errornpopup{
        height: 150px;
        width: 520px;
    }
    #errorp{
        font-size: 2.5em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 70px;
        height: 60px;
        font-size: 1.7em;
    }
    #okaypopup{
        height: 180px;
        width: 600px;
    }
    #spinner {
        width: 40px;
        height: 40px;
    }
    #okayp{
        font-size: 2.4em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 180px;
        width: 600px;
    }
    #stkokay{
        font-size: 2em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 520px;
    }
    #stkerror{
        font-size: 2.4em;
    }
    #payokpopup{
        height: 175px;
        width: 600px;
    }
    #payokay{
        font-size: 2.4em;
    }
    #payerrorpopup{
        height: 140px;
        width: 520px;
    }
    #payerror{
        font-size: 2.4em;
    }
    #reconnect-div{
        height: 360px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 3em;
        font-weight: 400;
    }
    #recon-phone{
        width: 420px;
        height: 60px;
        font-size: 2.8em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 150px;
        height: 55px;
        font-size: 1.9em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 600px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2.4em;
    }
    #reconfailpopup{
        height: 140px;
        width: 520px;
    }
    #reconfail{
        font-size: 2.4em;
    }
    #voucher-div{
        height: 420px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 3.6em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 2.5em;
        font-weight: 400;
    }
    #username-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 2.5em;
        font-weight: 400;
    }
    #password-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 140px;
        height: 50px;
        font-size: 2.2em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 2.1em;
    }
    #p2-footer{
        font-size: 1.7em;
    }
}
@media (min-width: 950px) {
    #header{
        height: 90px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.9em;
    }
    #description{
        font-size: 2.6em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 950px;
        gap: 10px;
    }
    .sub-boxes{
        width: 465px;
        height: 240px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 3em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 2.8em;
    }
    .button-box{
        width: 140px;
        height: 55px;
        font-size: 2.1em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 280px;
        width: 600px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 2.2em;
        padding-top: 35px;
    }
    #phone{
        width: 350px;
        height: 50px;
        font-size: 2.4em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 130px;
        height: 45px;
        font-size: 1.5em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 35px;
        height: 35px;
        font-size: 1.4em;
    }
    #errornpopup{
        height: 150px;
        width: 520px;
    }
    #errorp{
        font-size: 2.5em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 70px;
        height: 60px;
        font-size: 1.7em;
    }
    #okaypopup{
        height: 180px;
        width: 600px;
    }
    #spinner {
        width: 40px;
        height: 40px;
    }
    #okayp{
        font-size: 2.4em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 180px;
        width: 600px;
    }
    #stkokay{
        font-size: 2em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 520px;
    }
    #stkerror{
        font-size: 2.4em;
    }
    #payokpopup{
        height: 175px;
        width: 600px;
    }
    #payokay{
        font-size: 2.4em;
    }
    #payerrorpopup{
        height: 140px;
        width: 520px;
    }
    #payerror{
        font-size: 2.4em;
    }
    #reconnect-div{
        height: 360px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 3em;
        font-weight: 400;
    }
    #recon-phone{
        width: 420px;
        height: 60px;
        font-size: 2.8em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 150px;
        height: 55px;
        font-size: 1.9em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 600px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2.4em;
    }
    #reconfailpopup{
        height: 140px;
        width: 520px;
    }
    #reconfail{
        font-size: 2.4em;
    }
    #voucher-div{
        height: 420px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 3.6em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 2.5em;
        font-weight: 400;
    }
    #username-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 2.5em;
        font-weight: 400;
    }
    #password-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 140px;
        height: 50px;
        font-size: 2.2em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 2.1em;
    }
    #p2-footer{
        font-size: 1.7em;
    }
}
@media (min-width: 1000px) {
    #header{
        height: 90px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 1.9em;
    }
    #description{
        font-size: 2.6em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 1000px;
        gap: 10px;
    }
    .sub-boxes{
        width: 490px;
        height: 260px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 3.2em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 3em;
    }
    .button-box{
        width: 140px;
        height: 55px;
        font-size: 2.1em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 280px;
        width: 600px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 2.2em;
        padding-top: 35px;
    }
    #phone{
        width: 350px;
        height: 50px;
        font-size: 2.4em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 130px;
        height: 45px;
        font-size: 1.5em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 35px;
        height: 35px;
        font-size: 1.4em;
    }
    #errornpopup{
        height: 150px;
        width: 520px;
    }
    #errorp{
        font-size: 2.5em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 70px;
        height: 60px;
        font-size: 1.7em;
    }
    #okaypopup{
        height: 180px;
        width: 600px;
    }
    #spinner {
        width: 40px;
        height: 40px;
    }
    #okayp{
        font-size: 2.4em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 180px;
        width: 600px;
    }
    #stkokay{
        font-size: 2em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 520px;
    }
    #stkerror{
        font-size: 2.4em;
    }
    #payokpopup{
        height: 175px;
        width: 600px;
    }
    #payokay{
        font-size: 2.4em;
    }
    #payerrorpopup{
        height: 140px;
        width: 520px;
    }
    #payerror{
        font-size: 2.4em;
    }
    #reconnect-div{
        height: 360px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 3em;
        font-weight: 400;
    }
    #recon-phone{
        width: 420px;
        height: 60px;
        font-size: 2.8em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 150px;
        height: 55px;
        font-size: 1.9em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 600px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2.4em;
    }
    #reconfailpopup{
        height: 140px;
        width: 520px;
    }
    #reconfail{
        font-size: 2.4em;
    }
    #voucher-div{
        height: 420px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 3.6em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 2.5em;
        font-weight: 400;
    }
    #username-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 2.5em;
        font-weight: 400;
    }
    #password-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 140px;
        height: 50px;
        font-size: 2.2em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 2.1em;
    }
    #p2-footer{
        font-size: 1.7em;
    }
}
@media (min-width: 1200px) {
    #header{
        height: 90px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 2em;
    }
    #description{
        font-size: 2.8em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 1200px;
        gap: 10px;
    }
    .sub-boxes{
        width: 520px;
        height: 290px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 3.5em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 3.2em;
    }
    .button-box{
        width: 140px;
        height: 55px;
        font-size: 2.1em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 280px;
        width: 700px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 2.2em;
        padding-top: 35px;
    }
    #phone{
        width: 350px;
        height: 50px;
        font-size: 2.4em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 130px;
        height: 45px;
        font-size: 1.5em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 35px;
        height: 35px;
        font-size: 1.4em;
    }
    #errornpopup{
        height: 150px;
        width: 520px;
    }
    #errorp{
        font-size: 2.5em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 70px;
        height: 60px;
        font-size: 1.7em;
    }
    #okaypopup{
        height: 180px;
        width: 600px;
    }
    #spinner {
        width: 40px;
        height: 40px;
    }
    #okayp{
        font-size: 2.4em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 180px;
        width: 600px;
    }
    #stkokay{
        font-size: 2em;
    }
    #stkerrorpopup{
        height: 140px;
        width: 520px;
    }
    #stkerror{
        font-size: 2.4em;
    }
    #payokpopup{
        height: 175px;
        width: 600px;
    }
    #payokay{
        font-size: 2.4em;
    }
    #payerrorpopup{
        height: 140px;
        width: 520px;
    }
    #payerror{
        font-size: 2.4em;
    }
    #reconnect-div{
        height: 360px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 3.2em;
        font-weight: 400;
    }
    #recon-phone{
        width: 420px;
        height: 60px;
        font-size: 2.9em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 170px;
        height: 60px;
        font-size: 2em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 600px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2.4em;
    }
    #reconfailpopup{
        height: 140px;
        width: 520px;
    }
    #reconfail{
        font-size: 2.4em;
    }
    #voucher-div{
        height: 430px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 3.8em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 2.7em;
        font-weight: 400;
    }
    #username-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.7em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 2.7em;
        font-weight: 400;
    }
    #password-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.7em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 140px;
        height: 50px;
        font-size: 2.2em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 2.4em;
    }
    #p2-footer{
        font-size: 2em;
    }
}
@media (min-width: 1300px) {
    #header{
        height: 100px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 2em;
    }
    #description{
        font-size: 3em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 1300px;
        gap: 10px;
    }
    .sub-boxes{
        width: 550px;
        height: 310px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 3.9em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 3.6em;
    }
    .button-box{
        width: 190px;
        height: 60px;
        font-size: 2.3em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 300px;
        width: 800px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 2.4em;
        padding-top: 35px;
    }
    #phone{
        width: 400px;
        height: 50px;
        font-size: 2.6em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 140px;
        height: 50px;
        font-size: 1.7em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 35px;
        height: 35px;
        font-size: 1.4em;
    }
    #errornpopup{
        height: 200px;
        width: 650px;
    }
    #errorp{
        font-size: 3.5em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 80px;
        height: 70px;
        font-size: 1.9em;
    }
    #okaypopup{
        height: 200px;
        width: 700px;
    }
    #spinner {
        width: 45px;
        height: 45px;
    }
    #okayp{
        font-size: 2.8em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 200px;
        width: 700px;
    }
    #stkokay{
        font-size: 2.2em;
    }
    #stkerrorpopup{
        height: 170px;
        width: 700px;
    }
    #stkerror{
        font-size: 2.6em;
    }
    #payokpopup{
        height: 180px;
        width: 750px;
    }
    #payokay{
        font-size: 2.6em;
    }
    #payerrorpopup{
        height: 160px;
        width: 700px;
    }
    #payerror{
        font-size: 2.7em;
    }
    #reconnect-div{
        height: 360px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 3.2em;
        font-weight: 400;
    }
    #recon-phone{
        width: 420px;
        height: 60px;
        font-size: 2.9em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 170px;
        height: 60px;
        font-size: 2em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 600px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2.4em;
    }
    #reconfailpopup{
        height: 140px;
        width: 520px;
    }
    #reconfail{
        font-size: 2.4em;
    }
    #voucher-div{
        height: 430px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 3.8em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 2.7em;
        font-weight: 400;
    }
    #username-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.7em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 2.7em;
        font-weight: 400;
    }
    #password-voucher{
        width: 600px;
        height: 55px;
        font-size: 2.7em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 140px;
        height: 50px;
        font-size: 2.2em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 2.4em;
    }
    #p2-footer{
        font-size: 2em;
    }
}
@media (min-width: 1400px) {
    #header{
        height: 100px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 2.2em;
    }
    #description{
        font-size: 3.2em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 1400px;
        gap: 10px;
    }
    .sub-boxes{
        width: 600px;
        height: 320px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 4.2em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 3.9em;
    }
    .button-box{
        width: 200px;
        height: 65px;
        font-size: 2.6em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 300px;
        width: 800px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 2.4em;
        padding-top: 35px;
    }
    #phone{
        width: 400px;
        height: 50px;
        font-size: 2.6em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 140px;
        height: 50px;
        font-size: 1.7em;
        border-radius: 5px;
        margin-top: 5px;
    }
    #cancel-button{
        width: 35px;
        height: 35px;
        font-size: 1.4em;
    }
    #errornpopup{
        height: 200px;
        width: 650px;
    }
    #errorp{
        font-size: 3.5em;
        padding-top: 10px;
    }
    #errorokbutton{
        width: 80px;
        height: 70px;
        font-size: 1.9em;
    }
    #okaypopup{
        height: 200px;
        width: 700px;
    }
    #spinner {
        width: 45px;
        height: 45px;
    }
    #okayp{
        font-size: 2.8em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 200px;
        width: 700px;
    }
    #stkokay{
        font-size: 2.2em;
    }
    #stkerrorpopup{
        height: 170px;
        width: 700px;
    }
    #stkerror{
        font-size: 2.6em;
    }
    #payokpopup{
        height: 180px;
        width: 750px;
    }
    #payokay{
        font-size: 2.6em;
    }
    #payerrorpopup{
        height: 160px;
        width: 700px;
    }
    #payerror{
        font-size: 2.7em;
    }
    #reconnect-div{
        height: 360px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 3.5em;
        font-weight: 400;
    }
    #recon-phone{
        width: 430px;
        height: 60px;
        font-size: 3.1em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 190px;
        height: 60px;
        font-size: 2.1em;
        margin-top: 10px;
    }
    #reconokpopup{
        height: 175px;
        width: 600px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 2.4em;
    }
    #reconfailpopup{
        height: 140px;
        width: 520px;
    }
    #reconfail{
        font-size: 2.4em;
    }
    #voucher-div{
        height: 470px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 4em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 3em;
        font-weight: 400;
    }
    #username-voucher{
        width: 700px;
        height: 65px;
        font-size: 3.5em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 3em;
        font-weight: 400;
    }
    #password-voucher{
        width: 700px;
        height: 65px;
        font-size: 3.5em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 170px;
        height: 60px;
        font-size: 2.6em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 2.7em;
    }
    #p2-footer{
        font-size: 2.2em;
    }
}
@media (min-width: 2000px) {
    #header{
        height: 120px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 2.8em;
    }
    #description{
        font-size: 4em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 2000px;
        gap: 10px;
    }
    .sub-boxes{
        width: 900px;
        height: 400px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 6em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 5em;
    }
    .button-box{
        width: 300px;
        height: 90px;
        font-size: 4em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 500px;
        width: 1000px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 3.4em;
        padding-top: 45px;
    }
    #phone{
        width: 800px;
        height: 90px;
        font-size: 4em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 240px;
        height: 70px;
        font-size: 3.2em;
        border-radius: 5px;
        margin-top: 40px;
    }
    #cancel-button{
        width: 60px;
        height: 60px;
        font-size: 2.2em;
    }
    #errornpopup{
        height: 300px;
        width: 800px;
    }
    #errorp{
        font-size: 5em;
        padding-top: 10px;
        padding-bottom: 40px;
    }
    #errorokbutton{
        width: 100px;
        height: 90px;
        font-size: 3em;
    }
    #okaypopup{
        height: 300px;
        width: 900px;
    }
    #spinner {
        width: 65px;
        height: 65px;
    }
    #okayp{
        font-size: 4em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 300px;
        width: 900px;
    }
    #stkokay{
        font-size: 4em;
    }
    #stkerrorpopup{
        height: 300px;
        width: 800px;
    }
    #stkerror{
        font-size: 5em;
    }
    #payokpopup{
        height: 300px;
        width: 900px;
    }
    #payokay{
        font-size: 4em;
    }
    #payerrorpopup{
        height: 300px;
        width: 800px;
    }
    #payerror{
        font-size: 5em;
    }
    #reconnect-div{
        height: 500px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 5em;
        font-weight: 400;
    }
    #recon-phone{
        width: 800px;
        height: 90px;
        font-size: 4.5em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 300px;
        height: 80px;
        font-size: 4em;
        margin-top: 30px;
    }
    #reconokpopup{
        height: 300px;
        width: 800px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 4em;
    }
    #reconfailpopup{
        height: 200px;
        width: 800px;
    }
    #reconfail{
        font-size: 5em;
    }
    #voucher-div{
        height: 700px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 6em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 5em;
        font-weight: 400;
    }
    #username-voucher{
        width: 800px;
        height: 80px;
        font-size: 5em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 5em;
        font-weight: 400;
    }
    #password-voucher{
        width: 800px;
        height: 80px;
        font-size: 5em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 250px;
        height: 80px;
        font-size: 4em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 4em;
    }
    #p2-footer{
        font-size: 3.5em;
    }
}
@media (min-width: 2500px) {
    #header{
        height: 160px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 3.4em;
    }
    #description{
        font-size: 4.8em;
        padding-top: 10px;
        padding-bottom: 10px; 
    }
    #main-con{
        max-width: 2500px;
        gap: 10px;
    }
    .sub-boxes{
        width: 1000px;
        height: 450px;
        border-radius: 10px;  
    }
    .header-box{
        font-weight: 600;
        padding-top: 5px;
        font-size: 6.5em;
        width: 100%;
    }
    .header2-box{
        padding: 0;
        font-size: 5.5em;
    }
    .button-box{
        width: 350px;
        height: 100px;
        font-size: 4.8em;
        border-radius: 10px;
        padding: 0;
        margin: 0;
    }
    #paymentpopup{
        height: 500px;
        width: 1200px;
        padding-left: 10px;
        padding-right: 10px;
    }
    #h1-paymentpopup{
        font-size: 4em;
        padding-top: 40px;
    }
    #phone{
        width: 700px;
        height: 90px;
        font-size: 4em;
        margin-bottom: 20px;
        border-radius: 5px;
        margin-top: 20px;
    }
    #pay-button{
        width: 400px;
        height: 80px;
        font-size: 4em;
        border-radius: 5px;
        margin-top: 35px;
    }
    #cancel-button{
        width: 50px;
        height: 50px;
        font-size: 3em;
    }
    #errornpopup{
        height: 400px;
        width: 1100px;
    }
    #errorp{
        font-size: 6em;
        padding-top: 10px;
        padding-bottom: 50px;
    }
    #errorokbutton{
        width: 200px;
        height: 120px;
        font-size: 4em;
    }
    #okaypopup{
        height: 400px;
        width: 1250px;
    }
    #spinner {
        width: 90px;
        height: 90px;
    }
    #okayp{
        font-size: 5.5em;
        padding-top: 5px;
    }
    #stkokpopup{
        height: 400px;
        width: 1250px;
    }
    #stkokay{
        font-size: 5.5em;
    }
    #stkerrorpopup{
        height: 400px;
        width: 1100px;
    }
    #stkerror{
        font-size: 5em;
    }
    #payokpopup{
        height: 400px;
        width: 1250px;
    }
    #payokay{
        font-size: 5.5em;
    }
    #payerrorpopup{
        height: 400px;
        width: 1100px;
    }
    #payerror{
        font-size: 5em;
    }
    #reconnect-div{
        height: 600px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    #h1-reconnect{
        font-size: 7em;
        font-weight: 400;
    }
    #recon-phone{
        width: 1000px;
        height: 90px;
        font-size: 5.2em;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    #reconnect-button{
        width: 300px;
        height: 90px;
        font-size: 4em;
        margin-top: 30px;
    }
    #reconokpopup{
        height: 300px;
        width: 1200px;
        border-radius: 10px;
    }
    #reconokay{
        font-size: 5.5em;
    }
    #reconfailpopup{
        height: 300px;
        width: 1000px;
    }
    #reconfail{
        font-size: 5em;
    }
    #voucher-div{
        height: 700px;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #h1-voucher{
        font-size: 7em;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    #username-label{
        font-size: 6em;
        font-weight: 400;
    }
    #username-voucher{
        width: 1000px;
        height: 80px;
        font-size: 6em;
        margin-bottom: 20px;
    }
    #password-label{
        font-size: 6em;
        font-weight: 400;
    }
    #password-voucher{
        width: 1000px;
        height: 80px;
        font-size: 6em;
        margin-bottom: 20px;
    }
    #voucher-button{
        width: 300px;
        height: 90px;
        font-size: 4.5em;
        margin-top: 10px;
    }
    #p1-footer{
        font-size: 5em;
    }
    #p2-footer{
        font-size: 4.5em;
    }
}




        </style>

        <script>
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

async function handlePaymentSubmit(event) {
    event.preventDefault();
    closePopup('paymentpopup');

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

            const popupToOpen = data.ResponseCode === "0" ? 'stkokpopup' : 'stkerrorpopup';
            openPopup(popupToOpen);
            setTimeout(() => closePopup(popupToOpen), 3000);
        }, 1000);

        // Poll every second for payment status if STK push was successful
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
                        document.getElementById("payments").textContent = `✅ Payment of KES ${selectedAmount} received from ${phone}`;
                        openPopup("popup5");
                        setTimeout(() => closePopup("popup5"), 4000);

                        // Save payment to database
                        await fetch("save_payment.php", {
                            method: "POST",
                            headers: { "Content-Type": "application/x-www-form-urlencoded" },
                            body: `phone=${encodeURIComponent(phone)}&amount=${selectedAmount}`
                        });
                    } else if (stat.ResultCode === 1032) {
                        clearInterval(pollInterval);
                        document.getElementById("failMessage").textContent = "❌ Payment Cancelled by User";
                        openPopup("popup5");
                        setTimeout(() => closePopup("popup5"), 4000);
                    }
                } catch (err) {
                    clearInterval(pollInterval);
                    document.getElementById("failMessage").textContent = "❌ Failed to verify payment";
                    openPopup("popup5");
                    setTimeout(() => closePopup("popup5"), 4000);
                }
            }, 1000);
        }
    } catch (error) {
        console.error("STK Push failed❌:", error);
        openPopup('popup4');
        document.getElementById("stkStatusMessage").textContent = "❌ Network Error. Please Try Again!";
        setTimeout(() => closePopup('popup4'), 4000);
    }
}




//Validate Code function//
function validateCode() {
    const code = document.getElementById("code").value.trim();
}


                
    
  
  
        </script>

</body>
</html>
                        function initPayPalButton() {
                            var approvedAmount = 0;
                            var approvedName = "";     
                            var name = document.querySelector('#smart-button-container #name'); //get name
                            var amount = document.querySelector('#smart-button-container #amount'); //get amount
                            var priceError = document.querySelector('#smart-button-container #priceLabelError');    //get price error
                            var invoiceid = document.querySelector('#smart-button-container #invoiceid');   //get invoice id
                            var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
                            var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv'); 

                            var elArr = [amount];

                            if (invoiceidDiv.firstChild.innerHTML.length > 1) {
                                invoiceidDiv.style.display = "block";
                            }

                            purchase_units = [];
                            purchase_units[0] = {};
                            purchase_units[0].amount = {};

                            function validate(event) {
                                return event.value.length > 0;
                            }

                            paypal.Buttons({
                                style: {
                                    color: 'blue',
                                    shape: 'pill',
                                    label: 'pay',
                                    layout: 'vertical',
                                },

                                onInit: function (data, actions) {
                                    actions.disable();

                                    if(invoiceidDiv.style.display === "block") {
                                        elArr.push(invoiceid);
                                    }

                                    elArr.forEach(function (item) {
                                        item.addEventListener('keyup', function (event) {
                                            var result = elArr.every(validate);
                                            if (result) {
                                                actions.enable();
                                            } else {
                                                actions.disable();
                                            }
                                        });
                                    });
                                },

                                onClick: function () {

                                    if (amount.value.length < 1) {
                                        priceError.style.visibility = "visible";
                                    } else {
                                        priceError.style.visibility = "hidden";
                                    }

                                    if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
                                        invoiceidError.style.visibility = "visible";
                                    } else {
                                        invoiceidError.style.visibility = "hidden";
                                    }

                                    purchase_units[0].description = "Sea Cleanup";
                                    purchase_units[0].amount.value = amount.value;
                                    approvedAmount = amount.value;
                                    approvedName = name.value;

                                    if(invoiceid.value !== '') {
                                        purchase_units[0].invoice_id = invoiceid.value;
                                    }
                                },

                                createOrder: function (data, actions) {
                                    return actions.order.create({
                                        purchase_units: purchase_units,
                                    });
                                },

                                onApprove: function (data, actions) {
                                    
                                    setCookie("username", approvedName, 365);
                                    
                                    //Send details to SQL database
                                    $.post(
                                        'donate.php',
                                        {
                                            name: approvedName,
                                            amount: approvedAmount
                                        },
                                        function(result){
                                            if (result == "success"){
                                                alert("Success");
                                            }
                                        }
                                    );
                                    
                                    return actions.order.capture().then(function (details) {
                                        alert('Transaction completed by ' + /*details.payer.name.given_name*/approvedName + '!');
                                    });
                                },

                                onError: function (err) {
                                    console.log(err);
                                }
                            }).render('#paypal-button-container');
                        }


                        function onCreate(name, approvedAmount) {
                            $.ajax({
                                url:"donate.php",    //the page containing php script
                                type: "post",    //request type,
                                dataType: 'json',
                                data: {'registration':"success", 'name': name, 'amount': approvedAmount, 'ajax':true},
                                success:function(result){
                                    console.log(result.abc);
                                    alert("Success");
                                }
                            });
                        }


                        function setCookie(cookieName, cookieValue, exdays){
                            var d = new Date();
                            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                            var expires = "expires="+d.toUTCString();
                            document.cookie = cookieName+ "=" + cookieValue + ";" + expires + ";path=/";
                        }

                        initPayPalButton();
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Amaranth|Grechen Fuemen' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="./css/FinalWeb3.css">
    <title>Final Webpage 3</title>

</head>

<body style="background-color: #D0B8A8;">
    <div class="container">
        <div class="logo-section">
            <img src="./IMG/coffee.png" alt="logo" width="90">
            <h1><i>Deja Brew</i></h1>
        </div>

        <p style="font: 12px sans-serif; margin: 30px 0 0 35px;">
            <span>Label #12</span>
            <span class="info">by: Jane Doe</span>
            <span class="info">Terminal #12</span>
        </p>

        <div class="order-form">
            <label for="">Name of Item:</label>
            <input type="text" class="textfield" id="summary" name="summary" readonly>
            <br>
            <label for="price">Price:</label>
            <input type="text" class="textfield" id="price" name="price" readonly>
            <br>
            <label for="quantity">Quantity:</label>
            <input type="number" class="textfield" id="quantity" name="quantity" required>
            <br>
            <label for="price">Discount Amount:</label>
            <input type="text" class="textfield" id="discount_amount" name="discount_amount" readonly>
            <br>
            <label for="price">Discounted Amount:</label>
            <input type="text" class="textfield" id="discounted_amount" name="discounted_amount" readonly>
        </div>

        <div class="summary-form">
            <p class="summary-header">Summary</p>
            <label for="price">Total Quantity: </label>
            <input type="text" class="textfield" id="total_quantity" name="total_quantity">
            <br>
            <label for="price">Total Discount Given:</label>
            <input type="text" class="textfield" id="discount_given" name="discount_given">
            <br>
            <label for="price">Total Discounted Amount:</label>
            <input type="text" class="textfield" id="total_bills" name="total_bills">
            <br>
            <label for="price">Cash Rendered</label>
            <input type="number" class="textfield" id="cash_given" name="cash_given" required>
            <br>
            <label for="price">Change:</label>
            <input type="text" class="textfield" id="change" name="change" readonly>
        </div>

        <div class="discount-section">
            <fieldset>
                <legend>Discount Option</legend>
                <input type="radio" name="coffeebundle" value="coffee1" id="coffee1" class="selector">
                <label class="selectorLabel" for="coffee1">Senior Citizen</label>

                <input type="radio" name="coffeebundle" value="coffee2" id="coffee2" class="selector">
                <label class="selectorLabel" for="coffee2">With Discount Card</label>
                <br>
                <input type="radio" name="coffeebundle" value="coffee3" id="coffee3" class="selector">
                <label class="selectorLabel" for="coffee3">Employee Discount</label>

                <input type="radio" name="coffeebundle" value="coffee4" id="coffee4" class="selector">
                <label class="selectorLabel" for="coffee4">No Discount</label>
            </fieldset>
        </div>

        <div class="button">
            <button id="calculate" name="calculate">Calculate</button>
            <button id="changebutton" name="changebutton">Change</button>
            <button id="new" name="new">New</button>
            <br>
            <button id="cancel" name="cancel">Cancel</button>
            <a href="login.php"><button id="exit" name="exit">Exit</button></a>
        </div>

        <div class="calculator">
            <button>C</button>
            <button>±</button>
            <button>%</button>
            <button>÷</button>
            <button>9</button>
            <button>8</button>
            <button>7</button>
            <button>x</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>-</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>+</button>
            <button>0</button>
            <button>00</button>
            <button>.</button>
            <button>=</button>
        </div>

        <div class="item-section">
            <fieldset>
                <legend>Item Display</legend>

                <div class="product">
                    <label for="order1">
                        <img src="./IMG/cafelatte.jpg"><br>
                        <input type="checkbox" name="order1" id="order1">
                        <p>Caffè Latte</p>
                    </label>

                    <label for="order2">
                        <img src="./IMG/machi.jpg"><br>
                        <input type="checkbox" name="order2" id="order2">
                        <p>Macchiato</p>
                    </label>

                    <label for="order3">
                        <img src="./IMG/espresso.jpg"><br>
                        <input type="checkbox" name="order3" id="order3">
                        <p>Espresso</p>
                    </label>

                    <label for="order4">
                        <img src="./IMG/cappu.jpg"><br>
                        <input type="checkbox" name="order4" id="order4">
                        <p>Cappuccino</p>
                    </label>

                    <label for="order5">
                        <img src="./IMG/ame.jpg"><br>
                        <input type="checkbox" name="order5" id="order5">
                        <p>Americano</p>
                    </label>

                    <label for="order6">
                        <img src="./IMG/hotchoco.jpg"><br>
                        <input type="checkbox" name="order6" id="order6">
                        <p>Hot Choco</p>
                    </label>

                    <label for="order7">
                        <img src="./IMG/chai.jpg"><br>
                        <input type="checkbox" name="order7" id="order7">
                        <p>Chai Latte</p>
                    </label>

                    <label for="order8">
                        <img src="./IMG/vegan.jpg"><br>
                        <input type="checkbox" name="order8" id="order8">
                        <p>Vegan Frappe</p>
                    </label>

                    <label for="order9">
                        <img src="./IMG/cafefrappe.jpg"><br>
                        <input type="checkbox" name="order9" id="order9">
                        <p>Caffè Frappe</p>
                    </label>

                    <label for="order10">
                        <img src="./IMG/chocomint.jpg"><br>
                        <input type="checkbox" name="order10" id="order10">
                        <p>Choco Mint</p>
                    </label>

                    <label for="order11">
                        <img src="./IMG/i.jpg"><br>
                        <input type="checkbox" name="order11" id="order11">
                        <p>Irish Coffee</p>
                    </label>

                    <label for="order12">
                        <img src="./IMG/ristretto.jpg"><br>
                        <input type="checkbox" name="order12" id="order12">
                        <p>Ristretto</p>
                    </label>

                    <label for="order13">
                        <img src="./IMG/Mocha.png"><br>
                        <input type="checkbox" name="order13" id="order13">
                        <p>Caffè Mocha</p>
                    </label>

                    <label for="order14">
                        <img src="./IMG/macha.jpg"><br>
                        <input type="checkbox" name="order14" id="order14">
                        <p>Macha Tea</p>
                    </label>

                    <label for="order15">
                        <img src="./IMG/black.jpg"><br>
                        <input type="checkbox" name="order15" id="order15">
                        <p>Black Tea</p>
                    </label>

                    <label for="order16">
                        <img src="./IMG/greentea.jpg"><br>
                        <input type="checkbox" name="order16" id="order16">
                        <p>Green Tea</p>
                    </label>

                    <label for="order17">
                        <img src="./IMG/herbaltea.jpg"><br>
                        <input type="checkbox" name="order17" id="order17">
                        <p>Herbal Tea</p>
                    </label>

                    <label for="order18">
                        <img src="./IMG/hibiscustea.jpg"><br>
                        <input type="checkbox" name="order18" id="order18">
                        <p>Hibiscus Tea</p>
                    </label>

                    <label for="order19">
                        <img src="./IMG/gingertea.jpeg"><br>
                        <input type="checkbox" name="order19" id="order19">
                        <p>Ginger Tea</p>
                    </label>

                    <label for="order20">
                        <img src="./IMG/sagetea.jpg"><br>
                        <input type="checkbox" name="order20" id="order20">
                        <p>Sage Tea</p>
                    </label>
                </div>
            </fieldset>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        //DECLARATION OF GLOBAL VARIABLES
        var price = 0;
        var quantity = 0;
        var discount_amount = 0;
        var discounted_amount = 0;
        var cash_given = 0;
        var total_bills = 0;
        var total_quantity = 0;
        var discount_given = 0;

        // FUNCTIONS FOR THE CHECKBOXES OF ITEMS
        function price_ordersummary(price, summary) {
            document.getElementById("price").value = price;
            document.getElementById("summary").value = summary;
            document.getElementById("quantity").focus();
        }

        function price_ordersummary_empty(price, summary) {
            document.getElementById("price").value = "";
            document.getElementById("summary").value = "";
        }

        //FUNCTIONS FOR THE RADIO BUTTONS AND CHECKBOXES
        function coffee_bundle1(price, quantity) {
            price = $("#price").val() - 0;
            quantity = $("#quantity").val() - 0;

            discount_amount = (price * quantity) * 0.10;
            discounted_amount = (price * quantity) - discount_amount;
            document.getElementById("discount_amount").value = discount_amount;
        }

        function coffee_bundle2(price, quantity) {
            price = $("#price").val() - 0;
            quantity = $("#quantity").val() - 0;

            discount_amount = (price * quantity) * 0.20;
            discounted_amount = (price * quantity) - discount_amount;
            document.getElementById("discount_amount").value = discount_amount;
        }

        function coffee_bundle3(price, quantity) {
            price = $("#price").val() - 0;
            quantity = $("#quantity").val() - 0;

            discount_amount = (price * quantity) * 0.12;
            discounted_amount = (price * quantity) - discount_amount;
            document.getElementById("discount_amount").value = discount_amount;
        }

        function coffee_bundle4(price, quantity) {
            price = $("#price").val() - 0;
            quantity = $("#quantity").val() - 0;

            discount_amount = (price * quantity) * 0;
            discounted_amount = (price * quantity) - discount_amount;
            document.getElementById("discount_amount").value = discount_amount;
        }

        function calculatebills_button(price, quantity) {
            price = $("#price").val() - 0;
            quantity = $("#quantity").val() - 0;

            //FORMULAS FOR DISCOUNT AND DISCOUNTED AMOUNT
            discounted_amount = (price * quantity) - discount_amount;
            document.getElementById("discount_amount").value = discount_amount;
            document.getElementById("discounted_amount").value = discounted_amount;
            document.getElementById("cash_given").focus();
        }

        function change_button(cash_given, discounted_amount, total_bills, total_quantity,
            total_discount_given) {
            cash_given = $("#cash_given").val() - 0;
            discounted_amount = $("#discounted_amount").val() - 0;
            quantity = $("#quantity").val() - 0;

            //FORMULA FOR CHANGE
            change = cash_given - discounted_amount;
            document.getElementById("change").value = change;
            document.getElementById("total_bills").value += discounted_amount;
            document.getElementById("total_quantity").value = quantity;
            document.getElementById("discount_given").value += discount_amount;


        }

        function new_button(price, quantity, discount_amount, discounted_amount, total_bills, total_quantity,
            cash_given,
            change, summary, donut1, donut2, bundle1, bundle2, bundle3, bundle4, bundles1,
            total_discounted_amount,
            bundles2, bundles3, bundles4, order1, order2, order3, order4, order5, order6, order7, order8,
            order9, order10, order11, order12, order13, order14, order15, order16, order17, order18, order19,
            order20) {

            //CLEAR ALL TEXTBOXES
            document.getElementById("price").value = "";
            document.getElementById("quantity").value = "";
            document.getElementById("discount_amount").value = "";
            document.getElementById("discounted_amount").value = "";
            document.getElementById("cash_given").value = "";
            document.getElementById("change").value = "";
            document.getElementById("summary").value = "";
            document.getElementById("total_bills").value = "";
            document.getElementById("total_quantity").value = "";
            document.getElementById("discount_given").value = "";

            //CLEAR ALL RADIO BUTTONS SELECTIONS WITH ITS CHECKBOXES
            $("#coffee1").prop("checked", false);
            $("#coffee2").prop("checked", false);
            $("#coffee3").prop("checked", false);
            $("#coffee4").prop("checked", false);

            //CLEAR ALL CHECKBOXES IN ITEMS
            $("#order1").prop("checked", false);
            $("#order2").prop("checked", false);
            $("#order3").prop("checked", false);
            $("#order4").prop("checked", false);
            $("#order5").prop("checked", false);
            $("#order6").prop("checked", false);
            $("#order7").prop("checked", false);
            $("#order8").prop("checked", false);
            $("#order9").prop("checked", false);
            $("#order10").prop("checked", false);

            $("#order11").prop("checked", false);
            $("#order12").prop("checked", false);
            $("#order13").prop("checked", false);
            $("#order14").prop("checked", false);
            $("#order15").prop("checked", false);
            $("#order16").prop("checked", false);
            $("#order17").prop("checked", false);
            $("#order18").prop("checked", false);
            $("#order19").prop("checked", false);
            $("#order20").prop("checked", false);
        }
        //ITEMS -- IMAGES
        $("#order1").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(90.00, "Caffè Latte");
                /*document.getElementById("price").value = 650.00;
                document.getElementById("order_summary").value = "Espresso";
                document.getElementById("quantity").focus();*/
            } else {
                price_ordersummary_empty();
                /*document.getElementById("price").value = "";
                document.getElementById("ordersummary").value = "";*/
            }
        });

        $("#order2").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(110.00, "Machiato");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order3").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(50.00, "Espresso");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order4").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(70.00, "Capuccino");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order5").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(60.00, "Americano");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order6").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(100.00, "Hot Choco");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order7").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(120.00, "Chai Latte");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order8").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(180.00, "Vegan Frappe");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order9").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(220.00, "Caffè Frappe");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order10").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(250.00, "Choco Mint");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order11").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(250.00, "Irish Coffee");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order12").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(100.00, "Ristretto");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order13").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(110.00, "Caffè Mocha");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order14").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(90.00, "Macha Tea");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order15").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(80.00, "Black Tea");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order16").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(100.00, "Green Tea");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order17").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(70.00, "Herbal Tea");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order18").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(65.00, "Hibiscus Tea");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order19").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(85.00, "Ginger Tea");
            } else {
                price_ordersummary_empty();
            }
        });

        $("#order20").click(function(e) {
            if ($(this).prop("checked") == true) {
                price_ordersummary(85.00, "Sage Tea");
            } else {
                price_ordersummary_empty();
            }
        });





        /*RADIO */
        $("#coffee1").click(function(e) {
            if ($(this).prop("checked") == true) {
                coffee_bundle1();
                /*$("#bundleB").prop("checked",false);
                $("#BBchckbx1").prop( "checked", false );
                $("#BBchckbx2").prop( "checked", false );
                $("#BBchckbx3").prop( "checked", false );
                $("#BBchckbx4").prop( "checked", false );

                $("#BAchckbx1"()).prop( "checked", true );
                $("#BAchckbx2").prop( "checked", true );
                $("#BAchckbx3").prop( "checked", true );
                $("#BAchckbx4").prop( "checked", true );
                  document.getElementById("price").value = 2990.00;
                  document.getElementById("ordersummary").value = "BUNDLE A";
                  document.getElementById("quantity").focus();*/

            } else {
                coffee_bundle1_deselect();
                /*document.getElementById("price").value = "";
                document.getElementById("ordersummary").value = "";*/
            }
        });


        $("#coffee2").click(function(e) {
            if ($(this).prop("checked") == true) {
                coffee_bundle2();
            } else {
                coffee_bundle2_deselect();
            }
        });

        $("#coffee3").click(function(e) {
            if ($(this).prop("checked") == true) {
                coffee_bundle3();
            } else {
                coffee_bundle3_deselect();
            }
        });

        $("#coffee4").click(function(e) {
            if ($(this).prop("checked") == true) {
                coffee_bundle4();
            } else {
                coffee_bundle4_deselect();
            }
        });

        /*BUTTONS*/

        $("#calculate").click(function(e) {
            e.preventDefault();
            calculatebills_button();

            /*VARIABLES 

            var price, 
              quantity, 
              discountamount, 
              discountedamount;*/

            // TO CONVERT STRING TO NUMERIC VALUE
            /*price = $("#price").val() - 0;
            quantity = $("#quantity").val() - 0;*/

            //FORMULA FOR THE DISCOUNT AMOUNT AND DISCOUNTED AMOUNT

            /*discountamount = (price * quantity) * 0.25;
            discountedamount = (price * quantity) - discountamount;
              document.getElementById("discountamount").value = discountamount;
              document.getElementById("discountedamount").value = discountedamount;
              document.getElementById("cashgiven").focus();*/
        });


        $("#changebutton").click(function(e) {
            e.preventDefault();
            change_button();
        });

        $("#new").click(function(e) {
            e.preventDefault();
            new_button();
        });


    });
    </script>



</body>

</html>
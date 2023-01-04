<?php include 'header.php'; ?>

<body style="background-color:#D0B8A8;">
    <div class="col-md-12">
        <div class="container">
            <br>

            <img src="./IMG/coffee.png" alt="logo
" style="width: 50px; margin-left: 25px;">
            <p class="logoname" style="text-align: left;">Deja Brew</p>


            <form>
                <fieldset>


                    <div class="row grid-columns">
                        <h3 class="text-center">PERSONAL INFORMATION</h3><br>
                        <div class="col-md-5 col">
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Employee Number</label>
                                                <input type="text" class="form-control " placeholder="" name="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">First Name: </label>
                                                <input type="text" class="form-control " placeholder="" name="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Middle Name:</label>
                                                <input type="text" class="form-control " placeholder="" name="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Surname: </label>
                                                <input type="text" class="form-control " placeholder="" name="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Designation: </label>
                                                <input type="text" class="form-control " placeholder="" name="">
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="col-md-5 col">
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Number of Independent(s):</label>
                                                <input type="text" class="form-control " placeholder="" name="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">PayDate:</label>
                                                <input type="date" class="form-control " placeholder="" name="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Employee Status: </label>
                                                <input type="text" class="form-control " placeholder="" name="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Department: </label>
                                                <input type="text" class="form-control " placeholder="" name="">
                                            </div>
                                        </div>



                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2 col">
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group text-center">
                                                <img src="./IMG/crop.jpg" width="130" />
                                                <input type="file" class="btn btn-primary" value=""
                                                    style="width:100%;margin-top:20px" />
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>

                </fieldset>
            </form>













            <div class="row grid-columns">
                <div class="col-md-4 col">
                    <div>
                        <h5>BASIC PAY</h5>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Rate/Hour:</label>
                                        <input type="number" class="form-control number" placeholder="Rate/Hour:"
                                            name="basic_pay" id="rate_hour" oninput="form1();">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">No. of Hours/ Cut Off:</label>
                                        <input type="number" class="form-control number"
                                            placeholder="No. of Hours/ Cut Off:" name="basic_pay" id="hour_cuttoff"
                                            oninput="form1();">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Income Per Cut Off:</label>
                                        <input type="number" class="form-control number" placeholder="" name="total"
                                            id="total">
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col">
                    <div>
                        <h5>HONORARIUM</h5>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Rate/Hour:</label>
                                        <input type="number" class="form-control" id="rate_hour1"
                                            placeholder="Rate/Hour:" oninput="form2();">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">No. of Hours/ Cut Off:</label>
                                        <input type="number" class="form-control" id="hour_cuttoff1"
                                            placeholder="No. of Hours/ Cut Off:" oninput="form2();">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Total Honorarium Pay:</label>
                                        <input type="number" class="form-control number" placeholder="" name="total1"
                                            id="total1">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col">
                    <div>

                        <h5>OTHER INCOME</h5>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Rate/Hour:</label>
                                        <input type="number" class="form-control" id="rate_hour2"
                                            placeholder="Rate/Hour:" oninput="form3();">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">No. of Hours/ Cut Off:</label>
                                        <input type="number" class="form-control" id="hour_cuttoff2"
                                            placeholder="No. of Hours/ Cut Off:" oninput="form3();">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Total Other Income Pay</label>
                                        <input type="number" class="form-control" id="total2" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <hr>

            <div class="row grid-columns">
                <div class="col-md-3 col">
                    <div>
                        <h5>Computation for gross income</h5>
                        <div class="form-group">
                            <label for="">Income Per Cut Off:</label>
                            <input type="number" class="form-control" id="compute_total_cutoff" placeholder="" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Total Honorarium Pay:</label>
                            <input type="number" class="form-control" id="compute_total_honorarium" placeholder=""
                                disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Total Other Income Pay</label>
                            <input type="number" class="form-control" id="compute_total_income" placeholder="" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Total Income</label>
                            <input type="number" class="form-control" id="total_income" placeholder="" disabled>
                        </div>
                    </div>
                </div>
                <div class="row grid-columns">
                    <div class="col-md-3 col ">
                        <div>
                            <h5>Regular Deduction</h5>
                            <div class="form-group">
                                <label for="">SSS Contribution:</label>
                                <input type="number" class="form-control" id="ssscontribution" placeholder="" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Philhealth Contribution:</label>
                                <input type="number" class="form-control" id="philhealth" placeholder="" value="100"
                                    disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Pagibig Contribution</label>
                                <input type="number" class="form-control" id="pagibig" placeholder="" value="100"
                                    disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Tax</label>
                                <input type="number" class="form-control" id="tax" placeholder="10%" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Total deduction</label>
                                <input type="number" class="form-control" id="deduction" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <!--- Other deduction--->
                    <div class="row grid-columns">
                        <div class="col-md-3 col ">
                            <div>
                                <h5>Other Deduction</h5>
                                <div class="form-group">
                                    <label for="">SSS Loan:</label>
                                    <input type="number" class="form-control" id="sssloan" placeholder="SSS Loan"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="">PAGIBIG Loan</label>
                                    <input type="number" class="form-control" id="pagibigloan"
                                        placeholder="PAGIBIG Loan" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Faculty Savings Deposit</label>
                                    <input type="number" class="form-control" id="savingsdeposit"
                                        placeholder="Faculty Savings Deposit" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Faculty Savings Loan</label>
                                    <input type="number" class="form-control" id="savingsloan"
                                        placeholder="Faculty Savings Loan" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Salary Loan</label>
                                    <input type="number" class="form-control" id="salaryloan" placeholder="Salary Loan"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="">Others</label>
                                    <select type="number" class="form-control" id="" placeholder="" required>
                                        <option selected disabled>Select others..</option>
                                        <option>Red</option>
                                        <option>Green</option>
                                        <option>Zaido</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Total deduction</label>
                                    <input type="number" class="form-control" id="otherdeduction" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row grid-columns">
                            <div class="col-md-3 col ">
                                <div>
                                    <h5>Net Income</h5>

                                    <div class="form-group">
                                        <label for="">Gross Income</label>
                                        <input type="number" class="form-control" id="gross_total_income" placeholder=""
                                            disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Total deduction</label>
                                        <input type="number" class="form-control" id="total_deduction" placeholder=""
                                            disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row " style="text-align:center">
                            <button type="submit" class="btn btn-info" onclick="form4();">Gross Income</button>

                            <button type="submit" class="btn btn-info" onclick="form5();">Net Income</button>

                            <a href="index.php" class="btn btn-info">New</a>
                            <a href="index.php" class="btn btn-info">Cancel</a>
                            <a href="index.php" class="btn btn-info">Print payslip</a>
                            <a href="index.php" class="btn btn-info">Preview Payslip Details</a>
                            <a href="login.php" class="btn btn-info">Exit</a>

                        </div>
                        <br>
                        <br>
                        <br>
                        <br>




</body>

</html>
<script src="function.js"></script>
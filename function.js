
function form1() {
    var rate_hour = document.getElementById('rate_hour').value;
    var cutoff = document.getElementById('hour_cuttoff').value;
    var total = rate_hour * cutoff;
     document.getElementById('total').value = total;
    }
    
    function form2() {
    var rate_hour = document.getElementById('rate_hour1').value;
    var cutoff = document.getElementById('hour_cuttoff1').value;
    var total = rate_hour * cutoff;
     document.getElementById('total1').value = total;
    }
    
    function form3() {
    var rate_hour = document.getElementById('rate_hour2').value;
    var cutoff = document.getElementById('hour_cuttoff2').value;
    var total = rate_hour * cutoff;
     document.getElementById('total2').value = total;
    } 
    
    function form4() {
        const  total0 = document.getElementById('total').value;
        const total1 = document.getElementById('total1').value;
        const total2 = document.getElementById('total2').value;
        
        let total = (Number(total0) +  Number(total1) +  Number(total2));
        //100 for sss and 100 for pagibig that's why -200 directly
       // let regular_deduction = total;
     
       // let total_deduction = Number(regular_deduction)+Number(deduction);
    
     document.getElementById('compute_total_cutoff').value = total0;
     document.getElementById('compute_total_honorarium').value = total1;
     document.getElementById('compute_total_income').value = total2;
     document.getElementById('total_income').value = total;
    }
    
    function form5(){
        const  total0 = document.getElementById('total').value;
        const total1 = document.getElementById('total1').value;
        const total2 = document.getElementById('total2').value;
    
    
        
        const  sssloan = document.getElementById('sssloan').value;
        
        const pagibigloan = document.getElementById('pagibigloan').value;
        const savingsloan = document.getElementById('savingsloan').value;
        const savingsdeposit = document.getElementById('savingsdeposit').value;
        const salaryloan = document.getElementById('salaryloan').value;
        
    
        let otherdeduction=document.getElementById('otherdeduction').value = Number(sssloan)+ Number(pagibigloan)+ Number(savingsloan)+ Number(salaryloan)+Number(savingsdeposit);
    
    
        let total = (Number(total0) +  Number(total1) +  Number(total2));
        //100 for sss and 100 for pagibig that's why -200 directly
       // let regular_deduction = total;

       
       const  ssscontribution = document.getElementById('ssscontribution').value;
        let deduction = total*0.10;
        let total_deduction=Number(deduction)+Number(200)+Number(otherdeduction)+Number(ssscontribution);
        let total_income=Number(total)-total_deduction;
        document.getElementById('deduction').value = deduction+Number(200)+Number(otherdeduction)+Number(ssscontribution);
        document.getElementById('gross_total_income').value = total_income;
        document.getElementById('total_deduction').value = total_deduction;
    }
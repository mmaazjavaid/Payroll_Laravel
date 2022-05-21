

//////////////////////////////// DATE CODE HERE////////////////////////////////////////////////////////

var today = new Date();
var st_date=document.getElementById('startdate');
var ed_date=document.getElementById('enddate');
var previous_year;
if(today.getMonth()==12){
    previous_year=parseInt(today.getFullYear())-1;
}else{
    previous_year=today.getFullYear();
}
var date_for_previous_month = previous_year+'-'+(today.getMonth())+'-'+'25';
var date=document.getElementById('startdate').value=date_for_previous_month;


var now=new Date();
var date_this_month = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+'24';
document.getElementById("enddate").value=date_this_month;
var date1 = new Date(date_for_previous_month);
var date2 = new Date(date_this_month);
var Difference_In_Time = date2.getTime() - date1.getTime();
  
// To calculate the no. of days between two dates
var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
document.getElementById("daysInMonth").value=Math.round(Difference_In_Days)+1;

st_date.onchange=()=>{

    var date_for_previous_month=document.getElementById("startdate").value;
    var date_this_month=document.getElementById("enddate").value;


    var date1 = new Date(date_for_previous_month);
    var date2 = new Date(date_this_month);
    var Difference_In_Time = date2.getTime() - date1.getTime();
      
    // To calculate the no. of days between two dates
    var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
    document.getElementById("daysInMonth").value=Math.round(Difference_In_Days)+1;
}
ed_date.onchange=()=>{

    var date_for_previous_month=document.getElementById("startdate").value;
    var date_this_month=document.getElementById("enddate").value;
    var date1 = new Date(date_for_previous_month);
    var date2 = new Date(date_this_month);
    var Difference_In_Time = date2.getTime() - date1.getTime();
      
    // To calculate the no. of days between two dates
    var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
    document.getElementById("daysInMonth").value=Math.round(Difference_In_Days)+1;
}





//////////////////////////////// BASIC SALARY CHANGE CODE HERE////////////////////////////////////////////


var first_basic_salary=document.getElementById("first_basic_salary");
var attendanceAllowance=document.getElementById("attendanceAllowance");
var fAndBAllowance=document.getElementById("fAndBAllowance");
var grossSalary=document.getElementById("grossSalary");
var basicSalary=document.getElementById("basicSalary");
first_basic_salary.onchange=()=>{
    
    if (!first_basic_salary.value) {
        first_basic_salary.value=0;
        
    }

    if (!attendanceAllowance.value) {
        attendanceAllowance.value=0;
    }

    if (!fAndBAllowance.value) {
        fAndBAllowance.value=0;
    }


    basicSalary.value=first_basic_salary.value;


    var yourEPF= document.getElementById("youEpf").value=parseInt(basicSalary.value)*0.08;
    var compantEPF=document.getElementById("companyEpf").value=parseInt(basicSalary.value)*0.12;
    var companyETF=document.getElementById("companyEtf").value=parseInt(basicSalary.value)*0.03;
    var totalTaxCut=yourEPF+compantEPF+companyETF;
    var salaryAdvance=document.getElementById("salaryAdvance");
    var element_sum=0;
    var otherDeductionAmounts=document.querySelectorAll(".otherDeductionAmount");
    if(otherDeductionAmounts.length==0){
        if(!salaryAdvance.value){
            salaryAdvance.value=0;
        }
        document.getElementById("totalDeductions").value=totalTaxCut+parseInt(salaryAdvance.value);
    }else{
        otherDeductionAmounts.forEach(element => {
                
                if(!element.value){
                    element.value=0;
                }
               element_sum+=parseInt(element.value);
        });
        if(!salaryAdvance.value){
            salaryAdvance.value=0;
        }
        document.getElementById("totalDeductions").value=totalTaxCut+parseInt(salaryAdvance.value)+element_sum;
        
    }
   




    grossSalary.value=parseInt(first_basic_salary.value)+parseInt(attendanceAllowance.value)+parseInt(fAndBAllowance.value);




    var bonus=document.getElementById("bonus");
    var overTime=document.getElementById("overTime");
    otherAmounts=document.querySelectorAll(".otherAmount");
    if(otherAmounts.length==0){
        if(!bonus.value){
            bonus.value=0;
        }
        if(!overTime.value){
            overTime.value=0;
        }
        
        var sum_of_other_earnings=parseInt(bonus.value)+parseInt(overTime.value);
        if(!grossSalary.value){
            grossSalary.value=0;
        }
        var totalEarning=document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary.value); 
    }else{
        var element_sum=0;
        otherAmounts.forEach(element => {
                if(!element.value){
                element.value=0;
                }
                element_sum+=parseInt(element.value);
            });
            if(!bonus.value){
                bonus.value=0;
            }
            if(!overTime.value){
                overTime.value=0;
            }
            var sum_of_other_earnings=element_sum+parseInt(bonus.value)+parseInt(overTime.value);
            if(!grossSalary.value){
                grossSalary.value=0;
            }
            document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary.value); 
   
    }



    var total_earning_field=document.getElementById("totalEarning");
    var total_deduction_field=document.getElementById("totalDeductions");
    if(!total_earning_field.value){
        total_earning_field.value=0;
    }
    if(!total_deduction_field.value){
        total_deduction_field.value=0;
    }
    document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);








}

//////////////////////////////////CHANGING GROSS SALARY//////////////////////////////////////////

attendanceAllowance.onchange=()=>{

    if (!first_basic_salary.value) {
        first_basic_salary.value=0;
        
    }

    if (!attendanceAllowance.value) {
        attendanceAllowance.value=0;
    }

    if (!fAndBAllowance.value) {
        fAndBAllowance.value=0;
    }

    grossSalary.value=parseInt(first_basic_salary.value)+parseInt(attendanceAllowance.value)+parseInt(fAndBAllowance.value);



    var bonus=document.getElementById("bonus");
    var overTime=document.getElementById("overTime");
    otherAmounts=document.querySelectorAll(".otherAmount");
    if(otherAmounts.length==0){
        if(!bonus.value){
            bonus.value=0;
        }
        if(!overTime.value){
            overTime.value=0;
        }
        
        var sum_of_other_earnings=parseInt(bonus.value)+parseInt(overTime.value);
        if(!grossSalary.value){
            grossSalary.value=0;
        }
        var totalEarning=document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary.value); 
    }else{
        var element_sum=0;
        otherAmounts.forEach(element => {
                if(!element.value){
                element.value=0;
                }
                element_sum+=parseInt(element.value);
            });
            if(!bonus.value){
                bonus.value=0;
            }
            if(!overTime.value){
                overTime.value=0;
            }
            var sum_of_other_earnings=element_sum+parseInt(bonus.value)+parseInt(overTime.value);
            if(!grossSalary.value){
                grossSalary.value=0;
            }
            document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary.value); 
   
    }


    var total_earning_field=document.getElementById("totalEarning");
    var total_deduction_field=document.getElementById("totalDeductions");
    if(!total_earning_field.value){
        total_earning_field.value=0;
    }
    if(!total_deduction_field.value){
        total_deduction_field.value=0;
    }
    document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);



}

fAndBAllowance.onchange=()=>{




    if (!first_basic_salary.value) {
        first_basic_salary.value=0;
        
    }

    if (!attendanceAllowance.value) {
        attendanceAllowance.value=0;
    }

    if (!fAndBAllowance.value) {
        fAndBAllowance.value=0;
    }

    grossSalary.value=parseInt(first_basic_salary.value)+parseInt(attendanceAllowance.value)+parseInt(fAndBAllowance.value);




    var bonus=document.getElementById("bonus");
    var overTime=document.getElementById("overTime");
    otherAmounts=document.querySelectorAll(".otherAmount");
    if(otherAmounts.length==0){
        if(!bonus.value){
            bonus.value=0;
        }
        if(!overTime.value){
            overTime.value=0;
        }
        
        var sum_of_other_earnings=parseInt(bonus.value)+parseInt(overTime.value);
        if(!grossSalary.value){
            grossSalary.value=0;
        }
        var totalEarning=document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary.value); 
    }else{
        var element_sum=0;
        otherAmounts.forEach(element => {
                if(!element.value){
                element.value=0;
                }
                element_sum+=parseInt(element.value);
            });
            if(!bonus.value){
                bonus.value=0;
            }
            if(!overTime.value){
                overTime.value=0;
            }
            var sum_of_other_earnings=element_sum+parseInt(bonus.value)+parseInt(overTime.value);
            if(!grossSalary.value){
                grossSalary.value=0;
            }
            document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary.value); 
   
    }


    var total_earning_field=document.getElementById("totalEarning");
    var total_deduction_field=document.getElementById("totalDeductions");
    if(!total_earning_field.value){
        total_earning_field.value=0;
    }
    if(!total_deduction_field.value){
        total_deduction_field.value=0;
    }
    document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);



}



//////////////////////////////////ADDING FIELDS IN EARNING///////////////////////////////////


// const node_1 = document.createElement("input");
// const node_2 = document.createElement("input");

var otherAmounts;

addFields=()=>{
    // const division=document.createElement("div");
    // division.setAttribute("class","col-lg-12 form-field-main");
    // division.setAttribute("id","otherDeductionsField");
    const node_1 = document.createElement("input");
    const node_2 = document.createElement("input");
    node_1.setAttribute("class","form-control mb-3 form-field-other ");
    node_1.setAttribute("type","text");
    node_1.setAttribute("placeholder","other Earning")
    node_2.setAttribute("class","form-control mb-3 form-field-other-second otherAmount ");
    node_2.setAttribute("type","number");
    node_2.setAttribute("value",0);
    node_2.setAttribute("placeholder","Amount")
    // division.appendChild(node_1);
    // division.appendChild(node_2);
    // document.getElementById("otherEarnings").appendChild(division);
    document.getElementById("otherEarnings").appendChild(node_1);
    document.getElementById("otherEarnings").appendChild(node_2);
    otherAmounts=document.querySelectorAll(".otherAmount");

    var bonus=document.getElementById("bonus");
    var overTime=document.getElementById("overTime");
    otherAmounts.forEach(element => {
                element.onchange=()=>{
                var Elements=otherAmounts;
                var element_sum=0;
                Elements.forEach(Element => {
                    if(!Element.value){
                        Element.value=0;
                    }
                    element_sum+=parseInt(Element.value);
                });
                if(!bonus.value){
                    bonus.value=0;
                }
                if(!overTime.value){
                    overTime.value=0;
                }
                var sum_of_other_earnings=element_sum+parseInt(bonus.value)+parseInt(overTime.value);
                var grossSalary=document.getElementById("grossSalary").value;
                if(!grossSalary.value){
                    grossSalary.value=0;
                }
                var totalEarning=document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary); 


                var total_earning_field=document.getElementById("totalEarning");
                var total_deduction_field=document.getElementById("totalDeductions");
                if(!total_earning_field.value){
                    total_earning_field.value=0;
                }
                if(!total_deduction_field.value){
                    total_deduction_field.value=0;
                }
                document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);


    }
});
var total_earning_field=document.getElementById("totalEarning");
var total_deduction_field=document.getElementById("totalDeductions");
if(!total_earning_field.value){
    total_earning_field.value=0;
}
if(!total_deduction_field.value){
    total_deduction_field.value=0;
}
document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);
}
removeFields=()=>{
    var otherFields=document.getElementById("otherEarnings").lastChild;
    document.getElementById("otherEarnings").removeChild(otherFields);
    var otherFields=document.getElementById("otherEarnings").lastChild;
    document.getElementById("otherEarnings").removeChild(otherFields);

    var bonus=document.getElementById("bonus");
    var overTime=document.getElementById("overTime");
    otherAmounts=document.querySelectorAll(".otherAmount");
    if(otherAmounts.length==0){
        if(!bonus.value){
            bonus.value=0;
        }
        if(!overTime.value){
            overTime.value=0;
        }
        
        var sum_of_other_earnings=parseInt(bonus.value)+parseInt(overTime.value);
        var grossSalary=document.getElementById("grossSalary").value;
        if(!grossSalary.value){
            grossSalary.value=0;
        }
        var totalEarning=document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary); 
    }else{
        var element_sum=0;
        otherAmounts.forEach(element => {
            if(!element.value){
                element.value=0;
            }
            element_sum+=parseInt(element.value);
        });
            
           
           
                
            
            if(!bonus.value){
                bonus.value=0;
            }
            if(!overTime.value){
                overTime.value=0;
            }
            var sum_of_other_earnings=element_sum+parseInt(bonus.value)+parseInt(overTime.value);
            var grossSalary=document.getElementById("grossSalary").value;
            if(!grossSalary.value){
                grossSalary.value=0;
            }
            var totalEarning=document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary); 

            var total_earning_field=document.getElementById("totalEarning");
            var total_deduction_field=document.getElementById("totalDeductions");
            if(!total_earning_field.value){
                total_earning_field.value=0;
            }
            if(!total_deduction_field.value){
                total_deduction_field.value=0;
            }
            document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);
  
    }
    var total_earning_field=document.getElementById("totalEarning");
    var total_deduction_field=document.getElementById("totalDeductions");

    if(!total_earning_field.value){
        total_earning_field.value=0;
    }
    if(!total_deduction_field.value){
        total_deduction_field.value=0;
    }
    document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);

}


////////////////////////////CALCULATING OTHER AMOUNT/////////////////////////////////////////////



var bonus=document.getElementById("bonus");
var overTime=document.getElementById("overTime");

bonus.onchange=()=>{
    otherAmounts=document.querySelectorAll(".otherAmount");
    if(otherAmounts.length==0){
      
        if(!bonus.value){
            bonus.value=0;
        }
        if(!overTime.value){
            overTime.value=0;
        }
        
        var sum_of_other_earnings=parseInt(bonus.value)+parseInt(overTime.value);
        var grossSalary=document.getElementById("grossSalary").value;
        if(!grossSalary.value){
            grossSalary.value=0;
        }
        var totalEarning=document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary); 
    }else{
        var element_sum=0;
        otherAmounts.forEach(element => {
            
                if(!element.value){
                    element.value=0;
                }
                element_sum+=parseInt(element.value);
        });
           
            if(!bonus.value){
                bonus.value=0;
            }
            if(!overTime.value){
                overTime.value=0;
            }
            var sum_of_other_earnings=element_sum+parseInt(bonus.value)+parseInt(overTime.value);
            var grossSalary=document.getElementById("grossSalary").value;
            if(!grossSalary.value){
                grossSalary.value=0;
            }
            var totalEarning=document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary); 

            var total_earning_field=document.getElementById("totalEarning");
            var total_deduction_field=document.getElementById("totalDeductions");
            if(!total_earning_field.value){
                total_earning_field.value=0;
            }
            if(!total_deduction_field.value){
                total_deduction_field.value=0;
            }
            document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);
    
   
    }

    var total_earning_field=document.getElementById("totalEarning");
    var total_deduction_field=document.getElementById("totalDeductions");
    
    if(!total_earning_field.value){
        total_earning_field.value=0;
    }
    if(!total_deduction_field.value){
        total_deduction_field.value=0;
    }
    document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);
    
}
overTime.onchange=()=>{
    otherAmounts=document.querySelectorAll(".otherAmount");
    if(otherAmounts.length==0){
        if(!bonus.value){
            bonus.value=0;
        }
        if(!overTime.value){
            overTime.value=0;
        }
        var sum_of_other_earnings=parseInt(bonus.value)+parseInt(overTime.value);
        var grossSalary=document.getElementById("grossSalary").value;
        if(!grossSalary.value){
            grossSalary.value=0;
        }
        var totalEarning=document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary); 
    }else{
        var element_sum=0;
        otherAmounts.forEach(element => {
           
           
         
         
                if(!element.value){
                    element.value=0;
                }
                element_sum+=parseInt(element.value);
            

        });
            if(!bonus.value){
                bonus.value=0;
            }
            if(!overTime.value){
                overTime.value=0;
            }
            var sum_of_other_earnings=element_sum+parseInt(bonus.value)+parseInt(overTime.value);
            var grossSalary=document.getElementById("grossSalary").value;
            if(!grossSalary.value){
                grossSalary.value=0;
            }
            var totalEarning=document.getElementById("totalEarning").value=sum_of_other_earnings+parseInt(grossSalary); 
            var total_earning_field=document.getElementById("totalEarning");
            var total_deduction_field=document.getElementById("totalDeductions");
            if(!total_earning_field.value){
                total_earning_field.value=0;
            }
            if(!total_deduction_field.value){
                total_deduction_field.value=0;
            }
            document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);
    
 
    }



    var total_earning_field=document.getElementById("totalEarning");
var total_deduction_field=document.getElementById("totalDeductions");



    if(!total_earning_field.value){
        total_earning_field.value=0;
    }
    if(!total_deduction_field.value){
        total_deduction_field.value=0;
    }
    document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);



}
    



add_deduction=()=>{
    var otherDeductionsField=document.getElementById("otherDeductionsField");
    const node_1 = document.createElement("input");
    const node_2 = document.createElement("input");
    node_1.setAttribute("class","form-control mb-3 form-field-other ");
    node_1.setAttribute("type","text");
    node_1.setAttribute("placeholder","other Deductions")
    node_2.setAttribute("class","form-control mb-3 form-field-other-second otherDeductionAmount ");
    node_2.setAttribute("type","number");
    node_2.setAttribute("value",0);
    node_2.setAttribute("placeholder","Amount")

    otherDeductionsField.appendChild(node_1);
    otherDeductionsField.appendChild(node_2);

    otherDeductionAmounts=document.querySelectorAll(".otherDeductionAmount");
    var otherDeductionAmounts=document.querySelectorAll(".otherDeductionAmount");
    otherDeductionAmounts.forEach(element => {
    element.onchange=()=>{
        var Elements=otherDeductionAmounts;
        var element_sum=0;
        Elements.forEach(Element => {
            if(!Element.value){
                Element.value=0;
            }
            element_sum+=parseInt(Element.value);
        });

        var yourEPF= document.getElementById("youEpf");
        var companyEPF=document.getElementById("companyEpf");
        var companyETF=document.getElementById("companyEtf");
       
        if (!yourEPF.value) {
            yourEPF.value=0;
        }
        if (!companyEPF.value) {
            companyEPF.value=0;
        }
        if (!companyETF.value) {
            companyETF.value=0;
        }
        var salaryAdvance_here=document.getElementById("salaryAdvance");
        if (!salaryAdvance_here.value) {
            salaryAdvance_here.value=0;
        }
        var totalTaxCut=parseInt(yourEPF.value)+parseInt(companyEPF.value)+parseInt(companyETF.value);
        var total_sum=totalTaxCut+ parseInt(salaryAdvance_here.value); 
        document.getElementById("totalDeductions").value=total_sum+element_sum;


        var total_earning_field=document.getElementById("totalEarning");
        var total_deduction_field=document.getElementById("totalDeductions");
        if(!total_earning_field.value){
            total_earning_field.value=0;
        }
        if(!total_deduction_field.value){
            total_deduction_field.value=0;
        }
        document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);


    }
    });


    var total_earning_field=document.getElementById("totalEarning");
var total_deduction_field=document.getElementById("totalDeductions");



    if(!total_earning_field.value){
        total_earning_field.value=0;
    }
    if(!total_deduction_field.value){
        total_deduction_field.value=0;
    }
    document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);


}

remove_deduction=()=>{
    var LastChild=document.getElementById("otherDeductionsField").lastChild;
    var otherDeductionsField=document.getElementById("otherDeductionsField").removeChild(LastChild);
    var LastChild=document.getElementById("otherDeductionsField").lastChild;
    var otherDeductionsField=document.getElementById("otherDeductionsField").removeChild(LastChild);


    var otherDeductionAmounts=document.querySelectorAll(".otherDeductionAmount");
    var element_sum=0;
    otherDeductionAmounts.forEach(element => {
      
            if(!element.value){
                element.value=0;
            }
            element_sum+=parseInt(element.value);
        });
        var yourEPF= document.getElementById("youEpf");
        var companyEPF=document.getElementById("companyEpf");
        var companyETF=document.getElementById("companyEtf");
       
        if (!yourEPF.value) {
            yourEPF.value=0;
        }
        if (!companyEPF.value) {
            companyEPF.value=0;
        }
        if (!companyETF.value) {
            companyETF.value=0;
        }
        var salaryAdvance_here=document.getElementById("salaryAdvance");
        if (!salaryAdvance_here.value) {
            salaryAdvance_here.value=0;
        }
        var totalTaxCut=parseInt(yourEPF.value)+parseInt(companyEPF.value)+parseInt(companyETF.value);
        var total_sum=totalTaxCut+ parseInt(salaryAdvance_here.value); 
        document.getElementById("totalDeductions").value=total_sum+element_sum;

    
        var total_earning_field=document.getElementById("totalEarning");
        var total_deduction_field=document.getElementById("totalDeductions");
        
        
        
            if(!total_earning_field.value){
                total_earning_field.value=0;
            }
            if(!total_deduction_field.value){
                total_deduction_field.value=0;
            }
            document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);
        



}



//////////////////////////////////Change IN DEDUCTIONS CODE////////////////////////////////////////

var salaryAdvance=document.getElementById("salaryAdvance");
salaryAdvance.onchange=()=>{
    var yourEPF= document.getElementById("youEpf").value;
    var companyEPF=document.getElementById("companyEpf").value;
    var companyETF=document.getElementById("companyEtf").value;
    if (!yourEPF.value) {
        yourEPF.value=0;
    }
    if (!companyEPF.value) {
        companyEPF.value=0;
    }
    if (!companyETF.value) {
        companyETF.value=0;
    }
    var totalTaxCut=parseInt(yourEPF)+parseInt(companyEPF)+parseInt(companyETF);
    
    var element_sum=0;
    var otherDeductionAmounts=document.querySelectorAll(".otherDeductionAmount");
    if(otherDeductionAmounts.length==0){
        if(!salaryAdvance.value){
            salaryAdvance.value=0;
        }
        document.getElementById("totalDeductions").value=totalTaxCut+parseInt(salaryAdvance.value);
    }else{
        otherDeductionAmounts.forEach(element => {
                
                if(!element.value){
                    element.value=0;
                }
               element_sum+=parseInt(element.value);
        });
        if(!salaryAdvance.value){
            salaryAdvance.value=0;
        }
        document.getElementById("totalDeductions").value=totalTaxCut+parseInt(salaryAdvance.value)+element_sum;
        
    }


    var total_earning_field=document.getElementById("totalEarning");
    var total_deduction_field=document.getElementById("totalDeductions");
    
    
    
        if(!total_earning_field.value){
            total_earning_field.value=0;
        }
        if(!total_deduction_field.value){
            total_deduction_field.value=0;
        }
        document.getElementById("netPay").value=parseInt(total_earning_field.value)-parseInt(total_deduction_field.value);
    


}


add_others=()=>{
    var otherEarnings=document.querySelectorAll(".otherAmount");
    var otherEarningSum=0;
    if(otherEarnings.length==0){
        otherEarningSum=0;
    }else{
        otherEarnings.forEach(element => {
            if(!element.value){
                element.value=0;
            }
            otherEarningSum+=parseInt(element.value);
        });
    }
    document.getElementById("total_other_Earnings").value=otherEarningSum;


    var otherDeductions=document.querySelectorAll(".otherDeductionAmount");
    var otherDeductionsSum=0;
    if(otherDeductions.length==0){
        otherDeductionsSum=0;
    }else{
        otherDeductions.forEach(element=>{
            if(!element.value){
                element.value=0;
            }
            otherDeductionsSum+=parseInt(element.value);
        })
    }
    document.getElementById("total_other_deductions").value=otherDeductionsSum;
}






    
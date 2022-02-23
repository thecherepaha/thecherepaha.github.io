// window.onload = function(){
//     getData();
// }

document.getElementById("action_type").oninput = function(){
    document.getElementById("status").value = "Active";
    document.getElementById("status").style = "background-color: green;border-radius: 5px;text-align: center; color: white";
}



function sendData(){
    var patient = document.getElementById("patient_name").value;
    var treatment = document.getElementById("treatment_type").value;
    var agent = document.getElementById("agent_name").value;
    var plan = document.getElementById("plan_type").value;
    var employer = document.getElementById("employer_name").value;
    var pat_request_type = document.getElementById("pat_request_type").value;
    var pat_request_subtype = document.getElementById("pat_request_subtype").value;
    var action_type = document.getElementById("action_type").value;

    var data = [patient, treatment, agent, plan, employer, pat_request_type, pat_request_subtype, action_type];


    $.post("script.php", {
        data: data,
        
    }, function(data) {
        alert("Your data sent to google sheets!");
    });

}
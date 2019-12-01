document.addEventListener("DOMContentLoaded", function(){
    document.querySelector(".button")
        .addEventListener("click", send_sms)
    ;

    setInterval(read_sms, 500);
})
function send_sms(){
    let user = document.querySelector(".nameInput").value;
    let sms = document.querySelector(".sms").value;
    
    let record_list = [];
    let record_string = localStorage.getItem("chat-sms");
    if(record_string){
        record_list = JSON.parse(record_string);
    }

    let record = {
        "user-name": user,
        "sms-value": sms
    }
    
    record_list.push(record);

    record_string = JSON.stringify(record_list);
    // let marc = [];
    // marc = marc + record_string;
    
    localStorage.setItem("chat-sms", record_string);

}

function read_sms(){
    let record_string = localStorage.getItem("chat-sms");
    let record_list = JSON.parse(record_string);

    let output = "";
    record_list.forEach(record => {
        output = output + record["user-name"] + " : " + record["sms-value"] + "<br />";
    });
    document.querySelector(".chat").innerHTML = output;
}
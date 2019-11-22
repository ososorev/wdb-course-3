document.addEventListener("DOMContentLoaded", function () {
   document.querySelector(".sendMessage").addEventListener("click", sendMessage);

   setInterval(readMessage, 500); // НЕ setInterval(readMessage(), 500)
});

function sendMessage() {
    // alert("SEND");
    let user = document.querySelector(".inputName").value;
    let message = document.querySelector(".inputField").value;

    let recordList = [];
    let recordString = localStorage.getItem("chatMessage");
    if (recordString) {
        recordList = JSON.parse(recordString);
    }

    let record = {
        "inputName": user,
        "inputField": message,
    };
    recordList.push(record);

    recordString = JSON.stringify(recordList);

    localStorage.setItem("chatMessage", recordString);
}

function readMessage() {
    let recordString = localStorage.getItem("chatMessage");
    if(recordString) {
        let recordList = JSON.parse(recordString);

        let output = "";
        recordList.forEach(function (record) {
            output += record.inputName + " => " + record.inputField + "\\";
        });

        document.querySelector(".outputField").value = output; //record.inputName + " => " + record.inputField; // input - где одинарный тег
        // document.querySelector(".outputField").innerHTML = record.inputName + " => " + record.inputField; // div - где двойной тег
    }
}
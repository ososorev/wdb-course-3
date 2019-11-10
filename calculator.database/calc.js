function send() {
    event.preventDefault();
    let result = fetch("calculation.php", { method: "POST", body: new FormData(document.forms[0]) })
        .then(response => response.text())
        .then(json => {
          
            document.querySelector(".input_result").value = json;

        })

}



function history() {
    event.preventDefault();

    let result = fetch("history.php", { method: "POST", body: new FormData(document.forms[0]) })
    .then(response => response.json())
    .then(json => {

    document.querySelector(".history_field").innerHTML =
    json[1].operand_1 + " " + json[1].operator + " " + json[1].operand_2 + "=" + " " + json[1].result;
    })
}


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
            var str = "";
            var i;

            for (i = 0; i < json.length; i++) {
                str += json[i].operand_1 + " " + json[i].operator + " " + json[i].operand_2 + "=" + " " + json[i].result + "<br>";
            }

            document.querySelector(".history_field").innerHTML = str;

        })
}
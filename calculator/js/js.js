function calculator() {
    const a = document.querySelector(".a").value;
    const b = document.querySelector(".b").value;
    const symbol = document.querySelector(".operationSelect").value;
    let result;
    let output = document.querySelector('.otvet');
    if (symbol==='+'){
        result = +a + +b ; // parseInt(a, 10) + parseInt(b, 10)
        output.innerHTML = "Ответ: " + result;
    } else if(symbol==='-'){
        result = a - b;
        output.innerHTML = "Ответ: " + result;
    } else if(symbol==='*'){
        result = a * b;
        output.innerHTML = "Ответ: " + result;
    } else if(symbol==='/'){
        if (b == 0){
            alert("делить на 0 нельзя");
            output.innerHTML = "Ответа нет";
        } else {
            result = a / b;
            result=result.toFixed(5);
            output.innerHTML = "Ответ: " + result;
        }
    }
    document.getElementById('forma').onsubmit = function(){return false};
}


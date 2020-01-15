document.getElementById("submit").addEventListener("click", function (e) {
    e.preventDefault();
    // получаем данные формы
    let registerForm = document.forms["registerForm"];
    let userName = registerForm.elements["name"].value;
    let userPassword = registerForm.elements["password"].value;
    let userEmail = registerForm.elements["email"].value;
    // сериализуем данные в json
    // let user = JSON.stringify({ userName: userName, userPassword: userPassword, userEmail: userEmail });
    let user = JSON.stringify({ userName: userName, userPassword: userPassword, userEmail: userEmail });
    let request = new XMLHttpRequest();
    // посылаем запрос на адрес "/user"
    request.open("POST", "http://127.0.0.1:1337/users", true);
    request.setRequestHeader("Content-Type", "application/json");
    request.addEventListener("load", function () {
        // получаем и парсим ответ сервера
        let receivedUser = JSON.parse(request.response);
        console.log(receivedUser.userName, "-", receivedUser.userEmail);   // смотрим ответ сервера
    });
    request.send(user);
});


// async function send () {
//     event.preventDefault();
// Функция должна записывать данные ввода в базу данных в формате JSON? 
// и редиректить на главную
// должна включать проверки данных на клиенте
//     let result = await fetch("server.js"), { method: "POST", body: new FormData(document.forms[0]) });

// };


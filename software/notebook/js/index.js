document.addEventListener("DOMContentLoaded", createPage);

function register() {
    window.location.href = "http://localhost/wdb-course-3/software/notebook/input.php";
}

function createPage() {
    let elementContainer = document.createElement("div");
    elementContainer.classList.add("mainContainer");
    document.body.append(elementContainer);

    let elementTitle = document.createElement("div");
    elementTitle.classList.add("title");
    elementTitle.innerText = "Записная книжка";
    elementContainer.append(elementTitle);

    let button = document.createElement("button");
    button.classList.add("mainButton");
    button.onclick = register;
    button.innerText = "Войти";
    elementContainer.append(button);
}

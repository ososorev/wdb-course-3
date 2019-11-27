(function() {
    App.logoutAjax =
        function logoutAjax(event) {
            event.preventDefault();
            fetch("php/logout.php").
            then(() => {
                location.replace("index.php")
            });
        }
})();
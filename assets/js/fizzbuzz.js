window.onload = function () {
    const echo = document.getElementById("echo-js");

    for (i = 1; i < 100; i++) {
        if (i % 3 == 0) {
            echo.innerHTML += `Fizz`;
        } else if (i % 5 == 0) {
            echo.innerHTML += `Buzz`;
        } else {
            echo.innerHTML += `${i}`;
        }

        echo.innerHTML += ` `;
    }
}

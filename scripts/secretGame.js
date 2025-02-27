document.addEventListener("DOMContentLoaded", function () {
    let secretTrigger = document.getElementById("secretTrigger");
    let secretGamePage = document.getElementById("secretGamePage");
    let player = document.getElementById("player");

    // Show secret game on ❌ click
    secretTrigger.addEventListener("click", function () {
        secretGamePage.style.display = "block";
    });

    // Move player inside the game
    document.addEventListener("keydown", function (event) {
        let step = 10;
        let rect = player.getBoundingClientRect();
        let parentRect = document.getElementById("gameArea").getBoundingClientRect();

        switch (event.key) {
            case "ArrowUp":
                if (rect.top > parentRect.top) player.style.top = (player.offsetTop - step) + "px";
                break;
            case "ArrowDown":
                if (rect.bottom < parentRect.bottom) player.style.top = (player.offsetTop + step) + "px";
                break;
            case "ArrowLeft":
                if (rect.left > parentRect.left) player.style.left = (player.offsetLeft - step) + "px";
                break;
            case "ArrowRight":
                if (rect.right < parentRect.right) player.style.left = (player.offsetLeft + step) + "px";
                break;
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let secretTrigger1 = document.getElementById("secretTrigger");
    let extraLinks1 = document.getElementById("extraLinks");

    let secretTrigger2 = document.getElementById("anotherSecretTrigger");
    let extraLinks2 = document.getElementById("extraextraLinks");

    // Ensure elements exist before adding event listeners
    if (secretTrigger1 && extraLinks1) {
        secretTrigger1.addEventListener("click", function () {
            // Check current display style and toggle accordingly
            if (extraLinks1.style.display === "block" || extraLinks1.style.display === "") {
                extraLinks1.style.display = "none";
            } else {
                extraLinks1.style.display = "block";
            }
        });
    } else {
        console.error("Secret trigger or extra links not found for first trigger.");
    }

    if (secretTrigger2 && extraLinks2) {
        secretTrigger2.addEventListener("click", function () {
            // Check current display style and toggle accordingly
            if (extraLinks2.style.display === "block" || extraLinks2.style.display === "") {
                extraLinks2.style.display = "none";
            } else {
                extraLinks2.style.display = "block";
            }
        });
    } else {
        console.error("Secret trigger or extra links not found for second trigger.");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    let secretTrigger = document.getElementById("secretTrigger");
    let extraLinks = document.getElementById("extraLinks");

    // Ensure elements exist before adding event listener
    if (secretTrigger && extraLinks) {
        secretTrigger.addEventListener("click", function () {
            // Toggle visibility of the extra links
            extraLinks.style.display = (extraLinks.style.display === "block") ? "none" : "block";
        });
    } else {
        console.error("Secret trigger or extra links not found.");
    }
});

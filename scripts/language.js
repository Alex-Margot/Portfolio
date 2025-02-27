document.addEventListener("DOMContentLoaded", function () {
    let language = getCookie("language") || "en"; // Default to English if no cookie is set

    function switchLanguage() {
        let newLang = (language === "en") ? "fr" : "en";
        document.cookie = "language=" + newLang + ";path=/;max-age=" + (60 * 60 * 24 * 30); // Save for 30 days

        // Update the header text immediately
        updateText(newLang);

        // Reload the page to apply changes
        setTimeout(() => location.reload(), 200); // Small delay to show the text change
    }

    function updateText(lang) {
        document.documentElement.lang = lang; // Update <html> tag language

        const langSwitchText = document.getElementById("languageToggle");
        if (langSwitchText) {
            langSwitchText.textContent = langSwitchText.getAttribute("data-" + lang);
        }

        document.querySelectorAll("[data-fr][data-en]").forEach(el => {
            el.textContent = el.getAttribute("data-" + lang);
        });
    }

    // Attach event listener to "Alex Margot"
    const langSwitchText = document.getElementById("languageToggle");
    if (langSwitchText) {
        langSwitchText.addEventListener("click", switchLanguage);
        langSwitchText.style.cursor = "pointer"; // Make it visually clear it's clickable
    }

    // Apply stored language on page load
    updateText(language);

    function getCookie(name) {
        let matches = document.cookie.match(new RegExp("(?:^|; )" + name + "=([^;]*)"));
        return matches ? matches[1] : null;
    }
});

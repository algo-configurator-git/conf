document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("dropdownBtn").addEventListener("click", function () {
        var dropdown = document.getElementById("dropdownMenu");
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    });

// Закрываем меню при клике вне его области
    window.addEventListener("click", function (event) {
        var dropdown = document.getElementById("dropdownMenu");
        var btn = document.getElementById("dropdownBtn");

        if (!btn.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.style.display = "none";
        }
    });
})

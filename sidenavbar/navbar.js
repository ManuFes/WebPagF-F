document.addEventListener("DOMContentLoaded", () => {
    const menuIcon = document.getElementById("menu-icon");
    const sidebar = document.getElementById("sidebar");
    const closeIcon = document.getElementById("close-icon");

    menuIcon.addEventListener("click", () => {
        sidebar.classList.toggle("active");
    });

    closeIcon.addEventListener("click", () => {
        sidebar.classList.remove("active");
    });
});

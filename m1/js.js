document.querySelectorAll(".nav-link").forEach(link => {
    link.addEventListener("click", function(e){
        e.preventDefault();
        const tujuan = document.querySelector(this.getAttribute("href"));
        tujuan.scrollIntoView({ behavior: "smooth" });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    // Accordion menu
    const accordionButtons = document.querySelectorAll(".accordion-button");

    accordionButtons.forEach(button => {
        button.addEventListener("click", function () {
            const content = this.nextElementSibling;

            // Tutup semua konten lainnya
            document.querySelectorAll(".accordion-content").forEach(item => {
                if (item !== content) {
                    item.style.display = "none";
                }
            });

            // Toggle tampilan
            content.style.display = content.style.display === "block" ? "none" : "block";
        });
    });

    // Form submission
    document.getElementById("registration-form").addEventListener("submit", function (event) {
        event.preventDefault();
        
        const nama = document.getElementById("nama").value;
        const noHp = document.getElementById("no-hp").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const rekening = document.getElementById("rekening").value;

        if (nama === "" || noHp === "" || email === "" || password === "" || rekening === "") {
            alert("Harap isi semua kolom yang diperlukan!");
            return;
        }

        alert("Registrasi berhasil! Selamat bergabung.");
        this.reset();
    });
});
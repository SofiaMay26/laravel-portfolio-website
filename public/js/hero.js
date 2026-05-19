document.addEventListener("DOMContentLoaded", () => {
    const texts = [
        "Junior Front-End Developer",
        "Aspiring Full-Stack Laravel Developer",
        "Responsive Web Designer",
        "Laravel & PHP Developer",
        "Creative Web Developer",
    ];

    let index = 0;
    let charIndex = 0;
    let isDeleting = false;

    const el = document.getElementById("typewriter");

    function type() {
        const current = texts[index];

        if (isDeleting) {
            charIndex--;
        } else {
            charIndex++;
        }

        el.textContent = current.substring(0, charIndex);

        let speed = isDeleting ? 50 : 100;

        if (!isDeleting && charIndex === current.length) {
            speed = 1500;
            isDeleting = true;
            el.style.color = "yellow";

            el.style.fontWeight = "bold";
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            index = (index + 1) % texts.length;
            speed = 300;
            el.style.color = "#60a5fa";

            el.style.fontWeight = "normal";
        }

        setTimeout(type, speed);
    }

    type();
});

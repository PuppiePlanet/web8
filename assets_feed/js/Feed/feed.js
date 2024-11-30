
    document.addEventListener("DOMContentLoaded", function() {
        const videos = document.querySelectorAll('.card-video');

        const options = {
            root: null, // Use the viewport as the root
            threshold: 0.5 // Trigger when at least 50% of the video is visible
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                const video = entry.target;

                if (entry.isIntersecting) {
                    video.play(); // Reproduce el video cuando es visible
                } else {
                    video.pause(); // Pausa el video cuando ya no es visible
                }
            });
        }, options);

        videos.forEach(video => {
            observer.observe(video);
        });
    });


export default function smoothScroll(targetId) {
    const body = document.body;
    if (body.classList.contains('no-scroll')) {
        body.classList.remove('no-scroll');
        setTimeout(() => {
            performScroll(targetId);
        }, 50);
    } else {
        performScroll(targetId);
    }
}

function performScroll(targetId) {
    const element = document.querySelector(targetId);
    if (element) {
        const elementHeight = element.offsetHeight;
        const screenHeight = window.innerHeight;
        const elementPosition = element.getBoundingClientRect().top;

        let offsetPosition;

        if (screenHeight < elementHeight) {
            offsetPosition = elementPosition + window.pageYOffset;
        } else {
            const centerOffset = (screenHeight - elementHeight) / 2;
            offsetPosition = elementPosition + window.pageYOffset - centerOffset;
        }

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    }
}

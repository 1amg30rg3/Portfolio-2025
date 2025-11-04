export default function smoothScroll(targetId) {
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

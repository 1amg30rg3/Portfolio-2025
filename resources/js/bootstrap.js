import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

function createCircle() {
    const numCircles = 200;

    document.querySelectorAll('.circle').forEach(el => el.remove());

    const pageWidth = document.body.scrollWidth;
    const pageHeight = document.body.scrollHeight;

    for (let i = 0; i < numCircles; i++) {
        const circle = document.createElement('div');
        circle.className = 'circle';

        circle.style.top = Math.random() * pageHeight + 'px';
        circle.style.left = Math.random() * pageWidth + 'px';

        const dx = (Math.random() - 0.5) * 300 + 'px';
        const dy = (Math.random() - 0.5) * 300 + 'px';
        circle.style.setProperty('--dx', dx);
        circle.style.setProperty('--dy', dy);

        circle.style.animationDuration = (15 + Math.random() * 20) + 's';
        circle.style.animationDelay = Math.random() * 20 + 's';

        document.body.appendChild(circle);
    }
}

window.addEventListener('load', createCircle);
window.addEventListener('resize', createCircle);

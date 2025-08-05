import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

 // Simple search functionality demonstration
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.querySelector('input[type="text"]');
            const searchButton = document.querySelector('.primary-bg');
            const perfumeCards = document.querySelectorAll('.perfume-card');
            
            searchButton.addEventListener('click', function() {
                const searchTerm = searchInput.value.toLowerCase();
                
                perfumeCards.forEach(card => {
                    const title = card.querySelector('h4').textContent.toLowerCase();
                    const notes = Array.from(card.querySelectorAll('.notes-badge'))
                        .map(badge => badge.textContent.toLowerCase())
                        .join(' ');
                    
                    if (title.includes(searchTerm) || notes.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
            
            // Weather filter buttons
            const weatherButtons = document.querySelectorAll('.weather-filter-btn');
            weatherButtons.forEach(button => {
                button.addEventListener('click', function() {
                    weatherButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // In a real implementation, this would filter perfumes by season
                });
            });
            
            // "Load More" button simulation
            const loadMoreBtn = document.querySelector('.primary-bg.text-white.px-6.py-3');
            loadMoreBtn.addEventListener('click', function() {
                // This would load more perfumes via AJAX in a real implementation
                alert('Additional perfumes would be loaded in a full implementation.');
            });
        });

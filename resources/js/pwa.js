// PWA Service Worker Registration & Flexible Auto-Update Handler

if ('serviceWorker' in navigator) {
    let refreshing = false;

    // Reload page when new service worker activates (auto-update)
    navigator.serviceWorker.addEventListener('controllerchange', () => {
        if (!refreshing) {
            refreshing = true;
            window.location.reload();
        }
    });

    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js', { scope: '/' })
            .then((registration) => {
                // Check for updates when tab gains focus
                document.addEventListener('visibilitychange', () => {
                    if (document.visibilityState === 'visible') {
                        registration.update();
                    }
                });

                // Check for updates on network reconnect
                window.addEventListener('online', () => {
                    registration.update();
                });

                // Listen for new worker installation
                registration.addEventListener('updatefound', () => {
                    const newWorker = registration.installing;
                    if (!newWorker) return;

                    newWorker.addEventListener('statechange', () => {
                        if (newWorker.state === 'installed' && navigator.serviceWorker.controller) {
                            // Tell new worker to skip waiting immediately so user gets latest version
                            newWorker.postMessage({ type: 'SKIP_WAITING' });
                        }
                    });
                });
            })
            .catch((err) => {
                console.warn('PWA ServiceWorker registration failed:', err);
            });
    });

    // Handle explicit SW update message
    navigator.serviceWorker.addEventListener('message', (event) => {
        if (event.data && event.data.type === 'SW_UPDATED') {
            if (!refreshing) {
                refreshing = true;
                window.location.reload();
            }
        }
    });
}

// PWA Deferred Install Prompt Handler
let deferredInstallPrompt = null;

window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredInstallPrompt = e;

    window.dispatchEvent(new CustomEvent('pwa-installable', { detail: { prompt: e } }));

    const banner = document.getElementById('pwa-install-banner');
    if (banner && !localStorage.getItem('pwa_prompt_dismissed')) {
        banner.classList.remove('hidden');
    }
});

window.addEventListener('appinstalled', () => {
    deferredInstallPrompt = null;
    const banner = document.getElementById('pwa-install-banner');
    if (banner) {
        banner.classList.add('hidden');
    }
});

// Helper function to launch PWA install dialog
window.installPWA = async () => {
    if (!deferredInstallPrompt) {
        alert('Aplikasi Barizaloka sudah terinstall atau browser Anda belum mendukung instalasi langsung.');
        return;
    }
    deferredInstallPrompt.prompt();
    const { outcome } = await deferredInstallPrompt.userChoice;
    if (outcome === 'accepted') {
        deferredInstallPrompt = null;
        const banner = document.getElementById('pwa-install-banner');
        if (banner) {
            banner.classList.add('hidden');
        }
    }
};

window.dismissPWABanner = () => {
    const banner = document.getElementById('pwa-install-banner');
    if (banner) {
        banner.classList.add('hidden');
    }
    localStorage.setItem('pwa_prompt_dismissed', 'true');
};

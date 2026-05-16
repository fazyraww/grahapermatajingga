(function () {
    function fontReady(family, weight) {
        if (!document.fonts || !document.fonts.check) {
            return false;
        }

        try {
            return document.fonts.check(weight + ' 16px "' + family + '"');
        } catch (error) {
            return false;
        }
    }

    function hasFontAwesome() {
        return fontReady('Font Awesome 6 Free', '900') &&
            fontReady('Font Awesome 6 Brands', '400');
    }

    function updateFallbackState() {
        document.documentElement.classList.toggle('fa-fallback-active', !hasFontAwesome());
    }

    function scheduleChecks() {
        updateFallbackState();
        window.setTimeout(updateFallbackState, 100);
        window.setTimeout(updateFallbackState, 800);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', scheduleChecks);
    } else {
        scheduleChecks();
    }

    if (document.fonts && document.fonts.ready) {
        document.fonts.ready.then(updateFallbackState).catch(updateFallbackState);
    } else {
        window.addEventListener('load', updateFallbackState);
    }
})();

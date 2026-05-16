<style>
    :root {
        --g-primary: #e67e22;
        --g-primary-dark: #c85f12;
        --g-ink: #18181b;
        --g-muted: #52525b;
        --g-border: #e7e5e4;
        --g-panel: #ffffff;
        --g-soft: #fff7ed;
        --g-canvas: #f7f7f5;
        --g-shadow: 0 16px 38px rgba(24, 24, 27, .06);
    }

    :root.dark {
        --g-ink: #f4f4f5;
        --g-muted: #d4d4d8;
        --g-border: rgba(255, 255, 255, .12);
        --g-panel: #18181b;
        --g-soft: rgba(230, 126, 34, .16);
        --g-canvas: #0f0f12;
        --g-shadow: 0 18px 46px rgba(0, 0, 0, .30);
        color-scheme: dark;
    }

    .fi-simple-layout {
        min-height: 100svh !important;
        background:
            linear-gradient(135deg, rgba(24, 24, 27, .74), rgba(200, 95, 18, .50)),
            url("{{ asset('static/image/hero_entrance.png') }}") center / cover fixed !important;
    }

    .fi-simple-main-ctn {
        min-height: 100svh;
        align-items: center !important;
        justify-content: center !important;
        padding: 1.25rem !important;
    }

    .fi-simple-main {
        width: min(100%, 28.5rem) !important;
        margin: 0 auto;
        border: 1px solid rgba(255, 255, 255, .20);
        border-radius: 1.1rem !important;
        background: rgba(255, 255, 255, .96) !important;
        box-shadow: 0 28px 80px rgba(24, 24, 27, .30) !important;
        backdrop-filter: blur(16px);
        color: #18181b !important;
    }

    .fi-simple-page-content {
        row-gap: 1.15rem !important;
        padding: 1.35rem !important;
    }

    .fi-simple-header {
        row-gap: .45rem !important;
    }

    .fi-simple-main .fi-logo img {
        max-height: 58px !important;
        width: auto !important;
        margin-inline: auto;
        object-fit: contain !important;
    }

    .fi-simple-main h1,
    .fi-simple-header-heading {
        color: #18181b !important;
        font-weight: 800 !important;
    }

    .fi-simple-main p,
    .fi-simple-main label,
    .fi-simple-main .fi-fo-field-label,
    .fi-simple-main .fi-fo-field-label-content {
        color: #3f3f46 !important;
    }

    .fi-layout {
        background:
            radial-gradient(circle at top left, rgba(230, 126, 34, .12), transparent 29rem),
            var(--g-canvas) !important;
        color: var(--g-ink) !important;
    }

    :root.dark .fi-layout {
        background:
            radial-gradient(circle at top left, rgba(230, 126, 34, .16), transparent 28rem),
            linear-gradient(180deg, #121214, #0f0f12) !important;
    }

    .fi-sidebar,
    .fi-sidebar-header,
    .fi-topbar,
    .fi-section,
    .fi-wi-stats-overview-stat,
    .fi-ta,
    .fi-ta-ctn,
    .fi-modal-window,
    .fi-dropdown-panel {
        border-color: var(--g-border) !important;
        background: var(--g-panel) !important;
        color: var(--g-ink) !important;
    }

    .fi-section,
    .fi-wi-stats-overview-stat,
    .fi-ta {
        border-radius: .9rem !important;
        border-width: 1px !important;
        box-shadow: var(--g-shadow) !important;
    }

    .fi-sidebar-header {
        min-height: 4.75rem !important;
        padding-block: .85rem !important;
        border-bottom: 1px solid var(--g-border) !important;
    }

    .fi-logo {
        display: flex !important;
        align-items: center !important;
        gap: 0;
        min-width: 0;
    }

    .fi-sidebar-header-logo-ctn,
    .fi-topbar-start {
        min-width: 0;
    }

    .fi-sidebar-header-logo-ctn > a,
    .fi-topbar-start > a {
        display: inline-flex !important;
        align-items: center !important;
        min-width: 0;
        max-width: 100%;
        text-decoration: none !important;
    }

    .gpj-brand-logo {
        display: inline-flex;
        align-items: center;
        min-width: 0;
        max-width: 100%;
        height: 100%;
    }

    .gpj-brand-logo-image {
        flex: 0 0 auto;
        height: 100%;
        max-height: 48px;
        width: auto;
        object-fit: contain;
    }

    .gpj-brand-wordmark {
        display: inline-block;
        max-width: 11.5rem;
        margin-inline-start: .65rem;
        overflow: hidden;
        color: #111111 !important;
        font-family: Inter, Poppins, "Nunito Sans", ui-sans-serif, system-ui, sans-serif;
        font-size: .82rem;
        font-weight: 600;
        line-height: 1.12;
        letter-spacing: 0;
        white-space: nowrap;
        text-overflow: ellipsis;
        opacity: 1;
        transform: translateX(0);
        transition:
            opacity .3s ease,
            transform .3s ease,
            max-width .3s ease,
            margin-inline-start .3s ease;
    }

    .fi-simple-main .gpj-brand-logo {
        justify-content: center;
    }

    .fi-simple-main .gpj-brand-wordmark {
        display: none !important;
    }

    .fi-sidebar .fi-logo img,
    .fi-topbar .fi-logo img {
        max-height: 48px !important;
        width: auto !important;
        object-fit: contain !important;
    }

    .fi-sidebar-nav-groups {
        row-gap: .75rem !important;
    }

    .fi-sidebar-nav a,
    .fi-sidebar-nav button,
    .fi-sidebar-nav .fi-icon,
    .fi-topbar a,
    .fi-topbar button,
    .fi-topbar .fi-icon,
    .fi-header-heading,
    .fi-section-header-heading,
    .fi-wi-stats-overview-stat-label,
    .fi-wi-stats-overview-stat-value,
    .fi-ta-header-heading,
    .fi-ta-table th,
    .fi-ta-table td,
    .fi-ta-cell,
    .fi-ta-col,
    .fi-ta-row,
    .fi-ta-header-cell,
    .fi-ta-cell-label,
    .fi-dropdown-list-item-label,
    .fi-modal-heading,
    .fi-notification-title {
        color: var(--g-ink) !important;
    }

    .fi-section-header-description,
    .fi-wi-stats-overview-stat-description,
    .fi-ta-header-description,
    .fi-fo-field-wrp-helper-text,
    .fi-ta-empty-state-description,
    .fi-account-widget-user-name,
    .fi-modal-description,
    .fi-notification-body {
        color: var(--g-muted) !important;
    }

    .fi-sidebar-nav a:hover,
    .fi-sidebar-nav button:hover,
    .fi-sidebar-nav a[aria-current="page"] {
        background: var(--g-soft) !important;
        color: var(--g-primary-dark) !important;
    }

    .fi-input-wrp {
        min-height: 2.75rem;
        border: 1px solid var(--g-border) !important;
        border-radius: .75rem !important;
        background: var(--g-panel) !important;
        color: var(--g-ink) !important;
        box-shadow: 0 1px 2px rgba(24, 24, 27, .04) !important;
    }

    .fi-input-wrp:focus-within {
        border-color: var(--g-primary) !important;
        box-shadow: 0 0 0 4px rgba(230, 126, 34, .16), 0 1px 2px rgba(24, 24, 27, .04) !important;
    }

    .fi-input,
    .fi-textarea,
    .fi-select-input,
    .fi-input-wrp input,
    .fi-input-wrp textarea,
    .fi-input-wrp select,
    input.fi-input,
    textarea.fi-input {
        color: var(--g-ink) !important;
        -webkit-text-fill-color: var(--g-ink) !important;
        caret-color: var(--g-primary-dark) !important;
        background: transparent !important;
    }

    .fi-simple-main .fi-input,
    .fi-simple-main .fi-textarea,
    .fi-simple-main .fi-input-wrp input {
        color: #18181b !important;
        -webkit-text-fill-color: #18181b !important;
    }

    .fi-input::placeholder,
    .fi-textarea::placeholder,
    .fi-input-wrp input::placeholder,
    .fi-input-wrp textarea::placeholder {
        color: #a1a1aa !important;
        -webkit-text-fill-color: #a1a1aa !important;
        opacity: 1 !important;
    }

    .fi-input:-webkit-autofill,
    .fi-input:-webkit-autofill:hover,
    .fi-input:-webkit-autofill:focus {
        -webkit-text-fill-color: #18181b !important;
        box-shadow: 0 0 0 1000px #ffffff inset !important;
        transition: background-color 9999s ease-out;
    }

    .fi-fo-field-label {
        color: var(--g-ink) !important;
        font-weight: 700 !important;
    }

    .fi-btn.fi-color-primary,
    .fi-ac-btn-action.fi-color-primary {
        background: linear-gradient(135deg, var(--g-primary), var(--g-primary-dark)) !important;
        color: #ffffff !important;
        border-radius: 999px !important;
        box-shadow: 0 12px 24px rgba(230, 126, 34, .22);
    }

    .fi-btn.fi-color-primary span,
    .fi-btn.fi-color-primary .fi-icon,
    .fi-ac-btn-action.fi-color-primary span,
    .fi-ac-btn-action.fi-color-primary .fi-icon {
        background: transparent !important;
        color: #ffffff !important;
    }

    .fi-wi-stats-overview-stat {
        position: relative;
        overflow: hidden;
        transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
    }

    .fi-wi-stats-overview-stat::before {
        content: "";
        position: absolute;
        inset-block: 0;
        inset-inline-start: 0;
        width: 4px;
        background: linear-gradient(180deg, var(--g-primary), var(--g-primary-dark));
    }

    .fi-wi-stats-overview-stat:hover {
        transform: translateY(-2px);
        border-color: rgba(230, 126, 34, .38) !important;
        box-shadow: 0 22px 46px rgba(24, 24, 27, .10) !important;
    }

    .fi-wi-stats-overview-stat-label {
        font-weight: 700 !important;
    }

    .fi-wi-stats-overview-stat-value {
        font-weight: 800 !important;
    }

    .fi-section-content,
    .fi-section-header,
    .fi-ta-main,
    .fi-ta-content,
    .fi-ta-table,
    .fi-ta-row {
        background-color: var(--g-panel) !important;
        color: var(--g-ink) !important;
    }

    .fi-ta-header-cell,
    .fi-ta-content-header,
    .fi-ta-table thead {
        background: color-mix(in srgb, var(--g-panel) 92%, var(--g-soft)) !important;
    }

    .fi-ta-row:hover,
    .fi-ta-record:hover {
        background: var(--g-soft) !important;
    }

    .fi-badge:not(.fi-color) {
        background: color-mix(in srgb, var(--g-panel) 82%, var(--g-muted)) !important;
        color: var(--g-ink) !important;
    }

    .fi-topbar {
        border-bottom: 1px solid var(--g-border) !important;
        background: color-mix(in srgb, var(--g-panel) 92%, transparent) !important;
        backdrop-filter: blur(12px);
    }

    .fi-tabs,
    .fi-tabs-item {
        border-color: var(--g-border) !important;
    }

    .fi-tabs-item[aria-selected="true"] {
        background: var(--g-soft) !important;
        color: var(--g-primary-dark) !important;
    }

    .gpj-guide-card {
        background: var(--g-panel) !important;
        border-color: var(--g-border) !important;
        color: var(--g-ink) !important;
    }

    .gpj-guide-card div {
        color: var(--g-ink) !important;
    }

    .gpj-guide-card p {
        color: var(--g-muted) !important;
    }

    .gpj-guide-card:hover {
        background: var(--g-soft) !important;
    }

    .fi-fo-file-upload,
    .fi-fo-repeater,
    .fi-fo-key-value {
        min-width: 0;
    }

    @media (min-width: 1024px) {
        .fi-body-has-sidebar-collapsible-on-desktop:not(:has(.fi-main-ctn-sidebar-open)) .fi-topbar-start .gpj-brand-wordmark {
            max-width: 0;
            margin-inline-start: 0;
            opacity: 0;
            transform: translateX(-.25rem);
        }
    }

    @media (max-width: 1023px) {
        .fi-sidebar .gpj-brand-wordmark {
            max-width: 10rem;
            font-size: .74rem;
        }
    }

    @media (max-width: 768px) {
        .fi-simple-main-ctn {
            align-items: center !important;
            justify-content: center !important;
            min-height: 100svh !important;
            padding: 1rem !important;
        }

        .fi-simple-main {
            width: min(calc(100vw - 2rem), 28rem) !important;
            max-height: calc(100svh - 2rem);
            overflow-y: auto;
            border-radius: .9rem !important;
            margin-inline: auto !important;
        }

        .fi-simple-page-content {
            row-gap: .8rem !important;
            padding: .9rem !important;
        }

        .fi-simple-main .fi-logo img {
            max-height: 42px !important;
        }

        .fi-simple-header-heading {
            font-size: 1.05rem !important;
            line-height: 1.25 !important;
        }

        .fi-input-wrp {
            min-height: 2.45rem;
            border-radius: .7rem !important;
        }

        .fi-simple-main form {
            row-gap: .7rem !important;
        }

        .fi-simple-layout {
            background-position: center top !important;
        }
    }
</style>

<style>
    :root {
        color-scheme: light;
        --gpj-font: "Inter", "Plus Jakarta Sans", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        --gpj-accent: #b48142;
        --gpj-accent-strong: #8f642f;
        --gpj-accent-soft: #f5efe6;
        --gpj-success: #18785f;
        --gpj-warning: #a66a15;
        --gpj-danger: #b13b3b;
        --gpj-info: #256c86;
        --gpj-canvas: #f6f5f2;
        --gpj-canvas-2: #ebe8e1;
        --gpj-panel: rgba(255, 255, 255, .94);
        --gpj-panel-solid: #ffffff;
        --gpj-panel-muted: #faf9f6;
        --gpj-elevated: #ffffff;
        --gpj-ink: #171717;
        --gpj-ink-2: #34312c;
        --gpj-muted: #706b62;
        --gpj-subtle: #9b9488;
        --gpj-border: rgba(44, 39, 32, .11);
        --gpj-border-strong: rgba(44, 39, 32, .18);
        --gpj-ring: rgba(180, 129, 66, .23);
        --gpj-shadow-sm: 0 1px 2px rgba(24, 20, 16, .05);
        --gpj-shadow-md: 0 14px 34px rgba(35, 29, 20, .08);
        --gpj-shadow-lg: 0 24px 70px rgba(35, 29, 20, .13);
        --gpj-radius-sm: .65rem;
        --gpj-radius: .9rem;
        --gpj-radius-lg: 1.15rem;
        --gpj-transition: 170ms cubic-bezier(.2, .8, .2, 1);
    }

    :root.dark {
        color-scheme: dark;
        --gpj-accent: #d6ad72;
        --gpj-accent-strong: #f0cf9a;
        --gpj-accent-soft: rgba(214, 173, 114, .12);
        --gpj-success: #63d4af;
        --gpj-warning: #e4b764;
        --gpj-danger: #f07f7f;
        --gpj-info: #7ec9df;
        --gpj-canvas: #08090b;
        --gpj-canvas-2: #111317;
        --gpj-panel: rgba(18, 20, 24, .86);
        --gpj-panel-solid: #121418;
        --gpj-panel-muted: #171a20;
        --gpj-elevated: #1a1d23;
        --gpj-ink: #f7f4ee;
        --gpj-ink-2: #e3ddd3;
        --gpj-muted: #b0a89c;
        --gpj-subtle: #81796f;
        --gpj-border: rgba(255, 255, 255, .10);
        --gpj-border-strong: rgba(255, 255, 255, .16);
        --gpj-ring: rgba(214, 173, 114, .28);
        --gpj-shadow-sm: 0 1px 2px rgba(0, 0, 0, .28);
        --gpj-shadow-md: 0 18px 44px rgba(0, 0, 0, .34);
        --gpj-shadow-lg: 0 30px 88px rgba(0, 0, 0, .52);
    }

    html,
    body,
    .fi-body,
    .fi-layout {
        font-family: var(--gpj-font) !important;
        letter-spacing: 0 !important;
    }

    * {
        scrollbar-color: color-mix(in srgb, var(--gpj-subtle) 55%, transparent) transparent;
    }

    ::selection {
        background: color-mix(in srgb, var(--gpj-accent) 28%, transparent);
        color: var(--gpj-ink);
    }

    .fi-layout {
        min-height: 100svh !important;
        background:
            radial-gradient(circle at 12% 0%, color-mix(in srgb, var(--gpj-accent) 13%, transparent), transparent 24rem),
            radial-gradient(circle at 92% 8%, rgba(37, 108, 134, .10), transparent 24rem),
            linear-gradient(180deg, var(--gpj-canvas), var(--gpj-canvas-2)) !important;
        color: var(--gpj-ink) !important;
    }

    :root.dark .fi-layout {
        background:
            radial-gradient(circle at 14% -4%, rgba(214, 173, 114, .14), transparent 28rem),
            radial-gradient(circle at 90% 2%, rgba(126, 201, 223, .10), transparent 24rem),
            linear-gradient(180deg, #0b0d10, #08090b 48%, #0b0c0e) !important;
    }

    .fi-main {
        padding-block: clamp(1rem, 2.2vw, 1.75rem) !important;
    }

    .fi-main > .fi-page,
    .fi-main .fi-page {
        gap: 1.15rem !important;
    }

    .fi-header {
        gap: .9rem !important;
        padding: .1rem .05rem .25rem !important;
    }

    .fi-header-heading {
        color: var(--gpj-ink) !important;
        font-size: clamp(1.35rem, 1.8vw, 2.05rem) !important;
        font-weight: 780 !important;
        letter-spacing: 0 !important;
        line-height: 1.12 !important;
    }

    .fi-header-subheading,
    .fi-section-header-description,
    .fi-wi-stats-overview-stat-description,
    .fi-ta-header-description,
    .fi-ta-empty-state-description,
    .fi-fo-field-wrp-helper-text,
    .fi-modal-description,
    .fi-notification-body,
    .fi-account-widget-user-name {
        color: var(--gpj-muted) !important;
    }

    .fi-topbar {
        border-bottom: 1px solid var(--gpj-border) !important;
        background: color-mix(in srgb, var(--gpj-panel-solid) 82%, transparent) !important;
        backdrop-filter: blur(18px) saturate(1.08);
        box-shadow: 0 1px 0 color-mix(in srgb, var(--gpj-panel-solid) 50%, transparent) inset !important;
    }

    .fi-sidebar {
        border-inline-end: 1px solid var(--gpj-border) !important;
        background:
            linear-gradient(180deg, color-mix(in srgb, var(--gpj-panel-solid) 96%, transparent), color-mix(in srgb, var(--gpj-panel-muted) 92%, transparent)) !important;
        color: var(--gpj-ink) !important;
        box-shadow: 1px 0 0 color-mix(in srgb, var(--gpj-panel-solid) 60%, transparent) inset !important;
    }

    :root.dark .fi-sidebar,
    :root.dark .fi-topbar {
        background: color-mix(in srgb, var(--gpj-panel-solid) 86%, transparent) !important;
    }

    .fi-sidebar-header {
        min-height: 5.25rem !important;
        padding: 1rem 1.1rem !important;
        border-bottom: 1px solid var(--gpj-border) !important;
        background: transparent !important;
    }

    .fi-logo {
        display: flex !important;
        align-items: center !important;
        min-width: 0 !important;
        text-decoration: none !important;
    }

    .fi-sidebar-header-logo-ctn,
    .fi-topbar-start {
        min-width: 0 !important;
    }

    .fi-sidebar-header-logo-ctn > a,
    .fi-topbar-start > a {
        display: inline-flex !important;
        align-items: center !important;
        max-width: 100% !important;
        min-width: 0 !important;
        text-decoration: none !important;
    }

    .gpj-brand-logo {
        display: inline-flex;
        align-items: center;
        min-width: 0;
        max-width: 100%;
        gap: .72rem;
    }

    .gpj-brand-logo-image {
        flex: 0 0 auto;
        width: 2.75rem;
        height: 2.75rem;
        object-fit: contain;
        border-radius: .85rem;
        background: #fff;
        box-shadow: var(--gpj-shadow-sm), 0 0 0 1px rgba(180, 129, 66, .18);
    }

    .gpj-brand-wordmark {
        display: grid;
        min-width: 0;
        max-width: 12.5rem;
        color: var(--gpj-ink) !important;
        font-size: .83rem;
        font-weight: 780;
        line-height: 1.08;
        letter-spacing: 0 !important;
        white-space: nowrap;
        transition:
            opacity .24s var(--gpj-transition),
            transform .24s var(--gpj-transition),
            max-width .24s var(--gpj-transition);
    }

    .gpj-brand-wordmark::after {
        content: "Property Admin";
        margin-top: .18rem;
        color: var(--gpj-muted);
        font-size: .68rem;
        font-weight: 600;
    }

    .fi-sidebar-nav {
        padding: .85rem .85rem 1.25rem !important;
    }

    .fi-sidebar-nav-groups {
        row-gap: .9rem !important;
    }

    .fi-sidebar-group-label {
        color: var(--gpj-subtle) !important;
        font-size: .68rem !important;
        font-weight: 760 !important;
        letter-spacing: .06em !important;
        text-transform: uppercase !important;
    }

    .fi-sidebar-item a,
    .fi-sidebar-item button,
    .fi-sidebar-nav a,
    .fi-sidebar-nav button {
        min-height: 2.55rem !important;
        border-radius: .82rem !important;
        color: var(--gpj-muted) !important;
        font-weight: 640 !important;
        transition:
            background-color .16s var(--gpj-transition),
            color .16s var(--gpj-transition),
            transform .16s var(--gpj-transition),
            box-shadow .16s var(--gpj-transition) !important;
    }

    .fi-sidebar-item a:hover,
    .fi-sidebar-item button:hover,
    .fi-sidebar-nav a:hover,
    .fi-sidebar-nav button:hover {
        background: color-mix(in srgb, var(--gpj-accent-soft) 74%, transparent) !important;
        color: var(--gpj-accent-strong) !important;
        transform: translateX(2px);
    }

    .fi-sidebar-item.fi-active a,
    .fi-sidebar-nav a[aria-current="page"] {
        background: linear-gradient(135deg, color-mix(in srgb, var(--gpj-accent) 16%, transparent), color-mix(in srgb, var(--gpj-accent-soft) 82%, transparent)) !important;
        color: var(--gpj-accent-strong) !important;
        box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset, 0 10px 24px color-mix(in srgb, var(--gpj-accent) 12%, transparent) !important;
    }

    .fi-sidebar-item-icon,
    .fi-sidebar-nav .fi-icon,
    .fi-topbar .fi-icon {
        color: currentColor !important;
    }

    .fi-section,
    .fi-wi-stats-overview-stat,
    .fi-ta,
    .fi-ta-ctn,
    .fi-modal-window,
    .fi-dropdown-panel,
    .fi-fo-repeater-item,
    .fi-fo-key-value,
    .fi-fo-file-upload,
    .fi-tabs {
        border-color: var(--gpj-border) !important;
        background: var(--gpj-panel) !important;
        color: var(--gpj-ink) !important;
        box-shadow: var(--gpj-shadow-md) !important;
        backdrop-filter: blur(14px) saturate(1.05);
    }

    .fi-section,
    .fi-wi-stats-overview-stat,
    .fi-ta,
    .fi-modal-window {
        border-width: 1px !important;
        border-radius: var(--gpj-radius-lg) !important;
        overflow: hidden;
    }

    .fi-section-header,
    .fi-section-content,
    .fi-ta-main,
    .fi-ta-content,
    .fi-ta-table,
    .fi-ta-row {
        background: transparent !important;
        color: var(--gpj-ink) !important;
    }

    .fi-section-header {
        padding-block: 1rem .9rem !important;
        border-bottom: 1px solid var(--gpj-border) !important;
        background: linear-gradient(180deg, color-mix(in srgb, var(--gpj-panel-muted) 70%, transparent), transparent) !important;
    }

    .fi-section-header-heading,
    .fi-ta-header-heading,
    .fi-modal-heading,
    .fi-notification-title,
    .fi-wi-stats-overview-stat-label,
    .fi-fo-field-label,
    .fi-ta-empty-state-heading {
        color: var(--gpj-ink) !important;
        font-weight: 760 !important;
        letter-spacing: 0 !important;
    }

    .fi-section-content {
        padding: 1rem !important;
    }

    .fi-btn,
    .fi-ac-btn-action,
    .fi-icon-btn {
        border-radius: .78rem !important;
        font-weight: 720 !important;
        letter-spacing: 0 !important;
        transition:
            transform .16s var(--gpj-transition),
            box-shadow .16s var(--gpj-transition),
            background-color .16s var(--gpj-transition),
            border-color .16s var(--gpj-transition) !important;
    }

    .fi-btn:hover,
    .fi-ac-btn-action:hover,
    .fi-icon-btn:hover {
        transform: translateY(-1px);
    }

    .fi-btn.fi-color-primary,
    .fi-ac-btn-action.fi-color-primary,
    .fi-btn-color-primary {
        border: 1px solid color-mix(in srgb, var(--gpj-accent-strong) 72%, transparent) !important;
        background: linear-gradient(135deg, #c79552, var(--gpj-accent-strong)) !important;
        color: #ffffff !important;
        box-shadow: 0 14px 30px color-mix(in srgb, var(--gpj-accent) 24%, transparent) !important;
    }

    .fi-btn.fi-color-primary span,
    .fi-btn.fi-color-primary .fi-icon,
    .fi-ac-btn-action.fi-color-primary span,
    .fi-ac-btn-action.fi-color-primary .fi-icon {
        color: #ffffff !important;
    }

    .fi-btn:not(.fi-color-primary),
    .fi-icon-btn,
    .fi-dropdown-list-item {
        color: var(--gpj-ink) !important;
    }

    .fi-input-wrp,
    .fi-select-input,
    .fi-textarea,
    .fi-input,
    .fi-tags-input,
    .fi-fo-markdown-editor,
    .fi-fo-rich-editor,
    .fi-fo-date-time-picker-panel {
        border-color: var(--gpj-border) !important;
        background: color-mix(in srgb, var(--gpj-elevated) 92%, transparent) !important;
        color: var(--gpj-ink) !important;
        box-shadow: var(--gpj-shadow-sm) !important;
    }

    .fi-input-wrp {
        min-height: 2.75rem !important;
        border-width: 1px !important;
        border-radius: .82rem !important;
    }

    .fi-input-wrp:focus-within,
    .fi-fo-rich-editor:focus-within,
    .fi-fo-markdown-editor:focus-within,
    .fi-fo-file-upload:focus-within {
        border-color: color-mix(in srgb, var(--gpj-accent) 78%, transparent) !important;
        box-shadow: 0 0 0 4px var(--gpj-ring), var(--gpj-shadow-sm) !important;
    }

    .fi-input,
    .fi-textarea,
    .fi-select-input,
    .fi-input-wrp input,
    .fi-input-wrp textarea,
    .fi-input-wrp select,
    input.fi-input,
    textarea.fi-input {
        color: var(--gpj-ink) !important;
        -webkit-text-fill-color: var(--gpj-ink) !important;
        caret-color: var(--gpj-accent-strong) !important;
        background: transparent !important;
    }

    .fi-input::placeholder,
    .fi-textarea::placeholder,
    .fi-input-wrp input::placeholder,
    .fi-input-wrp textarea::placeholder {
        color: var(--gpj-subtle) !important;
        -webkit-text-fill-color: var(--gpj-subtle) !important;
        opacity: 1 !important;
    }

    .fi-input:-webkit-autofill,
    .fi-input:-webkit-autofill:hover,
    .fi-input:-webkit-autofill:focus {
        -webkit-text-fill-color: #171717 !important;
        box-shadow: 0 0 0 1000px #ffffff inset !important;
        transition: background-color 9999s ease-out;
    }

    .fi-fo-field-label {
        color: var(--gpj-ink-2) !important;
        font-size: .82rem !important;
    }

    .fi-toggle input:checked + *,
    .fi-checkbox-input:checked,
    .fi-radio-input:checked {
        accent-color: var(--gpj-accent) !important;
    }

    .fi-tabs {
        padding: .28rem !important;
        border-radius: var(--gpj-radius) !important;
        box-shadow: var(--gpj-shadow-sm) !important;
    }

    .fi-tabs-item {
        border-radius: .72rem !important;
        color: var(--gpj-muted) !important;
        font-weight: 720 !important;
        transition:
            background-color .16s var(--gpj-transition),
            color .16s var(--gpj-transition),
            box-shadow .16s var(--gpj-transition) !important;
    }

    .fi-tabs-item[aria-selected="true"] {
        background: color-mix(in srgb, var(--gpj-accent-soft) 88%, var(--gpj-panel-solid)) !important;
        color: var(--gpj-accent-strong) !important;
        box-shadow: var(--gpj-shadow-sm) !important;
    }

    .fi-ta {
        border-spacing: 0 !important;
    }

    .fi-ta-header {
        padding: 1rem 1rem .8rem !important;
        border-bottom: 1px solid var(--gpj-border) !important;
        background: linear-gradient(180deg, color-mix(in srgb, var(--gpj-panel-muted) 78%, transparent), transparent) !important;
    }

    .fi-ta-content {
        overflow: auto !important;
    }

    .fi-ta-table thead,
    .fi-ta-header-cell,
    .fi-ta-content-header {
        background: color-mix(in srgb, var(--gpj-panel-muted) 84%, transparent) !important;
    }

    .fi-ta-table th,
    .fi-ta-table td,
    .fi-ta-cell,
    .fi-ta-col,
    .fi-ta-row,
    .fi-ta-header-cell,
    .fi-ta-cell-label {
        color: var(--gpj-ink) !important;
        border-color: var(--gpj-border) !important;
    }

    .fi-ta-table th {
        color: var(--gpj-muted) !important;
        font-size: .72rem !important;
        font-weight: 780 !important;
        letter-spacing: .04em !important;
        text-transform: uppercase !important;
    }

    .fi-ta-row,
    .fi-ta-record {
        transition:
            background-color .14s var(--gpj-transition),
            box-shadow .14s var(--gpj-transition) !important;
    }

    .fi-ta-row:hover,
    .fi-ta-record:hover {
        background: color-mix(in srgb, var(--gpj-accent-soft) 66%, transparent) !important;
    }

    .fi-ta-empty-state {
        padding-block: 3rem !important;
        color: var(--gpj-muted) !important;
    }

    .fi-ta-search-field .fi-input-wrp {
        min-width: min(100%, 21rem) !important;
    }

    .fi-pagination,
    .fi-pagination-items {
        color: var(--gpj-muted) !important;
    }

    .fi-badge {
        border: 1px solid color-mix(in srgb, currentColor 18%, transparent) !important;
        border-radius: 999px !important;
        font-weight: 760 !important;
        letter-spacing: 0 !important;
    }

    .fi-badge:not(.fi-color) {
        background: color-mix(in srgb, var(--gpj-panel-muted) 80%, var(--gpj-muted)) !important;
        color: var(--gpj-ink) !important;
    }

    .fi-fo-file-upload {
        min-width: 0 !important;
        border-style: dashed !important;
        border-radius: var(--gpj-radius) !important;
        background:
            linear-gradient(180deg, color-mix(in srgb, var(--gpj-panel-muted) 76%, transparent), color-mix(in srgb, var(--gpj-panel-solid) 80%, transparent)) !important;
        box-shadow: var(--gpj-shadow-sm) !important;
    }

    .fi-fo-file-upload * {
        border-color: var(--gpj-border) !important;
    }

    .fi-fo-file-upload:hover {
        border-color: color-mix(in srgb, var(--gpj-accent) 55%, transparent) !important;
        background: color-mix(in srgb, var(--gpj-accent-soft) 42%, var(--gpj-panel-solid)) !important;
    }

    .fi-fo-repeater-item,
    .fi-fo-key-value {
        border-radius: var(--gpj-radius) !important;
        box-shadow: var(--gpj-shadow-sm) !important;
    }

    .fi-modal-window {
        background: var(--gpj-panel-solid) !important;
        box-shadow: var(--gpj-shadow-lg) !important;
    }

    .fi-modal-close-overlay {
        background: rgba(10, 9, 8, .58) !important;
        backdrop-filter: blur(8px);
    }

    .fi-dropdown-panel {
        border-radius: .9rem !important;
        box-shadow: var(--gpj-shadow-lg) !important;
    }

    .fi-dropdown-list-item:hover {
        background: color-mix(in srgb, var(--gpj-accent-soft) 74%, transparent) !important;
    }

    .fi-notification {
        border: 1px solid var(--gpj-border) !important;
        border-radius: var(--gpj-radius) !important;
        background: var(--gpj-panel-solid) !important;
        color: var(--gpj-ink) !important;
        box-shadow: var(--gpj-shadow-lg) !important;
    }

    .fi-wi-stats-overview {
        gap: 1rem !important;
    }

    .fi-wi-stats-overview-stat {
        position: relative;
        isolation: isolate;
        padding: 1.05rem !important;
        overflow: hidden;
        transition:
            transform .18s var(--gpj-transition),
            box-shadow .18s var(--gpj-transition),
            border-color .18s var(--gpj-transition) !important;
    }

    .fi-wi-stats-overview-stat::before {
        content: "";
        position: absolute;
        inset: 0 auto 0 0;
        width: 4px;
        background: linear-gradient(180deg, var(--gpj-accent), var(--gpj-accent-strong));
        opacity: .9;
        z-index: -1;
    }

    .fi-wi-stats-overview-stat::after {
        content: "";
        position: absolute;
        inset: auto -3rem -4rem auto;
        width: 9rem;
        height: 9rem;
        border-radius: 999px;
        background: color-mix(in srgb, var(--gpj-accent) 9%, transparent);
        z-index: -1;
    }

    .fi-wi-stats-overview-stat:hover {
        transform: translateY(-2px);
        border-color: color-mix(in srgb, var(--gpj-accent) 36%, transparent) !important;
        box-shadow: var(--gpj-shadow-lg) !important;
    }

    .fi-wi-stats-overview-stat-value {
        color: var(--gpj-ink) !important;
        font-size: clamp(1.7rem, 2vw, 2.25rem) !important;
        font-weight: 820 !important;
        letter-spacing: 0 !important;
    }

    .gpj-guide-grid {
        display: grid;
        grid-template-columns: repeat(1, minmax(0, 1fr));
        gap: .9rem;
    }

    .gpj-guide-card {
        position: relative;
        display: grid;
        min-height: 9.3rem;
        align-content: space-between;
        gap: .9rem;
        padding: 1rem;
        overflow: hidden;
        border: 1px solid var(--gpj-border) !important;
        border-radius: var(--gpj-radius) !important;
        background:
            linear-gradient(180deg, color-mix(in srgb, var(--gpj-panel-solid) 92%, transparent), color-mix(in srgb, var(--gpj-panel-muted) 92%, transparent)) !important;
        color: var(--gpj-ink) !important;
        text-decoration: none !important;
        box-shadow: var(--gpj-shadow-sm);
        transition:
            transform .18s var(--gpj-transition),
            border-color .18s var(--gpj-transition),
            box-shadow .18s var(--gpj-transition),
            background-color .18s var(--gpj-transition);
    }

    .gpj-guide-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, color-mix(in srgb, var(--gpj-card-accent, var(--gpj-accent)) 13%, transparent), transparent 58%);
        pointer-events: none;
    }

    .gpj-guide-card:hover {
        transform: translateY(-2px);
        border-color: color-mix(in srgb, var(--gpj-card-accent, var(--gpj-accent)) 42%, transparent) !important;
        box-shadow: var(--gpj-shadow-md);
    }

    .gpj-guide-card-top {
        position: relative;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: .85rem;
    }

    .gpj-guide-icon {
        display: inline-grid;
        width: 2.45rem;
        height: 2.45rem;
        place-items: center;
        border: 1px solid color-mix(in srgb, var(--gpj-card-accent, var(--gpj-accent)) 18%, transparent);
        border-radius: .8rem;
        background: color-mix(in srgb, var(--gpj-card-accent, var(--gpj-accent)) 12%, var(--gpj-panel-solid));
        color: var(--gpj-card-accent, var(--gpj-accent));
    }

    .gpj-guide-icon svg {
        width: 1.18rem;
        height: 1.18rem;
        stroke-width: 2;
    }

    .gpj-guide-kicker {
        color: var(--gpj-subtle);
        font-size: .68rem;
        font-weight: 760;
        letter-spacing: .06em;
        text-transform: uppercase;
    }

    .gpj-guide-title {
        margin-top: .32rem;
        color: var(--gpj-ink) !important;
        font-size: .98rem;
        font-weight: 780;
        line-height: 1.18;
    }

    .gpj-guide-card p {
        position: relative;
        margin: 0;
        color: var(--gpj-muted) !important;
        font-size: .82rem;
        line-height: 1.48;
    }

    .gpj-guide-meta {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: .35rem;
        color: var(--gpj-card-accent, var(--gpj-accent));
        font-size: .76rem;
        font-weight: 760;
    }

    .gpj-guide-meta svg {
        width: .9rem;
        height: .9rem;
    }

    .fi-simple-layout {
        position: relative;
        isolation: isolate;
        min-height: 100svh !important;
        overflow: hidden;
        background:
            linear-gradient(120deg, rgba(7, 8, 10, .86) 0%, rgba(19, 16, 13, .66) 46%, rgba(71, 51, 30, .48) 100%),
            url("{{ asset('static/image/hero_entrance.png') }}") center / cover fixed !important;
    }

    .fi-simple-layout::before {
        content: "";
        position: fixed;
        inset: -1.5rem;
        z-index: -2;
        background:
            linear-gradient(90deg, rgba(0, 0, 0, .28), transparent 45%, rgba(214, 173, 114, .13)),
            url("{{ asset('static/image/hero_entrance.png') }}") center / cover no-repeat;
        filter: blur(10px) saturate(.95);
        transform: scale(1.025);
    }

    .fi-simple-layout::after {
        content: "";
        position: fixed;
        inset: 0;
        z-index: -1;
        pointer-events: none;
        background:
            radial-gradient(circle at 22% 18%, rgba(214, 173, 114, .24), transparent 19rem),
            radial-gradient(circle at 78% 72%, rgba(255, 255, 255, .12), transparent 21rem),
            linear-gradient(180deg, rgba(8, 9, 11, .18), rgba(8, 9, 11, .62));
    }

    .fi-simple-main-ctn {
        min-height: 100svh;
        align-items: center !important;
        justify-content: center !important;
        padding: clamp(1rem, 2.4vw, 2rem) !important;
    }

    .fi-simple-main {
        position: relative;
        width: min(100%, 30.5rem) !important;
        margin: 0 auto;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, .28);
        border-radius: 1.65rem !important;
        background:
            linear-gradient(180deg, rgba(255, 255, 255, .97), rgba(250, 247, 242, .93)) !important;
        box-shadow:
            0 42px 100px rgba(0, 0, 0, .42),
            0 1px 0 rgba(255, 255, 255, .74) inset,
            0 0 0 1px rgba(180, 129, 66, .08) inset !important;
        backdrop-filter: blur(24px) saturate(1.08);
        color: #171717 !important;
        animation: gpj-auth-enter .56s cubic-bezier(.2, .8, .2, 1) both;
    }

    .fi-simple-main::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background:
            linear-gradient(135deg, rgba(214, 173, 114, .20), transparent 36%),
            radial-gradient(circle at 80% 0%, rgba(37, 108, 134, .11), transparent 15rem);
    }

    .fi-simple-main::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        border-radius: inherit;
        box-shadow: 0 0 0 1px rgba(255, 255, 255, .34) inset;
    }

    :root.dark .fi-simple-main {
        border-color: rgba(255, 255, 255, .16);
        background:
            linear-gradient(180deg, rgba(22, 24, 29, .90), rgba(12, 13, 16, .88)) !important;
        color: var(--gpj-ink) !important;
        box-shadow:
            0 44px 110px rgba(0, 0, 0, .58),
            0 1px 0 rgba(255, 255, 255, .08) inset,
            0 0 0 1px rgba(214, 173, 114, .10) inset !important;
    }

    @keyframes gpj-auth-enter {
        from {
            opacity: 0;
            transform: translateY(14px) scale(.985);
        }

        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .fi-simple-page-content {
        position: relative;
        z-index: 1;
        row-gap: 1.3rem !important;
        padding: clamp(1.35rem, 3vw, 2rem) !important;
    }

    .fi-simple-header {
        row-gap: .7rem !important;
        text-align: center;
    }

    .fi-simple-main .fi-logo {
        justify-content: center !important;
    }

    .fi-simple-main .gpj-brand-logo {
        justify-content: center;
    }

    .fi-simple-main .gpj-brand-logo-image {
        width: 4rem;
        height: 4rem;
        border-radius: 1.1rem;
        box-shadow:
            0 18px 38px rgba(34, 25, 16, .20),
            0 0 0 1px rgba(180, 129, 66, .18);
    }

    .fi-simple-main .gpj-brand-wordmark {
        display: none !important;
    }

    .fi-simple-main h1,
    .fi-simple-header-heading {
        color: #171717 !important;
        font-size: clamp(1.55rem, 3vw, 2rem) !important;
        font-weight: 830 !important;
        letter-spacing: 0 !important;
        line-height: 1.08 !important;
    }

    :root.dark .fi-simple-main h1,
    :root.dark .fi-simple-header-heading {
        color: var(--gpj-ink) !important;
    }

    .fi-simple-main p,
    .fi-simple-main label,
    .fi-simple-main .fi-fo-field-label,
    .fi-simple-main .fi-fo-field-label-content {
        color: #4d463d !important;
    }

    :root.dark .fi-simple-main p,
    :root.dark .fi-simple-main label,
    :root.dark .fi-simple-main .fi-fo-field-label,
    :root.dark .fi-simple-main .fi-fo-field-label-content {
        color: var(--gpj-muted) !important;
    }

    .fi-simple-main .fi-fo-field-label {
        font-size: .82rem !important;
        font-weight: 760 !important;
    }

    .fi-simple-main .fi-fo-field-wrp {
        row-gap: .48rem !important;
    }

    .fi-simple-main form,
    .fi-simple-main .fi-form,
    .fi-simple-main .fi-sc,
    .fi-simple-main .fi-sc-component {
        gap: 1rem !important;
    }

    .fi-simple-main .fi-input-wrp {
        min-height: 3.15rem !important;
        border-radius: 1rem !important;
        border-color: rgba(33, 28, 22, .13) !important;
        background: rgba(255, 255, 255, .82) !important;
        box-shadow:
            0 1px 0 rgba(255, 255, 255, .76) inset,
            0 12px 24px rgba(33, 28, 22, .055) !important;
        transition:
            border-color .18s var(--gpj-transition),
            background-color .18s var(--gpj-transition),
            box-shadow .18s var(--gpj-transition),
            transform .18s var(--gpj-transition) !important;
    }

    .fi-simple-main .fi-input-wrp:hover {
        border-color: rgba(180, 129, 66, .34) !important;
        background: rgba(255, 255, 255, .94) !important;
    }

    .fi-simple-main .fi-input-wrp:focus-within {
        transform: translateY(-1px);
        border-color: rgba(180, 129, 66, .72) !important;
        background: #ffffff !important;
        box-shadow:
            0 0 0 4px rgba(180, 129, 66, .18),
            0 16px 30px rgba(33, 28, 22, .075) !important;
    }

    :root.dark .fi-simple-main .fi-input-wrp {
        border-color: rgba(255, 255, 255, .12) !important;
        background: rgba(255, 255, 255, .055) !important;
        box-shadow:
            0 1px 0 rgba(255, 255, 255, .08) inset,
            0 16px 32px rgba(0, 0, 0, .22) !important;
    }

    :root.dark .fi-simple-main .fi-input-wrp:hover {
        border-color: rgba(214, 173, 114, .34) !important;
        background: rgba(255, 255, 255, .075) !important;
    }

    :root.dark .fi-simple-main .fi-input-wrp:focus-within {
        border-color: rgba(214, 173, 114, .66) !important;
        background: rgba(255, 255, 255, .095) !important;
        box-shadow:
            0 0 0 4px rgba(214, 173, 114, .16),
            0 16px 34px rgba(0, 0, 0, .30) !important;
    }

    .fi-simple-main .fi-input,
    .fi-simple-main .fi-textarea,
    .fi-simple-main .fi-input-wrp input {
        color: #171717 !important;
        -webkit-text-fill-color: #171717 !important;
        font-size: .95rem !important;
        font-weight: 580 !important;
    }

    :root.dark .fi-simple-main .fi-input,
    :root.dark .fi-simple-main .fi-textarea,
    :root.dark .fi-simple-main .fi-input-wrp input {
        color: var(--gpj-ink) !important;
        -webkit-text-fill-color: var(--gpj-ink) !important;
    }

    .fi-simple-main .fi-input::placeholder,
    .fi-simple-main .fi-input-wrp input::placeholder {
        color: #a39a8d !important;
        -webkit-text-fill-color: #a39a8d !important;
    }

    :root.dark .fi-simple-main .fi-input::placeholder,
    :root.dark .fi-simple-main .fi-input-wrp input::placeholder {
        color: rgba(247, 244, 238, .40) !important;
        -webkit-text-fill-color: rgba(247, 244, 238, .40) !important;
    }

    .fi-simple-main .fi-input-wrp .fi-icon,
    .fi-simple-main .fi-input-wrp button,
    .fi-simple-main .fi-input-wrp .fi-icon-btn {
        color: #86796a !important;
    }

    .fi-simple-main .fi-input-wrp .fi-icon-btn,
    .fi-simple-main .fi-input-wrp button {
        width: 2.25rem !important;
        height: 2.25rem !important;
        border-radius: .78rem !important;
        transition:
            background-color .16s var(--gpj-transition),
            color .16s var(--gpj-transition),
            transform .16s var(--gpj-transition) !important;
    }

    .fi-simple-main .fi-input-wrp .fi-icon-btn:hover,
    .fi-simple-main .fi-input-wrp button:hover {
        background: rgba(180, 129, 66, .12) !important;
        color: var(--gpj-accent-strong) !important;
        transform: scale(1.03);
    }

    :root.dark .fi-simple-main .fi-input-wrp .fi-icon,
    :root.dark .fi-simple-main .fi-input-wrp button,
    :root.dark .fi-simple-main .fi-input-wrp .fi-icon-btn {
        color: rgba(247, 244, 238, .68) !important;
    }

    :root.dark .fi-simple-main .fi-input-wrp .fi-icon-btn:hover,
    :root.dark .fi-simple-main .fi-input-wrp button:hover {
        background: rgba(214, 173, 114, .14) !important;
        color: var(--gpj-accent-strong) !important;
    }

    .fi-simple-main .fi-checkbox-input {
        position: relative;
        width: 1.08rem !important;
        height: 1.08rem !important;
        flex: 0 0 auto;
        appearance: none !important;
        border: 1px solid rgba(33, 28, 22, .20) !important;
        border-radius: .36rem !important;
        background: rgba(255, 255, 255, .76) !important;
        box-shadow:
            0 1px 0 rgba(255, 255, 255, .78) inset,
            0 8px 18px rgba(33, 28, 22, .055) !important;
        transition:
            background-color .16s var(--gpj-transition),
            border-color .16s var(--gpj-transition),
            box-shadow .16s var(--gpj-transition),
            transform .16s var(--gpj-transition) !important;
    }

    .fi-simple-main .fi-checkbox-input:hover {
        border-color: rgba(180, 129, 66, .58) !important;
        transform: translateY(-1px);
    }

    .fi-simple-main .fi-checkbox-input:focus-visible {
        outline: none !important;
        box-shadow: 0 0 0 4px rgba(180, 129, 66, .18) !important;
    }

    .fi-simple-main .fi-checkbox-input:checked {
        border-color: var(--gpj-accent-strong) !important;
        background:
            linear-gradient(135deg, #c79552, var(--gpj-accent-strong)) !important;
        box-shadow:
            0 0 0 3px rgba(180, 129, 66, .16),
            0 10px 18px rgba(180, 129, 66, .18) !important;
    }

    .fi-simple-main .fi-checkbox-input:checked::after {
        content: "";
        position: absolute;
        inset: .18rem .28rem .3rem .3rem;
        border-right: 2px solid #fff;
        border-bottom: 2px solid #fff;
        transform: rotate(42deg);
    }

    :root.dark .fi-simple-main .fi-checkbox-input {
        border-color: rgba(255, 255, 255, .18) !important;
        background: rgba(255, 255, 255, .07) !important;
        box-shadow:
            0 1px 0 rgba(255, 255, 255, .08) inset,
            0 10px 20px rgba(0, 0, 0, .26) !important;
    }

    :root.dark .fi-simple-main .fi-checkbox-input:hover {
        border-color: rgba(214, 173, 114, .56) !important;
    }

    .fi-simple-main .fi-link {
        color: var(--gpj-accent-strong) !important;
        font-weight: 760 !important;
        text-decoration-color: color-mix(in srgb, var(--gpj-accent-strong) 28%, transparent) !important;
        text-underline-offset: .22rem;
        transition:
            color .16s var(--gpj-transition),
            text-decoration-color .16s var(--gpj-transition) !important;
    }

    .fi-simple-main .fi-link:hover {
        color: #6f4a22 !important;
        text-decoration-color: currentColor !important;
    }

    :root.dark .fi-simple-main .fi-link {
        color: var(--gpj-accent-strong) !important;
    }

    .fi-simple-main .fi-btn.fi-color-primary,
    .fi-simple-main .fi-ac-btn-action.fi-color-primary {
        min-height: 3.1rem !important;
        width: 100% !important;
        border-radius: 1rem !important;
        border-color: rgba(111, 74, 34, .40) !important;
        background:
            linear-gradient(135deg, #d2a15d 0%, #a87537 52%, #855827 100%) !important;
        color: #ffffff !important;
        font-size: .95rem !important;
        font-weight: 800 !important;
        box-shadow:
            0 18px 34px rgba(146, 96, 41, .28),
            0 1px 0 rgba(255, 255, 255, .28) inset !important;
    }

    .fi-simple-main .fi-btn.fi-color-primary:hover,
    .fi-simple-main .fi-ac-btn-action.fi-color-primary:hover {
        transform: translateY(-2px);
        box-shadow:
            0 24px 42px rgba(146, 96, 41, .34),
            0 1px 0 rgba(255, 255, 255, .36) inset !important;
        filter: saturate(1.04);
    }

    .fi-simple-main .fi-btn.fi-color-primary:active,
    .fi-simple-main .fi-ac-btn-action.fi-color-primary:active {
        transform: translateY(0);
    }

    :root.dark .fi-simple-main .fi-btn.fi-color-primary,
    :root.dark .fi-simple-main .fi-ac-btn-action.fi-color-primary {
        background:
            linear-gradient(135deg, #d9b276 0%, #a87537 55%, #725026 100%) !important;
        box-shadow:
            0 20px 38px rgba(0, 0, 0, .32),
            0 0 0 1px rgba(214, 173, 114, .18) inset,
            0 1px 0 rgba(255, 255, 255, .18) inset !important;
    }

    @media (min-width: 768px) {
        .gpj-guide-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (min-width: 1280px) {
        .gpj-guide-grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }
    }

    @media (min-width: 1024px) {
        .fi-body-has-sidebar-collapsible-on-desktop:not(:has(.fi-main-ctn-sidebar-open)) .fi-topbar-start .gpj-brand-wordmark,
        .fi-sidebar.fi-sidebar-collapsed .gpj-brand-wordmark {
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            transform: translateX(-.25rem);
        }
    }

    @media (max-width: 1023px) {
        .fi-sidebar .gpj-brand-wordmark {
            max-width: 10rem;
            font-size: .76rem;
        }

        .fi-main {
            padding-inline: .85rem !important;
        }
    }

    @media (max-width: 768px) {
        .fi-main {
            padding-block: .9rem !important;
        }

        .fi-header {
            gap: .7rem !important;
        }

        .fi-section-content {
            padding: .85rem !important;
        }

        .fi-tabs {
            overflow-x: auto;
        }

        .fi-ta-header {
            padding: .85rem !important;
        }

        .gpj-guide-card {
            min-height: auto;
        }

        .fi-simple-main-ctn {
            min-height: 100svh !important;
            padding: 1rem !important;
        }

        .fi-simple-main {
            width: min(calc(100vw - 2rem), 28rem) !important;
            max-height: calc(100svh - 2rem);
            margin-inline: auto !important;
            overflow-y: auto;
            border-radius: 1rem !important;
        }

        .fi-simple-page-content {
            row-gap: .8rem !important;
            padding: 1rem !important;
        }

        .fi-simple-main .gpj-brand-logo-image {
            width: 2.8rem;
            height: 2.8rem;
        }

        .fi-simple-header-heading {
            font-size: 1.1rem !important;
            line-height: 1.24 !important;
        }

        .fi-input-wrp {
            min-height: 2.5rem !important;
            border-radius: .72rem !important;
        }

        .fi-simple-main form {
            row-gap: .75rem !important;
        }

        .fi-simple-layout {
            background-position: center top !important;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        *,
        *::before,
        *::after {
            scroll-behavior: auto !important;
            transition-duration: .01ms !important;
            animation-duration: .01ms !important;
            animation-iteration-count: 1 !important;
        }
    }
</style>

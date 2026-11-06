<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Meditech System | Sales Order</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: {
                50: "#e7e9f6",
                100: "#b4bae2",
                200: "#9099d4",
                300: "#5d6ac0",
                400: "#3d4db4",
                500: "#0d21a1",
                600: "#0c1e93",
                700: "#091772",
                800: "#071259",
                900: "#050e44",
              },
              secondary: {
                50: "#fdf9ec",
                100: "#faedc5",
                200: "#f7e5a9",
                300: "#f4d981",
                400: "#f1d169",
                500: "#eec643",
                600: "#d9b43d",
                700: "#a98d30",
                800: "#836d25",
                900: "#64531c",
              },
              neutral: {
                50: "#fafafa",
                100: "#f5f5f5",
                200: "#e5e5e5",
                300: "#d4d4d4",
                400: "#a1a1a1",
                500: "#737373",
                600: "#525252",
                700: "#404040",
                800: "#262626",
                900: "#171717",
              },
            },
          },
        },
      };
    </script>
    <style>
      :root {
        --color-primary-50: #e7e9f6;
        --color-primary-100: #b4bae2;
        --color-primary-200: #9099d4;
        --color-primary-300: #5d6ac0;
        --color-primary-400: #3d4db4;
        --color-primary-500: #0d21a1;
        --color-primary-600: #0c1e93;
        --color-primary-700: #091772;
        --color-primary-800: #071259;
        --color-primary-900: #050e44;
        --color-secondary-50: #fdf9ec;
        --color-secondary-100: #faedc5;
        --color-secondary-200: #f7e5a9;
        --color-secondary-300: #f4d981;
        --color-secondary-400: #f1d169;
        --color-secondary-500: #eec643;
        --color-secondary-600: #d9b43d;
        --color-secondary-700: #a98d30;
        --color-secondary-800: #836d25;
        --color-secondary-900: #64531c;
        --color-neutral-50: #fafafa;
        --color-neutral-100: #f5f5f5;
        --color-neutral-200: #e5e5e5;
        --color-neutral-300: #d4d4d4;
        --color-neutral-400: #a1a1a1;
        --color-neutral-500: #737373;
        --color-neutral-600: #525252;
        --color-neutral-700: #404040;
        --color-neutral-800: #262626;
        --color-neutral-900: #171717;
        --color-neutral-950: #000;
      }
      * {
        box-sizing: border-box;
      }
      body {
        margin: 0;
        background: #f7f8fb;
        color: #262626;
        font:
          14px/1.45 Inter,
          ui-sans-serif,
          system-ui,
          -apple-system,
          BlinkMacSystemFont,
          "Segoe UI",
          sans-serif;
      }
      button,
      input,
      select,
      textarea {
        font: inherit;
      }
      button {
        cursor: pointer;
      }
      .shell {
        display: flex;
        min-height: 100vh;
      }
      .sidebar {
        width: 248px;
        background: #fff;
        border-right: 1px solid #e8eaf0;
        display: flex;
        flex-direction: column;
        position: fixed;
        inset: 0 auto 0 0;
        z-index: 20;
      }
      .brand {
        padding: 22px 20px 18px;
        display: flex;
        align-items: center;
        gap: 11px;
        border-bottom: 1px solid #f0f1f5;
      }
      .brand-mark {
        width: 37px;
        height: 37px;
        background: #0d21a1;
        color: white;
        border-radius: 10px;
        display: grid;
        place-items: center;
        font-weight: 800;
        font-size: 15px;
        letter-spacing: -1px;
      }
      .brand-name {
        font-size: 16px;
        font-weight: 750;
        color: #171717;
        letter-spacing: -0.5px;
      }
      .brand-sub {
        font-size: 10px;
        letter-spacing: 1.25px;
        color: #737373;
        font-weight: 700;
        margin-top: 2px;
      }
      .nav-scroll {
        overflow: auto;
        padding: 12px 12px;
        flex: 1;
      }
      .nav-label {
        font-size: 10px;
        letter-spacing: 1.2px;
        color: #a1a1a1;
        font-weight: 750;
        padding: 14px 11px 8px;
      }
      .nav-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 11px;
        margin: 2px 0;
        border-radius: 8px;
        color: #525252;
        text-decoration: none;
        font-weight: 550;
        font-size: 13px;
        transition: 0.15s;
      }
      .nav-item:hover {
        background: #f5f6fb;
        color: #0d21a1;
      }
      .nav-item.active {
        background: #e7e9f6;
        color: #0d21a1;
        font-weight: 700;
      }
      .nav-icon {
        width: 18px;
        text-align: center;
        font-size: 15px;
      }
      .nav-count {
        margin-left: auto;
        background: #eec643;
        color: #262626;
        font-size: 10px;
        font-weight: 800;
        padding: 2px 6px;
        border-radius: 5px;
      }
      .side-bottom {
        border-top: 1px solid #f0f1f5;
        padding: 14px;
      }
      .user-mini {
        display: flex;
        gap: 10px;
        align-items: center;
        padding: 8px;
      }
      .avatar {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        background: #e7e9f6;
        color: #0d21a1;
        font-weight: 800;
        font-size: 12px;
        flex-shrink: 0;
      }
      .user-mini-name {
        font-size: 12px;
        font-weight: 700;
      }
      .user-mini-role {
        font-size: 11px;
        color: #737373;
        margin-top: 2px;
      }
      .main {
        margin-left: 248px;
        width: calc(100% - 248px);
        min-width: 0;
      }
      .topbar {
        height: 68px;
        background: #fff;
        border-bottom: 1px solid #e8eaf0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 30px;
        position: sticky;
        top: 0;
        z-index: 10;
      }
      .crumb {
        color: #a1a1a1;
        font-size: 12px;
      }
      .crumb strong {
        color: #404040;
        font-weight: 650;
      }
      .top-actions {
        display: flex;
        align-items: center;
        gap: 12px;
      }
      .searchbox {
        width: 240px;
        position: relative;
      }
      .searchbox input {
        width: 100%;
        padding: 9px 12px 9px 34px;
        border: 1px solid #e5e5e5;
        border-radius: 8px;
        background: #fafafa;
        outline: none;
        font-size: 12px;
      }
      .searchbox span {
        position: absolute;
        left: 11px;
        top: 8px;
        color: #a1a1a1;
      }
      .icon-btn {
        width: 36px;
        height: 36px;
        border: 1px solid #e5e5e5;
        background: white;
        border-radius: 8px;
        color: #525252;
        position: relative;
      }
      .dot {
        width: 6px;
        height: 6px;
        background: #eec643;
        border-radius: 50%;
        position: absolute;
        right: 7px;
        top: 7px;
        border: 1px solid white;
      }
      .role-select {
        border: 1px solid #e5e5e5;
        background: #fff;
        padding: 8px 10px;
        border-radius: 8px;
        color: #404040;
        font-size: 12px;
        max-width: 190px;
      }
      .content {
        padding: 27px 30px 42px;
        max-width: 1600px;
        margin: auto;
      }
      .page-head {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 20px;
        margin-bottom: 24px;
      }
      .eyebrow {
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 1.3px;
        font-weight: 800;
        color: #0d21a1;
        margin-bottom: 7px;
      }
      .page-title {
        font-size: 25px;
        letter-spacing: -0.8px;
        font-weight: 760;
        color: #171717;
        margin: 0;
      }
      .page-desc {
        color: #737373;
        font-size: 12px;
        margin-top: 6px;
      }
      .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 12px;
        font-weight: 700;
        border: 1px solid transparent;
        transition: 0.15s;
        white-space: nowrap;
      }
      .btn-primary {
        background: #0d21a1;
        color: #fff;
      }
      .btn-primary:hover {
        background: #091772;
      }
      .btn-secondary {
        background: #fff;
        border-color: #dedfe6;
        color: #404040;
      }
      .btn-secondary:hover {
        background: #fafafa;
        border-color: #b4bae2;
      }
      .btn-warn {
        background: #fdf9ec;
        color: #836d25;
        border-color: #f7e5a9;
      }
      .btn-sm {
        padding: 7px 10px;
        font-size: 11px;
      }
      .grid {
        display: grid;
        gap: 16px;
      }
      .stats {
        grid-template-columns: repeat(4, minmax(0, 1fr));
        margin-bottom: 20px;
      }
      .stat-card,
      .panel {
        background: #fff;
        border: 1px solid #e8eaf0;
        border-radius: 12px;
        box-shadow: 0 1px 2px rgba(20, 27, 55, 0.02);
      }
      .stat-card {
        padding: 18px 18px 16px;
        min-height: 126px;
      }
      .stat-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: #737373;
        font-size: 11px;
        font-weight: 600;
      }
      .stat-icon {
        width: 31px;
        height: 31px;
        display: grid;
        place-items: center;
        border-radius: 8px;
        background: #e7e9f6;
        color: #0d21a1;
        font-size: 15px;
      }
      .stat-value {
        font-size: 25px;
        font-weight: 760;
        letter-spacing: -0.7px;
        margin: 12px 0 4px;
        color: #171717;
      }
      .stat-foot {
        font-size: 10px;
        color: #737373;
      }
      .positive {
        color: #16805d;
        font-weight: 700;
      }
      .panel {
        overflow: hidden;
      }
      .panel-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 17px 19px;
        border-bottom: 1px solid #f0f1f5;
        gap: 12px;
      }
      .panel-title {
        font-size: 13px;
        font-weight: 750;
        color: #262626;
      }
      .panel-sub {
        font-size: 11px;
        color: #737373;
        margin-top: 4px;
      }
      .panel-body {
        padding: 18px 19px;
      }
      .dashboard-grid {
        grid-template-columns: minmax(0, 1.5fr) minmax(280px, 1fr);
        margin-bottom: 18px;
      }
      .bottom-grid {
        grid-template-columns: minmax(0, 1.2fr) minmax(280px, 1fr);
      }
      .table-wrap {
        overflow-x: auto;
      }
      table {
        width: 100%;
        border-collapse: collapse;
        white-space: nowrap;
      }
      th {
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 0.65px;
        text-align: left;
        color: #737373;
        font-weight: 750;
        background: #fafafa;
        padding: 12px 16px;
        border-bottom: 1px solid #eee;
      }
      td {
        font-size: 12px;
        padding: 14px 16px;
        border-bottom: 1px solid #f0f1f5;
        color: #404040;
      }
      tbody tr:last-child td {
        border-bottom: 0;
      }
      tbody tr:hover {
        background: #fcfcfe;
      }
      .primary-text {
        color: #0d21a1;
        font-weight: 700;
      }
      .muted {
        color: #737373;
      }
      .status {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 4px 8px;
        border-radius: 5px;
        font-size: 10px;
        font-weight: 750;
        white-space: nowrap;
      }
      .status:before {
        content: "";
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: currentColor;
      }
      .s-approved,
      .s-paid,
      .s-posted,
      .s-active {
        background: #eaf7f0;
        color: #16805d;
      }
      .s-pending,
      .s-draft,
      .s-partial {
        background: #fdf5dc;
        color: #92721a;
      }
      .s-rejected,
      .s-overdue,
      .s-inactive {
        background: #fff0ef;
        color: #b54740;
      }
      .s-neutral {
        background: #f1f2f5;
        color: #525252;
      }
      .row-actions {
        display: flex;
        gap: 6px;
      }
      .text-action {
        border: 0;
        background: transparent;
        color: #0d21a1;
        font-size: 11px;
        font-weight: 750;
        padding: 4px;
      }
      .text-action:hover {
        text-decoration: underline;
      }
      .section-row {
        display: flex;
        gap: 16px;
        margin-bottom: 18px;
      }
      .section-row > .panel {
  flex: 1;
        min-width: 0;
      }
      .filterbar {
        display: flex;
        align-items: center;
        gap: 9px;
        flex-wrap: wrap;
        padding: 14px 18px;
        border-bottom: 1px solid #f0f1f5;
      }
      .filter-input,
      .field input,
      .field select,
      .field textarea {
        border: 1px solid #dedfe6;
        border-radius: 7px;
        padding: 9px 11px;
        background: white;
        color: #404040;
        outline: none;
        font-size: 12px;
        width: 100%;
      }
      .filter-input {
        width: 220px;
      }
      .field input:focus,
      .field select:focus,
      .field textarea:focus,
      .filter-input:focus {
        border-color: #5d6ac0;
        box-shadow: 0 0 0 3px #e7e9f6;
      }
      .field label {
        display: block;
        font-size: 11px;
        font-weight: 700;
        color: #525252;
        margin-bottom: 6px;
      }
      .field {
        margin-bottom: 14px;
      }
      .field textarea {
        min-height: 85px;
        resize: vertical;
      }
      .field-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 13px;
      }
      .field.full {
        grid-column: 1/-1;
      }
      .empty-state {
        text-align: center;
        padding: 35px;
        color: #737373;
      }
      .empty-state strong {
        display: block;
        color: #404040;
        margin-bottom: 5px;
      }
      .notice {
        padding: 12px 14px;
        background: #f5f6fb;
        border: 1px solid #e7e9f6;
        border-radius: 8px;
        color: #525252;
        font-size: 11px;
        line-height: 1.6;
      }
      .notice b {
        color: #0d21a1;
      }
      .modal-backdrop {
        position: fixed;
        inset: 0;
        background: rgba(12, 18, 46, 0.42);
        z-index: 60;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
      }
      .modal-backdrop.open {
        display: flex;
      }
      .modal {
        background: #fff;
        width: min(600px, 100%);
        max-height: 90vh;
        overflow: auto;
        border-radius: 14px;
        box-shadow: 0 24px 80px rgba(0, 0, 0, 0.2);
      }
      .modal-head {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding: 21px 23px;
        border-bottom: 1px solid #eee;
      }
      .modal-title {
        font-size: 17px;
        font-weight: 780;
      }
      .modal-desc {
        font-size: 11px;
        color: #737373;
        margin-top: 5px;
      }
      .modal-body {
        padding: 22px 23px;
      }
      .modal-foot {
        padding: 15px 23px;
        border-top: 1px solid #eee;
        display: flex;
        justify-content: flex-end;
        gap: 8px;
      }
      .close {
        border: 0;
        background: #f5f5f5;
        border-radius: 7px;
        width: 30px;
        height: 30px;
        color: #525252;
      }
      .mini-bars {
        height: 150px;
        display: flex;
        align-items: flex-end;
        gap: 14px;
        padding: 12px 4px 0;
        border-bottom: 1px solid #eee;
      }
      .bar-col {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 7px;
        height: 100%;
        justify-content: flex-end;
      }
      .bar {
        width: 65%;
        max-width: 32px;
        border-radius: 5px 5px 0 0;
        background: #b4bae2;
        min-height: 8px;
      }
      .bar.current {
        background: #0d21a1;
      }
      .bar-label {
        font-size: 10px;
        color: #737373;
        margin-bottom: 9px;
      }
      .activity {
        display: flex;
        gap: 11px;
        padding: 11px 0;
        border-bottom: 1px solid #f0f1f5;
      }
      .activity:last-child {
        border: 0;
      }
      .activity-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #0d21a1;
        margin-top: 5px;
        flex-shrink: 0;
      }
      .activity-title {
        font-size: 11px;
        color: #404040;
        font-weight: 650;
      }
      .activity-time {
        font-size: 10px;
        color: #a1a1a1;
        margin-top: 3px;
      }
      .quick-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 10px;
      }
      .quick {
        border: 1px solid #e8eaf0;
        border-radius: 9px;
        padding: 14px;
        background: #fff;
        text-align: left;
      }
      .quick:hover {
        border-color: #b4bae2;
        background: #fafaff;
      }
      .quick-icon {
        font-size: 18px;
        color: #0d21a1;
        margin-bottom: 8px;
      }
      .quick b {
        font-size: 11px;
        display: block;
      }
      .quick span {
        font-size: 10px;
        color: #737373;
      }
      .cms-layout {
        display: grid;
        grid-template-columns: 200px minmax(0, 1fr);
        gap: 16px;
      }
      .cms-tabs {
        padding: 9px;
      }
      .cms-tab {
        width: 100%;
        text-align: left;
        border: 0;
        background: transparent;
        border-radius: 7px;
        padding: 10px;
        color: #525252;
        font-size: 12px;
        margin: 2px 0;
      }
      .cms-tab.active {
        background: #e7e9f6;
        color: #0d21a1;
        font-weight: 750;
      }
      .switch {
        width: 34px;
        height: 19px;
        background: #d4d4d4;
        border-radius: 20px;
        position: relative;
        display: inline-block;
        vertical-align: middle;
      }
      .switch:after {
        content: "";
        position: absolute;
        width: 13px;
        height: 13px;
        top: 3px;
        left: 3px;
        background: white;
        border-radius: 50%;
        transition: 0.15s;
      }
      .switch.on {
        background: #0d21a1;
      }
      .switch.on:after {
        left: 18px;
      }
      .toast {
        position: fixed;
        right: 25px;
        bottom: 25px;
        background: #171717;
        color: #fff;
        padding: 12px 16px;
        border-radius: 9px;
        box-shadow: 0 8px 28px #0002;
        font-size: 12px;
        z-index: 100;
        opacity: 0;
        transform: translateY(8px);
        transition: 0.2s;
        pointer-events: none;
      }
      .toast.show {
        opacity: 1;
        transform: translateY(0);
      }
      .mobile-menu {
        display: none;
      }
      .subtle-link {
        font-size: 11px;
        color: #0d21a1;
        font-weight: 700;
        text-decoration: none;
      }
      .subtle-link:hover {
        text-decoration: underline;
      }
      .page-view {
        display: none;
      }
      .page-view.active {
        display: block;
      }
      .footer-note {
        font-size: 10px;
        color: #a1a1a1;
        margin-top: 20px;
      }
      .divider {
        height: 1px;
        background: #f0f1f5;
        margin: 16px 0;
      }
      @media (max-width: 1050px) {
        .sidebar {
          width: 215px;
        }
        .main {
          margin-left: 215px;
          width: calc(100% - 215px);
        }
        .stats {
          grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .dashboard-grid,
        .bottom-grid {
          grid-template-columns: 1fr;
        }
        .content {
          padding: 22px;
        }
        .topbar {
          padding: 0 22px;
        }
        .searchbox {
          width: 180px;
        }
      }
      @media (max-width: 720px) {
        .sidebar {
          transform: translateX(-100%);
          transition: 0.2s;
          box-shadow: 0 0 0 100vmax transparent;
        }
        .sidebar.open {
          transform: translateX(0);
          box-shadow: 0 0 0 100vmax #0005;
        }
        .main {
          margin-left: 0;
          width: 100%;
        }
        .topbar {
          padding: 0 15px;
          height: 60px;
        }
        .content {
          padding: 20px 14px;
        }
        .searchbox {
          display: none;
        }
        .page-head {
          flex-direction: column;
        }
        .stats {
          gap: 10px;
        }
        .stat-card {
          padding: 14px;
          min-height: 115px;
        }
        .stat-value {
          font-size: 22px;
        }
        .field-grid,
        .cms-layout {
          grid-template-columns: 1fr;
        }
        .cms-tabs {
          display: flex;
          overflow: auto;
        }
        .cms-tab {
          white-space: nowrap;
          width: auto;
        }
        .quick-grid {
          grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .role-select {
          max-width: 145px;
        }
        .mobile-menu {
          display: inline-flex;
        }
        .crumb {
          display: none;
        }
        .top-actions {
          gap: 7px;
        }
      }

      /* ===== v2 ===== */
      body {
        font-family:
          "Plus Jakarta Sans", Inter, ui-sans-serif, system-ui, sans-serif;
      }
      .ic {
        width: 18px;
        height: 18px;
        fill: none;
        stroke: currentColor;
        stroke-width: 1.7;
        stroke-linecap: round;
        stroke-linejoin: round;
        flex-shrink: 0;
      }
      .ic.big {
        width: 26px;
        height: 26px;
      }
      .btn .ic {
        width: 16px;
        height: 16px;
      }
      .nav-icon {
        width: 20px;
        height: 20px;
        display: grid;
        place-items: center;
      }
      .nav-icon .ic {
        width: 19px;
        height: 19px;
      }
      .stat-icon .ic {
        width: 17px;
        height: 17px;
      }
      .quick-icon .ic {
        width: 21px;
        height: 21px;
      }
      .icon-btn {
        display: grid;
        place-items: center;
      }
      .searchbox span {
        top: 10px;
        display: grid;
      }
      .searchbox .ic {
        width: 16px;
        height: 16px;
      }
      .eyebrow,
      .nav-label,
      th,
      .brand-sub {
        text-transform: none !important;
      }
      .eyebrow {
        letter-spacing: 0;
        font-size: 12px;
        font-weight: 700;
      }
      .nav-label {
        letter-spacing: 0.2px;
        font-size: 11px;
        font-weight: 700;
      }
      .brand-sub {
        letter-spacing: 0;
        font-size: 11px;
      }
      th {
        letter-spacing: 0;
        font-size: 11px;
      }
      .nav-item {
        position: relative;
      }
      .nav-item.active:before {
        content: "";
        position: absolute;
        left: -12px;
        top: 9px;
        bottom: 9px;
        width: 3px;
        border-radius: 0 3px 3px 0;
        background: #eec643;
      }
      :focus-visible {
        outline: 2px solid #5d6ac0;
        outline-offset: 2px;
      }
      .modal {
        animation: pop 0.18s ease;
      }
      @keyframes pop {
        from {
          opacity: 0;
          transform: translateY(8px) scale(0.985);
        }
      }
      @media (prefers-reduced-motion: reduce) {
        .modal {
          animation: none;
        }
      }
      .modal.wide {
        width: min(880px, 100%);
      }
      .btn-danger {
        background: #b54740;
        color: #fff;
      }
      .btn-danger:hover {
        background: #9a3a34;
      }
      .icon-act {
        width: 30px;
        height: 30px;
        border: 0;
        background: transparent;
        border-radius: 7px;
        color: #737373;
        display: inline-grid;
        place-items: center;
      }
      .icon-act:hover {
        background: #e7e9f6;
        color: #0d21a1;
      }
      .icon-act.danger:hover {
        background: #fff0ef;
        color: #b54740;
      }
      .field.invalid input,
      .field.invalid select,
      .field.invalid textarea {
        border-color: #b54740;
        box-shadow: 0 0 0 3px #fff0ef;
      }
      .err {
        color: #b54740;
        font-size: 11px;
        margin-top: 5px;
      }
      .err:empty {
        display: none;
      }
      .rq {
        color: #b54740;
        font-style: normal;
      }
      .check {
        display: flex;
        gap: 10px;
        align-items: flex-start;
        padding: 11px 12px;
        border: 1px solid #e5e7ee;
        border-radius: 9px;
        margin-bottom: 14px;
        cursor: pointer;
      }
      .check.full {
        grid-column: 1/-1;
      }
      .check input {
        margin-top: 3px;
        accent-color: #0d21a1;
      }
      .check b {
        display: block;
        font-size: 12px;
      }
      .check small {
        color: #737373;
        font-size: 11px;
      }
      .seg {
        display: flex;
        gap: 4px;
        overflow: auto;
        padding: 4px;
        background: #eceef5;
        border-radius: 11px;
        width: fit-content;
        max-width: 100%;
      }
      .seg button {
        border: 0;
        background: transparent;
        padding: 8px 13px;
        border-radius: 8px;
        font-weight: 650;
        font-size: 12px;
        color: #525252;
        display: flex;
        gap: 7px;
        align-items: center;
        white-space: nowrap;
      }
      .seg button.active {
        background: #fff;
        color: #0d21a1;
        box-shadow: 0 1px 3px #0002;
      }
      .seg .cnt {
        font-size: 10px;
        background: #e7e9f6;
        color: #0d21a1;
        border-radius: 10px;
        padding: 1px 7px;
      }
      .dim td {
        opacity: 0.55;
      }
      .cell-sub {
        font-size: 10px;
        color: #737373;
        margin-top: 3px;
      }
      .sect-title {
        font-size: 12px;
        font-weight: 750;
        margin: 8px 0 10px;
        color: #262626;
      }
      .adder {
        display: grid;
        grid-template-columns: minmax(0, 2.4fr) 76px 140px 84px auto;
        gap: 10px;
        align-items: end;
        padding: 14px;
        background: #f7f8fc;
        border: 1px dashed #b4bae2;
        border-radius: 11px;
      }
      .adder .field {
        margin: 0;
      }
      .adder .btn {
        height: 36px;
      }
      .q-table {
        margin-top: 12px;
        border: 1px solid #eceef4;
        border-radius: 10px;
      }
      .cell-in {
        width: 68px;
        border: 1px solid #dedfe6;
        border-radius: 6px;
        padding: 6px 8px;
        font-size: 12px;
      }
      .q-empty {
        display: grid;
        place-items: center;
        gap: 4px;
        text-align: center;
        padding: 24px;
        margin-top: 12px;
        border: 1px dashed #d4d7e3;
        border-radius: 10px;
        color: #737373;
        font-size: 12px;
      }
      .q-empty b {
        color: #404040;
      }
      .q-foot {
        display: grid;
        grid-template-columns: 1fr 280px;
        gap: 18px;
        margin-top: 16px;
        align-items: start;
      }
      .totals {
        background: #f7f8fc;
        border-radius: 10px;
        padding: 14px;
      }
      .trow {
        display: flex;
        justify-content: space-between;
        padding: 6px 0;
        font-size: 12px;
        color: #525252;
      }
      .trow.total {
        border-top: 1px solid #dfe2ee;
        margin-top: 6px;
        padding-top: 12px;
        font-size: 13px;
        color: #171717;
      }
      .trow.total b {
        color: #0d21a1;
        font-size: 17px;
      }
      .cms-layout {
        grid-template-columns: 230px minmax(0, 1fr);
        align-items: start;
      }
      .cms-tabs {
        padding: 9px;
        display: flex;
        flex-direction: column;
      }
      .cms-tab {
        display: flex;
        align-items: center;
        gap: 10px;
      }
      .cms-tab .sdot {
        margin-left: auto;
        width: 7px;
        height: 7px;
        border-radius: 50%;
      }
      .sdot.ok {
        background: #16805d;
      }
      .sdot.dr {
        background: #eec643;
      }
      .cms-tab .ic {
        width: 17px;
        height: 17px;
      }
      .panel-foot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        padding: 14px 19px;
        border-top: 1px solid #f0f1f5;
        background: #fafafa;
        flex-wrap: wrap;
      }
      .panel-foot > div {
        display: flex;
        gap: 8px;
      }
      .dropzone {
        border: 1.5px dashed #b4bae2;
        border-radius: 12px;
        background: #fafaff;
        display: grid;
        place-items: center;
        text-align: center;
        min-height: 150px;
        cursor: pointer;
        color: #737373;
        position: relative;
        overflow: hidden;
        font-weight: 400;
        margin: 0;
      }
      .dropzone:hover {
        border-color: #0d21a1;
        background: #f3f4fc;
      }
      .dropzone img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .dropzone.contain img {
        object-fit: contain;
        padding: 18px;
        background: #fff;
      }
      .dz-in {
        display: grid;
        gap: 3px;
        justify-items: center;
        padding: 14px;
        position: relative;
      }
      .dz-in b {
        color: #404040;
        font-size: 12px;
      }
      .dz-in small {
        font-size: 10px;
      }
      .dropzone.has .dz-in {
        opacity: 0;
        position: absolute;
        inset: 0;
        align-content: center;
        background: rgba(5, 14, 68, 0.62);
        color: #fff;
        transition: 0.15s;
      }
      .dropzone.has .dz-in b {
        color: #fff;
      }
      .dropzone.has:hover .dz-in,
      .dropzone.has:focus-within .dz-in {
        opacity: 1;
      }
      .list-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
      }
      .list-head label {
        margin: 0;
      }
      .lblock {
        margin-top: 6px;
      }
      .litem {
        display: flex;
        gap: 14px;
        align-items: flex-start;
        padding: 14px 0;
        border-top: 1px solid #f0f1f5;
      }
      .lthumb {
        width: 150px;
        flex-shrink: 0;
      }
      .lthumb .dropzone {
        min-height: 104px;
      }
      .lfields {
        flex: 1;
        min-width: 0;
      }
      .lfields.two {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0 12px;
      }
      .lctl {
        display: flex;
        flex-direction: column;
      }
      .lfields .field {
        margin-bottom: 10px;
      }
      .partner-strip {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 24px 46px;
        padding: 28px 20px;
        background: linear-gradient(#fff, #f6f7fb);
        border-radius: 12px;
      }
      .partner-strip img {
        height: 30px;
        width: auto;
        filter: grayscale(1);
        opacity: 0.6;
        transition: 0.2s;
      }
      .partner-strip img:hover {
        filter: none;
        opacity: 1;
      }
      .prow {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 12px 0;
        border-bottom: 1px solid #f0f1f5;
      }
      .prow:last-child {
        border: 0;
      }
      .prow .plogo {
        width: 120px;
        height: 30px;
        object-fit: contain;
        object-position: left;
      }
      .prow .pinfo {
        flex: 1;
        min-width: 0;
      }
      .prow .pinfo b {
        font-size: 12px;
      }
      .prow.off .plogo {
        opacity: 0.35;
        filter: grayscale(1);
      }
      .mgrid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
        gap: 18px 16px;
      }
      .mitem img {
        width: 100%;
        aspect-ratio: 4/3;
        object-fit: cover;
        border-radius: 10px;
        background: #f1f2f7;
        display: block;
      }
      .mitem img.logo {
        object-fit: contain;
        padding: 16px;
        background: #fff;
        border: 1px solid #eceef4;
      }
      .mitem b {
        display: block;
        font-size: 11px;
        margin-top: 7px;
      }
      .mitem span {
        font-size: 10px;
        color: #737373;
      }
      .pv {
        font-size: 13px;
        color: #404040;
      }
      .pv section {
        padding: 22px 4px;
      }
      .pv h3 {
        font-size: 19px;
        margin: 0 0 10px;
        color: #171717;
        letter-spacing: -0.4px;
      }
      .pv-hero {
        min-height: 240px;
        border-radius: 14px;
        background-size: cover;
        background-position: center;
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 34px !important;
      }
      .pv-hero h2 {
        font-size: 28px;
        line-height: 1.15;
        max-width: 420px;
        margin: 0 0 10px;
        letter-spacing: -0.8px;
      }
      .pv-hero p {
        max-width: 400px;
        margin: 0 0 18px;
        opacity: 0.9;
        line-height: 1.6;
      }
      .pv-cta {
        background: #eec643;
        color: #262626;
        font-weight: 700;
        padding: 10px 16px;
        border-radius: 8px;
        width: fit-content;
        font-size: 12px;
      }
      .pv-stats {
        display: flex;
        gap: 30px;
        padding: 18px 6px;
        flex-wrap: wrap;
      }
      .pv-stats b {
        display: block;
        font-size: 24px;
        color: #0d21a1;
        letter-spacing: -0.6px;
      }
      .pv-stats span {
        font-size: 11px;
        color: #737373;
      }
      .pv-about {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 22px;
        align-items: center;
      }
      .pv-about img,
      .pv-cards img {
        width: 100%;
        border-radius: 12px;
        aspect-ratio: 4/3;
        object-fit: cover;
      }
      .pv p {
        line-height: 1.7;
        margin: 0;
        white-space: pre-wrap;
      }
      .pv-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
        gap: 18px;
      }
      .pv-cards b {
        display: block;
        margin: 9px 0 3px;
        color: #171717;
      }
      .pv-cards p {
        font-size: 12px;
      }
      .pv-quote {
        border-left: 3px solid #eec643;
        padding: 4px 0 4px 16px;
        font-size: 15px;
        color: #262626;
        line-height: 1.6;
      }
      .pv-quote small {
        display: block;
        margin-top: 8px;
        font-size: 11px;
        color: #737373;
      }
      .pv-contact {
        background: #f6f7fb;
        border-radius: 14px;
        padding: 22px !important;
        display: grid;
        gap: 6px;
        font-size: 12px;
      }
      @media (max-width: 900px) {
        .q-foot {
          grid-template-columns: 1fr;
        }
        .pv-about {
          grid-template-columns: 1fr;
        }
      }
      @media (max-width: 720px) {
        .adder {
          grid-template-columns: 1fr 1fr;
        }
        .adder .field:first-child {
          grid-column: 1/-1;
        }
        .adder .btn {
          grid-column: 1/-1;
        }
        .cms-tabs {
          flex-direction: row;
        }
        .cms-tab .sdot {
          margin-left: 6px;
        }
        .litem {
          flex-wrap: wrap;
        }
        .lthumb {
          width: 100%;
        }
        .lfields.two {
          grid-template-columns: 1fr;
        }
        .prow {
          flex-wrap: wrap;
        }
        .prow .plogo {
          width: 100px;
        }
      }
      .pv-chips {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
      }
      .pv-chips span {
        border: 1px solid #e0e0e0;
        border-radius: 999px;
        padding: 6px 14px;
        font-size: 12px;
        font-weight: 600;
        color: #0d21a1;
        background: #fff;
      }
      .pv-steps {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 12px;
      }
      .pv-steps div {
        border: 1px solid #eceef4;
        border-radius: 12px;
        padding: 14px;
        font-size: 12px;
        color: #525252;
      }
      .pv-steps b {
        display: block;
        color: #0d21a1;
        margin-bottom: 4px;
        font-size: 13px;
      }
      .pv-tag {
        display: inline-block;
        background: #eec643;
        font-size: 10px;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: 999px;
        margin-top: 8px;
        color: #141414;
      }
      .pv-card2 {
        border: 1px solid #eceef4;
        border-radius: 12px;
        padding: 16px;
      }
      .pv-card2 img {
        width: 100%;
        border-radius: 8px;
        aspect-ratio: 16/9;
        object-fit: cover;
      }

      .table-pagination{display:flex;align-items:center;justify-content:flex-end;gap:10px;flex-wrap:wrap;padding:11px 16px;border-top:1px solid #f0f1f5;font-size:11px;color:#737373;background:#fff}
      .table-pagination select{border:1px solid #dedfe6;border-radius:6px;padding:5px 8px;background:#fff;color:#404040;font:inherit}
      .table-pagination button{border:1px solid #dedfe6;border-radius:6px;padding:5px 9px;background:#fff;color:#404040;font:inherit}
      .table-pagination button:disabled{opacity:.4;cursor:not-allowed}
      .export-tools{display:flex;justify-content:flex-end;gap:7px;flex-wrap:wrap;padding:10px 16px 0}
      .export-tools .btn{padding:7px 10px;font-size:10px}
      .table-page-hidden{display:none!important}
      .dropzone{overflow:hidden}
      .dropzone img{object-fit:contain!important;background:#fafafa}
      .img-ratio-hint{font-size:10px;color:#737373;margin-top:4px}
      @media print{.sidebar,.topbar,.page-head button,.filterbar,.export-tools,.table-pagination,.row-actions,.text-action,.icon-act,.btn,.toast{display:none!important}.main{margin:0!important;width:100%!important}.content{padding:0!important}.page-view{display:none!important}.page-view.active{display:block!important}.panel,.stat-card{box-shadow:none;break-inside:avoid}.table-wrap{overflow:visible!important}.table-page-hidden{display:table-row!important}table{white-space:normal!important}th,td{font-size:9pt!important;padding:5px!important}}
    </style>
  </head>
  <body>
<svg width="0" height="0" style="position: absolute" aria-hidden="true">
      <defs>
        <symbol id="i-dashboard" viewBox="0 0 24 24">
          <rect
            x="3"
            y="3"
            width="8"
            height="10"
            rx="2.5"
            fill="currentColor"
            fill-opacity=".14"
          />
          <rect x="13" y="3" width="8" height="6" rx="2.5" />
          <rect
            x="13"
            y="11"
            width="8"
            height="10"
            rx="2.5"
            fill="currentColor"
            fill-opacity=".14"
          />
          <rect x="3" y="15" width="8" height="6" rx="2.5" />
        </symbol>
        <symbol id="i-quotation" viewBox="0 0 24 24">
          <path
            d="M6 3h8l5 5v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="M14 3v5h5M8 13h8M8 17h5" />
        </symbol>
        <symbol id="i-order" viewBox="0 0 24 24">
          <rect
            x="5"
            y="4.5"
            width="14"
            height="16.5"
            rx="3"
            fill="currentColor"
            fill-opacity=".14"
          />
          <rect x="8.5" y="2.5" width="7" height="4" rx="1.5" fill="#fff" />
          <path d="m9 14 2 2 4-4" />
        </symbol>
        <symbol id="i-invoice" viewBox="0 0 24 24">
          <path
            d="M6 3h12v18l-3-2-3 2-3-2-3 2z"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="M9 8h6M9 12h6" />
        </symbol>
        <symbol id="i-payment" viewBox="0 0 24 24">
          <rect
            x="3"
            y="5"
            width="18"
            height="14"
            rx="3"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="M3 10h18M7 15h3" />
        </symbol>
        <symbol id="i-swap" viewBox="0 0 24 24">
          <path d="M7 8h12l-3-3M17 16H5l3 3" />
        </symbol>
        <symbol id="i-inventory" viewBox="0 0 24 24">
          <path
            d="M3.5 7.5 12 3l8.5 4.5v9L12 21l-8.5-4.5z"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="m3.5 7.5 8.5 4.5 8.5-4.5M12 12v9" />
        </symbol>
        <symbol id="i-database" viewBox="0 0 24 24">
          <ellipse
            cx="12"
            cy="6"
            rx="8"
            ry="3"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path
            d="M4 6v6c0 1.7 3.6 3 8 3s8-1.3 8-3V6M4 12v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6"
          />
        </symbol>
        <symbol id="i-users" viewBox="0 0 24 24">
          <circle
            cx="9"
            cy="8"
            r="3.5"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path
            d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6M16 4.6a3.5 3.5 0 0 1 0 6.8M18 14.4c2 .7 3.5 2.6 3.5 5.6"
          />
        </symbol>
        <symbol id="i-user" viewBox="0 0 24 24">
          <circle cx="12" cy="8" r="4" fill="currentColor" fill-opacity=".14" />
          <path d="M4.5 20c0-4 3.4-6.5 7.5-6.5s7.5 2.5 7.5 6.5" />
        </symbol>
        <symbol id="i-cms" viewBox="0 0 24 24">
          <rect
            x="3"
            y="4"
            width="18"
            height="16"
            rx="3"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="M3 9h18" />
          <circle cx="8" cy="14.5" r="1.5" />
          <path d="m11 18 3-3.5 3 3.5" />
        </symbol>
        <symbol id="i-audit" viewBox="0 0 24 24">
          <path
            d="M12 3 4.5 6v5.5c0 4.4 3 8 7.5 9.5 4.5-1.5 7.5-5.1 7.5-9.5V6z"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="m9 12 2.2 2.2L15.5 10" />
        </symbol>
        <symbol id="i-search" viewBox="0 0 24 24">
          <circle cx="11" cy="11" r="6.5" />
          <path d="m16 16 4.5 4.5" />
        </symbol>
        <symbol id="i-bell" viewBox="0 0 24 24">
          <path
            d="M6 16v-5a6 6 0 0 1 12 0v5l1.5 2h-15z"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="M10 21h4" />
        </symbol>
        <symbol id="i-help" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="9" />
          <path d="M9.5 9.5a2.5 2.5 0 1 1 3.5 2.3c-.7.3-1 .9-1 1.7M12 17h.01" />
        </symbol>
        <symbol id="i-menu" viewBox="0 0 24 24">
          <path d="M4 7h16M4 12h10M4 17h16" />
        </symbol>
        <symbol id="i-plus" viewBox="0 0 24 24">
          <path d="M12 5v14M5 12h14" />
        </symbol>
        <symbol id="i-download" viewBox="0 0 24 24">
          <path d="M12 4v11m0 0 4-4m-4 4-4-4M5 20h14" />
        </symbol>
        <symbol id="i-upload" viewBox="0 0 24 24">
          <path d="M12 16V5m0 0 4 4m-4-4-4 4M5 20h14" />
        </symbol>
        <symbol id="i-gin" viewBox="0 0 24 24">
          <path d="M4 15v4h16v-4M12 4v11m0 0-4-4m4 4 4-4" />
        </symbol>
        <symbol id="i-gout" viewBox="0 0 24 24">
          <path d="M4 15v4h16v-4M12 15V4m0 0-4 4m4-4 4 4" />
        </symbol>
        <symbol id="i-cashout" viewBox="0 0 24 24">
          <path d="M7 17 17 7M9 7h8v8" />
        </symbol>
        <symbol id="i-trash" viewBox="0 0 24 24">
          <path d="M4 7h16M9 7V4h6v3M6.5 7l1 13h9l1-13M10 11v5M14 11v5" />
        </symbol>
        <symbol id="i-edit" viewBox="0 0 24 24">
          <path
            d="M4 20h4L19 9a2.1 2.1 0 0 0-4-4L4 16z"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="m13.5 6.5 4 4" />
        </symbol>
        <symbol id="i-eye" viewBox="0 0 24 24">
          <path
            d="M2.5 12S6 5.5 12 5.5 21.5 12 21.5 12 18 18.5 12 18.5 2.5 12 2.5 12z"
          />
          <circle
            cx="12"
            cy="12"
            r="2.8"
            fill="currentColor"
            fill-opacity=".14"
          />
        </symbol>
        <symbol id="i-check" viewBox="0 0 24 24">
          <path d="m5 12.5 4.5 4.5L19 7.5" />
        </symbol>
        <symbol id="i-x" viewBox="0 0 24 24">
          <path d="m6 6 12 12M18 6 6 18" />
        </symbol>
        <symbol id="i-chev" viewBox="0 0 24 24">
          <path d="m6 9 6 6 6-6" />
        </symbol>
        <symbol id="i-image" viewBox="0 0 24 24">
          <rect
            x="3"
            y="4"
            width="18"
            height="16"
            rx="3"
            fill="currentColor"
            fill-opacity=".14"
          />
          <circle cx="9" cy="10" r="1.7" />
          <path d="m4 18 5-5 4 4 3-3 4 4" />
        </symbol>
        <symbol id="i-trend" viewBox="0 0 24 24">
          <path d="M3 17 9 11l4 4 8-9" />
          <path d="M15 6h6v6" />
        </symbol>
        <symbol id="i-clock" viewBox="0 0 24 24">
          <circle
            cx="12"
            cy="12"
            r="9"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="M12 7v5l3 2" />
        </symbol>
        <symbol id="i-alert" viewBox="0 0 24 24">
          <path
            d="M12 3.5 21.5 20h-19z"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="M12 10v4.5M12 17.5h.01" />
        </symbol>
        <symbol id="i-globe" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="9" />
          <path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18" />
        </symbol>
        <symbol id="i-mail" viewBox="0 0 24 24">
          <rect
            x="3"
            y="5"
            width="18"
            height="14"
            rx="3"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="m4 8 8 5.5L20 8" />
        </symbol>
        <symbol id="i-building" viewBox="0 0 24 24">
          <path
            d="M3 10 12 4l9 6v10H3z"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="M8 20v-6h8v6" />
        </symbol>
        <symbol id="i-bank" viewBox="0 0 24 24">
          <path
            d="M3 9.5 12 4l9 5.5M5 10v7M9.5 10v7M14.5 10v7M19 10v7M3 20h18"
          />
        </symbol>
        <symbol id="i-tag" viewBox="0 0 24 24">
          <path
            d="M3 12V4h8l10 10-8 8z"
            fill="currentColor"
            fill-opacity=".14"
          />
          <circle cx="7.5" cy="8.5" r="1.3" />
        </symbol>
        <symbol id="i-up" viewBox="0 0 24 24">
          <path d="M12 19V5m-6 6 6-6 6 6" />
        </symbol>
        <symbol id="i-down" viewBox="0 0 24 24">
          <path d="M12 5v14m-6-6 6 6 6-6" />
        </symbol>
        <symbol id="i-handshake" viewBox="0 0 24 24">
          <path
            d="m3 12 4-4 4 2 3-2 4 4v4l-4 4-3-1-2 1-6-5z"
            fill="currentColor"
            fill-opacity=".14"
          />
          <path d="m8 15 2 2M11 14l2 2" />
        </symbol>
        <symbol id="i-power" viewBox="0 0 24 24">
          <path d="M12 3v8M6.5 6.5a8 8 0 1 0 11 0" />
        </symbol>
      </defs>
    </svg>
    <div class="shell">
      @include('layouts.partials.sidebar')
      <main class="main">
        @include('layouts.partials.header')
        <div class="content">
          @yield('content')
        </div>
      </main>
    </div>
<div class="modal-backdrop" id="modal-backdrop">
      <div class="modal" role="dialog" aria-modal="true">
        <div class="modal-head">
          <div>
            <div class="modal-title" id="modal-title">Tambah data</div>
            <div class="modal-desc" id="modal-desc">
              Lengkapi informasi di bawah.
            </div>
          </div>
          <button class="close" id="modal-close">×</button>
        </div>
        <div class="modal-body" id="modal-body"></div>
        <div class="modal-foot" id="modal-foot">
          <button class="btn btn-secondary" id="modal-cancel">Batal</button
          ><button class="btn btn-primary" id="modal-save">Simpan</button>
        </div>
      </div>
    </div>
    <div class="toast" id="toast"></div>
    @stack('scripts')
  </body>
</html>

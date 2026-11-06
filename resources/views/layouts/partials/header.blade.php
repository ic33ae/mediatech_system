<header class="topbar">
          <div style="display: flex; align-items: center; gap: 13px">
            <button
              class="icon-btn mobile-menu"
              id="mobile-menu"
              aria-label="Menu"
            >
              <svg class="ic"><use href="#i-menu" /></svg>
            </button>
            <div class="crumb">
              Meditech System
              <span style="padding: 0 7px; color: #d4d4d4">/</span
              ><strong id="crumb-current">Dashboard</strong>
            </div>
          </div>
          <div class="top-actions">
            <div class="searchbox">
              <span
                ><svg class="ic"><use href="#i-search" /></svg></span
              ><input
                id="global-search"
                placeholder="Cari data, transaksi…"
                aria-label="Cari data"
              />
            </div>
            <button
              class="icon-btn"
              id="notif-btn"
              title="Notifikasi"
              aria-label="Notifikasi"
            >
              <svg class="ic"><use href="#i-bell" /></svg
              ><i class="dot"></i></button
            ><select
              class="role-select"
              id="role-switch"
              aria-label="Simulasikan role"
            >
              <option>Super Admin</option>
              <option>Sales</option>
              <option>Manager</option>
              <option>Warehouse</option>
              <option>Finance</option>
              <option>Finance Manager/Director</option>
              <option>Admin CMS</option>
            </select>
            <div class="avatar" id="top-avatar">AD</div>
          </div>
        </header>

div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold">Dashboard Mahasiswa</h4>
        <p class="text-muted">Hi, <strong id="user-fullname">{{ Auth::user()->name ?? 'Mahasiswa' }}</strong>! 👋</p>
    </div>
    <div class="profile-section">
        <div class="profile-avatar" id="profile-initial">
            {{ strtoupper(substr(Auth::user()->name ?? 'M', 0, 1)) }}
        </div>
        <div class="profile-info">
            <p class="name" id="display-name">{{ Auth::user()->name ?? 'Memuat...' }}</p>
            <p class="nim">Mahasiswa</p>
        </div>
    </div>
</div>



   
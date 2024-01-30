<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <h2>SPK Penyakit Hipertensi</h2>
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            
            <?php if (session('id')): ?>
                <li><span>Hi, <?php echo session('username'); ?></span></li>
                <li class="menu-item"><a href="/logout">Logout</a></li>
            <?php else: ?>
                <li class="menu-item"><a href="/login">Login</a></li>
            <?php endif; ?>

            
            
            <li class="menu-item"><a href="/">Home</a></li>
            <li class="menu-item"><a href="/spk">Konsultasi</a></li>
        </ul>
    </div>
    
</header>

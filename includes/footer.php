</main>

<style>
/* Footer Styles */
.site-footer {
    background-color: #0f172a; /* Slate 900 */
    color: #f8fafc;
    padding-top: 80px;
    position: relative;
    overflow: hidden;
}
.site-footer::before {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 100%; height: 4px;
    background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
}
.site-footer::after {
    content: '';
    position: absolute;
    bottom: -50%; right: -20%; width: 60%; height: 100%;
    background: radial-gradient(circle, rgba(109, 40, 217, 0.15) 0%, transparent 60%);
    z-index: 0;
}
.footer-top {
    padding-bottom: 60px;
    position: relative;
    z-index: 1;
}
.footer-logo {
    margin-bottom: 28px;
    position: relative;
    z-index: 1;
}
.footer-logo .logo-text-z { color: #fff; }
.footer-logo .logo-text-i { color: var(--primary-light); }
.footer-desc {
    color: #A0B3C6;
    margin-bottom: 24px;
    font-size: 15px;
}
.social-icons {
    display: flex;
    gap: 16px;
}
.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.05);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-light);
    transition: var(--transition);
}
.social-icon:hover {
    background-color: var(--primary);
    color: #fff;
    transform: translateY(-3px);
}
.footer-title {
    font-family: var(--font-heading);
    font-size: 20px;
    margin-bottom: 24px;
    color: #fff;
}
.footer-links li {
    margin-bottom: 12px;
}
.footer-links a {
    color: #A0B3C6;
    transition: var(--transition);
}
.footer-links a:hover {
    color: var(--primary-light);
    padding-left: 6px;
}
.footer-contact-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 20px;
    color: #A0B3C6;
}
.footer-contact-icon {
    color: var(--primary-light);
    font-size: 20px;
    margin-top: 2px;
}
.footer-bottom {
    border-top: 1px solid rgba(248, 250, 252, 0.1);
    padding: 24px 0;
    text-align: center;
    color: #94a3b8;
    font-size: 15px;
    position: relative;
    z-index: 1;
}
.footer-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1.5fr;
    gap: 40px;
}

@media (max-width: 1024px) {
    .footer-grid {
        grid-template-columns: 1fr 1fr;
    }
}
@media (max-width: 768px) {
    .footer-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
}
</style>

<footer class="site-footer">
    <div class="container footer-top">
        <div class="footer-grid">
            <!-- Col 1: Brand -->
            <div>
                <a href="<?= BASE_URL ?>" class="logo footer-logo">
                    <div class="logo-icon"></div>
                    <div>
                        <span class="logo-text-z">Zoron</span><span class="logo-text-i">Infosoft</span>
                    </div>
                </a>
                <p class="footer-desc">Your partner for smarter, safer IT. We deliver creative excellence, strategic approaches, and cost-effective solutions for your business.</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/company/zoroninfosoft" target="_blank" class="social-icon" aria-label="LinkedIn">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/zoron_infosoft/" target="_blank" class="social-icon" aria-label="Instagram">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.209-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div>
                <h4 class="footer-title">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="<?= BASE_URL ?>">Home</a></li>
                    <li><a href="<?= BASE_URL ?>about">About Us</a></li>
                    <li><a href="<?= BASE_URL ?>services">Services</a></li>
                    <li><a href="<?= BASE_URL ?>career">Career</a></li>
                    <li><a href="<?= BASE_URL ?>contact">Contact Us</a></li>
                </ul>
            </div>

            <!-- Col 3: Legal -->
            <div>
                <h4 class="footer-title">Legal</h4>
                <ul class="footer-links">
                    <li><a href="<?= BASE_URL ?>privacy-policy">Privacy Policy</a></li>
                    <li><a href="<?= BASE_URL ?>terms-conditions">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact -->
            <div>
                <h4 class="footer-title">Contact</h4>
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">✉️</div>
                    <div>info@zoroninfosoft.com</div>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-contact-icon">📞</div>
                    <div>+91 9358179762</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <p>Copyright &copy; 2026 Zoron Infosoft. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- JS Script -->
<script src="<?= BASE_URL ?>assets/js/main.js"></script>

</body>
</html>

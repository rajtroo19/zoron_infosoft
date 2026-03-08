<?php
// Smart Router Fallback:
// If the server (Nginx, generic Apache, or PHP built-in) routes all 404s to index.php,
// this intercepts the requested extensionless URL and serves the correct PHP file.
$request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($request_path, '/'));
$target_page = end($segments);

if ($target_page !== '' && $target_page !== 'index' && $target_page !== 'index.php') {
    $target_file = __DIR__ . '/' . $target_page . '.php';
    if (file_exists($target_file)) {
        require $target_file;
        exit;
    }
}

$page_title = "Home - Zoron Infosoft";
$page_desc = "Your Partner for Smarter, Safer IT. Experience the Best IT Solutions.";
include 'includes/header.php'; 
?>

<style>
/* Hero Section Specifics */
.hero {
    min-height: 95vh;
    display: flex;
    align-items: center;
    background: radial-gradient(circle at top right, rgba(129, 140, 248, 0.15) 0%, var(--bg-main) 100%);
    position: relative;
    overflow: hidden;
    padding-top: 80px;
}
.hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background-image: 
        radial-gradient(circle at 15% 50%, rgba(79, 70, 229, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 85% 30%, rgba(109, 40, 217, 0.05) 0%, transparent 50%);
    z-index: 0;
    pointer-events: none;
}
.hero-inner {
    display: flex;
    align-items: center;
    position: relative;
    z-index: 1;
    gap: 40px;
}
.hero-content {
    flex: 0 0 60%;
    padding-right: 48px;
}
.hero-visual {
    flex: 0 0 40%;
    position: relative;
    height: 500px;
}
.hero-badge {
    display: inline-flex;
    padding: 8px 20px;
    background: rgba(var(--shadow-color), 0.1);
    color: var(--primary);
    border-radius: 50px;
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 28px;
    border: 1px solid rgba(var(--shadow-color), 0.2);
    letter-spacing: 0.5px;
}
.hero h1 {
    font-size: 72px;
    font-weight: 700;
    line-height: 1.05;
    margin-bottom: 28px;
    color: var(--text-heading);
    letter-spacing: -2px;
}
.hero h1 span {
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.hero h2 {
    font-size: 24px;
    font-weight: 500;
    color: var(--text-body);
    margin-bottom: 24px;
}
.hero p {
    font-size: 18px;
    color: var(--text-light);
    margin-bottom: 40px;
    max-width: 540px;
}
.hero-buttons {
    display: flex;
    gap: 20px;
    margin-bottom: 56px;
}
.trust-badges {
    display: flex;
    gap: 48px;
    border-top: 1px solid var(--border);
    padding-top: 40px;
}
.trust-item strong {
    display: block;
    font-size: 32px;
    color: var(--text-heading);
    font-family: var(--font-heading);
    font-weight: 700;
    margin-bottom: 4px;
}
.trust-item span {
    font-size: 15px;
    color: var(--text-light);
    font-weight: 500;
}

/* Abstract Hero Visual */
.shape-1 {
    position: absolute;
    top: 20px; right: 20px;
    width: 340px; height: 340px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
    box-shadow: var(--shadow-glow);
    animation: float 6s ease-in-out infinite, morph 8s ease-in-out infinite;
    opacity: 0.85;
    filter: blur(2px);
}
.shape-2 {
    position: absolute;
    bottom: 20px; left: -40px;
    width: 240px; height: 240px;
    background: rgba(129, 140, 248, 0.4);
    border-radius: 50%;
    backdrop-filter: var(--glass-blur);
    border: 1px solid rgba(255,255,255,0.6);
    animation: float 5s ease-in-out infinite reverse;
    box-shadow: var(--shadow-md);
}
.shape-3 {
    position: absolute;
    top: 100px; left: -30px;
    width: 120px; height: 120px;
    background: linear-gradient(135deg, #f43f5e 0%, #fb923c 100%); /* Vibrant contrast */
    border-radius: 24px;
    transform: rotate(15deg);
    animation: float 7s ease-in-out infinite 1s;
    box-shadow: 0 10px 30px rgba(244, 63, 94, 0.3);
}
@keyframes morph {
    0% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
    25% { border-radius: 58% 42% 75% 25% / 76% 46% 54% 24%; }
    50% { border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%; }
    75% { border-radius: 38% 62% 28% 72% / 31% 72% 28% 69%; }
    100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
}

/* About Grid */
.about-service-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}
.about-service-tag {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px;
    background: var(--bg-card);
    border: 1px solid var(--border);
    backdrop-filter: var(--glass-blur);
    border-radius: 16px;
    font-weight: 600;
    color: var(--text-heading);
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
}
.about-service-tag:hover {
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    color: #fff;
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
    border-color: transparent;
}
.about-service-tag i {
    width: 36px;
    height: 36px;
    background-color: rgba(var(--shadow-color), 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    transition: var(--transition);
}
.about-service-tag:hover i { background-color: rgba(255,255,255,0.2); color: #fff; }

/* Services Section Additions */
.service-card {
    border-top: 4px solid transparent;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.service-card:hover { 
    border-top-color: var(--primary); 
    transform: translateY(-8px);
}

/* Mission & Values */
.value-card {
    border-left: 4px solid var(--primary);
    padding-left: 24px;
}
.value-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 24px;
}

@media (max-width: 1024px) {
    .hero { min-height: auto; padding-top: 60px; padding-bottom: 60px; }
    .hero-inner { flex-direction: column; }
    .hero-content, .hero-visual { flex: 0 0 100%; padding-right: 0; }
    .hero h1 { font-size: 48px; }
}
@media (max-width: 768px) {
    .hero h1 { font-size: 36px; }
    .hero-buttons { flex-direction: column; }
    .trust-badges { flex-direction: column; gap: 16px; }
}
</style>

<!-- HERO SECTION -->
<section class="hero reveal">
    <div class="container hero-inner">
        <div class="hero-content">
            <div class="hero-badge">#1 IT Solutions Partner</div>
            <h1>Experience the <span>Best IT Solutions</span></h1>
            <h2>Your Partner for Smarter, Safer IT</h2>
            <p>Elevate your business with cutting-edge technology, unparalleled security, and bespoke digital experiences designed to drive absolute success.</p>
            
            <div class="hero-buttons">
                <a href="<?= BASE_URL ?>services" class="btn btn-primary">Explore Services</a>
                <a href="<?= BASE_URL ?>contact" class="btn btn-outline">Contact Us</a>
            </div>
            
            <div class="trust-badges">
                <div class="trust-item">
                    <strong class="counter-value" data-target="50" data-suffix="+">0+</strong>
                    <span>Clients</span>
                </div>
                <div class="trust-item">
                    <strong class="counter-value" data-target="15" data-suffix="+">0+</strong>
                    <span>Services</span>
                </div>
                <div class="trust-item">
                    <strong class="counter-value" data-target="80" data-suffix="+">0+</strong>
                    <span>Projects Delivered</span>
                </div>
            </div>
        </div>
        
        <div class="hero-visual">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="shape-3"></div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="section">
    <div class="container grid-2 reveal">
        <div>
            <h2 class="section-title">About Zoron Infosoft</h2>
            <p class="mb-4">We are a leading IT solutions company dedicated to transforming ideas into remarkable digital realities. By combining innovation with proven strategies, we help businesses navigate the ever-evolving tech landscape.</p>
            <p class="mb-5">Our team consists of passionate developers, designers, and strategists working cohesively to deliver powerful, scalable, and secure applications tailored to your exact needs.</p>
            <a href="<?= BASE_URL ?>about" class="btn btn-primary">Learn More About Us</a>
        </div>
        
        <div class="about-service-grid">
            <div class="about-service-tag"><i>🔒</i> Cybersecurity</div>
            <div class="about-service-tag"><i>☁️</i> Cloud Solutions</div>
            <div class="about-service-tag"><i>💻</i> Software Dev</div>
            <div class="about-service-tag"><i>🎨</i> UI/UX Design</div>
            <div class="about-service-tag"><i>🎞️</i> Animations</div>
            <div class="about-service-tag"><i>📊</i> Data Analytics</div>
            <div class="about-service-tag"><i>⚙️</i> DevOps</div>
            <div class="about-service-tag"><i>📈</i> Digital Marketing</div>
        </div>
    </div>
</section>

<!-- SERVICES OVERVIEW -->
<section class="section section-bg">
    <div class="container">
        <div class="text-center reveal">
            <h2 class="section-title">Our Capabilities</h2>
            <p class="section-subtitle mx-auto">Comprehensive IT services designed to streamline your operations and propel your business forward.</p>
        </div>
        
        <div class="grid-3 reveal">
            <div class="card service-card">
                <div class="card-icon">💻</div>
                <h3 class="mb-2">Software Development</h3>
                <p>Custom web, mobile, and desktop applications built to perform at scale and solve complex challenges.</p>
            </div>
            
            <div class="card service-card">
                <div class="card-icon">🔒</div>
                <h3 class="mb-2">Cyber Security</h3>
                <p>Protecting your critical assets with robust, cutting-edge security architectures and strict compliances.</p>
            </div>
            
            <div class="card service-card">
                <div class="card-icon">☁️</div>
                <h3 class="mb-2">Cloud Solutions</h3>
                <p>Seamless cloud migrations, infrastructure management, and secure hosting with AWD/Azure/Google Cloud.</p>
            </div>
            
            <div class="card service-card">
                <div class="card-icon">⚙️</div>
                <h3 class="mb-2">DevOps</h3>
                <p>Automate your delivery pipeline, improve deployment speed, and enhance application reliability.</p>
            </div>
            
            <div class="card service-card">
                <div class="card-icon">📊</div>
                <h3 class="mb-2">Data Analytics</h3>
                <p>Actionable insights delivered through advanced analytics and business intelligence dashboards.</p>
            </div>
            
            <div class="card service-card">
                <div class="card-icon">🎞️</div>
                <h3 class="mb-2">2D/3D Animations</h3>
                <p>Engaging visual narratives, explainer videos, and interactive animations that capture your brand's essence.</p>
            </div>
            
            <div class="card service-card">
                <div class="card-icon">🎨</div>
                <h3 class="mb-2">Graphic Design</h3>
                <p>Memorable branding, stunning UI/UX, and marketing collateral designed to leave a lasting impact.</p>
            </div>
            
            <div class="card service-card">
                <div class="card-icon">📈</div>
                <h3 class="mb-2">Digital Marketing</h3>
                <p>Data-driven SEO, PPC, and social media strategies to exponentially grow your online presence.</p>
            </div>
            
            <div class="card service-card">
                <div class="card-icon">🤖</div>
                <h3 class="mb-2">AI Solutions</h3>
                <p>Integrate cutting-edge Artificial Intelligence capabilities to automate and optimize workflows.</p>
            </div>
        </div>
    </div>
</section>

<!-- MISSION & CORE VALUES -->
<section class="section">
    <div class="container grid-3 reveal">
        <div class="value-card">
            <h3 class="mb-2">Our Mission</h3>
            <p>To empower global businesses through innovative, secure, and scalable IT solutions that bridge the gap between vision and reality.</p>
        </div>
        
        <div class="value-card">
            <h3 class="mb-2">Our Vision</h3>
            <p>To be the world's most trusted partner in technological advancement, pioneering digital excellence worldwide.</p>
        </div>
        
        <div class="value-card border-none">
            <h3 class="mb-2">Core Values</h3>
            <div class="value-pills">
                <span class="pill">Innovation</span>
                <span class="pill">Integrity</span>
                <span class="pill">Excellence</span>
                <span class="pill">Collaboration</span>
                <span class="pill">Agility</span>
                <span class="pill">Security First</span>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="section">
    <div class="container reveal">
        <div class="cta-banner">
            <div class="cta-inner">
                <h2 class="section-title" style="color:#fff;">Let's Build the Future Together</h2>
                <p class="section-subtitle mx-auto" style="color:rgba(255,255,255,0.8);">Ready to transform your ideas into an outstanding digital reality? Contact our experts today to begin your journey.</p>
                
                <div class="hero-buttons" style="justify-content:center; margin-bottom:0;">
                    <a href="<?= BASE_URL ?>contact" class="btn btn-white">Get in Touch</a>
                    <a href="<?= BASE_URL ?>services" class="btn btn-outline-white">Explore Solutions</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

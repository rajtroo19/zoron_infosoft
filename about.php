<?php 
$page_title = "About Us - Zoron Infosoft";
$page_desc = "Learn about Zoron Infosoft's story, mission, strengths, and why we are the right IT partner for you.";
include 'includes/header.php'; 
?>

<style>
/* Page Banner modernised */
.page-banner {
    background: radial-gradient(circle at top right, rgba(129, 140, 248, 0.15) 0%, var(--bg-main) 100%);
    position: relative;
    overflow: hidden;
    padding: 160px 0 100px;
    text-align: center;
}
.page-banner::before {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background-image: 
        radial-gradient(circle at 15% 50%, rgba(79, 70, 229, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 85% 30%, rgba(109, 40, 217, 0.05) 0%, transparent 50%);
    z-index: 0;
}
.page-banner .container { position: relative; z-index: 1; }

.page-banner h1 {
    font-size: 56px;
    margin-bottom: 24px;
    letter-spacing: -1px;
}
.page-banner h1 span {
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}
.page-banner p {
    color: var(--text-body);
    font-size: 20px;
    max-width: 680px;
    margin: 0 auto;
}

/* Breadcrumb modernised */
.breadcrumb {
    display: inline-flex;
    padding: 8px 24px;
    background: rgba(var(--shadow-color), 0.05);
    border: 1px solid rgba(var(--shadow-color), 0.1);
    border-radius: 50px;
    font-size: 14px;
    color: var(--text-body);
    font-weight: 500;
    margin-bottom: 32px;
}
.breadcrumb a {
    color: var(--primary);
    margin-right: 8px;
}
.breadcrumb a::after {
    content: '>';
    margin-left: 8px;
    color: var(--text-light);
}
.breadcrumb span { color: var(--text-heading); font-weight: 600; }

/* Our Story Details */
.story-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
    align-items: center;
}
.quote-text {
    font-size: 24px;
    font-weight: 500;
    color: var(--primary);
    line-height: 1.5;
    margin-bottom: 32px;
    padding-left: 24px;
    border-left: 4px solid var(--primary);
}

.stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
}
.stat-card {
    background: var(--bg-card);
    padding: 40px 32px;
    border-radius: var(--border-radius);
    text-align: center;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border);
    transition: var(--transition);
    backdrop-filter: var(--glass-blur);
}
.stat-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
    border-color: rgba(var(--shadow-color), 0.2);
}
.stat-card h3 {
    font-size: 48px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 8px;
    font-weight: 700;
}
.stat-card p {
    color: var(--text-body);
    font-weight: 600;
    font-size: 16px;
}

/* Our Strengths Update */
.strength-card { margin-top: 16px; }

/* Checklist Update */
.check-list {
    display: flex;
    flex-direction: column;
    gap: 32px;
}
.check-item {
    display: flex;
    gap: 24px;
    align-items: flex-start;
    padding: 24px;
    background: var(--bg-main);
    border-radius: 20px;
    transition: var(--transition);
    border: 1px solid transparent;
}
.check-item:hover {
    background: #fff;
    box-shadow: var(--shadow-md);
    transform: translateX(5px);
    border-color: var(--border);
}
.check-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    color: #fff;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 24px;
    font-weight: bold;
    box-shadow: 0 5px 15px rgba(var(--shadow-color), 0.3);
}

/* Sets Us Apart */
.icon-circle-card {
    text-align: center;
    padding: 40px 32px;
    background: var(--bg-card);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    border: 1px solid var(--border);
}
.icon-circle-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary);
}
.icon-circle {
    width: 80px;
    height: 80px;
    border-radius: 24px;
    background: rgba(var(--shadow-color), 0.1);
    color: var(--primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    margin: 0 auto 24px;
    transition: var(--transition);
}
.icon-circle-card:hover .icon-circle {
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    color: #fff;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 10px 20px rgba(var(--shadow-color), 0.3);
}

.img-glow {
    border-radius: 24px;
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--border);
    transition: var(--transition);
}
.img-glow:hover {
    transform: scale(1.02);
    box-shadow: var(--shadow-glow);
}

@media (max-width: 1024px) {
    .story-grid { grid-template-columns: 1fr; gap: 40px; }
}
@media (max-width: 768px) {
    .page-banner h1 { font-size: 40px; }
    .stats-grid { grid-template-columns: 1fr; }
}
</style>

<!-- HERO -->
<section class="page-banner reveal">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= BASE_URL ?>">Home</a> <span>About Us</span>
        </div>
        <h1>About <span>Zoron Infosoft</span></h1>
        <p>Pioneering the future of digital solutions through innovation, expertise, and a relentless commitment to excellence.</p>
    </div>
</section>

<!-- OUR STORY -->
<section class="section">
    <div class="container story-grid reveal">
        <div>
            <div class="hero-badge">Our Journey</div>
            <h2 class="section-title">The Story Behind the Code</h2>
            <p class="quote-text">We didn't just want to build another IT company; we set out to build a technology partner that businesses can genuinely rely on.</p>
            <p class="mb-4">Founded on the principles of innovation and integrity, Zoron Infosoft started as a small team of passionate technologists. Over the years, we have grown into a powerhouse of digital transformation, helping businesses of all sizes adapt and thrive in an increasingly digital world.</p>
            <p>Our journey is defined by the success of our clients. By placing their needs at the center of everything we do, we have fostered long-lasting relationships built on trust and delivered measurable results across various industries.</p>
        </div>
        <div class="stats-grid">
            <div class="stat-card">
                <h3 class="counter-value" data-target="5" data-suffix="+">0+</h3>
                <p>Years Experience</p>
            </div>
            <div class="stat-card">
                <h3 class="counter-value" data-target="200" data-suffix="+">0+</h3>
                <p>Projects Delivered</p>
            </div>
            <div class="stat-card">
                <h3 class="counter-value" data-target="50" data-suffix="+">0+</h3>
                <p>Happy Clients</p>
            </div>
            <div class="stat-card">
                <h3 class="counter-value" data-target="10" data-suffix="+">0+</h3>
                <p>Core Services</p>
            </div>
        </div>
    </div>
</section>

<!-- OUR STRENGTHS -->
<section class="section section-bg">
    <div class="container">
        <div class="text-center reveal">
            <div class="hero-badge">Why We Win</div>
            <h2 class="section-title">Our Core Strengths</h2>
            <p class="section-subtitle mx-auto">The foundational pillars that empower us to deliver extraordinary solutions.</p>
        </div>
        <div class="grid-3 reveal">
            <div class="card service-card text-center strength-card">
                <div class="card-icon" style="margin: 0 auto 24px;">💡</div>
                <h3 class="mb-2">Creative Excellence</h3>
                <p>We approach every challenge with fresh perspectives, combining aesthetics and utility to create unparalleled user experiences.</p>
            </div>
            <div class="card service-card text-center strength-card">
                <div class="card-icon" style="margin: 0 auto 24px;">🎯</div>
                <h3 class="mb-2">Strategic Approach</h3>
                <p>Our strategies are meticulously data-driven, ensuring alignment with your core business objectives for maximum ROI.</p>
            </div>
            <div class="card service-card text-center strength-card">
                <div class="card-icon" style="margin: 0 auto 24px;">💰</div>
                <h3 class="mb-2">Cost-Effective Solutions</h3>
                <p>We deliver premium, high-quality deliverables that respect your budget without ever compromising on standard.</p>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section">
    <div class="container grid-2 reveal">
        <div style="padding-right: 24px;">
            <div class="hero-badge">Partner With Us</div>
            <h2 class="section-title">Why Choose Us</h2>
            <p class="mb-5">With countless IT agencies in the market, making the right choice determines the success of your project. Here is why partnering with Zoron Infosoft is your best strategic move.</p>
            <img src="<?= BASE_URL ?>assets/images/about-illustration.png" alt="High Tech 3D Workspace Illustration" class="img-glow">
        </div>
        <div class="check-list">
            <div class="check-item">
                <div class="check-icon">✓</div>
                <div>
                    <h4 class="mb-1" style="font-size: 20px;">Proven Track Record</h4>
                    <p>Over 200+ successful deployments across various domains, cementing our reputation as reliable executioners.</p>
                </div>
            </div>
            <div class="check-item">
                <div class="check-icon">✓</div>
                <div>
                    <h4 class="mb-1" style="font-size: 20px;">Tailored Customization</h4>
                    <p>We do not believe in one-size-fits-all. Every solution is bespoke and tailored specifically to your ecosystem.</p>
                </div>
            </div>
            <div class="check-item">
                <div class="check-icon">✓</div>
                <div>
                    <h4 class="mb-1" style="font-size: 20px;">Top-Tier Security</h4>
                    <p>Security is not an afterthought. It is foundational to absolutely everything we design, develop, and deploy.</p>
                </div>
            </div>
            <div class="check-item">
                <div class="check-icon">✓</div>
                <div>
                    <h4 class="mb-1" style="font-size: 20px;">Agile Methodology</h4>
                    <p>Fast iterative cycles, transparent communication, and extreme adaptability to changing market demands.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT SETS US APART -->
<section class="section section-bg">
    <div class="container">
        <div class="text-center reveal">
            <div class="hero-badge">Our Differentiator</div>
            <h2 class="section-title">What Sets Us Apart</h2>
            <p class="section-subtitle mx-auto">We push boundaries, ignore the status quo, and leverage future-forward tech.</p>
        </div>
        <div class="grid-3 reveal">
            <div class="icon-circle-card">
                <div class="icon-circle">⚡</div>
                <h3 class="mb-2">Speed of Delivery</h3>
                <p>Lightning-fast turnaround times without compromising code quality or security architecture.</p>
            </div>
            <div class="icon-circle-card">
                <div class="icon-circle">🧠</div>
                <h3 class="mb-2">Domain Expertise</h3>
                <p>Deep foundational logic across finance, healthcare, e-commerce, and heavy enterprise sectors.</p>
            </div>
            <div class="icon-circle-card">
                <div class="icon-circle">🤝</div>
                <h3 class="mb-2">Client Centric</h3>
                <p>We operate as a direct extension of your internal technical team, fully aligned with your goals.</p>
            </div>
            <div class="icon-circle-card">
                <div class="icon-circle">🔍</div>
                <h3 class="mb-2">Attention to Detail</h3>
                <p>Micro-interactions, pristine UI pixel alignment, and absolutely zero-defect backend architectures.</p>
            </div>
            <div class="icon-circle-card">
                <div class="icon-circle">🌍</div>
                <h3 class="mb-2">Global Standards</h3>
                <p>Strict structural adherence to ISO, universal GDPR, and global accessibility compliance standards.</p>
            </div>
            <div class="icon-circle-card">
                <div class="icon-circle">🚀</div>
                <h3 class="mb-2">Future Proof</h3>
                <p>Scalable cloud-native systems built deliberately to outlast severe technological obsolescence.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION reusing global styles -->
<section class="section">
    <div class="container reveal">
        <div class="cta-banner">
            <div class="cta-inner">
                <h2 class="section-title" style="color:#fff;">Let's Build the Future Together</h2>
                <p class="section-subtitle mx-auto" style="color:rgba(255,255,255,0.8);">Ready to transform your ideas into an outstanding digital reality? Contact our experts today to begin your journey.</p>
                
                <div class="hero-buttons" style="justify-content:center; align-items:center; flex-wrap:wrap; margin-bottom:0;">
                    <a href="<?= BASE_URL ?>contact" class="btn btn-white">Get in Touch</a>
                    <a href="<?= BASE_URL ?>services" class="btn btn-outline-white">Explore Solutions</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<?php 
$page_title = "Our Services - Zoron Infosoft";
$page_desc = "Discover our expertise. Comprehensive IT services designed to streamline your operations.";
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
.breadcrumb a { color: var(--primary); margin-right: 8px; }
.breadcrumb a::after { content: '>'; margin-left: 8px; color: var(--text-light); }
.breadcrumb span { color: var(--text-heading); font-weight: 600; }

/* Service Pillar */
.pillar-card {
    display: flex;
    gap: 20px;
    align-items: flex-start;
    padding: 32px;
    background: var(--bg-card);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border);
    transition: var(--transition);
}
.pillar-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
    border-color: rgba(var(--shadow-color), 0.2);
}
.pillar-icon {
    width: 56px;
    height: 56px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    color: #fff;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 28px;
    box-shadow: 0 4px 15px rgba(var(--shadow-color), 0.3);
}

/* Specific Services Card */
.service-detailed-card {
    padding-top: 48px; /* Room for gradient bar */
    border-top: 6px solid transparent;
    transition: var(--transition);
    border-radius: var(--border-radius);
}
.service-detailed-card:hover {
    border-image: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%) 1;
    border-top: 6px solid var(--primary); /* Fallback */
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}

@media (max-width: 768px) {
    .page-banner h1 { font-size: 40px; }
}
</style>

<!-- HERO -->
<section class="page-banner reveal">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= BASE_URL ?>">Home</a> <span>Services</span>
        </div>
        <h1>Discover Our <span>Expertise</span></h1>
        <p>Comprehensive, end-to-end technology solutions tailored to modernize your business architecture.</p>
    </div>
</section>

<!-- WHAT WE DELIVER -->
<section class="section">
    <div class="container">
        <div class="text-center reveal mb-5">
            <div class="hero-badge">Business Impact</div>
            <h2 class="section-title">What We Deliver</h2>
            <p class="section-subtitle mx-auto">Tangible results that align technology with your core operational objectives.</p>
        </div>
        
        <div class="grid-3 reveal">
            <div class="pillar-card">
                <div class="pillar-icon">🔄</div>
                <div>
                    <h3 class="mb-1" style="font-size: 22px;">Business Continuity</h3>
                    <p class="text-light">Ensuring your systems remain resilient, minimizing downtime and maximizing output.</p>
                </div>
            </div>
            <div class="pillar-card">
                <div class="pillar-icon">📈</div>
                <div>
                    <h3 class="mb-1" style="font-size: 22px;">Scalable Growth</h3>
                    <p class="text-light">Infrastructures designed to grow effortlessly as your user base expands globally.</p>
                </div>
            </div>
            <div class="pillar-card">
                <div class="pillar-icon">🛡️</div>
                <div>
                    <h3 class="mb-1" style="font-size: 22px;">Risk Mitigation</h3>
                    <p class="text-light">Proactive threat hunting and robust compliance to safeguard enterprise data assets.</p>
                </div>
            </div>
            <div class="pillar-card">
                <div class="pillar-icon">⏱️</div>
                <div>
                    <h3 class="mb-1" style="font-size: 22px;">Time to Market</h3>
                    <p class="text-light">Accelerated development pipelines to get your product into users' hands faster.</p>
                </div>
            </div>
            <div class="pillar-card">
                <div class="pillar-icon">💡</div>
                <div>
                    <h3 class="mb-1" style="font-size: 22px;">Innovation Edge</h3>
                    <p class="text-light">Implementing state-of-the-art AI and Big Data features to outpace competitors.</p>
                </div>
            </div>
            <div class="pillar-card">
                <div class="pillar-icon">🤝</div>
                <div>
                    <h3 class="mb-1" style="font-size: 22px;">User Engagement</h3>
                    <p class="text-light">Crafting frictionless UX/UI journeys that significantly boost retention rates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CORE SERVICES GRID -->
<section class="section section-bg">
    <div class="container">
        <div class="text-center reveal mb-5">
            <div class="hero-badge">Our Solutions</div>
            <h2 class="section-title">Our Core Services</h2>
            <p class="section-subtitle mx-auto">Explore our diverse portfolio of technological capabilities powered by deep industry expertise.</p>
        </div>
        
        <div class="grid-3 reveal">
            <!-- Card 1 -->
            <div class="card service-detailed-card">
                <div class="card-icon">💻</div>
                <h3 class="mb-2">Software Development</h3>
                <p>From complex enterprise ERPs to dynamic progressive web apps. Our full-stack engineering teams utilize React, Node.js, and PHP to deliver robust, scalable software tailored to your specific workflows.</p>
            </div>
            
            <!-- Card 2 -->
            <div class="card service-detailed-card">
                <div class="card-icon">🔒</div>
                <h3 class="mb-2">Cyber Security</h3>
                <p>Comprehensive vulnerability assessments, penetration testing, and zero-trust architecture implementations to protect your infrastructure from modern, sophisticated cyber threats.</p>
            </div>
            
            <!-- Card 3 -->
            <div class="card service-detailed-card">
                <div class="card-icon">☁️</div>
                <h3 class="mb-2">Cloud Solutions</h3>
                <p>Expert cloud migration, serverless architecture design, and hybrid cloud management across AWS, Google Cloud, and Azure. Reduce your TCO while drastically improving uptime.</p>
            </div>
            
            <!-- Card 4 -->
            <div class="card service-detailed-card">
                <div class="card-icon">⚙️</div>
                <h3 class="mb-2">DevOps & CI/CD</h3>
                <p>Streamline your software delivery with automated testing, containerization (Docker/Kubernetes), and continuous integration pipelines to achieve zero-downtime deployments.</p>
            </div>
            
            <!-- Card 5 -->
            <div class="card service-detailed-card">
                <div class="card-icon">📊</div>
                <h3 class="mb-2">Data Analytics</h3>
                <p>Turn raw data into decisive actions. We build robust ETL pipelines, data warehouses, and interactive PowerBI/Tableau dashboards so you can visualize organizational metrics instantly.</p>
            </div>
            
            <!-- Card 6 -->
            <div class="card service-detailed-card">
                <div class="card-icon">🎞️</div>
                <h3 class="mb-2">2D/3D Animations</h3>
                <p>Elevate your brand with captivating motion graphics, 3D product visualizations, and corporate explainer videos that quickly translate complex ideas into engaging visual content.</p>
            </div>
            
            <!-- Card 7 -->
            <div class="card service-detailed-card">
                <div class="card-icon">🎨</div>
                <h3 class="mb-2">UI/UX Graphic Design</h3>
                <p>Research-backed user experience design focusing on accessibility, fluid navigation, and stunning visual hierarchies that intuitively guide your users to logical conversion points.</p>
            </div>
            
            <!-- Card 8 -->
            <div class="card service-detailed-card">
                <div class="card-icon">📈</div>
                <h3 class="mb-2">Digital Marketing</h3>
                <p>Integrated performance marketing campaigns including Technical SEO, strategic SEM, programmatic advertising, and CRO (Conversion Rate Optimization) that deliver quantifiable ROI.</p>
            </div>
            
            <!-- Card 9 -->
            <div class="card service-detailed-card">
                <div class="card-icon">🤖</div>
                <h3 class="mb-2">AI Solutions</h3>
                <p>Empower your operations with custom NLP chatbots, predictive machine learning models, and workflow automation tailored to eliminate redundancies and enhance output.</p>
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

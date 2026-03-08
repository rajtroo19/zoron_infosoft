<?php 
$page_title = "White Label Solutions - Zoron Infosoft";
$page_desc = "Outsource your IT projects to Zoron Infosoft under a B2B White Label partnership. Expand your agency's capacity anonymously.";
include 'includes/header.php'; 
?>

<style>
.page-banner {
    background: linear-gradient(135deg, var(--accent) 0%, var(--primary) 100%);
    color: #fff;
    padding: 100px 0 80px;
    text-align: center;
}
.page-banner h1 { color: #fff; font-size: 48px; margin-bottom: 16px; }
.page-banner p { color: rgba(255,255,255,0.8); font-size: 18px; max-width: 600px; margin: 0 auto; }

/* Benefits Grid */
.wl-card {
    text-align: center;
    padding: 40px 32px;
}
.wl-icon {
    width: 64px; height: 64px;
    background-color: rgba(21,101,192,0.1);
    color: var(--primary);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 32px;
    margin: 0 auto 24px;
}
</style>

<!-- HERO -->
<section class="page-banner reveal">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= BASE_URL ?>">Home</a> &gt; <span>White Label Solutions</span>
        </div>
        <h1>White Label Agency Partnerships</h1>
        <p>Expand your agency's offerings, scale limits, and increase profit margins—entirely under your own brand.</p>
    </div>
</section>

<!-- INTRO -->
<section class="section">
    <div class="container text-center reveal">
        <h2 class="section-title">Your Invisible Tech Backbone</h2>
        <p class="section-subtitle mx-auto" style="max-width: 800px;">
            Are you a marketing agency, design studio, or consultancy turning down complex technical projects due to a lack of in-house resources? Zoron Infosoft's White Label Development services act as an invisible extension of your team. We build it, you brand it, and you take the credit.
        </p>
    </div>
</section>

<!-- BENEFITS -->
<section class="section section-bg">
    <div class="container">
        <div class="text-center reveal mb-5">
            <h2 class="section-title">Why Partner With Us?</h2>
            <p class="section-subtitle mx-auto">Seamless B2B outsourcing designed exclusively for growth-focused agencies.</p>
        </div>
        
        <div class="grid-2 reveal">
            <div class="card wl-card">
                <div class="wl-icon">🤫</div>
                <h3 class="mb-2">Strict NDAs & 100% Anonymity</h3>
                <p>We operate completely behind the scenes under strict Non-Disclosure Agreements. We are your silent partners; the final code belongs strictly to your agency.</p>
            </div>
            
            <div class="card wl-card">
                <div class="wl-icon">📈</div>
                <h3 class="mb-2">Infinite Scalability</h3>
                <p>Take on multiple large-scale projects at once without overhead, recruitment delays, or payroll constraints. Our team scales exactly as your workload does.</p>
            </div>
            
            <div class="card wl-card">
                <div class="wl-icon">💰</div>
                <h3 class="mb-2">Lucrative Profit Margins</h3>
                <p>Our competitive B2B offshore pricing models allow you to mark up the services significantly. Deliver premium enterprise quality while maintaining excellent profitability.</p>
            </div>
            
            <div class="card wl-card">
                <div class="wl-icon">🏆</div>
                <h3 class="mb-2">Uncompromising Quality</h3>
                <p>You get senior-level architects, QA testers, and developers who follow strict global standards, ensuring that what you present to your clients is flawless.</p>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section class="section">
    <div class="container">
        <div class="text-center reveal mb-5">
            <h2 class="section-title">How It Works</h2>
        </div>
        
        <div class="grid-4 reveal" style="text-align: center;">
            <div>
                <div style="font-size: 48px; font-weight: 700; color: var(--border); line-height: 1;">01</div>
                <h4 class="mt-2 mb-1">Consultation</h4>
                <p class="text-light">You share the client's brief and requirements.</p>
            </div>
            <div>
                <div style="font-size: 48px; font-weight: 700; color: var(--border); line-height: 1;">02</div>
                <h4 class="mt-2 mb-1">Estimation</h4>
                <p class="text-light">We provide a fixed B2B quote and timeline.</p>
            </div>
            <div>
                <div style="font-size: 48px; font-weight: 700; color: var(--border); line-height: 1;">03</div>
                <h4 class="mt-2 mb-1">Development</h4>
                <p class="text-light">We build silently. You get regular milestone updates.</p>
            </div>
            <div>
                <div style="font-size: 48px; font-weight: 700; color: var(--border); line-height: 1;">04</div>
                <h4 class="mt-2 mb-1">Delivery</h4>
                <p class="text-light">Code released. You deploy under your branding.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container reveal">
        <div style="background: linear-gradient(135deg, #0D47A1, #1565C0); color: #fff; border-radius: 24px; padding: 60px 48px; text-align: center;">
            <h2 class="section-title" style="color: #fff;">Become a Partner Today</h2>
            <p class="mb-5" style="font-size: 18px; color: rgba(255,255,255,0.8);">Stop turning away lucrative projects. Contact us to discuss our White Label partnership models.</p>
            <a href="<?= BASE_URL ?>contact" class="btn btn-white">Partner with Us</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

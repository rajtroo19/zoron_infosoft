<?php 
$page_title = "Contact Us - Zoron Infosoft";
$page_desc = "Ready to connect? Reach out to Zoron Infosoft to start your next big IT project today.";
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

/* Breadcrumb */
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

/* Contact Specific */
.contact-wrapper {
    display: flex;
    gap: 64px;
    align-items: flex-start;
}
.contact-info {
    flex: 0 0 40%;
}
.contact-form-side {
    flex: 0 0 calc(60% - 64px);
    background: var(--bg-card);
    padding: 56px;
    border-radius: 32px;
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--border);
    position: relative;
    overflow: hidden;
    backdrop-filter: var(--glass-blur);
}
.contact-form-side::before {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 100%; height: 6px;
    background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
}

.contact-card {
    display: flex;
    gap: 24px;
    padding: 32px;
    background: var(--bg-card);
    border-radius: var(--border-radius);
    margin-bottom: 24px;
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border);
    transition: var(--transition);
}
.contact-card:hover {
    transform: translateY(-8px);
    border-color: var(--primary-light);
    box-shadow: var(--shadow-lg);
}
.c-icon {
    width: 56px; height: 56px;
    background: linear-gradient(135deg, rgba(21,101,192,0.1) 0%, rgba(126,87,194,0.1) 100%);
    color: var(--primary);
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    font-size: 28px;
    flex-shrink: 0;
    transition: var(--transition);
}
.contact-card:hover .c-icon {
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    color: #fff;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 10px 20px rgba(var(--shadow-color), 0.3);
}
.c-text h4 { margin-bottom: 8px; color: var(--text-heading); font-size: 20px; }
.c-text p { color: var(--text-body); font-size: 16px; font-weight: 500; }

@media (max-width: 1024px) {
    .contact-wrapper { flex-direction: column; gap: 40px; }
    .contact-form-side { width: 100%; flex: auto; padding: 40px 24px; border-radius: 24px; }
}
@media (max-width: 768px) {
    .page-banner h1 { font-size: 40px; }
}
</style>

<!-- HERO -->
<section class="page-banner reveal">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= BASE_URL ?>">Home</a> <span>Contact Us</span>
        </div>
        <h1>Ready to <span>Connect?</span></h1>
        <p>Whether you have a project in mind or just want to explore possibilities, our expert team is here to help.</p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="section section-bg">
    <div class="container contact-wrapper reveal">
        
        <div class="contact-info">
            <div class="hero-badge">Reach Out</div>
            <h2 class="section-title">Get in Touch</h2>
            <p class="mb-5">We would love to hear from you. Drop us a message, and one of our dedicated tech strategists will get back to you promptly to discuss your exact requirements.</p>
            
            <div class="contact-card">
                <div class="c-icon">✉️</div>
                <div class="c-text">
                    <h4>Email Us</h4>
                    <p>info@zoroninfosoft.com</p>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="c-icon">📞</div>
                <div class="c-text">
                    <h4>Call Us</h4>
                    <p>+91 9358179762</p>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="c-icon">⏱️</div>
                <div class="c-text">
                    <h4>Business Hours</h4>
                    <p>Monday - Friday<br>9:00 AM - 6:00 PM (IST)</p>
                </div>
            </div>
        </div>
        
        <div class="contact-form-side">
            <h3 class="mb-4" style="font-size: 32px;">Send us a Message</h3>
            <div id="contactForm-message"></div>
            
            <form id="contactForm" action="<?= BASE_URL ?>process/contact_form.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">First Name *</label>
                        <input type="text" name="first_name" class="form-control" required placeholder="John">
                        <span class="form-error">This field is required.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name *</label>
                        <input type="text" name="last_name" class="form-control" required placeholder="Doe">
                        <span class="form-error">This field is required.</span>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Email Address *</label>
                        <input type="email" name="email" class="form-control" required placeholder="john@example.com">
                        <span class="form-error">Please enter a valid email.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Mobile Number *</label>
                        <input type="tel" name="phone" class="form-control" required placeholder="+91 0000000000">
                        <span class="form-error">This field is required.</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Enterprise Project Inquiry">
                </div>
                
                <div class="form-group mb-5">
                    <label class="form-label">Message *</label>
                    <textarea name="message" class="form-control" required placeholder="How can we help you transform your business?" style="height: 140px;"></textarea>
                    <span class="form-error">This field is required.</span>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block" style="font-size: 18px; padding: 20px;">Send Message</button>
            </form>
        </div>
        
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<?php 
$page_title = "Career - Zoron Infosoft";
$page_desc = "Join Zoron Infosoft and build your future with us. Explore our internship and full-time opportunities.";
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

/* Internship Grid */
.job-card {
    border-top: 6px solid transparent;
    border-radius: var(--border-radius);
    padding: 40px 32px;
}
.job-card:hover {
    border-image: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%) 1;
    border-top: 6px solid var(--primary); /* Fallback */
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}
.job-card .btn { margin-top: 24px; }
.job-icon {
    width: 56px; height: 56px;
    background: linear-gradient(135deg, rgba(21,101,192,0.1) 0%, rgba(126,87,194,0.1) 100%);
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    font-size: 28px; color: var(--primary);
    margin-bottom: 24px;
    transition: var(--transition);
}
.job-card:hover .job-icon {
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    color: #fff;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 10px 20px rgba(var(--shadow-color), 0.3);
}

/* Life Grid */
.life-card {
    display: flex; gap: 20px; align-items: flex-start;
    padding: 32px;
    background: var(--bg-card);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--border);
    transition: var(--transition);
}
.life-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
    border-color: var(--primary);
}
.life-icon {
    width: 64px; height: 64px;
    background-color: var(--bg-section);
    color: var(--primary);
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; font-size: 32px;
    transition: var(--transition);
}
.life-card:hover .life-icon {
    background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
    color: #fff;
}

/* Application Form */
.application-form-container {
    max-width: 800px;
    margin: 0 auto;
    background: var(--bg-card);
    padding: 64px;
    border-radius: 32px;
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--border);
    position: relative;
    overflow: hidden;
    backdrop-filter: var(--glass-blur);
}
.application-form-container::before {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 100%; height: 6px;
    background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
}

@media (max-width: 768px) {
    .page-banner h1 { font-size: 40px; }
    .application-form-container { padding: 40px 24px; border-radius: 24px; }
}
</style>

<!-- HERO -->
<section class="page-banner reveal">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= BASE_URL ?>">Home</a> <span>Career</span>
        </div>
        <h1>Build Your <span>Future With Us</span></h1>
        <p>Join a team of driven, innovative, and passionate creators. We're looking for talent that pushes boundaries.</p>
    </div>
</section>

<!-- INTRO -->
<section class="section">
    <div class="container text-center reveal">
        <div class="hero-badge">Careers</div>
        <h2 class="section-title">Grow at Zoron</h2>
        <p class="section-subtitle mx-auto">At Zoron Infosoft, we don't just offer jobs, we offer careers. We believe in providing an environment where your ideas can flourish and your potential is realized. Whether you are an industry veteran or an ambitious student, your journey to excellence starts here.</p>
    </div>
</section>

<!-- INTERNSHIP OPPORTUNITIES -->
<section class="section section-bg">
    <div class="container">
        <div class="text-center reveal mb-5">
            <div class="hero-badge">Roles</div>
            <h2 class="section-title">Open Opportunities</h2>
            <p class="section-subtitle mx-auto">Kickstart your career with hands-on experience and real-world projects.</p>
        </div>
        
        <div class="grid-2 reveal">
            <div class="card job-card">
                <div class="job-icon">💻</div>
                <h3 class="mb-2">Full Stack Dev Intern</h3>
                <p class="mb-3 text-light">Gain experience working with PHP, Node.js, and React. Contribute strictly to live enterprise applications.</p>
                <a href="#apply" class="btn btn-outline" onclick="document.getElementById('role').value='Full Stack Dev';">Apply Now</a>
            </div>
            <div class="card job-card">
                <div class="job-icon">📊</div>
                <h3 class="mb-2">Data Analytics Intern</h3>
                <p class="mb-3 text-light">Work alongside our data scientists analyzing complex datasets and building interactive dashboards.</p>
                <a href="#apply" class="btn btn-outline" onclick="document.getElementById('role').value='Data Analytics';">Apply Now</a>
            </div>
            <div class="card job-card">
                <div class="job-icon">📈</div>
                <h3 class="mb-2">Digital Marketing Intern</h3>
                <p class="mb-3 text-light">Learn the strategic ropes of SEO, PPC, and campaign management, directly impacting our clients' growth.</p>
                <a href="#apply" class="btn btn-outline" onclick="document.getElementById('role').value='Digital Marketing';">Apply Now</a>
            </div>
            <div class="card job-card">
                <div class="job-icon">🎨</div>
                <h3 class="mb-2">Graphic Design Intern</h3>
                <p class="mb-3 text-light">Craft visually stunning assets from rapid marketing collaterals to comprehensive UI/UX redesigns.</p>
                <a href="#apply" class="btn btn-outline" onclick="document.getElementById('role').value='Graphic Design';">Apply Now</a>
            </div>
        </div>
    </div>
</section>

<!-- LIFE AT ZORON -->
<section class="section">
    <div class="container">
        <div class="text-center reveal mb-5">
            <div class="hero-badge">Culture</div>
            <h2 class="section-title">Life at Zoron Infosoft</h2>
            <p class="section-subtitle mx-auto">A foundational culture specifically designed to inspire, reward, and elevate you.</p>
        </div>
        
        <div class="grid-3 reveal">
            <div class="life-card">
                <div class="life-icon">🎓</div>
                <div>
                    <h4 class="mb-1" style="font-size: 18px;">Continuous Learning</h4>
                    <p class="text-light">Access to premium courses, certifications, and internal workshops.</p>
                </div>
            </div>
            <div class="life-card">
                <div class="life-icon">⚖️</div>
                <div>
                    <h4 class="mb-1" style="font-size: 18px;">Work-Life Balance</h4>
                    <p class="text-light">Flexible timings and hybrid work opportunities to suit your lifestyle.</p>
                </div>
            </div>
            <div class="life-card">
                <div class="life-icon">🚀</div>
                <div>
                    <h4 class="mb-1" style="font-size: 18px;">Rapid Growth</h4>
                    <p class="text-light">Clear, fast-tracked paths for career progression and leadership roles.</p>
                </div>
            </div>
            <div class="life-card">
                <div class="life-icon">🏥</div>
                <div>
                    <h4 class="mb-1" style="font-size: 18px;">Health & Wellness</h4>
                    <p class="text-light">Comprehensive health coverage for you and your direct dependents.</p>
                </div>
            </div>
            <div class="life-card">
                <div class="life-icon">🎉</div>
                <div>
                    <h4 class="mb-1" style="font-size: 18px;">Vibrant Culture</h4>
                    <p class="text-light">Regular structural team outings, hackathons, and celebration of milestones.</p>
                </div>
            </div>
            <div class="life-card">
                <div class="life-icon">💡</div>
                <div>
                    <h4 class="mb-1" style="font-size: 18px;">Innovation First</h4>
                    <p class="text-light">Dedicated time to deliberately work on experimental projects and new tech stacks.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- APPLICATION FORM -->
<section class="section section-bg" id="apply">
    <div class="container reveal">
        <div class="application-form-container mt-4">
            <div class="text-center mb-5">
                <h2 class="section-title">Submit Your Application</h2>
                <p class="text-light" style="font-size:18px;">Fill out the form below. We closely review every application and typically respond within 48 hours.</p>
            </div>
            
            <div id="careerForm-message"></div>
            
            <form id="careerForm" action="<?= BASE_URL ?>process/career_form.php" method="POST" enctype="multipart/form-data">
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
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Domain / Role *</label>
                        <select name="role" id="role" class="form-control" required style="cursor:pointer;">
                            <option value="">Select a Domain</option>
                            <option value="Full Stack Dev">Full Stack Development</option>
                            <option value="Data Analytics">Data Analytics</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Other">Other</option>
                        </select>
                        <span class="form-error">Please select a domain.</span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Employment Type *</label>
                        <select name="emp_type" class="form-control" required style="cursor:pointer;">
                            <option value="">Select Type</option>
                            <option value="Internship">Internship</option>
                            <option value="Full-Time">Full-Time</option>
                        </select>
                        <span class="form-error">Please select a type.</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Cover Letter / Message *</label>
                    <textarea name="message" class="form-control" required placeholder="Tell us why you are a great fit..." style="height:140px;"></textarea>
                    <span class="form-error">This field is required.</span>
                </div>
                
                <div class="form-group mb-5">
                    <label class="form-label">Upload Resume (PDF/DOC, Max 5MB) *</label>
                    <input type="file" name="resume" class="form-control" accept=".pdf,.doc,.docx" required style="padding: 12px; cursor:pointer;">
                    <span class="form-error">Please upload your resume.</span>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block" style="font-size: 18px; padding: 20px;">Submit Application</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<?php 
$page_title = "Blog - Zoron Infosoft";
$page_desc = "Insights, trends, and tutorials from the experts at Zoron Infosoft.";
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

/* Blog Card */
.blog-card {
    padding: 0;
}
.blog-card .blog-img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    border-radius: var(--border-radius) var(--border-radius) 0 0;
    background-color: var(--bg-section);
}
.blog-card .blog-content {
    padding: 32px;
}
.blog-card .blog-meta {
    font-size: 14px;
    color: var(--text-light);
    margin-bottom: 12px;
    display: flex;
    gap: 16px;
}
.blog-card h3 {
    margin-bottom: 16px;
    font-size: 20px;
}
.blog-card p {
    color: var(--text-body);
    margin-bottom: 24px;
}
</style>

<!-- HERO -->
<section class="page-banner reveal">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= BASE_URL ?>">Home</a> &gt; <span>Our Blog</span>
        </div>
        <h1>Insights & Trends</h1>
        <p>Stay updated with the latest in technology, security, and digital strategies.</p>
    </div>
</section>

<!-- BLOG LISTING -->
<section class="section">
    <div class="container grid-3 reveal">
        <!-- Post 1 -->
        <article class="card blog-card">
            <!-- Simulated Image -->
            <div class="blog-img" style="background: linear-gradient(45deg, #1565C0, #42A5F5); display:flex; align-items:center; justify-content:center; color:#fff; font-size:48px;">1</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <span>📅 Oct 15, 2026</span>
                    <span>🏷️ UI/UX</span>
                </div>
                <h3>The Future of Minimalist UI/UX Design</h3>
                <p>Explore how minimalism continues to dominate digital product design and why less is always going to be more.</p>
                <a href="<?= BASE_URL ?>blog-detail" class="btn btn-outline" style="padding: 8px 20px;">Read More</a>
            </div>
        </article>
        
        <!-- Post 2 -->
        <article class="card blog-card">
            <!-- Simulated Image -->
            <div class="blog-img" style="background: linear-gradient(45deg, #0D47A1, #1565C0); display:flex; align-items:center; justify-content:center; color:#fff; font-size:48px;">2</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <span>📅 Oct 12, 2026</span>
                    <span>🏷️ Cyber Security</span>
                </div>
                <h3>Zero Trust Architecture Explained</h3>
                <p>Why traditional security models are failing and how Zero Trust is revolutionizing enterprise data protection.</p>
                <a href="<?= BASE_URL ?>blog-detail" class="btn btn-outline" style="padding: 8px 20px;">Read More</a>
            </div>
        </article>
        
        <!-- Post 3 -->
        <article class="card blog-card">
            <!-- Simulated Image -->
            <div class="blog-img" style="background: linear-gradient(45deg, #42A5F5, #e3f2fd); display:flex; align-items:center; justify-content:center; color:var(--primary); font-size:48px;">3</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <span>📅 Oct 08, 2026</span>
                    <span>🏷️ AI & Machine Learning</span>
                </div>
                <h3>Deploying AI in Customer Support</h3>
                <p>Learn how integrating intelligent LLMs can streamline your support operations and decrease ticket resolution times.</p>
                <a href="<?= BASE_URL ?>blog-detail" class="btn btn-outline" style="padding: 8px 20px;">Read More</a>
            </div>
        </article>

        <!-- Post 4 -->
        <article class="card blog-card">
            <!-- Simulated Image -->
            <div class="blog-img" style="background: linear-gradient(45deg, #1565C0, #42A5F5); display:flex; align-items:center; justify-content:center; color:#fff; font-size:48px;">4</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <span>📅 Sep 29, 2026</span>
                    <span>🏷️ Web Development</span>
                </div>
                <h3>Next.js vs Vanilla PHP in 2026</h3>
                <p>A comprehensive comparison of modern JavaScript frameworks against the battle-tested PHP ecosystem.</p>
                <a href="<?= BASE_URL ?>blog-detail" class="btn btn-outline" style="padding: 8px 20px;">Read More</a>
            </div>
        </article>

        <!-- Post 5 -->
        <article class="card blog-card">
            <!-- Simulated Image -->
            <div class="blog-img" style="background: linear-gradient(45deg, #0D47A1, #1565C0); display:flex; align-items:center; justify-content:center; color:#fff; font-size:48px;">5</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <span>📅 Sep 21, 2026</span>
                    <span>🏷️ DevOps</span>
                </div>
                <h3>Mastering Docker Multi-Stage Builds</h3>
                <p>Optimize your container sizes and speed up your deployment pipelines with these Dockerfile best practices.</p>
                <a href="<?= BASE_URL ?>blog-detail" class="btn btn-outline" style="padding: 8px 20px;">Read More</a>
            </div>
        </article>
        
        <!-- Post 6 -->
        <article class="card blog-card">
            <!-- Simulated Image -->
            <div class="blog-img" style="background: linear-gradient(45deg, #42A5F5, #e3f2fd); display:flex; align-items:center; justify-content:center; color:var(--primary); font-size:48px;">6</div>
            <div class="blog-content">
                <div class="blog-meta">
                    <span>📅 Sep 14, 2026</span>
                    <span>🏷️ Digital Marketing</span>
                </div>
                <h3>SEO Algorithms Latest Update</h3>
                <p>Breaking down the recent search engine algorithm changes and how to adapt your content strategy to maintain rankings.</p>
                <a href="<?= BASE_URL ?>blog-detail" class="btn btn-outline" style="padding: 8px 20px;">Read More</a>
            </div>
        </article>

    </div>
</section>

<!-- PAINATION Dummy -->
<section class="section" style="padding-top: 0;">
    <div class="container text-center">
        <a href="#" class="btn btn-primary" style="margin: 0 5px;">1</a>
        <a href="#" class="btn btn-outline" style="margin: 0 5px;">2</a>
        <a href="#" class="btn btn-outline" style="margin: 0 5px;">3</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

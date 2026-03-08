/**
 * Zoron Infosoft - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {

  // 1. Scroll Reveal Animation
  const revealElements = document.querySelectorAll('.reveal');
  
  const revealCallback = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        observer.unobserve(entry.target);
      }
    });
  };

  const revealOptions = {
    threshold: 0.1,
    rootMargin: "0px"
  };

  if ('IntersectionObserver' in window && revealElements.length > 0) {
    const revealObserver = new IntersectionObserver(revealCallback, revealOptions);
    revealElements.forEach(el => revealObserver.observe(el));
  } else {
    // Fallback for older browsers
    revealElements.forEach(el => el.classList.add('active'));
  }

  // 2. Navbar Scroll Effect
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  }

  // 3. Mobile Menu Toggle
  const menuToggle = document.querySelector('.menu-toggle');
  const mainNav = document.querySelector('.main-nav');
  
  if (menuToggle && mainNav) {
    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      mainNav.classList.toggle('active');
    });
  }

  // 4. Counter Animation
  const counters = document.querySelectorAll('.counter-value');
  const counterCallback = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const endValue = parseInt(target.getAttribute('data-target'));
        const isPlus = target.getAttribute('data-suffix') === '+' ? '+' : '';
        const duration = 2000;
        const step = endValue / (duration / 16); // 60fps approx
        
        let current = 0;
        
        const updateCounter = () => {
          current += step;
          if (current < endValue) {
            target.textContent = Math.ceil(current) + isPlus;
            requestAnimationFrame(updateCounter);
          } else {
            target.textContent = endValue + isPlus;
          }
        };
        
        requestAnimationFrame(updateCounter);
        observer.unobserve(target);
      }
    });
  };

  if ('IntersectionObserver' in window && counters.length > 0) {
    const counterObserver = new IntersectionObserver(counterCallback, { threshold: 0.5 });
    counters.forEach(counter => counterObserver.observe(counter));
  }

  // 5. Generic Form Handler (Fetch API)
  const setupAjaxForm = (formId) => {
    const form = document.getElementById(formId);
    if (!form) return;

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      
      // Basic client-side validation clear
      const errors = form.querySelectorAll('.form-group.has-error');
      errors.forEach(err => err.classList.remove('has-error'));
      
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      const messageBox = document.getElementById(formId + '-message');
      
      if (messageBox) {
        messageBox.className = 'form-message';
        messageBox.innerHTML = '';
      }

      // Check required fields manually (HTML5 does this too, but for robust custom UI)
      let isValid = true;
      const requiredFields = form.querySelectorAll('[required]');
      requiredFields.forEach(field => {
        if (!field.value.trim()) {
          isValid = false;
          const group = field.closest('.form-group');
          if (group) group.classList.add('has-error');
        }
      });

      if (!isValid) return;

      // Prepare UI for submission
      submitBtn.disabled = true;
      submitBtn.innerHTML = 'Sending...';

      try {
        const formData = new FormData(form);
        const action = form.getAttribute('action');

        const response = await fetch(action, {
          method: 'POST',
          body: formData,
          headers: {
            'Accept': 'application/json'
          }
        });

        const result = await response.json();

        if (result.success) {
          if (messageBox) {
            messageBox.className = 'form-message success';
            messageBox.innerHTML = result.message || 'Message sent successfully!';
          }
          form.reset();
        } else {
          if (messageBox) {
            messageBox.className = 'form-message error';
            messageBox.innerHTML = result.message || 'Error sending message. Please try again.';
          }
        }
      } catch (error) {
        console.error('Form submission error:', error);
        if (messageBox) {
          messageBox.className = 'form-message error';
          messageBox.innerHTML = 'Network error occurred. Please check your connection and try again.';
        }
      } finally {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }
    });
  };

  // Initialize specific forms
  setupAjaxForm('contactForm');
  setupAjaxForm('careerForm');

});

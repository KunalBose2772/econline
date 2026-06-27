<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-brand">
            <a href="/" style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; text-decoration: none;" title="Go to the EC Online Homepage">
                <img src="/econline_logo.png?v=2" alt="EC Online Logo" title="EC Online" width="40" height="40" style="border-radius: 50%; opacity: 0.9;">
                <span style="font-weight: 800; font-size: 1.5rem; color: white;">EC Online</span>
            </a>
            <p>Your independent guide to official government land registry and Encumbrance Certificate (EC) portals. We help you find direct, secure links to state portals and follow step-by-step procedures to check property titles safely.</p>
        </div>
        <div class="footer-links-col">
            <h3>Quick Guides</h3>
            <ul>
                <li><a href="/online-ec-tamilnadu/" title="Read our guide on Tamil Nadu online EC search">Tamil Nadu EC</a></li>
                <li><a href="/online-ec-karnataka/" title="Read our guide on Karnataka online EC search">Karnataka EC</a></li>
                <li><a href="/ec-online-telangana/" title="Read our guide on Telangana online EC search">Telangana EC</a></li>
                <li><a href="/online-ec-ap/" title="Read our guide on Andhra Pradesh online EC search">Andhra Pradesh EC</a></li>
            </ul>
        </div>
        <div class="footer-links-col">
            <h3>Official Portals</h3>
            <ul>
                <li><a href="https://tnreginet.gov.in" target="_blank" rel="noopener" title="Visit the official TNREGINET Portal (External Link)">TNREGINET Portal</a></li>
                <li><a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="noopener" title="Visit the official Kaveri Online Services Portal (External Link)">Kaveri Online Services</a></li>
                <li><a href="https://registration.telangana.gov.in" target="_blank" rel="noopener" title="Visit the official IGRS Telangana Portal (External Link)">IGRS Telangana</a></li>
                <li><a href="https://igrs.ap.gov.in" target="_blank" rel="noopener" title="Visit the official IGRS Andhra Pradesh Portal (External Link)">IGRS Andhra Pradesh</a></li>
            </ul>
        </div>
        <div class="footer-links-col">
            <h3>Legal</h3>
            <ul>
                <li><a href="/about-us/" title="Learn more about us and our mission">About Us</a></li>
                <li><a href="/contact-us/" title="Get in touch with our team">Contact Us</a></li>
                <li><a href="/privacy-policy/" title="Read our privacy policy">Privacy Policy</a></li>
                <li><a href="/terms-conditions/" title="Read our terms and conditions">Terms & Conditions</a></li>
                <li><a href="/disclaimer/" title="Read our legal disclaimer">Disclaimer</a></li>
                <li><a href="/site-directory/" title="View all property guides and sitemap">Site Directory</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> econline.in. All rights reserved. We are an independent information provider and are not affiliated with any government department.</p>
    </div>
</footer>

<!-- Interactive Scripts -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. FAQ Accordion Toggle Action
    const faqQuestions = document.querySelectorAll(".faq-question");
    faqQuestions.forEach(question => {
        question.addEventListener("click", function() {
            const item = this.parentElement;
            const answer = this.nextElementSibling;
            
            if (item.classList.contains("active")) {
                item.classList.remove("active");
                answer.style.maxHeight = null;
            } else {
                // Close other active items
                document.querySelectorAll(".faq-item.active").forEach(activeItem => {
                    activeItem.classList.remove("active");
                    activeItem.querySelector(".faq-answer").style.maxHeight = null;
                });
                
                item.classList.add("active");
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });

    // 2. Search Autocomplete Suggestion Logic
    const searchInput = document.querySelector(".search-input");
    const searchBtn = document.querySelector(".search-btn");
    
    if (searchInput) {
        const suggestList = document.querySelector(".suggest-dropdown");
        searchInput.addEventListener("input", function() {
            const val = this.value.trim();
            if (val.length < 2) {
                suggestList.style.display = "none";
                return;
            }
            
            // Fetch suggestions from search-suggest.php
            fetch("/search-suggest.php?q=" + encodeURIComponent(val))
                .then(res => res.json())
                .then(data => {
                    suggestList.innerHTML = "";
                    if (data && data.length > 0) {
                        data.forEach(item => {
                            const li = document.createElement("li");
                            li.className = "suggest-item";
                            li.textContent = item.keyword;
                            li.addEventListener("click", function() {
                                searchInput.value = item.keyword;
                                suggestList.style.display = "none";
                                // Redirect directly to the page slug!
                                window.location.href = "/" + item.slug + "/";
                            });
                            suggestList.appendChild(li);
                        });
                        suggestList.style.display = "block";
                    } else {
                        suggestList.style.display = "none";
                    }
                })
                .catch(() => {
                    suggestList.style.display = "none";
                });
        });
        
        // Hide dropdown on click outside
        document.addEventListener("click", function(e) {
            if (e.target !== searchInput) {
                suggestList.style.display = "none";
            }
        });

        // Click search button redirects to search list page or top result
        function performSearch() {
            const val = searchInput.value.trim();
            if (val.length > 0) {
                // Fetch matches from search-suggest.php to prevent triggering 404s
                fetch("/search-suggest.php?q=" + encodeURIComponent(val))
                    .then(res => res.json())
                    .then(data => {
                        if (data && data.length > 0) {
                            // Redirect to the first validated guide slug
                            window.location.href = "/" + data[0].slug + "/";
                        } else {
                            // Safe fallback to homepage with query param instead of triggering a 404
                            window.location.href = "/?search_failed=1&q=" + encodeURIComponent(val);
                        }
                    })
                    .catch(() => {
                        window.location.href = "/";
                    });
            }
        }

        if (searchBtn) {
            searchBtn.addEventListener("click", performSearch);
        }

        searchInput.addEventListener("keydown", function(e) {
            if (e.key === "Enter") {
                performSearch();
            }
        });
    }
});
</script>
</body>
</html>

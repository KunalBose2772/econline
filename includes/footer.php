<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-brand">
            <a href="/" style="display: inline-block; margin-bottom: 1rem;" title="Go to the EC Online Homepage" aria-label="EC Online Homepage">
                <img src="/econline_logo.png" alt="EC Online Logo" title="EC Online Logo" width="120" height="40" style="filter: brightness(0) invert(1); opacity: 0.9;">
                <span style="position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0, 0, 0, 0); border: 0;">EC Online Homepage</span>
            </a>
            <p>Your independent guide to official government land registry and Encumbrance Certificate (EC) portals. We help you find direct, secure links to state portals and follow step-by-step procedures to check property titles safely.</p>
        </div>
        <div class="footer-links-col">
            <h4>Quick Guides</h4>
            <ul>
                <li><a href="/online-ec-tamilnadu/">Tamil Nadu EC</a></li>
                <li><a href="/online-ec-karnataka/">Karnataka EC</a></li>
                <li><a href="/ec-online-telangana/">Telangana EC</a></li>
                <li><a href="/online-ec-ap/">Andhra Pradesh EC</a></li>
            </ul>
        </div>
        <div class="footer-links-col">
            <h4>Official Portals</h4>
            <ul>
                <li><a href="https://tnreginet.gov.in" target="_blank" rel="nofollow noopener">TNREGINET Portal</a></li>
                <li><a href="https://kaverionline.karnataka.gov.in" target="_blank" rel="nofollow noopener">Kaveri Online Services</a></li>
                <li><a href="https://registration.telangana.gov.in" target="_blank" rel="nofollow noopener">IGRS Telangana</a></li>
                <li><a href="https://igrs.ap.gov.in" target="_blank" rel="nofollow noopener">IGRS Andhra Pradesh</a></li>
            </ul>
        </div>
        <div class="footer-links-col">
            <h4>Legal</h4>
            <ul>
                <li><a href="/about-us/">About Us</a></li>
                <li><a href="/contact-us/">Contact Us</a></li>
                <li><a href="/privacy-policy/">Privacy Policy</a></li>
                <li><a href="/terms-conditions/">Terms & Conditions</a></li>
                <li><a href="/disclaimer/">Disclaimer</a></li>
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
        // Create suggestion dropdown element if not exists
        let suggestList = document.querySelector(".suggest-dropdown");
        if (!suggestList) {
            suggestList = document.createElement("ul");
            suggestList.className = "suggest-dropdown";
            searchInput.parentElement.appendChild(suggestList);
        }
        
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

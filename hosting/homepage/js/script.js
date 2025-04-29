const dynamicText = document.getElementById('dynamic-text');
const phrases = ["without limits", "with perfect Performance", "perfect for your Project", "without ads", "100% secure", "Free, forever"];
let phraseIndex = 0;
let charIndex = 0;
let isDeleting = false;
let typingSpeed = 100;

function typeEffect() {
  const currentPhrase = phrases[phraseIndex];
  
  if (isDeleting) {
    charIndex--;
  } else {
    charIndex++;
  }

  dynamicText.textContent = currentPhrase.substring(0, charIndex);

  if (!isDeleting && charIndex === currentPhrase.length) {
    isDeleting = true;
    setTimeout(typeEffect, 1500); // Pause, wenn das Wort vollständig geschrieben ist
    return;
  }

  if (isDeleting && charIndex === 0) {
    isDeleting = false;
    phraseIndex = (phraseIndex + 1) % phrases.length;
    setTimeout(typeEffect, 500); // Pause vor dem nächsten Wort
    return;
  }

  const speed = isDeleting ? typingSpeed / 2 : typingSpeed;
  setTimeout(typeEffect, speed);
}

typeEffect();

    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', function() {
            if (mobileMenu.style.display === 'block') {
                mobileMenu.style.display = 'none';
            } else {
                mobileMenu.style.display = 'block';
            }
        });

        document.addEventListener('click', function(event) {
            if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target) && mobileMenu.style.display === 'block') {
                mobileMenu.style.display = 'none';
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // ... (dein vorheriger JavaScript-Code) ...

        // Mobile Dropdown
        const mobileDropdown = document.querySelector('.mobile-dropdown');
        const mobileDropdownLink = mobileDropdown.querySelector('.mobile-link');

        mobileDropdownLink.addEventListener('click', function(event) {
            event.preventDefault();
            mobileDropdown.classList.toggle('show');
        });

    });
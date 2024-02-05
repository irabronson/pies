////////// CATEGORY FILTERS, URL UPDATE

document.addEventListener('DOMContentLoaded', () => {

  // Add click event listeners to filter links
  const filterLinks = document.querySelectorAll('#filters a');
  const listElement = document.getElementById('category-content');
  
  // Set item fade out
  // opacity 0 first, then display none
  const fadeOut = (element, duration) => {
    let opacity = 1;
    const interval = 20;
    const decrease = interval / duration;
    const fadeEffect = setInterval(() => {
      if (opacity > 0) {
        opacity -= decrease;
        element.style.opacity = opacity;
      } else {
        clearInterval(fadeEffect);
        element.style.display = 'none';
      }
    }, interval);
  };

  // Set item fade in
  // display block first, then opacity 1
  const fadeIn = (element, duration) => {
    let opacity = 0;
    const interval = 20;
    const increase = interval / duration;
    element.style.display = 'block';
    const fadeEffect = setInterval(() => {
      if (opacity < 1) {
        opacity += increase;
        element.style.opacity = opacity;
      } else {
        clearInterval(fadeEffect);
      }
    }, interval);
  };

  const showFilter = filterValue => {
    // Hide all filter items
    const filterItems = document.querySelectorAll('.category-item');
    filterItems.forEach(item => {
      item.classList.remove('visible');
      fadeOut(item, 20);
    });
    
    // Show the selected filter items
    if (filterValue === 'all') {
      filterItems.forEach(item => {
        setTimeout(() => {
          item.classList.add('visible');
          fadeIn(item, 300);
        }, 100);
      });
    } else {
      // Show the selected filter items
      const selectedFilterItems = document.querySelectorAll(`.${filterValue}`);
      selectedFilterItems.forEach(item => {
        setTimeout(() => {
          item.classList.add('visible');
          fadeIn(item, 300);
        }, 100);
      });
    }
  };

  // Remove 'active' class from all links
  const updateActiveFilter = activeLink => {
    filterLinks.forEach(link => {
      link.classList.remove('active');
    });
    
    // Add 'active' class to the clicked link
    activeLink.classList.add('active');
    
    // Add class to #category-content based on the active link's data-filter
    const activeFilter = activeLink.getAttribute('data-filter');
    listElement.className = ''; // Clear existing classes
    listElement.classList.add(activeFilter);
  };
  
  const applyInitialFilter = () => {
    // Check for 'category' parameter in the URL on page load
    const url = new URL(window.location.href);
    const categoryParam = url.searchParams.get('category');
    if (categoryParam) {
      // If 'category' parameter is present, apply the filter
      showFilter(categoryParam);
      
      // Update the active filter link
      filterLinks.forEach(link => {
        if (link.getAttribute('data-filter') === categoryParam) {
          updateActiveFilter(link);
        }
      });
    }
  };

  // Initial filter - 'All' active by default
  applyInitialFilter();
  
  filterLinks.forEach(link => {
    link.addEventListener('click', event => {
      event.preventDefault();
      const filterValue = link.getAttribute('data-filter');
      showFilter(filterValue);
      updateActiveFilter(link);
      
      // Update URL via history.replaceState
      const url = new URL(window.location.href);
      if (filterValue === 'all') {
        // If filter is 'All' remove parameter from URL
        url.searchParams.delete('category');
      } else {
        url.searchParams.set('category', filterValue);
      }
      history.replaceState({ category: filterValue }, null, url.href);
    });
  });
  
  
  ////////// LAZY LOAD VIDEOS
  
  var lazyLoadInstance = new LazyLoad({
    thresholds: "148%", // maps to rootMargin
    callback_enter: (el)=>{console.log("Lazy has entered");}
  });
  // Check the DOM again in case DOM update
  lazyLoadInstance.update();


  ////////// INTERSECTION OBSERVERS
  
  // Pause/play videos when out/in viewport
  const videos = document.querySelectorAll("figure video");
  const videoPausePlay = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Got a 'play() request was interrupted by a new load request' error. Possibly a result of the video file(s) not being loaded at the exact time of the play() function and thus cannot start immediately, or due to being tied to an IO for play/pause and already being visible in the viewport plus a race between play() and pause() which are asynchronous. Idk but offsetting play() and pause() works.
          setTimeout(() => {
          entry.target.play();
          }, 100);
          console.log("Vid playing");
        }
        else {
          entry.target.pause();
          console.log("Vid paused");
        }
      });
    },
    { rootMargin: "15%" }
  );
  videos.forEach(element => {
    videoPausePlay.observe(element);
  });
  
  // Back to top trigger
  const backToTop = document.getElementById('category-content');
  const bodyBackToTop = document.querySelector('.back-to-top');
  const observerBackToTop = new IntersectionObserver(
    function callBackFunction(entries) {
      const [entry] = entries;
      if (entry.isIntersecting) {
      bodyBackToTop.classList.add('scrolled');
      } else {
      bodyBackToTop.classList.remove('scrolled');
      }
    }, // High value for 'top' so the caret remains visible
    { rootMargin: "400% 0% -150% 0%" }
  );
  observerBackToTop.observe(backToTop);
  
  
  
  
  
  
}); // DOMContentLoaded


////////// INTERACTIONS

// Toggle 'open' class for QR code
document.querySelectorAll('.qr-container').forEach(iconContainer => {
  iconContainer.addEventListener('click', (event) => {
    const qrContainer = event.target.closest('figure');
    if (qrContainer) {
      qrContainer.classList.toggle('open');
    }
  });
});

// Back to top
document.querySelector('.back-to-top').addEventListener('click', () => {
  const duration = 1600;
  const start = window.scrollY;
  const startTime = performance.now();
  function animateScroll(currentTime) {
    const elapsedTime = currentTime - startTime;
    const progress = Math.min(elapsedTime / duration, 1);
    const ease = easeInOutCubic(progress);
    window.scrollTo(0, start * (1 - ease));
    if (progress < 1) {
      requestAnimationFrame(animateScroll);
    }
  }
  function easeInOutCubic(t) {
    return t < 0.5 ? 4 * t ** 3 : 1 - (2 * (1 - t)) ** 3 / 2;
  }
  requestAnimationFrame(animateScroll);
});



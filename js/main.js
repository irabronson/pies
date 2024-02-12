/* ========================================

  CATEGORY FILTERS, URL UPDATE, HISTORY STATES

=========================================== */


// Add click event listeners to filter links
const filterLinks = document.querySelectorAll('#filters a');
const listElement = document.getElementById('category-content');

// Set item fade out
const fadeOut = (element, duration) => {
  element.style.opacity = 1;
  element.style.transition = `opacity ${duration / 1000}s`;
  setTimeout(() => {
    element.style.opacity = 0;
  }, 0);
  setTimeout(() => {
    element.style.display = 'none';
  }, duration); // Set display to none after the duration
};

// Set item fade in
// display block first, then opacity 1
const fadeIn = (element, duration) => {
  element.style.display = 'block';
  element.style.opacity = 0;
  element.style.transition = `opacity ${duration / 1000}s`;
  setTimeout(() => {
    element.style.opacity = 1;
  }, 10); // Need this for ensuring the transition actually works in all browsers; despite it being captured inline
};

const showFilter = filterValue => {
  // Hide all filter items
  const filterItems = document.querySelectorAll('.category-item');
  filterItems.forEach(item => {
    item.classList.remove('visible');
    fadeOut(item, 10);
  });
  
  // Show the selected filter items
  if (filterValue === 'all') {
    filterItems.forEach(item => {
      setTimeout(() => {
        fadeIn(item, 400);
      }, 140);
    });
  } else {
    // Show the selected filter items
    const selectedFilterItems = document.querySelectorAll(`.${filterValue}`);
    selectedFilterItems.forEach(item => {
      setTimeout(() => {
        fadeIn(item, 400);
      }, 140);
    });
  }
};

// Remove 'active' class from all links and apply to the active filter links
const updateActiveFilter = activeLink => {
  // Remove 'active' class from all links
  filterLinks.forEach(link => {
    link.classList.remove('active');
  });

  // Add 'active' class to all links with matching data-attribute
  const filterValue = activeLink.getAttribute('data-filter');
  filterLinks.forEach(link => {
    if (link.getAttribute('data-filter') === filterValue) {
      link.classList.add('active');
    }
  });
  
  // Add class to #category-content based on the active link's data-filter
  listElement.className = ''; // Clear existing classes
  listElement.classList.add(filterValue);
};

// Add event listener for popstate
window.addEventListener('popstate', () => {
  applyInitialFilter();
  invokeOnHistoryStates();
});

const invokeOnHistoryStates = () => {

  // Preventing jump if Back/Fwd buttons
  if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
  }
  
  // Hide content during category switch
  const contentElement = document.querySelector('.content');
  if (contentElement) {
    contentElement.classList.add('transition');
    setTimeout(() => {
      contentElement.classList.remove('transition');
    }, 200);
  }

  // Add class 'dismiss' to element 'nav .fixed' and remove
  const navFixedElement = document.querySelector('nav .fixed');
  if (navFixedElement) {
    navFixedElement.classList.add('dismiss');
    setTimeout(() => {
      navFixedElement.classList.remove('dismiss');
      // Also remove the class 'open' after 30 milliseconds
      navFixedElement.classList.remove('open');
    }, 100);
  }

  // Scroll to top of page
    setTimeout(() => {
      window.scrollTo({ top: 0 });
    }, 40); // Give it time so no content visible on exit

};

const applyInitialFilter = () => {
  // Check for 'category' parameter in the URL on page load
  const url = new URL(window.location.href);
  const categoryParam = url.searchParams.get('category');
  if (categoryParam) {
    // If 'category' parameter is present, update URL and apply the filter
    const filterValue = categoryParam;
    const link = document.querySelector(`[data-filter="${filterValue}"]`);
    if (link) {
      showFilter(filterValue);
      updateActiveFilter(link);
    }
  } else {
    // If no category parameter, show all items
    showFilter('all');
    // Apply 'active' class to the "All" filter
    const allFilterLink = document.querySelector('[data-filter="all"]');
    if (allFilterLink) {
      updateActiveFilter(allFilterLink);
    }
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
    
    // Update URL via history.pushState
    const url = new URL(window.location.href);
    if (filterValue === 'all') {
      // If filter is 'All' remove parameter from URL
      url.searchParams.delete('category');
    } else {
      url.searchParams.set('category', filterValue);
    }
    history.pushState({ category: filterValue }, null, url.href);
  });
});



/* ========================================

  INTERACTIONS

=========================================== */


/* -------- Hide and reveal any elements on intro animation */
/* e.g. Filters and back to top */

const elements = document.querySelectorAll('.start');
elements.forEach(element => {
  element.classList.add('hide');
});
setTimeout(() => {
  elements.forEach(element => {
    element.classList.remove('hide');
  });
}, 2600);


/* -------- Add class when intro animation completes */

const animated = document.querySelector('.intro span:nth-child(6)');
animated.addEventListener('animationend', () => {
  const thingElements = document.querySelectorAll('.intro span');
  thingElements.forEach(element => {
    element.classList.add('out');
  });
  console.log("Animation ended");
});


/* -------- Scroll to category (top of page) */

document.querySelectorAll('nav .fixed a').forEach(link => {
  link.addEventListener('click', event => {
    event.preventDefault();
    setTimeout(() => {
      window.scrollTo({ top: 0 });
    }, 40); // Give it time so no content visible on exit
  });
});


/* -------- Remove 'split' class from .letters-in element on new category selection */

document.querySelectorAll('nav a').forEach(resetLettersIn => {
  resetLettersIn.addEventListener('click', (event) => {
    setTimeout(() => {
      document.querySelector('.letters-in > div').classList.remove('split');
    }, 100);
  });
});


/* -------- Fire actions via filter and nav links */

/* Add/remove 'open' class on filter container */
/* Toggle via filter button */
document.querySelector('nav .fixed button').addEventListener('click', () => {
	document.querySelector('nav .fixed').classList.toggle('open');
});

document.querySelectorAll('nav .fixed a').forEach(fixedFilterClose => {
  fixedFilterClose.addEventListener('click', (event) => {
    // Set immediate dismissal of nav upon close to override its animation 
    document.querySelector('nav .fixed').classList.add('dismiss');
    // Hide content during category switch
    document.querySelector('.content').classList.add('transition'); 
    // Reset mobile nav scroll position
    document.querySelector('nav').scrollLeft = 0;
    setTimeout(() => {
      // Remove 'open', 'dismiss' classes
      document.querySelector('nav .fixed').classList.remove('open','dismiss');
    }, 30);
    setTimeout(() => {
      // Reset content after category switch
      document.querySelector('.content').classList.remove('transition');    
    }, 200);
  });
});


/* -------- Toggle 'open' class for QR code */

document.querySelectorAll('.qr-container').forEach(iconContainer => {
  iconContainer.addEventListener('click', (event) => {
    const qrContainer = event.target.closest('figure');
    if (qrContainer) {
      qrContainer.classList.toggle('open');
    }
  });
});


/* -------- Back to top */

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



/* ========================================

  INTERSECTION OBSERVERS

=========================================== */


/* -------- Pause/play videos when out/in viewport */

const videos = document.querySelectorAll("figure video");
const videoPausePlay = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Got a 'play() request was interrupted by a new load request' error. Possibly a result of the video file(s) not being loaded at the exact time of the play() function and thus cannot start immediately, or due to being tied to an IO for play/pause and already being visible in the viewport plus a race between play() and pause() which are asynchronous. Idk but offsetting play() and pause() works.
        setTimeout(() => {
         // entry.target.play();
        }, 100);
        //console.log("Vid playing");
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


/* -------- Show/hide filters on scroll */

const navElement = document.querySelector('nav');
const navObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.remove('hidden');
    } else {
      entry.target.classList.add('hidden');
    }
  });
});
navObserver.observe(navElement);


/* -------- Trigger .split animation on scroll */

const splitElement = document.querySelector('.letters-in > div');
const splitObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('split');
    }
  });
}, { rootMargin: '0% 0% 10% 0%' }
);
splitObserver.observe(splitElement);


/* -------- Back to top trigger */

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
  }, // High value for 'top' so it remains visible
  { rootMargin: "400% 0% -350% 0%" }
);
observerBackToTop.observe(backToTop);



/* ========================================

  LAZY LOAD VIDEOS

=========================================== */


var lazyLoadInstance = new LazyLoad({
  thresholds: "140%", // maps to rootMargin
  callback_enter: (el)=>{console.log("Lazy has entered");}
});
lazyLoadInstance.update();
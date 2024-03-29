/* =============================================

  CATEGORY FILTERS, URL UPDATE, HISTORY STATES

================================================ */


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
  }, 20); // Need this for ensuring the transition actually works in all browsers; despite it being captured inline
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

// Perform actions on history states
const invokeOnHistoryStates = () => {
  // Preventing jump if Back/Fwd buttons
  if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
  }
  // Scroll to top of page
  setTimeout(() => {
    window.scrollTo({ top: 0 });
  }, 40); // Give it time so no content visible on exit
  // Reset letters-in element
  setTimeout(() => {
    document.querySelector('.letters-in > div').classList.remove('split');
  }, 100);
  // Hide content during category switch
  if (document.querySelector('.content')) {
    document.querySelector('.content').classList.add('transition');
    setTimeout(() => {
      document.querySelector('.content').classList.remove('transition');
    }, 200);
  }
  // Add class 'dismiss' to element 'nav .fixed' and remove
  if (document.querySelector('nav .fixed')) {
    document.querySelector('nav .fixed').classList.add('dismiss');
    setTimeout(() => {
      // Remove 'nav-open', 'dismiss' classes
      document.querySelectorAll('nav .fixed, body').forEach(function(element) {
        element.classList.remove('nav-open', 'dismiss');
      });
    }, 100);
  }
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


/* -------- Fire actions via filter and nav links */

/* Toggle 'nav-open' class via filter button */
document.querySelector('nav .fixed button').addEventListener('click', () => {
  document.querySelectorAll('nav .fixed, body').forEach(function(element) {
    element.classList.toggle('nav-open');
  });
});

/* Remove 'open' when click mobile nav close icon */
document.querySelector('.mobile-category-container img').addEventListener('click', () => {
	document.querySelectorAll('nav .fixed, body').forEach(function(element) {
    element.classList.remove('nav-open');
  });
});

document.querySelectorAll('nav .fixed a').forEach(fixedFilterClose => {
  fixedFilterClose.addEventListener('click', (event) => {
    // Set immediate dismissal of nav upon close to override its animation 
    document.querySelector('nav .fixed').classList.add('dismiss');
    // Hide content during category switch
    document.querySelector('.content').classList.add('transition'); 
    setTimeout(() => {
      // Remove 'nav-open', 'dismiss' classes
      document.querySelectorAll('nav .fixed, body').forEach(function(element) {
        element.classList.remove('nav-open', 'dismiss');
      });
    }, 30);
    setTimeout(() => {
      // Reset content after category switch
      document.querySelector('.content').classList.remove('transition');    
    }, 200);
  });
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


/* -------- Update heading text based on active category - Mobile only */

if (window.matchMedia("(max-width: 560px)").matches) {
  
  const headingText = document.querySelector('header h3');
  const observerConfig = {
    attributes: true,
    attributeFilter: ['class'],
    attributeOldValue: true,
  };
  
  const observerCallback = function(mutationsList) {
    for (let mutation of mutationsList) {
      if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
        const activeAnchor = document.querySelector('nav .fixed a.active');
        if (activeAnchor) {
          // Update heading text with new active anchor text
          headingText.textContent = activeAnchor.textContent;
        }
      }
    }
  };
  
  const catObserver = new MutationObserver(observerCallback);
  catObserver.observe(document.querySelector('nav .fixed a'), observerConfig);
  
  // Set initial heading text
  const defaultActiveListItem = document.querySelector('nav .fixed a.active');
  if (defaultActiveListItem) {
    headingText.textContent = defaultActiveListItem.textContent;
  }
  
}




/* =============================================

  VIDEO PLAY / PREVIEW / SOUND

================================================ */


/* -------- Play/pause/mute videos when in/out viewport */

// Get all video elements
const videos = document.querySelectorAll('video');

// Function to handle play/pause based on viewport visibility for screens 800px and up
function handlePlayPauseIntersection(entries) {
  entries.forEach(entry => {
    const video = entry.target;
    if (window.matchMedia('(min-width: 800px)').matches) {
      if (entry.isIntersecting) {
        setTimeout(() => {
          video.play();
        }, 100);
        console.log("Vid playing");
      } else {
        video.pause();
        console.log("Vid paused");
      }
    }
  });
}

// Function to handle muting a video if outside viewport
function handleSoundIntersection(entries) {
  entries.forEach(entry => {
    const video = entry.target;
    if (!entry.isIntersecting) {
      video.muted = true;
        if (video.previousElementSibling) {
          video.previousElementSibling.classList.add('sound-off');
          video.previousElementSibling.classList.remove('sound-on');
          console.log("Out and off");
        }
    }
  });
}

// Instantiate IntersectionObserver for play/pause functionality on screens 800px and up
const playPauseObserver = new IntersectionObserver(handlePlayPauseIntersection, { rootMargin: '15% 0% 15% 0%' });
videos.forEach(video => {
  playPauseObserver.observe(video);
});

// Instantiate IntersectionObserver for muting a video if outside viewport
const soundMuteObserver = new IntersectionObserver(handleSoundIntersection, { rootMargin: '0%' });
videos.forEach(video => {
  soundMuteObserver.observe(video);
});

// Add event listener for resize event to dynamically adjust on window resize
window.addEventListener('resize', () => {
  const isLargeScreen = window.matchMedia('(min-width: 800px)').matches;
  // Set or remove loop attribute based on window size
  videos.forEach(video => {
    if (isLargeScreen) {
      video.setAttribute('loop', '');
    } else {
      video.removeAttribute('loop');
    }
  });
});

// Call the resize event listener initially to apply the logic
window.dispatchEvent(new Event('resize'));



/* -------- Set Preview button and sound toggle states */

const uiContainer = document.querySelectorAll('.ui-container');

uiContainer.forEach(container => {
  container.addEventListener('click', function() {
    const video = this.closest('figure').querySelector('video');

    // Toggle sound class and mute/unmute video
    if (this.classList.contains('sound-off')) {
      this.classList.remove('sound-off');
      this.classList.add('sound-on');
      video.muted = false;
    } else {
      this.classList.remove('sound-on');
      this.classList.add('sound-off');
      video.muted = true;
    }

    // If screen width is less than 800px, play the video
    if (window.matchMedia("(max-width: 800px)").matches) {
      video.play();
      this.classList.add('is-playing');
    }
  });

  // When the video ends, remove the class 'is-playing'
  const video = container.closest('figure').querySelector('video');
  video.addEventListener('ended', function() {
    container.classList.remove('is-playing');
  });

  // If screen width is less than 800px, play the video
  if (window.matchMedia("(max-width: 800px)").matches) {
    const video = container.closest('figure').querySelector('video');

    // When the video ends, toggle sound class and reset video time
    video.addEventListener('ended', function() {
      container.classList.remove('sound-on');
      container.classList.add('sound-off');
      video.currentTime = 0;
    });
  }
});




/* =============================================

  ANIMATIONS

================================================ */


/* -------- Hide and reveal any elements on intro animation */
/* e.g. Filters and back to top */

const elements = document.querySelectorAll('.start');
elements.forEach(element => {
  element.classList.add('hide');
});
if (window.matchMedia("(max-width: 560px)").matches) {
  setTimeout(() => {
    elements.forEach(element => {
      element.classList.remove('hide');
    });
  }, 2000);
}
if (window.matchMedia("(min-width: 561px)").matches) {
  setTimeout(() => {
    elements.forEach(element => {
      element.classList.remove('hide');
    });
  }, 2800);
}


/* -------- Add class when intro animation completes */

document.querySelector('.intro span:nth-child(6)').addEventListener('animationend', function() {
  document.querySelectorAll('.intro span').forEach(function(element) {
    element.classList.add('out');
  });
});


/* -------- Trigger .letters-in animation on scroll */

const splitElement = document.querySelector('.letters-in > div');
const splitObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('split');
    }
  });
},
  { rootMargin: '0% 0% -10% 0%' }
);
splitObserver.observe(splitElement);


/* -------- Reset .letters-in animation on new category selection */

document.querySelectorAll('nav a').forEach(resetLettersIn => {
  resetLettersIn.addEventListener('click', (event) => {
    setTimeout(() => {
      document.querySelector('.letters-in > div').classList.remove('split');
    }, 100);
  });
});




/* =============================================

  BACK TO TOP

================================================ */


/* -------- Show / hide via scroll position */

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


/* -------- Scroll to top and animate */

document.querySelector('.back-to-top').addEventListener('click', () => {
  const duration = 1600;
  const start = window.scrollY;
  const startTime = performance.now();
  const animateScroll = (currentTime) => {
    const elapsedTime = currentTime - startTime;
    const progress = Math.min(elapsedTime / duration, 1);
    const ease = (t) => (t < 0.5 ? 4 * t ** 3 : 1 - (2 * (1 - t)) ** 3 / 2);
    window.scrollTo(0, start * (1 - ease(progress)));
    if (progress < 1) requestAnimationFrame(animateScroll);
  };
  requestAnimationFrame(animateScroll);
});




/* =============================================

  LAZY LOAD VIDEOS

================================================ */


/* -------- Configure data attributes for serving small or large videos based on screen size */

// Select all '.desktop video' elements
const desktopVideos = document.querySelectorAll('.desktop video');

// Set or rename data attribute based on window size
desktopVideos.forEach(videoDesktop => {
  if (window.matchMedia("(min-width: 800px)").matches) {
    videoDesktop.removeAttribute('data-mobile');
  } else if (window.matchMedia("(max-width: 799px)").matches) {
    const mobileDataValue = videoDesktop.getAttribute('data-mobile');
    videoDesktop.removeAttribute('data-mobile');
    videoDesktop.setAttribute('data-src', mobileDataValue);
  }
});


/* -------- Detect element and configure data-src */

var lazyLoadInstance = new LazyLoad({
  thresholds: "140%", // maps to rootMargin
  callback_enter: (el)=>{console.log("Lazy has entered");}
});
lazyLoadInstance.update();
/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

document.addEventListener('DOMContentLoaded', () => {
  const html = document.documentElement;
  const header = document.getElementById('site-header');
	const hamburger = document.getElementById('hamburger');

  const toggleMenu = () => {
    // Toggle aria-expanded
    const isExpanded =
      hamburger.getAttribute('aria-expanded') === 'true';
    hamburger.setAttribute('aria-expanded', !isExpanded);

    // Toggle menu visibility
    if (isExpanded) {
      // // Hide menu
      // siteNavigation.classList.add('max-lg:translate-x-[-150%]');
      // siteNavigation.classList.remove('max-lg:translate-x-[0]');
      // // Add visibility hidden after transition completes
      // setTimeout(() => {
      //   siteNavigation.classList.add('max-lg:invisible');
      // }, 300); // Match the transition duration

      // Remove open class from menu button
      hamburger.classList.remove('nav-open');
    } else {
      // Show menu
      // siteNavigation.classList.remove('max-lg:invisible');
      // siteNavigation.classList.remove('max-lg:translate-x-[-150%]');
      // siteNavigation.classList.add('max-lg:translate-x-[0]');

      // Add open class to menu button
      hamburger.classList.add('nav-open');
    }

    // Add overflow to HTML element
    html.classList.toggle('overflow-hidden');

    // Recalculate height when menu is toggled
    // if (window.innerWidth < 1024) {
    //   updateNavHeight();
    // }
  }

  // Header scroll glass effect
  window.addEventListener('scroll', () => {
    console.log("sio")
    header.classList.toggle('header-scrolled', window.scrollY > 40);
  });

  // Mobile menu toggle functionality
  hamburger.addEventListener('click', toggleMenu);
})


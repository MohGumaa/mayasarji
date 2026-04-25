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
  // Header scroll glass effect
  const header = document.getElementById('site-header');
  window.addEventListener('scroll', () => {
    console.log("sio")
    header.classList.toggle('header-scrolled', window.scrollY > 40);
  });


})


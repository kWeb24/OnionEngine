<div id='loader'>
  <div class="spinner"></div>
</div>

<script>
  window.addEventListener('load', () => {
    const loader = document.getElementById('loader');
    setTimeout(() => {
      loader.classList.add('fadeOut');
    }, 300);
  });
</script>

const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// ustaw motyw na podstawie wartości z localStorage (jeśli istnieje), a jeśli nie ma, to sprawdź preferencję przeglądarki
if (localStorage.getItem('theme') === 'light') {
    themeToggleDarkIcon.classList.remove('hidden');
    document.documentElement.classList.remove('dark');
} else if (localStorage.getItem('theme') === 'dark') {
    themeToggleLightIcon.classList.remove('hidden');
    document.documentElement.classList.add('dark');
} else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
    themeToggleDarkIcon.classList.remove('hidden');
    document.documentElement.classList.remove('dark');
} else {
    themeToggleLightIcon.classList.remove('hidden');
    document.documentElement.classList.add('dark');
}

const themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // zmień motyw i zapisz preferencję do localStorage
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    }
});
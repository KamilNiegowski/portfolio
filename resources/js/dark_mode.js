const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// ustaw motyw na podstawie wartości z localStorage (jeśli istnieje), a jeśli nie ma, to sprawdź preferencję przeglądarki
if (localStorage.getItem('theme') === 'light') {
    themeToggleDarkIcon.classList.remove('hidden');
    document.documentElement.classList.remove('dark');
    document.documentElement.classList.add('light');
} else if (localStorage.getItem('theme') === 'dark') {
    themeToggleLightIcon.classList.remove('hidden');
    document.documentElement.classList.add('dark');
    document.documentElement.classList.remove('light');
} else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
    themeToggleDarkIcon.classList.remove('hidden');
    document.documentElement.classList.remove('dark');
    document.documentElement.classList.add('light');
} else {
    themeToggleLightIcon.classList.remove('hidden');
    document.documentElement.classList.add('dark');
    document.documentElement.classList.remove('light');
}

const themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // zmień motyw i zapisz preferencję do localStorage
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        document.documentElement.classList.add('light');
        localStorage.setItem('theme', 'light');
    } else {
        document.documentElement.classList.remove('light');
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    }
});
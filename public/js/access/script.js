document.getElementById('entrarButton').addEventListener('click', function() {
    document.getElementById('section1').classList.remove('visible');
    document.getElementById('section1').classList.add('hidden');
    document.getElementById('section2').classList.remove('hidden');
    document.getElementById('section2').classList.add('visible');
});


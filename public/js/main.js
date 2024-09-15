document.getElementById('playButton').addEventListener('click', function() {
    var video = document.getElementById('video');
    var overlay = document.getElementById('videoOverlay');

    video.play();
    overlay.style.display = 'none';
});

document.getElementById('video').addEventListener('play', function() {
    var overlay = document.getElementById('videoOverlay');
    overlay.style.display = 'none';
});

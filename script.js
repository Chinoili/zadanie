function showNotification(message, type) {
    var notification = document.getElementById('notification');
    notification.classList.remove('success', 'error');
    notification.classList.add(type);
    notification.textContent = message;
    notification.style.display = 'block'; 
}

document.getElementById('ratingForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var rating = document.getElementById('rating').value;
    var feedback = document.getElementById('feedback').value;

    if (rating === "") {
        showNotification("Proszę wybrać ocenę!", "error");
        return;
    }
    showNotification("Dziękujemy za opinię!", "success");

    document.getElementById('ratingForm').reset();
});
document.addEventListener('DOMContentLoaded', function() {
    const foldableTitles = document.querySelectorAll('.foldable-title');
    
    foldableTitles.forEach(title => {
        title.addEventListener('click', function() {
            this.classList.toggle('collapsed');
            const content = this.nextElementSibling;
            content.classList.toggle('collapsed');
        });
    });
}); 
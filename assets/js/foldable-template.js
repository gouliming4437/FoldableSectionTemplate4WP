document.addEventListener('DOMContentLoaded', function() {
    const foldableTitles = document.querySelectorAll('.foldable-title');
    
    foldableTitles.forEach(title => {
        const content = title.nextElementSibling;
        // Initially collapse all sections
        title.classList.add('collapsed');
        content.classList.add('collapsed');
        content.style.maxHeight = '0';

        title.addEventListener('click', function() {
            this.classList.toggle('collapsed');
            const content = this.nextElementSibling;
            
            if (!this.classList.contains('collapsed')) {
                // Opening the section
                content.classList.remove('collapsed');
                content.style.maxHeight = content.scrollHeight + 'px';
            } else {
                // Closing the section
                content.classList.add('collapsed');
                content.style.maxHeight = '0';
            }
        });
    });
}); 
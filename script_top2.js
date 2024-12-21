document.addEventListener('DOMContentLoaded', () => {
    const projects = document.querySelectorAll('.project');
    const modals = document.querySelectorAll('.modal');
    const closeButtons = document.querySelectorAll('.close');

    projects.forEach(project => {
        project.addEventListener('click', () => {
            const id = project.getAttribute('data-id');
            const modal = document.getElementById(`modal-${id}`);
            modal.style.display = 'flex';
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const modal = document.getElementById(`modal-${id}`);
            modal.style.display = 'none';
        });
    });

    window.addEventListener('click', (e) => {
        modals.forEach(modal => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    });
});


    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            document.querySelector(".preloader").style.display = "none";
            document.querySelector(".content").style.display = "block";
            document.body.style.overflow = "auto";
        }, 2000); 
    });


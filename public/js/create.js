// public/js/create.js

document.getElementById('create-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);

    axios.post('/api/libros', formData)
        .then(response => {
            alert('Libro creado con éxito');
            window.location.href = 'index.php';
        })
        .catch(error => {
            console.error('Hubo un error:', error);
        });
});

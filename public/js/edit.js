// public/js/edit.js

document.getElementById('edit-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);

    axios.put(`/api/libros/${formData.get('id')}`, formData)
        .then(response => {
            alert('Libro actualizado con éxito');
            window.location.href = 'index.php';
        })
        .catch(error => {
            console.error('Hubo un error:', error);
        });
});
